@extends('layouts.app')
@section('content')
<h1>Unos</h1>
{!! Form::open(['url' => 'inputform/submit']) !!}
    <div class="form-group">
        {{Form::label('Ime', 'Ime')}}
        {{Form::text('ime', '',['class'=>'form-control','placeholder'=>'Unesite Ime'])}}
    </div>
    <div class="form-group">
        {{Form::label('Prezime', 'Prezime')}}
        {{Form::text('prezime', '',['class'=>'form-control','placeholder'=>'Unesite Prezime'])}}
        </div>
    <div class="form-group">
        {{Form::label('Grad', 'Grad')}}
        {{Form::text('grad', '',['class'=>'form-control','placeholder'=>'Unesite Grad'])}}
    </div>
    <div class="form-group">
        {{Form::label('Ulica', 'Ulica')}}
        {{Form::text('ulica', '',['class'=>'form-control','placeholder'=>'Unesite Ulicu'])}}
    </div>
    <div class="form-group">
        {{Form::label('Broj', 'Broj')}}
        {{Form::text('broj', '',['class'=>'form-control','placeholder'=>'Unesite Broj'])}}
    </div>
    <div class="form-group">
        {{Form::label('Broj Telefona', 'Broj Telefona')}}
        {{Form::text('telefonski_broj', '',['class'=>'form-control','placeholder'=>'Unesite Broj Telefona'])}}
    </div>
    <div class="form-group">
    {{Form::submit('Unesi',['class' =>'btn btn-primary'])}}
    </div>
{!! Form::close() !!}
@endsection