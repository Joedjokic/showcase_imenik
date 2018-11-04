@extends('layouts.app')
@section('content')
<h1>Login</h1>
{{ Form::open(array('url' => 'login/submit')) }}
<div class="form-group">

        {{ Form::text('ime','', array('placeholder' => 'Unesite Korisnicko ime')) }}
</div>

<div class="form-group">
      
        {{ Form::password('password', ['placeholder' => 'Unesite Sifru']) }}
</div>
<!--document.getElementById("passwrd").placeholder = "Type your password";-->
<div class="form-group">
{{Form::submit('Uloguj se',['class' =>'btn btn-primary'])}}
</div>
{{ Form::close() }}
@endsection