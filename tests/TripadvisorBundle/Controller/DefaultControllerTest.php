<?php

namespace Tests\ClassicticBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use TripadvisorBundle\Controller\RestaurantController;
use TripPlanneraBundle\Document\BaseEntity;
use TripPlanneraBundle\Document\Restaurant;
use TripPlanneraBundle\Service\HoursService;
use TripPlanneraBundle\Document\Coordinates;
use TripPlanneraBundle\Document\Location;

class RestaurantControllerTest extends KernelTestCase
{

    private $defaultController;

    public function setUp()
    {
        self::bootKernel();

        $this->container = self::$kernel->getContainer();

        $this->defaultController = new RestaurantController();
    }

    public function testGetEntityFromApiResult()
    {
        $entity = new Restaurant();
        $entity->id = '123';
        $entity->tripadvisorId = '456';

        $fixtureDir = realpath($this->container->get('kernel')->getRootDir() . '/../tests/Resources');
        $html = file_get_contents($fixtureDir . '/restaurant1.html');

        $expected = [];
        $expected['id'] = '456';
        $expected['name'] = 'Wine Republic';
        $expected["reviewsCount"] = 299;
        $expected["rating"] = 4.5;
        $expected['latitude'] = (float)'40.18926';
        $expected['longitude'] = (float)'44.516045';
        $expected['postalCode'] = '0009';
        $expected['address'] = 'Tamanyan str. 2';
        $expected['phoneNumbers'] = ['+374 55 001100'];
        $expected["priceRange"] = ["$$", "$$$"];
        $expected["openHours"] = [
            [
                "day" => "Sunday",
                "value" => "12:00 PM - 12:00 AM"
            ],
            [
                "day" => "Monday",
                "value" => "12:00 PM - 12:00 AM"
            ],
            [
                "day" => "Tuesday",
                "value" => "12:00 PM - 12:00 AM"
            ],
            [
                "day" => "Wednesday",
                "value" => "12:00 PM - 12:00 AM"
            ],
            [
                "day" => "Thursday",
                "value" => "12:00 PM - 12:00 AM"
            ],
            [
                "day" => "Friday",
                "value" => "12:00 PM - 12:00 AM"
            ],
            [
                "day" => "Saturday",
                "value" => "12:00 PM - 12:00 AM"
            ]
        ];

        $expected["averagePrices"] = ["AMD 2,401", "AMD 9,605"];

        $expected["cuisines"] = [
            "Seafood",
            "European",
            "Wine Bar",
            "Italian",
            "French",
            "Mediterranean",
            "Vegetarian Friendly",
            "Vegan Options"
        ];
        $expected["meals"] = [
            "Lunch",
            "Dinner",
            "Drinks",
            "Brunch",
            "Late Night"
        ];
        $expected["restaurantFeatures"] = [
            "Takeout",
            "Reservations",
            "Outdoor Seating",
            "Seating",
            "Street Parking",
            "Highchairs Available",
            "Serves Alcohol",
            "Full Bar",
            "Wine and Beer",
            "Accepts American Express",
            "Accepts Mastercard",
            "Accepts Visa",
            "Free Wifi",
            "Waitstaff",
            "Accepts Credit Cards"
        ];
        $expected["goodFor"] = [
            "Romantic",
            "Business meetings",
            "Special occasions",
            "Bar scene",
            "Families with children"
        ];

        $expected["ratingSummary"] = [
            [
                "key" => "Food",
                "value" => 4.5
            ],
            [
                "key" => "Service",
                "value" => 4.5
            ],
            [
                "key" => "Value",
                "value" => 4.5
            ],
            [
                "key" => "Atmosphere",
                "value" => 5
            ]
        ];
        $result = $this->defaultController->getEntityFromApiResult($html, $entity);

        $this->assertEquals($expected, $result);

    }

    public function testGetEntitiesFromApiResults()
    {
        $fixtureDir = realpath($this->container->get('kernel')->getRootDir() . '/../tests/Resources');
        $html = file_get_contents($fixtureDir . '/restaurants-list1.html');
        $expectedResults = [];
        $expected = [];
        $expected['id'] = '12321316';
        $expected['name'] = 'Lavash.Restaurant';
        $expected["reviewsCount"] = 2734;
        $expected["rating"] = 3.5;
        $expected["priceRange"] = ["$$", "$$$"];
        $expected["cuisines"] = [
            "European",
            "Georgian",
            "Barbecue",
            "Armenian",
            "Vegetarian Friendly",
            "Vegan Options",
            "Gluten Free Options"
        ];
        $expectedResults[] = $expected;
        $expected = [];
        $expected['id'] = '13557844';
        $expected['name'] = 'Metelitsa';
        $expected["reviewsCount"] = 0;
        $expected["rating"] = 0;
        $expected["cuisines"] = [
            "Fast Food",
            "European",
            "Middle Eastern",
            "Eastern European",
            "Persian",
            "Armenian",
            "Caucasian"

        ];
        $expectedResults[] = $expected;
        $result = $this->defaultController->getEntitiesFromApiResults($html);
        $this->assertEquals($expectedResults, $result);

    }

}
