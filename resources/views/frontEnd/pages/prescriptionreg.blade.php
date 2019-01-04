@extends('frontEnd.pages.master')

@section('title')
    Patient-Reg
@endsection
@push('style')
    <link href=" {{ asset('frontEnd/css/jqueryUI.css') }} " rel='stylesheet' type='text/css' />

<style type="text/css">
    label.error {
    color: red;
    font-weight: 300;
    }
</style>
@endpush
@push('script')
<script src=" {{ asset('frontEnd/js/jqueryUI.js') }} "></script>
<script src=" {{ asset('frontEnd/js/jquery.validate.js') }} "></script>
<script type="text/javascript">

    $.validator.addMethod("alphabet", function(value, element) {
        return this.optional(element) || /^[a-zA-Z][a-zA-Z\s]*$/.test(value);
    });
    
    $().ready(function() {

        $( "#Date" ).datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat:"yy-mm-dd",
            minDate: 0,
            maxDate: 0
        });

        $("#registerForm").validate({
            rules: {
                Name:{
                    required:true,
                    alphabet:true,
                    minlength:3
                },
                Age:{
                    required:true,
                    number:true,
                    min:0.1
                },
                Gender:"required",
                Diseases:"required",
                Doctor:{
                    required:true,
                    alphabet:true,
                    minlength:3
                },
                Medicine:"required",
                Date:"required"
                
            },
            messages: {
              Name:{
                required:"Enter patient name",
                alphabet:"Name must be alphabetic",
                minlength:"Enter at least three(3) character"
              },
              Age:{
                    required:"Enter patient age",
                    number: "Age must be numeric value",
                    min:"Age must be positive"
                },
            Gender:"Select patient gender",
            Diseases:"Select diseases",
            Doctor:{
                required:"Enter doctor name",
                alphabet:"Name must be alphabetic",
                minlength:"Enter at least six(6) character"
              },
              Medicine:"Enter medicines name",
              Date:"Enter current date"
            }
        });

        
        });
</script>
@endpush

@section('main-content')
<section id="main-content">
    <section class="wrapper">
        <div class="form-w3layouts">

        <div class="row">
        <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Patient Registration
            </header>
            <div class="panel-body">
                <form id="registerForm" class="form-horizontal bucket-form" action="{{ url('/save/patient') }}" method="POST">

                    {{ csrf_field() }}

                    @forelse($patientId as $pid)
                        <input type="hidden" name="PId" value="PAT-{{$pid->id+1}}">
                    @empty
                        <input type="hidden" name="PId" value="PAT-1">
                    @endforelse

                    <div class="form-group">
                        <label for="Name" class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-6">
                            <input id="Name" type="text" name="Name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Age" class="col-sm-3 control-label">Age</label>
                        <div class="col-sm-6">
                            <input type="text" id="Age" name="Age" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Gender" class="col-sm-3 control-label">Gender</label>
                        <div class="col-sm-6">
                            <input type="radio" name="Gender" id="Gender" value="Male">Male
                            <input type="radio" name="Gender" id="Gender" value="Female">Female
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Pressure" class="col-sm-3 control-label">Blood Pressure</label>
                        <div class="col-sm-6">
                            <input type="text" id="Pressure" name="Pressure" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Symptom" class="col-sm-3 control-label">Symptom</label>
                        <div class="col-sm-6">
                            <input type="text" id="Symptom" name="Symptom" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Diseases" class="col-sm-3 control-label col-lg-3" for="inputSuccess">Diseases</label>
                        <div class="col-lg-6">
                            <select id="Diseases" name="Diseases" class="form-control input-lg m-bot15">
                                <option value="">------Select Diseases------</option>
                                @foreach($diseases as $data)
                                   <option value=" {{ $data->id }} ">{{ $data->Name }}</option> 
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Doctor" class="col-sm-3 control-label">Doctor</label>
                        <div class="col-sm-6">
                            <input type="text" id="Doctor" name="Doctor" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Medicine" class="col-sm-3 control-label">Medicine</label>
                        <div class="col-sm-6">
                            <input type="text" id="Medicine" name="Medicine" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Date" class="col-sm-3 control-label">Date</label>
                        <div class="col-sm-6">
                            <input type="text" id="Date" name="Date" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label"></label>
                        <div class="col-sm-2">
                            <input type="submit" value="Submit" class="form-control btn btn-success">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label"></label>
                        <div class="col-sm-6">
                           <p class="text-success"> <b>{{ Session::get('message') }}</b> </p>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- page end-->
        </div>
</section>
@endsection