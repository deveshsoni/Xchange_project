<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
          <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
          <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
          <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
          <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
          <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
          <script>
            var app = angular.module('app',[]);
            app.controller('Test',function($scope)
              {
		              $scope.show = 1;
              });
          </script>

          <style>
          .profile
          {
            display: inline-block;
          }
          span.tags
        {
            background: #1abc9c;
            border-radius: 2px;
            color: #f5f5f5;
            font-weight: bold;
            padding: 2px 4px;
        }
          </style>
    </head>
    <body>
      @include('includes.header')
      <div class="container">
        @yield('content')
      </div>
    </body>
</html>
