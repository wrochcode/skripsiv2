<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $pages = 'Produk';
        return view('article.index', ['pages' => $pages]);
    }
}
