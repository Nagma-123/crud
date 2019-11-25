<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;

class Post extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');     
    }
    
    public function index()
    {
        $posts = DB::table('posts')->orderBy('id','DESC')->paginate(10);

        return view('admin.post',compact('posts'));
    }

    public function create()
    {
        return view('admin.add_post');
    }

    public function add_post(Request $request)
    {
        $request->validate([

            'caption' => 'required',

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        ]);

        // $image = $request->file('image');

        // $new_name = rand().'.'.$image->getClientOriginalExtension();

        // $data = $image->move(public_path("posts"),$new_name);

        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $img = $request->image->move('./storage/uploads', $imageName);
        
        
        $posts = \App\Post::create([
            'caption' => $request->caption,
            'image' => $img ,
            'user_id' => $request->user()->id
        ]);

        return redirect('/post');

        // dd($post);

        // auth()->user()->posts()->create([
        //     'caption' => $data['caption'],
        //     'image' => $imagePath,
        // ]);

        // return redirect('/profile/'.auth()->user()->id);
    }

    public function edit_post(\App\Post $id)
    {
        return view('admin.edit_post',compact('id'));
    }

    public function update_post(Request $request, $id)
    {
        $post = \App\Post::findOrFail($id);

        $this->validate($request, [
            'caption' => 'required',
            'image' => 'required'
        ]);

        if($request->hasFile('image')){
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move('./storage/uploads', $imageName);
        }
        
        // $input = $request->all();

        // $post->fill($input)->save();
        $post->save();

        return redirect('/post');
    }
    
    public function delete_post(\App\Post $id)
    {
        // $post = \App\Post::findOrFail($id);

        //$id->delete();
        
        DB::table('post')->where($id)->delete();
        
        // Post::whereId($id)->delete();

        // return redirect('/post');
    }
}
