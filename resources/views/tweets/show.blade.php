<!-- resources/views/tweets/index.blade.php -->

<!-- layout.blade.phpをよみこむ -->
@extends("layout")

@section("content")
<div>
  <p>{{ $tweet->content }}</p>
</div>
@endsection
