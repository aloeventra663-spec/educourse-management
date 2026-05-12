<?php

namespace App\Http\Controllers;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = [

            [
                'title' => 'Learn Laravel',
                'slug' => 'learn-laravel'
            ],

            [
                'title' => 'Learn Bootstrap',
                'slug' => 'learn-bootstrap'
            ]

        ];

        return view(
            'articles.index',
            compact('articles')
        );
    }

    public function show($slug)
    {
        $articles = [

            'learn-laravel' => [
                'title' => 'Learn Laravel',
                'content' => 'Laravel is powerful framework'
            ],

            'learn-bootstrap' => [
                'title' => 'Learn Bootstrap',
                'content' => 'Bootstrap makes UI easier'
            ]

        ];

        if(!isset($articles[$slug])){

            return response()
                ->view('errors.404', [], 404);

        }

        return view(
            'articles.show',
            [
                'article' => $articles[$slug]
            ]
        );
    }
}