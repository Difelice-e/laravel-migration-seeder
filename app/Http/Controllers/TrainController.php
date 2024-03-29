<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::where('departure', '>=', '2022-04-27')->get();

        return view('home', compact('trains'));
    }
}