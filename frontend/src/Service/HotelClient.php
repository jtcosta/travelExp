<?php
/**
 * Created by PhpStorm.
 * User: joaocosta
 * Date: 17/03/2019
 * Time: 00:40
 */

namespace App\Service;


use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use V1\CreateRequest;
use V1\CreateResponse;
use V1\HotelServiceClient;

class HotelClient
{

    private $params;

    public function __construct(ParameterBagInterface $params)
    {
        $this->params = $params;
    }

    public function createHotel(CreateRequest $hotel){
        $hotelApiHost = $this->params->get('hotel_api_host');
        $hotelServiceClient = new HotelServiceClient($hotelApiHost,
            ['credentials' => \Grpc\ChannelCredentials::createInsecure()]
        );
        $response = new CreateResponse();
        return $hotelServiceClient->Create($hotel);

    }
}