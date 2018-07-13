@if (count($errors) > 0)
 <div class="">
   @foreach($errors->all() as $error)
    <ul  id="errorUl">
      <li> {{$error}} </li>
    </ul>
   @endforeach
 </div>
@endif

@if ( Session::has('message'))
  <ul id="succesUl">
    <li>
     {{ Session::get('message')}}
   </li>
 </ul> 
@endif
