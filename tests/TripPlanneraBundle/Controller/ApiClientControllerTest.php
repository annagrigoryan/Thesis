<?php

namespace Tests\TripPlanneraBundle\Controller;

use TripPlanneraBundle\Document\BaseEntity;
use ViatorBundle\Controller\DefaultController;

class ApiClientControllerTest extends \PHPUnit_Framework_TestCase
{
    private $apiClientController;

    public function setUp()
    {
        $this->apiClientController = new DefaultController();
    }

    public function testGetLengthFromString()
    {
        $duration = 'flexible';
        $result = $this->apiClientController->getLengthFromString($duration);
        $expected = '60';
        $this->assertEquals($expected, $result);

        $duration = 'varies';
        $result = $this->apiClientController->getLengthFromString($duration);
        $expected = '60';
        $this->assertEquals($expected, $result);

        $duration = '0';
        $result = $this->apiClientController->getLengthFromString($duration);
        $expected = '0';
        $this->assertEquals($expected, $result);

        $duration = '3 hours 30 minutes';
        $result = $this->apiClientController->getLengthFromString($duration);
        $expected = '210';
        $this->assertEquals($expected, $result);

        $duration = '5 hours';
        $result = $this->apiClientController->getLengthFromString($duration);
        $expected = '300';
        $this->assertEquals($expected, $result);

        $duration = '60 minutes';
        $result = $this->apiClientController->getLengthFromString($duration);
        $expected = '60';
        $this->assertEquals($expected, $result);

        $duration = '5 days';
        $result = $this->apiClientController->getLengthFromString($duration);
        $expected = '0';
        $this->assertEquals($expected, $result);

        $duration = 'Performances run between two to three hours';
        $result = $this->apiClientController->getLengthFromString($duration);
        $expected = '120';
        $this->assertEquals($expected, $result);

        $duration = 'performances run between three hour';
        $result = $this->apiClientController->getLengthFromString($duration);
        $expected = '180';
        $this->assertEquals($expected, $result);


    }

    public function testGetApiEntityId() {

        $entity  =new BaseEntity();
        $entity->setSettings(['viatorId'=>'123']);

        $result = $this->apiClientController->getApiEntityId($entity);
        $expected = '123';
        $this->assertEquals($expected, $result);
    }
}
