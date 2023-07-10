<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = 'events';

    protected $fillable = [
        'title',
        'start_date',
        'end_date',
        'jam',
        'tempat',
        'asal_surat',
        'bidang_penanggung_jawab',
        'keterangan',
        'no_surat',
        'no_agenda',
        'category',
    ];
}
