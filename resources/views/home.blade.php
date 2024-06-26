@extends('layout.main')

@section('title')
Home
@endsection

@section('content')

<div class="container">
  <h1 class="pt-5 pb-3">Trains</h1>

  <table class="table table-striped container">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Company</th>
        <th scope="col">Departure Station</th>
        <th scope="col">Arrival Station</th>
        <th scope="col">Departure Time</th>
        <th scope="col">Arrival Time</th>
        <th scope="col">Code</th>
        <th scope="col">Number of carriages</th>
        <th scope="col">On time</th>
        <th scope="col">Canceled</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $item)
      <tr>
        <td scope="col">{{$item->id}}</td>
        <td scope="col" class="text-capitalize">{{$item->company}}</td>
        <td scope="col" class="text-capitalize">{{$item->departure_station}}</td>
        <td scope="col" class="text-capitalize">{{$item->arrival_station}}</td>
        <td scope="col">{{$item->departure_time}}</td>
        <td scope="col">{{$item->arrival_time}}</td>
        <td scope="col">{{$item->code}}</td>
        <td scope="col">{{$item->number_of_carriages}}</td>
        <td scope="col">{{$item->on_time ? 'Yes' : 'No'}}</td>
        <td scope="col">{{$item->canceled ? 'Yes' : 'No'}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

  {{ $data->links() }}
</div>

@endsection
