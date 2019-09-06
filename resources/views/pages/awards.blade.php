@extends('layouts.master')
@section('content')
<br>


<section class="container-fluid">

    <div class="row">
        <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#award">
            <i class="fa fa-plus"></i> Add New
        </button>
    </div>
    <hr>

    <div class="table-responsive">
        <table class="table table-hover table-bordered table-condensed">
            <thead>
                <tr>
                    <th>#</th>
                    <th> School</th>
                    <th> Location</th>
                    <th> Awards </th>
                    <th> Awarded By </th>
                    <th> Award Description </th>
                </tr>
            </thead>
            <tbody>
                @foreach($awards as $i=>$a)
                <tr>
                    <td> {{++$i}}</td>
                    <td> {{$a->school->name}} </td>
                    <td> {{$a->school->town}} </td>
                    <td> {{$a->total}}</td>
                    <td> {{$a->awarded_by}}</td>
                    <td> {{$a->description}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</section>
@stop