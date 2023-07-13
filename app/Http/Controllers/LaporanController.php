<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index(){
        $laporan = Event::all();
        return view('pages.laporan.index', compact('laporan'));
    }
    public function filter(Request $request,  $txtTglAwal, $txtTglAkhir){
        $validation = $request->validate([
            'txtTglAwal' => $request->txtTglAwal,
            'txtTglAkhir' => $request->txtTglAkhir,
        ]);

        $laporan = Event::WhereBetween('start_date', [$txtTglAwal, $txtTglAkhir])
                            ->WhereBetween('end_date', [$txtTglAwal, $txtTglAkhir])
                            ->get();
        return view('pages.laporan.cetak', compact('laporan','txtTglAwal','txtTglAkhir'));
    }
}
