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

    // metodo para mostar dados de um poste especifico
    public function show(string|int $id){

        // Support::find($id);
        // Support::where('id', $id)->first;
        // Support::where('id', '!=', $id)->first;

        if (!$support = Support::find($id)) {
            return back();
        }

        // dd($support->subject);

        return view('admin/supports/show', compact('support'));
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

    // metodo para editar 
    public function edit(Support $support, string|int $id){
        if (!$support = $support->where('id', $id)->first()) {
            return back();
        }

        return view('admin/supports.edit', compact('support'));

    }

    public function update(Request $request, Support $support, string $id){

        if (!$support = $support->find($id)) {
            return back();
        }

        $support->update($request->only(['subject', 'body'])); 

        return redirect()->route('supports.index');

    }

    // apagar registro na bd
    public function destroy(string|int $id){
        if (!$support = Support::find($id)) {
            return back();
        }

        $support->delete();
        return redirect()->route('supports.index');

    }
    
}
