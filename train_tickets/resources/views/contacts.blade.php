@extends('layouts.app')

@section('title')
Trainiata
@endsection
@include('include.header')
@section('content')
<section class="contact-us">
        <div class="container">
            <h2></h2>  
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>
          
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                  <img src="../img/contact-01.jpg" alt="Los Angeles" style="width:100%;">
                  <div class="carousel-caption">
                    <h3>Lorem, ipsum dolor.</h3>
                    <p style="color: crimson;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat.</p>
                  </div>
                </div>
          
                <div class="item">
                  <img src="../img/contact-02.jpg" alt="Chicago" style="width:100%;">
                  <div class="carousel-caption">
                    <h3>Lorem, ipsum.</h3>
                    <p style="color: crimson;">Lorem ipsum dolor sit amet consectetur adipisicing!</p>
                  </div>
                </div>
              
                <div class="item">
                  <img src="../img/train-board-bg.jpg" alt="New york" style="width:100%;">
                  <div class="carousel-caption">
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                    <p style="color: crimson;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur beatae possimus praesentium!</p>
                  </div>
                </div>
              </div>
          
              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>
    </section>



    <section class="contact-form">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Leave us a message</h2>
                    </div>
                </div>
                <div class="col-md-6 col-md-offset-3">
                    <form id="contact" action="#" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <fieldset>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <input name="email" type="text" class="form-control" id="email" placeholder="Your email..." required="">
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="btn">Submit Your Message</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection



