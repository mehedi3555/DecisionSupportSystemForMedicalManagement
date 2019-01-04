@extends('frontEnd.management.mmaster')

@section('title')
    Weekly Graph
@endsection

@push('script')
  <script>
        function printDiv(pdf) {
            var printContents = document.getElementById(pdf).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
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
          Weekly Graph
        </header>
      <div class="panel-body">
        <div class="col-md-8 col-md-offset-2 agile-last-left agile-last-middle">
          <div class="agile-last-grid">
            <div class="area-grids-heading">
              
            </div>
            <div id="graph8"></div>
            <script type="text/javascript">
            <?php
              $patients = DB::table('patients')
              ->join('diseases', 'patients.Diseases', '=', 'diseases.id')
              ->select(DB::raw('WEEK(Date) as week'), 'diseases.Name as dName', DB::raw('count(patients.id) as totalPatient'))
              ->groupBy(DB::raw('WEEK(Date), diseases.id'))
              ->where('diseases.id', '=', $dis)
              ->get();
            ?>
            
                        
            var day_data = [
              @foreach ($patients as $data)
                {"week": "{{ $data->dName }} " + "</br>" + " .{{ $data->week }}th Week", "patients": {!! $data->totalPatient !!}},
              @endforeach
            ];

            Morris.Bar({
              element: 'graph8',
              data: day_data,
              xkey: 'week',
              ykeys: ['patients'],
              labels: ['Total Patient'],
              xLabelAngle: 90
            });
            </script>
          </div>
        </div>
        <div class="col-md-2 agile-last-right agile-last-middle">
          <button type="submit" onclick="printDiv('pdf')" class="btn btn-primary">Make PDF</button>
        </div>
      </div>
    </section>
        <!-- page end-->
        </div>
</section>
@endsection

<div id="pdf">
  <p style="color:#0B62A4 !important; font-weight:900 !important; font-size: 50px !important; text-align: center;font-family: sans-serif; margin-bottom: 0px !important" class="text-center">
      DSS
  </p>

  <hr style="border: 1px solid #0B62A4 !important">

  <p style="font-size: 25px !important; color: #712828 !important; text-align: center; font-family: sans-serif;font-weight:700 !important;margin-top: 0px !important">
    Report Based on Patient Diseases (Weekly)
  </p>

  <table style="width: 100% !important;" class="table table-striped" cellpadding="10" cellspacing="0">
      <tr>
        <th style="border-bottom: 2px solid #8c7f7f !important;text-align: left; font-size: 22px !important; font-weight: 700 !important; color:#0B62A4 !important; font-family: sans-serif;">Week</th>
        <th style="border-bottom: 2px solid #8c7f7f !important;text-align: left; font-size: 22px !important; font-weight: 700 !important; color:#0B62A4 !important; font-family: sans-serif;">Diseases Name</th>
        <th style="border-bottom: 2px solid #8c7f7f !important;text-align: left; font-size: 22px !important; font-weight: 700 !important; color:#0B62A4 !important;font-family: sans-serif;">Patient</th>
      </tr>


    @foreach($patients as $data)
      <tr>
        <td style="border-bottom: 2px solid #ddd !important;text-align: left; font-size: 18px !important; font-weight: 700 !important;font-family: sans-serif;">{{ $data->week }}th Week</td>
        <td style="border-bottom: 2px solid #ddd !important;text-align: left; font-size: 18px !important; font-weight: 700 !important;font-family: sans-serif;">{{ $data->dName }}</td>
        <td style="border-bottom: 2px solid #ddd !important;text-align: left; font-size: 18px !important; font-weight: 700 !important;font-family: sans-serif;">{{ $data->totalPatient }}</td>
      </tr>
    @endforeach
  </table>
    <div class="printTime">
      <p style="font-size: 15px !important; font-weight: 700 !important; font-family: sans-serif; color: #8c7f7f !important; margin-top: 30px !important" id="time"></p>
      <p style="font-size: 15px !important; font-weight: 700 !important; font-family: sans-serif; color: #8c7f7f !important" id="date"></p>
      <script>
        var time = new Date();
        document.getElementById("time").innerHTML =
        time.toLocaleString('en-US', { hour: 'numeric', minute: 'numeric', hour12: true });
        var d = new Date();
        document.getElementById("date").innerHTML = d.toDateString();
      </script>
    </div>
  </div>