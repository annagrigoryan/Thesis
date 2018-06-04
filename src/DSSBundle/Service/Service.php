<?php

namespace DSSBundle\Service;

use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class Service
{
    use ContainerAwareTrait;

    public function getFile()
    {
        $path = $this->container->get('kernel')->locateResource('@DSSBundle/Resources/files');

        $file1 = json_decode(file_get_contents($path . '/Zipcode.json', FILE_USE_INCLUDE_PATH));
        $file2 = json_decode(file_get_contents($path . '/Coordinates.json', FILE_USE_INCLUDE_PATH));

        return [$file1, $file2];

    }

    public function indexDocument()
    {
        for($i = 0; $i < 100; $i++){
            $params['body'][] = [];
        }
    }
}