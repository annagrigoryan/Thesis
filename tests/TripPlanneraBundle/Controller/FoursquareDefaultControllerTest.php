<?php

namespace Test\TripplanneraBundle\Controller;

use FoursquareBundle\Controller\DefaultController;
use TripPlanneraBundle\Document\BaseEntity;
use TripPlanneraBundle\Document\Coordinates;
use TripPlanneraBundle\Document\Location;
use TripPlanneraBundle\Service\HoursService;

class FoursquareDefaultControllerTest extends \PHPUnit_Framework_TestCase
{
    private $foursquareDefaultController;

    public function setUp()
    {
        $this->foursquareDefaultController = new DefaultController();
    }

    public function testMapData()
    {
        $imageData = [
            'prefix' => 'start',
            'suffix' => 'end'
        ];
        $venue = [
            'id' => '123',
            'name' => 'Hofbräuhaus',
            'contact' => [
                'phone' => '65465',
                'facebookName' => 'hotel'
            ],
            'location' => [
                'lng' => 4.777,
                'lat' => 87.55,
                'address' => '444',
                'neighborhood' => 'neighborhood',
                'postalCode' => 418
            ],
            'url' => 'https://fours.com',
            'photos' => [
                'groups' => [
                    [
                        'items' =>
                            [
                                $imageData
                            ]
                    ]
                ]
            ],
            'menu' => [
                'url' => 'https://trip.com',
                'mobileUrl' => 'fb.com'
            ],
            'hours' => [
                'timeframes' =>
                    [
                        [
                            "days" => "Mon–Tue",
                            "open" =>
                                [
                                    [
                                        "renderedTime" => "8:30 AM–Midnight",
                                    ],
                                ]
                        ]
                    ]
            ],

        ];

        $entity = new BaseEntity();
        $entity->setAddress('555');
        $entity->setCoordinates(new Coordinates());
        $entity->setName('asd');
        $location = new Location();

        $entityData = ['venue' => $venue];

        $result = $this->foursquareDefaultController->mapData($entityData, $location, $entity);

        $imageDataMapped = [];
        $imageDataMapped['originalUrl'] = $imageData['prefix'] . 'original' . $imageData['suffix'];
        $imageDataMapped['rawData']['foursquare'] = $imageData;
        $imageDataMapped['source'] = 'foursquare';

        $expectedVenue = $venue;
        unset($expectedVenue['photos']);
        $expected = [
            'foursquareId' => '123',
            'rawData' => ['foursquare' => $expectedVenue],
            'externalData' => ['foursquareIds' => [$venue['id']]],
            'locationId' => $location->getId(),
            'images' => [$imageDataMapped],
            'foursquareMainImage' => $imageDataMapped
        ];
        $this->assertEquals($expected, $result);


        $entity = new BaseEntity();
        $location = new Location();

        $bestImageData = [
            'prefix' => 'aaa',
            'suffix' => 'bbb'
        ];
        $venue['bestPhoto'] = $bestImageData;
        $entityData = ['venue' => $venue];
        $coordinates = new Coordinates();
        $coordinates->setLatitude($entityData['venue']['location']['lat']);
        $coordinates->setLongitude($entityData['venue']['location']['lng']);

        $result = $this->foursquareDefaultController->mapData($entityData, $location, $entity);

        $expectedVenue = $venue;
        unset($expectedVenue['photos']);

        $bestImageDataMapped = [];
        $bestImageDataMapped['originalUrl'] = $bestImageData['prefix'] . 'original' . $bestImageData['suffix'];
        $bestImageDataMapped['rawData']['foursquare'] = $bestImageData;
        $bestImageDataMapped['source'] = 'foursquare';

        $expected = [
            'foursquareId' => '123',
            'rawData' => ['foursquare' => $expectedVenue],
            'externalData' => ['foursquareIds' => [$venue['id']]],
            'locationId' => $location->getId(),
            'images' => [$imageDataMapped],
            'foursquareMainImage' => $bestImageDataMapped
        ];

        $this->assertEquals($expected, $result);

    }

    public function testMapImageData()
    {
        $imageData = [
            "prefix" => 'abc',
            "suffix" => 'def'
        ];
        $expected = [];
        $expected['originalUrl'] = $imageData['prefix'] . 'original' . $imageData['suffix'];;
        $expected['rawData']['foursquare'] = $imageData;
        $expected['source'] = 'foursquare';

        $result = $this->foursquareDefaultController->mapImageData($imageData);
        $this->assertEquals($expected, $result);

        $imageData = [
            'id' => 123,
            'name' => 'asd'
        ];
        $expected = null;
        $result = $this->foursquareDefaultController->mapImageData($imageData);
        $this->assertEquals($expected, $result);

    }

    public function testMapImagesData()
    {
        $imageData = [
            "prefix" => 'abc',
            "suffix" => 'def'
        ];
        $imageData2 = [
            "prefix" => 'abc2',
            "suffix" => 'def2'
        ];
        $expected = [];
        $expected['originalUrl'] = $imageData['prefix'] . 'original' . $imageData['suffix'];;
        $expected['rawData']['foursquare'] = $imageData;
        $expected['source'] = 'foursquare';

        $expected2 = [];
        $expected2['originalUrl'] = $imageData2['prefix'] . 'original' . $imageData2['suffix'];;
        $expected2['rawData']['foursquare'] = $imageData2;
        $expected2['source'] = 'foursquare';

        $entityData = [
            'photos' => [
                'groups' => [
                    [
                        'items' => [
                            $imageData,
                            $imageData2
                        ]
                    ]
                ]
            ]
        ];
        $expectedItems = [
            $expected,
            $expected2
        ];
        $result = $this->foursquareDefaultController->mapImagesData($entityData);
        $this->assertEquals($expectedItems, $result);

        $entityData = [
            'id' => 123,
            'name' => 'asd'
        ];
        $expected = [];
        $result = $this->foursquareDefaultController->mapImagesData($entityData);
        $this->assertEquals($expected, $result);


    }

    public function testMapMainImageData()
    {
        $imageData = [
            "prefix" => 'abc',
            "suffix" => 'def'
        ];
        $imageData2 = [
            "prefix" => 'abc2',
            "suffix" => 'def2'
        ];
        $bestImageData = [
            "prefix" => 'https://igx.4sqi.net/img/general/',
            "suffix" => '37901625_4-clMD2Ed_LL3xjVNoBCOP0lIIwLRAIgmVAO8JBlpTU.jpg'
        ];
        $expected = [];
        $expected['originalUrl'] = $imageData['prefix'] . 'original' . $imageData['suffix'];;
        $expected['rawData']['foursquare'] = $imageData;
        $expected['source'] = 'foursquare';

        $expected2 = [];
        $expected2['originalUrl'] = $imageData2['prefix'] . 'original' . $imageData2['suffix'];;
        $expected2['rawData']['foursquare'] = $imageData2;
        $expected2['source'] = 'foursquare';

        $expectedBestImage = [];
        $expectedBestImage['originalUrl'] = $bestImageData['prefix'] . 'original' . $bestImageData['suffix'];;
        $expectedBestImage['rawData']['foursquare'] = $bestImageData;
        $expectedBestImage['source'] = 'foursquare';

        $entityData = [
            'photos' => [
                'groups' => [
                    [
                        'items' => [
                            $imageData,
                            $imageData2
                        ]
                    ]
                ]
            ]
        ];

        $result = $this->foursquareDefaultController->mapMainImageData($entityData);
        $this->assertEquals($expected, $result);

        $entityData['bestPhoto'] = $bestImageData;

        $result = $this->foursquareDefaultController->mapMainImageData($entityData);

        $this->assertEquals($expectedBestImage, $result);

        $entityData = [
            'id' => 123,
            'name' => 'asd'
        ];
        $expected = null;
        $result = $this->foursquareDefaultController->mapMainImageData($entityData);
        $this->assertEquals($expected, $result);


    }

}