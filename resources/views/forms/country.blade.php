<option value="" disabled selected> -Select- </option>
@foreach($countries as $country)
<option value="{{$country->id}}"> {{$country->name}}</option>
@endforeach