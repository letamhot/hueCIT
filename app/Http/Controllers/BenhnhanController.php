<?php

namespace App\Http\Controllers;

use App\benhnhan;
use App\cosoyte;
use App\giuongbenh;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use Session;

class BenhnhanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $benhnhan = benhnhan::orderBy('created_at', 'desc')->get();
        return view('benhnhan.index', compact('benhnhan'));
    }

    public function show($id)
    {
        //fetch Benhnhan data
        $benhnhan = benhnhan::find($id);
// 
        //pass Benhnhans data to view and load list view
        return view('benhnhan.details', compact('benhnhan'));
    }

    public function create()
    {
        //load form view
        $cosoyte = cosoyte::all();
        $giuong = giuongbenh::all();
        return view('benhnhan.add', compact('giuong', 'cosoyte'));
    }

    public function store(Request $request)
    {
        //validate Benhnhan data
        $this->validate($request, [
            'hoten' => 'required',
            'diachi' => 'required',
            'SDT' => 'required',
            'BirthDay' => 'required',
            'StartDay' => 'required',
            'tenbenh' => 'required',
            'id_giuong' => 'required',
            'id_csyt' => 'required',

        ]);
        $benhnhan = new benhnhan();
        $benhnhan->hoten = $request->hoten;
        $benhnhan->diachi = $request->diachi;
        $benhnhan->SDT = $request->SDT;
        $benhnhan->BirthDay = $request->BirthDay;
        $benhnhan->StartDay = $request->StartDay;
        $benhnhan->tenbenh = $request->tenbenh;
        $benhnhan->id_giuong = $request->id_giuong;
        $benhnhan->id_csyt = $request->id_csyt;
        $benhnhan->save();

        return redirect()->route('benhnhan.index')->with('success', 'Benhnhan Created successfully');
    }

    public function edit($id)
    {
        //get Benhnhan data by id
        $benhnhan = benhnhan::find($id);
        $cosoyte = cosoyte::all();
        $giuong = giuongbenh::all();

        //load form view
        return view('benhnhan.edit', compact('benhnhan', 'cosoyte', 'giuong'));
    }

    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'hoten' => 'required',
            'diachi' => 'required',
            'SDT' => 'required',
            'BirthDay' => 'required',
            'StartDay' => 'required',
            'tenbenh' => 'required',
            'id_giuong' => 'required',
            'id_csyt' => 'required',

        ]);
        $benhnhan = benhnhan::findOrfail($id);
        $benhnhan->hoten = $request->hoten;
        $benhnhan->diachi = $request->diachi;
        $benhnhan->SDT = $request->SDT;
        $benhnhan->BirthDay = $request->BirthDay;
        $benhnhan->StartDay = $request->StartDay;
        $benhnhan->tenbenh = $request->tenbenh;
        $benhnhan->id_giuong = $request->id_giuong;
        $benhnhan->id_csyt = $request->id_csyt;
        $benhnhan->save();
        return redirect()->route('benhnhan.index')->with('success', 'Benhnhan updated successfully');
    }

    public function destroy($id)
    {
        //update Benhnhan data
        $benhnhan = benhnhan::find($id);
        $benhnhan->delete();

        //store status message
        return back()->with('success', "Benhnhan $benhnhan->hoten delete!");
    }

}