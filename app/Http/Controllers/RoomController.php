<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    //

    public function show() {
        return view('room.room_hub');
    }
}
