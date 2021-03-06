<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
        // $this->call('UserTableSeeder');
		// $this->call('TestTableSeeder');

		$this->call('UsersTableSeeder');
		$this->call('PostsTableSeeder');
		$this->call('PostTypesTableSeeder');
        $this->call('CommentsTableSeeder');
		$this->call('TagsTableSeeder');
	}

}