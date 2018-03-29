<?php

namespace DSSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use DSSBundle\Document\Type;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

    public function indexAction(Request $request)
    {

        $searchQuery =  $request->query->get('query');
        $query = $this->get('doctrine_mongodb')
            ->getManager()
            ->createQueryBuilder('DSSBundle:Type');

        if($searchQuery){
            $query->field('name')->equals(new \MongoRegex('/.*'.$searchQuery.'.*/i'));
        }
        $query = $query->getQuery();

        /**
         * @var  $paginator \Knp\Component\Pager\Paginator
         */
        $paginator = $this->get('knp_paginator');
        $result = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            5
        );


        return $this->render('DSSBundle:Default:index.html.twig',
            array('paginator' => $result));
    }
}