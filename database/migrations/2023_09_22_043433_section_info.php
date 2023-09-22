<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SectionInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_info', function (Blueprint $table) {
            $table->string('section_id', 100)->primary(); // Primary Key
            $table->string('department_id', 100)->unique()->nullable()->default('N/A');
            $table->string('division_id', 100)->unique()->nullable()->default('N/A');
            $table->string('section_code', 50)->nullable()->default('N/A');
            $table->longText('section_name')->nullable()->default('N/A');
            $table->timestamps();

            // Foreign key for department_id referencing department_info
            $table->foreign('department_id')
                ->references('department_id')
                ->on('department_info')
                ->onDelete('set null'); // You can adjust onDelete behavior as needed

            // Foreign key for division_id referencing division_info
            $table->foreign('division_id')
                ->references('division_id')
                ->on('division_info')
                ->onDelete('set null'); // You can adjust onDelete behavior as needed
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('section_info');
    }
}
