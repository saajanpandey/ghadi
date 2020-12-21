<?php

use App\Providers\AppServiceProvider;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        // to create database column name such as 'id','ads_id','imagelocation' and timestamps
        // we have to keep 'ads_id' as unsignedBigInteger for it to work properly as foreign key
        // Note: when putting string, remember to go to Provder>AppServiceProvider and inside boot() function put
        // schema:defaultStringLength(191);

        Schema::create('images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('ads_id');
            $table->string('imagelocation');
            $table->timestamps();
        });

        // this section is done to add foreign key constraint such that if ads table data is deleted then it
        // will also delete corresponsding linked data in image table by below example '->onDelete('cascade')'
        Schema::table('images', function (Blueprint $table) {
            $table->foreign('ads_id')
            ->references('id')->on('ads')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}
