@extends('layout')

@section('content')
    <div class="col-12 col-lg-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Data table</h2>
                <div class="row">
                    <table id="order-listing" class="table table-striped" style="width:100%;">
                        <thead>
                        <tr>
                            <th>St-Roll #</th>
                            <th>St-Name</th>
                            <th>Phone</th>
                            <th>Image</th>
                            <th>Address</th>
                            <th>Department</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($eee_Student_info as $key)


                            <tr>



                                <td>{{$key->student_roll}}</td>
                                <td>{{$key->student_name}}</td>
                                <td>{{$key->student_phone}}</td>
                                <td> <img style="height: 45px"; width="60px" src="{{$key->student_image}}">    </td>


                                <td>{{$key->student_address}}</td>
                                <td>{{$key->student_department}}</td>


                                <td>



                                    <button class="btn btn-outline-primary">View</button>
                                    <button class="btn btn-outline-primary">Edit</button>
                                    <button class="btn btn-outline-primary">Delete</button>
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
