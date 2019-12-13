@extends('pet.layout')
@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Pet Detail</h2>
    		</div>
	</div>
    
</div>


@foreach($pet as $pets)
<div class="row">
	<div class="col-lg-12 margin-tb">
    <table border=0>
    <tr>
        <td>รหัสลูกค้า </td>
        <td>{{ $pets->id}}</td>
        <td>ชื่อลูกค้า : </td>
        <td>{{ $pets->Pet_Name}}</td> <td>
    </tr>
    <tr>
        <td>ผู้ดูเเล : </td>
        <td>{{ $pets->Caregiver_FirsName}} </td>
    </tr>
    </table>
    <table border=1>
    <tr>
        <td>ID<td>
        <td>ชื่อ</td>
        <td>เพศ</td>
        
        


    </tr>
    <tr>
        <td>{{ $cuss->Pet_ID}}</td>
        <td>{{ $cuss->Pet_Name }}</td>
        <td>{{ $cuss->Pet_sex }}</td>
       
        


    </tr>
    

    @endforeach
    <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('pet.index') }}"> Back</a>
    </div>
 
    </table>
	</div>
</div>
@endsection 