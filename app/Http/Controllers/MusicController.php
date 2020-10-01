<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Music;
use Validator;

class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /////////////////////////////////////////////////////////////////////////////
    public function index()
    {
            // 音楽をランダムに表示させる
        $musics = Music::inRandomOrder()->paginate(10);
            //データの確認
            // dd($music->toArray());
        return view('foryou',['musics' => $musics]);
    }
    ///////////////////////////////////////////////////////////////////////////
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /////////////////////////////////////////////////////////////////////////////

    public function show(Music $music)
    {
        // $music = Music::all();
        // dd($music);
        //データの確認;
        $othermusics= Music::where('id','<>',$music->id)->get();

        // return view('musicplay',[
        //     'music' => $music,
        // ]);
        
        return view('musicplay',['music' => $music,'othermusics'=>$othermusics]);
    }
    /////////////////////////////////////////////////////////////////////////////

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
