<!--
========================================================
This Website using original template from W3layouts.com
And redesign by Indra Kusuma
Author : Indra Kusuma
Website : www.indrakusuma.web.id
Email : indrakusuma.udinus@gmail.com
HAPPY CODING!
=========================================================
-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title') | LaraFirst</title>

	<!-- Favicon || Indra Kusuma-->
	<link rel="shortcut icon" href="images/favicon-bai.png">
	<!-- Meta tag for SEO Optimazation | Indra Kusuma -->
	<meta content='LaraFirst adalah suatu proyek pribadi yang saya kerjakan dengan tujuan untuk mendalami Framework Laravel.' name='description'/>
	<meta content='laravel, larafirst' name='keywords'/>
	<meta content='Indonesia' name='geo.placename'/>
	<meta content="Indra Kusuma"  name='Author'/>
	<meta content='general' name='rating'/>
	<!-- Link for External CSS | Indra Kusuma -->
	<link rel="stylesheet" href="{{url('/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{url('css/animate.css')}}">
	<link rel="stylesheet" href="{{url('css/smoothbox.css')}}">
	<!-- CSS Custom for Speed | Indra Kusuma -->
  <link rel="stylesheet" href="{{url('css/style.css')}}">
	<link rel="stylesheet" href="{{url('css/custom.css')}}">
	<!--js-->
	<!--webfonts-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,700italic,700,600italic,600,400italic,300italic,300,100italic,100' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<!--webfonts-->

</head>
<body>

    <!-- header menu -->
    @include('layouts.partials.navigation')

    <!-- content website -->
    @yield('content')

    <!-- footer -->
    @include('layouts.partials.footer')

</body>
</html>
