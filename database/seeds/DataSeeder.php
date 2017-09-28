<?php

use Illuminate\Database\Seeder;
use App\User;
class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert roles
    	$roles = ['Contributor', 'Author', 'Editor', 'Admin' , 'Super'];
    	$x = 100;
    	for($i = 0; $i<5; $i++)
    	{	
    		$id = $x * ($i + 1);
			DB::table('roles')->insert([
				'id' => $id,
		        'name' => ucfirst($roles[$i]),
		        'description' => ucfirst($roles[$i])
		    ]);
    	}

		DB::table('roles')->insert([
			'id' => 1,
	        'name' => 'Subscriber',
	        'description' => 'Subscriber'
	    ]);

	    DB::table('roles')->insert([
			'id' => 2,
	        'name' => 'Basic Member',
	        'description' => 'Basic Member'
	    ]);

	    DB::table('roles')->insert([
			'id' => 3,
	        'name' => 'Gold Member',
	        'description' => 'Gold Member'
	    ]);

	    DB::table('roles')->insert([
			'id' => 4,
	        'name' => 'Diamond Member',
	        'description' => 'Diamond Member'
	    ]);

    	//sites
		DB::table('sites')->insert([
			'id' => 1,
		    'siteUrl' => 'cms22.dev',
		    'siteTitle' => 'WT Admin',
		    'languages' => '',
		    'skinCSS' => 'green.css',
		    'menus' => 'Top, Bottom',
		    'ads' => '',
    	]);
    	
    	//users
		$user = DB::table('users')->insert([
			'id' => 1,
	        'name' => 'Sudeep Gurung',
	        'email' => 'info@database.com.np',
	        'password' => '$2y$10$ZqlOc1i5D53TIFFu2a6kQ.aB35nxGvsQe1rGWeqAWN8lMFhFTZKIq',
	        'site_id' => 1,
	        'role_id' =>500
	    ]);

	    //units
	    $units = [[1,"Gram",0.001,"Weight"],
		[2,"KG",1,"Weight"],
		[3,"Dharni",2.2,"Weight"],
		[4,"Pau",0.2,"Weight"],
		[5,"Dhak",20,"Weight"],
		[6,"Ton",100,"Weight"],
		[7,"M",1,"Length"],
		[8,"CM",0.01,"Length"],
		[9,"Inch",12,"LengthFeet"],
		[10,"Feet",1,"LengthFeet"],
		[11,"Pc",1,"Count"],
		[12,"Dozon",12,"Count"],
		[13,"Ltr",1,"Liquid"],
		[14,"ML",0.001,"Liquid"],
		[15,"SqM",1,"Area"],
		[16,"SqFt",1,"AreaFeet"],
		[17,"CuM",1,"Volumn"],
		[18,"CuFt",1,"VolumnFeet"];
		
		for($i=0; $i<count($units); $i++) {
		    DB::table('units')->insert([
				'id' => $units[$i][0],
			    'unit_name' => $units[$i][1],
			    'wt' => $units[$i][2],
			    'grp' => $units[$i][3],
	    	]);
	    }

    }
}

