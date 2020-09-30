@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            @if(Session::has('message'))
                <div class="alert alert-success">
                    {{Session::get('message')}}
                </div>
            @endif
            <div class="card">
                <div class="card-header" style="text-align: center;"><strong>Job title:&nbsp;</strong>{{$job->title}}</div>

                <div class="card-body">
                    <p>
                        <h3>Description</h3>
                        {{$job->description}}
                    </p>
                    <p>
                        <h3>Duties</h3>
                        {{$job->roles}}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header" style="text-align: center;">SHORT INFO</div>

                <div class="card-body">
                    <p><strong>Company:&nbsp;</strong><a href="{{route('company.index',[$job->company->id,$job->company->slug])}}">{{$job->company->cname}}</a></p>
                    <p><strong>Address:&nbsp;</strong>{{$job->address}}</p>
                    <p><strong>Employment Type:&nbsp;</strong>{{$job->type}}</p>
                    <p><strong>Position:&nbsp;</strong>{{$job->position}}</p>
                    <p><strong>Posted:&nbsp;</strong>{{$job->created_at->diffForHumans()}}</p>
                    <p><strong>Last date:&nbsp;</strong>{{date('F d, Y',strtotime($job->last_date))}}</p>
                </div>
            </div>
            <br>
            @if(Auth::check()&&Auth::user()->user_type='seeker')
            @if(!$job->checkApplication())
            <apply-component :jobid={{$job->id}}></apply-component>
            @endif
            <br>
            <favorite-component :jobid={{$job->id}} :favorited={{$job->checkSaved()?'true':'false'}}></favorite-component>
            @endif
        </div>
    </div>
</div>
@endsection
