@extends('layouts.main')

@section('container')
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="admin/css/pilly.css">
        <!-- common css -->
        <link rel="stylesheet" href="admin/css/common.css">
        <!-- font-awesome icons  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- unicons icons  -->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
      </head>
    <!-- first section -->
    <div class="first-section d-flex align-items-center justify-content-center" style="background-image: url('images/background.jpeg');">
        <div class="header">
            <h1>Biliard Pool</h1>
            <p>Pool billiards venues commonly offer a relaxed atmosphere where visitors can enjoy playing pool while socializing, chatting with friends, or even watching other games. Some venues also organize tournaments or special events to attract a larger audience.</p>
        </div>
    </div>

     <!-- services section -->
    <div class="section-service">
        <div class="container ">
            <div class="d-flex justify-content-center mb-4">
                <div class="header">
                    <h1>Our Services</h1>
                    <br>
                    <br>
                    <p>Welcome to our premier billiard service! We offer a top-notch billiard experience for enthusiasts of all levels. Our establishment features expertly maintained tables, a variety of cues to suit different playing styles, and a vibrant atmosphere perfect for casual games or competitive play.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                   <div class="service-card text-center">
                    <i class="uil uil-coffee"></i>
                        <h2>Cafe</h2>
                        <p>Cafe its more relaxed atmosphere, coffee, and light foods such as cakes, pastries, sandwiches, or other light snacks.</p>
                   </div>
                </div>
                <div class="col-md-4">
                   <div class="service-card text-center">
                    <i class="uil uil-golf-ball"></i>
                        <h2>Biliard</h2>
                        <p>Billiards is a table game played with a specialized stick called a cue stick, used to strike small colored balls.</p>
                   </div>
                </div>
                <div class="col-md-4">
                   <div class="service-card text-center">
                    <i class="uil uil-17-plus"></i>
                        <h2>Vip Room</h2>
                        <p>Vip room is a space within billiard designed to provide more exclusive services to customers.</p>
                   </div>
                </div>
            </div>
        </div>
    </div>

    <!-- who are we ? section  -->
    <div class="who-we-are bg-light">
        <div class="container">
            <div class="d-flex justify-content-center mb-4">
                <div class="header">
                    <h1>Who We Are?</h1>
                    <br>
                    <p> Whether you're a seasoned player seeking competitive challenges or someone looking to enjoy a leisurely game among friends, Billiards Pool offers a welcoming space for all skill levels.
                        Join us and immerse yourself in the world of precision, strategy, and fun at Billiards Pool Haven."</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <img src="img/kajal.jpg" class="img-fluid rounded-circle" alt="">
                                    <h3>Raffi</h3>
                                    <p class="text-secondary">co-founder</p>
                                   <p>Hello there!</p>
                                   <p>Meet Raffi, the co-founder behind our vibrant pool billiards venue. With a passion for cue sports and a vision to create a hub for enthusiasts, Raffi has been instrumental in shaping our establishment.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <img src="img/vidyut.jpg" class="img-fluid rounded-circle" alt="">
                                    <h3>Madun</h3>
                                    <p class="text-secondary">CTO</p>
                                    <p>Hello there!</p>
                                    <p>Meet Madun, serving as the Chief Technical Officer (CTO) at our pool billiards venue. With a robust tech background and a passion for driving innovation, Madun has played a pivotal role in our technical development and advancements.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <img src="img/yuvi.jpg" class="img-fluid rounded-circle" alt="">
                                    <h3>Egy</h3>
                                    <p class="text-secondary">CEO</p>
                                    <p>Hello everyone!</p>
                                    <p>Let's meet Egy, our passionate CEO at the helm of our pool billiards establishment. With a clear vision for advancing the pool billiards industry, Egy has brought a fresh perspective to the world of this game.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection