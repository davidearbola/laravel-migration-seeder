<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $trainList = Train::all();
        $data = [
            'trains' => $trainList
        ];
        return view('home', $data);
    }
}
