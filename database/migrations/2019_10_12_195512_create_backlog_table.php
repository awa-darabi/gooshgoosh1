<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBacklogTable extends Migration
{

    public function up()
    {
        Schema::create('backlog', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('who');
            $table->string('ticketNo');
            $table->integer('userId');
            $table->longText('definition');
            $table->timestamp('createdAt')->useCurrent();
            $table->timestamp('updatedAt')->useCurrent();
            $table->smallInteger('currentStatus');
        });
    }

    public function down()
    {
        Schema::dropIfExists('backlog');
    }
}