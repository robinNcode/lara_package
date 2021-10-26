<?php namespace robinNcode\Contact\Controllers;

use Illuminate\Routing\Controller as BaseController;

class HomeController {

    public function index()
    {
        return view('resources::home');
    }
}
