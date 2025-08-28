@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('styles/obligacion.css') }}">
<script src="{{asset('js/obligacion.js') }}"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<div class="main-container">

    {{-- Menú lateral --}}
    @include('menu_general.menu_general_usuario')

    


@endsection
