<?php

namespace App\Exports;

use App\Models\ReportDetail;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Carbon\Carbon;

class ExportFile implements FromCollection, WithHeadings, WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */
    protected $tanggal;

    public function __construct($tanggal)
    {
        $this->tanggal = $tanggal;
    }

    public function collection()
    {
        return ReportDetail::whereDate('created_at', $this->tanggal)->get();
    }

    public function headings(): array
    {
        return [
            'Name',
            'Date',
            'Shift',
            'Time',
            'Part Number',
            'Desc. Name Part',
            'Batch Number',
            'Output',
            'Description'
        ];
    }

    public function map($reportDetail): array
    {
        return [
            $reportDetail->report->name,
            $reportDetail->report->date,
            $reportDetail->report->shift,
            $reportDetail->report->time,
            $reportDetail->part_number,
            $reportDetail->desc_name_part,
            $reportDetail->batch_number,
            $reportDetail->output,
            $reportDetail->deskripsi,
        ];
    }
}
