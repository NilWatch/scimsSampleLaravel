<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DivisionInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('division_info', function (Blueprint $table) {
            $table->string('division_id', 100)->primary()->unique()->nullable(false)->default('N/A'); // Primary Key
            $table->string('department_id', 100)->unique()->nullable()->default('N/A'); // Nullable
            $table->string('division_code', 50)->nullable()->default('N/A');
            $table->longText('division_name')->nullable()->default('N/A');
            $table->string('division_logo', 50)->nullable()->default('N/A');
            $table->char('division_tel_no', 20)->nullable()->default('N/A');
            $table->string('division_email_add', 50)->nullable()->default('N/A');
            $table->timestamps();

            // Define the foreign key constraint
            $table->foreign('department_id')
                ->references('department_id')
                ->on('department_info')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('division_info');
    }
}
