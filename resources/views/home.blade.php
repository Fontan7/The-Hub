@extends('master')

@section('content')

  <section class="row new-post">
    <div class="col-md-6 offset-md-3">
      <header>
        <h3>Say something!</h3>
      </header>

      <form class=" col-md-12" action="{{ route('post.create') }}" method="post">
        <div class="form-group">
          <textarea class"form-control" name="body" id="new-post" rows="5" placeholder="Your Post" > </textarea>
          @include('includes/message-box')
        </div>
        <button class="btn btn-primary" type="submit" name="button"> Create Post! </button>
        <input type="hidden" name="_token" value="{{ Session::token() }}">
      </form>
    </div>
  </section>

  <section class="row posts col-md-9 offset-md-3">
    <div class="">
      <header>
        <h3>Other Posts</h3>
      </header>
      @foreach ($posts as $post)
        <article class="post">
          <p> {{ $post->body }}</p>
          <div class="info">
            Posted by {{ $post->user->username }} on {{ $post->created_at}}
          </div>
          <div class="interaction">
            <a href="#">Like </a> |
            <a href="#">Dislike </a> |
            <a href="#">Comment </a> |
            <a href="{{ route('post/delete', ['post_id' => $post->id]) }}">Delete </a> |
          </div>
        </article>
      @endforeach

    </div>
  </section>
@endsection
