@extends('layouts.app')
@section('title', 'Jabriel | Dashboard')
@section('content')
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Dashboard</h2>
                                </div>
                            </div>
                        </div>
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
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2023 IsryaqEgy. All rights reserved. Template by <a href="https://github.com/Isryaq/perpustakaan">IsryaqEgy</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
