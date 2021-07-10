@extends('layout')

@section('content')
<div class="mx-auto" style="width: 800px;">
<h1>Here is the Menu</h1>


<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Menu</th>
      <th scope="col">Price</th>
      <th scope="col">Additional Fee for Takeout</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $item)
    <tr>
      <th scope="row">{{$item->Menu}}</th>
      <td>{{$item->Price}}</td>
      <td>{{$item->AdditionalFee}}</td>
     
    </tr>
  @endforeach
  </tbody>
</table>
</div>

@stop