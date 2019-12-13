@extends('customers.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>CREATE CareGiver</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('caregiver.index') }}"> Back</a>
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

<form action="{{ route('caregiver.store') }}" method="POST">
    @csrf

     

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ชื่อ:</strong>
                <input type="text" name="Caregiver_FirsName" class="form-control" placeholder="Caregiver_FirsName">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>นามสกุล:</strong>
                <input type="text" name="CareGiver_LastName" class="form-control" placeholder="CareGiver_LastName">
            </div>
        </div>
        
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>เบอร์ผู้ดูแล:</strong>
                <input type="text" name="CareGiver_Phone" class="form-control" placeholder="CareGiver_Phone">
            </div>
        </div>
        


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <input type="reset" value="ยกเลิก" class="btn btn-warning">
            <input type="submit" value="บันทึกข้อมูล" class="btn btn-success">
            </div>
        </div>
     </div>
</form>

@endsection

