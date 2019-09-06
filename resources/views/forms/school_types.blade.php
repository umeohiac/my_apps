<option value="" disabled selected> -Select- </option>
@foreach($school_types as $c)
<option value="{{$c->id}}" class='text-capitalize'> {{$c->name}}</option>
@endforeach