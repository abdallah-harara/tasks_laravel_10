<?php

namespace App\Http\Controllers;
use App\Models\post;
use Illuminate\Http\Request;
use Spatie\Backtrace\File;

class PostControllar extends Controller
{
   public function index()  {

    // $posts = Post::simplePaginate(10);


        if(request()->has('search')){
            $posts=Post::where('title','like','%'.request()->search.'%')->paginate(10);
        }else{
            $posts = Post::paginate(10);
        }
        return view('posts.index', compact('posts'));
   }
   public function show($id) {

    $post=Post::findOrFail($id);
    if(!$post){
        // abort(404);
        return redirect()->route('posts.index');
    }
    dd($post->title);
   }
   public function destroy($id) {
    post::destroy($id);
        return redirect()->route('posts.index')->with('msg','post is successfuly');
        return redirect()->back();
// dd($id);

   }

    public function trash()
    {
        $posts = Post::onlyTrashed()->orderByDesc('id')->get();
        return view('posts.trash', compact('posts'));
    }
    public function restore($id) {
      post::onlyTrashed()->find($id)->restore();
        return redirect()->back();

    }
    public function forcedelete($id)
    {
        post::onlyTrashed()->find($id)->forceDelete();
        return redirect()->back();
    }

    public function restore_all()
    {
        post::onlyTrashed()->restore();
        return redirect()->back();
    }

    public function delete_all()
    {
        post::onlyTrashed()->forceDelete();
        return redirect()->back();
    }
    public function create()
    {
        $post = new post();
        return view('posts.create', compact('post'));
    }
    public function store(Request  $request)
    {
        //validation
        $request->validate([
            'title'=>'required',
            'image'=> 'required|image|mimes:png,jpg,jpeg,gif,svg,tiff',
            'content'=>'required'
        ]);
        //Uploads Files
        $img= $request->file('image');
        $img_name =time().rand().$img->getClientOriginalName();
        $img->move(public_path('uploads/posts'),$img_name);
        //Store data in database
        post::create([
            'title' => $request->title,
            'image' => $img_name,
            'content' =>$request->content
        ]);
        //redirect the user
        return redirect()->route('posts.index')->with('msg', 'post created successfuly');

    }
    public function edit($id) {
     $post =Post::find($id);
     return view('posts.edit',compact('post'));
    }
    public function update(Request $request , $id)
    {
        //validation
        $request->validate([
            'title' => 'required',
            'image' => 'nullable|image|mimes:png,jpg,jpeg,gif,svg,tiff',
            'content' => 'required'
        ]);
        $post = Post::find($id);
        $img_name =$post->image;
        //Uploads Files
       if($request->hasFile('image')){

        File::delete(public_path('uploads/posts/'.$img_name));

            $img = $request->file('image');
            $img_name = time() . rand() . $img->getClientOriginalName();
            $img->move(public_path('uploads/posts'), $img_name);
       }
        //Store data in database
        $post->update([
            'title' => $request->title,
            'image' => $img_name,
            'content' => $request->content
        ]);
        //redirect the user
        return redirect()->route('posts.index')->with('msg', 'post created successfuly');

    }

}
