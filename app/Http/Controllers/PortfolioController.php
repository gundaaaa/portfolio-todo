<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PortfolioController extends Controller
{
    public function profile(Request $request)
    {
        return view('portfolio.profile');
    }
    public function works(Request $request)
    {
        return view('portfolio.works');
    }
    public function design(Request $request)
    {
        return view('works.design');
    }
    public function front(Request $request)
    {
        return view('works.front');
    }
    public function about(Request $request)
    {
        return view('portfolio.about');
    }
    public function contact(Request $request)
    {
        return view('portfolio.contact');
    }
}
