<!DOCTYPE html>
<html lang ="en">
@include('website.layouts.head');

<body>
    <!----main---------->
    <section id="main">
    <nav>
        <a href="#" class="logo">FRANKLIN </a>
    <div class="toggle"></div>
        <ul class="menu">
          <li><a href="#main" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#contact-form">Contact</a></li>
        </ul>
        <a href="#" class="lang">En</a>
    </nav>
        <div class="name">
            <p>Hello</p>
            <h1>I'am <span class="p-color">Franklin</span> Uche</h1>
            <p class="details">In this Video I am gonna show you how to create a personal website with all pages.After Watching this tutorial you will be able to craete website like this</p>
            <a href="#" class="cv-btn">Download Cv</a>

        </div>
        <div class="social">
             <a href="https://wa.me/+2348112919120?text=i want you to buid a site for me"><i class="fab fa-whatsapp"></i></a>
             <a href="#"><i class="fab fa-twitter"></i></a>
             <a href="#"><i class="fab fa-facebook"></i></a>
             <a href="#"><i class="fab fa-github"></i></a>

        </div>
     <div class="arrow">

     </div>

    </section>
    <section id="about">
        <div class="about-text">
            <h1>About Us</h1>
            <h2>Freelancing Frontend Developer</h2>
            <p>Enjoy the ultimate web design editor. Divi is like Photoshop or Sketch for the web. It brings an advanced design interface to WordPress that both beginners and experts will fall in love with. It's incredibly smart, super flexible, amazingly powerful and visual by nature. This is how designing for the web is meant to be done.</p>
            <button>More Details</button>
        </div>
        <div class="about-model">
    <img src="{{asset('frontend/images/3.png')}}" alt="model"/>
        </div>

    </section>
    <section id="services">
        <!--heading-------------->
        <div class="s-heading">
            <h1>Services</h1>
            <p>Here Is The Some Servies Which We Provide You.</p>
        </div>
        <!--services-box-container--------->
        <div class="b-container">
            <!--box-1---------------->
            <div class="s-box">
                <!--img------------->
                <div class="s-b-img">
                    <!--type----------->
                    <div class="s-type">Front-End</div>
                    <!--name------->
                    <img src="{{asset('frontend/images/s1.png')}}">
                </div>
                <!--text----------------->
                <div class="s-b-text">
                    <a href="#">With Divi, every part of your website is customizable. You have complete freedom to create the perfect website for you or your clients. Easily change colors, fonts and text styles. Apply stunning animations.</a>
                </div>
            </div>
            <!--box-2---------------->
            <div class="s-box">
                <!--img------------->
                <div class="s-b-img">
                    <!--type----------->
                    <div class="s-type">Back-End</div>
                    <!--name------->
                    <img src="{{asset('frontend/images/s2.png')}}">
                </div>
                <!--text----------------->
                <div class="s-b-text">
                    <a href="#">With Divi, every part of your website is customizable. You have complete freedom to create the perfect website for you or your clients. Easily change colors, fonts and text styles. Apply stunning animations.</a>
                </div>
            </div>
            <!--box-3---------------->
            <div class="s-box">
                <!--img------------->
                <div class="s-b-img">
                    <!--type----------->
                    <div class="s-type">SEO</div>
                    <!--name------->
                    <img src="{{asset('frontend/images/s3.jpg')}}">
                </div>
                <!--text----------------->
                <div class="s-b-text">
                    <a href="#">With Divi, every part of your website is customizable. You have complete freedom to create the perfect website for you or your clients. Easily change colors, fonts and text styles. Apply stunning animations.</a>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio">
        <!--heading----------->
        <h1 class="p-headind">Portfolio</h1>
        <!--portfolio-container------------>
        <div class="p-container">
            <!--portfolio-box-1-------->
            <div class="p-box">
                <!--text--------->
                <div class="overlay-text">
                    <h1>Writting</h1>
                    <p>Client Project</p>
                </div>
                <!--bg-img------------->
                <img src="{{asset('frontend/images/w1.jpg')}}">

            </div>
            <!--portfolio-box-2-------->
            <div class="p-box">
                <!--text--------->
                <div class="overlay-text">
                    <h1>Ideas</h1>
                    <p>Client Project</p>
                </div>
                <!--bg-img------------->
                <img src="{{asset('frontend/images/w2.jpg')}}">
            </div>
            <!--portfolio-box-3-------->
            <div class="p-box">
                <!--text--------->
                <div class="overlay-text">
                    <h1>Music</h1>
                    <p>Client Project</p>
                </div>
                <!--bg-img------------->
                <img src="{{asset('frontend/images/w3.jpg')}}">
            </div>
            <!--portfolio-box-4-------->
            <div class="p-box">
                <!--text--------->
                <div class="overlay-text">
                    <h1>Time</h1>
                    <p>Client Project</p>
                </div>
                <!--bg-img------------->
                <img src="{{asset('frontend/images/w4.jpg')}}">
            </div>
            <!--portfolio-box-5-------->
            <div class="p-box">
                <!--text--------->
                <div class="overlay-text">
                    <h1>Creative</h1>
                    <p>Client Project</p>
                </div>
                <!--bg-img------------->
                <img src="{{asset('frontend/images/w5.jpg')}}">
            </div>
            <!--portfolio-box-6-------->
            <div class="p-box">
                <!--text--------->
                <div class="overlay-text">
                    <h1>Books</h1>
                    <p>Client Project</p>
                </div>
                <!--bg-img------------->
                <img src="{{asset('frontend/images/w6.jpg')}}">
            </div>

        </div>
    </section>
    <section id="contact-btn">
        <h1>If  you have Any Project in mind, them Do contact me please </h1>
        <a href="#contact-form">Contact me</a>
        <div class="point">

        </div>
    </section>
    <section id="contact-form">
    <form name="contact" method="POST" data-netlify="true">
        {{ csrf_field() }}
                <div class="contact-left">
                    <h1 class="c-l-heading"><span class="c-border">Write Us</span> </h1>
                    <div class="f-name">

                             <font>Name</font>
                             <input type="text" placeholder="Full Name">
                         </div>
                    <div class="f-email">

                             <font>Email</font>
                             <input type="Email" placeholder="Eample@gmail.com">
                         </div>
                </div>
                <div class="contact-right">
                    <div class="message">
                       <font>Message</font>
                        <textarea name="message" rows="5" cols="20" placeholder="Write Message........."></textarea>
                    </div>
                    <button> submit</button>
                </div>

        </form>

    </section>

    <script type="text/javascript" src="{{asset('js/JQuery3.3.1.js')}}"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('.toggle').click(function(){
                $('.toggle').toggleClass('active')

                $('nav ul').toggleClass('active-menu')


            })
        });
    </script>
    </body>
</html>
