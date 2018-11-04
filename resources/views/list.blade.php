@extends('layouts.app')
@section('content')
<h1>Lista</h1>
<div class="list-wrapper">
 @if($data)
    @php ($prevcity = "")
    @php ($prevlastname = "")
    @foreach($data as $item)
       <div class="row text-left">
       
            @if($prevcity != $item->grad)
                <div class="col-md-12 list-city">
                Grad: <strong>{{$item->grad}}</strong>
                </div>
                    @php ($prevcity = $item->grad)
                    @php ($prevlastname = "")

            @endif
        
     
            @if($prevlastname != $item->prezime)
                <div class="col-md-11 offset-1 list-last-name">
                    Prezime: <strong>{{$item->prezime}}</strong>
                </div>
                    @php ($prevlastname = $item->prezime)
                   
            @endif
             <div class="col-md-10 offset-2 list-name">
             <strong>{{$item->ime}}</strong>:  {{$item->telefonski_broj}}- {{$item->ulica}}, {{$item->broj}}
             </div>

        </div>
    @endforeach
 @endif
 </div>
@endsection