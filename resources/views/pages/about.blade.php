<!-- resources/views/pages/about.blade.php -->

<!-- layout.blade.phpをよみこむ -->
@extends("layout")

@section("content")
  <h1>About this page</h1>
  <h1>{{ $first_name }} {{ $last_name }}</h1>
@endsection
