<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    /*
    Public function home()
    {
    	return '主页';
    }

    Public function help()
    {
    	return '帮助页';
    }

    Public function about()
    {
    	return '关于页';
    }
    */
    Public function home()
    {
        return view('static_pages/home');
    }

    Public function help()
    {
        return view('static_pages/help');
    }

    Public function about()
    {
        return view('static_pages/about');
    }
}
