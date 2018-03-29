<?php

namespace Tests\ViatorBundle\Controller;

use TripPlanneraBundle\Document\Attraction;
use TripPlanneraBundle\Document\BaseCategory;
use TripPlanneraBundle\Document\Location;
use TripPlanneraBundle\Service\HoursService;
use TripPlanneraBundle\Service\MatchingService;
use ViatorBundle\Controller\DefaultController;

class DefaultControllerTest extends \PHPUnit_Framework_TestCase
{
    private $defaultController;

    public function setUp()
    {
        $this->defaultController = new DefaultController();
        $this->hoursService = new HoursService();
        $this->matchingSevice = new MatchingService();
    }


    /**
     * @dataProvider mapDataProvider
     */
    public function testMapData(
        $entityData,
        $location,
        $getcategoryIds,
        $getLengthFromString,
        $getTourAttractions,
        $getViatorOpenHours,
        $expected
    ) {

        $mock = $this->getMockBuilder(DefaultController::class)
            ->setMethods(['getcategoryIds', 'getLengthFromString', 'get', 'getTourAttractions'])
            ->getMock();

        $mock->expects($this->any())
            ->method('getcategoryIds')
            ->willReturn($getcategoryIds);

        $mock->expects($this->any())
            ->method('getLengthFromString')
            ->willReturn($getLengthFromString);

        $hoursServiceMock = $this->getMockBuilder(HoursService::class)
            ->setMethods(['getViatorOpenHours'])
            ->getMock();

        $hoursServiceMock->expects($this->any())
            ->method('getViatorOpenHours')
            ->willReturn($getViatorOpenHours);

        $mock->expects($this->any())
            ->method('get')
            ->withConsecutive(
                [$this->equalTo('app.hours.service')]
            )
            ->willReturnOnConsecutiveCalls($hoursServiceMock);

        $mock->expects($this->any())
            ->method('getTourAttractions')
            ->willReturn($getTourAttractions);

        $this->assertEquals($expected, $mock->mapData($entityData, $location));


    }

    /**
     * @return array
     */
    public function mapDataProvider()
    {
        $allDatas = [];

        //data 1
        $location = new Location();
        $location->id = '123';

        $getcategoryIds = ['111'];
        $getLengthFromString = ['60'];
        $getTourAttractions = [
            'ourIds' => '10',
        ];
        $getViatorOpenHours = ['08:30'];

        $imageData = [
            'photoURL' => 'aaa',
            'width' => '100%',
            'height' => '100%'
        ];

        $imageDataMapped = [];
        $imageDataMapped['originalUrl'] = 'aaa';
        $imageDataMapped['rawData']['viator'] = $imageData;
        $imageDataMapped['source'] = 'viator';

        $reviewData = ['review' => 'abc', 'submissionDate' => '2014-08-05'];
        $reviewDataMapped = [];
        $reviewDataMapped['createdAt'] = new \DateTime('2014-08-05');
        $reviewDataMapped['rawData']['viator'] = $reviewData;
        $reviewDataMapped['source'] = 'viator';

        $expected = [
            'viatorId' => '45',
            'reviewsCount' => '5',
            'rawData' => [
                'viator' => [
                    'code' => '45',
                    'reviewCount' => '5',
                    'priceFormatted' => 'USD',
                    'title' => 'abc',
                    'shortDescription' => 'short',
                    'duration' => 60,
                    'rating' => 4.5,
                ]
            ],
            'externalData' => ['viatorIds' => ['45']],
            'locationId' => '123',
            'categoryIds' => ['111'],
            'reviewsCount' => '5',
            'name' => 'abc',
            'length' => ['60'],
            'openHours' => ['08:30'],
            'attractionIds' => '10',
            'attractionIdsInTour' => '10',
            'rating' => 4.5,
            'reviews' => [$reviewDataMapped],
            'images' => [$imageDataMapped],
            'viatorMainImage' => $imageDataMapped
        ];
        $testData = [
            [
                'code' => '45',
                'reviewCount' => '5',
                'priceFormatted' => 'USD',
                'title' => 'abc',
                'shortDescription' => 'short',
                'duration' => 60,
                'userPhotos' => [
                    $imageData
                ],
                'rating' => 4.5,
                'reviews' => [
                    $reviewData
                ]
            ],
            $location,
            $getcategoryIds,
            $getLengthFromString,
            $getTourAttractions,
            $getViatorOpenHours,
            $expected
        ];

        $allDatas[] = $testData;


        //data2
        $location = new Location();
        $location->id = '444';

        $getTourAttractions = [
            'ourIds' => '20',
        ];
        $expected = [];

        $testData1 = [
            [
                'catIds' => [15],
                'topCatIds' => ['333'],
                'priceFormatted' => 'USD',
                'title' => 'abc',
                'shortDescription' => 'short',
                'duration' => 60,
            ],
            $location,
            $getcategoryIds,
            $getLengthFromString,
            $getTourAttractions,
            $getViatorOpenHours,
            $expected
        ];

        $allDatas[] = $testData1;

        //data3
        $location = new Location();
        $location->id = '777';
        $getTourAttractions = [
            'ourIds' => '30',
        ];
        $bestImageDataMapped = [];
        $bestImageDataMapped['originalUrl'] = 'bestphoto';
        $bestImageDataMapped['rawData']['viator'] = [];
        $bestImageDataMapped['source'] = 'viator';

        $expected = [
            'viatorId' => '123',
            'reviewsCount' => '5',
            'rawData' => [
                'viator' => [
                    'code' => '123',
                    'reviewCount' => '5',
                    'priceFormatted' => 'USD',
                    'title' => 'abc',
                    'shortDescription' => 'short',
                    'duration' => 60,
                    'thumbnailHiResURL' => 'bestphoto'
                ]
            ],
            'externalData' => ['viatorIds' => ['123']],
            'locationId' => '777',
            'categoryIds' => ['111'],
            'reviewsCount' => '5',
            'name' => 'abc',
            'length' => ['60'],
            'openHours' => ['08:30'],
            'attractionIds' => '30',
            'attractionIdsInTour' => '30',
            'images' => [$imageDataMapped],
            'viatorMainImage' => $bestImageDataMapped
        ];
        $testData2 = [
            [
                'code' => '123',
                'reviewCount' => '5',
                'priceFormatted' => 'USD',
                'title' => 'abc',
                'shortDescription' => 'short',
                'duration' => 60,
                'thumbnailHiResURL' => 'bestphoto',
                'userPhotos' => [
                    $imageData
                ],
            ],
            $location,
            $getcategoryIds,
            $getLengthFromString,
            $getTourAttractions,
            $getViatorOpenHours,
            $expected
        ];
        $allDatas[] = $testData2;

        return $allDatas;

    }

    public function testGetEntitiesFromApi()
    {

        $location = new Location();
        $location->setSettings(['viatorId' => '7']);

        $mock = $this->getMockBuilder(DefaultController::class)
            ->setMethods(['call'])
            ->getMock();

        $mock->expects($this->once())
            ->method('call')
            ->willReturn([
                'destId' => '123',
            ]);

        $this->assertEquals(['destId' => '123'], $mock->getEntitiesFromApi($location));

    }

    public function testMapCategoryData()
    {
        $entityData = [
            'subcategoryId' => '123',
            'categoryId' => 'abc',
            'subcategoryName' => 'aaa',

        ];
        $result = $this->defaultController->mapCategoryData($entityData);
        $expected = [
            'subcategoryId' => '123',
            'categoryId' => 'abc',
            'subcategoryName' => 'aaa',
            'rawData' => [
                'viator' => [
                    'subcategoryId' => '123',
                    'categoryId' => 'abc',
                    'subcategoryName' => 'aaa',
                ]
            ],
            'externalData' => [
                'viatorIds' => ['123-abc']
            ],
            'title' => 'aaa'

        ];
        $this->assertEquals($expected, $result);


        $entityData = [
            'id' => '1A',
            'groupName' => 'ddd'
        ];
        $result = $this->defaultController->mapCategoryData($entityData);
        $expected = [
            'id' => '1A',
            'groupName' => 'ddd',
            'rawData' => [
                'viator' => [
                    'id' => '1A',
                    'groupName' => 'ddd',
                ]
            ],
            'externalData' => [
                'viatorIds' => ['1A']
            ],
            'title' => 'ddd'

        ];
        $this->assertEquals($expected, $result);
    }

    public function testGetDefaultCurlParams()
    {

        $result = $this->defaultController->getDefaultCurlParams();
        $expected = [
            CURLOPT_HTTPHEADER => [
                0 => 'Content-Type: application/json'
            ]
        ];
        $this->assertEquals($expected, $result);
    }

    public function testGetDefaultParams()
    {

        $mock = $this->getMockBuilder(DefaultController::class)
            ->setMethods(['getApiKey'])
            ->getMock();

        $mock->expects($this->once())
            ->method('getApiKey')
            ->willReturn('123');

        $this->assertEquals([
            'apiKey' => '123',
            'currencyCode' => 'USD'
        ], $mock->getDefaultParams());
    }

    public function testGetEntitiesFromApiResults()
    {

        $results = [
            'data' => 'abc'
        ];

        $result = $this->defaultController->getEntitiesFromApiResults($results);
        $expected = 'abc';
        $this->assertEquals($expected, $result);
    }

    /**
     * @dataProvider saveEntityCategoriesFromApiProvider
     */
    public function testSaveEntityCategoriesFromApi(

        $call,
        $mapCategoryData,
        $saveEntityCategory,
        $mapCategoryDataCount
    ) {

        $mock = $this->getMockBuilder(DefaultController::class)
            ->setMethods(['call', 'mapCategoryData', 'saveEntityCategory'])
            ->getMock();

        $mock->expects($this->exactly(1))
            ->method('call')
            ->willReturn($call);

        $mock->expects($this->exactly($mapCategoryDataCount))
            ->method('mapCategoryData')
            ->willReturn($mapCategoryData);

        $mock->expects($this->exactly($mapCategoryDataCount))
            ->method('saveEntityCategory')
            ->willReturn($saveEntityCategory);

        $mock->saveEntityCategoriesFromApi();

    }

    /**
     * @return array
     */
    public function saveEntityCategoriesFromApiProvider()
    {

        $testData = [];

        $call = [
            'data' => [
                [
                    'subcategories' => [
                        [
                            'sortOrder' => 1,
                            'categoryId' => 1,
                            'subcategoryUrlName' => 'sbc'
                        ]
                    ]
                ]
            ]
        ];
        $mapCategoryData = [
            'abx'
        ];
        $saveEntityCategory = ['sdf'];
        $mapCategoryDataCount = 2;
        $row[] = $call;
        $row[] = $mapCategoryData;
        $row[] = $saveEntityCategory;
        $row[] = $mapCategoryDataCount;


        $testData[] = $row;

        return $testData;

    }

    public function testGetTourAttractions()
    {
        $attraction1 = new Attraction();
        $attraction1->setName('Colosseum');
        $attraction1->id = 'qwe';
        $attraction2 = new Attraction();
        $attraction2->setName('Roman Forum');
        $attraction2->id = 'asd';
        $attractions = [
            $attraction1,
            $attraction2
        ];

        $mock = $this->getMockBuilder(DefaultController::class)
            ->setMethods(['get', 'getLocationAttractions'])
            ->getMock();


        $matchingServiceMock = $this->getMockBuilder(MatchingService::class)
            ->setMethods(['getLocationAttractions'])
            ->getMock();

        $matchingServiceMock->expects($this->any())
            ->method('getLocationAttractions')
            ->willReturn($attractions);

        $mock->expects($this->any())
            ->method('get')
            ->withConsecutive(
                [$this->equalTo('app.matching.service')]
            )
            ->willReturnOnConsecutiveCalls($matchingServiceMock);

        $texts = [];
        $texts['shortDescription'] = 'The Colosseum is an oval amphitheatre in Rome, it has an average audience of 65,000.';
        $texts['description'] = 'The COLOSSEUM is an oval amphitheatre in the centre of the city of Rome, just east of the Roman Forum.';
        $texts['shortDescription'] = 'The Roman Forum is an area surrounded by the ruins of several important ancient government buildings at the center of Rome.';
        $texts['description'] = 'The Roman Forum is an area surrounded by the ruins of several important ancient government buildings at the center of the city of Rome.';
        $texts['title'] = 'Forum';
        $location = new Location();
        $location->id = 187;

        $result = $mock->getTourAttractions($texts, $location);
        $expected = [
            'ourIds' => ['asd']
        ];
        $this->assertEquals($expected, $result);

    }


    /**
     * @dataProvider getCategoryIdsProvider
     */
    public function testGetCategoryIds(
        $entityData,
        $getCategoriesList,
        $getCategoriesIdMap,
        $expected
    ) {

        $mock = $this->getMockBuilder(DefaultController::class)
            ->setMethods(['getCategoriesList', 'getCategoriesIdMap'])
            ->getMock();

        $mock->expects($this->any())
            ->method('getCategoriesList')
            ->willReturn($getCategoriesList);

        $mock->expects($this->any())
            ->method('getCategoriesIdMap')
            ->willReturn($getCategoriesIdMap);

        $this->assertEquals($expected, $mock->getCategoryIds($entityData));

    }

    /**
     * @return array
     */
    public function getCategoryIdsProvider()
    {

        $allDatas = [];

        $category = new BaseCategory();
        $category->setId(123);
        //data 1
        $getCategoriesList = ['top' => ['133' => $category]];
        $getCategoriesIdMap = ['777'];
        $expected = [123];

        $testData = [
            [
                'code' => '45',
                'catIds' => ['133'],
                'topCatIds' => ['333'],
                'subCatIds' => ['444'],
            ],
            $getCategoriesList,
            $getCategoriesIdMap,
            $expected
        ];

        $allDatas[] = $testData;

        return $allDatas;

    }

}
