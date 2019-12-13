@extends('customers.layout')
@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Details Customers</h2>
    		</div>
	</div>
    
</div>


@foreach($customers as $cuss)
<div class="row">
	<div class="col-lg-12 margin-tb">
    <table border=0>
    <tr>
        <td>รหัสลูกค้า : </td>
        <td>{{ $cuss->customerid}}</td>
        <td>ชื่อลูกค้า : </td>
        <td>{{ $cuss->contactFirstName}}</td> <td> &nbsp </td> <td>{{ $cuss->contactLastName }}</td>
    </tr>
    <tr>
        <td>ผู้ดูเเล : </td>
        <td>{{ $cuss->Pet_id}} </td>
    </tr>
    </table>
    <table border=1>
    <tr>
        <td>ID<td>
        <td>ชื่อ</td>
        <td>นามสกุล</td>
        <td>เบอร์โทร</td>
        <td>ที่อยู่</td>
        
        


    </tr>
    <tr>
        <td>{{ $cuss->customerid}}</td>
        <td>{{ $cuss->contactFirstName }}</td>
        <td>{{ $cuss->contactLastName }}</td>
        <td>{{ $cuss->customerphone }}</td>
        <td>{{ $cuss->customeraddress }}</td>
      
        


    </tr>
    

    @endforeach
    <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('customers.index') }}"> Back</a>
    </div>
 
    </table>
	</div>
</div>
@endsection 