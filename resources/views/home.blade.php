@extends('master')

@section('title')
   Home
@endsection

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
        <article class="post" data-postid="{{ $post->id }}">
          <p> {{ $post->body }}</p>
          <div class="info">
            Posted by {{ $post->user->username }} on {{ $post->created_at}}
          </div>
          <div class="interaction">
            <a href="#">Like </a> |
            <a href="#">Dislike </a> |
            @if(Auth::user() == $post->user)
              |
              <a href="#" class="edit"> Edit </a> |
              <a href="{{ route('post/delete', ['post_id' => $post->id]) }}">Delete </a> |
            @endif
          </div>
        </article>
      @endforeach

    </div>
  </section>

  <div id="edit-modal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form >
          <div class="form-group">
            <label for="post-body"> Change your post here </label>
            <textarea id="post-body" class="form-control" name="post-body" rows="5"></textarea>
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button id='modal-save' type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

 <script type="text/javascript">

   var token = '{{ Session::token() }}';
   var url = '{{ route('edit') }}'

 </script>

@endsection
