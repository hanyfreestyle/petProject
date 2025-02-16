<?php

namespace App\Http\Controllers;
use App\Models\About;
use App\Models\Settings;
use App\Models\Shelter;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;

class PageViewController extends Controller {

    public function __construct() {

        $settings =  Settings::query()->first();
        View::share('settings', $settings);

    }
#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
    public function homePage() {
        $slider = Slider::query()->get();
        $about = About::query()->first();
        $shelters  = Shelter::query()->get();
        return view('home')->with([
            'slider'=> $slider ,
            'about'=> $about ,
            'shelters'=> $shelters ,
        ]);

    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
    public function contactPage() {


        return view('contact');
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
    public function aboutPage() {
        $about = About::query()->first();

        return view('about')->with([
            'about'=> $about ,
        ]);
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
    public function lostPet () {


        return view('lost');
    }

    public function findPet () {


        return view('findPet');
    }



    public function getNearbyPlaces(Request $request) {
        $lat = $request->lat;
        $lng = $request->lng;
        $radius = 1000; // النطاق بالكيلومترات

        $places = Shelter::select('name', 'website', 'location')
            ->selectRaw('( 6371 * acos( cos( radians(?) ) * cos( radians( json_extract(location, "$.lat") ) )
        * cos( radians( json_extract(location, "$.lng") ) - radians(?) ) + sin( radians(?) )
        * sin( radians( json_extract(location, "$.lat") ) ) ) ) AS distance', [$lat, $lng, $lat])
            ->havingRaw("distance < ?", [$radius])
            ->orderBy('distance', 'asc')
           ->get()
            ->toArray();

        return response()->json($places);
    }



}
