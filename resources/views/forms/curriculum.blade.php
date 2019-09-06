<option value="" disabled selected> -Select- </option>
@foreach($curriculums as $d)
<option value="{{$d->id}}" class='text-capitalized'> {{$d->name}}</option>
@endforeach