@extends('frontEnd.pages.master')

@section('title')
    Patient Info
@endsection

@push('style')
  <link href=" {{ asset('frontEnd/css/dataTables.bootstrap.css') }} " rel='stylesheet' type='text/css' />
@endpush

@push('script')
  <script src=" {{ asset('frontEnd/js/jquery.dataTables.js') }} "></script>
  <script src=" {{ asset('frontEnd/js/dataTables.bootstrap.js') }} "></script>

  <script>
        $(document).ready(function() {
            $('#patientTable').DataTable({
                bFilter: true,
                "language": {
                   "info": "(_START_ to _END_) of _TOTAL_ patients",
                    "paginate": {
                        "next": '&raquo;',
                        "previous": '&laquo;'
                    },
                    "sLengthMenu": "_MENU_ records"
                },
                "aLengthMenu": [[5, 10, -1], [5, 10, "All"]],
                "iDisplayLength": 5
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
                Patient Information
            </header>
            <div class="panel-body">
                <table class="table" id="patientTable">
                                <thead>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Gender</th>
                                    <th>Diseases</th>
                                    <th>Date</th>
                                </thead>
                                <tbody>
                                    @foreach($patients as $data)
                                    <tr>
                                        <td> {{ $data->PId }} </td>
                                        <td> {{ $data->Name }} </td>
                                        <td>{{ $data->Age }}</td>
                                        <td>{{ $data->Gender }}</td>
                                        <td>{{ $data->dName }}</td>

                                        <?php
                                            $oldDate = $data->Date;
                                            $newDate = date("d-M-Y", strtotime($oldDate));
                                        ?>

                                        <td>{{  $newDate }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
              </div>
        </section>
        <!-- page end-->
        </div>
</section>
@endsection