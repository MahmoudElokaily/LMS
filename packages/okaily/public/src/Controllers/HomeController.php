<?php

namespace Elokaily\Public\Controllers;


use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() {
        $data['title'] = __('Home');
        return view('public::pages.home', $data);
    }
}
