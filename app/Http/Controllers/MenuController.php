<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Menu;
use Illuminate\Support\Facades\Storage;


class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $menu = DB::table('menus')
            ->latest()
            ->get();

        // $user = User::role('Support')->get();

        return view('admin.menu.index', compact('menu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.menu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'harga' => '',
            'image' => 'image|file',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('menu-images');
        }

        Menu::create($validatedData);


        return redirect()->route('createmenu')->with('success', 'Wahana telah dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $menu = Menu::find($id);
        // dd($menu);
        return view('admin.menu.show', compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $aturan = [
            'title' => 'required|max:255',
            'description' => 'required',
            'harga' => '',
            'image' => 'image|file'
        ];
        $validatedData = $request->validate($aturan);
        // 
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('menu-images');
        }

        $update = Menu::find($id);
        $update->update($validatedData);


        return redirect()->route('createmenu')->with('success', 'Wahana telah di edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $menu = Menu::find($id);
        $menu->delete();
        if ($menu->image) {
            Storage::delete($menu->image);
        }
        return redirect()->route('createmenu')->with('success', ' Wahana terhapus.');
    }
}
