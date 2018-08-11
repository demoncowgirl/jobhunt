<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobTable extends Migration
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
          $table->string('contactphone');
          $table->boolean('businessorcell');
          $table->string('email')->unique();
          $table->string('website');
          $table->date('resumesentdate');
          $table->boolean('emailormail');
          $table->date('datefirstcontact');
          $table->string('whodidyoutalkto1');
          $table->date('firstfollowupcall');
          $table->string('whodidyoutalkto2');
          $table->date('secondfollowupcall');
          $table->string('whodidyoutalkto3');
          $table->date('datesoffollowups');
          $table->boolean('interviewscheduled');
          $table->date('interviewdate');
          $table->time('interviewtime');
          $table->boolean('phoneorinperson');
          $table->boolean('secondinterview');
          $table->boolean('thankyousent');
          $table->date('thankyoudate');
          $table->date('interviewfollowup');
          $table->boolean('offermade');
          $table->boolean('offeraccepted');
          $table->mediumText('notes');
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
        Schema::dropIfExists('jobs');
    }
}
