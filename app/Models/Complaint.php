<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    protected $table = "complaints";

    protected $fillable = [
        'student_id',
        'isi_pengaduan',
        'tanggal',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
