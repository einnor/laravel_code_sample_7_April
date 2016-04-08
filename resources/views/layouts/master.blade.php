<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog Site</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="/css/app.css" >

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
      html, body {
        height: 100%;
      }

      body {
        margin: 0;
        padding: 0;
        width: 100%;
        display: table;
        font-weight: 100;
        /*font-family: 'Lato';*/
      }

      .container {
        /*text-align: center;*/
        display: table-cell;
        /*vertical-align: middle;*/
      }

      .content {
        text-align: center;
        display: inline-block;
        vertical-align: middle;
      }

      .title {
        font-size: 48px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      @include('partials.nav')
      <div class="row text-center">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
          @yield('content')
        </div>
      </div>
    </div>
  </body>
</html>
