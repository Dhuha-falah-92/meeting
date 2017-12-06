<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Meeting Room Coordinator</title>
    {{--  <link href="{{asset('css/app.css')}}" rel="stylesheet">  --}}





<link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
    <link href="{{asset('css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" media="screen">



</head>
<body>
 
<div class="container">
    @yield('content')
</div>


<script type="text/javascript" src="{{asset('jquery/jquery-1.8.3.min.js')}}" charset="UTF-8"></script>
<script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap-datetimepicker.js')}}" charset="UTF-8"></script>
<script type="text/javascript" src="{{asset('js/locales/bootstrap-datetimepicker.fr.js')}}" charset="UTF-8"></script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1
    });
	$('.form_date').datetimepicker({
        language:  'ar',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
	$('.form_time').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 1,
		minView: 0,
		maxView: 1,
		forceParse: 0
    });
</script>



 
</body>
</html>