@extends('layouts.master')

@section('content')
    <section id="contact" class="contact">
        <div class="container">
            <h1 class="section-heading">Contact <span>Us</span></h1>
            <p>We provide high standard clean website for your business</p>
            <div class="card-wrapper">
                <div class="card">
                    <i class="fa fa-phone fa-4x"></i>
                    <h1>Call Us On</h1>
                    <h6>+880 121303389</h6>
                </div>
                <div class="card">
                    <i class="fa fa-envelope fa-4x" aria-hidden="true"></i>
                    <h1>Email Me At</h1>
                    <h6>atiq@hiya-it.com</h6>
                </div>

                <div class="card">
                    <i class="fa fa-building fa-4x" aria-hidden="true"></i>
                    <h1>Visit Office</h1>
                    <h6>58/A, Sukrabad Dhaka-1207</h6>
                </div>
            </div>

            <form action="">
                <div class="input-wrap">
                    <input type="text" placeholder="Your Name *">
                    <input type="email" placeholder="Your Email *">
                </div>
                <div class="input-wrap-2">
                    <input type="text" placeholder="Subject">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
                </div>

                <div class="btn-wrapper">
                    <button class="btn btn-primary">Send Message </button>
                </div>
            </form>
        </div>
    </section>
@endsection
