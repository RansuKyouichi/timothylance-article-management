<?php

namespace App\Laravel\Controllers\Web;

use App\Laravel\Requests\PageRequest;

class MainController extends Controller{

    public function __construct(){
        //
    }


    public function index(PageRequest $request){
        $this->data['page_title'] = 'Home | AMS';
        $this->data['articles'] = $this->getArticles();
        return view('web.home', $this->data);
    }

    public function about(PageRequest $request){
        $this->data['page_title'] = 'About Page | AMS';
        return view('web.about', $this->data);
    }

    public function articles(PageRequest $request){
        $this->data['page_title'] = 'Articles Page | AMS';
        $this->data['articles'] = $this->getArticles();
        return view('web.articles', $this->data);
    }


    public function article(PageRequest $request, $id){
        $articles = $this->getArticles();
        $article = collect($articles)->firstWhere('id', $id);

        if (!$article) {
            abort(404);
        }

        $this->data['article'] = $article;
        return view('web.article', $this->data);
    }

    public function contact(PageRequest $request){
        $this->data['page_title'] = 'Contact Page | AMS';
        return view('web.contact', $this->data);
    }

    public function getArticles() {
        return [
            [
                'id' => 1,
                'category' => 'Technology',
                'title' => 'The Future of Web Development',
                'excerpt' => 'Discover how modern technologies are changing the way we build, design, and experience websites.',
                'author' => 'John Doe',
                'date' => 'November 11, 2026',
                'image' => '../assets/img/laptop-office.jpg',
            ],
            [
                'id' => 2,
                'slug' => 'the-future-of-web-development',
                'category' => 'Lifestyle',
                'title' => 'Building Better Daily Habits',
                'excerpt' => 'Small habits can create meaningful changes in your everyday life.',
                'author' => 'Jane Smith',
                'date' => 'November 10, 2026',
                'image' => '../assets/img/laptop-table.jpg',
            ],
            [
                'id' => 3,
                'category' => 'Education',
                'title' => 'Learning Beyond the Classroom',
                'excerpt' => 'Discover why continuous learning is important for personal growth.',
                'author' => 'Alex Cruz',
                'date' => 'November 9, 2026',
                'image' => '../assets/img/books-library.jpg',
            ],

            [
                'id' => 4,
                'category' => 'Business',
                'title' => 'Turning Ideas Into Businesses',
                'excerpt' => 'Every successful business starts with an idea and a willingness to act.',
                'author' => 'Mark Lee',
                'date' => 'November 8, 2026',
                'image' => '../assets/img/building-hallway.jpg',
            ],
            [
                'id' => 5,
                'category' => 'Health',
                'title' => 'The Importance of Mental Health',
                'excerpt' => 'Mental health is just as important as physical health, and it\'s time we start treating it that way.',
                'author' => 'Emily Johnson',
                'date' => 'November 7, 2026',
                'image' => '../assets/img/meditation.jpg',
            ],
            [
                'id' => 6,
                'category' => 'Travel',
                'title' => 'Exploring the World on a Budget',
                'excerpt' => 'Traveling doesn\'t have to be expensive. Learn how to explore the world without breaking the bank.',
                'author' => 'Chris Martin',
                'date' => 'November 6, 2026',
                'image' => '../assets/img/mountain-landscape.jpg',
            ],
        ];
    }
}
