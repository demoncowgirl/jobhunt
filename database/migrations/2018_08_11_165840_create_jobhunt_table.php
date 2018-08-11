<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JobhuntTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('jobs', function (Blueprint $table) {
          $table->increments('id');
          $table->string('jobtitle');
          $table->string('company');
          $table->string('contactname');
          $table->string('email')->unique();
          $table->string('website');
          $table->string('resumesentdate');
          $table->boolean('emailormail');
          $table->string('datefirstcontact');
          $table->string('firstfollowupcall');
          $table->string('secondfollowupcall');
          $table->string('datesoffollowups')
          $table->boolean('interviewscheduled');
          $table->boolean('thankyousent');
          $table->string('thankyoudate');
          $table->string('interviewfollowup');
          $table->boolean('phoneorinperson');
          $table->boolean('secondinterview');
          $table->boolean('offermade');
          $table->boolean('offeraccepted');
          $table->textarea('notes');



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
        //
    }
}
