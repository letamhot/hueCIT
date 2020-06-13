<?php

namespace App\Http\Controllers;

use DB;

class ChartDataController extends Controller
{

    public function getNhanSu()
    {
        $item1 = DB::table('nhansu')
            ->join('loainhansu', 'loainhansu.id', '=', 'nhansu.id_LoaiNS')
            ->select(DB::raw("loainhansu.name, COUNT(*) as SoLuong"))
            ->whereYear('startDay', '<=', 2013)
            ->groupBy("loainhansu.name")
            ->get();
        $item2 = DB::table('nhansu')
            ->join('loainhansu', 'loainhansu.id', '=', 'nhansu.id_LoaiNS')
            ->select(DB::raw("loainhansu.name, COUNT(*) as SoLuong"))
            ->whereYear('startDay', '<=', 2014)
            ->groupBy("loainhansu.name")
            ->get();
        $item3 = DB::table('nhansu')
            ->join('loainhansu', 'loainhansu.id', '=', 'nhansu.id_LoaiNS')
            ->select(DB::raw("loainhansu.name, COUNT(*) as SoLuong"))
            ->whereYear('startDay', '<=', 2015)
            ->groupBy("loainhansu.name")
            ->get();
        $item4 = DB::table('nhansu')
            ->join('loainhansu', 'loainhansu.id', '=', 'nhansu.id_LoaiNS')
            ->select(DB::raw("loainhansu.name, COUNT(*) as SoLuong"))
            ->whereYear('startDay', '<=', 2016)
            ->groupBy("loainhansu.name")
            ->get();
        $item5 = DB::table('nhansu')
            ->join('loainhansu', 'loainhansu.id', '=', 'nhansu.id_LoaiNS')
            ->select(DB::raw("loainhansu.name, COUNT(*) as SoLuong"))
            ->whereYear('startDay', '<=', 2017)
            ->groupBy("loainhansu.name")
            ->get();
        $item6 = DB::table('nhansu')
            ->join('loainhansu', 'loainhansu.id', '=', 'nhansu.id_LoaiNS')
            ->select(DB::raw("loainhansu.name, COUNT(*) as SoLuong"))
            ->whereYear('startDay', '<=', 2018)
            ->groupBy("loainhansu.name")
            ->get();
        return response()->json([$item1, $item2, $item3, $item4, $item5, $item6]);
    }

    public function getCoSoYTe()
    {
        $item1 = DB::table('cosoyte')
            ->select(DB::raw("loaiCS, COUNT(*) as SoLuong"))
            ->whereYear('NgayTL', '<=', 2010)
            ->groupBy("loaiCS")
            ->get();
        $item2 = DB::table('cosoyte')
            ->select(DB::raw("loaiCS, COUNT(*) as SoLuong"))
            ->whereYear('NgayTL', '<=', 2012)
            ->groupBy("loaiCS")
            ->get();
        $item3 = DB::table('cosoyte')
            ->select(DB::raw("loaiCS, COUNT(*) as SoLuong"))
            ->whereYear('NgayTL', '<=', 2014)
            ->groupBy("loaiCS")
            ->get();
        $item4 = DB::table('cosoyte')
            ->select(DB::raw("loaiCS, COUNT(*) as SoLuong"))
            ->whereYear('NgayTL', '<=', 2016)
            ->groupBy("loaiCS")
            ->get();
        $item5 = DB::table('cosoyte')
            ->select(DB::raw("loaiCS, COUNT(*) as SoLuong"))
            ->whereYear('NgayTL', '<=', 2018)
            ->groupBy("loaiCS")
            ->get();

        return response()->json([$item1, $item2, $item3, $item4, $item5]);
    }
    public function getBenhnhan()
    {
        $item1 = DB::table('benhnhan')
            ->join('giuongbenh', 'giuongbenh.id', '=', 'benhnhan.id_giuong')
            ->select(DB::raw("giuongbenh.name,  COUNT(*) as SoLuong "))
            ->whereYear('StartDay', '<=', 2016)
            ->groupBy("giuongbenh.name")
            ->get();
        $item2 = DB::table('benhnhan')
            ->join('giuongbenh', 'giuongbenh.id', '=', 'benhnhan.id_giuong')
            ->select(DB::raw("giuongbenh.name,  COUNT(*) as SoLuong "))
            ->whereYear('StartDay', '<=', 2017)
            ->groupBy("giuongbenh.name")
            ->get();
        $item3 = DB::table('benhnhan')
            ->join('giuongbenh', 'giuongbenh.id', '=', 'benhnhan.id_giuong')
            ->select(DB::raw("giuongbenh.name,  COUNT(*) as SoLuong "))
            ->whereYear('StartDay', '<=', 2018)
            ->groupBy("giuongbenh.name")
            ->get();
        return response()->json([$item1, $item2, $item3]);
    }
}
