@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @if(Auth::user()->user_type=='seeker')
            @foreach($jobs as $job)
            <div class="card">
                <small class="badge badge-primary">Position:<br>{{$job->position}}</small>
                <div class="card-header">Job title:<br>{{$job->title}}</div>
                
                <div class="card-body">Job description:<br>
                    {{$job->description}}
                </div>
                <div class="card-footer">
                    <span><a href="{{route('jobs.show',[$job->id,$job->slug])}}">WATCH COMPANY PAGE</a></span>
                    <span class="float-right">Last date:{{$job->last_date}}</span>
                </div>
            </div>
            <br>
            @endforeach
            @endif
        </div>
    </div>
</div>
@endsection
