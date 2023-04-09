<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportDetail extends Model
{
    use HasFactory;
    protected $table = "report_detail";
    protected $primaryKey = "id";
    protected $fillable = [
        'report_id',
        'part_number',
        'desc_name_part',
        'batch_number',
        'output',
        'deskripsi',
    ];

    public function report()
    {
        return $this->belongsTo(Report::class);
    }
}
