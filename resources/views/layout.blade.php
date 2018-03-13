<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{asset('adminlte/css/bootstrap.min.css')}}">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="{{asset('adminlte/font-awesome/css/font-awesome.min.css')}}">
		<!-- Ionicons -->
		<link rel="stylesheet" href="{{asset('adminlte/Ionicons/css/ionicons.min.css')}}">
		<!-- Theme style -->
		<link rel="stylesheet" href="{{asset('adminlte/css/AdminLTE.min.css')}}">
		<!-- AdminLTE Skins. Choose a skin from the css/skins
	       folder instead of downloading all of them to reduce the load. -->
		<link rel="stylesheet" href="{{asset('adminlte/skins/_all-skins.min.css')}}">
		<link rel="stylesheet" href="{{asset('adminlte/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
    </head>
    <body class="skin-blue sidebar-mini">
		@yield('content')
    <script src="{{asset('js/app.js')}}"></script>
    <script>
	let app = new Vue({
		el : "#app",
		data (){
			return {
				menu : [
					{
						url : '/',
						icon : 'fa fa-dashboard',
						text : 'Halaman Vue 0'
					},
					{
						url : '/vue',
						icon : 'fa fa-dashboard',
						text : 'Halaman Vue 1'
					},
					{
						url : '/vue2',
						icon : 'fa fa-dashboard',
						text : 'Halaman Vue 2'
					},
					{
						icon : 'fa fa-dashboard',
						text : 'contoh 2',
						child : [
							{
								url : 'contoh2.1',
								icon : 'fa fa-dashboard',
								text : 'contoh 2.1'
							},
							{
								url : 'contoh2.2',
								icon : 'fa fa-dashboard',
								text : 'contoh 2.2'
							}
						]
					}
				]
			}
		}
	})
	</script>
    <script src="{{asset('js/app_adminlte.js')}}"></script>
    </body>
</html>
