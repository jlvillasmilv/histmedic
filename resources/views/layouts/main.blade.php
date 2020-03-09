<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
 	 <meta name="csrf-token" content="{{ csrf_token() }}">
 	  <title>{{ config('app.name', '') }} | @yield('title') </title>
    <link rel="stylesheet"  href="{{ asset('css/bootstrap.css')}}">
    <link rel="stylesheet"  href="{{ asset('font-awesome/css/font-awesome.css')}}">
    <link rel="stylesheet"  href="{{ asset('css/style.css') }}">
    <link rel="stylesheet"  href="{{ asset('css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('js/DataTables/datatables.min.css')}}"/>

</head>

<body {{ Session::has('notification') ? 'data-notification' : '' }} data-notification-type='{{ Session::get('notification')['alert_type'] }}' data-notification-message='{{ json_encode(Session::get('notification')['message']) }}'>

@include('layouts.nav')

<section class="container-fluid col-md-10 col-md-offset-1 ">

  @if(count($errors))
      <div class="row">
                   
        <div class="col-md-8 col-md-offset-2">
              <div class="alert alert-danger">
                  <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error}}</li>
                     @endforeach
                    </ul>
                </div>
          </div>   
      </div>
   @endif
 
@yield('content')
</section>

<!-- Scripts -->

<script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.js')}}">			  </script>
<script type="text/javascript" src="{{ asset('js/bootstrap-select.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/sweetalert2.all.js')}}">	  </script>
<script type="text/javascript" src="{{ asset('js/vue.min.js')}}" ></script>
<script type="text/javascript" src="{{ asset('js/axios.min.js')}}" ></script>
<script type="text/javascript" src="{{ asset('js/DataTables/datatables.min.js')}}" ></script>
<script type="text/javascript" src="{{ asset('js/jquery.mask.min.js')}}">   </script>
<script type="text/javascript" src="{{ asset('js/main.js')}}" ></script>
@stack('scripts')

</body>

</html>