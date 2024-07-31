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

         $response['services'] = Service::paginate(12);
         $response['agentes'] = Agente::get();
         $response['news'] = News::where([['state', 'Autorizada']])->orderBy('id', 'desc')->limit(3)->get();
     
         $response['post'] = News::where([['state', 'Autorizada']])->orderBy('id', 'asc')->limit(2)->get();
         return view('site.home.index',$response);
    }
}
