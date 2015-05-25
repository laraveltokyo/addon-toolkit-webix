@extends($__addon_name . '::' . 'layout')

@section('content')

<script type="text/javascript" charset="utf-8">
	'use strict'

	webix.ui({
		cols: [
			{
				view:   'button',
				label:  'Success',
				height: 50,
				click:  function () {
					callAjax('success')
				},
			},
			{
				view:   'button',
				label:  '500 Error',
				height: 50,
				click:  function () {
					callAjax('error')
				},
			},
		],
	})

	function callAjax(action) {
		webix.ajax().post(
			'ajax/' + action,
			{
				_token: '{!! csrf_token() !!}',
			}
		)
		.then(function (data) {
			console.log(data)
			alert('Success: ' + data.text())
		})
		.fail(function (error) {
			console.log(error)
			alert('Error: ' + error.status + ':' + error.statusText)
		})
	}

</script>
@stop
