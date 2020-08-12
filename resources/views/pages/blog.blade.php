@extends('layouts.master')

@section('content')
    <section id="blog" class="blog">
        <div class="container">
            <h1 class="section-heading"><span>Our</span> Blog</h1>
            <p>We provide high standard clean website for your business</p>
            <div class="card-wrapper">
                <div class="card">
                    <div class="img-wrapper">
                        <img src="{{ asset('images/article-ph-1.png') }}" alt="">
                    </div>
                    <div class="card-content">
                        <a href="#">
                            <h1>Occusamus et iuso odio</h1>
                        </a>
                        <span>May 12, 2020</span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates animi commodi temporibus nostrum perspiciatis neque quaerat hic totam. Pariatur, voluptates id aut magnam laborum amet asperiores reprehenderit eos ipsa similique.</p>
                        <a href="#">Read More</a>
                    </div>
                </div>

                <div class="card">
                    <div class="img-wrapper">
                        <img src="{{ asset('images/article-ph-2.png') }}" alt="">
                    </div>
                    <div class="card-content">
                        <a href="#">
                            <h1>Occusamus et iuso odio</h1>
                        </a>
                        <span>May 12, 2020</span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates animi commodi temporibus nostrum perspiciatis neque quaerat hic totam. Pariatur, voluptates id aut magnam laborum amet asperiores reprehenderit eos ipsa similique.</p>
                        <a href="#">Read More</a>
                    </div>
                </div>

                <div class="card">
                    <div class="img-wrapper">
                        <img src="{{ asset('images/article-ph-3.png') }}" alt="">
                    </div>
                    <div class="card-content">
                        <a href="#">
                            <h1>Occusamus et iuso odio</h1>
                        </a>
                        <span>May 12, 2020</span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates animi commodi temporibus nostrum perspiciatis neque quaerat hic totam. Pariatur, voluptates id aut magnam laborum amet asperiores reprehenderit eos ipsa similique.</p>
                        <a class="read-more" href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
