<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisionInfoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ["division_id" => "div64900-abe0-64900abe-54bf","department_id" => "dept648f-caf0-648fcaf0-c41c","division_code" => "ESS","division_name" => "EXECUTIVE SUPPORT STAFF","division_logo" => "logo.jpg","division_tel_no" => "-","division_email_add" => "N/A"],
            ["division_id" => "div64900-b001-64900b00-69d6","department_id" => "dept648f-caf0-648fcaf0-c41c","division_code" => "AS","division_name" => "ADMINISTRATIVE SERVICES","division_logo" => "logo.jpg","division_tel_no" => "-","division_email_add" => "N/A"],
            ["division_id" => "div64900-b834-64900b83-3ae6","department_id" => "dept648f-caf0-648fcaf0-c41c","division_code" => "INS","division_name" => "INTERNAL AUDIT SERVICES","division_logo" => "logo.jpg","division_tel_no" => "-","division_email_add" => "N/A"],
            ["division_id" => "div64900-b8f7-64900b8f-f162","department_id" => "dept648f-caf0-648fcaf0-c41c","division_code" => "BPLO","division_name" => "BUSINESS PERMIT AND LICENSING OFFICE","division_logo" => "logo.jpg","division_tel_no" => "-","division_email_add" => "N/A"],
            ["division_id" => "div64900-b998-64900b99-27a7","department_id" => "dept648f-caf0-648fcaf0-c41c","division_code" => "BAC","division_name" => "BIDS AND AWARDS COMMITTEE SECRETARIAT AND PROCUREMENT DIVISION","division_logo" => "logo.jpg","division_tel_no" => "-","division_email_add" => "N/A"],
            ["division_id" => "div64900-be13-64900be1-300d","department_id" => "dept648f-caf0-648fcaf0-c41c","division_code" => "CLDO","division_name" => "COOPERATIVES AND LIVELIHOOD DEVELOPMENT OFFICE","division_logo" => "logo.jpg","division_tel_no" => "-","division_email_add" => "N/A"],
            ["division_id" => "div64900-bf07-64900bf0-5fa2","department_id" => "dept648f-caf0-648fcaf0-c41c","division_code" => "NEGOSYO","division_name" => "SAN CARLOS CITY INVESTMENT PROMOTION CENTER (NEGOSYO CENTER)","division_logo" => "logo.jpg","division_tel_no" => "-","division_email_add" => "N/A"],
            ["division_id" => "div64900-bfc8-64900bfc-7521","department_id" => "dept648f-caf0-648fcaf0-c41c","division_code" => "PESO","division_name" => "PUBLIC EMPLOYMENT SERVICES OFFICE","division_logo" => "logo.jpg","division_tel_no" => "-","division_email_add" => "N/A"],
            ["division_id" => "div64900-c06a-64900c06-8036","department_id" => "dept648f-caf0-648fcaf0-c41c","division_code" => "SGRO","division_name" => "SPORTS AND GAMES REGULATION OFFICE","division_logo" => "logo.jpg","division_tel_no" => "-","division_email_add" => "N/A"],
            ["division_id" => "div64900-c11a-64900c11-ac68","department_id" => "dept648f-caf0-648fcaf0-c41c","division_code" => "SCCCYAO","division_name" => "SAN CARLOS CITY COUNCIL FOR YOUTH AFFAIRS OFFICE","division_logo" => "logo.jpg","division_tel_no" => "-","division_email_add" => "N/A"],
            ["division_id" => "div64900-c1d8-64900c1d-89a6","department_id" => "dept648f-caf0-648fcaf0-c41c","division_code" => "PPMO","division_name" => "PEOPLE'S PARK MANAGEMENT OFFICE","division_logo" => "logo.jpg","division_tel_no" => "-","division_email_add" => "N/A"],
            ["division_id" => "div64900-c3f1-64900c3f-2be3","department_id" => "dept648f-caf0-648fcaf0-c41c","division_code" => "TPCDO","division_name" => "TOURISM PROMOTION AND CULTURAL DEVELOPMENT OFFICE","division_logo" => "logo.jpg","division_tel_no" => "-","division_email_add" => "N/A"],
            ["division_id" => "div64900-c73a-64900c73-aeae","department_id" => "dept648f-caf0-648fcaf0-c41c","division_code" => "CASUAL","division_name" => "CASUAL EMPLOYMENT AND SERVICES","division_logo" => "logo.jpg","division_tel_no" => "-","division_email_add" => "N/A"],
            ["division_id" => "div64900-c7fe-64900c7f-8a75","department_id" => "dept648f-caf0-648fcaf0-c41c","division_code" => "SCCADAC","division_name" => "SAN CARLOS CITY ANTI-DRUG ABUSE COUNCIL","division_logo" => "logo.jpg","division_tel_no" => "-","division_email_add" => "N/A"],
            ["division_id" => "div64900-c8cb-64900c8c-7f5e","department_id" => "dept648f-caf0-648fcaf0-c41c","division_code" => "CCC","division_name" => "CONSUELO COMMUNITY CENTER","division_logo" => "logo.jpg","division_tel_no" => "-","division_email_add" => "N/A"],
            ["division_id" => "div64900-ca7c-64900ca7-ba5c","department_id" => "dept648f-caf0-648fcaf0-c41c","division_code" => "ABEO","division_name" => "AGRICULTURAL AND BIOSYSTEMS ENGINEERING","division_logo" => "logo.jpg","division_tel_no" => "-","division_email_add" => "N/A"],
            ["division_id" => "div64900-cdf6-64900cdf-3d75","department_id" => "dept648f-cafa-648fcafa-8318","division_code" => "PS","division_name" => "PERSONAL SERVICES","division_logo" => "logo.jpg","division_tel_no" => "-","division_email_add" => "N/A"],
            ["division_id" => "div64900-cea0-64900cea-4130","department_id" => "dept648f-cafa-648fcafa-8318","division_code" => "MOOE","division_name" => "MAINTENANCE AND OTHER OPERATING EXPENSES","division_logo" => "logo.jpg","division_tel_no" => "-","division_email_add" => "N/A"],
            ["division_id" => "div64900-cf53-64900cf5-f179","department_id" => "dept648f-cb01-648fcb01-f5e9","division_code" => "LS","division_name" => "LEGISLATIVE SUPPORT","division_logo" => "logo.jpg","division_tel_no" => "-","division_email_add" => "N/A"],
            ["division_id" => "div64900-d0ca-64900d0c-16f5","department_id" => "dept648f-cb01-648fcb01-f5e9","division_code" => "SD","division_name" => "SECRETARIAT DIVISION/ADMINISTRATIVE SUPPORT STAFF","division_logo" => "logo.jpg","division_tel_no" => "-","division_email_add" => "N/A"],
            ["division_id" => "div64900-dba2-64900dba-214b","department_id" => "dept648f-cb01-648fcb01-f5e9","division_code" => "INFO","division_name" => "PUBLIC INFORMATION OFFICE","division_logo" => "logo.jpg","division_tel_no" => "-","division_email_add" => "N/A"],
            ["division_id" => "div64900-dc5e-64900dc5-2806","department_id" => "dept648f-cb01-648fcb01-f5e9","division_code" => "ITCSO","division_name" => "INFORMATION TECHNOLOGY AND COMPUTER SERVICES OFFICE","division_logo" => "logo.jpg","division_tel_no" => "-","division_email_add" => "N/A"],
            ["division_id" => "div64900-dd16-64900dd1-b2bb","department_id" => "dept648f-cb01-648fcb01-f5e9","division_code" => "ADMIN","division_name" => "ADMINISTRATIVE STAFF","division_logo" => "logo.jpg","division_tel_no" => "-","division_email_add" => "N/A"],
            ["division_id" => "div64900-ddcd-64900ddc-58ec","department_id" => "dept648f-cb1c-648fcb1c-66bf","division_code" => "PAW","division_name" => "PERSONNEL ADMINISTRATION AND WELFARE","division_logo" => "logo.jpg","division_tel_no" => "-","division_email_add" => "N/A"],
            ["division_id" => "div64900-de90-64900de9-31c4","department_id" => "dept648f-cb1c-648fcb1c-66bf","division_code" => "IRPM","division_name" => "INTEGRATED RECORDS AND PERSONNEL MATTERS","division_logo" => "logo.jpg","division_tel_no" => "-","division_email_add" => "N/A"],
            ["division_id" => "div64900-df2c-64900df2-24d5","department_id" => "dept648f-cb1c-648fcb1c-66bf","division_code" => "LA","division_name" => "LEAVE ADMINISTRATION","division_logo" => "logo.jpg","division_tel_no" => "-","division_email_add" => "N/A"],
            ["division_id" => "div64900-e3ed-64900e3e-77a5","department_id" => "dept648f-cb24-648fcb24-0401","division_code" => "PS","division_name" => "PLANNING AND SECTORAL","division_logo" => "logo.jpg","division_tel_no" => "-","division_email_add" => "N/A"],
            ["division_id" => "div64900-e483-64900e48-ab50","department_id" => "dept648f-cb24-648fcb24-0401","division_code" => "PDE","division_name" => "PROJECT DEVELOPMENT AND EVALUATION","division_logo" => "logo.jpg","division_tel_no" => "-","division_email_add" => "N/A"],
            ["division_id" => "div64900-e542-64900e54-e02b","department_id" => "dept648f-cb24-648fcb24-0401","division_code" => "ZLC","division_name" => "ZONING AND LOCATIONAL CLEARANCE","division_logo" => "logo.jpg","division_tel_no" => "-","division_email_add" => "N/A"],
            ["division_id" => "div64900-e5e9-64900e5e-e1ec","department_id" => "dept648f-cb24-648fcb24-0401","division_code" => "PME","division_name" => "PROJECT MONITORING AND EVALUATION","division_logo" => "logo.jpg","division_tel_no" => "-","division_email_add" => "N/A"],
            ["division_id" => "div64900-e6a0-64900e6a-42af","department_id" => "dept648f-cb24-648fcb24-0401","division_code" => "MPDM","division_name" => "MAPPING AND PLANNING DATA MANAGEMENT","division_logo" => "logo.jpg","division_tel_no" => "-","division_email_add" => "N/A"],
            ["division_id" => "div64900-e750-64900e75-d619","department_id" => "dept648f-cb24-648fcb24-0401","division_code" => "SCIHA","division_name" => "SAN CARLOS INTEGRATED HOUSING AUTHORITY","division_logo" => "logo.jpg","division_tel_no" => "-","division_email_add" => "N/A"],
            ["division_id" => "div64900-e7f6-64900e7f-cab3","department_id" => "dept648f-cb24-648fcb24-0401","division_code" => "ADMIN","division_name" => "ADMINISTRATIVE","division_logo" => "logo.jpg","division_tel_no" => "-","division_email_add" => "N/A"],
            ["division_id" => "div64900-ec38-64900ec3-7973","department_id" => "dept648f-cb2b-648fcb2b-6b7b","division_code" => "CR","division_name" => "CIVIL REGISTRATION","division_logo" => "logo.jpg","division_tel_no" => "-","division_email_add" => "N/A"],
            ["division_id" => "div64900-ecd1-64900ecd-9467","department_id" => "dept648f-cb2b-648fcb2b-6b7b","division_code" => "REC","division_name" => "RECORDS","division_logo" => "logo.jpg","division_tel_no" => "-","division_email_add" => "N/A"],
            ["division_id" => "div64900-ed87-64900ed8-4daf","department_id" => "dept648f-cb2b-648fcb2b-6b7b","division_code" => "PA","division_name" => "PETITION AND ADMINISTRATIVE","division_logo" => "logo.jpg","division_tel_no" => "-","division_email_add" => "N/A"],
            ["division_id" => "div64900-ef72-64900ef7-2440","department_id" => "dept648f-cb32-648fcb32-3bb1","division_code" => "SM","division_name" => "SUPPLIES AND MATERIALS","division_logo" => "logo.jpg","division_tel_no" => "-","division_email_add" => "N/A"],
            ["division_id" => "div64900-f061-64900f06-c68d","department_id" => "dept648f-cb32-648fcb32-3bb1","division_code" => "IPM","division_name" => "INVENTORY AND PROPERTY MANAGEMENT","division_logo" => "logo.jpg","division_tel_no" => "-","division_email_add" => "N/A"],
            ["division_id" => "div64900-f10c-64900f10-739c","department_id" => "dept648f-cb32-648fcb32-3bb1","division_code" => "AR","division_name" => "ADMINISTRATIVE AND RECORDS","division_logo" => "logo.jpg","division_tel_no" => "-","division_email_add" => "N/A"],
            ["division_id" => "div64900-f1ab-64900f1a-2cdc","department_id" => "dept648f-cb3b-648fcb3b-96e0","division_code" => "BUD","division_name" => "BUDGETING","division_logo" => "logo.jpg","division_tel_no" => "-","division_email_add" => "N/A"],
            ["division_id" => "div64900-f2a6-64900f2a-1670","department_id" => "dept648f-cb3b-648fcb3b-96e0","division_code" => "ADMIN","division_name" => "ADMINISTRATIVE","division_logo" => "logo.jpg","division_tel_no" => "-","division_email_add" => "N/A"],
            ["division_id" => "div64900-f383-64900f38-7ebe","department_id" => "dept648f-cb47-648fcb47-9fc2","division_code" => "AFC","division_name" => "ACCOUNTING AND FINANCIAL CONTROL","division_logo" => "logo.jpg","division_tel_no" => "-","division_email_add" => "N/A"],
            ["division_id" => "div64900-f42b-64900f42-0da9","department_id" => "dept648f-cb47-648fcb47-9fc2","division_code" => "FR","division_name" => "FINANCIAL REPORTING (BOOKKEEPING)","division_logo" => "logo.jpg","division_tel_no" => "-","division_email_add" => "N/A"],
            ["division_id" => "div64900-f4c4-64900f4c-31ae","department_id" => "dept648f-cb47-648fcb47-9fc2","division_code" => "AR","division_name" => "ADMINISTRATIVE AND RECORDS","division_logo" => "logo.jpg","division_tel_no" => "-","division_email_add" => "N/A"],
            ["division_id" => "div64900-f577-64900f57-8a22","department_id" => "dept648f-cb51-648fcb51-78bd","division_code" => "TORR","division_name" => "TREASURY OPERATIONS AND REVENUE REVIEW","division_logo" => "logo.jpg","division_tel_no" => "-","division_email_add" => "N/A"],
            ["division_id" => "div64900-f615-64900f61-9049","department_id" => "dept648f-cb51-648fcb51-78bd","division_code" => "CASH","division_name" => "CASH","division_logo" => "logo.jpg","division_tel_no" => "-","division_email_add" => "N/A"],
            ["division_id" => "div64900-f6dc-64900f6d-25e8","department_id" => "dept648f-cb51-648fcb51-78bd","division_code" => "RPT","division_name" => "REAL PROPERTY TAX","division_logo" => "logo.jpg","division_tel_no" => "-","division_email_add" => "N/A"],
            ["division_id" => "div64900-f8f2-64900f8f-2978","department_id" => "dept648f-cb51-648fcb51-78bd","division_code" => "RC","division_name" => "REVENUE COLLECTION","division_logo" => "logo.jpg","division_tel_no" => "-","division_email_add" => "N/A"],
        ];

        DB::connection('scims')->table('division_info')->insert($data);
    }
}
