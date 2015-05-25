<?php namespace LaravelPlus\Addons\Toolkit\Webix\Http\Controllers;

class AjaxDemoController extends BaseController {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		return addon_view(addon_name(), 'ajaxdemo', [
			'webix_version' => '2.4',
		]);
	}

	public function postSuccess()
	{
		return [
			'result' => 'OK',
			'message' => 'Processed',
		];
	}

	public function postError()
	{
		throw new Exception('Debug: Internal Error');
	}

}
