@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(Session::has('message'))
                <div class="alert alert-success">
                    {{Session::get('message')}}
                </div>
            @endif
            <div class="card">
                <div class="card-header">Create a job</div>
                <div class="card-body">
            
            <form action="{{route('job.store')}}" method="POST">@csrf

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" class="form-control {{ $errors->has('title') ? 'is-invalid' : ''}}" value="{{old('title')}}">
                @if($errors->has('title'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$errors->first('title')}}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" class="form-control {{ $errors->has('description') ? 'is-invalid' : ''}}" value="{{old('description')}}"></textarea>
                @if($errors->has('description'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$errors->first('description')}}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="roles">Roles:</label>
                <textarea name="roles" class="form-control {{ $errors->has('roles') ? 'is-invalid' : ''}}" value="{{old('roles')}}"></textarea>
                @if($errors->has('roles'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$errors->first('roles')}}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="category">Category:</label>
                <select name="category" class="form-control">
                    @foreach(JobSearch\Category::all() as $cat)
                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                    @endforeach   
                </select>
            </div>
            <div class="form-group">
                <label for="position">Position:</label>
                <input type="text" name="position" class="form-control {{ $errors->has('position') ? 'is-invalid' : ''}}" value="{{old('position')}}">
                @if($errors->has('position'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$errors->first('position')}}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" name="address" class="form-control {{ $errors->has('address') ? 'is-invalid' : ''}}" value="{{old('address')}}">
                @if($errors->has('address'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$errors->first('address')}}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="type">Type:</label>
                <select class="form-control" name="type">
                    <option value="fulltime">Fulltime</option>
                    <option value="parttime">Part-time</option>
                    <option value="casual">Casual</option>
                </select>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select class="form-control" name="status">
                    <option value="1">Live</option>
                    <option value="0">Draft</option>
                </select>
            </div>
            <div class="form-group">
                <label for="lastdate">Last date of application:</label>
                <input type="date" name="last_date" class="form-control {{ $errors->has('last_date') ? 'is-invalid' : ''}}" value="{{old('last_date')}}">
                @if($errors->has('last_date'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$errors->first('last_date')}}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary float-right">Submit</button>
            </div>

            </form>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
