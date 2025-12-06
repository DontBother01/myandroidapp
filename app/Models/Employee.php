<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'tbl_employee';      // nama tabel
    protected $primaryKey = 'employee_id';  // primary key
    public $timestamps = false;             // karena migration tidak menggunakan timestamps

    // jika ingin mass assignable:
    protected $fillable = ['employee_name', 'jabatan', 'tgl_kerja', 'gaji'];
}
