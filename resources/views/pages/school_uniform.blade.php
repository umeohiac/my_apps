@extends('layouts.master')
@section('content')
<br>
<?php $i = 0; ?>

<section class="container-fluid">

    <div class="row">
        <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#uniforms">
            <i class="fa fa-plus"></i> Assign uniform to school
        </button>
    </div>
    <hr>

    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th> #</th>
                    <th> School </th>
                    <th> Location </th>
                    <th> Color </th>
                    <th> Description </th>
                </tr>
            </thead>
            <tbody>
                @foreach($sch_uniforms as $s)
                <tr>
                    <td> {{++$i}}</td>
                    <td class="text-capitalize">{{$s->school->name}}</td>
                    <td class="text-capitalize">{{$s->school->town}}</td>
                    <td class="text-capitalize">{{$s->color}}</td>
                    <td>{{$s->description}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</section>
@stop