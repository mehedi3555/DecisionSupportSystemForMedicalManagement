@extends('frontEnd.pages.master')

@section('title')
    Diseases-Reg
@endsection

@push('style')
<style type="text/css">
    label.error {
    color: red;
    font-weight: 300;
    }
</style>
@endpush

@push('script')
<script src=" {{ asset('frontEnd/js/jquery.validate.js') }} "></script>
<script type="text/javascript">

    $.validator.addMethod("alphabet", function(value, element) {
        return this.optional(element) || /^[a-zA-Z][a-zA-Z\s]*$/.test(value);
    });

    $().ready(function() {
        $("#registerForm").validate({
            rules: {
                Name:{
                    required:true,
                    alphabet:true,
                    minlength:3
                }
                
            },
            messages: {
              Name:{
                required:"Enter Diseases name",
                alphabet:"Name must be alphabetic",
                minlength:"Enter at least three(3) character"
              }
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
                Diseases Registration
            </header>
            <div class="panel-body">
                <form id="registerForm" class="form-horizontal bucket-form" action="{{ url('/save/diseases') }}" method="POST">

                    {{ csrf_field() }}


                    <div class="form-group">
                        <label for="Name" class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-6">
                            <input id="Name" type="text" name="Name" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label"></label>
                        <div class="col-sm-2">
                            <input type="submit" value="Submit" class="form-control btn btn-success">
                        </div>
                    </div>
                    <br>
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