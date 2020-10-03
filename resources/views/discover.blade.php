{{-- カテゴリーを選択
選択されたカテゴリーのIDをGETでコントローラーに飛ばす
コントローラーでmusic whereInで第一引数に’カテゴリーID’ ,IDの配列を渡す
→
配列について --}}

<div>aaaaa</div>

<tr>
    <!--音楽検索ボタン-->
    {{-- <td>
        <form action="{{ url('/musicplay' .'/' .$music->id) }}" method="GET"> {{ csrf_field() }}
            <button type="submit" class="btn">
                GENRE
            </button>
        </form>    
    </td> --}}

    <td>
        {{Form::select('genre', ['', '19 to 64', 'Over 65'])}}
    </td>
</tr>

{{-- <div class="form-check">
    {{Form::checkbox('fruits[]', 'りんご', null, ['class' => 'form-check-input'])}}
    <label class="form-check-label">りんご</label>
</div>
<div class="form-check">
    {{Form::checkbox('fruits[]', 'バナナ', null, ['class' => 'form-check-input'])}}
    <label class="form-check-label">バナナ</label>
</div>
<div class="form-check">
    {{Form::checkbox('fruits[]', 'みかん', null, ['class' => 'form-check-input'])}}
    <label class="form-check-label">みかん</label>
</div> --}}