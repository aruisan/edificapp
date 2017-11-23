<?php

return [
	'table' => 'oauth_identities',
	'providers' => [
				'facebook' => [
			'client_id' => '327083047701620',
			//'client_id' => '117958835556307',
			'client_secret' =>'be6973c1eaec2f9d29aca28196d3b1c2',
			//'client_secret' =>'03dbe9adf632ceed9e195f10a3c66e4a',
			'redirect_uri' => 'http://localhost:8000/login_facebook',
			//'redirect_uri' => 'http://edificapp.com/login_facebook',
			'scope' => [],
		],
		'google' => [
			'client_id' => '910830248350-dtbcbmco4e7o54v6296nipmt1tbmu3mv.apps.googleusercontent.com',
			'client_secret' => 'HSB7_CrkN8yxZQfzEt9AX2pe',
			'redirect_uri' => 'http://localhost:8000/oauth2callback',
			//'redirect_uri' => 'http://edificapp.com/oauth2callback',
			'scope' => [],
		],
		'github' => [
			'client_id' => '12345678',
			'client_secret' => 'y0ur53cr374ppk3y',
			'redirect_uri' => 'https://example.com/your/github/redirect',
			'scope' => [],
		],
		'linkedin' => [
			'client_id' => '12345678',
			'client_secret' => 'y0ur53cr374ppk3y',
			'redirect_uri' => 'https://example.com/your/linkedin/redirect',
			'scope' => [],
		],
		'instagram' => [
			'client_id' => '12345678',
			'client_secret' => 'y0ur53cr374ppk3y',
			'redirect_uri' => 'https://example.com/your/instagram/redirect',
			'scope' => [],
		],
		'soundcloud' => [
			'client_id' => '12345678',
			'client_secret' => 'y0ur53cr374ppk3y',
			'redirect_uri' => 'https://example.com/your/soundcloud/redirect',
			'scope' => [],
		],
	],
];
