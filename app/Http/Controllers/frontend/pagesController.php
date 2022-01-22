<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class pagesController extends Controller
{
  public function index()
  {
    return view('Frontend.pages.index');
  }

  public function about()
  {
    return view('Frontend.pages.about');
  }

  public function workprocess()
  {
    return view('Frontend.pages.work-process');
  }

  public function testimonials()
  {
    return view('Frontend.pages.testimonials');
  }

  public function pricingtable()
  {
    return view('Frontend.pages.pricing-table');
  }

  public function blog()
  {
    $blogs=Blog::orderBy('id','desc')->get();
    return view('Frontend.pages.blog', compact('blogs'));
  }

  public function contact()
  {
    return view('Frontend.pages.contact');
  }
}
