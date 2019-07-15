<h1>画像一覧</h1>

<a href="./create">新しい画像を登録する</a>

    @if (count($items) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>画像</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><img src="{{ asset('/storage/img/'.$item->file_name) }}"></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
    <p>まだ画像は登録されていません。</p>

    @endif
    