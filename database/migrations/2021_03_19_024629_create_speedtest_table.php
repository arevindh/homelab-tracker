<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpeedtestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('speedtests', function (Blueprint $table) {
            $table->id();
            $table->string('status')->comment('inprogress, success, failed');
            $table->string('type')->default('scheduled')->comment('scheduled/manual');

            $table->unsignedBigInteger('queue_id')->nullable();

            $table->decimal('ping_jitter')->nullable();
            $table->decimal('ping_latency')->nullable();

            $table->decimal('download_bandwidth')->nullable();
            $table->decimal('download_bytes')->nullable();
            $table->decimal('download_elapsed')->nullable();

            $table->decimal('upload_bandwidth')->nullable();
            $table->decimal('upload_bytes')->nullable();
            $table->decimal('upload_elapsed')->nullable();

            $table->string('isp')->nullable();

            $table->string('interface_external_ip')->nullable();
            $table->string('interface_internal_ip')->nullable();
            $table->string('interface_name')->nullable();

            $table->string('server_name')->nullable();
            $table->string('server_location')->nullable();
            $table->string('server_host')->nullable();

            $table->string('result_url')->nullable();

            $table->timestamp('timestamp')->nullable();

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
        Schema::dropIfExists('speedtests');
    }
}
