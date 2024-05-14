<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;
class PageController extends Controller
{
    public function index(){
        $data = Train::paginate(5);

        return view('home', compact('data'));
    }
}
