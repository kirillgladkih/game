<?php

namespace App\Http\Controllers;

use App\Highscores;
use Illuminate\Http\Request;
use App\Http\Requests\MainRequest;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('game');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if( ! preg_match('/a\!\@fd\d+\[/', $request->score, $matches))
            return false;

        if( ! preg_match('/\d+/',$matches[0], $score))
            return false;
     
        $score_ = (int) $score[0];


        $highscores = new Highscores();

        $user_id = Auth::user()->id;

        $user = $highscores->where('user_id', $user_id)->first();

        if ($user == null) {
            return $highscores->create([
                'user_id' => $user_id,
                'score'   => $score_
            ]);
        }
        if($user->score < $score_)
            return $user->update(['score' => $score_]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
