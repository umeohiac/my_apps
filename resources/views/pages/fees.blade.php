@extends('layouts.master')
@section('content')
<br>
<?php $i = 0; ?>
<section class="container-fluid">

    <div class="row">
        <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#fee_type">
            <i class="fa fa-plus"></i> New Fee Type
        </button> &nbsp;

        <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#assign_fee">
            <i class="fa fa-plus"></i> Assign Fee to School
        </button>
    </div>
    <hr>

    <div class="table-responsive">
        <table class="table table-bordered table-condensed table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th> School </th>
                    <th> Location </th>
                    <th> Type </th>
                    <th> Grade </th>
                    <th> Amount </th>
                </tr>
            </thead>
            <tbody>
                @foreach($fees as $fee)
                <tr>
                    <td> {{++$i}}</td>
                    <td class='text-capitalize'> {{$fee->school->name}}</td>
                    <td class='text-capitalize'> {{$fee->school->town}}</td>
                    <td class='text-capitalize'> {{$fee->fee_type->name}}</td>
                    <td class='text-capitalize'> {{$fee->grade}}</td>
                    <td> {{$fee->amount}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</section>
@stop