<?php

namespace App\Controller;


use App\Entity\HotelEntity;
use App\Service\HotelClient;
use Grpc\UnaryCall;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use V1\CreateRequest;
use V1\Hotel;


class HomepageController extends AbstractController
{
    /**
     * @Route("/admin", name="homepage")
     */
    public function index(HotelClient $hotelClient)
    {

        $v = new Hotel();
        $v->setCity("lol");
        $v->setLat(40.102);
        $v->setLong(20.12);

        $createHotelRequest = new CreateRequest();
        $createHotelRequest->setHotel($v);

       // list($response, $status) = $hotelClient->createHotel($createHotelRequest)->wait();

        return $this->render('homepage/index.html.twig', [
            'controller_name' => 'HomepageController',
            'hotel' => $v->serializeToJsonString(),
            //'response' => $response->getId()
        ]);
    }

    /**
     * @Route("/createHotel", name="create-hotel")
     */
    public function createHotel()
    {

    }
}
