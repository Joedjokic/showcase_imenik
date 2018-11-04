@extends('layouts.app')
@section('content')
<h1>Pretraga</h1>
{{ Form::open(array('url' => 'list/search')) }}
<div class="form-group">
        {{ Form::text('keyword','', array('id'=>'keyword','placeholder' => 'Unesite Kljucnu Rec','autocomplete'=>'off')) }}
        <div id="ajax_response"></div>
</div>
<div class="form-group">
        {{Form::submit('Pretraga',['class' =>'btn btn-primary'])}}
</div>
{{ Form::close() }}

<script>
$(document).ready(function(){
	$(document).click(function(){
		$("#ajax_response").fadeOut('slow');
	});
	$("#keyword").focus();
	var offset = $("#keyword").offset();
	var width = $("#keyword").width()-2;
	$("#ajax_response").css("left",offset.left); 
	$("#ajax_response").css("width",width);
	$("#keyword").keyup(function(event){
         var keyword = $("#keyword").val();
        // alert (keyword);
		 if(keyword.length > 1)
		 {
			
				 $("#loading").css("visibility","visible");
				 $.ajax({
				   type: "POST",
				   url: "api/ime/"+keyword,
				   success: function(msg){	
					if(msg != 0)
					  $("#ajax_response").fadeIn("slow").html(msg);
					else
					{
					  $("#ajax_response").fadeIn("slow");	
					  $("#ajax_response").html('<div style="text-align:left;">No Matches Found</div>');
					}
					$("#loading").css("visibility","hidden");
				   }
				 });
            }
        else{
            $("#ajax_response").fadeOut("slow");
        }
        });
});
function use_sugestion(obj){
    $('#keyword').val(obj.innerHTML);
}

</script>
@endsection