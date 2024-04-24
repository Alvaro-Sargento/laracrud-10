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

    // metodo para cadastrar 
    public function store(REQUEST $request, Support $support){

        $data = $request->all();
        $data['status'] = 'a';

        $support = $support->create($data);

        // imprime os dados no console
        // dd($support);

        return redirect()->route('supports.index');
    }

}
