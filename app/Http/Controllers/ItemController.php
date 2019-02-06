<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Item;   //追加
use App\Http\Requests\ItemRequest;  //追加

class ItemController extends Controller
{
    //ここから追加
    public function index()
    {
        $items = Item::all();

        return view('item.index', compact('items'));
    }

    public function create(ItemRequest $request)
    {
        // POST
        if ($request->isMethod('POST')) {

            // 商品情報の保存
            $item = Item::create(['name'=> $request->name]);

            // 商品画像の保存
            foreach ($request->file('files') as $index=> $e) {
                //画像ファイルの拡張子を取得
                $ext = $e['photo']->guessExtension();
                //ファイル名生成
                $filename = "{$request->name}.{$index}.{$ext}";
                $path = $e['photo']->storeAs('photos', $filename);
                // photosメソッドにより、商品に紐付けられた画像を保存する
                $item->photos()->create(['path'=> $path]);
            }

            return redirect('/items')->with(['success'=> 'ファイルを保存しました']);
        }
        // GET
        return view('item.create');
    }
    //ここまで
}
