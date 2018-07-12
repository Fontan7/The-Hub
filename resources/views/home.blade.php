@extends('master')

@section('content')

  <section class="row new-post">
    <div class="col-md-6 offset-md-3">
      <header>
        <h3>Say something!</h3>
      </header>

      <form class="" action="{{ route('post.create') }}" method="post">
        <div class="form-group">
          <textarea class"form-control" name="body" id="new-post" rows="5" placeholder="Your Post" ></textarea>
        </div>
        <button class="btn btn-primary" type="submit" name="button"> Post! </button>
        <input type="hidden" name="_token" value="{{ Session::token() }}">
      </form>
    </div>
  </section>

  <section class="row posts">
    <div class="col-md-6 offset-md-3">
      <header>
        <h3>Other Posts</h3>
      </header>
       <article class="post">
         <p>A mi hermano le gustan las milanesas de pollo, pero yo prefiero comer crayones.</p>
       <div class="info">
         Posted by YO MOMMA on 15 Aug 2018
       </div>
       <div class="interaction">
         <a href="#">Like </a> |
         <a href="#">Dislike </a> |
         <a href="#">Comment </a> |
         <a href="#">Delete </a> |
       </div>
     </article>
     <article class="post">
       <p>Esto esta mas hardcodeado que el carajo.</p>
     <div class="info">
       Posted by YO MOMMA on 15 Aug 2018
     </div>
     <div class="interaction">
       <a href="#">Like </a> |
       <a href="#">Dislike </a> |
       <a href="#">Comment </a> |
       <a href="#">Delete </a> |
     </div>
   </article>
   <article class="post">
     <p>Where is mai spaget!!!!!</p>
   <div class="info">
     Posted by YO MOMMA on 15 Aug 2018
   </div>
   <div class="interaction">
     <a href="#">Like </a> |
     <a href="#">Dislike </a> |
     <a href="#">Comment </a> |
     <a href="#">Delete </a> |
   </div>
 </article>
    </div>

  </section>


@endsection
