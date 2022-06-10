@extends('base')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

<form action="{{url('store-record')}}" method="post">
@csrf
  <div class="form-group">
    <label>First Name</label>
    <input type="text" class="form-control" name= "first_name" id="first_name" placeholder="Enter first name" required>
  </div>
  <div class="form-group">
    <label>Last Name</label>
    <input type="text" class="form-control" name= "last_name" id="lastname" placeholder="Enter last name" required>
  </div>
  <div class="form-group">
    <label>Date of Birth</label>
    <input type="date" class="form-control" name="dob" id="dob" placeholder="DOB" required>
  </div>
  <div class="form-group">
    <label>Vaccine Type</label>
    <select class="form-control" name="vaccine" id="vaccine" required>
      <option value="">Choose Vaccine</option> 
      <option value="Covax">Covax</option>
      <option value="Pfizer">Pfizer</option>
      <option value="Johnson & Johnson">Johnson & Johnson</option>
      <option value="Moderna">Moderna</option>
      <option value="AstraZeneca">AstraZeneca</option>
      <option value="BioNTech">BioNTech</option>
      <option value="Oxford">Oxford</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="/" class="btn btn-danger align-right">Cancel</a>
</form>
@stop
