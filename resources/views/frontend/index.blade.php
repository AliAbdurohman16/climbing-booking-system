@extends('frontend.layouts.main')

@section('content')

    @include('frontend.layouts.header')

        <!-- Hero Start -->
        @include('frontend.hero')
        <!-- Hero End -->

        <!-- About Start -->
        @include('frontend.about')
        <!-- About End -->

        <!-- Benefit Start -->
        @include('frontend.benefit')
        <!-- Benefit End -->

        <!-- Destination Start -->
        @include('frontend.destination')
        <!-- Destination End -->

        <!-- FAQ Start -->
        @include('frontend.faq')
        <!-- FAQ End -->

        <!-- Testimonials Start -->
        @include('frontend.testimonials')
        <!-- Testimonials End -->
@endsection
