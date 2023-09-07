<?php

namespace App\Http\Controllers;

use App\Rules\CheckWordCount;
use Illuminate\Http\Request;

class FormsControllar extends Controller
{
    public function form1()
    {
        return view('forms.form1');
    }
    public function form1_data(Request $request)
    {
        // dd ($request->all());
        // dd($request->except('_token'));
        // dd($request->only('age'));
        // dd($request->only(['age','name']));
        // $name = $request->input('name');
        // dd($name);
        $name = $request->name;
        $age = $request->age;

        return "Welcome $name, your age $age";
    }

    public function form2()
    {
        return view('forms.form2');
    }

    public function form2_data(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $age = $request->age;
        $number = $request->number;
        $password = $request->password;

        return view('forms.form2_data', compact('name', 'email', 'age', 'number', 'password'));
    }

    public function form3()
    {
        return view('forms.form3');
    }

    public function form3_data(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
            ]
        );

        dd($request->all());
    }


    public function form4()
    {
        return view('forms.form4');
    }

    public function form4_data(Request $request)
    {
        $request->validate(
            [
                // 'name' => 'required |min:4|max:20',
                'name'=>  ['required', new CheckWordCount(3)],
                'email' => 'required |ends_with:gmail.com',
                'password' => ['required','min:5',  'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/','confirmed'],
                'bio' => ['required',new CheckWordCount(10) ],
            ]
        );

        dd($request->all());
    }

    public function form5()
    {
        return view('forms.form5');
    }

    public function form5_data(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'cv' => 'required',
            ]
        );
        // $img_name =$request->file('cv')->getClientOriginalName();
        $alpha =range('a','z');
        $ex = $request->file('cv')->getClientOriginalExtension();
        // $img_name = rand() .time(). '.' .$ex;
        $img_name= rand().rand().'_'.rand().'_' . $alpha[rand(0,count($alpha)-1)].'.'.$ex;
        $request->file('cv')->move(public_path('uploads'),$img_name);

        dd($request->all());
    }
    
}
