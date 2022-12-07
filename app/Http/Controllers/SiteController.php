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

    /**
     * Show About Page
     *
     * @return void
     */
    public function about()
    {
        echo 'About page';
    }

    /**
     * Show Services Page
     *
     * @return void
     */
    public function services()
    {
        echo 'Services page';
    }

    /**
     * Show Service Page
     *
     * @param int $id
     * @return void
     */
    public function service(int $id = null)
    {
        echo "Services page id: {$id}";
    }
}
