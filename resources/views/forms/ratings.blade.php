<div>
    @foreach($ratings as $rating)
    <div class="custom-control custom-radio custom-control-inline">
        <input name="rating_id" id="rating_{{$rating->id}}" type="radio" class="custom-control-input" value="{{$rating->id}}">
        <label for="rating_{{$rating->id}}" class="custom-control-label text-capitalize"> {{$rating->name}}</label>
    </div>
    @endforeach
</div>