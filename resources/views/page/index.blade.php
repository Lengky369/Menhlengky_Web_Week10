@extends('page.layout')
@section('title') Home @endsection
@section('content')
<div class="container px-4 px-lg-5">
 <div class="row gx-4 gx-lg-5 justify-content-center">
  <div class="col-md-10 col-lg-8 col-xl-7">
   <!-- Post preview-->
   @foreach ($latestPosts as $post)
   <div class="post-preview">
    <h2 class="post-title"> <a href="/view/{{$post->id}}">{{ $post->title }} </a> </h2>
    <h3 class="post-subtitle">{{ $post->content }}</h3>

    <p class="post-meta">
     Posted by
     <a href="#!">{{ $post->author }}</a>
    </p>
   </div>
   <!-- Divider-->
   <hr class="my-4" />
   @endforeach

   <div class="d-flex justify-content-end mb-4">
    {{ $latestPosts->links() }}
   </div>
  </div>
 </div>
</div>
@endsection