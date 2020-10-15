<!-- resources/views/foryou.blade.php -->
@extends('layouts.app')
@section('content')
    <!-- Bootstrapの定形コード… -->
    <div class="card-body"> 
        <div class="card-title">
            <a href="http://localhost:8080/discover">
                Discover
            </a>
        </div>
        <!-- バリデーションエラーの表示に使用-->
    	@include('common.errors')
        <!-- バリデーションエラーの表示に使用-->
        
             <!-- 現在の本 -->
             
         <!--//＠以下に処理を記載する-->
        @if (count($musics) > 0)
            <div class="card-body">
                <div class="card-body">
                    <table class="table table-striped task-table">
                        <!-- テーブルヘッダ -->
                        <thead>
                            <th>音楽一覧</th>
                            <th>&nbsp;</th>
                        </thead>
                        <!-- テーブル本体 -->
                        <tbody>

                            @foreach ($musics as $music)
                                <tr>
                                    <!-- 音楽のタイトルを表示 -->
                                    <td class="table-text">
                                        <div>{{ $music->music_name }}</div>
                                    </td>
                                    
                                    <!--dd($music);-->
                                    <!-- 音楽のサムネイルを表示 -->
                                    <td class="table-text">
                                        <img alt="ロゴ" src="{{ asset('image/' .$music->music_image_path) }}">
                                    </td>
                                    
                                    <!-- 音楽の説明を表示 -->
                                    <td class="table-text">
                                        <div>{{ $music->music_description }}</div>
                                    </td>

                                    <td class="table-text">
                                        <audio id="myTune{{$music}}" controls controlsList="nofullscreen nodownload noremoteplayback">
                                            <source  src="{{ asset($music->music_path)}}">
                                        </audio>
                                    </td>
                                 
                                    <!--音楽再生ページに遷移するボタン-->
                                    <td class="table-text">
                                        <form action="{{ url('/musicplay' .'/' .$music->id) }}" method="GET"> {{ csrf_field() }}
                                            <button type="submit" class="btn">
                                                To Playing Page
                                            </button>
                                        </form>    
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
        
    </div>


@endsection