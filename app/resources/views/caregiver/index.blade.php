@extends('customers.layout')
@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Customers Information </h2>
            <a class="btn btn-info" href="{{ route('caregiver.create')}}">Create Caregiver</a>
    		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 margin-tb">
    <table border=1>

    <tr>
        <td>ID</td>
        <td>ชื่อ</td>
        <td>นามสกุล</td>
        <td>เบอร์โทร</td>
        
        
    </tr>
    @foreach ($caregiver as $care)
    <tr>
        <td>{{ $care->id }}</td>
        <td>{{ $care->Caregiver_FirsName }}</td>
        <td>{{ $care->CareGiver_LastName }}</td>
        <td>{{ $care->CareGive_Phone }}</td>
        
        <td align=center>
        <form action="{{ route('caregiver.destroy',$care->id) }}" method="POST">
            <a class="btn btn-info" href="{{ route('caregiver.show',$care->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('caregiver.edit',$care->id)}}">Edit</a>
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