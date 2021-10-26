<?php namespace robinNcode\Contact\Controllers;

use Illuminate\Routing\Controller as BaseController;
use robinNcode\Contact\Models\HomeModel;

class HomeController {
    private  $home = null;

    public function __construct()
    {
        $this->home = new HomeModel();
    }

    public function index()
    {
        return view('resources::home', [
            'heading' => $this->home->getInitData()
        ]);
    }
}
