<?php

use Illuminate\Database\Seeder;

use App\Models\Homepage;

class HomepageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$homepage = new Homepage;
		$homepage->title_page = "Jepret";        
		$homepage->jumbotron = "Wedding Organizer dan terpercaya di kota bogor";        
		$homepage->description = 'Jepret merupakanw edding organizer yang dibentuk serrjak 2017 dan sudah menjadi wedding organizer untuk lebih dari 10 pasangan di kota bogor dan jakarta, so jangan takut memilih jepret sebagai wedding organizer anda';
		$homepage->fb_link = '';      
		$homepage->twt_link = '';      
		$homepage->ins_link = '';      
		$homepage->logo_img = '';      
		$homepage->save();      
    }
}
