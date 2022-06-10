@extends('base')

@section('content')
    @if(count($immunizations) == 0)
        <div class="alert alert-success">
            <p>No records found</p>
        </div>
    @else
    
        <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Full  Name</th>
            <th scope="col">Date of Birth</th>
            <th scope="col">Vaccine</th>
            <th scope="col">Modify</th>
            </tr>
        </thead>
        <tbody>
            @foreach($immunizations as $immunization)
            <tr>
            <th scope="row">{{$immunization->id}}</th>
            <td>{{$immunization->first_name}} {{$immunization->last_name}}</td>
            <td>{{$immunization->dob}}</td>
            <td>{{$immunization->vaccine}}</td>
            <td>
                <a href="{{url('edit/'.$immunization->id)}}"><span class="fa fa-pencil"></span></a>
                <a href="{{url('delete/'.$immunization->id)}}"><span class="fa fa-trash"></span></a>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="report" class="btn btn-danger align-right">View Report</a>

    @endif

@stop