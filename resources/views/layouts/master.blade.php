<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome</title>
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
  <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
  <script src="//js.pusher.com/2.2/pusher.min.js"></script>
  <script src="/js/pusher.js"></script>
  <link rel="stylesheet" href="/css/bootswatch.min.css">
  <link rel="stylesheet" href="/css/styles.css">

  @if(Route::currentRouteName() == 'home')
    <link rel="stylesheet" href="/css/home.css">
  @endif

    <style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);
	</style>
</head>
<body>

    <div class="container-fluid" style="padding-left: 5px; padding-right: 5px;">
        <div class="row">
            <div class="col-md-12">

                <div id="pusher"></div>

                @if(Session::has('message'))
                    <div class="alert alert-info">
                        {{Session::get('message')}}
                    </div>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                @yield('content')
            </div>
        </div>
    </div>

</body>
</html>


{{--Created by anonymoussc on 8/21/15 4:25 AM--}}
