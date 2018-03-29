<?php

namespace Tests\GoogleBundle\Controller;

use GoogleBundle\Controller\DefaultController;
use TripPlanneraBundle\Document\BaseEntity;
use TripPlanneraBundle\Service\HoursService;
use TripPlanneraBundle\Document\Coordinates;
use TripPlanneraBundle\Document\Location;
use TripPlanneraBundle\Document\Restaurant;

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
        
        $this->hoursService = new HoursService();
    }

    /**
     * @dataProvider mapDataProvider
     */
    public function testMapData(
        $entityData,
        $location,
        $entity,
        $getGooglePhotoUrl,
        $mapReviewData,
        $normaliseGoogleHours,
        $expected
    )
    {

        $mock = $this->getMockBuilder(DefaultController::class)
            ->setMethods(['getGooglePhotoUrl', 'getMainImageExternal', 'mapReviewData', 'get',])
            ->getMock();

        $mock->expects($this->any())
            ->method('getGooglePhotoUrl')
            ->willReturn($getGooglePhotoUrl);


        $mock->expects($this->any())
            ->method('mapReviewData')
            ->willReturn($mapReviewData);

        $hoursServiceMock = $this->getMockBuilder(HoursService::class)
            ->setMethods(['normaliseGoogleHours'])
            ->getMock();

        $hoursServiceMock->expects($this->any())
            ->method('normaliseGoogleHours')
            ->willReturn($normaliseGoogleHours);

        $mock->expects($this->any())
            ->method('get')
            ->withConsecutive(
                [$this->equalTo('app.hours.service')]
            )
            ->willReturnOnConsecutiveCalls($hoursServiceMock);

        $this->assertEquals($expected, $mock->mapData($entityData, $location, $entity));

    }

    /**
     * @return array
     */
    public function mapDataProvider()
    {

        $allDatas = [];

        $entity = new BaseEntity();
        $entity->setName('Colosseum');

        $location = new Location();
        $location->id = 123;
        $location->setName('Rome');

        $coordinates = new Coordinates();
        $coordinates->setLatitude('34.145000000000003');
        $coordinates->setLongitude('-118.42');


        $getGooglePhotoUrl = 'http://archeoroma.beniculturali.it/';
        $mapReviewData = ['ttt'];
        $normaliseGoogleHours = ['09:00'];

        $imageData = [
            'photo_reference' => 'aaa',
            'width' => '100%',
            'height' => '100%'
        ];
        $imageDataMapped = [];
        $imageDataMapped['originalUrl'] = $getGooglePhotoUrl;
        $imageDataMapped['rawData']['googleplaces'] = $imageData;
        $imageDataMapped['source'] = 'googleplaces';

        $expected = [
            'googleplacesId' => 111,
            'locationId' => 123,
            'rawData' => [
                'googleplaces' => [
                    'place_id' => 111,
                    'id' => [111],
                    'location' => [
                        'lat' => 34.145,
                        'lng' => -118.42
                    ],
                    'geometry' => [
                        'location' => [
                            'lat' => 34.145,
                            'lng' => -118.42
                        ],
                        'viewport' => 'qwe'
                    ],
                    'name' => ['Colosseum'],
                    'website' => 'www.col.com',
                    'opening_hours' => [
                        'open_now' => true,
                        'periods' => [
                            'open' => [
                                'day' => 2,
                                3,
                                'time' => '09:00'
                            ],
                            'close' => '18:00'
                        ]
                    ],
                    'vicinity' => '5, 48 Pirrama Road, Pyrmont',
                    'address' => '48 Pirrama Road',
                    'international_phone_number' => ['+39 06 6830 0230'],
                    'phoneNumbers' => ['+39 06 6830 0230'],
                    'alternativeNames' => ['Colosseum'],
                    'websites' => ['www.col.com'],
                    'openHours' => ['opening_hours'],
                    'coordinates' => $coordinates
                ],
            ],
            'externalData' => [
                'googleplacesIds' => [111]
            ],
            'reviews' => [['ttt']],
            'images' => [$imageDataMapped],
            'googleplacesMainImage' => $imageDataMapped
        ];

        $testData = [
            [
                'place_id' => 111,
                'id' => [111],
                'location' => [
                    'lat' => 34.145,
                    'lng' => -118.42
                ],
                'geometry' => [
                    'location' => [
                        'lat' => 34.145,
                        'lng' => -118.42
                    ],
                    'viewport' => 'qwe'
                ],
                'name' => ['Colosseum'],
                'photos' => [
                    $imageData
                ],
                'website' => 'www.col.com',
                'opening_hours' => [
                    'open_now' => true,
                    'periods' => [
                        'open' => [
                            'day' => 2,
                            3,
                            'time' => '09:00'
                        ],
                        'close' => '18:00'
                    ]
                ],
                'reviews' => ['abcdefg'],
                'vicinity' => '5, 48 Pirrama Road, Pyrmont',
                'address' => '48 Pirrama Road',
                'international_phone_number' => ['+39 06 6830 0230'],
                'phoneNumbers' => ['+39 06 6830 0230'],
                'alternativeNames' => ['Colosseum'],
                'websites' => ['www.col.com'],
                'openHours' => ['opening_hours'],
                'coordinates' => $coordinates
            ],
            $location,
            $entity,
            $getGooglePhotoUrl,
            $mapReviewData,
            $normaliseGoogleHours,
            $expected
        ];
        $allDatas[] = $testData;

        return $allDatas;

    }

    public function testGetDefaultParams()
    {
        $mock = $this->getMockBuilder(DefaultController::class)
            ->setMethods(['getApiKey'])
            ->getMock();

        $mock->expects($this->any())
            ->method('getApiKey')
            ->willReturn('123');

        $this->assertEquals([
            'key' => '123'
        ],
            $mock->getDefaultParams());
    }

    public function testMapReviewData()
    {
        $photoUrl = "//lh6.googleusercontent.com/-NElukEnPlGs/AAAAAAAAAAI/AAAAAAAAACY/w00l1LWf6VU/photo.jpg";
        $reviewData = [
            "author_name" => "Scott G",
            "author_url" => "https://plus.google.com/117324481459968546905",
            "language" => "en",
            "profile_photo_url" => $photoUrl,
            "rating" => 5,
            "text" => "Brilliant lunch like to sit upstairs next time. ",
            "time" => 1472936230
        ];
        $image = [];
        $image['originalUrl'] = $photoUrl;
        $image['source'] = 'googleplaces';

        $expected = [];
        $expected['rawData']['googleplaces'] = $reviewData;
        $expected['source'] = 'googleplaces';
        $expected['language'] = 'en';
        $expected['googleplacesMainImage'] = $image;
        $createdAt = new \DateTime();
        $createdAt->setTimestamp($reviewData['time']);

        $expected['createdAt'] = $createdAt;

        $result = $this->defaultController->mapReviewData($reviewData);
        $this->assertEquals($expected, $result);

    }

    public function testFilterExistingResults()
    {
        $entity1 = new BaseEntity();
        $entity1->setName('Louvre');
        $entity1->setGooglePlaceId('ChIJ9RanyBNhLxMR1pBCnqm8FBk');
        $entity2 = new BaseEntity();
        $entity2->setName('Roman Forum');
        $entity2->setGooglePlaceId('ChIJpcPlnIGKJRMReN1sXvlbJ2Q');
        $entities = [
            $entity1,
            $entity2
        ];

        $results = [];
        $results[] = ['place_id' => 'ChIJ8-wGeU9gLxMR--zJtnpGod4'];

        $existsIds = [];
        $existsIds[] = ['ChIJ9RanyBNhLxMR1pBCnqm8FBk'];

        $mock = $this->getMockBuilder(DefaultController::class)
            ->setMethods(['getEntitiesByGooglePlaceID'])
            ->getMock();

        $mock->expects($this->once())
            ->method('getEntitiesByGooglePlaceID')
            ->willReturn($entities);

        $expected = [['place_id' => 'ChIJ8-wGeU9gLxMR--zJtnpGod4']];

        $this->assertEquals($expected, $mock->filterExistingResults($results));
    }

    public function testGetSingleResponseFromResponses()
    {
        $location = new Location();
        $location->setName('Paris');

        $entity = new BaseEntity();
        $entity->setName('The Louvre');
        $entity->id = 123;

        $filterExistingResults = ['place_id' => 'ChIJD3uTd9hx5kcR1IQvGfr8dbk'];

        $mock = $this->getMockBuilder(DefaultController::class)
            ->setMethods(['filterExistingResults', 'getPossibleNames'])
            ->getMock();

        $mock->expects($this->any())
            ->method('filterExistingResults')
            ->willReturn($filterExistingResults);

        $mock->expects($this->any())
            ->method('getPossibleNames')
            ->willReturn(['louvre', 'The Louvre',]);

        $response = [];
        $response['results'] = '';

        $result = $mock->getSingleResponseFromResponses($response, $entity, $location);
        $expected = null;
        $this->assertEquals($expected, $result);


        $response = [];
        $response['results'] = [
            'address_components' => ['name' => 'The Louvre'],
            'adr_address' => 'bbb',
            'formatted_address' => 'asd 123',
            'formatted_phone_number' => '123 456',
            'geometry' => [
                'location' => [
                    'lat' => -33.8666199,
                    'lng' => 151.1958527
                ]
            ],
        ];


        $result = $mock->getSingleResponseFromResponses($response, $entity, $location);
        $expected = ['name' => 'The Louvre'];
        $this->assertEquals($expected, $result);


        $response = [];
        $response['results'] = [
            'adr_address' => 'bbb',
        ];

        $result = $mock->getSingleResponseFromResponses($response, $entity, $location);
        $expected = 'bbb';
        $this->assertEquals($expected, $result);
    }

    public function testGetPagesCountFromResults()
    {
        $results['page'] = 3;
        $results['totalPages'] = 15;

        $expected = 0.0;

        $result = $this->defaultController->getPagesCountFromResults($results);
        $this->assertEquals($expected, $result);
    }

    public function testGetGooglePlaceNearbyData()
    {
        $entity = new Restaurant();
        $entity->setName('Louvre');

        $location = new Location();
        $location->setName('Paris');

        $coordinates = new Coordinates();
        $coordinates->setLatitude(4.35);
        $coordinates->setLongitude(13.4);
        $entity->coordinates = $coordinates;

        $params = [];
        $params['keyword'] = 'Louvre, Restaurant , Paris';
        $params['radius'] = '100';
        $params['location'] = '4.35,13.4';

        $mock = $this->getMockBuilder(DefaultController::class)
            ->setMethods(['call', 'getSingleResponseFromResponses'])
            ->getMock();

        $mock->setMainEntity('Restaurant');

        $mock->expects($this->once())
            ->method('call')
            ->with('place/nearbysearch/json', $params);

        $mock->expects($this->any())
            ->method('getSingleResponseFromResponses')
            ->willReturn([$params]);

        $expected = [['keyword' => 'Louvre, Restaurant , Paris', 'radius' => '100', 'location' => '4.35,13.4']];

        $this->assertEquals($expected, $mock->getGooglePlaceNearbyData($entity, $location));
    }

    public function testGetGooglePlaceSearchFullData()
    {
        $entity = new Restaurant();
        $entity->setAddress('1 Piazza del Colosseo');
        $entity->setName('Colosseum');

        $location = new Location();
        $location->setName('Rome');

        $coordinates = new Coordinates();
        $coordinates->setLatitude(12.492231);
        $coordinates->setLongitude(41.89021);
        $entity->coordinates = $coordinates;

        $params = [];
        $params['query'] = 'Colosseum, Restaurant , Rome';
        $params['radius'] = '100';
        $params['location'] = '12.492231,41.89021';

        $mock = $this->getMockBuilder(DefaultController::class)
            ->setMethods(['call', 'getSingleResponseFromResponses'])
            ->getMock();

        $mock->setMainEntity('Restaurant');

        $mock->expects($this->once())
            ->method('call')
            ->with('place/textsearch/json', $params);

        $mock->expects($this->any())
            ->method('getSingleResponseFromResponses')
            ->willReturn([$params]);

        $expected = [['query' => 'Colosseum, Restaurant , Rome', 'radius' => '100', 'location' => '12.492231,41.89021']];

        $this->assertEquals($expected, $mock->getGooglePlaceSearchFullData($entity, $location));
    }

    public function testGetGooglePlaceData()
    {
        $placeId = 'ChIJN1t_tDeuEmsRUsoyG83frY4';
        $params = [
            'placeid' => $placeId
        ];

        $mock = $this->getMockBuilder(DefaultController::class)
            ->setMethods(['call'])
            ->getMock();

        $mock->expects($this->once())
            ->method('call')
            ->with('place/details/json', $params)
            ->willReturn(['result' => 'aaa']);

        $expected = 'aaa';
        $this->assertEquals($expected, $mock->getGooglePlaceData($placeId));

        $mock = $this->getMockBuilder(DefaultController::class)
            ->setMethods(['call'])
            ->getMock();

        $mock->expects($this->once())
            ->method('call')
            ->with('place/details/json', $params);

        $expected = null;
        $this->assertEquals($expected, $mock->getGooglePlaceData($placeId));
    }
}
