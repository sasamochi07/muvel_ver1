{{-- カテゴリーを選択
選択されたカテゴリーのIDをGETでコントローラーに飛ばす
コントローラーでmusic whereInで第一引数に’カテゴリーID’ ,IDの配列を渡す
→
配列について --}}

<div class="row">
    <div class="col-sm-4">
                    
        <div class="text-center my-4">
            <h3 class="brown border p-2">音楽検索</h3>
        </div>
                            {{-- //'select'のURLにアクセスしたらGET通信を開始する --}}
        {!! Form::open(['route' => 'select', 'method' => 'get']) !!}
                                {{-- //自由検索のところ --}}
            {{-- <div class="form-group">
                {!! Form::label('text', 'ユーザ名:') !!}
                {!! Form::text('name' ,'', ['class' => 'form-control', 'placeholder' => '指定なし'] ) !!} --}}
            </div>
                                {{-- //プルダウン式のフォームのところ（棋力のところ） --}}
            {{-- <div class="form-group">
                {!! Form::label('strength', '棋力:') !!}
                {!! Form::select('strength', ['指定なし' => '指定なし'] + Config::get('strength.kiryoku') ,'指定なし') !!} --}}
            </div>
                                {{-- //プルダウン式のフォームのところ（好きな先方のところ） --}}
            <div class="form-group">
                {!! Form::label('genre_id', 'ジャンル:') !!}
                {!! Form::select('genre_id', ['' => '指定なし'] + Config::get('genre.janru') , '指定なし') !!}
                {!! Form::label('category_id', 'ジャンル:') !!}
                {!! Form::select('category_id', ['' => '指定なし'] + Config::get('category.kategori') , '指定なし') !!}
            </div>
                                {{-- //送信ボタンで上記の内容を送信する --}}
            {!! Form::submit('検索', ['class' => 'btn btn-primary btn-block']) !!}
                                {{-- //ここでフォームの終了タグ --}}
        {!! Form::close() !!}
    </div>

                {{-- //検索結果の一覧を表示する --}}
    <div class="col-sm-8">
        <div class="text-center my-4">
            <h3 class="brown p-2">音楽一覧</h3>
        </div>

        <div class="container">
            <!--検索ボタンが押された時に表示されます-->
                                {{-- //検索ボタン押下時に発動する --}}
                                {{-- //データの動きを確認する --}}
            @if(!empty($data))
                {{-- <div class="my-2 p-0">
                    <div class="row  border-bottom text-center"> --}}
                        {{-- <div class="col-sm-4">
                            <p>ユーザ名</p>
                        </div>
                        --}}
                        {{-- <div class="col-sm-4">
                            <p>棋力</p>
                        </div>  --}}
                        {{-- <div class="col-sm-4">
                            <p>ジャンル</p>
                        </div>
                    </div> --}}
{{-- //検索条件に一致したユーザを表示します --}}
                    @foreach($data as $item)
                            <div class="row py-2 border-bottom text-center">
                                
                                {{-- 検索結果に合致する音楽の表示 --}}
                                <div class="col-sm-4">
                                    {{ $item->music_name }}
                                    <img src="{{ asset('image/' .$item->music_image_path) }}" alt="hoge.png"> 
                                    <audio id="myTune{{$item}}" controls controlsList="nofullscreen nodownload noremoteplayback">
                                        <source  src="{{ asset($item->music_path)}}">
                                    </audio>
                                    {{ $item->music_description }}

                                    {{-- 各音楽から音楽再生ページに遷移させたいが、 $musicsが上手く渡せてない --}}
                                    {{-- <form action="{{ url('/musicplay' .'/' .$musics->id) }}" method="GET"> {{ csrf_field() }}
                                        <button type="submit" class="btn">
                                            To Playing Page
                                        </button>
                                    </form>     --}}
                                </div>
                            </div>
                    @endforeach
                </div>
                {{ $data->appends(request()->input())->render('pagination::bootstrap-4') }}
            @endif
        </div>
    </div>
</div>

