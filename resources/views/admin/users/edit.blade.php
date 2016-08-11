@extends('layouts.admin')



@section('content')

    <h1>Edit users</h1>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="header">
                    <h4 class="title">Edit Profile</h4>
                </div>
                <div class="content">

                    {!! Form::model($user, ['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id], 'files'=>true]) !!}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Company (disabled)</label>
                                    <input type="text" class="form-control" disabled placeholder="Company" value="Creative Code Inc.">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    {!! Form::label('name', 'Username:') !!}
                                    {!! Form::text('name', null, ['class'=>'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('email', 'Email:') !!}
                                    {!! Form::text('email', null, ['class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('first_name', 'First Name:') !!}
                                    {!! Form::text('first_name', null, ['class'=>'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('last_name', 'Last Name:') !!}
                                    {!! Form::text('last_name', null, ['class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    {!! Form::label('address', 'Address:') !!}
                                    {!! Form::text('address', null, ['class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('city', 'City:') !!}
                                    {!! Form::text('city', null, ['class'=>'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('country', 'Country:') !!}
                                    {!! Form::text('country', null, ['class'=>'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('postal_code', 'Postal Code:') !!}
                                    {!! Form::text('postal_code', null, ['class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('role_id', 'Role:') !!}
                                    {!! Form::select('role_id', $roles, null, ['class'=>'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('is_active', 'Status:') !!}
                                    {!! Form::select('is_active',array(1 => 'Active', 0 => 'Not Active'), null, ['class'=>'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('photo_id', 'Photo:') !!}
                                    {!! Form::file('photo_id', ['class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>About Me</label>
                                    <textarea rows="5" class="form-control" placeholder="Here can be your description" value="Mike">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('password', 'Password:') !!}
                                    {!! Form::password('password',['class'=>'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="margin-prof-button text-center">
                                    {!! Form::open(['method'=>'DELETE', 'action'=>['AdminUsersController@destroy', $user->id]]) !!}

                                    <div class="form-group">
                                        {!! Form::submit('Delete User',['class'=>'btn btn-danger col-sm-8 pull-center']) !!}
                                    </div>

                                    {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group text-center">
                                    {{--<button type="submit" class="btn btn-info btn-fill pull-right margin-prof-button">Update Profile</button>--}}
                                    {!! Form::submit('Update Profile',['class'=>'btn btn-primary col-sm-8 margin-prof-button']) !!}
                                </div>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                    {!! Form::close() !!}


                </div>
                <div class="row">
                    @include('inculdes.form_error')
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-user">
                <div class="image">
                    <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>

                </div>
                <div class="content">
                    <div class="author">
                        <a href="#">
                            <img src="{{$user->photo ? $user->photo->file : '/images/no-thumb.jpg'}}" alt="" class="avatar border-gray">

                            <h4 class="title">Mike Andrew<br />
                                <small>michael24</small>
                            </h4>
                        </a>
                    </div>
                    <p class="description text-center"> "Lamborghini Mercy <br>
                        Your chick she so thirsty <br>
                        I'm in that two seat Lambo"
                    </p>
                </div>
                <hr>
                <div class="text-center">
                    <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                    <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                    <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                </div>
            </div>
        </div>

    </div>
@stop