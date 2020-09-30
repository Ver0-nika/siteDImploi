@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">

            @if(empty(Auth::user()->company->logo))
            <img src="{{asset('cover/tumblr-image-sizes-banner.png')}}" style="width: 100%;height:25%;">
            @else
            <img src="{{asset('uploads/logo')}}/{{Auth::user()->company->logo}}" style="width:100%;">
            @endif

            <br><br>

            <form action="{{route('company.logo')}}" method="POST" enctype="multipart/form-data">@csrf
            <div class="card">
                <div class="card-header"><center>Update your LOGO</center></div>
                <div class="card-body">
                    <input type="file" class="form-control" name="company_logo">
                    <br>
                    <button class="btn btn-primary float-right" type="submit">Update</button>
                </div>
            </div> 
            </form> 
            <br>
            <form action="{{route('cover.photo')}}" method="POST" enctype="multipart/form-data">@csrf
            <div class="card">
                <div class="card-header"><center>Update your COVER IMAGE</center></div>
                <div class="card-body">
                    <input type="file" class="form-control" name="cover_photo">
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

                <div class="card-header"><center>Update your company information</center></div>

                <form action="{{route('company.store')}}" method="POST">@csrf

                <div class="card-body">
                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" class="form-control" name="address" value="{{Auth::user()->company->address}}">
                    </div>
                    <div class="form-group">
                        <label for="">Phone</label>
                        <input type="text" class="form-control" name="phone" value="{{Auth::user()->company->phone}}">
                    </div>
                    <div class="form-group">
                        <label for="">Website</label>
                        <input type="text" class="form-control" name="website" value="{{Auth::user()->company->website}}">
                    </div>
                    <div class="form-group">
                        <label for="">Slogan</label>
                        <input type="text" class="form-control" name="slogan" value="{{Auth::user()->company->slogan}}">
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <input type="text" name="description" class="form-control" value="{{Auth::user()->company->description}}">
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
            <div class="card">
                <div class="card-header"><center>ABOUT your company</center></div>
                <div class="card-body">
                    <p><strong>Company name:&nbsp;</strong>{{Auth::user()->company->cname}}</p>
                    <p><strong>Address:&nbsp;</strong>{{Auth::user()->company->address}}</p>
                    <p><strong>Phone:&nbsp;</strong>{{Auth::user()->company->phone}}</p>
                    <p><strong>Website:&nbsp;</strong><a href="{{Auth::user()->company->website}}">{{Auth::user()->company->website}}</a></p>
                    <p><strong>Slogan:&nbsp;</strong>{{Auth::user()->company->slogan}}</p>
                    <p><strong>Description:&nbsp;</strong>{{Auth::user()->company->description}}</p>
                    <p style="text-align: center;"><strong><a href="company/{{Auth::user()->company->slug}}"><button class="btn btn-outline-primary btn-sm">WATCH COMPANY PAGE</button></a></strong></p>
                </div>
            </div>
            <br>
            
                       
        </div>
    </div>
</div>
@endsection
