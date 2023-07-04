<?php

namespace App\Controllers;

class PagesController extends BaseController
{
    public function about()
    {
        return view('pages/about',['name'=>'naga']);
    }
}
