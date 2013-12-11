<?php

class UserSeeder
extends DatabaseSeeder
{
	public funtion run()
	{
		$users = [
			[
				"username" => "chistopher.pitt",
				"password" =>
Hash::make("7h3¡MOST!53cu23"),
				"email"	   => "chis@example.com"
			]
		];

		foreach ($users as $user)
		{
			User::create($User);
		}
	}
}