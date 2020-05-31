@extends('layouts.app1')
@section('content')
    
    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <h2 class="title">AINET CONFERENCES
                        </h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">AINET CONFERENCES
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Background Curve -->
        <div class="breadcrumb-bg-curve">
            <img src="./img/core-img/curve-5.png" alt="">
        </div>
    </div>
    <!-- ***** Breadcrumb Area End ***** -->

    <!-- ***** Blog Area Start ***** -->
    <div class="uza-blog-area section-padding-80">
        <div class="container">
            <div class="row">
                <!-- Single Blog Post -->
                <div class="col-12 col-lg-4">
                    <div class="single-blog-post bg-img mb-80" style="background-image: url(./img/bg-img/8.jpg);">
                        <!-- Post Content -->
                        <div class="post-content">
                            {{-- <span class="post-date"><span>23</span> August, 2018</span> --}}
                            <a href="#" class="post-title">ISSN 2393-8439 (Online) / 2393-8668 (Print)
                            </a>
                            <p>A series of papers containing research studies, factual analyses, theoretical arguments and policy/ programme proposals aimed at stimulating and contributing to debates and discussions on English language education in India.</p>
                            {{-- <a href="#" class="read-more-btn">Read More <i class="arrow_carrot-2right"></i></a> --}}
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="col-12 col-lg-4">
                    <div class="single-blog-post bg-img mb-80" style="background-image: url(./img/bg-img/9.jpg);">
                        <!-- Post Content -->
                        <div class="post-content">
                            {{-- <span class="post-date"><span>13</span> December, 2018</span> --}}
                            <a href="#" class="post-title">AINET OP No. 1/ 2014 (Print)</a>
                            <p>Martin Wedell-Initial English Teacher Education and English Curriculum Goals: Bridging the Gap
                                <a href="files/OP1.pdf" class="btn uza-btn btn-3">Download AINET OP 1</a>

                            </p>
                            {{-- <a href="#" class="read-more-btn">Read More <i class="arrow_carrot-2right"></i></a> --}}
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="col-12 col-lg-4">
                    <div class="single-blog-post bg-img mb-80" style="background-image: url(./img/bg-img/10.jpg);">
                        <!-- Post Content -->
                        <div class="post-content">
                            {{-- <span class="post-date"><span>08</span> July, 2018</span> --}}
                            <a href="#" class="post-title">AINET OP No. 2/ 2016
                            </a>
                            <p>Krishna Dixit-Teacher Motivation: A Conceptual Overview
                                <a href="files/OP2.pdf" class="btn uza-btn btn-3">Download AINET OP 2</a>

                            </p>
                            {{-- <a href="#" class="read-more-btn">Read More <i class="arrow_carrot-2right"></i></a> --}}
                        </div>
                    </div>
                </div>
                
            </div>
            
            <div class="row">
                {{-- <div class="col-12 text-center">
                    <a href="#" class="btn uza-btn btn-3">Load More</a>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- ***** Blog Area End ***** -->

    <!-- ***** Newsletter Area Start ***** -->
    <section class="uza-newsletter-area">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                {{-- <!-- Newsletter Content -->
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="nl-content mb-80">
                        <h2>Subscribe to our Newsletter</h2>
                        <p>Subscribe our newsletter gor get notification about new updates, etc...</p>
                    </div>
                </div>
                <!-- Newsletter Form -->
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="nl-form mb-80">
                        <form action="#" method="post">
                            <input type="email" name="nl-email" value="" placeholder="Your Email">
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div> --}}
            </div>
            <!-- Border Bottom -->
            <div class="border-line"></div>
        </div>
    </section>
    <!-- ***** Newsletter Area End ***** -->

    @endsection
