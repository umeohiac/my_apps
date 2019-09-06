@extends('layouts.master')
@section('content')
<br>

<section class="container-fluid">
    <div class="row">

        <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#review">
            <i class="fa fa-plus"></i> New Review 
        </button> &nbsp;

        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#create_rating">
            <i class="fa fa-plus"></i> New rating title
        </button>
    </div>
    <hr>

    <div class="table-responsive">
        <table class="table-hover table table-condensed table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th> School</th>
                    <th> Location</th>
                    <th> Rating </th>
                    <th> Comment</th>
                    <th> Reviewed by </th>
                </tr>
            </thead>
            <tbody>
                @foreach($reviews as $key=>$r)
                <tr>
                    <td> {{++$key}}</td>
                    <td class="text-capitalize"> {{$r->school->name}} </td>
                    <td class="text-capitalize"> {{$r->school->town}} </td>
                    <td class="text-capitalize"> {{$r->rating->name}} </td>
                    <td class="text-capitalize"> {{$r->comment}} </td>
                    <td class="text-capitalize"> {{$r->user->name}} </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</section>
@stop