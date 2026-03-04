@extends('layouts.master')

@section('title', 'Bảng cửu chương')

@section('content')

@if(isset($error))
    <div class="alert alert-danger">
        {{ $error }}
    </div>
@else
    <h2>Bảng cửu chương {{ $n }}</h2>

    @for ($i = 1; $i <= 10; $i++)
        <p>{{ $n }} x {{ $i }} = {{ $n * $i }}</p>
    @endfor

@endif

@endsection