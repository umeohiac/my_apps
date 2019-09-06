
     @include('forms.award')
     @include('forms.uniforms')
     @include('forms.reviews')
     @include('forms.create_fee')
     @include('forms.create_ratings')
     @include('forms.assign_fee_sch')

     @guest
     @include('forms.login')
     @include('forms.register')
     @endguest

     @include('flash::message')

@if($errors->all())
 @foreach($errors->all() as $err)
     <div class="alert alert-danger" role="alert">
          {{$err}}
     </div>
 @endforeach
@endif