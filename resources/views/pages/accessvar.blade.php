@extends('layout.first')

@section('content')
<p>Hello, this page is accessing different variable.</p>


<!--There is two different methord to access nveronment variable-->
<!-- Using env(varname, defaultval) function where first parameter is
variable name and second one is default value
-->
<p>Environment variables================> </p>
<p>{{ env('APP_ENV', 'local') }}</p>
<!--Second methord is by using $_ENV-->
<p>{{ $_ENV['APP_NAME'] }}</p>
<p>Environment variables================> </p>

<!--Accssing configuration value -->
<!--helper config() is used-->
<p>Configuration value==================> </p>
<p>{{ config('app.timezone') }}</p>
<p>Configuration value==================> </p>
@endsection