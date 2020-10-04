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
        $othermusics= Music::where('id','<>',$music->id)->get();
        
        return view('musicplay',['music' => $music,'othermusics'=>$othermusics]);
    }
    /////////////////////////////////////////////////////////////////////////////


    
    
    /////////////////////////////////////////////////////////////////////////////
    
    public function search(Music $musics)
    {
        // Request $request
        // dd($request);
        
            //onにする際にはこちらをコメントアウト 
        // $musics = Music::inRandomOrder()->paginate(10);
        // return view('discover',['musics' => $musics]);
        
        // return view('discover',['music' => $music,'othermusics'=>$othermusics]);
    }
    /////////////////////////////////////////////////////////////////////////////
    
    /////////////////////////////////////////////////////////////////////////////

    public function select(Request $request)
    {
            //データを引っ張ってくるSQLを変数に入れておく
        $query = Music::query();

            //genreのデータををリクエストボディに送信
        $select1 = $request->input('genre_id');

            // リクエストボディの中にgenre_idがあり、指定なし以外の場合は、それに該当するデータを取得する
        if ($request->has('genre_id') && $select1 != ('指定なし')) {
            $query->where('genre_id', $select1)->get();
        }

            //ユーザを1ページにつき10件ずつ音楽を表示する
        $data = $query->paginate(10);

            //なんの制限もなければとりあえず、全ての音楽データを取得できていることは確認ずみ
        // dd($data);

        return view('discover',[
            'data' => $data
        ]);

        
            //-----------------------------------------------------------------
                //以下はこれまでに間違えたやつなので上述のコードが正解だった場合は削除する
            //-----------------------------------------------------------------
        // $genres=Genre::all()->get();
        // dd($genre);
        // $musics = Music::all()->get();
        // return view('discover',['musics' => $musics]);

            //こちらは参考程度に上のやつをコピペしたやつ
        // $musics = Music::inRandomOrder()->paginate(10);
        // return view('list',['musics' => $musics]);
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
