<?php

namespace Tests\TripPlanneraBundle\Controller;

use TripPlanneraBundle\Document\BaseEntity;
use TripPlanneraBundle\Document\Location;
use GetyourguideBundle\Controller\DefaultController;
use TripPlanneraBundle\Document\Coordinates;
use TripPlanneraBundle\Service\HoursService;
use TripPlanneraBundle\Service\MatchingService;


class GetYourGuideDefaultControllerTest extends \PHPUnit_Framework_TestCase
{
    protected $getYourGuideDefaultController;

    protected function setUp()
    {
        $this->getYourGuideDefaultController = new DefaultController();
    }

    public function testMapData()
    {
        $coordinates = new Coordinates();
        $coordinates->setLatitude(44);
        $coordinates->setLongitude(877);

        $location = new Location();
        $entity = new BaseEntity();

        $imageData = [
            'id' => 45,
            'url' => 'http://get',
            'ssl_url' => 'http://your'
        ];
        $data = [
            'tour_id' => '123',
            'tour_code' => 'Louvre Ticket GYGT&T',
            'title' => 'Louvre Museum',
            'abstract' => 'Benefit from',
            'number_of_ratings' => 122,
            'overall_rating' => 4.5,
            'pictures' => [
                $imageData
            ],
            'coordinates' => [
                'lat' => 44,
                'long' => 89
            ],
            'price' =>
                [
                    'values' =>
                        [
                            'amount' => 47.14
                        ]
                ],
            'durations' => [
                0 => [
                    'duration' => 1,
                    'unit' => 'day'
                ],
            ],
        ];

        $attractions = ['ourIds' => ['56e2a6ceb023df9f0b7b276c']];

        $mock = $this->getMockBuilder(DefaultController::class)
            ->setMethods(['get', 'getTourAttractions'])
            ->getMock();

        $mock->expects($this->any())
            ->method('get')
            ->withConsecutive(
                [$this->equalTo('app.hours.service')],
                [$this->equalTo('app.matching.service')]
            )
            ->willReturnOnConsecutiveCalls(new HoursService(), new MatchingService());

        $mock->expects($this->once())
            ->method('getTourAttractions')
            ->willReturn($attractions);

        $coordinates = new Coordinates();
        $coordinates->setLatitude($data['coordinates']['lat']);
        $coordinates->setLongitude($data['coordinates']['long']);


        $result = $mock->mapData($data, $location, $entity);
        $imageDataMapped = [];
        $imageDataMapped['originalUrl'] = str_replace('[format_id]', '70',
            $imageData['ssl_url']);//format_id must be image format;
        $imageDataMapped['rawData']['getyourguide'] = $imageData;
        $imageDataMapped['source'] = 'getyourguide';

        $expected = [
            'length' => 1440,
            'getyourguideId' => '123',
            'name' => $data['title'],
            'reviewsCount' => $data['number_of_ratings'],
            'rating' => 4.5,
            'rawData' => [
                'getyourguide' => [
                    'tour_id' => $data['tour_id'],
                    'tour_code' => $data['tour_code'],
                    'title' => $data['title'],
                    'abstract' => $data['abstract'],
                    'number_of_ratings' => $data['number_of_ratings'],
                    'overall_rating' => $data['overall_rating'],
                    'coordinates' => $data['coordinates'],
                    'price' => $data['price'],
                    'durations' => $data['durations']
                ]
            ],
            'attractionIds' => ['56e2a6ceb023df9f0b7b276c'],
            'attractionIdsInTour' => ['56e2a6ceb023df9f0b7b276c'],
            'externalData' => ['getyourguideIds' => [$data['tour_id']]],
            'locationId' => $location->getId(),
            'coordinates' => $coordinates,
            'images' => [$imageDataMapped],
            'getyourguideMainImage' => $imageDataMapped
        ];

        $this->assertEquals($expected, $result);

        $data = [
            'tour_id' => '123',
            'tour_code' => 'Louvre Ticket GYGT&T',
            'title' => 'Louvre Museum',
            'abstract' => 'Benefit from',
            'number_of_ratings' => 122,
            'overall_rating' => 4.5,
            'pictures' => [
                [
                    'id' => 45,
                    'url' => 'http://get',
                    'ssl_url' => 'http://your'
                ]
            ],
            'coordinates' => [
                'lat' => 44,
                'long' => 89
            ],
            'price' =>
                [
                    'values' =>
                        [
                            'amount' => 47.14
                        ]
                ],
            'durations' => [
                0 => [
                    'duration' => 1,
                    'unit' => 'day'
                ],
                1 => [
                    'duration' => 2,
                    'unit' => 'day'
                ],
                2 => [
                    'duration' => 3,
                    'unit' => 'day'
                ]
            ],
        ];

        $attractions = ['ourIds' => ['447']];

        $mock = $this->getMockBuilder(DefaultController::class)
            ->setMethods(['get', 'getTourAttractions'])
            ->getMock();

        $mock->expects($this->any())
            ->method('get')
            ->withConsecutive(
                [$this->equalTo('app.hours.service')],
                [$this->equalTo('app.matching.service')]
            )
            ->willReturnOnConsecutiveCalls(new HoursService(), new MatchingService());

        $mock->expects($this->any())
            ->method('getTourAttractions')
            ->willReturn($attractions);

        $entity = new BaseEntity();
        $entity->setCoordinates(new Coordinates());

        $location = new Location();

        $result = $mock->mapData($data, $location, $entity);

        $coordinates = new Coordinates();
        $coordinates->setLatitude($data['coordinates']['lat']);
        $coordinates->setLongitude($data['coordinates']['long']);


        $expected = [
            'length' => 2880,
            'getyourguideId' => $data['tour_id'],
            'name' => $data['title'],
            'reviewsCount' => $data['number_of_ratings'],
            'rating' => 4.5,
            'rawData' => [
                'getyourguide' => [
                    'tour_id' => $data['tour_id'],
                    'tour_code' => $data['tour_code'],
                    'title' => $data['title'],
                    'abstract' => $data['abstract'],
                    'number_of_ratings' => $data['number_of_ratings'],
                    'overall_rating' => $data['overall_rating'],
                    'coordinates' => $data['coordinates'],
                    'price' => $data['price'],
                    'durations' => $data['durations'],
                ]
            ],
            'externalData' => ['getyourguideIds' => [$data['tour_id']]],
            'locationId' => $location->getId(),
            'attractionIds' => ['447'],
            'attractionIdsInTour' => ['447'],
            'images' => [$imageDataMapped],
            'getyourguideMainImage' => $imageDataMapped
        ];

        $this->assertEquals($expected, $result);

    }
}