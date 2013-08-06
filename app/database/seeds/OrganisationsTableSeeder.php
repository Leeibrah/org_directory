<?php

class OrganisationsTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	// DB::table('organisations')->delete();

        $organisations = array(
        	['parent_organisation' => 'Map Kibera Trust', 'type' => 'NGO', 
        	'other' => '', 'registration_number' => 'ha344nj', 'logo' => 'url/path', 
        	'director' => 'Kepha Ngito', 'place' => 'Karanja Rd', 'geolocation' => 'loc', 
        	'contact_person' => 'Kepha Ngito', 'mailing_address' => 'contact@mapkibera.org', 
        	'telephone' => '0723845939', 'email' => 'contact@mapkibera.org', 'website' => 
        	'www.mapkibera.org', 'organisation' => 'Map Kibera Trust', 'topics' => 
        	'Community Interraction', 'other_topics' => '', 'who_do_you_help' => 
        	'Help the community Bla bla bla', 'who_is_your_founder' => 'Mikel Maron and Hagen', 
        	'when_did_you_start' => 'June 2008', 'created_at' => new DateTime(), 'updated_at' => new DateTime()]
        );

        // Uncomment the below to run the seeder
         DB::table('organisations')->insert($organisations);
    }

}