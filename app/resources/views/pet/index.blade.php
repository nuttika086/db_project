@extends('pet.layout')
@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Pet Information </h2>
            <a class="btn btn-info" href="{{ route('pet.create')}}">Create Pet Information</a>
    		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 margin-tb">
    <table border=1>

    <tr>
        <td>ID</td>
        <td>ชื่อ</td>
        <td>เพศ<td>
    </tr>
    @foreach ($pet as $pets)
    <tr>
        <td>{{ $pets->id }}</td>
        <td>{{ $pets->Pet_Name }}</td>
        <td>{{ $pets->Pet_sex }}</td>
        
        
        <td align=center>
        <form action="{{ route('pet.destroy',$pets->id) }}" method="POST">
            <a class="btn btn-info" href="{{ route('pet.show',$pets->id)}}">Show</a>

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