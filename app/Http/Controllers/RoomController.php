<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoomController extends Controller
{
    //

    public function show()
    {
        $rooms = Room::query()->where('user_id', Auth::user()->getAuthIdentifier())->get();
        return view('room.room_hub', compact('rooms'));
    }

    public function listen(Request $request)
    {
        $room = Room::query()->where('name', $request->query('name'))->get()->first();
        return view('room.room_listen', compact('room'));
    }

    public function delete(Request $request)
    {
        $room = Room::query()->where('id', $request->query('id'))->get();
        if (Auth::user()->getAuthIdentifier() == $room[0]->user_id) {
            $room[0]->delete();
        }
        return redirect(route('roomhub'));
    }
}
