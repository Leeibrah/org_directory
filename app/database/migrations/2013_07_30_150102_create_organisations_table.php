<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrganisationsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organisations', function(Blueprint $table) {
            $table->increments('id');
            $table->string('parent_organisation');
			$table->string('type');
			$table->string('other');
			$table->string('registration_number');
			$table->string('logo');
			$table->string('director');
			$table->string('place');
			$table->string('geolocation');
			$table->string('contact_person');
			$table->string('mailing_address');
			$table->integer('telephone');
			$table->string('email');
			$table->string('website');
			$table->string('organisation');
			$table->string('topics');
			$table->string('other_topics');
			$table->string('who_do_you_help');
			$table->string('who_is_your_founder');
			$table->string('when_did_you_start');
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
        Schema::drop('organisations');
    }

}
