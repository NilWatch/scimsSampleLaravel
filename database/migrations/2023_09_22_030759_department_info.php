<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DepartmentInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('department_info', function (Blueprint $table) {
            $table->string('department_id', 100)->unique()->primary(); // Unique department_id and Primary Key
            $table->string('department_code', 50)->nullable()->default('N/A');
            $table->longText('department_name')->nullable()->default('N/A');
            $table->string('department_logo', 50)->nullable()->default('N/A');
            $table->char('department_tel_no', 20)->nullable()->default('N/A');
            $table->string('department_email_Add', 50)->nullable()->default('N/A');
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('department_info');
    }
}
