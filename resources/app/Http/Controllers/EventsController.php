<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index(){
        return view('modules.events.index');
    }
    public function create(){
        return view('modules.events.create');
    }
}
