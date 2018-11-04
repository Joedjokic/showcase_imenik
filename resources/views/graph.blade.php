@extends('layouts.app')
@section('content')
<h1>Grafik</h1>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<canvas id="bar-chart" width="800" height="450"></canvas>
<script>
// Bar chart
new Chart(document.getElementById("bar-chart"), {
    type: 'bar',
    data: {
      labels: [@foreach($data as $item)"{{$item->grad}}",@endforeach],
      datasets: [
        {
          label: "Ukupno:",
          backgroundColor:"#3e95cd",
          data: [@foreach($data as $item){{$item->count}},@endforeach]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Broj telefonskih brojeva po gradovima'
      },
      scales: {
        yAxes: [{
            display: true,
            ticks: {
                suggestedMin: 0,    // minimum will be 0, unless there is a lower value.
                // OR //
                beginAtZero: true   // minimum value will be 0.
            }
        }]
    }
    }
});
</script>
@if($data)
    @foreach($data as $item)
       {{$item->count}}  
       {{$item->grad}}    
    @endforeach
 @endif
@endsection