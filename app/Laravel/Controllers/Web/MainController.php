<?php

namespace App\Laravel\Controllers\Web;

use App\Laravel\Requests\PageRequest;

class MainController extends Controller{
    public function __construct()
    {

    }

    public function index(PageRequest $request){
        $this->data['page_title'] = 'Home Page';
        return view('web.home', $this->data);
    }

    public function about(PageRequest $request){
        $this->data['page_title'] = 'About Page';
        return view('web.about', $this->data);
    }

}
