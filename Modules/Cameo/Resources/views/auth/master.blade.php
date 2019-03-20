<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>AdminLTE 2 | Log in</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
  <link rel="stylesheet" href="{{ asset('admin/bower/bootstrap/dist/css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('admin/bower/font-awesome/css/font-awesome.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('admin/bower/Ionicons/css/ionicons.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('admin/dist/css/AdminLTE.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('admin/plugins/iCheck/square/blue.css') }}" />
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
	@yield('content')
<script src="{{ asset('admin/bower/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('admin/bower/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/plugins/iCheck/icheck.min.js') }}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
