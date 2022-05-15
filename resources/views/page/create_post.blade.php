@extends('page.layout')
@section('title') Create Post @endsection
@section('content')
<a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
</a>
<main>
 <div class="mx-4">
  <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
   <header class="text-center">
    <h2 class="text-2xl font-bold uppercase mb-1">
     Create a Post
    </h2>
   </header>
   <form action="">
    <div class="mb-6">
     <label for="title" class="inline-block text-lg mb-2">Title</label>
     <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title" />
    </div>
    <div class="mb-6">
     <label for="author" class="inline-block text-lg mb-2">Author</label>
     <input type="text" class="border border-gray-200 rounded p-2 w-full" name="author" />
    </div>
    <div class="mb-6">
     <label for="content" class="inline-block text-lg mb-2">
      Content
     </label>
     <textarea class="border border-gray-200 rounded p-2 w-full" name="content" rows="10"></textarea>
    </div>
    <div class="mb-6">
     <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
      Post
     </button>
    </div>
   </form>
  </div>
 </div>
</main>
@endsection