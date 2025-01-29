<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $items = Item::all();
        return view('item.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('item.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // return $request;

        $request->validate([
            'name' => 'required|string',
            'price' => 'required|integer',
            'stock' => 'required|integer',
            'description' => 'required|string',
            'category_id' => 'required|integer'
        ]);

        $item = new Item();
        $item->name = $request->name;
        $item->price = $request->price;
        $item->stock = $request->stock;
        $item->description = $request->description;
        $item->category_id = $request->category_id;
        $item->status = $request->status;
        $item->save();

        return redirect()->route('item.index')->with('success', 'Item created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $item = Item::find($id);
        return view('item.detail', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $categories = Category::all();
        $item = Item::find($id);
        return view('item.edit', compact('item', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $item = Item::find($id);
        $item->name = $request->name;
        $item->stock = $request->stock;
        $item->price = $request->price;
        $item->description = $request->description;
        $item->status = $request->status;
        $item->category_id = $request->category_id;
        $item->update();

        return redirect()->route('item.index')->with('success', 'item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $item = Item::find($id);
        if($item){
            $item->delete();
            return back()->with('success', 'Item deleted successfully!');
        }
        return back()->with('error', 'Item not found!');
    }
}
