<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[
            ['department_id' => 'dept22ec-e55a-11ed45cf-9586','department_code' => 'PESO','department_name' => 'PUBLIC EMPLOYMENT SERVICES OFFICE','department_logo' => 'logo.jpg','department_tel_no' => '729-3520','department_email_add' => 'sample@gmail.com'],
            ['department_id' => 'dept648f-caf0-648fcaf0-c41c','department_code' => 'CMO','department_name' => 'CITY MAYOR\'S OFFICE','department_logo' => 'logo.jpg','department_tel_no' => '-','department_email_add' => 'N/A'],
            ['department_id' => 'dept648f-cafa-648fcafa-8318','department_code' => 'SP','department_name' => 'SANGGUNIANG PANLUNGSOD-SECRETARIAT (1022)','department_logo' => 'logo.jpg','department_tel_no' => '-','department_email_add' => 'N/A'],
            ['department_id' => 'dept648f-cb01-648fcb01-f5e9','department_code' => 'SP-SS','department_name' => 'SANGGUNIANG PANLUNGSOD-SECRETARIAT SERVICES','department_logo' => 'logo.jpg','department_tel_no' => '-','department_email_add' => 'N/A'],
            ['department_id' => 'dept648f-cb15-648fcb15-c5b9','department_code' => 'ADMIN','department_name' => 'CITY ADMINISTRATOR\'S OFFICE','department_logo' => 'logo.jpg','department_tel_no' => '-','department_email_add' => 'N/A'],
            ['department_id' => 'dept648f-cb1c-648fcb1c-66bf','department_code' => 'HRMO','department_name' => 'HUMAN RESOURCE MANAGEMENT OFFICE','department_logo' => 'logo.jpg','department_tel_no' => '-','department_email_add' => 'N/A'],
            ['department_id' => 'dept648f-cb24-648fcb24-0401','department_code' => 'CPDCO','department_name' => 'CITY PLANNING AND DEVELOPMENT COORDINATOR\'S OFFICE','department_logo' => 'logo.jpg','department_tel_no' => '-','department_email_add' => 'N/A'],
            ['department_id' => 'dept648f-cb2b-648fcb2b-6b7b','department_code' => 'CCRO','department_name' => 'CITY CIVIL REGISTRAR\'S OFFICE','department_logo' => 'logo.jpg','department_tel_no' => '-','department_email_add' => 'N/A'],
            ['department_id' => 'dept648f-cb32-648fcb32-3bb1','department_code' => 'GSD','department_name' => 'GENERAL SERVICES DEPARTMENT','department_logo' => 'logo.jpg','department_tel_no' => '-','department_email_add' => 'N/A'],
            ['department_id' => 'dept648f-cb3b-648fcb3b-96e0','department_code' => 'CBMO','department_name' => 'CITY BUDGET AND MANAGEMENT OFFICE','department_logo' => 'logo.jpg','department_tel_no' => '-','department_email_add' => 'N/A'],
            ['department_id' => 'dept648f-cb47-648fcb47-9fc2','department_code' => 'AIAS','department_name' => 'ACCOUNTING AND INTERNAL AUDIT OFFICE','department_logo' => 'logo.jpg','department_tel_no' => '-','department_email_add' => 'N/A'],
            ['department_id' => 'dept648f-cb51-648fcb51-78bd','department_code' => 'CTO','department_name' => 'CITY TREASURER\'S OFFICE','department_logo' => 'logo.jpg','department_tel_no' => '-','department_email_add' => 'N/A'],
            ['department_id' => 'dept648f-cb5b-648fcb5b-6a31','department_code' => 'CAO','department_name' => 'CITY ASSESSOR\'S OFFICE','department_logo' => 'logo.jpg','department_tel_no' => '-','department_email_add' => 'N/A'],
            ['department_id' => 'dept648f-cb62-648fcb62-f541','department_code' => 'COA','department_name' => 'COMISSION ON AUDIT','department_logo' => 'logo.jpg','department_tel_no' => '-','department_email_add' => 'N/A'],
            ['department_id' => 'dept648f-cb68-648fcb68-aae9','department_code' => 'CPL','department_name' => 'CITY PUBLIC LIBRARY','department_logo' => 'logo.jpg','department_tel_no' => '-','department_email_add' => 'N/A'],
            ['department_id' => 'dept648f-cb6e-648fcb6e-fdaa','department_code' => 'CLO','department_name' => 'CITY LEGAL OFFICE','department_logo' => 'logo.jpg','department_tel_no' => '-','department_email_add' => 'N/A'],



        ];

        DB::connection('scims')->table('department_info')->insert($data);
    }
}
