@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                @foreach($applicants as $applicant)
                <div class="card-header"><center><a href="{{route('jobs.show',[$applicant->id,$applicant->slug])}}">{{$applicant->title}}</a></center></div>

                <div class="card-body">
                    @foreach($applicant->users as $user)
                    <table class="table">
                      
                      <tbody>
                        <tr>
                          <td><strong>Name:&nbsp;</strong>{{$user->name}}</td>
                          <td><strong>Email:&nbsp;</strong>{{$user->email}}</td>
                          <td><strong>Address:&nbsp;</strong>{{$user->profile->address}}</td>
                          <td><strong>Gender:&nbsp;</strong>{{$user->profile->gender}}</td>
                          <td><strong>Biography:&nbsp;</strong>{{$user->profile->bio}}</td>
                          <td><strong>Experience:&nbsp;</strong>{{$user->profile->experience}}</td>
                          <td><a href="{{Storage::url($user->profile->resume)}}">Resume</a></td>
                          <td><a href="{{Storage::url($user->profile->cover_letter)}}">Cover letter</a></td>
                        </tr>
                        
                      </tbody>
                    </table>
                @endforeach    
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
