<?php

namespace App\Controller;


use App\Entity\HotelEntity;
use Grpc\UnaryCall;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use V1\CreateRequest;
use V1\Hotel;


class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {

        $v = new Hotel();
        $v->setCity("lol");
        $v->setLat(40.102);
        $v->setLong(20.12);


        $v->serializeToString();

        $createHotelRequest = new CreateRequest();
        $createHotelRequest->setHotel($v);

        $hotelEntity = new HotelEntity();
        list($response, $status) = $hotelEntity->createHotel($createHotelRequest)->wait();



        return $this->render('homepage/index.html.twig', [
            'controller_name' => 'HomepageController',
            'hotel' => $v->serializeToJsonString(),
            'response' => $response->getId()
        ]);
    }
}
