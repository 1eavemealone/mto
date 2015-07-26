@extends('app')

@section('content')



  <div id="tabs" class="container">
 	<ul class="nav nav-tabs">
    	<li  class="active"><a href="#profile">Profile</a></li>
    	<li><a href="#branches">Branches</a></li>
    	<li><a href="#contacts">Contacts</a></li>
    	<li><a href="#customers">Customers</a></li>
    </ul>

	<hr style="width: 100%; color: black; height: 1px; background-color:black;" />
	 		

	[{{ $partnerdetails->partner_id }}] - {{ $partnerdetails->name }}

		<div class="tab-content">
		    <div id="profile" class="tab-pane fade in active"> 
	 			<table>
			    	<tr>
			    		<td colspan="10" class="copy">Update Partner Info</td>
			    	</tr>
			    	<tr>
			    		<td colspan="10" style="height: 10px;"></td>
			    	</tr>			    	
			    	<tr>
			    		<td style="width: 120px;">Partner ID :</td>
			    		<td><input type="text" readonly="readonly" class="required" name="partner_id" id="partner_id" value="{{$partnerdetails->partner_id}}"></td>
			    	</tr>
			    	<tr>
			    		<td class="right" style="width: 120px;">Partner Type :</td>
			    		<td>
			    			<table>
			    				<tr>
			    					<td><input type="checkbox" name="cb_1" id="cb_1"><label for="Customer"  style="position: relative; top: -2px;">Customer </label></td>
			    					<td><input type="checkbox" name="cb_1" id="cb_2"><label for="Supplier"  style="position: relative; top: -2px;">Supplier </label></td>
			    					<td><input type="checkbox" name="cb_3" id="cb_3"><label for="Employee"  style="position: relative; top: -2px;">Employee </label></td>
			    				</tr>
			    			</table>
			    		</td>
			    	</tr>
			    	<tr>
			    		<td class="right" style="width: 120px;">Partner Name :</td>
			    		<td><input type="text" class="required" name="partner_name" id="partner_name" value="{{$partnerdetails->name}}"></td>
			    	</tr>
			    	<tr>
			    		<td class="right" style="width: 120px;">Address :</td>
			    		<td>
							<table cellspacing=="5">
			    				<tr>
			    					<td><input type="text" class="textbox OneCell" name="country" id="country"></td>
			    					<td><input type="text" class="textbox OneCell" name="province" id="province"></td>
			    					<td><input type="text" class="textbox OneCell" name="city" id="city"></td>
			    				</tr>
    							<tr>
									<td><label for="Country" >Country</label></td>
									<td><label for="Province" >Province</label></td>
									<td><label for="City" >City</label></td>

			    					<!-- <td><input type="text" name="barangay" id="barangay"><label for="Barangay">Barangay</label></td>
			    					<td><input type="text" name="street" id="street"><label for="Street"  >Street</label></td>
			    					<td><input type="text" name="home" id="home"><label for="Home" >label</label></td> -->
			    				</tr>
			    			</table>
			    		</td>
			    	</tr>
			    </table>




		    </div>
		    <div id="branches" class="tab-pane fade">
		     
		   


		    </div>
		    <div id="contacts" class="tab-pane fade">
		     
		      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
		    </div>
		    <div id="customers" class="tab-pane fade">
		     
		      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
		    </div>
		  </div>
</div>

<script>
$(document).ready(function(){
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
});
</script>








@endsection

