@extends('layouts.master')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header-projects py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">Projects</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Projects</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Project Start -->
    <div class="container-fluid py-5 my-5 px-0">
        <div class="text-center mx-auto wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="fw-medium text-uppercase text-primary mb-2">Our Projects</p>
            <h1 class="display-5 mb-5">See What We Have Completed Recently</h1>
        </div>
        <div class="owl-carousel project-carousel bg-dark wow fadeIn" data-wow-delay="0.1s">
            <a class="project-item" href="">
                <img class="img-fluid" src="front/img/project-1.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-primary mb-0">1</h5>
                </div>
            </a>
            <a class="project-item" href="">
                <img class="img-fluid" src="front/img/project-2.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-primary mb-0">2</h5>
                </div>
            </a>
            <a class="project-item" href="">
                <img class="img-fluid" src="front/img/project-3.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-primary mb-0">3</h5>
                </div>
            </a>
            <a class="project-item" href="">
                <img class="img-fluid" src="front/img/project-4.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-primary mb-0">4</h5>
                </div>
            </a>
            <a class="project-item" href="">
                <img class="img-fluid" src="front/img/project-5.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-primary mb-0">5</h5>
                </div>
            </a>
            <a class="project-item" href="">
                <img class="img-fluid" src="front/img/project-6.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-primary mb-0">6</h5>
                </div>
            </a>
        </div>
    </div>
    <!-- Project End -->
        
@stop