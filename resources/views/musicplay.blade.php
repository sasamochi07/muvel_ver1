<!-- resources/views/foryou.blade.php -->
@extends('layouts.app')
@section('content')
    <!-- Bootstrapの定形コード… -->
    <div class="card-body"> 
        <div class="card-title">
            音楽の再生
        </div>
        <!-- バリデーションエラーの表示に使用-->
    	@include('common.errors')
        <!-- バリデーションエラーの表示に使用-->
        
             
         <!--//＠以下に処理を記載する-->
        {{-- @if (count($music) > 0) --}}
        {{-- @if (is_countable($music)) {
            count($music);
        } > 0) --}}
            <div class="card-body">
                <div class="card-body">
                    <table class="table table-striped task-table">
                        <!-- テーブルヘッダ -->
                        <thead>
                            <th>音楽再生</th>
                            <th>&nbsp;</th>
                        </thead>
                        <!-- テーブル本体 -->
                        <tbody>

                            <!--音楽再生-->
                            <tr>
                                {{-- 音楽の名前 --}}
                                <td class="table-text">
                                    <div>{{ $music->music_name }}</div>
                                </td>
                                <!-- 音楽のサムネイルを表示 -->
                                <td class="table-text">
                                    <img alt="ロゴ" src="{{ asset('image/' .$music->music_image_path) }}">
                                </td>
                                
                                <!-- 音楽の説明を表示 -->
                                <td class="table-text">
                                    <div>{{ $music->music_description }}</div>
                                </td>
                                <td>
                                    <audio id="myTune{{$music}}" controls controlsList="nofullscreen nodownload noremoteplayback">
                                        <source  src="{{ asset($music->music_path)}}">
                                    </audio>
                                </td>
                            <tr>
                            
                            <thead>
                                <th>次に再生</th>
                                <th>&nbsp;</th>
                            </thead>
                            @foreach ($othermusics as $othermusic)
                                <tr>
                                    <!-- 音楽のタイトルを表示 -->
                                    <td class="table-text">
                                        <div>{{ $othermusic->music_name }}</div>
                                    </td>
                                    
                                  
                                    <!-- 音楽のサムネイルを表示 -->
                                    <td class="table-text">
                                        <img alt="ロゴ" src="{{ asset('image/' .$othermusic->music_image_path) }}">
                                    </td>
                                    
                                    <!-- 音楽の説明を表示 -->
                                    <td class="table-text">
                                        <div>{{ $othermusic->music_description }}</div>
                                    </td>
                                    
                                    <!--音楽再生ボタン-->
                                    <td>
                                        <audio id="myTune{{$music}}" controls controlsList="nofullscreen nodownload noremoteplayback">
                                            <source  src="{{ asset($othermusic->music_path)}}">
                                        </audio>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        {{-- @endif --}}
        
    </div>


@endsection