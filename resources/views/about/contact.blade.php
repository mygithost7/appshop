@extends('layouts.main')

@section('title', 'Contact')

@section('content')
        <!-- Responsive iFrame -->
<div class="Flexible-container">
    <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.ch/maps?f=q&amp;source=s_q&amp;hl=de&amp;geocode=&amp;q=Bern&amp;aq=&amp;sll=46.813187,8.22421&amp;sspn=3.379772,8.453979&amp;ie=UTF8&amp;hq=&amp;hnear=Bern&amp;t=m&amp;z=12&amp;ll=46.947922,7.444608&amp;output=embed&amp;iwloc=near"></iframe>
</div>
<br><br>
<h1>Contact us</h1>
<br>
<br>
<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>

{!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}

<div class="form-group">
    {!! Form::label('Your Name') !!}
    {!! Form::text('name', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your name')) !!}
</div>

<div class="form-group">
    {!! Form::label('Your E-mail Address') !!}
    {!! Form::text('email', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your e-mail address')) !!}
</div>

<div class="form-group">
    {!! Form::label('Your Message') !!}
    {!! Form::textarea('message', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your message')) !!}
</div>

<div class="form-group">
    {!! Form::submit('Contact Us!', 
      array('class'=>'btn btn-primary')) !!}
</div>
{!! Form::close() !!}



@stop
