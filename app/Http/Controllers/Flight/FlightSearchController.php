<?php

namespace App\Http\Controllers\Flight;

use App\Http\Controllers\Controller;
use ShaBax\Amadeus\Amadeus;
use Illuminate\Http\Request;
use stdClass;

class FlightSearchController extends Controller
{
    public function getFlight()
    {
        $params = new stdClass();
        $params->currencyCode = 'IDR';
        $params->originLocationCode='CGK';
        $params->destinationLocationCode='SOC';
        $params->departureDate='2021-12-19';
        $params->adults='1';
        $params->max = '100';
        $result = Amadeus::flightOffersSearch($params);
        $final = json_encode($result);
        return $final;
    }

}
