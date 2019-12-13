@extends('customers.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Customer</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('customers.index') }}"> Back</a>
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
   
<form action="{{ route('customers.update',$customers->id) }}" method="POST">
    @csrf
    @method('PUT')
  
     <div class="row">
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ชื่อ:</strong>
                <input type="text" name="customerFirstName" class="form-control" placeholder="customerFirstName" value="{{ $customers->customerFirstName }}">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>นามสกุล:</strong>
                <input type="text" name="customerLastName" class="form-control" placeholder="customerLastName" value="{{ $customers->customerLastName }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>เบอร์โทร</strong>
                <input type="text" name="customerBirthday" class="form-control" placeholder="customerphone" value="{{ $customers->customerpohone }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ที่อยู่</strong>
                <input type="text" name="customerAge" class="form-control" placeholder="customeraddress" value="{{ $customers->customeraddress }}">
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
