<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class CrudController extends Controller
{
    public function index()
    {
        $data = Crud::get();
        return view('index', compact('data'));
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        
        $data = new Crud();
        $data->name = $request->name;
        $data->save();
        return redirect()->route('index');



    }
    public function destroy($id)

    {
        Crud :: where('id',$id)->delete();
        return redirect()->route('index');
    }
    public function edit($id)

    {
        $data = Crud :: where('id',$id)->first();
        return view('edit',compact('data'));
    }
    public function update(Request $request)
    {
        // Crud::create([
        //     'name'=>$request->name,
        // ]);
        $data = Crud::find($request->id );
        $data->name = $request->name;
        $data->save();
        return redirect()->route('index');



    }
}
