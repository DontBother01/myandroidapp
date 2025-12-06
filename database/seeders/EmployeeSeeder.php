<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tbl_employee')->insert([
            ['employee_id' => 1, 'employee_name' => 'Reza',  'jabatan' => 'VP',         'tgl_kerja' => '2013-08-01', 'gaji' => 60000],
            ['employee_id' => 2, 'employee_name' => 'Adi',   'jabatan' => 'Executive',  'tgl_kerja' => '2014-10-09', 'gaji' => 20000],
            ['employee_id' => 3, 'employee_name' => 'Isgi',  'jabatan' => 'Manager',    'tgl_kerja' => '2013-08-20', 'gaji' => 40000],
            ['employee_id' => 4, 'employee_name' => 'Alfin', 'jabatan' => 'Executive',  'tgl_kerja' => '2013-06-01', 'gaji' => 25000],
            ['employee_id' => 5, 'employee_name' => 'Onie',  'jabatan' => 'Trainee',    'tgl_kerja' => '2014-10-01', 'gaji' => 10000],
        ]);
    }
}
