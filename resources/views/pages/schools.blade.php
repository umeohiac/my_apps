@extends('layouts.master')
@section('content')
<br>
<section class="container-fluid">
    <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#curriculums">
        <i class="fa fa-plus"></i> New Curriculum
    </button> &nbsp;
    <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#schTypes">
        <i class="fa fa-plus"></i> New School Type
    </button>
    <br>
    <br>

    <ul class="nav nav-pills nav-fill" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="pills-all_schools-tab" data-toggle="pill" href="#pills-schools" role="tab" aria-controls="pills-home" aria-selected="true"> <i class="fa fa-graduation-cap"></i> Schools </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" id="pills-new_school-tab" data-toggle="pill" href="#pills-new" role="tab" aria-controls="pills-profile" aria-selected="false"> <i class="fa fa-plus"></i> New School</a>
        </li>
    </ul>

    <div class="tab-content" id='pills-tabContent'>
        <!-- content -->

        <section class="tab-pane fade show active" id="pills-schools" role="tabpanel" aria-labelledby="pills-contact-tab">
<br>
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-condensed">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th> Name </th>
                            <th> Email</th>
                            <th> Type</th>
                            <th> Address</th>
                            <th> State</th>
                            <th> Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($schools as $key=>$sch)
                        <tr>
                            <td> {{++$key}}</td>
                            <td> {{$sch->name}} </td>
                            <td> {{$sch->email}}</td>
                            <td> {{$sch->school_type->name}}</td>
                            <td> {{$sch->address}}</td>
                            <td> {{$sch->state_id}}</td>
                            <td> <a href="/{{$sch->id}}/schools" class="btn btn-outline-info"> View Info</a> </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section> <!-- end 1st tab-content -->

        <section class="tab-pane fade" id="pills-new" role="tabpanel" aria-labelledby="pills-contact-tab">

            <section id="reg_school" class='card'>
                <!-- start sch form -->
                <div class="card-header">
                    <h5 class="text-center"> Add a New School </h5>
                </div>
                <div class="card-body">

                    <form method='POST' action='/register_school' enctype="multipart/form-data">
                        @csrf()
                        <div class="form-group">
                            <label for=""> School Name* </label>
                            <input type="text" name='name' required class='form-control'>
                        </div>

                        <div class="form-group">
                            <label for=""> School Email* </label>
                            <input type="email" name='email' required class='form-control'>
                        </div>

                        <div class="form-group">
                            <label for=""> School Website </label>
                            <input type="text" name='website' class='form-control'>
                        </div>

                        <div class="form-group">
                            <label for=""> School Phone* </label>
                            <input type="text" name='phone' required class='form-control'>
                        </div>

                        <div class="form-group">
                            <label for=""> School Motto* </label>
                            <input type="text" name='motto' class='form-control'>
                        </div>

                        <div class="form-group">
                            <label for=""> School Type* </label>
                            <select name="school_type_id" required class="form-control">
                                @include('forms.school_types')
                            </select>
                        </div>

                        <div class="form-group">
                            <label for=""> Curriculum Type* </label>
                            <select name="curriculum_id" required class="form-control">
                                @include('forms.curriculum')
                            </select>
                        </div>

                        <div class="form-group">    
                            <label for=""> School Address* </label>
                            <input type="text" name='address' required class='form-control'>
                        </div>

                        <div class="form-group">
                            <label for=""> School City* </label>
                            <input type="text" name='city' required class='form-control'>
                        </div>

                        <div class="form-group">
                            <label for=""> School Town* </label>
                            <input type="text" name='town' required class='form-control'>
                        </div>

                        <div class="form-group">
                            <label for=""> Local Government Area* </label>
                            <input type="text" name='local_government' required class='form-control'>
                        </div>

                        <div class="form-group">
                            <label for=""> Postal Code* </label>
                            <input type="number" name='postal_code' class='form-control'>
                        </div>

                        <div class="form-group">
                            <label for=""> Students Population* </label>
                            <input type="number" name='students_population'  class='form-control'>
                        </div>

                        <div class="form-group">
                            <label for=""> Staff Population* </label>
                            <input type="number" name='staff_population' class='form-control'>
                        </div>

                        <div class="form-group">
                            <label for=""> School Logo </label>
                            <input type="file" accept='image/*' name='logo' class='form-control'>
                        </div>

                        <div class="form-group">
                            <label for=""> State* </label>
                            <input required class='form-control' name="state_id" id='state'>                      
                        </div>

                        <div class="form-group">
                            <label for=""> Country* </label>
                            <select required class='form-control' name="country_id" id='country'>
                                @include('forms.country')
                            </select>
                        </div>

                        <div class="form-group">
                            <label for=""> Government Approved* </label>
                            <select required class='form-control' name="govt_approved">
                                <option selected disabled value="">-Select -</option>
                                <option value="1"> Yes </option>
                                <option value="0"> No </option>
                            </select>
                        </div>

                        <div class="form-group">
                            <button type='submit' class="btn btn-outline-success"> Save </button> &nbsp;
                            <button type='reset' class="btn btn-outline-info"> Reset Form </button>
                        </div>

                    </form>
                </div>

            </section>
            <br>
            <!--- end sch form -->

        </section>

    </div>


</section>
@include('forms.new_schoolTypes')
@include('forms.new_curriculum')
@stop