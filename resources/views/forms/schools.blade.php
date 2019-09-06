<option value="" selected disabled>- Select -</option>
@foreach($schools as $sch)
<option value="{{$sch->id}}" class='text-capitalize'> {{$sch->name.' - '.$sch->town }}</option>
@endforeach