<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\ReportDetail;
use RealRashid\SweetAlert\Facades\Alert;


class ReportController extends Controller
{
    public function index()
    {
        return view('user.dailyReport');
    }

    public function marking()
    {
        return view('user.markingReport');
    }

    public function packing()
    {
        return view('user.packingReport');
    }

    public function store(Request $request)
    {
        $report = new Report;
        $report->name = auth()->user()->name;
        $report->date = $request->date;
        $report->shift = $request->shift;
        $report->time = $request->time;

        // Simpan data ke tabel Report
        $report->save();

        // Simpan detail laporan ke tabel ReportDetail
        $part_numbers = $request->input('part_number');
        $desc_name_parts = $request->input('desc_name_part');
        $batch_numbers = $request->input('batch_number');
        $outputs = $request->input('output');
        $deskripsis = $request->input('deskripsi');

        foreach ($part_numbers as $key => $part_number) {
            $report_detail = new ReportDetail;
            $report_detail->report_id = $report->id;
            $report_detail->part_number = $part_number;
            $report_detail->desc_name_part = $desc_name_parts[$key];
            $report_detail->batch_number = $batch_numbers[$key];
            $report_detail->output = $outputs[$key];
            $report_detail->deskripsi = $deskripsis[$key];

            $report_detail->save();
        }
        Alert::success('Success ', 'Data Berhasil Disimpan');
        return redirect()->route('report.index')->with('success', 'Laporan berhasil disimpan.');
    }



    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
