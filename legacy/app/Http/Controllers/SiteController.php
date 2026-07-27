<?php

namespace App\Http\Controllers;

use App\Support\AppCatalog;
use Illuminate\View\View;

class SiteController extends Controller
{
    public function home(): View
    {
        return view('site.home', ['apps' => AppCatalog::all()]);
    }

    public function about(): View
    {
        return view('site.about', ['apps' => AppCatalog::all()]);
    }

    public function contact(): View
    {
        return view('site.contact', ['apps' => AppCatalog::all()]);
    }

    public function privacy(): View
    {
        return view('site.privacy');
    }

    public function terms(): View
    {
        return view('site.terms');
    }
}
