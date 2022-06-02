<?php

namespace App\Http\Controllers;

use App\Http\Requests\PortfolioRequest;
use Illuminate\Support\Facades\DB;
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
    public function contacts(PortfolioRequest $request)
    {
        $my_company=$request->my_company;
        $name=$request->name;
        $email=$request->email;
        $tel=$request->tel;
        $message=$request->message;
        $data=['company' =>$my_company, 'name' =>$name,'email' =>$email,'tel'=>$tel,'Requirements'=>$message];
        // dd($data);
        DB::table('portfolio')->insert($data);
        return view('portfolio.contact');
    }
    public function sss(Request $request)
    {
        return view('works.sss');
    }
    
}
