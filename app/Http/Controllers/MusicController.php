<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Music;
use App\Models\Genre;
use App\Models\Category;
use App\Models\Country;
use App\Models\Area;
use App\Models\Emotion;
use App\Models\Provider;
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
        $post = new Post;
        $post -> music_name = $request -> music_name;
        $post -> music_name;
        $post -> music_name;
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
        $othermusics= Music::where('id','<>',$music->id)->get();
        
        return view('musicplay',['music' => $music,'othermusics'=>$othermusics]);
    }
    /////////////////////////////////////////////////////////////////////////////


    
    
    /////////////////////////////////////////////////////////////////////////////
    
    public function search(Music $musics)
    {
      
    }
    /////////////////////////////////////////////////////////////////////////////
    
    /////////////////////////////////////////////////////////////////////////////

    public function select(Request $request)
    {
        // $musics = Music::all();
            
        $query = Music::query();

            //genreのデータををリクエストボディに送信
        $select_emotion = $request->input('emotion_id');
        $select_genre = $request->input('genre_id');
        $select_category = $request->input('category_id');

        if ($request->has('emotion_id') && $select_genre != ('指定なし')) {
            $query->orWhere('emotion_id', $select_emotion)->get();
        }
        
        if ($request->has('genre_id') && $select_genre != ('指定なし')) {
            $query->orWhere('genre_id', $select_genre)->get();
        }

        if ($request->has('category_id') && $select_category != ('指定なし')) {
            $query->orWhere('category_id', $select_category)->get();
        }

        $data = $query->paginate(10);

            // $musicsを渡したい
        return view('discover',[
            'data' => $data,
            // 'musics'=>$musics
        ]);
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
