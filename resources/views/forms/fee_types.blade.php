<option value="" selected disabled>- Select - </option>
@foreach($fee_types as $fee)
<option value="{{$fee->id}}" class='text-capitalize'> {{$fee->name}}</option>
@endforeach