<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Agente;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\News;
use App\Models\Partner;
use App\Models\Service;
use App\Models\SlideShow;

class HomeController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      
        return view('site.home.index',);
    }
}
