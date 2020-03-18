@extends('layout')

@section('content')


    <div class="col-12 col-lg-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Data table</h2>

                <p class="alert-success">
                    <?php
                    $exception = Session::get('exception');
                    if($exception)
                    {
                        echo $exception;
                        Session::put ('exception',null);

                    }



                    ?>
                </p>




                <div class="row">

                    <table id="order-listing" class="table table-striped" style="width:100%;">
                        <thead>
                        <tr>

                            <th>Teachers-Name</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Mail</th>
                            <th>Image</th>
                            <th>Department</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($all_teacher_info as $key)


                            <tr>
                                <td>{{$key->teachers_name}}</td>
                                <td>{{$key->teachers_phone}}</td>
                                <td>{{$key->teachers_address}}</td>
                                <td>{{$key->teachers_email}}</td>
                                {{-- <td> <img style="height: 45px"; width="60px" src="{{$key->student_image}}">    </td> --}}
                                <td>
                                    <img src= "/image/t.png"   height="45px"; width="60px"; style="border-radius: 50%">

                                </td>


                                <td>{{$key->teachers_department}}</td>
                                <td>



                                    <a href="{{URL::to('/tcrview/'.$key->teachers_id )}}">  <button class="btn btn-outline-success">View</button>  </a>

                                    <a href="{{URL::to('/tcredit/'.$key->teachers_id )}}">   <button class="btn btn-outline-primary">Edit</button></a>




                                    <a href="{{URL::to('/tcrdlt/'.$key->teachers_id)}}"   id ="delete">  <button class="btn btn-outline-danger">Delete</button>  </a>



                                </td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



@endsection
