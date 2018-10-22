<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInovasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inovasi', function (Blueprint $table) {
          $table->increments('id');
          $table->string('judul', 100); // create column nama
          $table->string('writer', 100); // create column writer
          $table->text('abstract'); // create column abstract
          $table->string('katakunci', 100); // create column katakunci
          $table->text('latarb'); // create column abstract
          $table->text('maksud'); // create column abstract
          $table->text('ruanglingkup'); // create column abstract
          $table->text('metodelogi'); // create column abstract
          $table->text('landasant'); // create column abstract
          $table->text('rpcs'); // create column abstract
          $table->text('idea'); // create column abstract
          $table->binary('tidea'); // create column abstract
          $table->binary('tprio'); // create column abstract
          $table->binary('mprio'); // create column abstract
          $table->text('pelaksanaan'); // create column abstract
          $table->text('manfaatf'); // create column abstract
          $table->text('roi'); // create column abstract
          $table->text('manfaatn'); // create column abstract
          $table->text('analisar'); // create column abstract
          $table->binary('tanalisar'); // create column abstract
          $table->text('kesimpulan'); // create column abstract
          $table->text('saran'); // create column abstract
          $table->text('revisi'); // create column abstract
          $table->string('status', 10); // create column abstract
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
        Schema::dropIfExists('inovasi');
    }
}
