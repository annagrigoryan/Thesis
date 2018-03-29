<?php

namespace Tests\ClassicticBundle\Controller;

use ClassicticBundle\Controller\DefaultController;
use Symfony\Component\Validator\Constraints\DateTime;
use TripPlanneraBundle\Document\BaseEntity;
use TripPlanneraBundle\Service\HoursService;
use TripPlanneraBundle\Document\Coordinates;
use TripPlanneraBundle\Document\Location;

class DefaultControllerTest extends \PHPUnit_Framework_TestCase
{

    private $defaultController;

    public function setUp()
    {
        $logger = $this->getMockBuilder('Logger')
            ->setMethods(array('debug', 'info', 'error'))
            ->getMock();

        $asyncService = $this->getMockBuilder(AsyncService::class)
            ->getMock();

        $mock = $this->getMockBuilder(DefaultController::class)
            ->setMethods(['get','call'])
            ->getMock();

        $mock->expects($this->any())
            ->method('get')
            ->withConsecutive(
                [$this->equalTo('logger')],
                [$this->equalTo('app.async.service')]
            )
            ->willReturnOnConsecutiveCalls($logger,$asyncService);

        $this->defaultController = $mock;
    }

    public function testMapMainImageData()
    {
        $imageUrl = "https://d1qyefggqmvux6.cloudfront.net/pictures/12/79/127956/From-Darkness-in-to-Light-01-XL.jpg";
        $entityData = [
            'id' => 123,
            'name' => 'asd',
            "picture" => [
                "large" => $imageUrl,
                "medium" => "abc"
            ]
        ];
        $expected = [];
        $expected['originalUrl'] = $imageUrl;
        $expected['rawData']['classictic'] = [];
        $expected['source'] = 'classictic';
        $result = $this->defaultController->mapMainImageData($entityData);
        $this->assertEquals($expected, $result);

        $entityData = [
            'id' => 123,
            'name' => 'asd'
        ];
        $expected = null;
        $result = $this->defaultController->mapMainImageData($entityData);
        $this->assertEquals($expected, $result);

    }

    public function testMapData()
    {
        $entityData = [
            'id' => '333',
            'classicticId' => '333',
            'name' => 'opera',
            'slug' => 'opera 12 June 2018 19:30',
            'categoryIds' => [
                '57e97350449ec1283b00002a',
                '57d9560e449ec1f01c000035'
            ],
            'start' => [
                'iso' => '2018-06-12T19:30:00.000000+0000',
                'date' => '2018-06-12',
                'time' => '19:30'
            ],
        ];

        $location = new Location();
        $location->id = 123;

        $date = new \DateTime('2018-06-12T19:30:00.000000+0000');

        $getCategoriesIdMap = [];
        $mapMainImageData = [
            'classicticMainImage' => 'https://d1bq5g7z9i92ue.cloudfront.net/pictures/13/15/131578/Opera-in-concert.jpg'
        ];

        $expected = [
            'startDate' => $date,
            'name' => 'opera',
            'slug' => 'opera 12 June 2018 19:30',
            'rawData' => [
                'classictic' => [
                    'id' => '333',
                    'classicticId' => '333',
                    'name' => 'opera',
                    'slug' => 'opera 12 June 2018 19:30',
                    'categoryIds' => [
                        '57e97350449ec1283b00002a',
                        '57d9560e449ec1f01c000035'
                    ],
                    'start' => [
                        'iso' => '2018-06-12T19:30:00.000000+0000',
                        'date' => '2018-06-12',
                        'time' => '19:30'
                    ],
                ]
            ],
            'externalData' => [
                'classicticIds' => ['333'],
            ],
            'classicticId' => '333',
            'locationId' => 123,
            'categoryIds' => [
                '57e97350449ec1283b00002a',
                '57d9560e449ec1f01c000035'
            ],
            'classicticMainImage' => [
                'classicticMainImage' => 'https://d1bq5g7z9i92ue.cloudfront.net/pictures/13/15/131578/Opera-in-concert.jpg'
            ],
        ];


        $mock = $this->getMockBuilder(DefaultController::class)
            ->setMethods(['getCategoriesIdMap', 'mapMainImageData'])
            ->getMock();

        $mock->expects($this->once())
            ->method('getCategoriesIdMap')
            ->willReturn($getCategoriesIdMap);

        $mock->expects($this->once())
            ->method('mapMainImageData')
            ->willReturn($mapMainImageData);

        $this->assertEquals($expected, $mock->mapData($entityData, $location));

        $entityData = [
            'id' => '333',
            'classicticId' => '333',
            'name' => 'opera',
            'categoryIds' => [
                '57e97350449ec1283b00002a',
                '57d9560e449ec1f01c000035'
            ],
        ];

        $this->assertEquals([], $mock->mapData($entityData, $location));

        $entityData = [
            'id' => '333',
            'classicticId' => '333',
            'name' => 'opera',
            'categoryIds' => [
                '57e97350449ec1283b00002a',
                '57d9560e449ec1f01c000035'
            ],
            'start' => [
                'iso' => '2017-06-12T19:30:00.000000+0000',
                'date' => '2017-06-12',
                'time' => '19:30'
            ],
            'now' => '2018-06-12T19:30:00.000000+0000'
        ];

        $this->assertEquals([], $mock->mapData($entityData, $location));
    }

    public function testGetPagesCountFromResults()
    {
        $results = [];
        $results['pagination_pages_total'] = 15;

        $result = $this->defaultController->getPagesCountFromResults($results);
        $expected = 15;
        $this->assertEquals($expected, $result);

        $results = [];

        $result = $this->defaultController->getPagesCountFromResults($results);
        $expected = 0;
        $this->assertEquals($expected, $result);
    }

     public function testGenerateApiUrl()
     {
         $apiMethod = 'method';

         $getApiKey = '1bed7deebb7aa2af9dcaa0b2c9624aef';
         $getApiUrl = 'https://www.classictic.com/en/api';

         $mock = $this->getMockBuilder(DefaultController::class)
             ->setMethods(['getApiKey', 'getApiUrl'])
             ->getMock();

         $mock->expects($this->once())
             ->method('getApiKey')
             ->willReturn($getApiKey);

         $mock->expects($this->once())
             ->method('getApiUrl')
             ->willReturn($getApiUrl);

         $expected = 'https://www.classictic.com/en/api/method/json/1bed7deebb7aa2af9dcaa0b2c9624aef/';
         $this->assertEquals($expected, $mock->generateApiUrl($apiMethod));

     }

    public function testGetDefaultParams()
    {
        $maxPageSize = ['range' => 50];

        $result = $this->defaultController->getDefaultParams();
        $expected = $maxPageSize;
        $this->assertEquals($expected, $result);
    }

    public function testGetEntitiesFromApi()
    {
        $location = new Location();
        $location->setSettings(['classicticId' => '55']);

        $result = $this->defaultController->getEntitiesFromApi($location);
        $expected = [];
        $this->assertEquals($expected, $result);

        $params = [];
        $params['city_id'] = 123;
        $params['page'] = 5;


        $mock = $this->getMockBuilder(DefaultController::class)
            ->setMethods(['isCityIdCorrect', 'call'])
            ->getMock();

        $mock->expects($this->once())
            ->method('isCityIdCorrect')
            ->willReturn(['city_id' => 123]);

        $mock->expects($this->once())
            ->method('call')
            ->willReturn($params);

        $this->assertEquals(['city_id' => 123, 'page' => 5], $mock->getEntitiesFromApi($location, $pageNumber = 5));
    }

    public function testGetEntitiesFromApiResults()
    {
        $results = [];

        $result = $this->defaultController->getEntitiesFromApiResults($results);
        $expected = [];
        $this->assertEquals($expected, $result);


        $results = [];
        $results['search'] = 'entities';

        $result = $this->defaultController->getEntitiesFromApiResults($results);
        $expected = 'entities';
        $this->assertEquals($expected, $result);
    }

    /**
     * @dataProvider isCityIdCorrectProvider
     */
    public function testIsCityIdCorrect(
        $cityId,
        $getCitiesFromApi,
        $expected
    )
    {
        $mock = $this->getMockBuilder(DefaultController::class)
            ->setMethods(['getCitiesFromApi'])
            ->getMock();

        $mock->expects($this->once())
            ->method('getCitiesFromApi')
            ->willReturn($getCitiesFromApi);

        $this->assertEquals($expected, $mock->isCityIdCorrect($cityId));
    }

    public function isCityIdCorrectProvider()
    {
        $allDatas = [];

        $getCitiesFromApi = '';
        $expected = false;

        $testData = [
            [],
            $getCitiesFromApi,
            $expected
        ];

        $allDatas[] = $testData;


        $getCitiesFromApi = ['salable' => ['Paris' => ['id' => 123]]];
        $expected = true;

        $testData1 = [
            123,
            $getCitiesFromApi,
            $expected
        ];

        $allDatas[] = $testData1;
        return $allDatas;
    }
}
