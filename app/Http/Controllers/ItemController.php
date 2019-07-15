<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Item;
//use App\Http\Requests\ItemRequest;  //追加

class ItemController extends Controller
{
    /**
     * 一覧表示
     */
    public function index()
    {
        $items = Item::all();

        return view('item.index', compact('items'));
    }

    /**
     * 
     */
    public function create(Request $request)
    {
        if ($request->isMethod('POST')) {

            $path = $request->file('image_file')->store('public/img');

            Item::create(['file_name' => basename($path)]);

            return redirect('/')->with(['success'=> 'ファイルを保存しました']);
        }
        // GET
        return view('item.create');
    }
}
