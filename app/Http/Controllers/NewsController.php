<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NewsController extends Controller
{

    //show news
    public function show() : Object
    {
        $news = $this->getNews();
        $colors = array('blue', 'green', 'yellow', 'brown', 'purple');

        return view('news.index')->with([
            'news' => $news,
            'colors' => $colors
        ]);

    }

    //Retrive new from api
    private function getNews() : array
    {
        $response = Http::get('https://newsapi.org/v2/top-headlines?country=us&apiKey=e2aef8c23bec434bb6901041b3be0d57');
        return $response->json();
    }

}
