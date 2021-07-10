<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
class ParesController extends Controller
{
    //
    function index()
    {
        return view('home');
    }
    function list()
    {
        $data= Menu::all();
        return view('list',["data"=>$data]);
    }
    function about()
    {
        return view('about');
    }
}
