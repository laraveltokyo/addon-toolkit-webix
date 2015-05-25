<?php namespace LaravelPlus\Addons\ToolKit\Webix\Http\Controllers;

class SampleController extends BaseController {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		return addon_view(addon_name(), 'sample');
	}

}
