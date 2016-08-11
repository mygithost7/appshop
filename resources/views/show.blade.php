@extends('layouts.main')

@section('title', 'Product')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">{{$classified->title}}</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-4">
                    <img src="/images/{{$classified->main_image}}">
                </div>
                <div class="col-md-8">
                    <h3>Item Description</h3>
                    <p>{{$classified->description}}</p>
                    <h3>Item Details</h3>
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Price:</strong>{{$classified->price}}</li>
                        <li class="list-group-item"><strong>Condition:</strong>{{$classified->condition}}</li>
                    </ul>

                    <h3>Seller Details</h3>
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Location:</strong>{{$classified->location}}</li>
                        <li class="list-group-item"><strong>Contact Email:</strong>{{$classified->email}}</li>
                        <li class="list-group-item"><strong>Contact Phone:</strong>{{$classified->phone}}</li>
                    </ul>

                </div>
            </div>
            @if(!Auth::guest())
                @if(Auth::user()->id == $classified->owner_id)
                <div class='pull-right classified-controls'>
                    <a href="/classifieds/{{$classified->id}}/edit" class="btn btn-default">Edit</a>
                    {!! Form::open(['method' => 'DELETE', 'route' =>['classifieds.destroy', $classified->id]])!!}
                    {!! Form::submit('Delete', $attributes = ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </div>

                @endif
            @endif
        </div>
    </div>
@stop