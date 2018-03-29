<?php

namespace Tests\TripPlanneraBundle\Controller;

use FacebookBundle\Controller\DefaultController;
use TripPlanneraBundle\Document\Location;
use TripPlanneraBundle\Document\BaseEntity;
use TripPlanneraBundle\Service\HoursService;


class FacebookDefaultControllerTest extends \PHPUnit_Framework_TestCase
{
    protected $facebookController;

    public function setUp()
    {
        $this->facebookController = new DefaultController();
    }

    public function testMapData()
    {
        $data = [
            'name' => 'park',
            'overall_star_rating' => 4.9,
            'parking' => [8],
            'website' => 'fb.com',
            'phone' => 78,
            'photos' => ['photo'],
            'cover' => ['cover'],
            'hours' => [
                "mon_1_open" => "06:00",
                "mon_1_close" => "01:00"
            ],
            'checkins' => 455,
            'category_list' => ['asd'],
            'rating_count' => 7878,
            'picture' => ['qwe'],
            'single_line_address' => 'rt',
            'about' => 'asd',
            'app_links' => ['hjk'],
            'location' => ['paris'],
            'id' => '87',
            'link'=>'https://www.facebook.com/museedulouvre/'
        ];
        $entity = new BaseEntity();
        $entity->setName('asd');
        $location = new Location();



        $result = $this->facebookController->mapData($data, $location, $entity);
        $expected = [
            'rawData' => [
                'facebook' => $data
            ],
            'facebookId'=>'https://www.facebook.com/museedulouvre/',
            'externalData' => ['facebookIds' => ['https://www.facebook.com/museedulouvre/']],
            'locationId' => $location->getId()
        ];
        $this->assertEquals($expected, $result);

    }
}
