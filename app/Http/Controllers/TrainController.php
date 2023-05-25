<?php

namespace App\Http\Controllers;

use App\Models\train;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){
        $datecurrent = Carbon::now()->format('Y-m-d');
        $trains = train::where('data_di_partenza','=',$datecurrent)->get();
        return view('home', compact('trains'));
    }
}
