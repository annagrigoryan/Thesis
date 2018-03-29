<?php

namespace Tests\TripPlanneraBundle\Service;


use TripPlanneraBundle\Service\HoursService;

class HoursServiceTest extends \PHPUnit_Framework_TestCase
{
    private $hoursService;

    public function setUp()
    {
        $this->hoursService = new HoursService();
    }

    public function testGetHoursFromString()
    {
        $string = '';
        $result = $this->hoursService->getHoursFromString($string);
        $expected = [];
        $this->assertEquals($expected, $result);

        $string = 'some text';
        $result = $this->hoursService->getHoursFromString($string);
        $expected = [];
        $this->assertEquals($expected, $result);

        $string = 'Between 8:30-9:30am';
        $result = $this->hoursService->getHoursFromString($string);
        $expected = ['08:30', '09:30'];
        $this->assertEquals($expected, $result);

        $string = '7pm or 9:30pm shows';
        $result = $this->hoursService->getHoursFromString($string);
        $expected = ['19:00', '21:30'];
        $this->assertEquals($expected, $result);

        $string = '12:30';
        $result = $this->hoursService->getHoursFromString($string);
        $expected = ['12:30'];
        $this->assertEquals($expected, $result);

        $string = '12:20AM';
        $result = $this->hoursService->getHoursFromString($string);
        $expected = ['00:20'];
        $this->assertEquals($expected, $result);

        $string = '12:40 am';
        $result = $this->hoursService->getHoursFromString($string);
        $expected = ['00:40'];
        $this->assertEquals($expected, $result);

        $string = '11:30 pm';
        $result = $this->hoursService->getHoursFromString($string);
        $expected = ['23:30'];
        $this->assertEquals($expected, $result);

        /*$string = 'always 9pm except october 15th at 10:30pm december 28th at 12:00pm december 30 at 12:00pm';
        $result = $this->hoursService->getHoursFromString($string);
        $expected = ['21:00', '22:30', '12:00'];
        $this->assertEquals($expected,$result);*/

        $string = '10am 12:30pm 3pm Please note your preferred departure during booking';
        $result = $this->hoursService->getHoursFromString($string);
        $expected = ['10:00', '12:30', '15:00'];
        $this->assertEquals($expected, $result);

        $string = '10am, 2pm and 4pm';
        $result = $this->hoursService->getHoursFromString($string);
        $expected = ['10:00', '14:00', '16:00'];
        $this->assertEquals($expected, $result);

        $string = '9:30am and 3:30pm';
        $result = $this->hoursService->getHoursFromString($string);
        $expected = ['09:30', '15:30'];
        $this->assertEquals($expected, $result);

        $string = '8am, 11:15am, 2:30pm, 5:45pm, June 1 to Oct 31\n11:15am, 4pm, Nov 1 to April 30';
        $result = $this->hoursService->getHoursFromString($string);
        $expected = ['08:00', '11:15', '14:30', '17:45', '16:00'];
        $this->assertEquals($expected, $result);

        /*$string = 'English-speaking tour: 3pm French-speaking tour: 3:30pm';
        $result = $this->hoursService->getHoursFromString($string);
        $expected = ['15:00', '15:30'];
        $this->assertEquals($expected,$result);*/

        $string = '8:30am - 9:30am';
        $result = $this->hoursService->getHoursFromString($string);
        $expected = ['08:30', '09:30'];
        $this->assertEquals($expected, $result);

        /*$string = '9am to 8:30pm (last admission at 8pm): February 27 to November 1st, 2016) 9am to 6:30pm (last admission at 6pm):November 3 to February 24th, 2017)';
        $result = $this->hoursService->getHoursFromString($string);
        $expected = ['09:00', '20:30', '18:30'];
        $this->assertEquals($expected,$result);*/

        /*$string = 'Wednesday and Thursday: 5pm Saturday: 11:45am';
        $result = $this->hoursService->getHoursFromString($string);
        $expected = ['17:00']; [ '11:45'];
        $this->assertEquals($expected,$result);*/
    }

    public function testSortOpenHoursHours()
    {

        $a['open'] = '10:00';
        $b['open'] = '13:00';
        $result = $this->hoursService->sortOpenHoursHours($a, $b);
        $expected = -1;
        $this->assertEquals($expected, $result);


        $a['open'] = '20:00';
        $b['open'] = '15:00';
        $result = $this->hoursService->sortOpenHoursHours($a, $b);
        $expected = 1;
        $this->assertEquals($expected, $result);

    }

    public function testGetOpenHour()
    {
        $openHours = [];

        $day = 0;
        $startHour = '08:00';
        $endHour = $startHour;
        $isOpenNextDay = false;
        $result = $this->hoursService->getOpenHour($openHours, $day, $startHour, $endHour, $isOpenNextDay);
        $expected = ['mon' => [
            ['open' => '08:00',
                'type' => 'fix']
        ]];
        $this->assertEquals($expected, $openHours);


        $day = 2;
        $startHour = '07:00';
        $endHour = '13:00';
        $isOpenNextDay = false;
        $openHours = [];
        $result = $this->hoursService->getOpenHour($openHours, $day, $startHour, $endHour, $isOpenNextDay);
        $expected = ['wed' => [
            ['open' => '07:00',
                'close' => '13:00']
        ]];
        $this->assertEquals($expected, $openHours);


        $startHour = '18:00';
        $endHour = '22:00';
        $isOpenNextDay = false;
        $result = $this->hoursService->getOpenHour($openHours, $day, $startHour, $endHour, $isOpenNextDay);
        $expected = ['wed' => [
            ['open' => '07:00',
                'close' => '13:00'],
            ['open' => '18:00',
                'close' => '22:00']
        ]
        ];
        $this->assertEquals($expected, $openHours);

        $startHour = '23:00';
        $endHour = '02:00';
        $isOpenNextDay = true;
        $result = $this->hoursService->getOpenHour($openHours, $day, $startHour, $endHour, $isOpenNextDay);
        $expected = ['wed' => [
            ['open' => '07:00',
                'close' => '13:00'],
            ['open' => '18:00',
                'close' => '22:00'],
            ['open' => '23:00',
                'close' => '02:00']
        ],
            'thu' => [
                ['open' => '00:00',
                    'close' => '02:00']
            ]
        ];
        $this->assertEquals($expected, $openHours);

        $day = 3;
        $startHour = '10:00';
        $endHour = '12:00';
        $isOpenNextDay = false;
        $result = $this->hoursService->getOpenHour($openHours, $day, $startHour, $endHour, $isOpenNextDay);
        $expected = ['wed' => [
            ['open' => '07:00',
                'close' => '13:00'],
            ['open' => '18:00',
                'close' => '22:00'],
            ['open' => '23:00',
                'close' => '02:00']
        ],
            'thu' => [
                ['open' => '00:00',
                    'close' => '02:00'],
                ['open' => '10:00',
                    'close' => '12:00']
            ]
        ];
        $this->assertEquals($expected, $openHours);

    }


    public function testNormaliseTripadvisorHours()
    {

        $openHours = [
            [
                "day" => "Sat",
                "value" => "3:00 pm - 7:00 pm"
            ],
            [
                "day" => "",
                "value" => "8:00 pm - 10:00 pm"
            ]
        ];
        $result = $this->hoursService->normaliseTripadvisorHours($openHours);
        $expected = ['sat' => [
            ['open' => '15:00',
                'close' => '19:00'],
            ['open' => '20:00',
                'close' => '22:00']
        ]
        ];
        $this->assertEquals($expected, $result);


        $openHours = [
            [
                "day" => "Sun - Sat",
                "value" => "3:00 pm - 7:00 pm"
            ]
        ];
        $expectedHours = [['open' => '15:00',
            'close' => '19:00']];
        $result = $this->hoursService->normaliseTripadvisorHours($openHours);
        $expected = ['mon' => $expectedHours,
            'tue' => $expectedHours,
            'wed' => $expectedHours,
            'thu' => $expectedHours,
            'fri' => $expectedHours,
            'sat' => $expectedHours,
            'sun' => $expectedHours

        ];
        $this->assertEquals($expected, $result);


        $openHours = [
            [
                "day" => "Mon - Sat",
                "value" => "08:00 am - 7:00 pm"
            ],
            [
                "day" => "Sun",
                "value" => "09:00 am - 6:00 pm"
            ]
        ];
        $expectedHours = [['open' => '08:00',
            'close' => '19:00']];
        $result = $this->hoursService->normaliseTripadvisorHours($openHours);
        $expected = ['mon' => $expectedHours,
            'tue' => $expectedHours,
            'wed' => $expectedHours,
            'thu' => $expectedHours,
            'fri' => $expectedHours,
            'sat' => $expectedHours,
            'sun' => [
                ['open' => '09:00',
                    'close' => '18:00'],
            ]
        ];
        $this->assertEquals($expected, $result);


        $openHours = [
            [
                "day" => "Sun - Sat",
                "value" => "05:00 pm - 7:00 pm"
            ],
            [
                "day" => "Fri - Tue",
                "value" => "10:00 am - 12:30 pm"
            ]
        ];

        $expectedHours = [['open' => '17:00',
            'close' => '19:00']];

        $expectedHours2 = [
            ['open' => '17:00',
                'close' => '19:00'],
            ['open' => '10:00',
                'close' => '12:30']
        ];
        $result = $this->hoursService->normaliseTripadvisorHours($openHours);
        $expected = ['mon' => $expectedHours2,
            'tue' => $expectedHours2,
            'wed' => $expectedHours,
            'thu' => $expectedHours,
            'fri' => $expectedHours2,
            'sat' => $expectedHours2,
            'sun' => $expectedHours2,
        ];
        $this->assertEquals($expected, $result);


        $openHours = [
            [
                "day" => "Sun",
                "value" => "07:00 am - 7:00 pm"
            ]
        ];
        $result = $this->hoursService->normaliseTripadvisorHours($openHours);
        $expected = ['sun' => [
            ['open' => '07:00',
                'close' => '19:00'],
        ],
        ];
        $this->assertEquals($expected, $result);

    }

    public function testGetYourGuideHoursToMinutes()
    {
        $durations = [
            [
                'duration' => 1.5,
                'unit' => 'hour'
            ]
        ];

        $result = $this->hoursService->getYourGuideHoursToMinutes($durations);

        $expected = 90;
        $this->assertEquals($expected, $result);

        $durations = [
            [
                'duration' => 1.5,
                'unit' => 'hour'
            ],
            [
                'duration' => 3,
                'unit' => 'hour'
            ]
        ];

        $result = $this->hoursService->getYourGuideHoursToMinutes($durations);

        $expected = 135;
        $this->assertEquals($expected, $result);

        $durations = [
            [
                'duration' => 70,
                'unit' => 'minute'
            ],
        ];

        $result = $this->hoursService->getYourGuideHoursToMinutes($durations);

        $expected = 70;
        $this->assertEquals($expected, $result);

        $durations = [
            [
                'duration' => 70,
                'unit' => 'minute'
            ],
            [
                'duration' => 150,
                'unit' => 'minute'
            ]
        ];

        $result = $this->hoursService->getYourGuideHoursToMinutes($durations);

        $expected = 110;
        $this->assertEquals($expected, $result);

        $durations = [
            [
                'duration' => 1,
                'unit' => 'day'
            ],
        ];

        $result = $this->hoursService->getYourGuideHoursToMinutes($durations);

        $expected = 1440;
        $this->assertEquals($expected, $result);

        $durations = [
            [
                'duration' => 1,
                'unit' => 'day'
            ],
            [
                'duration' => 3,
                'unit' => 'day'
            ]
        ];

        $result = $this->hoursService->getYourGuideHoursToMinutes($durations);

        $expected = 2880;
        $this->assertEquals($expected, $result);
        $durations = [];

        $result = $this->hoursService->getYourGuideHoursToMinutes($durations);

        $expected = 0;
        $this->assertEquals($expected, $result);
    }

//    public function testGetViatorOpenHours()
//
//    {
//        $hoursService = [];
//
//        $mock = $this->getMockBuilder(HoursService::class)
//            ->setMethods(['getHoursFromString', 'getOpenHour', 'sortOpenHoursHours'])
//            ->getMock();
//
//        $mock->expects($this->any())
//            ->method('getHoursFromString')
//            ->willReturn(['dfsd']);
//
//        $mock->expects($this->any())
//            ->method('getOpenHour')
//            ->willReturn(['8:30']);
//
//        $mock->expects($this->any())
//            ->method('sortOpenHoursHours')
//            ->willReturn($hoursService);
//
//        $entityData = [];
//        $entityData['tourGrades'] = [
//            ['gradeDepartureTime' => '8:30 am'],
//        ];
//        $entityData['departureTime'] = '09:00';
//
//        $result = $mock->getViatorOpenHours($entityData);
//        $expected = [];
//
//        $this->assertEquals($expected, $result);
//
//    }
}


