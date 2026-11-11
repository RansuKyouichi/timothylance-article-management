<?php

namespace App\Laravel\Controllers\Web;

use App\Laravel\Requests\PageRequest;

class MainController extends Controller{

    public function __construct(){
        //
    }


public function index(PageRequest $request){

    $this->data['page_title'] = 'Home | AMS';
    return view('web.home', $this->data);
}

    public function about(PageRequest $request){
        $this->data['page_title'] = 'About Page | AMS';
        return view('web.about', $this->data);
    }

    public function articles(PageRequest $request){
        $this->data['page_title'] = 'Articles Page | AMS';
        return view('web.articles', $this->data);
    }

    public function article(PageRequest $request){
        $this->data['page_title'] = 'Article Page | AMS';
        return view('web.article', $this->data);
    }

    public function contact(PageRequest $request){
        $this->data['page_title'] = 'Contact Page | AMS';
        return view('web.contact', $this->data);
    }
}
