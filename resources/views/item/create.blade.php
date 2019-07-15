<!-- エラー処理 -->
@if (count($errors) > 0)
<ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

<!-- 登録フォーム -->
<h1>画像登録画面</h1>
<form action="{{ url('create') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="file" class="form-control" name="image_file">
    <br>
    <hr>
    <button class="btn btn-success">登録</button>
</form>
