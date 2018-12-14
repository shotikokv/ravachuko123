<!doctype html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ravachuko.Ge</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">




    {{--bootstrap--}}
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>





        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    </head>
    <body>
        <div id="app">
            <header class="with-background">
                <div class="top-nav container">
                    <div class="top-nav-left">
                        <div class="logo"><a href="http://localhost:8000/">Ravachuko.Ge</a></div>
                        {{ menu('main', 'partials.menus.main') }}
                    </div>
                    <div class="top-nav-right">
                        @include('partials.menus.main-right')
                    </div>
                </div> <!-- end top-nav -->
                <div class="hero container">
                    <div class="hero-copy">
                        <h1>ძებნა</h1>

                        </div>
                    </div> <!-- end hero-copy -->


            </header>

            <div class="featured-section">

                <div class="container">
                    <h1 class="text-center">Top Gift's</h1>

                    <div class="accordian">
                        <ul>
                            <li>
                                <div class="image_title">
                                    <a href="https://cimages.prvd.com/is/image/ProvideCommerce/RED18_18REF14_ENVIRO_SQ?$PCRProductImage$&wid=233">KungFu Panda</a>
                                </div>
                                <a href="https://www.youtube.com/channel/UCXTfDJ60DBmA932Du6B1ydg">
                                    <img src="https://cimages.prvd.com/is/image/ProvideCommerce/RED18_18REF14_ENVIRO_SQ?$PCRProductImage$&wid=233"/>
                                </a>
                            </li>
                            <li>
                                <div class="image_title">
                                    <a href="https://www.youtube.com/channel/UCXTfDJ60DBmA932Du6B1ydg">Toy Story 2</a>
                                </div>
                                <a href="https://www.youtube.com/channel/UCXTfDJ60DBmA932Du6B1ydg">
                                    <img src="http://thecodeplayer.com/uploads/media/40Ly3VB.jpg"/>
                                </a>
                            </li>
                            <li>
                                <div class="image_title">
                                    <a href="https://www.youtube.com/channel/UCXTfDJ60DBmA932Du6B1ydg">Wall-E</a>
                                </div>
                                <a href="https://www.youtube.com/channel/UCXTfDJ60DBmA932Du6B1ydg">
                                    <img src="http://thecodeplayer.com/uploads/media/00kih8g.jpg"/>
                                </a>
                            </li>
                            <li>
                                <div class="image_title">
                                    <a href="#">Up</a>
                                </div>
                                <a href="https://www.youtube.com/channel/UCXTfDJ60DBmA932Du6B1ydg">
                                    <img src="http://thecodeplayer.com/uploads/media/2rT2vdx.jpg"/>
                                </a>
                            </li>
                            <li>
                                <div class="image_title">
                                    <a href="#">Cars 2</a>
                                </div>
                                <a href="https://www.youtube.com/channel/UCXTfDJ60DBmA932Du6B1ydg">
                                    <img src="http://thecodeplayer.com/uploads/media/8k3N3EL.jpg"/>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="hero-buttons">



                    {{-- <div class="tabs">
                        <div class="tab">
                            Featured
                        </div>
                        <div class="tab">
                            On Sale
                        </div>
                    </div> --}}

                    <div class="products text-center">
                        @foreach ($products as $product)
                            <div class="product">
                                <a href="{{ route('shop.show', $product->slug) }}"><img src="{{ productImage($product->image) }}" alt="product"></a>
                                <a href="{{ route('shop.show', $product->slug) }}"><div class="product-name">{{ $product->name }}</div></a>
                                <div class="product-price">{{ $product->presentPrice() }}</div>
                            </div>
                        @endforeach

                    </div> <!-- end products -->

                    <div class="text-center button-container">
                        <a href="{{ route('shop.index') }}" class="button">ყველა საჩუქრის ნახვა</a>
                    </div>

                </div> <!-- end container -->

            </div> <!-- end featured-section -->

            <blog-posts></blog-posts>

            @include('partials.footer')

        </div> <!-- end #app -->
        <script src="js/app.js"></script>
    </body>
</html>
