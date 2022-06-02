<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpleplayController extends Controller
{
    public function GetUserBalance(){
        return "GetUserBalance";
    }

    public function PlaceBet(){
        return "PlaceBet";
    }

    public function PlayWin(){
        return "PlayWin";
    }

    public function PlayLost(){
        return "PlayLost";
    }

    public function PlaceBetCancel(){
        return "PlaceBetCancel";
    }

}
