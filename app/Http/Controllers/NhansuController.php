<?php

namespace App\Http\Controllers;

use App\cosoyte;
use App\Http\Controllers\Controller;
use App\loaiNS;
use App\nhansu;
use DB;
use Illuminate\Http\Request;
use Session;

class NhansuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $nhansu = nhansu::all();
        return view('nhansu.index', compact('nhansu'));
    }

    public function show($id)
    {
        //fetch post data
        $ns = nhansu::find($id);

        //pass posts data to view and load list view
        return view('nhansu.details', compact('ns'));
    }

    public function create()
    {
        //load form view
        $loaiNs = loaiNS::all();
        $cosoyte = cosoyte::all();
        return view('nhansu.add', compact('loaiNs', 'cosoyte'));
    }

    public function store(Request $request)
    {
        //validate post data
        $this->validate($request, [
            'name' => 'required',
            'birthDay' => 'required',
            'startDay' => 'required',
            'id_LoaiNS' => 'required',
            'id_csyt' => 'required',
        ]);

        $nhansu = new nhansu();
        $nhansu->name = $request->name;
        $nhansu->birthDay = $request->birthDay;
        $nhansu->startDay = $request->startDay;
        $nhansu->id_LoaiNS = $request->id_LoaiNS;
        $nhansu->id_csyt = $request->id_csyt;
        $nhansu->save();
        return redirect()->route('nhansu.index')->with('success', 'Nhan Su Created successfully');
    }

    public function edit($id)
    {
        //get post data by id

        $nhansu = nhansu::find($id);
        $cosoyte = cosoyte::all();
        $loaiNs = loaiNS::all();

        //load form view
        return view('nhansu.edit', compact('nhansu', 'cosoyte', 'loaiNs'));
    }

    public function update( Request $request, $id)
    {
        //validate post data
        $this->validate($request, [
            'name' => 'required',
            'birthDay' => 'required',
            'startDay' => 'required',
            'id_LoaiNS' => 'required',
        ]);
        $nhansu = nhansu::findOrfail($id);
        $nhansu->name = $request->name;
        $nhansu->birthDay = $request->birthDay;
        $nhansu->startDay = $request->startDay;
        $nhansu->id_LoaiNS = $request->id_LoaiNS;
        $nhansu->id_csyt = $request->id_csyt;
        $nhansu->save();
        return redirect()->route('nhansu.index')->with('success', 'NhanSu Updated successfully');
    }

    public function destroy($id)
    {
        //update post data
        $nhansu = nhansu::findOrfail($id);
        $nhansu->delete();

        //store status message
        return back()->with('success', "Nhansu $nhansu->name delete!");
    }
}
