<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="{{asset('/img/favicon.ico')}}">
  <title>Mediumish - A Medium style template by WowThemes.net</title>
  <!-- Bootstrap core CSS -->
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Fonts -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="{{asset('css/mediumish.css')}}" rel="stylesheet">
</head>

<body>
  @include('layouts.header')
  @yield('content')
  @include('layouts.footer')
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/ie10-viewport-bug-workaround.js')}}"></script>
</body>

</html>