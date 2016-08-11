@extends('layouts.main')

@section('title', 'Create')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Create Listing</h3>
        </div>
        <div class="panel-body">
            {!! Form::open(array('action' => 'ClassifiedsController@store', 'enctype' => 'multipart/form-data')) !!}
            <div class="form-group">
                {!! Form::label('title', 'Title')  !!}
                {!! Form::text('title', $value= null, $attributes = ['class' => 'form-control', 'name' => 'title']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('category_id', 'Category')  !!}
                <select name="category_id" class="form-control">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                {!! Form::label('description', 'Description')  !!}
                {!! Form::textarea('description', $value= null, $attributes = ['class' => 'form-control', 'name' => 'description']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('price', 'Price')  !!}
                {!! Form::text('price', $value= null, $attributes = ['class' => 'form-control', 'name' => 'price']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('condition', 'Condition')  !!}
                {!! Form::select('condition', array(
                    '0' => 'Choose Condition',
                    'New' => 'New',
                    'Like New' => 'Like New',
                    'Used' => 'Used',
                    'Bad' => 'Bad',
                    'Broken' => 'Broken'
                    ), '0', $attributes = ['class' => 'form-control', 'name' => 'condition'])
                     !!}
            </div>

            <div class="form-group">
                {!! Form::label('main_image', 'Main Image')  !!}
                {!! Form::file('main_image', $attributes = ['class' => 'btn btn-default']) !!}
            </div>

            <h3>Seller Contact Info</h3>
            <div class="form-group">
                {!! Form::label('location', 'Location')  !!}
                {!! Form::text('location',  $value= null, $attributes = ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('email', 'Contact Email')  !!}
                {!! Form::text('email', $value= null, $attributes = ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('phone', 'Contact Phone') !!}
                {!! Form::text('phone', $value= null, $attributes = ['class' => 'form-control']) !!}
            </div>

            {!! Form::submit('Submit', $attributes = ['class' => 'btn btn-default']) !!}

            {!! Form::close() !!}
        </div>
    </div>

@stop