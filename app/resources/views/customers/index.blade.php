@extends('customers.layout')
@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Customers Information </h2>
            <a class="btn btn-info" href="{{ route('customers.create')}}">Create Customers</a>
    		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 margin-tb">
    <table border=1>

    <tr>
        <td width="10%">ID</td>
        <td width="10%">ชื่อ</td>
        <td width="10%">นามสกุล</td>
        <td width="10%">เบอร์โทรลูกค้า</td>
        <td width="10%">ที่อยู่</td>
        <td width="20%">ตัวดำเนินการ</td>
    </tr>
    @foreach ($customers as $cust)
    <tr>
        <td>{{ $cust->customerid }}</td>
        <td>{{ $cust->customerFirstName }}</td>
        <td>{{ $cust->customerLastName }}</td>
        <td>{{ $cust->customerphone }}</td>
        <td>{{ $cust->customeraddress }}</td>
        
        <td align=center>
        <form action="{{ route('customers.destroy',$cust->customerid) }}" method="POST">
            <a class="btn btn-info" href="{{ route('customers.show',$cust->customerid)}}">Show</a>

            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger">Delete</button>

            </form>
        </td>    

    </tr> 
    @endforeach
    </div>
    
</div>
@endsection