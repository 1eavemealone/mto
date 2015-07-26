@extends('app')

@section('content')

<ul>

@foreach ($users as $usr)
<li> 

		<button class="btn "> <a href="{{ url('account/edit') }}/{{ $usr->id  }}"> {{$usr->name}} </a></button> 

</li>
@endforeach
</ul>






@endsection