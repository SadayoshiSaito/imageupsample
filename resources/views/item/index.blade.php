<h1>メッセージ一覧</h1>

    @if (count($items) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>メッセージ</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->jan }}</td>
                    <td>{{ $item->photos[0]->item_id }}</td>
                    <td>{{ $item->photos[0]->path }}</td>
                    <td><img src="item/{{ $item->photos[0]->path }}"></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
    <p>まだアイテム無し</p>

    @endif

    <a href="./create">フォトを登録する</a>
