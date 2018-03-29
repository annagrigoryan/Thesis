<?php

namespace Tests\TiqetsBundle\Controller;

use TripPlanneraBundle\Document\Coordinates;
use TripPlanneraBundle\Document\Location;
use TiqetsBundle\Controller\DefaultController;

class DefaultControllerTest extends \PHPUnit_Framework_TestCase
{
    private $defaultController;

    public function setUp()
    {
        $this->defaultController = new DefaultController();
    }

    public function testMapData()
    {
        $entityData = [
            'city_id' => '71631',
            'city_name' => 'Rome',
            'country_id' => '50109',
            'country_name' => 'Italy',
            'geolocation' => [
                'lat' => 41.8902102,
                'lng' => 12.4922309,
            ],
            'id' => '974371',
            'images' => [
                0 => [
                    'credits' => '',
                    'large' => 'https://aws-tiqets-cdn.imgix.net/images/content/da9b3ba05da349d5a52f1d0ab4a3f6a6.jpg?auto=format&fit=crop&h=500&ixlib=python-1.1.2&q=70&w=500&s=b6d745d0e53bb3326a3790c2dc0438b9',
                    'medium' => 'https://aws-tiqets-cdn.imgix.net/images/content/da9b3ba05da349d5a52f1d0ab4a3f6a6.jpg?auto=format&fit=crop&h=250&ixlib=python-1.1.2&q=70&w=250&s=e6cdb252bca20c8e39ce679f1b76f940',
                    'small' => 'hhttps://aws-tiqets-cdn.imgix.net/images/content/da9b3ba05da349d5a52f1d0ab4a3f6a6.jpg?auto=format&fit=crop&h=128&ixlib=python-1.1.2&q=70&w=128&s=3b2aa7dd5e03703fbd2462a34035b13b'
                ],
                1 => [
                    'credits' => 'Luxerendering / Shutterstock',
                    'large' => 'https://aws-tiqets-cdn.imgix.net/images/content/740c8200d2ae4272859c376c123ba78d.jpg?auto=format&fit=crop&h=500&ixlib=python-1.1.2&q=70&w=500&s=da3ef1ba8160251740e22fb6c77b8fe7',
                    'medium' => 'https://aws-tiqets-cdn.imgix.net/images/content/740c8200d2ae4272859c376c123ba78d.jpg?auto=format&fit=crop&h=250&ixlib=python-1.1.2&q=70&w=250&s=3a0eb95a24d341c335736928a13ff8f6',
                    'small' => 'https://aws-tiqets-cdn.imgix.net/images/content/740c8200d2ae4272859c376c123ba78d.jpg?auto=format&fit=crop&h=128&ixlib=python-1.1.2&q=70&w=128&s=2aacc53488b88ff1b08c5ba6d6f0b6af'
                ]
            ],
            'language' => 'en',
            'languages' => [
                0 => 'de',
                1 => 'en',
                2 => 'es',
                3 => 'fr',
                4 => 'it',
            ],
            'price' => 24.84,
            'product_checkout_url' => 'https://www.tiqets.com/en/rome-c71631/colosseum-skip-the-line-p974371/goto_checkout?partner=tripplannera',
            'product_url' => 'https://www.tiqets.com/en/rome-c71631/colosseum-skip-the-line-p974371?partner=tripplannera',
            'ratings' => [
                'average' => 4.5,
                'total' => 1052
            ],
            'sale_status' => 'available',
            'tag_ids' => [
                0 => '327'
            ],
            'tagline' => 'The fastest way into this iconic Roman monument created 2,000 years ago',
            'title' => 'Colosseum: Skip The Line',
            'venue' => [
                'address' => 'Piazza del Colosseo 1, 00184',
                'id' => '145769',
                'name' => 'Colosseum'
            ]
        ];

        $location = new Location();
        $location->setName('Rome');

        $getTourAttractions = [
            'ourIds' => [
                0 => '56d6686d449ec1f4080004a6'
            ]
        ];

        $coordinates = new Coordinates();
        $coordinates->setLatitude(41.8902102);
        $coordinates->setLongitude(12.4922309);

        $mapImagesData = [
            0 => [
                'originalUrl' => 'https://aws-tiqets-cdn.imgix.net/images/content/da9b3ba05da349d5a52f1d0ab4a3f6a6.jpg?auto=format&fit=crop&h=1000&ixlib=python-1.1.2&q=70&w=2000&s=b6d745d0e53bb3326a3790c2dc0438b9',
                'rawData' => [
                    'tiqets' => [
                        'credits' => '',
                        'large' => 'https://aws-tiqets-cdn.imgix.net/images/content/da9b3ba05da349d5a52f1d0ab4a3f6a6.jpg?auto=format&fit=crop&h=1000&ixlib=python-1.1.2&q=70&w=2000&s=b6d745d0e53bb3326a3790c2dc0438b9',
                        'medium' => 'https://aws-tiqets-cdn.imgix.net/images/content/da9b3ba05da349d5a52f1d0ab4a3f6a6.jpg?auto=format&fit=crop&h=250&ixlib=python-1.1.2&q=70&w=250&s=e6cdb252bca20c8e39ce679f1b76f940',
                        'small' => 'hhttps://aws-tiqets-cdn.imgix.net/images/content/da9b3ba05da349d5a52f1d0ab4a3f6a6.jpg?auto=format&fit=crop&h=128&ixlib=python-1.1.2&q=70&w=128&s=3b2aa7dd5e03703fbd2462a34035b13b'
                    ]
                ],
                'source' => 'tiqets'
            ],
            1 => [
                'originalUrl' => 'https://aws-tiqets-cdn.imgix.net/images/content/740c8200d2ae4272859c376c123ba78d.jpg?auto=format&fit=crop&h=1000&ixlib=python-1.1.2&q=70&w=2000&s=da3ef1ba8160251740e22fb6c77b8fe7',
                'rawData' => [
                    'tiqets' => [
                        'credits' => 'Luxerendering / Shutterstock',
                        'large' => 'https://aws-tiqets-cdn.imgix.net/images/content/740c8200d2ae4272859c376c123ba78d.jpg?auto=format&fit=crop&h=1000&ixlib=python-1.1.2&q=70&w=2000&s=da3ef1ba8160251740e22fb6c77b8fe7',
                        'medium' => 'https://aws-tiqets-cdn.imgix.net/images/content/740c8200d2ae4272859c376c123ba78d.jpg?auto=format&fit=crop&h=250&ixlib=python-1.1.2&q=70&w=250&s=3a0eb95a24d341c335736928a13ff8f6',
                        'small' => 'https://aws-tiqets-cdn.imgix.net/images/content/740c8200d2ae4272859c376c123ba78d.jpg?auto=format&fit=crop&h=128&ixlib=python-1.1.2&q=70&w=128&s=2aacc53488b88ff1b08c5ba6d6f0b6af'
                    ]
                ],
                'source' => 'tiqets'
            ]
        ];
        $expected = [
            'rawData' => [
                'tiqets' => [
                    'city_id' => '71631',
                    'city_name' => 'Rome',
                    'country_id' => '50109',
                    'country_name' => 'Italy',
                    'geolocation' => [
                        'lat' => 41.8902102,
                        'lng' => 12.4922309,
                    ],
                    'id' => '974371',
                    'language' => 'en',
                    'languages' => [
                        0 => 'de',
                        1 => 'en',
                        2 => 'es',
                        3 => 'fr',
                        4 => 'it',
                    ],
                    'price' => 24.84,
                    'product_checkout_url' => 'https://www.tiqets.com/en/rome-c71631/colosseum-skip-the-line-p974371/goto_checkout?partner=tripplannera',
                    'product_url' => 'https://www.tiqets.com/en/rome-c71631/colosseum-skip-the-line-p974371?partner=tripplannera',
                    'ratings' => [
                        'average' => 4.5,
                        'total' => 1052
                    ],
                    'sale_status' => 'available',
                    'tag_ids' => [
                        0 => '327'
                    ],
                    'tagline' => 'The fastest way into this iconic Roman monument created 2,000 years ago',
                    'title' => 'Colosseum: Skip The Line',
                    'venue' => [
                        'address' => 'Piazza del Colosseo 1, 00184',
                        'id' => '145769',
                        'name' => 'Colosseum'
                    ]
                ]
            ],
            'tiqetsId' => '974371',
            'externalData' => [
                'tiqetsIds' => [
                    0 => '974371'
                ]
            ],
            'name' => 'Colosseum: Skip The Line',
            'attractionIds' => [
                0 => '56d6686d449ec1f4080004a6'
            ],
            'attractionIdsInTour' => [
                0 => '56d6686d449ec1f4080004a6'
            ],
            'coordinates' => $coordinates,
            'locationId' => null,
            'images' => [
                0 => [
                    'originalUrl' => "https://aws-tiqets-cdn.imgix.net/images/content/da9b3ba05da349d5a52f1d0ab4a3f6a6.jpg?auto=format&fit=crop&h=1000&ixlib=python-1.1.2&q=70&w=2000&s=b6d745d0e53bb3326a3790c2dc0438b9",
                    'rawData' => [
                        'tiqets' => [
                            'credits' => '',
                            'large' => 'https://aws-tiqets-cdn.imgix.net/images/content/da9b3ba05da349d5a52f1d0ab4a3f6a6.jpg?auto=format&fit=crop&h=1000&ixlib=python-1.1.2&q=70&w=2000&s=b6d745d0e53bb3326a3790c2dc0438b9',
                            'medium' => 'https://aws-tiqets-cdn.imgix.net/images/content/da9b3ba05da349d5a52f1d0ab4a3f6a6.jpg?auto=format&fit=crop&h=250&ixlib=python-1.1.2&q=70&w=250&s=e6cdb252bca20c8e39ce679f1b76f940',
                            'small' => 'hhttps://aws-tiqets-cdn.imgix.net/images/content/da9b3ba05da349d5a52f1d0ab4a3f6a6.jpg?auto=format&fit=crop&h=128&ixlib=python-1.1.2&q=70&w=128&s=3b2aa7dd5e03703fbd2462a34035b13b'
                        ]

                    ],
                    'source' => 'tiqets'

                ],
                1 => [
                    'originalUrl' => 'https://aws-tiqets-cdn.imgix.net/images/content/740c8200d2ae4272859c376c123ba78d.jpg?auto=format&fit=crop&h=1000&ixlib=python-1.1.2&q=70&w=2000&s=da3ef1ba8160251740e22fb6c77b8fe7',
                    'rawData' => [
                        'tiqets' => [
                            'credits' => 'Luxerendering / Shutterstock',
                            'large' => 'https://aws-tiqets-cdn.imgix.net/images/content/740c8200d2ae4272859c376c123ba78d.jpg?auto=format&fit=crop&h=1000&ixlib=python-1.1.2&q=70&w=2000&s=da3ef1ba8160251740e22fb6c77b8fe7',
                            'medium' => 'https://aws-tiqets-cdn.imgix.net/images/content/740c8200d2ae4272859c376c123ba78d.jpg?auto=format&fit=crop&h=250&ixlib=python-1.1.2&q=70&w=250&s=3a0eb95a24d341c335736928a13ff8f6',
                            'small' => 'https://aws-tiqets-cdn.imgix.net/images/content/740c8200d2ae4272859c376c123ba78d.jpg?auto=format&fit=crop&h=128&ixlib=python-1.1.2&q=70&w=128&s=2aacc53488b88ff1b08c5ba6d6f0b6af'
                        ]

                    ],
                    'source' => 'tiqets'
                ]
            ],
            'tiqetsMainImage' => [
                'originalUrl' => 'https://aws-tiqets-cdn.imgix.net/images/content/da9b3ba05da349d5a52f1d0ab4a3f6a6.jpg?auto=format&fit=crop&h=1000&ixlib=python-1.1.2&q=70&w=2000&s=b6d745d0e53bb3326a3790c2dc0438b9',
                'rawData' => [
                    'tiqets' => [

                    ]
                ],
                'source' => 'tiqets'
            ],
            'rating' => 4.5,
            'reviewsCount' => 1052
        ];

        $mock = $this->getMockBuilder(DefaultController::class)
            ->setMethods(['getTourAttractions', 'mapImagesData'])
            ->getMock();

        $mock->expects($this->any())
            ->method('getTourAttractions')
            ->willReturn($getTourAttractions);

        $mock->expects($this->any())
            ->method('mapImagesData')
            ->willReturn($mapImagesData);

        $this->assertEquals($expected, $mock->mapData($entityData, $location));

    }

    public function testMapImagesData()
    {
        $entityData = [
            'city_id' => '71631',
            'city_name' => 'Rome',
            'country_id' => '50109',
            'country_name' => 'Italy',
            'geolocation' => [
                'lat' => 41.8902102,
                'lng' => 12.4922309,
            ],
            'id' => '974371',
            'images' => [
                0 => [
                    'credits' => '',
                    'large' => 'https://aws-tiqets-cdn.imgix.net/images/content/da9b3ba05da349d5a52f1d0ab4a3f6a6.jpg?auto=format&fit=crop&h=500&ixlib=python-1.1.2&q=70&w=500&s=b6d745d0e53bb3326a3790c2dc0438b9',
                    'medium' => 'https://aws-tiqets-cdn.imgix.net/images/content/da9b3ba05da349d5a52f1d0ab4a3f6a6.jpg?auto=format&fit=crop&h=250&ixlib=python-1.1.2&q=70&w=250&s=e6cdb252bca20c8e39ce679f1b76f940',
                    'small' => 'hhttps://aws-tiqets-cdn.imgix.net/images/content/da9b3ba05da349d5a52f1d0ab4a3f6a6.jpg?auto=format&fit=crop&h=128&ixlib=python-1.1.2&q=70&w=128&s=3b2aa7dd5e03703fbd2462a34035b13b'
                ]
            ],
            'language' => 'en',
            'languages' => [
                0 => 'de',
                1 => 'en',
                2 => 'es',
                3 => 'fr',
                4 => 'it',
            ],
            'price' => 24.84,
            'product_checkout_url' => 'https://www.tiqets.com/en/rome-c71631/colosseum-skip-the-line-p974371/goto_checkout?partner=tripplannera',
            'product_url' => 'https://www.tiqets.com/en/rome-c71631/colosseum-skip-the-line-p974371?partner=tripplannera',
            'ratings' => [
                'average' => 4.5,
                'total' => 1052
            ],
            'sale_status' => 'available',
            'tag_ids' => [
                0 => '327'
            ],
            'tagline' => 'The fastest way into this iconic Roman monument created 2,000 years ago',
            'title' => 'Colosseum: Skip The Line',
            'venue' => [
                'address' => 'Piazza del Colosseo 1, 00184',
                'id' => '145769',
                'name' => 'Colosseum'
            ]
        ];

        $mapImagesData = [
            'originalUrl' => "https://aws-tiqets-cdn.imgix.net/images/content/da9b3ba05da349d5a52f1d0ab4a3f6a6.jpg?auto=format&fit=crop&h=1000&ixlib=python-1.1.2&q=70&w=2000&s=b6d745d0e53bb3326a3790c2dc0438b9",
            'rawData' => [
                'tiqets' => [
                    'credits' => '',
                    'large' => 'https://aws-tiqets-cdn.imgix.net/images/content/da9b3ba05da349d5a52f1d0ab4a3f6a6.jpg?auto=format&fit=crop&h=1000&ixlib=python-1.1.2&q=70&w=2000&s=b6d745d0e53bb3326a3790c2dc0438b9',
                    'medium' => 'https://aws-tiqets-cdn.imgix.net/images/content/da9b3ba05da349d5a52f1d0ab4a3f6a6.jpg?auto=format&fit=crop&h=250&ixlib=python-1.1.2&q=70&w=250&s=e6cdb252bca20c8e39ce679f1b76f940',
                    'small' => 'hhttps://aws-tiqets-cdn.imgix.net/images/content/da9b3ba05da349d5a52f1d0ab4a3f6a6.jpg?auto=format&fit=crop&h=128&ixlib=python-1.1.2&q=70&w=128&s=3b2aa7dd5e03703fbd2462a34035b13b'
                ]

            ],
            'source' => 'tiqets'
        ];

        $expected = [
            0 => [
                'originalUrl' => "https://aws-tiqets-cdn.imgix.net/images/content/da9b3ba05da349d5a52f1d0ab4a3f6a6.jpg?auto=format&fit=crop&h=1000&ixlib=python-1.1.2&q=70&w=2000&s=b6d745d0e53bb3326a3790c2dc0438b9",
                'rawData' => [
                    'tiqets' => [
                        'credits' => '',
                        'large' => 'https://aws-tiqets-cdn.imgix.net/images/content/da9b3ba05da349d5a52f1d0ab4a3f6a6.jpg?auto=format&fit=crop&h=1000&ixlib=python-1.1.2&q=70&w=2000&s=b6d745d0e53bb3326a3790c2dc0438b9',
                        'medium' => 'https://aws-tiqets-cdn.imgix.net/images/content/da9b3ba05da349d5a52f1d0ab4a3f6a6.jpg?auto=format&fit=crop&h=250&ixlib=python-1.1.2&q=70&w=250&s=e6cdb252bca20c8e39ce679f1b76f940',
                        'small' => 'hhttps://aws-tiqets-cdn.imgix.net/images/content/da9b3ba05da349d5a52f1d0ab4a3f6a6.jpg?auto=format&fit=crop&h=128&ixlib=python-1.1.2&q=70&w=128&s=3b2aa7dd5e03703fbd2462a34035b13b'
                    ]

                ],
                'source' => 'tiqets'
            ]
        ];

        $mock = $this->getMockBuilder(DefaultController::class)
            ->setMethods(['getTourAttractions', 'mapImageData'])
            ->getMock();

        $mock->expects($this->any())
            ->method('mapImageData')
            ->willReturn($mapImagesData);

        $this->assertEquals($expected, $mock->mapImagesData($entityData));
    }

    public function testMapImageData()
    {
        $imageData = [
            'credits' => '',
            'large' => 'https://aws-tiqets-cdn.imgix.net/images/content/da9b3ba05da349d5a52f1d0ab4a3f6a6.jpg?auto=format&fit=crop&h=1000&ixlib=python-1.1.2&q=70&w=2000&s=b6d745d0e53bb3326a3790c2dc0438b9',
            'medium' => 'https://aws-tiqets-cdn.imgix.net/images/content/da9b3ba05da349d5a52f1d0ab4a3f6a6.jpg?auto=format&fit=crop&h=250&ixlib=python-1.1.2&q=70&w=250&s=e6cdb252bca20c8e39ce679f1b76f940',
            'small' => 'hhttps://aws-tiqets-cdn.imgix.net/images/content/da9b3ba05da349d5a52f1d0ab4a3f6a6.jpg?auto=format&fit=crop&h=128&ixlib=python-1.1.2&q=70&w=128&s=3b2aa7dd5e03703fbd2462a34035b13b'
        ];

        $expected = [
            'originalUrl' => "https://aws-tiqets-cdn.imgix.net/images/content/da9b3ba05da349d5a52f1d0ab4a3f6a6.jpg?auto=format&fit=crop&h=1000&ixlib=python-1.1.2&q=70&w=2000&s=b6d745d0e53bb3326a3790c2dc0438b9",
            'rawData' => [
                'tiqets' => [
                    'credits' => '',
                    'large' => 'https://aws-tiqets-cdn.imgix.net/images/content/da9b3ba05da349d5a52f1d0ab4a3f6a6.jpg?auto=format&fit=crop&h=1000&ixlib=python-1.1.2&q=70&w=2000&s=b6d745d0e53bb3326a3790c2dc0438b9',
                    'medium' => 'https://aws-tiqets-cdn.imgix.net/images/content/da9b3ba05da349d5a52f1d0ab4a3f6a6.jpg?auto=format&fit=crop&h=250&ixlib=python-1.1.2&q=70&w=250&s=e6cdb252bca20c8e39ce679f1b76f940',
                    'small' => 'hhttps://aws-tiqets-cdn.imgix.net/images/content/da9b3ba05da349d5a52f1d0ab4a3f6a6.jpg?auto=format&fit=crop&h=128&ixlib=python-1.1.2&q=70&w=128&s=3b2aa7dd5e03703fbd2462a34035b13b'
                ]

            ],
            'source' => 'tiqets'
        ];

        $this->assertEquals($expected, $this->defaultController->mapImageData($imageData));
    }
}
