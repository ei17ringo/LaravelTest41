<!-- resources/views/tweets/index.blade.php -->

<!-- layout.blade.phpをよみこむ -->
@extends("layout")

@section("content")
<div>
  <p>{{ $tweets[0]['content'] }}</p>
</div>
@endsection
