<?php

namespace Hydrators;

use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Mapping\ClassMetadata;
use Doctrine\ODM\MongoDB\Hydrator\HydratorInterface;
use Doctrine\ODM\MongoDB\Query\Query;
use Doctrine\ODM\MongoDB\UnitOfWork;
use Doctrine\ODM\MongoDB\Mapping\ClassMetadataInfo;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ODM. DO NOT EDIT THIS FILE.
 */
class DSSBundleDocumentTypeHydrator implements HydratorInterface
{
    private $dm;
    private $unitOfWork;
    private $class;

    public function __construct(DocumentManager $dm, UnitOfWork $uow, ClassMetadata $class)
    {
        $this->dm = $dm;
        $this->unitOfWork = $uow;
        $this->class = $class;
    }

    public function hydrate($document, $data, array $hints = array())
    {
        $hydratedData = array();

        /** @Field(type="id") */
        if (isset($data['_id']) || (! empty($this->class->fieldMappings['id']['nullable']) && array_key_exists('_id', $data))) {
            $value = $data['_id'];
            if ($value !== null) {
                $return = $value instanceof \MongoId ? (string) $value : $value;
            } else {
                $return = null;
            }
            $this->class->reflFields['id']->setValue($document, $return);
            $hydratedData['id'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['name']) || (! empty($this->class->fieldMappings['name']['nullable']) && array_key_exists('name', $data))) {
            $value = $data['name'];
            if ($value !== null) {
                $return = (string) $value;
            } else {
                $return = null;
            }
            $this->class->reflFields['name']->setValue($document, $return);
            $hydratedData['name'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['category']) || (! empty($this->class->fieldMappings['category']['nullable']) && array_key_exists('category', $data))) {
            $value = $data['category'];
            if ($value !== null) {
                $return = (string) $value;
            } else {
                $return = null;
            }
            $this->class->reflFields['category']->setValue($document, $return);
            $hydratedData['category'] = $return;
        }

        /** @Field(type="float") */
        if (isset($data['price']) || (! empty($this->class->fieldMappings['price']['nullable']) && array_key_exists('price', $data))) {
            $value = $data['price'];
            if ($value !== null) {
                $return = (float) $value;
            } else {
                $return = null;
            }
            $this->class->reflFields['price']->setValue($document, $return);
            $hydratedData['price'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['description']) || (! empty($this->class->fieldMappings['description']['nullable']) && array_key_exists('description', $data))) {
            $value = $data['description'];
            if ($value !== null) {
                $return = (string) $value;
            } else {
                $return = null;
            }
            $this->class->reflFields['description']->setValue($document, $return);
            $hydratedData['description'] = $return;
        }
        return $hydratedData;
    }
}