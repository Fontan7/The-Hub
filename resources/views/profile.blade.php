@extends ('master')

@section('title')
    Profile
@endsection


@section('content')

 <section class="row new-post">
   <div class="col-md-6 offset-md-3">
     <header>
       <h3> Your Profile </h3>
     </header>
     <form class="" action="{{ route('profile/save') }}" enctype="multipart/form-data" method="post">
       <div class="form-group">
         <label for="username"> Username </label>
         <input class="form-control" id="username" type="text" name="username" value="{{ $user->username }}">
       </div>
       <div class="form-group">
         <label for="image"> Image only </label>
         <input class="form-control" id="image" type="file" name="image">
       </div>
       <button class="btn btn-primary" type="submit" name="button"> Save changes </button>
       <input type="hidden" name="_token" value="{{ Session::token() }}">
     </form>
   </div>
 </section>

 @if (Storage::disk('local')->has($user->username . '-' . $user->id . 'jpg'))
   <section class="row new-post">
     <div class="col-md-6 offset-md-3">
       <img src="{{ route('profile/image', ['filename' => $user->username . '-' . $user->id . 'jpg'])}}" alt="">
     </div>
   </section>
@endif

<footer class="footer-nav">
    <ul>
      <li>© Copyright 2018<li>
      </ul>
      <ul>
        <li>
          <a href="https://www.facebook.com/fontan.fontan.31">
            <i class="fab fa-facebook"> </i>
          </a>
        </li>
        <li>
          <a href="https://discord.gg/PYMYDzz">
            <i class="fab fa-discord"></i>
          </a>
        </li>
        <li>
          <a href="https://www.instagram.com/fontan.fontan">
            <i class="fab fa-instagram"></i>
          </a>
        </li>
        <li>
          <a href="https://linkedin.com/in/nahuel-fontan-02839715a">
            <i class="fab fa-linkedin"></i>
          </a>
        </li>
      </ul>
</footer>

@endsection
