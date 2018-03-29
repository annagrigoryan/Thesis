<?php

namespace Tests\TripPlanneraBundle\Controller;

use TripPlanneraBundle\Document\BaseEntity;
use TripPlanneraBundle\Document\Entity;

class EntityTest extends \PHPUnit_Framework_TestCase
{

    private $providers = [
        'viator',
        'tiqets',
        'classictic',
        'getyourguide',
        'ticketmaster',
        'ticketmasterinternational',
        'wikipedia',
        'googleplaces',
        'foursquare',
        'facebook',
        'tripadvisorattraction',
        'tripadvisorrestaurant',
    ];

    /**
     * @dataProvider getProviderIdProvider
     */
    public function testGetProviderId($provider)
    {
        $id = 123;
        $expectedId = null;
        $entity = new Entity();
        $setter = 'set' . ucfirst($provider) . 'Id';
        if (method_exists($entity, $setter)) {
            $entity->$setter($id);
            $expectedId = '123';
        }
        $this->assertEquals($expectedId, $entity->getProviderId($provider));

        $id = 123;
        $expectedId = '123';

        $entity = new Entity();
        $externalData = [
            $provider . 'Ids' => [$id]
        ];
        $entity->setExternalData($externalData);
        $this->assertEquals($expectedId, $entity->getProviderId($provider));

        $entity = new Entity();
        $settings = [
            $provider . 'Id' => $id
        ];
        $entity->setSettings($settings);
        $this->assertEquals($expectedId, $entity->getProviderId($provider));
    }

    /**
     * @dataProvider getProviderIdProvider
     */
    public function testSetProviderId($provider)
    {
        $id = 123;
        $expectedId = '123';

        $externalData = [
            $provider . 'Ids' => [$id]
        ];
        $settings = [
            $provider . 'Id' => $id
        ];

        $entity = new Entity();
        $entity->setProviderId($provider, $id);
        $entity->setExternalData($externalData);
        $entity->setSettings($settings);

        $this->assertEquals($expectedId, $entity->getProviderId($provider));

        $expectedExternalData = $entity->getExternalData();
        $this->assertEquals([$expectedId], $expectedExternalData[$provider . 'Ids']);
        $expectedSettings = $entity->getSettings();
        $this->assertEquals($expectedId, $expectedSettings[$provider . 'Id']);

        $entity = new Entity();
        $entity->setProviderId($provider, $id);

        $this->assertEquals($expectedId, $entity->getProviderId($provider));

        $expectedExternalData = $entity->getExternalData();
        $this->assertEquals(null, $expectedExternalData);
        $expectedSettings = $entity->getSettings();
        $this->assertEquals(null, $expectedSettings);

    }

    public function getProviderIdProvider()
    {
        $data = [];
        foreach ($this->providers as $provider) {
            $data[] = [$provider];
        }
        return $data;
    }


    public function testGetProviders()
    {
//        $entity = new Entity();
//        $this->assertEquals($this->providers, $entity->getProviders());

        $entity = new Entity();
        $priorities = [
            'foursquare',
            'wikipedia'
        ];
        $expected = [
            'foursquare',
            'wikipedia',
            'booking',
            'viator',
            'tiqets',
            'classictic',
            'getyourguide',
            'ticketmaster',
            'ticketmasterinternational',
            'flickr',
            'googleplaces',
            'facebook',
            'tripadvisorattraction',
            'tripadvisorrestaurant',
        ];

        $this->assertEquals($expected, $entity->getProviders($priorities));
    }

    /**
     * @dataProvider getProviderIdProvider
     */
    public function testGetFieldByProvider($provider)
    {
        $value = '123';
        $field = 'asd';
        $rawData = [
            $provider => [
                $field => $value
            ]
        ];

        $entity = new Entity();
        $entity->setRawData($rawData);
        $this->assertEquals($value, $entity->getFieldByProvider($provider, $field));
    }

    public function testGetFieldByProviderWithDots()
    {
        $value = 'Rue de Rivoli';
        $field = 'venue.location.address';
        $rawData = [
            'foursquare' => [
                'venue' => [
                    'location' => [
                        'address' => $value
                    ]
                ]
            ]
        ];

        $entity = new Entity();
        $entity->setRawData($rawData);
        $this->assertEquals($value, $entity->getFieldByProvider('foursquare', $field));

        $this->assertEquals(null, $entity->getFieldByProvider('foursquare', 'venue.location.abc'));


    }

    public function testGetArrayFieldValue()
    {
        $providers = $this->providers;
        $field = 'abc';
        $values = ['abc', 'def'];

        $methods = [];
        foreach ($providers as $provider) {
            $methods[] = 'get' . ucfirst($provider) . ucfirst($field);
        }
        $mock = $this->getMockBuilder(Entity::class)
            ->setMethods($methods)
            ->getMock();

        $providerValues = [];
        foreach ($providers as $provider) {
            $methods[] = 'get' . ucfirst($provider) . ucfirst($field);
            $mock->expects($this->atLeastOnce())
                ->method('get' . ucfirst($provider) . ucfirst($field))
                ->willReturn('www' . $provider);
            $providerValues[] = 'www' . $provider;
        }

        $this->assertEquals($providerValues, $mock->getArrayFieldValues($field));

        $mock->$field = $values;
        $this->assertEquals(array_merge($values, $providerValues), $mock->getArrayFieldValues($field));

    }

    /**
     * @dataProvider getScalarFieldValuesProvider
     */
    public function testGetScalarFieldValues($provider)
    {
        $field = 'abc';
        $value = 'def';

        $method = 'get' . ucfirst($provider) . ucfirst($field);

        $mock = $this->getMockBuilder(Entity::class)
            ->setMethods([$method])
            ->getMock();

        $providerValues = 'value' . $provider;
        $mock->expects($this->any())
            ->method($method)
            ->willReturn($providerValues);
        $this->assertEquals($providerValues, $mock->getScalarFieldValues($field));


        $mock->$field = $value;
        $this->assertEquals($value, $mock->getScalarFieldValues($field));


    }

    public function getScalarFieldValuesProvider()
    {
        $data = [];
        foreach ($this->providers as $provider) {
            $data[] = [$provider];
        }
        return $data;
    }

    public function testAddRawData()
    {
        $newData = [];
        $entity = new Entity();

        $rawData = [
            'id' => '444',
            'name' => 'Rome'
        ];

        $entity->setRawData($rawData);
        $entity->addRawData($newData);
      }


    public function testAddExternalData()
    {
        $newData = [];
        $entity = new Entity();

        $externalData = [
            'id' => '444',
            'name' => 'Rome'
        ];

        $entity->setExternalData($externalData);
        $entity->addExternalData($newData);
    }
}