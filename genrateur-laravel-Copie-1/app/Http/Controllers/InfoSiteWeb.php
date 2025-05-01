<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoSiteWeb extends Controller
{
    public function index() {
        return view('form.info-site');
    }

    public function premium() {
        return view('form.info-site-premium');
    }
}
