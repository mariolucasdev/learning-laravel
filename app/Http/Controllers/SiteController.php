<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Show Initial Page Home
     *
     * @return void
     */
    public function index()
    {
        echo 'Home page';
    }
}
