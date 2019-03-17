<?php
/**
 * Created by PhpStorm.
 * User: joaocosta
 * Date: 17/03/2019
 * Time: 00:40
 */

namespace App\Entity;

use V1\CreateRequest;
use V1\CreateResponse;
use V1\HotelServiceClient;

class HotelEntity{

    public function createHotel(CreateRequest $hotel){

        $hotelServiceClient = new HotelServiceClient("localhost:9090",
            ['credentials' => \Grpc\ChannelCredentials::createInsecure()]
        );
        $response = new CreateResponse();
        return $hotelServiceClient->Create($hotel);

    }
}