@extends('layouts.app')

@section('title', 'Home')

@section('section')
    <div class="first-container row">

        <div class="col-lg-6">
            <button>SHOP NOW</button>
            <img class="banner" src="{{asset('storage/Images/banner2.jpg')}}" alt="">
        </div>

        <div class="col-lg-6">
            <img class="banner"  src="{{asset('storage/Images/banner1.jpeg')}}" alt="">
            <h1>SKINCARE</h1>
            <h2>Natural Beauty</h2>
        </div>
    </div>
    <div class="second_container ">

        <div class="row gy-5">
            <?php
            $cosrx='cosrx';
            $somebymi='somebymi';
            $farmstay='farmstay';
            $ekel='ekel';
            ?>
            <div class="col-sm-6 col-lg-3 reveal reveal_one">
                <div class="card">
                    <div class="">
                        <a href="Products.php?id=<?php echo md5($cosrx)?>"><img class="card_image" src="{{asset('storage/Images/IMG_1838.JPG')}}" alt=""></a>
                    </div>
                    <div class="card-footer">
                        <a href="Products.php?id=<?php echo md5($cosrx)?>"><img class="card_company" src="{{asset('storage/Images/cosrx-logo.png')}}" alt=""></a>
                        <p class="card_paragraph">Lorem ipsum</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3 reveal reveal_two">
                <div class="card">
                    <div class="">
                        <a href="Products.php?id=<?php echo md5($farmstay)?>"><img class="card_image" src="{{asset('storage/Images/IMG_1837.JPG')}}"  alt=""> </a>
                    </div>
                    <div class="card-footer">
                        <a href="Products.php?id=<?php echo md5($farmstay)?>"><img class="card_company" src="{{asset('storage/Images/farmstay-logo.png')}}" alt=""></a>
                        <p class="card_paragraph">Lorem ipsum</p>
                    </div>

                </div>
            </div>

            <div class="col-sm-6 col-lg-3 reveal reveal_three">
                <div class="card">
                    <div class="">
                        <a href="Products.php?id=<?php echo md5($ekel)?>"><img class="card_image" src="{{asset('storage/Images/IMG_1838.JPG')}}"  alt=""></a>
                    </div>
                    <div class="card-footer">
                        <a href="Products.php?id=<?php echo md5($ekel)?>"><img class="card_company" src="{{asset('storage/Images/ekel-logo.png')}}" alt=""> </a>
                        <p class="card_paragraph">Lorem ipsum</p>
                    </div>

                </div>
            </div>


            <div class="col-sm-6 col-lg-3 reveal reveal_four">
                <div class="card">
                    <div class="">
                        <a href="Products.php?id=<?php echo md5($somebymi)?>"><img class="card_image" src="{{asset('storage/Images/IMG_1837.JPG')}}"  alt=""></a>
                    </div>
                    <div class="card-footer">
                        <a href="Products.php?id=<?php echo md5($somebymi)?>"><img class="card_company" src="{{asset('storage/Images/somebymi-logo.png')}}" alt=""></a>
                        <p class="card_paragraph">Lorem ipsum</p>
                    </div>

                </div>

            </div>
        </div>

    </div>
    <div class="third_container row">
        <h2>BRANDS</h2>
        <div class="row gy-5">


            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <img class="brands" src="{{asset('storage/Images/cosrx-logo.png')}}" alt="">
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <img  class="brands" src="{{asset('storage/Images/ekel-logo.png')}}" alt="">
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <img class="brands" src="{{asset('storage/Images/farmstay-logo.png')}}" alt="">
                    </div>
                </div>
            </div>

            <div class=" col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <img class="brands" src="{{asset('storage/Images/somebymi-logo.png')}}" alt="">
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <img class="brands" src="{{asset('storage/Images/farmstay-logo.png')}}" alt="">
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <img class="brands" src="{{asset('storage/Images/farmstay-logo.png')}}" alt="">
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <img class="brands" src="{{asset('storage/Images/farmstay-logo.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <img class="brands" src="{{asset('storage/Images/farmstay-logo.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <img class="brands" src="{{asset('storage/Images/farmstay-logo.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <img class="brands" src="{{asset('storage/Images/farmstay-logo.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <img class="brands" src="{{asset('storage/Images/farmstay-logo.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <img class="brands" src="{{asset('storage/Images/farmstay-logo.png')}}" alt="">
                    </div>
                </div>
            </div>



        </div>
    </div>

    <div class="fourth_container row">
        <h2>RECOMMENDED CATEGORIES</h2>
        <div class="row">

            <div class="col-lg-2">
                <a href="Products.php?id=<?php echo md5('Masks')?>">

                    <div class="catagory_container">
                        <img class="catagory_img" src="{{asset('storage/Images/l.png')}}" alt="">
                        <span>Masks</span>
                    </div>


                </a>
            </div>


            <div class="col-lg-2">
                <a href="Products.php?id=<?php echo md5('Face Exfoliates')?>">

                    <div class="catagory_container">
                        <img class="catagory_img" src="{{asset('storage/Images/l.png')}}" alt="">
                        <span>Face Exfoliates</span>
                    </div>


                </a>
            </div>


            <div class="col-lg-2">
                <a href="Products.php?id=<?php echo md5('Face cleansers')?>">
                    <div class="catagory_container">
                        <img class="catagory_img" src="{{asset('storage/Images/l.png')}}" alt="">
                        <span>Face cleansers</span>
                    </div>



                </a>
            </div>


            <div class="col-lg-2">
                <a href="Products.php?id=<?php echo md5('Face Serums')?>">

                    <div class="catagory_container">
                        <img class="catagory_img" src="{{asset('storage/Images/l.png')}}" alt="">
                        <span>Face Serums</span>
                    </div>


                </a>
            </div>


            <div class="col-lg-2">
                <a href="Products.php?id=<?php echo md5('Face Creams')?>">

                    <div class="catagory_container">
                        <img class="catagory_img" src="{{asset('storage/Images/l.png')}}" alt="">
                        <span>Face Creams</span>
                    </div>


                </a>
            </div>

            <div class="col-lg-2">
                <a href="Products.php?id=<?php echo md5('Suncreams')?>">

                    <div class="catagory_container">
                        <img class="catagory_img" src="{{asset('storage/Images/l.png')}}" alt="">
                        <span>Suncreams</span>
                    </div>


                </a>
            </div>


        </div>
    </div>

    <script>

        window.addEventListener('scroll',reveal);
        function reveal()
        {
            var reveals=document.querySelectorAll('.reveal');
            for(var i=0;i<reveals.length;i++)
            {
                var windowheight=window.innerHeight;
                var revealtop=reveals[i].getBoundingClientRect().top;
                var revealpoint=150;
                if(revealtop<windowheight -revealpoint)
                {
                    reveals[i].classList.add('active');

                }
                else{
                    reveals[i].classList.remove('active');
                }
            }
        }


    </script>
@endsection
