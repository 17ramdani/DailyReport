<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ReportDetail;
use App\Exports\ExportFile;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;

class DashboardController extends Controller
{

    public function index(Request $request)
    {

        $date = $request->input('tanggal') ? Carbon::parse($request->input('tanggal'))->format('Y-m-d') : null;


        if ($date) {
            $reportDetails = ReportDetail::with('report')->whereDate('created_at', $date)->get();
        } else {
            $reportDetails = ReportDetail::with('report')->get();
        }

        return view('admin.dashboard', ['reportDetails' => $reportDetails, 'tanggal' => $date]);
    }

    public function export(Request $request)
    {
        $tanggal = $request->query('tanggal');
        return Excel::download(new ExportFile($tanggal), 'Daily Report ' . $tanggal . '.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
