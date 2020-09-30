@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="text-align: center;">My JOBS</div>

                <div class="card-body">
                    
                    <table class="table">
            
                        <tbody>
                            @foreach($jobs as $job)
                            <tr>
                                <td>
                                
                                    @if(empty(Auth::user()->company->logo))
                                    <img src="{{asset('cover/logo_unknown.png')}}" width="80">
                                    @else
                                    <img src="{{asset('uploads/logo')}}/{{Auth::user()->company->logo}}" width="80">
                                    @endif
                                
                                </td>
                                <td><strong>Position:</strong>{{$job->position}}
                                    <br>
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;{{$job->type}}
                                </td>
                                <td><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;<strong>Address:</strong>{{$job->address}}</td>
                                <td><i class="fa fa-globe" aria-hidden="true"></i>&nbsp;<strong>Date:</strong>{{$job->created_at->diffForHumans()}}</td>
                                <td>
                                <a href="{{route('jobs.show',[$job->id,$job->slug])}}"><button class="btn btn-primary">Apply</button></a>
                                <a href="{{route('job.edit',[$job->id])}}"><button class="btn btn-outline-primary">Edit</button></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
