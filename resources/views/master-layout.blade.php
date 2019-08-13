<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CodeLearn</title>
    <base href="{{ asset('') }}">
    <!-- Reset CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="{{ asset('library/bootstrap/css/bootstrap.min.css') }}">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <!-- Font-awesome CSS -->
    <link rel="stylesheet" href="{{ asset('library/fontawesome/css/all.min.css') }}">
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<!-- <link rel="stylesheet" href="{{ asset('css/fights.css') }}"> -->
    <!-- <link rel="stylesheet" href="{{ asset('css/my_infor.css') }}"> -->
    @yield('css')
</head>
<body>

@include('header')
@yield('content')
@include('footer')

</body>   
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="{{ asset('library/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- <script src="{{ asset('js/my_infor.js') }}"></script> -->
    <script src="{{ asset('js/main.js') }}"></script>
</html>