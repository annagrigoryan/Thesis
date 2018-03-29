<?php

namespace Tests\TripPlanneraBundle\Service;


use Doctrine\Common\Persistence\ObjectManager;
use TripPlanneraBundle\Document\Attraction;
use TripPlanneraBundle\Document\Location;
use TripPlanneraBundle\Service\HoursService;
use TripPlanneraBundle\Service\MatchingService;
use ViatorBundle\ViatorBundle;

class MatchingServiceTest extends \PHPUnit_Framework_TestCase
{
    private $matchingService;
    private $viator;

    public function setUp()
    {
        $this->viator = new ViatorBundle();
        $this->matchingService = new MatchingService();
    }

    public function testGetTourAttractions()
    {

        $attraction1 = new Attraction();
        $attraction1->setName('Colosseum');
        $attraction1->id = '123';
        $attraction2 = new Attraction();
        $attraction2->setName('Roman Forum');
        $attraction2->id = '456';

        $attraction3 = new Attraction();
        $attraction3->setName('Royal Academy of Fine Arts)');
        $attraction3->id = '789';

        $attraction3 = new Attraction();
        $attraction3->setName('St. Petersburg Interior Theater (Theatre');
        $attraction3->id = '1234';


        $attractions = [
            $attraction1,
            $attraction2,
            $attraction3
        ];

        $texts = [];

//        $texts['shortDescription'] = 'The Colosseum is an oval amphitheatre in Rome, it has an average audience of 65,000.';

        $texts['shortDescription'] = 'The Roman Forum is an area surrounded by the ruins of several important ancient government buildings at the center of Rome.';
        $location = new Location();
        $location->id = 187;

        $mock = $this->getMockBuilder(MatchingService::class)
            ->setMethods(['getLocationAttractions', 'getAlternativeNames'])
            ->getMock();

        $mock->expects($this->once())
            ->method('getLocationAttractions')
            ->willReturn($attractions);

        $result = $mock->getTourAttractions($texts, $location);
        $expected = ['ourIds' => ['456']];

        $this->assertEquals($expected, $result);
    }
}
