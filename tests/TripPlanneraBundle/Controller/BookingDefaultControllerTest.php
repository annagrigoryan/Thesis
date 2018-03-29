<?php

namespace Tests\TripPlanneraBundle\Controller;

use BookingBundle\Controller\DefaultController;
use TripPlanneraBundle\Document\Coordinates;
use TripPlanneraBundle\Document\Location;

class BookingDefaultControllerTest extends \PHPUnit_Framework_TestCase
{
    protected $bookingController;

    public function setUp()
    {
        $this->bookingController = new DefaultController();
    }

    public function testMapHotelTypeTaxonomyData()
    {
        $categoryData = [
            'name' => 'asd',
            'translations' => [
                [
                    'name' => 'asd',
                    'language' => 'en'
                ]
            ],
            'hotel_type_id' => 4
        ];

        $result = $this->bookingController->mapHotelTypeTaxonomyData($categoryData);
        $expected = [
            'bookingId' => 4,
            'rawData' => ['booking' => $categoryData],
            'externalData' => ['bookingIds' => [4]],
            'title' => 'asd',
            'taxonomyType' => 'hotelType'
        ];
        $this->assertEquals($result, $expected);
    }

    public function testMapData()
    {
        $entityData = [
            'hotel_id' => 1,
            'hotel_data' => [
                'number_of_reviews' => 54,
                'name' => 'Courtyard New York',
                'location' => [
                    "latitude" => 4.3,
                    "longitude" => 7.9
                ],
                'review_score' => 5.4
            ]
        ];

        $coordinates = new Coordinates();
        $coordinates->setLatitude($entityData['hotel_data']['location']['latitude']);
        $coordinates->setLongitude($entityData['hotel_data']['location']['longitude']);
        $location = new Location();

        $mock = $this->getMockBuilder(DefaultController::class)
            ->setMethods(['mapHotelTypeIds'])
            ->getMock();

        $mock->expects($this->once())
            ->method('mapHotelTypeIds')
            ->willReturn('142');


        $result = $mock->mapData($entityData, $location, $entity = null);
        $expected = [
            'rawData' => [
                'booking' => [
                    'hotel_id' => 1,
                    'hotel_data' => [
                        'number_of_reviews' => 54,
                        'name' => 'Courtyard New York',
                        'review_score' => 5.4,
                        'location' => $entityData['hotel_data']['location']
                    ]
                ]
            ],
            'externalData' => ['bookingIds' => [1]],
            'name' => 'Courtyard New York',
            'bookingId' => 1,
            'locationId' => $location->getId(),
            'images' => [],
            'bookingMainImage' => null,
            'coordinates' => $coordinates,
            'rating' => 5.4,
            'reviewsCount' => 54,
            'hotelTypeIds' => '142'
        ];
        $this->assertEquals($expected, $result);
    }

    public function testMapMainImageData()
    {
        $entityData = [
            'hotel_data' => [
                'hotel_photos' => [
                    [
                        'url_original' => 'https://aff.bstatic.com/images/hotel/max500/129/129818513.jpg'
                    ]
                ]
            ],
        ];

        $result = $this->bookingController->mapMainImageData($entityData);
        $expected = [
            'originalUrl' => 'https://aff.bstatic.com/images/hotel/max1024x768/129/129818513.jpg',
            'source' => 'booking'
        ];
        $this->assertEquals($result, $expected);
    }

    public function testMapImagesData()
    {
        $entityData = [
            'hotel_data' => [
                'hotel_photos' => [
                    [
                        'url_original' => 'https://aff.bstatic.com/images/hotel/max500/129/129818513.jpg'
                    ]
                ]
            ],
        ];

        $result = $this->bookingController->mapImagesData($entityData);
        $expected = [
            ['originalUrl' => 'https://aff.bstatic.com/images/hotel/max1024x768/129/129818513.jpg',
                'rawData' => [
                    'booking' => [
                        'url_original' => 'https://aff.bstatic.com/images/hotel/max500/129/129818513.jpg',
                    ]
                ],
                'source' => 'booking',
            ]
        ];

        $this->assertEquals($result, $expected);
    }

    public function testMapImageData()
    {
        $entityData = [
            'url_original' => 'https://aff.bstatic.com/images/hotel/max500/129/129818513.jpg'
        ];

        $result = $this->bookingController->mapImageData($entityData);
        $expected = [
            'originalUrl' => 'https://aff.bstatic.com/images/hotel/max1024x768/129/129818513.jpg',
            'source' => 'booking',
            'rawData' => [
                'booking' => [
                    'url_original' => 'https://aff.bstatic.com/images/hotel/max500/129/129818513.jpg',
                ]
            ],
        ];
        $this->assertEquals($expected, $result);
    }
}
