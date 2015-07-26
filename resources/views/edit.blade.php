@extends('app')

@section('content')



		


{!! Form::open(array('url' => 'account')) !!}

{!! Form::hidden('id', $info->id) !!}
{!!  Form::text('name', $info->name) !!}
{!!  Form::text('email', $info->email) !!}
{!! Form::submit('Update') !!}
    
{!! Form::close() !!}




@endsection