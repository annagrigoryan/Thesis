<?php

namespace Tests\TripPlanneraBundle\Controller;

use TripPlanneraBundle\Document\Event;
use TripPlanneraBundle\Document\BaseEntity;
use TripPlanneraBundle\Document\BaseCategory;
use TripPlanneraBundle\Document\Coordinates;
use TripPlanneraBundle\Document\Restaurant;
use TripPlanneraBundle\Document\Review;
use TripPlanneraBundle\Document\Hotel;

class BaseEntityTest extends \PHPUnit_Framework_TestCase
{
    protected $baseEntity;

    public function setUp()
    {
        $this->baseEntity = new BaseEntity();
    }

    public function testGetBookingDescription()
    {
        $values = 'new';
        $entity = new Hotel();
        $entity->setDescription($values);
        $rawData = [
            'booking' => [
                'hotel_data' => [
                    'hotel_description' => 'aaabbbccc',
                ]
            ]
        ];
        $entity->setRawData($rawData);
        $expected = 'aaabbbccc';
        $this->assertEquals($expected, $entity->getBookingDescription());
    }


    public function testGetBookingName()
    {
        $entity = new Hotel();
        $rawData = [
            'booking' => [
                'hotel_data' => [
                    'name' => 'asd',
                ]
            ]
        ];
        $entity->setRawData($rawData);
        $expected = 'asd';
        $this->assertEquals($expected, $entity->getBookingName());
    }

    public function testGetBookingAddress()
    {
        $entity = new Hotel();
        $rawData = [
            'booking' => [
                'hotel_data' => [
                    'address' => 'asd',
                ]
            ]
        ];
        $entity->setRawData($rawData);
        $expected = 'asd';
        $this->assertEquals($expected, $entity->getBookingAddress());
    }

    public function testGetBookingRating()
    {
        $entity = new Hotel();
        $rawData = [
            'booking' => [
                'hotel_data' => [
                    'review_score' => 2.3,
                ]
            ]
        ];
        $entity->setRawData($rawData);
        $expected = 2.3;
        $this->assertEquals($expected, $entity->getBookingRating());
    }

    public function testGetBookingReviewsCount()
    {
        $entity = new Hotel();
        $rawData = [
            'booking' => [
                'hotel_data' => [
                    'number_of_reviews' => 2.3,
                ]
            ]
        ];
        $entity->setRawData($rawData);
        $expected = 2.3;
        $this->assertEquals($expected, $entity->getBookingReviewsCount());
    }

    public function testGetBookingWebsites()
    {
        $entity = new Hotel();
        $rawData = [
            'booking' => [
                'hotel_data' => [
                    'url' => 'asd',
                ]
            ]
        ];
        $entity->setRawData($rawData);
        $expected = 'asd';
        $this->assertEquals($expected, $entity->getBookingWebsites());
    }

    public function testGetBookingCoordinates()
    {
        $entity = new Hotel();
        $coordinates = new Coordinates();
        $entity->setCoordinates($coordinates->setLatitude(78));
        $entity->setCoordinates($coordinates->setLongitude(54));
        $rawData = [
            'booking' => [
                'hotel_data' => [
                    'location' => [
                        'latitude' => 78,
                        'longitude' => 54
                    ]
                ]
            ]
        ];
        $entity->setRawData($rawData);

        $expected = $coordinates;
        $this->assertEquals($expected, $entity->getBookingCoordinates());
    }


    public function testGetBookingFacilities()
    {
        $entity = new Hotel();
        $rawData = [
            'booking' => [
                'hotel_data' => [
                    'hotel_facilities' => [
                        [
                            'name' => 'asd'
                        ],
                        [
                            'name' => 'qwe'
                        ]
                    ],
                ]
            ]
        ];
        $entity->setRawData($rawData);
        $expected = ['asd', 'qwe'];
        $this->assertEquals($expected, $entity->getBookingFacilities());
    }

    public function testNormalizeFacebookId()
    {
        $entity = new BaseEntity();
        $link = 'https://www.facebook.com/museedulouvre/';
        $result = $entity->normalizeFacebookId($link);
        $this->assertEquals('museedulouvre', $result);

        $entity = new BaseEntity();
        $link = 'https://facebook.com/museedulouvre/?ref=br_rs';
        $result = $entity->normalizeFacebookId($link);
        $this->assertEquals('museedulouvre', $result);

        $entity = new BaseEntity();
        $link = 'https://www.facebook.com/museedulouvre/';
        $result = $entity->normalizeFacebookId($link);
        $this->assertEquals('museedulouvre', $result);

        $entity = new BaseEntity();
        $link = 'http://www.facebook.com/museedulouvre/?ref=br_rs';
        $result = $entity->normalizeFacebookId($link);
        $this->assertEquals('museedulouvre', $result);

        $entity = new BaseEntity();
        $link = 'https://www.facebook.com/museedulouvre';
        $result = $entity->normalizeFacebookId($link);
        $this->assertEquals('museedulouvre', $result);

        $entity = new BaseEntity();
        $link = 'https://www.facebook.com/museedulouvre?ref=47474';
        $result = $entity->normalizeFacebookId($link);
        $this->assertEquals('museedulouvre', $result);

        $entity = new BaseEntity();
        $link = 'https://www.facebook.com/London-Film-Museum-279280433137/';
        $result = $entity->normalizeFacebookId($link);
        $this->assertEquals('279280433137', $result);

        $entity = new BaseEntity();
        $link = 'https://www.facebook.com/The-Sherlock-Holmes-Museum-5701497375';
        $result = $entity->normalizeFacebookId($link);
        $this->assertEquals('5701497375', $result);

        $entity = new BaseEntity();
        $link = 'https://www.facebook.com/The-Sherlock-Holmes-Museum-5705';
        $result = $entity->normalizeFacebookId($link);
        $this->assertEquals('The-Sherlock-Holmes-Museum-5705', $result);

        $entity = new BaseEntity();
        $link = 'https://www.facebook.com/The-Sherlock-Holmes-Museum-5705/89854446541';
        $result = $entity->normalizeFacebookId($link);
        $this->assertEquals('89854446541', $result);

        $entity = new BaseEntity();
        $link = 'https://www.facebook.com/The-Sherlock-Holmes-Museum-5705/898';
        $result = $entity->normalizeFacebookId($link);
        $this->assertEquals('898', $result);
    }

    public function testSetFacebookId()
    {
        $entity = new BaseEntity();
        $link = 'https://www.facebook.com/museedulouvre/?ref=br_rs';
        $entity->setFacebookId($link);
        $this->assertEquals('museedulouvre', $entity->getFacebookId());

        $entity = new BaseEntity();
        $link = 'https://facebook.com/museedulouvre/?ref=br_rs';
        $entity->setFacebookId($link);
        $this->assertEquals('museedulouvre', $entity->getFacebookId());

        $entity = new BaseEntity();
        $link = 'https://www.facebook.com/museedulouvre/';
        $entity->setFacebookId($link);
        $this->assertEquals('museedulouvre', $entity->getFacebookId());

        $entity = new BaseEntity();
        $link = 'http://www.facebook.com/museedulouvre/?ref=br_rs';
        $entity->setFacebookId($link);
        $this->assertEquals('museedulouvre', $entity->getFacebookId());

        $entity = new BaseEntity();
        $link = 'https://www.facebook.com/museedulouvre';
        $entity->setFacebookId($link);
        $this->assertEquals('museedulouvre', $entity->getFacebookId());

        $entity = new BaseEntity();
        $link = 'https://www.facebook.com/museedulouvre?ref=47474';
        $entity->setFacebookId($link);
        $this->assertEquals('museedulouvre', $entity->getFacebookId());

        $entity = new BaseEntity();
        $link = 'https://www.facebook.com/London-Film-Museum-279280433137/';
        $entity->setFacebookId($link);
        $this->assertEquals('279280433137', $entity->getFacebookId());

        $entity = new BaseEntity();
        $link = 'https://www.facebook.com/The-Sherlock-Holmes-Museum-5701497375';
        $entity->setFacebookId($link);
        $this->assertEquals('5701497375', $entity->getFacebookId());

        $entity = new BaseEntity();
        $link = 'https://www.facebook.com/The-Sherlock-Holmes-Museum-5705';
        $entity->setFacebookId($link);
        $this->assertEquals('The-Sherlock-Holmes-Museum-5705', $entity->getFacebookId());

        $entity = new BaseEntity();
        $link = 'https://www.facebook.com/The-Sherlock-Holmes-Museum-5705/89854446541';
        $entity->setFacebookId($link);
        $this->assertEquals('89854446541', $entity->getFacebookId());

        $entity = new BaseEntity();
        $link = 'https://www.facebook.com/The-Sherlock-Holmes-Museum-5705/898';
        $entity->setFacebookId($link);
        $this->assertEquals('898', $entity->getFacebookId());
    }

    public function testSetFoursquareId()
    {
        $entity = new BaseEntity();
        $link = 'https://foursquare.com/v/central-park/museedulouvre';
        $entity->setFoursquareId($link);
        $this->assertEquals('museedulouvre', $entity->getFoursquareId());

        $entity = new BaseEntity();
        $link = 'https://foursquare.com/v/central-park/museedulouvre/?ref=br_rs';
        $entity->setFoursquareId($link);
        $this->assertEquals('museedulouvre', $entity->getFoursquareId());

        $entity = new BaseEntity();
        $link = 'https://foursquare.com/v/central-park/museedulouvre/';
        $entity->setFoursquareId($link);
        $this->assertEquals('museedulouvre', $entity->getFoursquareId());

        $entity = new BaseEntity();
        $link = 'museedulouvre';
        $entity->setFoursquareId($link);
        $this->assertEquals('museedulouvre', $entity->getFoursquareId());
    }

    public function testGetFacebookId()
    {
        $entity = new BaseEntity();
        $entity->setFacebookId('https://www.facebook.com/museedulouvre');
        $this->assertEquals('museedulouvre', $entity->getFacebookId());

        $entity = new BaseEntity();
        $externalData = [
            'facebookIds' => ['456']
        ];
        $entity->setExternalData($externalData);
        $this->assertEquals('456', $entity->getFacebookId());

        $entity = new BaseEntity();
        $settings = [
            'facebookId' => '789'
        ];
        $entity->setSettings($settings);
        $this->assertEquals('789', $entity->getFacebookId());
    }

    public function testGetFacebookAddress()
    {
        $values = 'new';
        $entity = new BaseEntity();
        $entity->setAddress($values);
        $rawData = [
            'facebook' => [
                'single_line_address' => 'avenue'
            ]
        ];
        $entity->setRawData($rawData);
        $expected = 'avenue';
        $this->assertEquals($expected, $entity->getFacebookAddress());
    }

    public function testGetFacebookDescription()
    {
        $values = 'new';
        $entity = new BaseEntity();
        $entity->setDescription($values);
        $rawData = [
            'facebook' => [
                'description' => 'asda'
            ]
        ];
        $entity->setRawData($rawData);
        $expected = 'asda';
        $this->assertEquals($expected, $entity->getFacebookDescription());
    }

    public function testGetFacebookWebsites()
    {
        $values = 'abc';
        $entity = new BaseEntity();
        $entity->setWebsites($values);
        $rawData = [
            'facebook' => [
                'link' => 'www.aaa'
            ]
        ];
        $entity->setRawData($rawData);
        $expected = ['www.aaa'];
        $this->assertEquals($expected, $entity->getFacebookWebsites());
    }

    public function testGetFacebookName()
    {
        $values = 'new';
        $entity = new BaseEntity();
        $entity->setName($values);
        $rawData = [
            'facebook' => [
                'name' => 'The Louvre'
            ]
        ];
        $entity->setRawData($rawData);
        $expected = 'The Louvre';
        $this->assertEquals($expected, $entity->getFacebookName());
    }

    public function testGetFacebookRating()
    {
        $values = 'new';
        $entity = new BaseEntity();
        $entity->setRating($values);
        $rawData = [
            'facebook' => [
                'overall_star_rating' => 4.5
            ]
        ];
        $entity->setRawData($rawData);
        $expected = 4.5;
        $this->assertEquals($expected, $entity->getFacebookRating());
    }

    public function testGetFacebookReviewsCount()
    {
        $values = 'new';
        $entity = new BaseEntity();
        $entity->setReviewsCount($values);
        $rawData = [
            'facebook' => [
                'fan_count' => 7878
            ]
        ];
        $entity->setRawData($rawData);
        $expected = 7878;
        $this->assertEquals($expected, $entity->getFacebookReviewsCount());
    }

    public function testGetFacebookAlternativeNames()
    {
        $values = 'new';
        $entity = new BaseEntity();
        $entity->setAlternativeNames($values);
        $rawData = [
            'facebook' => [
                'name' => 'louvre'
            ]
        ];
        $entity->setRawData($rawData);
        $expected = ['louvre'];
        $this->assertEquals($expected, $entity->getFacebookAlternativeNames());
    }

    public function testGetFacebookOpenHours()
    {
        $values = '';
        $entity = new BaseEntity();
        $entity->setHours($values);
        $rawData = [
            'facebook' => [
                'hours' => ''
            ]
        ];
        $entity->setRawData($rawData);
        $expected = null;
        $this->assertEquals($expected, $entity->getFacebookOpenHours());

        $values = 'new';
        $entity = new BaseEntity();
        $entity->setHours($values);
        $rawData = [
            'facebook' => [
                'hours' => [
                    "mon_open" => "06:00",
                    "mon_close" => "01:00"
                ]
            ]
        ];
        $entity->setRawData($rawData);
        $expected = [
            "mon" => [
                [
                    'open' => "06:00",
                    'close' => "01:00"
                ]
            ]
        ];

        $this->assertEquals($expected, $entity->getFacebookOpenHours());


        $entity = new BaseEntity();
        $rawData = [
            'facebook' => [
                'hours' => [
                    "tue_1_open" => "09:00",
                    "tue_1_close" => "18:00",
                    "fri_1_open" => "10:00",
                    "fri_1_close" => "22:00",
                    "fri_2_open" => "23:00",
                    "fri_2_close" => "23:50",
                ]
            ]
        ];

        $entity->setRawData($rawData);

        $expected = [
            'tue' => [['open' => '09:00', 'close' => '18:00']],
            'fri' => [['open' => '10:00', 'close' => '22:00'], ['open' => '23:00', 'close' => '23:50']]
        ];
        $this->assertEquals($expected, $entity->getOpenHours());
    }

    public function testGetGooglePlaceId()
    {
        $entity = new BaseEntity();
        $entity->setGooglePlaceId(123);
        $this->assertEquals('123', $entity->getGooglePlaceId());

        $entity = new BaseEntity();
        $externalData = [
            'googleplacesIds' => ['456']
        ];
        $entity->setExternalData($externalData);
        $this->assertEquals('456', $entity->getGooglePlaceId());

        $entity = new BaseEntity();
        $settings = [
            'googleplacesId' => '789'
        ];
        $entity->setSettings($settings);
        $this->assertEquals('789', $entity->getGooglePlaceId());

    }

    public function testSetGooglePlaceId()
    {
        $externalData = [
            'googleplacesIds' => ['123']
        ];
        $settings = [
            'googleplacesId' => '789'
        ];

        $entity = new BaseEntity();
        $entity->setGooglePlaceId(123);
        $entity->setExternalData($externalData);
        $entity->setSettings($settings);
        $entity->setGooglePlaceId(456);

        $this->assertEquals('456', $entity->getGooglePlaceId());
        $expectedExternalData = $entity->getExternalData();
        $this->assertEquals(['456'], $expectedExternalData['googleplacesIds']);
        $expectedSettings = $entity->getSettings();
        $this->assertEquals('456', $expectedSettings['googleplacesId']);

        $entity = new BaseEntity();
        $entity->setGooglePlaceId(456);

        $this->assertEquals('456', $entity->getGooglePlaceId());
        $expectedExternalData = $entity->getExternalData();
        $this->assertEquals(null, $expectedExternalData);
        $expectedSettings = $entity->getSettings();
        $this->assertEquals(null, $expectedSettings);

    }

    public function testGetGoogleplacesAddress()
    {
        $values = 'new';
        $entity = new BaseEntity();
        $entity->setAddress($values);
        $rawData = [
            'googleplaces' => [
                'formatted_address' => 'address'
            ]
        ];
        $entity->setRawData($rawData);
        $expected = 'address';
        $this->assertEquals($expected, $entity->getGoogleplacesAddress());
    }

    public function testGetGoogleplacesRating()
    {
        $values = 'new';
        $entity = new BaseEntity();
        $entity->setRating($values);
        $rawData = [
            'googleplaces' => [
                'rating' => '3.8'
            ]
        ];
        $entity->setRawData($rawData);
        $expected = '3.8';
        $this->assertEquals($expected, $entity->getGoogleplacesRating());
    }

    public function testGetGoogleplacesReviewsCount()
    {
        $values = 'new';
        $entity = new BaseEntity();
        $entity->setReviewsCount($values);
        $rawData = [
            'googleplaces' => [
                'user_ratings_total' => '453'
            ]
        ];
        $entity->setRawData($rawData);
        $expected = '453';
        $this->assertEquals($expected, $entity->getGoogleplacesReviewsCount());
    }

    public function testGetGoogleplacesCoordinates()
    {
        $entity = new BaseEntity();
        $coordinates = new Coordinates();
        $coordinates->setLatitude(34.145);
        $coordinates->setLongitude(-118.42);

        $rawData = [
            'googleplaces' => [
                'geometry' => [
                    'location' => [
                        'lat' => 34.145,
                        'lng' => -118.42
                    ],
                    'viewport' => 'qwe'
                ]
            ]
        ];
        $entity->setRawData($rawData);
        $expected = $coordinates;
        $this->assertEquals($expected, $entity->getGoogleplacesCoordinates());
    }

    public function testGetGoogleplacesAlternativeNames()
    {
        $values = 'new';
        $entity = new BaseEntity();
        $entity->setName($values);
        $rawData = [
            'googleplaces' => [
                'name' => 'eifel',
            ]
        ];
        $entity->setRawData($rawData);
        $expected = ['eifel'];
        $this->assertEquals($expected, $entity->getGoogleplacesAlternativeNames());
    }

    public function testGetGoogleplacesOpenHours()
    {
        $values = '';
        $entity = new BaseEntity();
        $entity->setHours($values);
        $rawData = [
            'googleplaces' => [
                'opening_hours.periods' => ''
            ]
        ];
        $entity->setRawData($rawData);
        $expected = null;
        $this->assertEquals($expected, $entity->getGoogleplacesOpenHours());

        $values = 'new';
        $entity = new BaseEntity();
        $entity->setHours($values);
        $rawData = [
            'googleplaces' => [
                'opening_hours.periods' => [
                    'open_now' => true,
                    'periods' => [
                        'close' => [
                            'day' => 0,
                            'time' => "1930"
                        ],
                        'open' => [
                            'day' => 0,
                            'time' => "0930"
                        ]
                    ]
                ]
            ]
        ];
        $entity->setRawData($rawData);
        $expected = ['sun' => [['open' => ':', 'type' => 'fix'], ['close' => '19:30', 'open' => '09:30']]];
        $this->assertEquals($expected, $entity->getGoogleplacesOpenHours());
    }

    public function testNormaliseGoogleHours()
    {
        $periods = [
            'periods' => [
                'close' => [
                    'day' => 1,
                    'time' => "1930"
                ],
                'open' => [
                    'day' => 1,
                    'time' => "0930"
                ]
            ],
        ];

        $entity = new BaseEntity();
        $result = $entity->normaliseGoogleHours($periods);

        $expected = ['mon' => [['open' => '09:30', 'close' => '19:30']]];
        $this->assertEquals($expected, $result);

        $periods = [
            'periods' => [
                'open' => [
                    'day' => 0,
                    'time' => "0000"
                ]
            ],
        ];

        $entity = new BaseEntity();
        $result = $entity->normaliseGoogleHours($periods);

        $expected = [];
        $this->assertEquals($expected, $result);
    }

    public function testGetFoursquareId()
    {
        $entity = new BaseEntity();
        $entity->setFoursquareId(123);
        $this->assertEquals('123', $entity->getFoursquareId());

        $entity = new BaseEntity();
        $externalData = [
            'foursquareIds' => ['456']
        ];
        $entity->setExternalData($externalData);
        $this->assertEquals('456', $entity->getFoursquareId());

        $entity = new BaseEntity();
        $settings = [
            'foursquareId' => '789'
        ];
        $entity->setSettings($settings);
        $this->assertEquals('789', $entity->getFoursquareId());

    }

    public function testSetWikipediaId()
    {
        $entity = new BaseEntity();
        $link = 'https://en.wikipedia.org/wiki/Louvre';
        $entity->setWikipediaId($link);
        $this->assertEquals('Louvre', $entity->getWikipediaId());

        $entity = new BaseEntity();
        $link = 'http://en.wikipedia.org/wiki/Louvre';
        $entity->setWikipediaId($link);
        $this->assertEquals('Louvre', $entity->getWikipediaId());

        $entity = new BaseEntity();
        $link = 'http://en.wikipedia.org/wiki/Louvre?ref=br_rs';
        $entity->setWikipediaId($link);
        $this->assertEquals('Louvre', $entity->getWikipediaId());

        $entity = new BaseEntity();
        $link = 'Louvre';
        $entity->setWikipediaId($link);
        $this->assertEquals('Louvre', $entity->getWikipediaId());
    }

    public function testGetWikipediaId()
    {
        $entity = new BaseEntity();
        $entity->setWikipediaId('http://en.wikipedia.org/wiki/Louvre');
        $this->assertEquals('Louvre', $entity->getWikipediaId());

        $entity = new BaseEntity();
        $entity->wikipediaUrl = 'http://en.wikipedia.org/wiki/Louvre';
        $this->assertEquals('Louvre', $entity->getWikipediaId());
    }

    public function testGetWikipediaUrl()
    {
        $entity = new BaseEntity();
        $this->assertEquals(null, $entity->getWikipediaUrl());

        $entity = new BaseEntity();
        $entity->setWikipediaId('https://en.wikipedia.org/wiki/Louvre');
        $this->assertEquals('https://en.wikipedia.org/wiki/Louvre', $entity->getWikipediaUrl());
    }

    public function testGetWikipediaDescription()
    {
        $values = 'new';
        $entity = new BaseEntity();
        $entity->setDescription($values);
        $rawData = [
            'wikipedia' => [
                'extract' => 'aaabbbccc',
            ]
        ];
        $entity->setRawData($rawData);
        $expected = 'aaabbbccc';
        $this->assertEquals($expected, $entity->getWikipediaDescription());
    }

    public function testGetWikipediaShortDescription()
    {
        $values = 'new';
        $entity = new BaseEntity();
        $entity->setShortDescription($values);
        $rawData = [
            'wikipedia' => [
                'terms.description' => 'asdfghjk'
            ]
        ];

        $entity->setRawData($rawData);
        $expected = 'asdfghjk';
        $this->assertEquals($expected, $entity->getWikipediaShortDescription());
    }

    public function testGetWikipediaCoordinates()
    {
        $entity = new BaseEntity();
        $coordinates = new Coordinates();
        $entity->setCoordinates($coordinates->setLatitude(41.89016944));
        $entity->setCoordinates($coordinates->setLongitude(12.49226944));

        $rawData = [
            'wikipedia' => [
                'coordinates' => [
                    'lat' => 41.89016944,
                    'lon' => 12.49226944,
                ]
            ]
        ];
        $entity->setRawData($rawData);

        $expected = $coordinates;
        $this->assertEquals($expected, $entity->getWikipediaCoordinates());
    }

    public function testGetWebsites()
    {
        $values = ['http://abc.com', 'http://asd.def'];
        $entity = new BaseEntity();
        $entity->setWebsites($values);
        $rawData = [
            'googleplaces' => [
                'website' => 'http://aaa.com'
            ]
        ];
        $entity->setRawData($rawData);
        $expected = ['http://abc.com', 'http://asd.def','http://aaa.com'];
        $this->assertEquals($expected, $entity->getWebsites());


        $values = [ 'http://asd.def'];
        $entity = new BaseEntity();
        $entity->setWebsites($values);
        $rawData = [
            'googleplaces' => [
                'website' => 'http://aaa.com/123'
            ],
            'facebook' => [
                'link' => 'https://www.facebook.com/museedulouvre/'
            ],
            'foursquare' => [
                'url' => 'go.com/123'
            ]
        ];
        $entity->setRawData($rawData);
        $expected = [ 'http://asd.def','http://aaa.com/123', 'https://www.facebook.com/museedulouvre/', 'http://go.com/123'];

        $results = $entity->getWebsites();
        sort($results);
        sort($expected);
        $this->assertEquals($expected, $results);
    }

    public function testGetPhoneNumbers()
    {
        $values = ['123', '456'];
        $entity = new BaseEntity();
        $entity->setPhoneNumbers($values);
        $rawData = [
            'googleplaces' => [
                'international_phone_number' => '789'
            ],
            'foursquare' => [
                'contact' => [
                    'phone' => '654321'
                ]
            ]
        ];
        $entity->setRawData($rawData);
        $expected = $values;
        $expected[] = '789';
        $expected[] = '654321';
        $this->assertEquals($expected, $entity->getPhoneNumbers());


        $values = ['123', '456'];
        $entity = new BaseEntity();
        $entity->setPhoneNumbers($values);
        $rawData = [
            'googleplaces' => [
                'international_phone_number' => '456'
            ],
            'foursquare' => [

                'contact' => [
                    'phone' => '456'
                ]
            ]
        ];
        $entity->setRawData($rawData);
        $expected = $values;
        $this->assertEquals($expected, $entity->getPhoneNumbers());


        $values = ['123', '13579'];
        $entity = new BaseEntity();
        $entity->setPhoneNumbers($values);
        $rawData = [
            'googleplaces' => [
                'international_phone_number' => '1 3 5 7 9'
            ],
        ];
        $entity->setRawData($rawData);
        $expected = ['123', '13579'];
        $this->assertEquals($expected, $entity->getPhoneNumbers());

    }

    /**
     * @dataProvider NormaliseFoursquareHoursProvider
     */
    public function testNormaliseFoursquareHours($foursquareHours, $expected)
    {
        $entity = new BaseEntity();
        $result = $entity->normaliseFoursquareHours($foursquareHours);
        $this->assertEquals($expected, $result);
    }

    public function NormaliseFoursquareHoursProvider()
    {
        $testDatas = [];
        $hours2 = [
            [
                'open' => '00:00',
                'close' => '00:00'
            ]
        ];
        $hours1 = [
            [
                'open' => '08:30',
                'close' => '00:00'
            ]
        ];

        $testData1 = [
            [
                [
                    "days" => "Mon–Sat",
                    "open" =>
                        [
                            [
                                "renderedTime" => "8:30 AM–Midnight",
                            ],
                        ]
                ]
            ],
            [
                'mon' => $hours1,
                'tue' => $hours1,
                'wed' => $hours1,
                'thu' => $hours1,
                'fri' => $hours1,
                'sat' => $hours1,
            ]
        ];

        $testDatas[] = $testData1;

        $testData2 = [
            [
                [
                    "days" => "Mon",
                    "open" =>
                        [
                            [
                                "renderedTime" => "24 Hours",
                            ],
                        ]
                ]
            ],
            [
                'mon' => [
                    [
                        'open' => '00:00',
                        'close' => '00:00'
                    ]
                ]
            ]
        ];

        $testDatas[] = $testData2;

        $testData3 = [
            [
                [
                    "days" => "Sun",
                    "open" =>
                        [
                            [
                                "renderedTime" => "7:30 AM–9:00 PM",
                            ],

                        ],
                ]
            ],
            [
                'sun' => [
                    [
                        'open' => '07:30',
                        'close' => '21:00'
                    ]
                ]
            ]
        ];

        $testDatas[] = $testData3;

        $testData4 = [
            [
                [
                    "days" => "Mon–Sat",
                    "open" =>
                        [
                            [
                                "renderedTime" => "24 Hours",
                            ],
                        ]
                ]
            ],
            [
                'mon' => $hours2,
                'tue' => $hours2,
                'wed' => $hours2,
                'thu' => $hours2,
                'fri' => $hours2,
                'sat' => $hours2,
            ]
        ];

        $testDatas[] = $testData4;

        return $testDatas;
    }

    public function testNormaliseFacebookHours()
    {
        $data = [
            "mon_1_open" => "06:00",
            "mon_1_close" => "01:00",
            "tue_1_open" => "06:00",
            "tue_1_close" => "01:00",
            "wed_1_open" => "06:00",
            "wed_1_close" => "01:00",
            "thu_1_open" => "06:00",
            "thu_1_close" => "01:00",
            "fri_1_open" => "06:00",
            "fri_1_close" => "01:00",
            "sat_1_open" => "06:00",
            "sat_1_close" => "01:00",
            "sun_1_open" => "06:00",
            "sun_1_close" => "01:00"
        ];
        $entity = new BaseEntity();
        $result = $entity->normaliseFacebookHours($data);
        $expected = [
            'mon' =>
                [[
                    'open' => '06:00',
                    'close' => '01:00'
                ]],
            'tue' =>
                [[
                    'open' => '06:00',
                    'close' => '01:00'
                ]],
            'wed' =>
                [[
                    'open' => '06:00',
                    'close' => '01:00'
                ]],
            'thu' =>
                [[
                    'open' => '06:00',
                    'close' => '01:00'
                ]],
            'fri' =>
                [[
                    'open' => '06:00',
                    'close' => '01:00'
                ]],
            'sat' =>
                [[
                    'open' => '06:00',
                    'close' => '01:00'
                ]],
            'sun' =>
                [[
                    'open' => '06:00',
                    'close' => '01:00'
                ]]
        ];
        $this->assertEquals($expected, $result);
    }

    public function testConvertFoursquareHours()
    {
        $entity = new BaseEntity();
        $hoursString = '24 Hours';
        $result = $entity->convertFoursquareHours($hoursString);
        $expected[] = ['open' => '00:00', 'close' => '00:00'];
        $this->assertEquals($expected, $result);

        $hoursString = 'noon–1:30 PM';
        $result = $entity->convertFoursquareHours($hoursString);
        $expected = ['12:00', '13:30'];
        $this->assertEquals($expected, $result);

        $hoursString = '11:30 AM–Midnight';
        $result = $entity->convertFoursquareHours($hoursString);
        $expected = ['11:30', '00:00'];
        $this->assertEquals($expected, $result);

        $hoursString = '9:00 AM–1:30 AM';
        $result = $entity->convertFoursquareHours($hoursString);
        $expected = ['09:00', '01:30'];
        $this->assertEquals($expected, $result);
    }

    public function testGetFoursquareAddress()
    {
        $values = 'new';
        $entity = new BaseEntity();
        $entity->setAddress($values);
        $rawData = [
            'foursquare' => [
                'location.address' => 'avenue'
            ]
        ];
        $entity->setRawData($rawData);
        $expected = 'avenue';
        $this->assertEquals($expected, $entity->getFoursquareAddress());
    }

    public function testGetFoursquareCoordinates()
    {
        $entity = new BaseEntity();
        $coordinates = new Coordinates();
        $coordinates->setLatitude(87.55);
        $coordinates->setLongitude(4.777);

        $rawData = [
            'foursquare' => [
                'location' => [
                    'lng' => 4.777,
                    'lat' => 87.55,
                ]
            ]
        ];
        $entity->setRawData($rawData);
        $expected = $coordinates;
        $this->assertEquals($expected, $entity->getFoursquareCoordinates());
    }

    public function testGetFoursquareWebsites()
    {
        $values = 'new';
        $entity = new BaseEntity();
        $entity->setWebsites($values);
        $rawData = [
            'foursquare' => [
                'url' => 'https://fours.com',
                'menu.url' => 'https://fours/menu.com'
            ]
        ];
        $entity->setRawData($rawData);
        $expected = ['https://fours.com', 'https://fours/menu.com'];
        $this->assertEquals($expected, $entity->getFoursquareWebsites());
    }

    public function testGetFoursquarePostalCode()
    {
        $values = 'new';
        $entity = new BaseEntity();
        $entity->setPostalCode($values);
        $rawData = [
            'foursquare' => [
                'location.postalCode' => 418
            ]
        ];
        $entity->setRawData($rawData);
        $expected = 418;
        $this->assertEquals($expected, $entity->getFoursquarePostalCode());
    }

    public function testGetFoursquareName()
    {
        $values = 'new';
        $entity = new BaseEntity();
        $entity->setName($values);
        $rawData = [
            'foursquare' => [
                'name' => 'louvre'
            ]
        ];
        $entity->setRawData($rawData);
        $expected = 'louvre';
        $this->assertEquals($expected, $entity->getFoursquareName());
    }

    public function testGetFoursquareAlternativeNames()
    {
        $values = 'new';
        $entity = new BaseEntity();
        $entity->setName($values);
        $rawData = [
            'foursquare' => [
                'name' => 'louvre',
                'contact.facebookName' => 'louvre museum'
            ]
        ];
        $entity->setRawData($rawData);
        $expected = ['louvre', 'louvre museum'];
        $this->assertEquals($expected, $entity->getFoursquareAlternativeNames());
    }

    public function testGetFoursquareDescription()
    {
        $values = 'new';
        $entity = new BaseEntity();
        $entity->setDescription($values);
        $rawData = [
            'foursquare' => [
                'description' => 'qwert',
            ]
        ];
        $entity->setRawData($rawData);
        $expected = 'qwert';
        $this->assertEquals($expected, $entity->getFoursquareDescription());
    }

    public function testGetFoursquareReviewsCount()
    {
        $values = 'new';
        $entity = new BaseEntity();
        $entity->setReviewsCount($values);
        $rawData = [
            'foursquare' => [
                'ratingSignals' => 5000,
            ]
        ];
        $entity->setRawData($rawData);
        $expected = 5000;
        $this->assertEquals($expected, $entity->getFoursquareReviewsCount());
    }

    public function testGetFoursquareRating()
    {
        $values = 'new';
        $entity = new BaseEntity();
        $entity->setRating($values);
        $rawData = [
            'foursquare' => [
                'rating' => 4.5,
            ]
        ];
        $entity->setRawData($rawData);
        $expected = 4.5;
        $this->assertEquals($expected, $entity->getFoursquareRating());
    }

    public function testGetFoursquareOpenHours()
    {
        $values = '';
        $entity = new BaseEntity();
        $entity->setHours($values);
        $rawData = [
            'foursquare' => [
                'hours.timeframes' => ''
            ]
        ];
        $entity->setRawData($rawData);
        $expected = null;
        $this->assertEquals($expected, $entity->getFoursquareOpenHours());

        $values = 'new';
        $entity = new BaseEntity();
        $entity->setHours($values);
        $rawData = [
            'foursquare' => [
                'hours.timeframes' => [

                    [
                        "days" => "Mon–Tue",
                        "open" =>
                            [
                                [
                                    "renderedTime" => "8:30 AM–Midnight",
                                ],
                            ]
                    ]
                ]

            ]
        ];
        $entity->setRawData($rawData);
        $expected = [
            "mon" => [
                [
                    'open' => '08:30',
                    'close' => '00:00'
                ]
            ],
            "tue" => [
                [
                    'open' => '08:30',
                    'close' => '00:00'
                ]
            ]
        ];
        $this->assertEquals($expected, $entity->getFoursquareOpenHours());
    }

    public function testSetPrice()
    {
        $entity = new BaseEntity();
        $entity->setPrice(10.74);

        $expected = 10.74;
        $this->assertEquals($expected, $entity->getPrice());
    }

    public function testGetPrice()
    {
        $entity = new BaseEntity();
        $entity->setPrice(7.85);
        $rawData = [
            'price' => 7.85
        ];

        $entity->setRawData($rawData);
        $expected = 7.85;
        $this->assertEquals($expected, $entity->getPrice());
    }

    public function testSetPriceText()
    {
        $entity = new BaseEntity();
        $entity->setPriceText('adult/reduced €11/6.50');

        $expected = 'adult/reduced €11/6.50';
        $this->assertEquals($expected, $entity->getPriceText());
    }

    public function testGetPriceText()
    {
        $entity = new BaseEntity();
        $entity->setPriceText('cloisters €4, archaeological walk €4');

        $expected = 'cloisters €4, archaeological walk €4';
        $this->assertEquals($expected, $entity->getPriceText());
    }

    public function testSetPriceUrl()
    {
        $entity = new BaseEntity();
        $entity->setPriceUrl('www.price.com');

        $expected = 'www.price.com';
        $this->assertEquals($expected, $entity->getPriceUrl());
    }

    public function testGetPriceUrl()
    {
        $entity = new BaseEntity();
        $entity->setPriceUrl('www.price.com');

        $expected = 'www.price.com';
        $this->assertEquals($expected, $entity->getPriceUrl());
    }

    public function testSortOpenHoursHours()
    {
        $entity = new BaseEntity();
        $a['open'] = '10:00';
        $b['open'] = '13:00';
        $expected = -1;
        $this->assertEquals($expected, $entity->sortOpenHoursHours($a, $b));

        $entity = new BaseEntity();
        $a['open'] = '20:00';
        $b['open'] = '15:00';
        $expected = 1;
        $this->assertEquals($expected, $entity->sortOpenHoursHours($a, $b));
    }

    public function testGetOpenHour()
    {
        $openHours = [];

        $day = 0;
        $startHour = '08:00';
        $endHour = $startHour;
        $isOpenNextDay = false;
        $result = $this->baseEntity->getOpenHour($openHours, $day, $startHour, $endHour, $isOpenNextDay);
        $expected = [
            'mon' => [
                [
                    'open' => '08:00',
                    'type' => 'fix'
                ]
            ]
        ];
        $this->assertEquals($expected, $openHours);

        $day = 2;
        $startHour = '07:00';
        $endHour = '13:00';
        $isOpenNextDay = false;
        $openHours = [];
        $result = $this->baseEntity->getOpenHour($openHours, $day, $startHour, $endHour, $isOpenNextDay);
        $expected = [
            'wed' => [
                [
                    'open' => '07:00',
                    'close' => '13:00'
                ]
            ]
        ];
        $this->assertEquals($expected, $openHours);

        $startHour = '23:00';
        $endHour = '02:00';
        $isOpenNextDay = true;
        $result = $this->baseEntity->getOpenHour($openHours, $day, $startHour, $endHour, $isOpenNextDay);
        $expected = [
            'wed' => [
                [
                    'open' => '07:00',
                    'close' => '13:00'
                ],
                [
                    'open' => '23:00',
                    'close' => '02:00'
                ]
            ],
            'thu' => [
                [
                    'open' => '00:00',
                    'close' => '02:00'
                ]
            ]
        ];
        $this->assertEquals($expected, $openHours);
    }

    public function testSetOpenHours()
    {
        $entity = new BaseEntity();
        $entity->setOpenHours(['08:30']);

        $expected = ['08:30'];
        $this->assertEquals($expected, $entity->getOpenHours());
    }

    public function testGetOpenHours()
    {
        $entity = new BaseEntity();
        $rawData = [
            'googleplaces' => [
                'opening_hours.periods' => [
                    'periods' => [
                        'close' => [
                            'day' => 0,
                            'time' => "1930"
                        ],
                        'open' => [
                            'day' => 0,
                            'time' => "0830"
                        ]
                    ]
                ]
            ],
            'facebook' => [
                'hours' => [
                    "tue_1_open" => "09:00",
                    "tue_1_close" => "18:00"
                ]
            ]
        ];

        $entity->setRawData($rawData);

        $expected = ['sun' => [['open' => '08:30', 'close' => '19:30']]];
        $this->assertEquals($expected, $entity->getOpenHours());


        $values = ['open' => '10:00', 'close' => '19:00'];
        $expected = ['open' => '10:00', 'close' => '19:00'];
        $entity = new BaseEntity();
        $entity->setOpenHours($values);
        $this->assertEquals($expected, $entity->getOpenHours());

    }


    public function testGetHours()
    {
        $entity = new BaseEntity();
        $entity->setHours(['08:00']);

        $expected = ['08:00'];
        $this->assertEquals($expected, $entity->getHours());
    }

    public function testSetHoursText()
    {
        $entity = new BaseEntity();
        $entity->setHoursText('eight am');

        $expected = 'eight am';
        $this->assertEquals($expected, $entity->getHoursText());
    }

    public function testGetHoursText()
    {
        $entity = new BaseEntity();
        $entity->setHoursText('nine am');

        $expected = 'nine am';
        $this->assertEquals($expected, $entity->getHoursText());
    }

    public function testSetHoursUrl()
    {
        $entity = new BaseEntity();
        $entity->setHoursUrl('www.hours.com');

        $expected = 'www.hours.com';
        $this->assertEquals($expected, $entity->getHoursUrl());
    }

    public function testGetHoursUrl()
    {
        $entity = new BaseEntity();
        $entity->setHoursUrl('www.hours.com');

        $expected = 'www.hours.com';
        $this->assertEquals($expected, $entity->getHoursUrl());
    }

    public function testSetSuggestedHours()
    {
        $entity = new BaseEntity();
        $entity->setSuggestedHours(['07:00']);

        $expected = ['07:00'];
        $this->assertEquals($expected, $entity->getSuggestedHours());
    }

    public function testGetSuggestedHours()
    {
        $entity = new BaseEntity();
        $entity->setSuggestedHours(['08:00']);

        $expected = ['08:00'];
        $this->assertEquals($expected, $entity->getSuggestedHours());
    }

    public function testGetDescription()
    {
        $entity = new BaseEntity();
        $rawData = [
            'facebook' => [
                'description' => 'asda'
            ],
            'foursquare' => [
                'description' => 'qwert',
            ]
        ];

        $entity->setRawData($rawData);

        $expected = 'qwert';
        $this->assertEquals($expected, $entity->getDescription());


        $values = 'abcdefghijkl';
        $entity = new BaseEntity();
        $entity->setDescription($values);
        $rawData = [
            'facebook' => [
                'description' => 'asda'
            ],
            'foursquare' => [
                'description' => 'qwert',
            ]
        ];

        $entity->setRawData($rawData);

        $expected = 'abcdefghijkl';
        $this->assertEquals($expected, $entity->getDescription());
    }

    public function testGetShortDescription()
    {
        $entity = new BaseEntity();
        $entity->setShortDescription('asdfghjk');

        $expected = 'asdfghjk';
        $this->assertEquals($expected, $entity->getShortDescription());
    }

    public function testSetMediumDescription()
    {
        $entity = new BaseEntity();
        $entity->setMediumDescription('qwerrtyuu');

        $expected = 'qwerrtyuu';
        $this->assertEquals($expected, $entity->getMediumDescription());
    }

    public function testGetMediumDescription()
    {
        $entity = new BaseEntity();
        $entity->setMediumDescription('qwerrtyuu');

        $expected = 'qwerrtyuu';
        $this->assertEquals($expected, $entity->getMediumDescription());
    }

    public function testGenerateMediumDescription()
    {
        $entity = new BaseEntity();
        $entity->setMediumDescription('wqwewrwer');
        $expected = 'wqwewrwer';
        $this->assertEquals($expected, $entity->generateMediumDescription());

        $entity = new BaseEntity();
        $entity->setDescription('asxcxcbxcbasd');
        $expected = 'asxcxcbxcbasd';
        $this->assertEquals($expected, $entity->generateMediumDescription());

        $entity = new BaseEntity();
        $entity->setDescription('Basilica of the Sagrada Familia is a large Roman Catholic church in Barcelona, designed by Spanish architect Antoni Gaudí and the inspiration of a bookseller. It started to be constructed in 1852. Gaudís work on the building is part of a UNESCO World Heritage Site. The style of la Sagrada Família is variously likened to Spanish Late Gothic, Catalan Modernism and to Art Nouveau or Catalan Noucentisme.');
        $expected = 'Basilica of the Sagrada Familia is a large Roman Catholic church in Barcelona, designed by Spanish architect Antoni Gaudí and the inspiration of a bookseller. It started to be constructed in 1852. Gaudís work on the building is part of a UNESCO World Heritage Site. The style of la Sagrada Família...';
        $this->assertEquals($expected, $entity->generateMediumDescription());
    }

    public function testGenerateShortDescription()
    {
        $entity = new BaseEntity();
        $entity->setShortDescription('wqwewrwer');
        $expected = 'wqwewrwer';
        $this->assertEquals($expected, $entity->generateShortDescription());

        $entity = new BaseEntity();
        $entity->setDescription('asxcxcbxcbasd');
        $expected = 'asxcxcbxcbasd';
        $this->assertEquals($expected, $entity->generateShortDescription());

        $entity = new BaseEntity();
        $entity->setDescription('Basilica of the Sagrada Familia is a large Roman Catholic church in Barcelona, designed by Antoni Gaudí and the inspiration of a bookseller. The constructions started in 1852. The Basilica is a part of a UNESCO World Heritage list. The style of Sagrada Família is Spanish Late Gothic and Catalan Modernism.');
        $expected = 'Basilica of the Sagrada Familia is a large Roman Catholic church in Barcelona, designed by Antoni Gaudí and the inspiration of a bookseller. The constructions...';
        $this->assertEquals($expected, $entity->generateShortDescription());
    }

    public function testGetDescriptionForPDF()
    {
        $entity = new BaseEntity();
        $entity->setMediumDescription('wqwewrwer');
        $expected = 'wqwewrwer';
        $this->assertEquals($expected, $entity->getDescriptionForPDF());

        $entity = new BaseEntity();
        $entity->setShortDescription('asdasdasdasd');
        $expected = 'asdasdasdasd';
        $this->assertEquals($expected, $entity->getDescriptionForPDF());

        $entity = new BaseEntity();
        $entity->setDescription('zvgafbdfbzdb');
        $expected = 'zvgafbdfbzdb';
        $this->assertEquals($expected, $entity->getDescriptionForPDF());

        $entity = new BaseEntity();
        $expected = '';
        $this->assertEquals($expected, $entity->getDescriptionForPDF());
    }

    public function testGetAddress()
    {
        $entity = new BaseEntity();
        $rawData = [
            'facebook' => [
                'single_line_address' => 'street'
            ],
            'foursquare' => [
                'location.address' => 'avenue'
            ]
        ];
        $entity->setRawData($rawData);
        $expected = 'avenue';
        $this->assertEquals($expected, $entity->getAddress());


        $values = 'address';
        $entity = new BaseEntity();
        $entity->setAddress($values);
        $rawData = [
            'facebook' => [
                'single_line_address' => 'avenue'
            ],
            'foursquare' => [
                'location.address' => 'street'
            ]
        ];
        $entity->setRawData($rawData);
        $expected = 'address';
        $this->assertEquals($expected, $entity->getAddress());
    }

    public function testGetPostalCode()
    {
        $entity = new BaseEntity();
        $rawData = [
            'foursquare' => [
                'location.postalCode' => '91000'
            ],
            'classictic' => [
                'location.postcode' => '92555'
            ]
        ];
        $entity->setRawData($rawData);
        $expected = '91000';
        $this->assertEquals($expected, $entity->getPostalCode());


        $values = '90000';
        $entity = new BaseEntity();
        $entity->setPostalCode($values);
        $rawData = [
            'foursquare' => [
                'location.postalCode' => '91000'
            ],
            'classictic' => [
                'location.postcode' => '92555'
            ]
        ];
        $entity->setRawData($rawData);
        $expected = '90000';
        $this->assertEquals($expected, $entity->getPostalCode());
    }

    public function testGetLocationName()
    {
        $entity = new Event();
        $rawData = [
            'ticketmaster' => [
                '_embedded' => [
                    'venues' => [
                        'name' => 'louvre'
                    ]
                ]
            ],
            'classictic' => [
                'location' => [
                    'venue' => 'The Louvre'
                ]
            ]
        ];
        $entity->setRawData($rawData);
        $expected = 'The Louvre';
        $this->assertEquals($expected, $entity->getLocationName());


        $values = 'The Louvre Museum';
        $entity = new BaseEntity();
        $entity->setLocationName($values);
        $rawData = [
            'ticketmaster' => [
                '_embedded' => [
                    'venues' => [
                        'name' => 'louvre'
                    ]
                ]
            ],
            'classictic' => [
                'location' => [
                    'venue' => 'The Louvre'
                ]
            ]
        ];
        $entity->setRawData($rawData);
        $expected = 'The Louvre Museum';
        $this->assertEquals($expected, $entity->getLocationName());
    }

    public function testSetLocationName()
    {
        $entity = new BaseEntity();
        $entity->setLocationName('louvre');

        $expected = 'louvre';
        $this->assertEquals($expected, $entity->getLocationName());
    }

    public function testGetRating()
    {
        $entity = new BaseEntity();
        $entity->setRating('4.8');

        $expected = '4.8';
        $this->assertEquals($expected, $entity->getRating());
    }

    public function testGetReviewsCount()
    {
        $entity = new BaseEntity();
        $entity->setReviewsCount('4848');

        $expected = '4848';
        $this->assertEquals($expected, $entity->getReviewsCount());
    }

    public function testSetReviews()
    {
        $entity = new BaseEntity();
        $entity->setReviews(['asdfg']);

        $expected = ['asdfg'];
        $this->assertEquals($expected, $entity->getReviews());
    }

    public function testGetReviews()
    {
        $entity = new BaseEntity();
        $entity->setReviews(['asdfg']);

        $expected = ['asdfg'];
        $this->assertEquals($expected, $entity->getReviews());
    }

    public function testSetEmails()
    {
        $entity = new BaseEntity();
        $entity->setEmails(['email@gmail.com']);

        $expected = ['email@gmail.com'];
        $this->assertEquals($expected, $entity->getEmails());
    }

    public function testGetEmails()
    {
        $entity = new BaseEntity();
        $entity->setEmails(['email@gmail.com']);

        $expected = ['email@gmail.com'];
        $this->assertEquals($expected, $entity->getEmails());
    }

    public function testSetLocationId()
    {
        $entity = new BaseEntity();
        $entity->setLocationId('56d5fdd8449ec11c060004c3');

        $expected = '56d5fdd8449ec11c060004c3';
        $this->assertEquals($expected, $entity->getLocationId());

    }

    public function testGetLocationId()
    {
        $entity = new BaseEntity();
        $entity->setLocationId('56d5fdd8449ec11c060004c3');

        $expected = '56d5fdd8449ec11c060004c3';
        $this->assertEquals($expected, $entity->getLocationId());

    }

    public function testSetSecondName()
    {
        $entity = new BaseEntity();
        $entity->setSecondName('louvre museum');

        $expected = 'louvre museum';
        $this->assertEquals($expected, $entity->getSecondName());
    }

    public function testGetSecondName()
    {
        $entity = new BaseEntity();
        $entity->setSecondName('louvre museum');

        $expected = 'louvre museum';
        $this->assertEquals($expected, $entity->getSecondName());
    }

    public function testSetCategoryIds()
    {
        $categoryIds = [123];
        $entity = new BaseEntity();
        $entity->setCategoryIds($categoryIds);

        $expected = [123];
        $this->assertEquals($expected, $entity->getCategoryIds());
    }

    public function testGetCategoryIds()
    {
        $categoryIds = [123];
        $entity = new BaseEntity();
        $entity->setCategoryIds($categoryIds);

        $expected = [123];
        $this->assertEquals($expected, $entity->getCategoryIds());
    }

    public function testGetCategories()
    {
        $entity = new BaseEntity();
        $entity->setCategories('music');

        $expected = 'music';
        $this->assertEquals($expected, $entity->getCategories());
    }

    public function testSetCategories()
    {
        $entity = new BaseEntity();
        $entity->setCategories('music');

        $expected = 'music';
        $this->assertEquals($expected, $entity->getCategories());
    }

    public function testSetInterests()
    {
        $entity = new BaseEntity();
        $entity->setInterests(['shopping']);

        $expected = ['shopping'];
        $this->assertEquals($expected, $entity->getInterests());
    }

    public function testGetInterests()
    {
        $entity = new BaseEntity();
        $entity->setInterests(['shopping']);

        $expected = ['shopping'];
        $this->assertEquals($expected, $entity->getInterests());
    }

    public function testSetEnergy()
    {
        $entity = new BaseEntity();
        $entity->setEnergy(5);

        $expected = 5;
        $this->assertEquals($expected, $entity->getEnergy());
    }

    public function testGetEnergy()
    {
        $entity = new BaseEntity();
        $entity->setEnergy(5);

        $expected = 5;
        $this->assertEquals($expected, $entity->getEnergy());
    }

    public function testGetCategoriesTitles()
    {
        $entity = new BaseEntity();

        $category1 = new BaseCategory();
        $category1->setTitle('parks');
        $category1->level = 1;

        $category2 = new BaseCategory();
        $category2->setTitle('hello');
        $category2->level = 1;

        $category3 = new BaseCategory();
        $category3->setTitle('some');
        $category3->level = 2;

        $categories = [];
        $categories[] = $category1;
        $categories[] = $category2;
        $categories[] = $category3;

        $entity->setCategories($categories);
        $this->assertEquals(['parks', 'hello'], $entity->getCategoriesTitles());
    }

    public function testFillInterests()
    {
        $interestsValues = [];
        $entity = new BaseEntity();
        $entity->interestsKeys = ['familyKids'];

        $entity->setInterests([1]);
        $entity->fillInterests($interestsValues);
    }

    public function testGetPossibleNames()
    {
        $entity = new BaseEntity();
        $entity->setAlternativeNames(['louvre']);
        $entity->setName('The Louvre');
        $entity->setSecondName('Louvre Museum');

        $expected = ['louvre', 'The Louvre', 'Louvre Museum'];
        $this->assertEquals($expected, $entity->getPossibleNames());

        $entity = new BaseEntity();
        $entity->setAlternativeNames(['louvre']);
        $entity->setName('The Louvre (paris)');
        $entity->setSecondName('The Louvre');

        $expected = ['louvre', 'The Louvre (paris)', 'The Louvre', 'paris', 'The Louvre'];
        $this->assertEquals($expected, $entity->getPossibleNames());
    }

    public function testGetExternalLink()
    {
        $baseEntity = new BaseEntity();
        $rawData = [];
        $baseEntity->setRawData($rawData);
        $expected = '';
        $this->assertEquals($expected, $baseEntity->getExternalLink());

        $rawData = ['getyourguide' => ['url' => 'https://www.getyourguide.com/munich-l26/munich-hop-onhop-off-sightseeing-tour-24h48h-ticket-t31921/?partner_id=LTQGV62&psrc=partner_api&currency=USD']];
        $baseEntity->setRawData($rawData);
        $expected = 'https://www.getyourguide.com/munich-l26/munich-hop-onhop-off-sightseeing-tour-24h48h-ticket-t31921/?partner_id=LTQGV62&psrc=partner_api&currency=USD';
        $this->assertEquals($expected, $baseEntity->getExternalLink());

        $rawData = ['getyourguide' => ['url' => 'https://www.getyourguide.com/munich-l26/munich-hop-onhop-off-sightseeing-tour-24h48h-ticket-t31921/?p=abc&psrc=partner_api&currency=USD']];
        $baseEntity->setRawData($rawData);
        $expected = 'https://www.getyourguide.com/munich-l26/munich-hop-onhop-off-sightseeing-tour-24h48h-ticket-t31921/?p=abc&psrc=partner_api&currency=USD&partner_id=LTQGV62';
        $this->assertEquals($expected, $baseEntity->getExternalLink());

        $rawData = ['getyourguide' => ['url' => 'https://www.getyourguide.com/munich-l26/munich-hop-onhop-off-sightseeing-tour-24h48h-ticket-t31921/?partner_id=123&psrc=partner_api&currency=USD']];
        $baseEntity->setRawData($rawData);
        $expected = 'https://www.getyourguide.com/munich-l26/munich-hop-onhop-off-sightseeing-tour-24h48h-ticket-t31921/?partner_id=LTQGV62&psrc=partner_api&currency=USD';
        $this->assertEquals($expected, $baseEntity->getExternalLink());

        $rawData = ['getyourguide' => ['url' => 'https://www.getyourguide.com/munich-l26/munich-hop-onhop-off-sightseeing-tour-24h48h-ticket-t31921/?psrc=partner_api&currency=USD']];
        $baseEntity->setRawData($rawData);
        $expected = 'https://www.getyourguide.com/munich-l26/munich-hop-onhop-off-sightseeing-tour-24h48h-ticket-t31921/?psrc=partner_api&currency=USD&partner_id=LTQGV62';
        $this->assertEquals($expected, $baseEntity->getExternalLink());

        $rawData = ['classictic' => ['link' => 'https://www.classictic.com/en/capuchins_crypt__sacred_music_in_the_heart_of_rome/31989/270783/?r=1415442']];
        $baseEntity->setRawData($rawData);
        $expected = 'https://www.classictic.com/en/capuchins_crypt__sacred_music_in_the_heart_of_rome/31989/270783/?r=1415442';
        $this->assertEquals($expected, $baseEntity->getExternalLink());

        $rawData = ['classictic' => ['link' => 'https://www.classictic.com/en/capuchins_crypt__sacred_music_in_the_heart_of_rome/31989/270783/?p=abc']];
        $baseEntity->setRawData($rawData);
        $expected = 'https://www.classictic.com/en/capuchins_crypt__sacred_music_in_the_heart_of_rome/31989/270783/?p=abc&r=1415442';
        $this->assertEquals($expected, $baseEntity->getExternalLink());

        $rawData = ['classictic' => ['link' => 'https://www.classictic.com/en/capuchins_crypt__sacred_music_in_the_heart_of_rome/31989/270783/?r=123']];
        $baseEntity->setRawData($rawData);
        $expected = 'https://www.classictic.com/en/capuchins_crypt__sacred_music_in_the_heart_of_rome/31989/270783/?r=1415442';
        $this->assertEquals($expected, $baseEntity->getExternalLink());

        $rawData = ['classictic' => ['link' => 'https://www.classictic.com/en/capuchins_crypt__sacred_music_in_the_heart_of_rome/31989/270783/']];
        $baseEntity->setRawData($rawData);
        $expected = 'https://www.classictic.com/en/capuchins_crypt__sacred_music_in_the_heart_of_rome/31989/270783/?r=1415442';
        $this->assertEquals($expected, $baseEntity->getExternalLink());

        $rawData = ['ticketmasterinternational' => ['url' => 'someurl']];
        $baseEntity->setRawData($rawData);
        $expected = 'someurl';
        $this->assertEquals($expected, $baseEntity->getExternalLink());

        $rawData = ['ticketmaster' => ['url' => 'someurl']];
        $baseEntity->setRawData($rawData);
        $expected = 'someurl';
        $this->assertEquals($expected, $baseEntity->getExternalLink());

        $rawData = ['viator' => ['webURL' => 'http://prelive.partner.viator.com/en/6409/something']];
        $baseEntity->setRawData($rawData);
        $expected = 'https://www.partner.viator.com/en/18485/something';
        $this->assertEquals($expected, $baseEntity->getExternalLink());

        $rawData = ['tiqets'=>['product_url'=>'https://www.tiqets.com/en/barcelona-c66342/gaud-house-museum-p973990']];
        $baseEntity->setRawData($rawData);
        $expected = 'https://www.tiqets.com/en/barcelona-c66342/gaud-house-museum-p973990?partner=tripplannera';
        $this->assertEquals($expected,$baseEntity->getExternalLink());

        $rawData = ['tiqets'=>['product_url'=>'https://www.tiqets.com/en/barcelona-c66342/gaud-house-museum-p973990?partner=tripplannera']];
        $baseEntity->setRawData($rawData);
        $expected = 'https://www.tiqets.com/en/barcelona-c66342/gaud-house-museum-p973990?partner=tripplannera';
        $this->assertEquals($expected,$baseEntity->getExternalLink());

        $rawData = ['ticketmaster' => ['url' => 'http://www.ticketmaster.co.uk/something']];
        $baseEntity->setRawData($rawData);
        $expected = 'http://www.awin1.com/cread.php?awinmid=3589&awinaffid=318971&clickref=&p=http%3A%2F%2Fwww.ticketmaster.co.uk%2Fsomething';
        $this->assertEquals($expected, $baseEntity->getExternalLink());

        $rawData = ['ticketmaster' => ['url' => 'http://www.ticketmaster.com/something']];
        $baseEntity->setRawData($rawData);
        $expected = 'http://ticketmaster.evyy.net/c/359440/264167/4272?u=http%3A%2F%2Fwww.ticketmaster.com%2Fsomething';
        $this->assertEquals($expected, $baseEntity->getExternalLink());

        $rawData = ['ticketmaster' => ['url' => 'http://www.ticketmaster.fr/something']];
        $baseEntity->setRawData($rawData);
        $expected = 'http://www.awin1.com/cread.php?awinmid=7430&awinaffid=318971&clickref=&p=http%3A%2F%2Fwww.ticketmaster.fr%2Fsomething';
        $this->assertEquals($expected, $baseEntity->getExternalLink());

        $rawData = ['ticketmaster' => ['url' => 'http://www.ticketmaster.ie/something']];
        $baseEntity->setRawData($rawData);
        $expected = 'http://www.awin1.com/cread.php?awinmid=6643&awinaffid=318971&clickref=&p=http%3A%2F%2Fwww.ticketmaster.ie%2Fsomething';
        $this->assertEquals($expected, $baseEntity->getExternalLink());

        $rawData = ['ticketmaster' => ['url' => 'https://www.ticketmaster.es/something']];
        $baseEntity->setRawData($rawData);
        $expected = 'https://ad.zanox.com/ppc/?41696292C59266704&ulp=[[https://www.ticketmaster.es/something]]';
        $this->assertEquals($expected, $baseEntity->getExternalLink());

        $rawData = ['ticketmaster' => ['url' => 'https://www.ticketmaster.no/something']];
        $baseEntity->setRawData($rawData);
        $expected = 'https://ad.zanox.com/ppc/?41703747C85856323&ulp=[[https://www.ticketmaster.no/something]]';
        $this->assertEquals($expected, $baseEntity->getExternalLink());

        $rawData = ['ticketmaster' => ['url' => 'https://www.ticketmaster.be/something']];
        $baseEntity->setRawData($rawData);
        $expected = 'https://ad.zanox.com/ppc/?41696224C31840182&ulp=[[https://www.ticketmaster.be/something]]';
        $this->assertEquals($expected, $baseEntity->getExternalLink());

        $rawData = ['ticketmaster' => ['url' => 'https://www.ticketmaster.nl/something']];
        $baseEntity->setRawData($rawData);
        $expected = 'https://ad.zanox.com/ppc/?41696276C54532935&ulp=[[https://www.ticketmaster.nl/something]]';
        $this->assertEquals($expected, $baseEntity->getExternalLink());

        $rawData = ['ticketmaster' => ['url' => 'https://www.ticketmaster.fi/something']];
        $baseEntity->setRawData($rawData);
        $expected = 'https://ad.zanox.com/ppc/?41703822C83215914&ulp=[[https://www.ticketmaster.fi/something]]';
        $this->assertEquals($expected, $baseEntity->getExternalLink());

        $rawData = ['ticketmaster' => ['url' => 'https://www.ticketmaster.de/something']];
        $baseEntity->setRawData($rawData);
        $expected = 'https://ad.zanox.com/ppc/?42418587C79190385&ulp=[[https://www.ticketmaster.de/something]]';
        $this->assertEquals($expected, $baseEntity->getExternalLink());

        $rawData = ['ticketmaster' => ['url' => 'https://www.ticketmaster.at/something']];
        $baseEntity->setRawData($rawData);
        $expected = 'https://ad.zanox.com/ppc/?43868144C31097693&ulp=[[https://www.ticketmaster.at/something]]';
        $this->assertEquals($expected, $baseEntity->getExternalLink());

        $rawData = ['ticketmaster' => ['url' => 'https://www.ticketmaster.com.au/something']];
        $baseEntity->setRawData($rawData);
        $expected = 'https://ad.zanox.com/ppc/?41696239C95420266&ulp=[[https://www.ticketmaster.com.au/something]]';
        $this->assertEquals($expected, $baseEntity->getExternalLink());

        $rawData = ['ticketmaster' => ['url' => 'https://www.ticketmaster.co.nz/something']];
        $baseEntity->setRawData($rawData);
        $expected = 'https://ad.zanox.com/ppc/?43924047C743742346&ulp=[[https://www.ticketmaster.co.nz/something]]';
        $this->assertEquals($expected, $baseEntity->getExternalLink());
    }

    public function testSetBookLink()
    {
        $entity = new BaseEntity();
        $entity->setBookLink('www.book.com');

        $expected = 'www.book.com';
        $this->assertEquals($expected, $entity->getBookLink());
    }

    public function testGetBookLink()
    {
        $entity = new BaseEntity();
        $entity->setBookLink('www.book.com');
        $expected = 'www.book.com';
        $this->assertEquals($expected, $entity->getBookLink());

        $mock = $this->getMockBuilder(BaseEntity::class)
            ->setMethods(['getExternalLink'])
            ->getMock();

        $mock->expects($this->any())
            ->method('getExternalLink')
            ->willReturn('booklink.com');

        $this->assertEquals('booklink.com', $mock->getBookLink());
    }

    public function testSetBookLabel()
    {
        $entity = new BaseEntity();
        $entity->setBookLabel('booklabel');

        $expected = 'booklabel';
        $this->assertEquals($expected, $entity->getBookLabel());
    }

    public function testGetBookLabel()
    {
        $entity = new BaseEntity();
        $entity->setBookLabel('Booklabel');
        $expected = 'Booklabel';
        $this->assertEquals($expected, $entity->getBookLabel());


        $entity = new BaseEntity();
        $rawData = [
            'classictic' => [
                'classictic' => 'www.classic.com'
            ],
            'ticketmasterinternational' => [
                'url' => 'www.ticketmaster.com'
            ],
            'ticketmaster' => [
                'url' => 'www.ticket.com'
            ]
        ];
        $entity->setRawData($rawData);
        $expected = 'Book';
        $this->assertEquals($expected, $entity->getBookLabel());


        $entity = new BaseEntity();
        $rawData = [
            'viator' => [
                'webURL' => 'www.viator.com'
            ],
        ];
        $entity->setRawData($rawData);
        $expected = 'Book On Viator';
        $this->assertEquals($expected, $entity->getBookLabel());


        $entity = new Restaurant();
        $expected = 'Reserve';
        $this->assertEquals($expected, $entity->getBookLabel());


        $entity = new BaseEntity();
        $rawData = [];
        $entity->setRawData($rawData);
        $expected = 'Book';
        $this->assertEquals($expected, $entity->getBookLabel());
    }

    public function testSetLength()
    {
        $entity = new BaseEntity();
        $entity->setLength(60);
        $expected = 60;
        $this->assertEquals($expected, $entity->getLength());
    }

    public function testGetLength()
    {
        $entity = new BaseEntity();
        $entity->setLength(60);
        $expected = 60;
        $this->assertEquals($expected, $entity->getLength());
    }

    public function testGetLengthFormatted()
    {
        $entity = new BaseEntity();
        $entity->setLength(65);
        $expected = '1.1 hour';
        $this->assertEquals($expected, $entity->getLengthFormatted());

        $entity = new BaseEntity();
        $entity->setLength(130);
        $expected = '2.2 hours';
        $this->assertEquals($expected, $entity->getLengthFormatted());

        $entity = new BaseEntity();
        $entity->setLength(45);
        $expected = '45 minutes';
        $this->assertEquals($expected, $entity->getLengthFormatted());
    }

    public function testToPublicArray()
    {
        $entity = new BaseEntity();
        $entity->id = '123';
        $entity->setName('louvre');
        $data = [
            "id" => '123',
            "name" => 'louvre'
        ];
        $this->assertEquals($data, $entity->toPublicArray('tiny'));


        $entity = new BaseEntity();
        $entity->id = '123';
        $entity->setName('Eiffel');
        $entity->setRating(4.8);
        $entity->setReviewsCount(450);
        $entity->setCategoryIds(['4567']);
        $entity->setMainImageId('123456');
        $entity->setLength(45);
        $entity->setOpenHours(['08:30']);
        $entity->setMediumDescription('asddfgghjfg');
        $entity->slug = '/paris';
        $coordinates = new Coordinates();
        $entity->setCoordinates($coordinates->setLatitude(41.5));
        $entity->setCoordinates($coordinates->setLongitude(12.5));
        $entity->setBookLink('book.com');
        $entity->setBookLabel('Book');

        $data = [
            "id" => '123',
            "name" => 'Eiffel',
            "rating" => 4.8,
            "reviewsCount" => 450,
            "categoryIds" => ['4567'],
            "mainImageId" => '123456',
            "length" => 45,
            "openHours" => ['08:30'],
            "description" => 'asddfgghjfg',
            'categoriesTitles' => [],
            'coordinates' => [
                'latitude' => 41.5,
                'longitude' => 12.5
            ],
            'bookLabel' => 'Book',
        ];
        $this->assertEquals($data, $entity->toPublicArray());

        $entity = new BaseEntity();
        $entity->imagesLocal = ['images.com'];
        $entity->setPrice(15.75);
        $entity->setAddress('amiryan 1');
        $entity->setLocationName('paris');
        $entity->setSecondName('louvre');
        $entity->setPhoneNumbers(['123 456']);
        $entity->setLength(45);
        $entity->wikipediaUrl = 'wiki.com';
        $entity->setHoursText('eight am');
        $createdAt = new \DateTime();
        $createdAt->setDate(2018, 02, 26);

        $review1 = new Review();
        $review1->setReview('rev1');
        $review1->setCreatedAt($createdAt);
        $review1->toPublicArray();

        $review2 = new Review();
        $review2->setReview('rev2');
        $review2->setCreatedAt($createdAt);
        $review2->toPublicArray();

        $reviews = [];
        $reviews[] = $review1;
        $reviews[] = $review2;

        $entity->setReviews([$reviews]);

        $data = [
            'price' => 15.75,
            'address' => 'amiryan 1',
            'locationName' => 'paris',
            'secondName' => 'louvre',
            'phoneNumbers' => ['123456'],
            'lengthFormatted' => '45 minutes',
            'wikipediaUrl' => 'https://en.wikipedia.org/wiki/wiki.com',
            'hoursText' => 'eight am',
            'categoriesTitles' => [],
            'length' => 45,
            'description' => '',
            'reviews' => [
                [


                    [
                        'review' => 'rev1',
                        'createdAt' => '2018-02-26'
                    ],
                    [
                        'review' => 'rev2',
                        'createdAt' => '2018-02-26'

                    ]
                ],
            ]
        ];


        $this->assertEquals($data, $entity->toPublicArray('large'));
    }

    public function testSetFieldValueOfProvider()
    {
        $entity = new BaseEntity();
        $entity->setWikipediaMainImageId('wiki');
        $entity->setFieldValueOfProvider('wikipedia', 'mainImageId', 'some');
        $this->assertEquals('some', $entity->getMainImageId());
    }

    public function testUnsetFieldValueFromProvider()
    {
        $entity = new BaseEntity();
        $entity->setWikipediaMainImageId('wiki123');
        $entity->unsetFieldValueFromProvider('mainImageId', 'wiki123');
        $this->assertEquals(null, $entity->getMainImageId());


        $entity = new BaseEntity();
        $entity->setGoogleplacesMainImageId('google123');
        $entity->unsetFieldValueFromProvider('mainImageId', 'google123');
        $this->assertEquals(null, $entity->getMainImageId());

        $entity = new BaseEntity();
        $entity->setMainImageId('main123');
        $entity->unsetFieldValueFromProvider('mainImageId', 'main123');
        $this->assertEquals(null, $entity->getMainImageId());

    }

    public function testGetMainImageId()
    {
        $entity = new BaseEntity();
        $entity->setMainImageId('main');
        $entity->setWikipediaMainImageId('wiki');
        $this->assertEquals('main', $entity->getMainImageId());

        $entity = new BaseEntity();
        $entity->setWikipediaMainImageId('wiki');
        $this->assertEquals('wiki', $entity->getMainImageId());

        $entity = new BaseEntity();
        $entity->setGoogleplacesMainImageId('google');
        $this->assertEquals('google', $entity->getMainImageId());

        $entity = new BaseEntity();
        $entity->setFoursquareMainImageId('fours');
        $this->assertEquals('fours', $entity->getMainImageId());

        $entity = new BaseEntity();
        $entity->setWikipediaMainImageId('wiki');
        $entity->setGoogleplacesMainImageId('google');
        $this->assertEquals('wiki', $entity->getMainImageId());

        $entity = new BaseEntity();
        $entity->setGoogleplacesMainImageId('google');
        $entity->setFoursquareMainImageId('fours');
        $this->assertEquals('google', $entity->getMainImageId());

        $entity = new BaseEntity();
        $entity->setMainImageId('main');
        $entity->setWikipediaMainImageId('wiki');
        $entity->setGoogleplacesMainImageId('google');
        $entity->setFoursquareMainImageId('fours');
        $this->assertEquals('main', $entity->getMainImageId());

        $entity = new BaseEntity();
        $entity->setFlickrMainImageId('flickr');
        $this->assertEquals('flickr', $entity->getMainImageId());

    }
}
