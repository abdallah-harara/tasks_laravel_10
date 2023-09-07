<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site3Controller extends Controller
{
function index()  {
        return view('site3.index');
}

function experience()  {
        return view('site3.experience');
}

function education()  {
        return view('site3.education');
}

function skills()  {
        return view('site3.skills');
}

function interests()  {
        return view('site3.interests');
}

function awards()  {
        $Certificates = [
            'Google Analytics Certified Developer',
            'Mobile Web Specialist - Google Certification',
            '1 st Place - University of Colorado Boulder - Emerging Tech Competition 2009',
            '1 st Place - University of Colorado Boulder - Adobe Creative Jam 2008 (UI Design Category)',
        ];
        return view('site3.awards',compact('Certificates'));
}







}

