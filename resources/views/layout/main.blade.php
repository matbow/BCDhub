<html lang="en">
<head>
  <meta charset="utf-8">

  <title>BCD Reporting Hub</title>
  <meta name="description" content="BCD Hub">
  <meta name="author" content="SitePoint">
  <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
  <link rel="stylesheet" href="{{ mix('/css/modules.css') }}">
  <script
  src="http://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>
    
<body>
    @include('layout.header')
    @yield('content')
    
  <script src="{{ mix('/js/app.js') }}"></script>
  <script src="{{ mix('/js/modules.js') }}"></script>

</body>
</html>
