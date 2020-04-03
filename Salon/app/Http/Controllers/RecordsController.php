<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Record;

class RecordsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }

    public function index()
    {
        $records = Record::orderBy('price','asc')->paginate(5);
        return view('pages.records')->with('records',$records);
    }


    public function create()
    {
        return view('pages.create');
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'description'=>'required',
            'price'=>'required'
        ]);
        
        $record=new Record;
        $record->name=$request->input('name');
        $record->description=$request->input('description');
        $record->price=$request->input('price');

        $record->save();
        return redirect('/record')->with('success','Service Created');
    }


    public function show($id)
    {
        $record= Record::find($id);
        return view('pages.show')->with('record',$record);
    }

    public function edit($id)
    {
        $record= Record::find($id);
        return view('pages.edit')->with('record',$record);
    }


    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'=>'required',
            'description'=>'required',
            'price'=>'required'
        ]);
        
        $record=Record::find($id);
        $record->name=$request->input('name');
        $record->description=$request->input('description');
        $record->price=$request->input('price');

        $record->save();
        return redirect('/record')->with('success','Service Updated');
    }

    
    public function destroy($id)
    {
        $record = Record::find($id);
        $record->delete();
        return redirect('/record')->with('success','Post Removed');
    }
}
