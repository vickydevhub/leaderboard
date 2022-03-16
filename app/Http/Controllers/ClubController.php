<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Club;

class ClubController extends Controller
{
    /**
     * Store a new user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([ 
            'name' => 'required',
        ]);
        $name = $request->name;

        Club::updateOrCreate(['name' => $name],['name' => $name]);
        return redirect()
                        ->route('leaderboard')
                        ->with('message','club created successfully');
         
    }
    /**list all clubs***/
    public function listing(){
        $clubs = Club::paginate();
        return view('club.list')->with(compact('clubs'));
    }
}
