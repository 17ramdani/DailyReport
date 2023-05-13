<?php

namespace App\Exports;

use App\Models\ReportDetail;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportFile implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ReportDetail::all();
    }
}
