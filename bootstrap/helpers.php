<?php 
function route_class()
{
	return str_replace('.', '-', Route::currentRouteName());
}
function get_env_config()
{
	return env('APP_ENV') === 'local' ? false : true;
}