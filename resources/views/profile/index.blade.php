@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">

            @if(empty(Auth::user()->profile->avatar))
                <img src="{{asset('avatar/man.jpg')}}" width="100" style="width: 100%;">
            @else
                <img src="{{asset('uploads/avatar')}}/{{Auth::user()->profile->avatar}}" width="100" style="width: 100%;">
            @endif

            <br><br>

            <form action="{{route('avatar')}}" method="POST" enctype="multipart/form-data">@csrf
            <div class="card">
                <div class="card-header" style="text-align: center;">Update your AVATAR</div>
                <div class="card-body">
                    <input type="file" class="form-control" name="avatar">
                    <br>
                    <button class="btn btn-primary float-right" type="submit">Update</button>
                </div>
            </div> 
            </form> 

        </div>
        <div class="col-md-5">
            <div class="card">

                @if(Session::has('message'))
                <div class="alert alert-success">
                    {{Session::get('message')}}
                </div>
                @endif

                <div class="card-header" style="text-align: center;">ABOUT YOU</div>
                <div class="card-body">
                    <p><strong>Name:&nbsp;</strong>{{Auth::user()->name}}</p>
                    <p><strong>Email:&nbsp;</strong>{{Auth::user()->email}}</p>
                    <p><strong>Address:&nbsp;</strong>{{Auth::user()->profile->address}}</p>
                    <p><strong>Gender:&nbsp;</strong>{{Auth::user()->profile->gender}}</p>
                    <p><strong>Experience:&nbsp;</strong>{{Auth::user()->profile->experience}}</p>
                    <p><strong>Biography:&nbsp;</strong>{{Auth::user()->profile->bio}}</p>
                    <p><strong>Member On:&nbsp;</strong>{{date('F d Y',strtotime(Auth::user()->created_at))}}</p>

                    @if(!empty(Auth::user()->profile->resume))
                        <p style="text-align: center;"><a href="{{Storage::url(Auth::user()->profile->resume)}}">RESUME</a></p>
                    @else
                        <p style="text-align: center;">Please upload your RESUME</p>
                    @endif
                    
                    @if(!empty(Auth::user()->profile->cover_letter))
                        <p style="text-align: center;"><a href="{{Storage::url(Auth::user()->profile->cover_letter)}}">COVER LETTER</a></p>
                    @else
                        <p style="text-align: center;">Please upload your COVER LETTER</p>
                    @endif

                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header" style="text-align: center;">Update your PROFILE</div>

                <form action="{{route('profile.create')}}" method="POST">@csrf

                <div class="card-body">
                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" class="form-control" name="address" value="{{Auth::user()->profile->address}}">
                    </div>

                    <div class="form-group">
                        <label for="">Experience</label>
                        <textarea name="experience" class="form-control">{{Auth::user()->profile->experience}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Biography</label>
                        <textarea name="bio" class="form-control">{{Auth::user()->profile->bio}}</textarea>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary float-right" type="submit">Update</button>
                        <br>
                    </div>
                </div>
                </form>
            </div>
        </div>

        <div class="col-md-4">
            <form action="{{route('resume')}}" method="POST" enctype="multipart/form-data">@csrf
            <div class="card">
                <div class="card-header" style="text-align: center;">Update your RESUME</div>
                <div class="card-body">
                    <input type="file" class="form-control" name="resume">
                    <br>
                    <button class="btn btn-primary float-right" type="submit">Update</button>
                </div>
            </div> 
            </form>
            <br>
            <form action="{{route('cover.letter')}}" method="POST" enctype="multipart/form-data">@csrf
            <div class="card">
                <div class="card-header" style="text-align: center;">Update your COVER LETTER</div>
                <div class="card-body">
                    <input type="file" class="form-control" name="cover_letter">
                    <br>
                    <button class="btn btn-primary float-right" type="submit">Update</button>
                </div>
            </div>
            </form>           
        </div>
    </div>
</div>
@endsection
