<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Default Authentication Driver
	|--------------------------------------------------------------------------
	|
	| Laravel uses a flexible driver-based system to handle authentication.
	| You are free to register your own drivers using the Auth::extend
	| method. Of course, a few great drivers are provided out of
	| box to handle basic authentication simply and easily.
	|
	| Drivers: 'fluent', 'eloquent'.
	|
	*/

	'driver' => 'eloquent',
  /*'driver' => 'ldapauth',*/

	/*
	|--------------------------------------------------------------------------
	| Authentication Username
	|--------------------------------------------------------------------------
	|
	| Here you may specify the database column that should be considered the
	| "username" for your users. Typically, this will either be "username"
	| or "email". Of course, you're free to change the value to anything.
	|
	*/

	'username' => 'email',

	/*
	|--------------------------------------------------------------------------
	| Authentication Model
	|--------------------------------------------------------------------------
	|
	| When using the "eloquent" authentication driver, you may specify the
	| model that should be considered the "User" model. This model will
	| be used to authenticate and load the users of your application.
	|
	*/

	'model' => 'User',

	/*
	|--------------------------------------------------------------------------
	| Authentication Table
	|--------------------------------------------------------------------------
	|
	| When using the "fluent" authentication driver, the database table used
	| to load users may be specified here. This table will be used in by
	| the fluent query builder to authenticate and load your users.
	|
	*/

	'table' => 'users',
  /*'ldap' => array(
    'host' => '10.1.1.100',
    'domain' => '',
    'ldap_type' => 'openldap',
    'base_dn' => 'dc=gancorp,dc=com',
    'user_dn' => 'ou=Employees,ou=People,dc=gancorp,dc=com',
    'user_search' => 'sAMAccountName',
    'control_user' => 'cn=Myles Hathcock,OU=IT,OU=People,DC=gancorp,DC=com',
    'control_password' => 'Aesahaett1',
  ),
  */
);

