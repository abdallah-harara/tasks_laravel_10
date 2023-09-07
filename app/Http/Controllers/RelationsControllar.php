<?php

namespace App\Http\Controllers;
use App\Models\comment;
use App\Models\insurance;
use App\Models\post;
use App\Models\User;
use Illuminate\Http\Request;

class RelationsControllar extends Controller
{
    public function one_to_one()
    {
        //   return 'eeeeeeeeeeeeeee';
        // $user = User::find(2);
        // // $insurance =insurance::where('user_id', $user->id)->first();
        // dd($user->insurance);
        // $insurance = insurance::find(2);
        // dd($insurance->user);
        $users = User::with('insurance')->get();

        return view('relation.one_to_one', compact('users'));
    }

    public function one_to_many($id) {
     $post = Post::find($id);
        //  dd($post->comment);
        return view('relation.one_to_many', compact('post'));
    }
    public function one_to_many_data(Request $request) {
    //  dd($request->all());
    comment::create([
        'comment'=> $request->comment,
        'post_id'=> $request->post_id,
        'user_id'=> 1
    ]);
    return redirect()->back();
    }
}
