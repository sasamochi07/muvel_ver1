@extends('layouts.app')
@section('content')
@include('common.errors')

<div class="row">
    <div class="col-sm-4">
                    
        <div class="text-center my-4">
            <h3 class="brown border p-2">音楽検索</h3>
        </div>

        <tbody>
            {!! Form::open(['route' => 'select', 'method' => 'get']) !!}
                <td class="form-group">
                    {!! Form::label('emotion_id', '感情:') !!}
                    {!! Form::select('emotion_id', ['' => '指定なし'] + Config::get('emotion.kanjo') , '指定なし') !!}
                </td>
                <td class="form-group">
                    {!! Form::label('country_id', '国:') !!}
                    {!! Form::select('country_id', ['' => '指定なし'] + Config::get('country.kuni') , '指定なし') !!}
                </td>
                <td class="form-group">
                    {!! Form::label('area_id', '地域:') !!}
                    {!! Form::select('area_id', ['' => '指定なし'] + Config::get('area.eria') , '指定なし') !!}
                </td>
                <td class="form-group">
                    {!! Form::label('genre_id', 'ジャンル:') !!}
                    {!! Form::select('genre_id', ['' => '指定なし'] + Config::get('genre.janru') , '指定なし') !!}
                </td>
                <td class="form-group">
                    {!! Form::label('category_id', 'カテゴリー:') !!}
                    {!! Form::select('category_id', ['' => '指定なし'] + Config::get('category.kategori') , '指定なし') !!}
                </td>
                <td class="form-group">               
                     {!! Form::submit('検索', ['class' => 'btn btn-primary btn-block']) !!}
                </td>
            {!! Form::close() !!}
        <tbody>
    </div>

                {{-- //検索結果の一覧を表示する --}}
                
    <div class="col-sm-8">
        <div class="text-center my-4">
            <h3 class="brown p-2">音楽一覧</h3>
        </div>

        <tbody>  
            @if(!empty($data))

                @foreach($data as $item)

                    <tr>
                        <td class="table-text">
                            {{ $item->music_name }}
                        </td>
                        <td class="table-text">
                            <img src="{{ asset('image/' .$item->music_image_path) }}" alt="hoge.png" width="193" height="130"> 
                        </td>
                        <td class="table-text">
                            <audio id="myTune{{$item}}" controls controlsList="nofullscreen nodownload noremoteplayback">
                                <source  src="{{ asset($item->music_path)}}">
                            </audio>
                        </td>
                        <td class="table-text">
                            {{ $item->music_description }}
                        </td>
                        {{-- 各音楽から音楽再生ページに遷移させたいが、 $musicsが上手く渡せてない --}}
                        {{-- <td>
                            <form action="{{ url('/musicplay' .'/' .$musics->id) }}" method="GET"> {{ csrf_field() }}
                                <button type="submit" class="btn">
                                    To Playing Page
                                </button>
                            </form>  
                        </td> --}}
                    </tr>
                    
                @endforeach
                {{ $data->appends(request()->input())->render('pagination::bootstrap-4') }}
           
            @endif    
        </tbody>   
    </div>
</div>


@endsection