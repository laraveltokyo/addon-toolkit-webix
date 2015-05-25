<?php namespace LaravelPlus\Addons\Toolkit\Webix\Http\Controllers;

use Illuminate\Routing\Controller;

class BaseController extends Controller {

	public function __construct()
	{
		View::share('__addon_name', addon_name());
	}

}
