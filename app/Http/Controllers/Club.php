<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Club extends Controller
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
 
         
    }
}
