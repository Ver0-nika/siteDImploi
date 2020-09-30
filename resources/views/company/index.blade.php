@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-13">
        <div class="company-profile">

            <div class="col-md-13">
            @if(empty($company->cover_photo))
            <img src="{{asset('cover/tumblr-image-sizes-banner.png')}}" style="width:100%;">
            @else
            <img src="{{asset('uploads/coverphoto')}}/{{$company->cover_photo}}" style="width:100%;">
            @endif
            </div>

            <div class="company-desc">
                
                @if(empty($company->logo))
                <img src="{{asset('cover/logo_unknown.png')}}" width="100">
                @else
                <img src="{{asset('uploads/logo')}}/{{$company->logo}}" width="100">
                @endif

                <p>{{$company->description}}</p>
                <h1><strong>Company name:&nbsp;</strong>{{$company->cname}}</h1>
                <p>
                    <strong>Slogan:&nbsp;</strong>{{$company->slogan}}&nbsp; 
                    <strong>Address:&nbsp;</strong>{{$company->address}}&nbsp; 
                    <strong>Phone:&nbsp;</strong>{{$company->phone}}&nbsp; 
                    
                </p>
            </div>
        </div>

        <table class="table">
            <thead>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                @foreach($company->jobs as $job)
                <tr>
                    <td><img src="{{asset('avatar/man.jpg')}}" width="80"></td>
                    <td>Position:{{$job->position}}
                        <br>
                        <i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;{{$job->type}}
                    </td>
                    <td><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;Address:{{$job->address}}</td>
                    <td><i class="fa fa-globe" aria-hidden="true"></i>&nbsp;Date:{{$job->created_at->diffForHumans()}}</td>
                    <td>
                    <a href="{{route('jobs.show',[$job->id,$job->slug])}}">
                        <button class="btn btn-primary btn-sm">Apply</button>
                    </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection
