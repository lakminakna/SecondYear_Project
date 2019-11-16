<?php


 ?>

<table class="table">
  <caption>List of users</caption>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">verified</th>
      <th scope="col">Admin Id</th>
    </tr>
  </thead>
  <tbody>
    @foreach($parking_spaces as $parking_space)
    <tr>
      <th scope="row">{{$parking_space->id}}</th>
      <td>{{$parking_space->name}}</td>
      <td>{{$parking_space->verified}}</td>
      <td>{{$parking_space->admin_id}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
