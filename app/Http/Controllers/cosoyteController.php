<?php

namespace App\Http\Controllers;
use App\cosoyte;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use Session;
class cosoyteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware( 'role:ROLE_ADMIN' );
        // $this->middleware( 'role:ROLE_SUPERADMIN' );
    }
    public function index(Request $request){
    
        $cosoyte = cosoyte::all();
        return view('cosoyte.index', compact('cosoyte'));
    }
    
    public function details($id){
        //fetch post data
        $cosoyte = cosoyte::find($id);
        
        //pass posts data to view and load list view
        return view('cosoyte.details', ['cosoyte' => $cosoyte]);
    }
    
    public function add(){
        //load form view
        return view('cosoyte.add');
    }
    
    public function insert(Request $request){
        //validate post data
        $this->validate($request, [
            'name'=>'required',
            'diachi'=>'required',
            'sdt'=>'required',
             'loaiCS'=>'required',
            'NgayTL' =>'required',   
            
        ]);
        $cosoyte = new cosoyte();
        $cosoyte->id_csyt = $request->id_csyt;
        $cosoyte->name = $request->name;
        $cosoyte->diachi = $request->diachi;
        $cosoyte->sdt = $request->sdt;
        $cosoyte->loaiCS = $request->loaiCS;
        $cosoyte->NgayTL = $request->NgayTL;
        $cosoyte->save();
        return redirect()->route('cosoyte.index')->with('success','Cosoyte Created successfully');
    }

    
    public function edit($id_csyt){
        //get post data by id_csyt
        $cosoyte = cosoyte::find($id_csyt);
        
        //load form view
        return view('cosoyte.edit', compact('cosoyte'));
    }
    
    public function update($id, Request $request){
    
        $this->validate($request, [
            'name'=>'required',
            'diachi'=>'required',
            'sdt'=>'required',
            'loaiCS'=>'required',
            'NgayTL' =>'required',  
            
        ]);
        $cosoyte = cosoyte::findOrfail($id);
        $cosoyte->id_csyt = $request->id_csyt;
        $cosoyte->name = $request->name;
        $cosoyte->diachi = $request->diachi;
        $cosoyte->sdt = $request->sdt;
        $cosoyte->loaiCS = $request->loaiCS;
        $cosoyte->NgayTL = $request->NgayTL;
        $cosoyte->save();
        return redirect()->route('cosoyte.index')->with('success','Post updated successfully');
    }
    
    public function delete($id){
        //update post data
        $cosoyte = cosoyte::findOrfail($id);
        $cosoyte->delete();
        
        //store status message
        return back()->with('success', "Cosoyte $cosoyte->name delete!");

    }
    
}