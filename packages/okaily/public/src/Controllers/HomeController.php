<?php

namespace Elokaily\Public\Controllers;


use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() {
        dd("test");
        $data['title'] = __('Home');
        return view('public::pages.home', $data);
    }

    public function about() {
        $data['title'] = __('About');
        return view('public::pages.about', $data);
    }
}
