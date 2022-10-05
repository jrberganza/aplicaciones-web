<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string("name", 100);
            $table->string("dpi", 13);
            $table->string("address", 200);
            $table->string("telephone", 20);
            $table->string("department", 50);
            $table->string("municipality", 50);
            $table->string("zone", 50);
            $table->date("birthdate");
            $table->enum("gender", ["M", "F", "W"]);
            $table->string("career", 100);
            $table->string("faculty", 100);
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
        Schema::dropIfExists('students');
    }
};
