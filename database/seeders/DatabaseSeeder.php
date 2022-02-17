<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->user();
	}

	private function user()
	{
		$data = [
			[
				'name' => 'user',
				'email' => 'user@app.com',
				'password' => Hash::make('password')
			]
		];

		foreach ($data as $val) {
			User::updateOrCreate($val, $val);
		}
	}
}
