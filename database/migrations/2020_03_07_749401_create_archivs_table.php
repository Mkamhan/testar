<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
// Auto Schema  By Baboon Script
// Baboon Maker has been Created And Developed By [It V 1.0 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.0 | https://it.phpanonymous.com]
class CreateArchivsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('admin_id')->unsigned()->nullable();
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
            $table->string('title');
            $table->string('describe')->nullable();
            $table->string('img')->nullable();
            $table->bigInteger('section_id')->unsigned()->nullable();
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade');
            $table->bigInteger('relevantrepartment_id')->unsigned()->nullable();
            $table->foreign('relevantrepartment_id')->references('id')->on('relevant_departments')->onDelete('cascade');
            $table->bigInteger('batch_id')->unsigned()->nullable();
            $table->foreign('batch_id')->references('id')->on('batchs')->onDelete('cascade');
            $table->string('file_pro')->nullable();
            $table->bigInteger('supervisor_id')->unsigned()->nullable();
            $table->foreign('supervisor_id')->references('id')->on('supervisors')->onDelete('cascade');
            $table->string('std_1')->nullable();
            $table->string('std_2')->nullable();
            $table->string('std_3')->nullable();
            $table->string('std_4')->nullable();
            $table->string('std_5')->nullable();
            $table->string('note')->nullable();
            $table->string('file_pro_r')->nullable();
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
        Schema::dropIfExists('archivs');
    }
}