@extends('app')

@section('content')

<div class="container">
	<div class="row">
			<table class="table table-striped table-bordered table-hover">
			       <tr>
                    <th style="width: 7%;">Partner ID</th>
                    <th style="width: 20%;">Partner Name</th>
                    <th style="width: 10%;">Type</th>
                    <th style="width: 33%;">Address</th>
                    <th style="width: 15%;">Contact No.</th>
                    <th style="width: 10%;">Status</th>
                  </tr>
			    @foreach($data as $partners)
			      @if($partners->status === 'void')
			        <tr bgcolor="#FF9999">
			         	<td>
                 		<a href="{{ url('partners/profile') }}/{{ $partners->partner_id }}">
                 		<?php $idnum = str_repeat("0", (8 - strlen($partners->partner_id))); ?>
			           	{{ $idnum.$partners->partner_id  }} 
						</a>
			         	</td>
			            <td>{{$partners->name}}</td>

			            @if ($partners->is_supplier === 'Y')
			            <td>Supplier</td>
			            @elseif ($partners->is_employee === 'Y')
			            <td>Employee</td>
			            @else
						<td>Customer</td>
						@endif

			            <td>{{$partners->address}}</td>
			            <td>{{$partners->tel_line_no}}</td>
 						<td>Archieved</td>	
			        </tr> 
			        @else
			        	<tr lass="bg-info">
			         	<td>

			         	<a href="{{ url('partners/profile') }}/{{ $partners->partner_id }}">
                 		<?php $idnum = str_repeat("0", (8 - strlen($partners->partner_id))); ?>
			           	{{ $idnum.$partners->partner_id  }} 
						</a>
			         	</td>
			            <td>{{$partners->name}}</td>

			            @if ($partners->is_supplier === 'Y')
			            <td>Supplier</td>
			            @elseif ($partners->is_employee === 'Y')
			            <td>Employee</td>
			            @else
						<td>Customer</td>
						@endif
			            <td>{{$partners->address}}</td>
			            <td>{{$partners->tel_line_no}}</td>
 						<td>Active</td>	
			        </tr> 
			        @endif
			    @endforeach
			</table>
	</div>
	<div class="text-center">
		<div class="pagination" style="width: 50%; margin: 0 auto;"> {!! $data->render() !!}</div>
	</div>

@endsection