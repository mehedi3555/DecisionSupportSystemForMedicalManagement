@extends('frontEnd.management.mmaster')

@section('title')
    Management
@endsection

@section('main-content')
    <section id="main-content">
    <section class="wrapper">
        <!-- //market-->
        <div class="market-updates">
            <div class="col-md-4 market-update-gd">
                <div class="market-update-block clr-block-2">
                    <div class="col-md-4 market-update-right">
                        <i style="color: #fff; font-size: 50px; font-weight: 900" class="fa fa-wheelchair"> </i>
                    </div>
                     <div class="col-md-8 market-update-left">

                        <?php
                            $date = \Carbon\Carbon::today()->subDays(7);
                            $patientwk = DB::table('patients')
                            ->select(DB::raw('count(id) as weekly'))
                            ->where('Date', '>=', $date)
                            ->get();
                        ?>

                     <h4>Current Weak</h4>
                    <h3>
                        @foreach($patientwk as $datawk)
                            {{ $datawk->weekly }}
                        @endforeach
                    </h3>
                    <p>Patient</p>
                  </div>
                  <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-4 market-update-gd">
                <div class="market-update-block clr-block-1">
                    <div class="col-md-4 market-update-right">
                        <i style="color: #fff; font-size: 50px; font-weight: 900" class="fa fa-wheelchair"> </i>
                    </div>
                    <div class="col-md-8 market-update-left">
                        <?php
                            $date = \Carbon\Carbon::today()->subDays(30);
                            $patientmt = DB::table('patients')
                            ->select(DB::raw('count(id) as monthly'))
                            ->where('Date', '>=', $date)
                            ->get();
                        ?>

                    <h4>Current Month</h4>
                    <h3>
                        @foreach($patientmt as $datamt)
                            {{ $datamt->monthly }}
                        @endforeach
                    </h3>
                        <p>Patient</p>
                    </div>
                  <div class="clearfix"> </div>
                </div>
            </div>
            
            
            <div class="col-md-4 market-update-gd">
                <div class="market-update-block clr-block-4">
                    <div class="col-md-4 market-update-right">
                        <i style="color: #fff; font-size: 50px; font-weight: 900" class="fa fa-wheelchair"> </i>
                    </div>
                    <div class="col-md-8 market-update-left">
                        <?php
                            $date = \Carbon\Carbon::today()->subDays(365);
                            $patientyr = DB::table('patients')
                            ->select(DB::raw('count(id) as yearly'))
                            ->where('Date', '>=', $date)
                            ->get();
                        ?>

                    <h4>Current Year</h4>
                    <h3>
                        @foreach($patientyr as $datayr)
                            {{ $datayr->yearly }}
                        @endforeach
                    </h3>
                        <p>Patient</p>
                    </div>
                  <div class="clearfix"> </div>
                </div>
            </div>
           <div class="clearfix"> </div>
        </div>  
        <!-- //market-->
        <div class="row">
            <div class="panel panel-danger">
                <div style="height:200px; padding: 20px" class="panel-heading">
                    <p style="font-size: 40px; font-weight: 700">DECISION SUPPORT SYSTEM BASED ON PATIENT DISEASES</p>
                </div>
            </div>
        </div>
</section>
@endsection