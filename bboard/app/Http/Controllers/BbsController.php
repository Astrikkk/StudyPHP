<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BbsController extends Controller
{
    public function index(){
        return response("тут буде якась хрінь")
            ->header('Content-Type', 'text/plain');
    }
}
