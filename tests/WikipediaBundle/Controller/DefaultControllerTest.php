<?php

namespace Tests\WikipediaBundle\Controller;

use TripPlanneraBundle\Document\Attraction;
use TripPlanneraBundle\Document\Location;
use TripPlanneraBundle\Service\ImagesService;
use WikipediaBundle\Controller\DefaultController;
use TripPlanneraBundle\Document\Coordinates;
use TripPlanneraBundle\Service\MatchNamesService;

class DefaultControllerTest extends \PHPUnit_Framework_TestCase
{
    private $defaultController;

    protected function setUp()
    {
        $this->defaultController = new DefaultController();
    }

    public function testMapData()
    {
        $expected = [
            'rawData' => [
                'wikipedia' => [
                    'title' => 'London',
                    'extract' => "The Galleria Borghese (English: Borghese Gallery)",
                    'terms' => [
                        'description' => [
                            0 => 'art museum in Rome'
                        ],
                    ],
                    'langlinks' => [
                        0 => [
                            'lang' => 'bg',
                            '*' => 'Терми на Каракала'
                        ],
                        1 => [
                            'lang' => 'ca',
                            '*' => 'Termes de Caracal·la'
                        ]
                    ],
                    'categories' => [
                        0 => [
                            'ns' => 14,
                            'title' => 'Category:1960 Summer Olympic venues'
                        ],
                        1 => [
                            'ns' => 14,
                            'title' => 'Category:All articles with unsourced statements'
                        ]
                    ],
                    'coordinates' => [
                        "lat" => 41.87944389,
                        "lon" => 12.49305611,
                        "primary" => "",
                        "globe" => "earth"
                    ]
                ]
            ],
            'externalData' => [
                'wikipediaIds' => [
                    0 => 'London'
                ]
            ],
            'wikipediaId' => 'London'
        ];

        $data = [
            'title' => 'London',
            'extract' => "The Galleria Borghese (English: Borghese Gallery)",
            'terms' => [
                'description' => [
                    0 => 'art museum in Rome'
                ],
            ],
            'langlinks' => [
                0 => [
                    'lang' => 'bg',
                    '*' => 'Терми на Каракала'
                ],
                1 => [
                    'lang' => 'ca',
                    '*' => 'Termes de Caracal·la'
                ]
            ],
            'categories' => [
                0 => [
                    'ns' => 14,
                    'title' => 'Category:1960 Summer Olympic venues'
                ],
                1 => [
                    'ns' => 14,
                    'title' => 'Category:All articles with unsourced statements'
                ]
            ],
            'coordinates' => [
                "lat" => 41.87944389,
                "lon" => 12.49305611,
                "primary" => "",
                "globe" => "earth"
            ]
        ];

        $location = null;

        $this->assertEquals($expected, $this->defaultController->mapData($data, $location, null));

    }

    /**
     * @dataProvider testFindWikipediaIdByCoordinateProvider
     */
    public function testFindWikipediaIdByCoordinate(
        $alternativeName,
        $latitude,
        $longitude,
        $callData,
        $getMatchedNameData,
        $result,
        $alterntiveNamesFromApi
    ) {
        $entity = new Attraction();
        $coordinate = new Coordinates();
        $entity->setCoordinates($coordinate->setLatitude($latitude));
        $entity->setCoordinates($coordinate->setLongitude($longitude));
        $entity->setAlternativeNames($alternativeName);

        $mock = $this->getMockBuilder(DefaultController::class)
            ->setMethods(['call', 'get', 'getAlternativeNamesFromApi'])
            ->getMock();

        $mock->expects($this->any())
            ->method('call')
            ->willReturn($callData);

        $mock->expects($this->any())
            ->method('getAlternativeNamesFromApi')
            ->willReturn($alterntiveNamesFromApi);

        $nameMatchServiceMock = $this->getMockBuilder(MatchNamesService::class)
            ->setMethods(['getMatchedName'])
            ->getMock();

        $nameMatchServiceMock->expects($this->any())
            ->method('getMatchedName')
            ->willReturn($getMatchedNameData);

        $mock->expects($this->any())
            ->method('get')
            ->willReturn($nameMatchServiceMock);

        $this->assertEquals($result, $mock->findWikipediaIdByCoordinate($entity));

    }

    public function testFindWikipediaIdByCoordinateProvider()
    {
        return [
            [
                ['alternativeNames' => 'Eiffel Tower'],
                48.858353,
                2.294464,
                [
                    'query' => [
                        'geosearch' => [
                            'pageId' => [
                                'title' => 'Eiffel Tower'
                            ]
                        ]
                    ]
                ],
                'Eiffel Tower',
                'Eiffel Tower',
                [0 => 'Eiffel the Tower']
            ],
            [
                ['alternativeNames' => 'Eiffel Tower'],
                66.66666,
                7.777777,
                ['query' => []],
                'Eiffel Tower',
                null,
                [0 => 'Eiffel the Tower']
            ],
            [
                null,
                48.858353,
                2.294464,
                [
                    'query' => [
                        'geosearch' => [
                            'pageId' => [
                                'title' => 'The Eiffel Tower'
                            ]
                        ]
                    ]
                ],
                'The Eiffel Tower',
                'The Eiffel Tower',
                [0 => 'Eiffel the Tower']
            ],
        ];
    }

    /**
     * @dataProvider testFindWikipediaIdByNameProvider
     */
    public function testFindWikipediaIdByName($attractionName, $locationName, $callData, $getMatchedNameData, $result)
    {
        $attraction = new Attraction();
        $location = new Location();

        $attraction->setName($attractionName);
        $location->setName($locationName);

        $mock = $this->getMockBuilder(DefaultController::class)
            ->setMethods(['call', 'get'])
            ->getMock();

        $mock->expects($this->any())
            ->method('call')
            ->willReturn($callData);

        $nameMatchServiceMock = $this->getMockBuilder(MatchNamesService::class)
            ->setMethods(['getMatchedName'])
            ->getMock();

        $nameMatchServiceMock->expects($this->any())
            ->method('getMatchedName')
            ->willReturn($getMatchedNameData);

        $mock->expects($this->any())
            ->method('get')
            ->willReturn($nameMatchServiceMock);


        $this->assertEquals($result, $mock->findWikipediaIdByName($attraction, $location));
    }

    public function testFindWikipediaIdByNameProvider()
    {
        return [
            [
                'Eiffel Tower',
                'Paris',
                [
                    'query' => [
                        'search' => [
                            'pageId' => [
                                'title' => 'Eiffel Tower'
                            ]
                        ]
                    ]
                ],
                'Eiffel Tower',
                'Eiffel Tower'
            ],
            [
                'Eiffel Tower',
                'Paris',
                ['query' => []],
                'Eiffel Tower',
                null
            ]
        ];
    }

    /**
     * @dataProvider testFindWikipediaIdForLocationProvider
     **/
    public function testFindWikipediaIdForLocation($locationName, $countryName, $callData, $getMatchedNameData, $result)
    {
        $location = new Location();

        $location->setName($locationName);

        $mock = $this->getMockBuilder(DefaultController::class)
            ->setMethods(['call', 'getCountryName', 'get', 'getMatchedName'])
            ->getMock();

        $mock->expects($this->any())
            ->method('getCountryName')
            ->willReturn($countryName);

        $mock->expects($this->any())
            ->method('call')
            ->willReturn($callData);

        $nameMatchServiceMock = $this->getMockBuilder(MatchNamesService::class)
            ->setMethods(['getMatchedName'])
            ->getMock();

        $nameMatchServiceMock->expects($this->any())
            ->method('getMatchedName')
            ->willReturn($getMatchedNameData);

        $mock->expects($this->any())
            ->method('get')
            ->willReturn($nameMatchServiceMock);

        $this->assertEquals($result, $mock->findWikipediaIdForLocation($location));
    }

    public function testFindWikipediaIdForLocationProvider()
    {
        return [
            [
                'Paris',
                'France',
                [
                    'query' => [
                        'search' => [
                            'pageId' => [
                                'title' => 'Paris'
                            ]
                        ]
                    ]
                ],
                'Paris',
                'Paris'
            ],
            [
                'Paris',
                'France',
                [
                    'query' => []
                ],
                'Paris',
                null
            ]
        ];
    }

    public function testGenerateApiMethodUrl()
    {
        $args = [
            'list' => 'geosearch',
            'gscoord' => '48.858353|2.294464',
            'gsradius' => 200,
            'gslimit' => 10,
        ];
        $this->assertEquals('https://en.wikipedia.org/w/api.php?action=query&format=json&list=geosearch&gscoord=48.858353%7C2.294464&gsradius=200&gslimit=10',
            $this->defaultController->generateApiMethodUrl('en', $args));
        $this->assertEquals('https://commons.wikimedia.org/w/api.php?action=query&format=json&list=geosearch&gscoord=48.858353%7C2.294464&gsradius=200&gslimit=10',
            $this->defaultController->generateApiMethodUrl('common', $args));
    }

    public function testGetImagesFromApi()
    {
        $wikipediaId = 'Eiffel Tower';
        $data = [
            "batchcomplete" => '',
            "continue" => [
                "gimcontinue" => "15899|EiffelCrepuscular.JPG",
                "continue" => "gimcontinue||"
            ],
            "query" => [
                "pages" => [
                    10837985 => [
                        "pageid" => 10837985,
                        "ns" => 6,
                        "title" => "File:01-eiffelturm paris froschperspektive.JPG",
                        "imagerepository" => "local",
                        "imageinfo" => [
                            0 => [
                                "size" => 696307,
                                "width" => 1600,
                                "height" => 1067,
                                "url" => "https://upload.wikimedia.org/wikipedia/commons/1/1d/01-eiffelturm_paris_froschperspektive.JPG",
                                "mime" => "image/jpeg"
                            ]
                        ]
                    ]
                ]
            ]
        ];
        $mock = $this->getMockBuilder(DefaultController::class)
            ->setMethods(['call'])
            ->getMock();

        $mock->expects($this->any())
            ->method('call')
            ->willReturn($data);

        $this->assertEquals($data, $mock->getImagesFromApi($wikipediaId));
    }

    public function testImportMainImage()
    {
        $data = [
            "batchcomplete" => '',
            "query" => [
                "pages" => [
                    9232 => [
                        "pageId" => 9232,
                        "ns" => 6,
                        "title" => "Eiffel Tower",
                        "original" => [
                            "source" => "https://upload.wikimedia.org/wikipedia/commons/8/85/Tour_Eiffel_Wikimedia_Commons_%28cropped%29.jpg",
                            "width" => 1600,
                            "height" => 4833
                        ]
                    ]
                ]
            ]
        ];

        $entity = new Attraction();

        $mock = $this->getMockBuilder(DefaultController::class)
            ->setMethods(['getMainImageFromApi', 'setEntityApiMainImage'])
            ->getMock();

        $mock->expects($this->any())
            ->method('getMainImageFromApi')
            ->willReturn($data);

        $mock->expects($this->once())
            ->method('setEntityApiMainImage')
            ->willReturn(null);

        $entity->setWikipediaId('Eiffel Tower');

        $mock->importMainImage($entity);
    }

    public function testMapImagesData()
    {
        $imagesServiceMock = $this->getMockBuilder(ImagesService::class)
            ->setMethods(['isGoodImageCheckByUrl'])
            ->getMock();

        $imagesServiceMock->expects($this->once())
            ->method('isGoodImageCheckByUrl')
            ->willReturn(true);

        $mock = $this->getMockBuilder(DefaultController::class)
            ->setMethods(['get'])
            ->getMock();

        $mock->expects($this->once())
            ->method('get')
            ->willReturn($imagesServiceMock);

        $imageData = [
            "size" => 696307,
            "width" => 1600,
            "height" => 1067,
            "url" => "https://upload.wikimedia.org/wikipedia/commons/1/1d/01-eiffelturm_paris_froschperspektive.JPG",
            "mime" => "image/jpeg"
        ];
        $data = [
            10837985 => [
                "pageid" => 10837985,
                "ns" => 6,
                "title" => "File:01-eiffelturm paris froschperspektive.JPG",
                "imagerepository" => "local",
                "imageinfo" => [
                    0 => $imageData
                ]
            ]

        ];


        $mappedData = [];
        $mappedData['originalUrl'] = $imageData['url'];
        $mappedData['rawData']['wikipedia'] = $imageData;
        $mappedData['source'] = 'wikipedia';
        $expected = [$mappedData];

        $this->assertEquals($expected, $mock->mapImagesData($data));
    }

    public function testGetMainImageFromApi()
    {
        $data = [
            "batchcomplete" => '',
            "query" => [
                "pages" => [
                    9232 => [
                        "pageId" => 9232,
                        "ns" => 6,
                        "title" => "Eiffel Tower",
                        "original" => [
                            "source" => "https://upload.wikimedia.org/wikipedia/commons/8/85/Tour_Eiffel_Wikimedia_Commons_%28cropped%29.jpg",
                            "width" => 1600,
                            "height" => 4833
                        ]
                    ]
                ]
            ]
        ];

        $wikipediaId = 'Eiffel Tower';

        $mock = $this->getMockBuilder(DefaultController::class)
            ->setMethods(['call'])
            ->getMock();

        $mock->expects($this->any())
            ->method('call')
            ->willReturn($data);

        $this->assertEquals($data, $mock->getMainImageFromApi($wikipediaId));
    }

    /**
     * @dataProvider testGetAlternativeNamesFromApiProvider
     */
    public function testGetAlternativeNamesFromApi($data, $expexted)
    {
        $wikipediaId = 'Sagrada Família';

        $mock = $this->getMockBuilder(DefaultController::class)
            ->setMethods(['call'])
            ->getMock();

        $mock->expects($this->any())
            ->method('call')
            ->willReturn($data);

        $this->assertEquals($expexted, $mock->getAlternativeNamesFromApi($wikipediaId));
    }

    public function testGetAlternativeNamesFromApiProvider()
    {
        return [
            [
                [
                    "batchcomplete" => '',
                    "query" => [
                        "pages" => [
                            23241908 => [
                                "pageId" => 23241908,
                                "ns" => 6,
                                "title" => "Sagrada Família (neighborhood)",
                                "terms" => [
                                    "label" => [
                                        0 => "Sagrada Família"
                                    ],
                                    "alias" => [
                                        0 => "Sagrada Familia"
                                    ]
                                ]
                            ]
                        ]
                    ]
                ],
                [
                    0 => 'Sagrada Familia'
                ]
            ],
            [
                [
                    "batchcomplete" => '',
                    "query" => [
                        "pages" => [
                            23241908 => [
                                "pageId" => 23241908,
                                "ns" => 6,
                                "title" => "Sagrada Família (neighborhood)",
                                "terms" => []
                            ]
                        ]
                    ]
                ],
                null
            ]
        ];
    }

    public function testImportImages()
    {
        $entity = new Attraction();
        $entity->setWikipediaId("Musée d'Orsay");
        $expexted = [
            'batchcomplete' => '',
            'query' => [
                'pages' => [
                    81748 => [
                        'pageid' => 81748,
                        'ns' => 6,
                        'title' => 'File:Courbet LAtelier du peintre.jpg',
                        'imagerepository' => 'local',
                        'imageinfo' => [
                            0 => [
                                'size' => 70965533,
                                'width' => 16951,
                                'height' => 9989,
                                'url' => 'https://upload.wikimedia.org/wikipedia/commons/a/a4/Courbet_LAtelier_du_peintre.jpg',
                                'descriptionurl' => 'https://commons.wikimedia.org/wiki/File:Courbet_LAtelier_du_peintre.jpg',
                                'descriptionshorturl' => 'https://commons.wikimedia.org/w/index.php?curid=81748',
                                'mime' => 'image/jpeg'
                            ]
                        ]
                    ]
                ]
            ]
        ];

        $data = [
            'imagesExternal' => [
                0 => 'https://upload.wikimedia.org/wikipedia/commons/a/a4/Courbet_LAtelier_du_peintre.jpg'
            ]
        ];
        $mock = $this->getMockBuilder(DefaultController::class)
            ->setMethods(['mapImagesData', 'getImagesFromApi', 'saveImages', 'setEntityApiMainImage'])
            ->getMock();

        $mock->expects($this->once())
            ->method('getImagesFromApi')
            ->willReturn($expexted);

        $mock->expects($this->once())
            ->method('mapImagesData')
            ->willReturn($data);

        $mock->expects($this->once())
            ->method('saveImages')
            ->willReturn(null);

        $mock->expects($this->once())
            ->method('setEntityApiMainImage')
            ->willReturn(null);

        $location = new Location();
        $mock->importImages($entity, $location);

    }

    public function testGetEntityFromApi()
    {
        $entity = new Attraction();
        $entity->setWikipediaId("Musée d'Orsay");
        $data = [
            'continue' => [
                'llcontinue' => '53919|ca',
                'clcontinue' => '53919|Wikipedia_articles_with_BNF_identifiers',
                'continue' => '||extracts|pageterms|coordinates'
            ],
            'query' => [
                'pages' => [
                    53919 => [
                        'pageid' => 53919,
                        'ns' => 0,
                        'title' => "Musée d'Orsay",
                        'extract' => 'the Left Bank of the Seine. It is housed in the former Gare',
                        'terms' => [
                            'description' => [
                                0 => 'art museum in Paris, France'
                            ],
                            'label' => [
                                0 => "Musée d'Orsay"
                            ],
                            'alias' => [
                                0 => "Orsay museum",
                                1 => "Museum of Orsay",
                                2 => "Musée D’Orsay",
                                3 => "Musee D'Orsay",
                                4 => "D’Orsay",
                                5 => "Musée d Orsay",
                                6 => "Musėe d'Orsay",
                                7 => "Musée dOrsay",
                                8 => "Musee d Orsay",
                                9 => "Musee dOrsay"
                            ],
                            'langlinks' => [
                                0 => [
                                    'lang' => 'af',
                                    '*' => "Musée d'Orsay"
                                ],
                                1 => [
                                    'lang' => 'ar',
                                    '*' => "متحف أورسيه"
                                ]
                            ],
                            'categories' => [
                                0 => [
                                    'ns' => 14,
                                    'title' => 'Category:Art Nouveau collections'
                                ],
                                1 => [
                                    'ns' => 14,
                                    'title' => "Category:Musée d'Orsay"
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ];
        $mock = $this->getMockBuilder(DefaultController::class)
            ->setMethods(['call'])
            ->getMock();

        $mock->expects($this->any())
            ->method('call')
            ->willReturn($data);

        $this->assertEquals($data, $mock->getEntityFromApi($entity));
    }

    public function testImportDataFromApi()
    {
        $entity = new Attraction();
        $location = new Location();

        $mock = $this->getMockBuilder(DefaultController::class)
            ->setMethods(['mapData', 'saveEntity'])
            ->getMock();

        $mock->expects($this->any())
            ->method('mapData')
            ->willReturn(null);

        $mock->expects($this->any())
            ->method('saveEntity')
            ->willReturn(null);

        $this->assertEquals(null, $mock->importDataFromApi($entity, $location));

        $entity->setWikipediaId("Musée d'Orsay");
        $this->assertEquals(null, $mock->importDataFromApi($entity, $location));
    }
}