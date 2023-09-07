<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    function indexes()  {
        $title="abdallah harara";
        $desc="Iam web developer and grafic desgin";
        $about_f= "Freelancer abdallah is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional SASS stylesheets for easy customization.";
        $about_l= "You can abdalllah create your own custom avatar for the masthead, change the icon in the
                        dividers, and add your email address to the contact form to make it fully functional!";
        $file="File abood dawnload";
        $portfolios=[
            [
                'title'=> 'LOG CABIN abd',
                'image'=> 'cabin.png',
                'text'=> 'Lorem 1 ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.'
            ],
            [
                'title' => 'TASTY CAKE',
                'image' => 'cake.png',
                'text' => 'Lorem 2 ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.'
            ],
            [
                'title' => 'CIRCUS TENT',
                'image' => 'circus.png',
                'text' => 'Lorem 3 ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.'
            ],
            [
                'title' => 'CONTROLLER',
                'image' => 'game.png',
                'text' => 'Lorem 4 ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.'
            ],
            [
                'title' => 'LOCKED SAFE',
                'image' => 'safe.png',
                'text' => 'Lorem 5 ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.'
            ],
            [
                'title' => 'SUBMARINE ',
                'image' => 'submarine.png',
                'text' => 'Lorem 6 ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.'
            ]
            ];
            $data=[['abood','aboodharara@gmail.com','05487778'],
            ['moayed', 'moayedharara@gmail.com', '05436978'],
            ['mohammed', 'mohammedharara@gmail.com', '054796778'],
            ['manar', 'manarharara@gmail.com', '054796778']
        ];
return view('site1.index',compact('title','desc','about_f',"about_l",'file', 'portfolios','data'));
    }
}
