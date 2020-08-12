@extends('layouts.master')

@section('content')
    <section id="about" class="about">
        <div class="container flex items-center">
            <div class="flex-1">
                <img class="about-me-image" src="{{ asset('images/about-us.png') }}" alt="">
            </div>
            <div class="flex-1">
                <h1>About <span>Me</span></h1>
                <h3>Hello, I'm Atiqur Rahman</h3>
                <p>There is no borderline in age, place, time and period to learn new knowledge. In my perception human mind is alive till s/he tries to learn new, gather and share knowledge, get some experience from it and do creative use from these things.

                </p>
                <div class="social">
                    <a href="https://facebook.com/fa.atiq2" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </section>
@endsection
