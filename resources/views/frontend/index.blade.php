@extends('layouts.app')

@section('content')
<div class="container fade-in">
    <div class="slider">
        <div class="slides">
            <img src="{{ asset('images/slider1.jpg') }}" alt="Slider Image 1">
            <img src="{{ asset('images/slider2.jpg') }}" alt="Slider Image 2">
            <img src="{{ asset('images/slider3.jpg') }}" alt="Slider Image 3">
            <img src="{{ asset('images/slider4.jpg') }}" alt="Slider Image 4">
            <img src="{{ asset('images/slider5.jpg') }}" alt="Slider Image 5">
        </div>
        <button class="slide-button prev">&lt;</button>
        <button class="slide-button next">&gt;</button>
    </div>
    <div class="content-section">
        <h1>Welcome to Pratibha Parlor</h1>
        <p>Experience the best services and ambiance.</p>
        <button>Book Now</button>
    </div>
</div>
@endsection


<script>
    document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelector('.slides');
    const images = document.querySelectorAll('.slides img');
    let index = 0;

    function showNextSlide() {
        index++;
        if (index >= images.length) {
            index = 0;
        }
        slides.style.transform = `translateX(${-index * 100}%)`;
    }

    function showPrevSlide() {
        index--;
        if (index < 0) {
            index = images.length - 1;
        }
        slides.style.transform = `translateX(${-index * 100}%)`;
    }

    document.querySelector('.slide-button.next').addEventListener('click', showNextSlide);
    document.querySelector('.slide-button.prev').addEventListener('click', showPrevSlide);

    setInterval(showNextSlide, 5000); // Change slide every 5 seconds
});

</script>
