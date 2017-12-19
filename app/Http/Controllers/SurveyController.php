<?php

namespace App\Http\Controllers;
use App\Survey;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function create()
    {
       
        return view('user.survey');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        


        $this->validate(request(),[
            'topic' => 'required',
            'name' => 'required',
            'email' => 'required',
            'comment' => 'required',
            
        ]);
        Survey::create([
            'topic'=>request('topic'),
            'name'=>request('name'),
            'email'=>request('email'),
            'comment'=>request('comment'),
            
            
        ]);
        return redirect()->route('/user/food')->with('success','Success Send to Server!');
    }

}
