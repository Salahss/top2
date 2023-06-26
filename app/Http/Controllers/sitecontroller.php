<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sitecontroller extends Controller
{
    public function index(){
        return 'Home Page';
    }
    
    function about() {
        return 'about';
    }

    function contact() {
        return 'contact';
    }

    function services() {
        return 'services';
    }





}
