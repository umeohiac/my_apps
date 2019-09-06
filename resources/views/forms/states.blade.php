<option value="" selected disabled>- Select -</option>
@foreach($states as $state)
<option value="{{$state->id}}"> {{$state->name}}</option>
@endforeach