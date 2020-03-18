@extends('layout')
@section('content')






            <div class="col-sm-6 col-md-3 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">All Students</h2>
                        @php
                        $student =DB::table('student_tbl')
                                  ->count('student_id')

                        @endphp

                        <p style="font-size: 30px;font-weight: bold;font-family: cursive;text-align: center;">{{$student}}</p>
                    </div>
                    <div class="dashboard-chart-card-container">
                        <div id="dashboard-card-chart-1" class="card-float-chart"></div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">All Teachers</h2>

                        @php
                            $teacher =DB::table('teachers_tbl')
                                      ->count('teachers_id')

                        @endphp
                        <p style="font-size: 30px;font-weight: bold;font-family: cursive;text-align: center;">{{$teacher}}</p>


                    </div>
                    <div class="dashboard-chart-card-container">
                        <div id="dashboard-card-chart-2" class="card-float-chart"></div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Tution Fee</h2>
                        <p style="font-size: 30px;font-weight: bold;font-family: cursive;text-align: center;">Monthly:3000 TK</p>
                    </div>
                    <div class="dashboard-chart-card-container">
                        <div id="dashboard-card-chart-3" class="card-float-chart"></div>
                    </div>
                </div>
            </div>



            <div class="col-sm-6 col-md-3 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Revenue</h2>
                        <p style="font-size: 30px;font-weight: bold;font-family: cursive;text-align: center;">Not Showing</p>
                    </div>
                    <div class="dashboard-chart-card-container">
                        <div id="dashboard-card-chart-4" class="card-float-chart"></div>
                    </div>
                </div>
            </div>




            <div class="row">
                <div class="col-md-4 grid-margin d-flex align-items-stretch">
                    <div class="row">
                        <div class="col-12 grid-margin d-flex align-items-stretch">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-12 mb-3">
                                    <div class="social-panel bg-facebook"><i class="mdi mdi-book"></i><p class="mb-0">CSE</p></div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-12 mb-3">
                                    <div class="social-panel bg-twitter"><i class="mdi mdi-book"></i><p class="mb-0">BBA</p></div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-12 mb-3">
                                    <div class="social-panel bg-google"><i class="mdi mdi-book"></i><p class="mb-0">EEE</p></div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-12">
                                    <div class="social-panel bg-linkedin"><i class="mdi mdi-book"></i><p class="mb-0">PHARMACY</p></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-flex align-items-stretch">
                            <div class="card w-100">
                                <div class="card-body px-3" style="height:333px">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h2 class="card-title">Invites</h2>
                                        <p class="mb-2 text-muted">This month</p>
                                    </div>
                                    <div class="list py-2 d-flex flex-row align-items-center">
                                        <div class="profile-img mr-4">
                                            <img src="http://via.placeholder.com/47x47" alt="">
                                            <span class="online-status bg-primary"></span>
                                        </div>
                                        <div class="profile-name">Tanvir Hossen Bappy</div>
                                        <div class="current-progress ml-auto">450/900</div>
                                    </div>
                                    <div class="list py-2 d-flex flex-row align-items-center">
                                        <div class="profile-img mr-4">
                                            <img src="http://via.placeholder.com/47x47" alt="">
                                            <span class="online-status bg-primary"></span>
                                        </div>
                                        <div class="profile-name">Sadia Jamal</div>
                                        <div class="current-progress ml-auto">450/900</div>
                                    </div>
                                    <div class="list py-2 d-flex flex-row align-items-center">
                                        <div class="profile-img mr-4">
                                            <img src="http://via.placeholder.com/47x47" alt="">
                                            <span class="online-status bg-danger"></span>
                                        </div>
                                        <div class="profile-name">Shamim Ahmed Sujon</div>
                                        <div class="current-progress ml-auto">450/900</div>
                                    </div>
                                    <div class="list py-2 d-flex flex-row align-items-center">
                                        <div class="profile-img mr-4">
                                            <img src="http://via.placeholder.com/47x47" alt="">
                                            <span class="online-status bg-success"></span>
                                        </div>
                                        <div class="profile-name">Aahsan Habib Milon</div>
                                        <div class="current-progress ml-auto">450/900</div>
                                    </div>
                                    <div class="list py-2 d-flex flex-row align-items-center">
                                        <div class="profile-img mr-4">
                                            <img src="http://via.placeholder.com/47x47" alt="">
                                            <span class="online-status bg-warning"></span>
                                        </div>
                                        <div class="profile-name">Asikur Rahman</div>
                                        <div class="current-progress ml-auto">450/900</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 grid-margin d-flex align-items-stretch">
                    <div class="card task-list w-100">
                        <div class="card-body">
                            <h2 class="card-title">SEAT REMAINING</h2>
                            <div class="task-cards selected">
                                <div class="wrapper d-flex flex-row align-items-center">
                                    <div class="wrapper">
                                        <p class="title">CSE</p>

                                    </div>
                                    <p class="ticket-number ml-auto">30</p>
                                </div>
                                <hr>

                                <div class="wrapper d-flex flex-row align-items-center">
                                    <div class="wrapper">
                                        <p class="title">BBA</p>
                                    </div>
                                    <p class="ticket-number ml-auto">18</p>
                                </div>
                                <hr>

                                <div class="wrapper d-flex flex-row align-items-center">
                                    <div class="wrapper">
                                        <p class="title">EEE</p>
                                    </div>
                                    <p class="ticket-number ml-auto">40</p>
                                </div>
                                <hr>

                                <div class="wrapper d-flex flex-row align-items-center">
                                    <div class="wrapper">
                                        <p class="title">PHARMACY</p>
                                    </div>
                                    <p class="ticket-number ml-auto">21</p>
                                </div>
                                <hr>



                                <div class="wrapper d-flex flex-row align-items-end justify-content-between">
                                    <div class="amount d-flex flex-column">

                                    </div>
                                    <div class="status d-flex flex-column">

                                    </div>

                                </div>
                            </div>
                            <div class="task-cards">
                                <div class="wrapper d-flex flex-row align-items-center">
                                    <div class="wrapper">
                                        <p class="title">Total New Students</p>
                                        <p class="reference-url"><a></a></p>
                                    </div>
                                    <p class="ticket-number ml-auto">1698</p>
                                </div>
                                <hr>

                                <div class="wrapper d-flex flex-row align-items-end justify-content-between">
                                    <div class="amount d-flex flex-column">


                                    </div>
                                    <div class="status d-flex flex-column">


                                    </div>

                                </div>
                            </div>
                            <div class="task-cards">
                                <div class="wrapper d-flex flex-row align-items-center">
                                    <div class="wrapper">


                                    </div>

                                </div>
                                <hr>
                                <div class="wrapper d-flex flex-row align-items-end justify-content-between">
                                    <div class="amount d-flex flex-column">

                                    </div>
                                    <div class="status d-flex flex-column">

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 grid-margin d-flex align-items-stretch">
                    <div class="row">
                        <div class="col-12 grid-margin">
                            <div class="card user-visits w-100">
                                <div class="card-body">
                                    <h2 class="card-title">User Visits</h2>
                                    <div class="row mt-5">
                                        <div class="col-6">
                                            <p class="views text-muted">Views</p>
                                            <p class="section">6080 sessions</p>
                                            <a href="#" class="btn btn-secondary btn-sm">More Details</a>
                                        </div>
                                        <div class="col-6">
                                            <div id="sparkline-line-chart"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 global-card">
                            <div class="card bg-warning w-100">
                                <div class="card-body text-white d-flex flex-column align-items-center justify-content-center">
                                    <h2>ADMISSION IS GOING ON</h2>
                                    <p>START YOUR EDUCATIONAL DREAM WITH OUR INSTITUTE. TO FIND A BETTER GOAL OF LIFE WE ARE HERE FOR HELPING YOU</p>
                                    <a href="#" class="btn btn-outline-secondary">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





    @endsection

