<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
// use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use DB;
use DateTime;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $ticket = DB::table('posts')
        ->latest()
            ->get();

        $user = User::role('Support')->get();

        return view('admin.posts.index', compact('ticket', 'user'));
    }



    public function detailticket($id)
    {
        $ticket = Post::find($id);
        return view('posts.details', compact('ticket'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::role('Support')->get();
        return view('admin.posts.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */


    public function store(Request $request)
    {

        // $ticket = Post::create([
        //     'title' =>  $request->input('title'),
        //     'description' => $request->input('description')
        // ]);
        // if ($image = $request->file('image')) {
        //     $destinationPath = 'postimage/';
        //     $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        //     $image->move($destinationPath, $profileImage);
        //     $ticket['image'] = "$profileImage";
        // }
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'image|file',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        Post::create($validatedData);


        return redirect()->route('posts')->with('success', 'Berita has ben Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);
        $user = User::role('Support')->get();
        $closeby = User::role('Support')->get();


        return view('admin.posts.showposts', compact('post', 'user', 'closeby'));
        // dd('oke');
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
    public function update(Request $request, string $id)
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
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $update = Post::find($id);
        $update->update($validatedData);



        return redirect()->route('posts')->with('success', ' Berita telah di edit.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ticket = Post::find($id);
        $ticket->delete();
        return redirect()->route('posts')->with('success', ' Berita telah terhapus.');
    }
}
