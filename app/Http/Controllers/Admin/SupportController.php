<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index(Support $support){

        $support = new Support();
        $supports = $support->all();

        // dd($supports    );
        return view('admin/supports/index', compact('supports'));
    }


    // medoto para criar registo
    public function create(){
        return view('admin/supports/create');
    }
}