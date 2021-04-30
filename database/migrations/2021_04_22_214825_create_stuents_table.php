<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStuentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stuents', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('age');
            $table->string('image');
            $table->string('address');
            $table->string('father_name');
            $table->foreignId('department_id')->constrained('departments');
            $table->foreignId('subject_id')->constrained('subjects');
            $table->foreignId('ourclass_id')->constrained('ourclasses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stuents');
    }
}
