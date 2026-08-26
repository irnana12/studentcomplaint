<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = "students";

    protected $fillable = [
        'nis',
        'nama',
        'kelas',
        'email',
    ];

    public function complaints()
    {
        return $this->hasMany(Complaint::class);
    }
}
