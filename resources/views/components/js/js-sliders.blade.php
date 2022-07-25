@extends('components.layouts.base')

@section('content')

<x-js.js-sliders-sample />

<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="{{ asset('js/main.js')  }}"></script>

@endsection