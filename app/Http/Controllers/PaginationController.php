<?php

namespace App\Http\Controllers;

use App\Models\Pagination;
use Illuminate\Http\Request;

class PaginationController extends Controller
{
    public function index()
    {
        $data =Pagination::paginate(2);
        return view('index', compact('data'));
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        //Pagination::create([
        //     'name'=>$request->name,
        // ]);
        $data = new Pagination();
        $data->name = $request->name;
        $data->save();
        return redirect()->route('index');



    }
    public function destroy($id)

    {
    Pagination :: where('id',$id)->delete();
        return redirect()->route('index');
    }
    public function edit($id)

    {
        $data =Pagination :: where('id',$id)->first();
        return view('edit',compact('data'));
    }
    public function update(Request $request)
    {
        //Pagination::create([
        //     'name'=>$request->name,
        // ]);
        $data =Pagination::find($request->id );
        $data->name = $request->name;
        $data->save();
        return redirect()->route('index');



    }
}
