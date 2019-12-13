@extends('pet.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Customer</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('pet.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('pet.update',$pet->id) }}" method="POST">
    @csrf
    @method('PUT')
  
     <div class="row">
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ชื่อ:</strong>
                <input type="text" name="PetName" class="form-control" placeholder="petname" value="{{ $pet->Pet_Name }}">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>เพศ</strong>
                <input type="text" name="PetSexs" class="form-control" placeholder="petsex" value="{{ $pet->Pet_sex }}">
            </div>
        
        
        
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ยกเลิก:</strong>
                <input type="reset" class="btn btn-warning" value="ยกเลิก" >
                <input type="submit" class="btn btn-success" value="บันทึกข้อมูล" >
            </div>
        </div>
     </div>
</form>
@endsection
