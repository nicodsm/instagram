<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FollowerController extends Controller
{
    //

    public function store(Request $request, User $user)
    {
        if($user->id !== auth()->user()->id){
            $user->followers()->attach( auth()->user()->id );
        }

        return back();
    }


    public function destroy(User $user, Request $request)
    {
        $user->followers()->detach( auth()->user()->id);

        return back();
    }
}
