@extends('layouts.master')
@section('content')
<br>
<section class="container-fluid">
    <center>
        <div class="cad">

            <h5 class='text-center'>You are Viewing Information for
                <span class='text-info text-uppercase'><b> {{$id->name}} </b></span> </h5>

            <div class="">
                <!-- body -->
                <div class="justify-content-center d-flex">
                    @if($id->logo == null)
                    <span class="fa fa-flag fa-4x"></span>
                    @else
                    <img src="{{asset('uploads/school_logo/'.$id->logo)}}" alt="" style='width:auto; height: 150px;' class="img-responsive">
                    @endif
                </div>

                <br>

                <section class="">
                    <ul class="nav nav-pills nav-fill" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-info" role="tab" aria-controls="pills-home" aria-selected="true"> <i class="fa fa-graduation-cap"></i> Info</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-location" role="tab" aria-controls="pills-profile" aria-selected="false"> <i class="fa fa-map"></i> Location</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-uniform" role="tab" aria-controls="pills-contact" aria-selected="false"> <i class="fa fa-user"></i> Uniform</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-fees" role="tab" aria-controls="pills-fees" aria-selected="false"> <i class="fa fa-money"></i> Fees </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-reviews" role="tab" aria-controls="pills-reviews" aria-selected="false"> <i class="fa fa-edit"></i> Reviews </a>
                        </li>
                    </ul>

                    <div class="tab-content" id="pills-tabContent">
                        <!-- Tab content --->
                        <section class="tab-pane fade show active" id="pills-info" role="tabpanel" aria-labelledby="pills-home-tab">

                            <table class="table-condensed table table-bordered">
                                <tr>
                                    <th> Name </th>
                                    <td class='text-uppercase'> {{$id->name}}</td>
                                </tr>

                                <tr>
                                    <th> Email </th>
                                    <td> {{$id->email}}</td>
                                </tr>

                                <tr>
                                    <th> Motto </th>
                                    <td> {{$id->motto}}</td>
                                </tr>

                                <tr>
                                    <th class='text-capitalize'> Phone </th>
                                    <td> {{$id->phone}}</td>
                                </tr>

                                <tr>
                                    <th class='text-capitalize'> website </th>
                                    <td> {{$id->website}}</td>
                                </tr>
                                <tr>
                                    <th class='text-capitalize'> Type </th>
                                    <td> {{$id->school_type->name}}</td>
                                </tr>

                                <tr>
                                    <th class='text-capitalize'> Curriculum </th>
                                    <td> {{$id->curriculum->name}}</td>
                                </tr>

                                <tr>
                                    <th class='text-capitalize'> students population </th>
                                    <td> {{$id->students_population}}</td>
                                </tr>

                                <tr>
                                    <th class='text-capitalize'> staff population </th>
                                    <td> {{$id->staff_population}}</td>
                                </tr>

                                <tr>
                                    <th class='text-capitalize'> Government Approved </th>
                                    <td>
                                        @if($id->govt_approved)
                                        <span class='text-success'>Yes </span>
                                        @else
                                        <span class='text-danger'> No </span>
                                        @endif
                                    </td>
                                </tr>
                            </table>
                        </section>

                        <section class="tab-pane fade" id="pills-location" role="tabpanel" aria-labelledby="pills-profile-tab">

                            <table class="table-condensed table table-bordered">

                                <tr>
                                    <th class='text-capitalize'> address </th>
                                    <td> {{$id->address}}</td>
                                </tr>
                                <tr>
                                    <th class='text-capitalize'> Postal Code </th>
                                    <td> {{$id->postal_code}}</td>
                                </tr>
                                <tr>
                                    <th class='text-capitalize'> city </th>
                                    <td> {{$id->city}}</td>
                                </tr>
                                <tr>
                                    <th class='text-capitalize'> town </th>
                                    <td> {{$id->town}}</td>
                                </tr>
                                <tr>
                                    <th class='text-capitalize'> local government </th>
                                    <td> {{$id->local_government}}</td>
                                </tr>
                                <tr>
                                    <th class='text-capitalize'> state </th>
                                    <td> {{$id->state_id}}</td>
                                </tr>
                                <tr>
                                    <th class='text-capitalize'> country </th>
                                    <td> {{$id->country->name}}</td>
                                </tr>
                            </table>
                        </section>

                        <section class="tab-pane fade" id="pills-uniform" role="tabpanel" aria-labelledby="pills-contact-tab">
                            @if($id->sch_uniform->count())
                            @foreach($id->sch_uniform as $uniform)
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="justify-content-center d-flex">
                                        <img src="{{asset('uploads/school_uniforms/'.$uniform->photo)}}" alt="" class="img-responsive" style='width:auto; height:100px;'>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <p class="text-left"><b>Color </b> <br> {{$uniform->color}} </p>
                                    <p class="text-left"><b> Description </b> <br> {{$uniform->description}} </p>
                                </div>
                            </div>
                            <hr>
                            @endforeach

                            @else
                            <p class="text-center text-danger"> <br> No Information </p>
                            @endif

                        </section>

                        <section class="tab-pane fade" id="pills-fees" role="tabpanel" aria-labelledby="pills-fees-tab">
                            <div class="table-responsive">
                                @if($id->fee_school->count())
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th> Type </th>
                                            <th> Grade </th>
                                            <th> Amount </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($id->fee_school as $index=>$fee)
                                        <tr>
                                            <td> {{ ++$index}}</td>
                                            <td class='text-capitalize'> {{ $fee->fee_type->name}}</td>
                                            <td class='text-capitalize'> {{ $fee->grade}}</td>
                                            <td> {{ $fee->amount}}</td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                @else
                                <p class="text-center text-danger"> <br> No Information </p>
                                @endif
                            </div>

                        </section>

                        <section class="tab-pane fade" id="pills-reviews" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <br>
                            @if($id->review->count())
                            @foreach($id->review as $review)
                            <div class="row">
                                <div class="col-md-2 col-xs-2">
                                    <p class="text-center hidden-md">
                                        <span class="fa fa-user-circle text-dark fa-3x"></span>
                                        <br> {{$review->user->name}}         
                                    </p>

                                </div>
                                <div class="col-md-9 col-xs-9">
                                    <p class="text-left"><b> Date: </b> {{$review->created_at->diffForHumans()}} </p>
                                    <p class="text-left"><b> Rated: </b> {{$review->rating->name}}</p>
                                    <p class="text-justify"><b> Comments: </b> <br> {{$review->comment}} </p>
                                </div>
                            </div>
                            <hr>
                            @endforeach

                            @else
                            <p class="text-center text-danger"> <br>No Reviews Yet... </p>
                            @endif
                        </section>

                    </div> <!-- /Tab-content -->

                </section>

            </div> <!-- /body -->
        </div>
    </center>
</section>
@stop