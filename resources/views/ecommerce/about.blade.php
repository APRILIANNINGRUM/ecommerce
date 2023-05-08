@extends('layouts.ecommerce')

@section('title')
    <title>About Us</title>
@endsection

@section('content')
    <!-- dari sini-->

        <section class="hero_about_section d-flex align-items-center" data-bgimg="{{ asset('furnitures/assets/img/bg/about-hero.png')}}" alt="" height="500px" width="200px">
      
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero_about_content">
                        <h2 class="wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">Selamat Datang di<br> <span>Tempat Kami</span></h2>
                        <ul class="d-flex wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">
                            <li><a href="{{ route('front.index') }}">Home</a></li>
                            <li>></li>
                            <li><a href="{{ route('about') }}">About Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero banner section end -->

    <!-- about luxury section start -->
    <div class="col-md-12">
    <section class="about_luxury_section">
        <div class=container>
          
                    <div class="about_luxury_inner d-flex align-items-center">
                        
                            <div class="luxury_content_top" style="text-align: center;">
                            
                                <h2 class="wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">CV. Kawan Sejati</h2>
                                <h3 class="wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">Interior & Meubel</h3>

                                <p class="mb-30 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum aspernatur doloribus eligendi. Adipisci explicabo ullam natus magnam quae minus aspernatur.</p>
                                <p class="wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1.3s">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora obcaecati aut cumque magni ab consectetur, blanditiis quisquam eveniet maiores quo exercitationem! Voluptates quos fugiat sit.</p>
                              
                            </div>
                        
                    </div>
            </div>
        </div> 
    </section>
    <!-- about luxury section end -->
    <center>
    <div style="width: 100%"><iframe width="90%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=800&amp;height=400&amp;hl=en&amp;q=Jl.%20Roro%20Jonggrang%20XII/no.12,%20Semarang+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/distance-area-calculator.html">distance maps</a></iframe></div></center>

@endsection

@section('js')

@endsection
