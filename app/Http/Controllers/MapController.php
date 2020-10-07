<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use FarhanWazir\GoogleMaps\GMaps;


class MapController extends Controller
{
    public function map()
    {
        $config['center'] = 'Muhimbili,Tanzania';
        $config['zoom'] = '14';
        $config['map_height'] = '400px';

        $gmap = new GMaps();
        $gmap->initialize($config);
     
        $map = $gmap->create_map();
        return view('map',compact('map'));
    }
}
