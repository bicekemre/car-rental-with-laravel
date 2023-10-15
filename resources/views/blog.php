<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>
    <!-- Main style -->
    <link rel="stylesheet" href="css/turbo.style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="fakeloader">
    <div class="spinner5">
        <div class="cube1"></div>
        <div class="cube2"></div>
    </div>
</div>
<div id="main-wrapper">
    <header class="header">
        <nav class="navbar navbar-default" id="sticker">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="./img/company-logo.png" alt=""/></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="index.html" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">Home <span class="ion-chevron-down"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="index-two.html">Home Version Two</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="car-listing-grid.html" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">Listing <span class="ion-chevron-down"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="car-listing-grid.html">Car listing grid</a></li>
                                <li><a href="car-listing-list.html">Car listing list</a></li>
                                <li><a href="listing-detail.html">Listing details</a></li>
                            </ul>
                        </li>
                        <li class="dropdown active">
                            <a href="blog-listing.html" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">Blog <span class="ion-chevron-down"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-listing.html">Blog Listing</a></li>
                                <li><a href="post-single.html">Blog Post</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">Page <span class="ion-chevron-down"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="about-us.html">About</a></li>
                                <li><a href="contact-us.html">Contact us</a></li>
                                <li><a href="checkout.html">checkout</a></li>
                                <li><a href="shopping-cart.html">shopping cart</a></li>
                                <li><a href="registration.html">Registration</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="elements.html">Elements</a>
                        </li>
                        <li class="login-register-link right-side-link"><a href="registration.html">
                                <i class="icon_lock-open_alt"></i>Login</a>
                        </li>
                        <li class="dropdown right-side-link">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">ENG<span class="ion-chevron-down"></span></a>
                            <ul class="dropdown-menu with-language">
                                <li><a href="#">Fr</a></li>
                                <li><a href="#">De</a></li>
                            </ul>
                        </li>
                        <li class="dropdown right-side-link last">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">USD<span class="ion-chevron-down"></span></a>
                            <ul class="dropdown-menu with-language">
                                <li><a href="#">USD</a></li>
                                <li><a href="#">Eur</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </header> <!-- end header -->

    <div class="rq-page-content">
        <div class="rq-content-block">
            <div class="container">
                <div class="rq-title-container bredcrumb-title text-center">
                    <h2 class="rq-title">Blog post</h2>
                    <ol class="breadcrumb rq-subtitle">
                        <li><a href="#">Home</a></li>
                        <li class="active">Blog Post</li>
                    </ol>
                </div>
                <div class="rq-blog-listing">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#all"  role="tab" data-toggle="tab">All</a></li>
                        <li role="presentation"><a href="#business"  role="tab" data-toggle="tab">Business</a></li>
                        <li role="presentation"><a href="#lifestyle"  role="tab" data-toggle="tab">LifeStyle</a></li>
                        <li role="presentation"><a href="#entertainment"  role="tab" data-toggle="tab">Entertainment</a></li>
                        <li role="presentation"><a href="#property"  role="tab" data-toggle="tab">Technology</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="all">
                            <div class="rq-listing-wrapper">
                                <div class="rq-listing-single">
                                    <div class="rq-listing-standard-image-post">
                                        <img src="img/blog-listing/listing-img.png" alt="">
                                        <h3 class="rq-listing-title"><a href="#">title of single post with image format</a></h3>
                                        <div class="rq-listing-meta">
                                            <span class="author-name"><a href="#">Logan cee</a></span>
                                            <span class="v-line">|</span>
                                            <span class="date"><a href="#">February, 15th, 2016</a></span>
                                            <span class="v-line">|</span>
                                            <span class="category"><a href="#">Property</a></span>
                                        </div>
                                        <p class="post-content"><span class="first-line">Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                          suscipit lobortis nisl ut aliquip ex ea commodo.</span>autem vel eum iriure dolor in heninndrerit in
                                            vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at
                                            vero eros et accumsan et iusto.Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation...
                                        </p>
                                        <a class="continue-btn rq-btn rq-btn-normal" href="#">Continue <i class="arrow_right"></i></a>
                                    </div>
                                </div>

                                <div class="rq-listing-single">
                                    <div class="rq-listing-gallery-post">
                                        <div class="rq-gallery-content">
                                            <div class="details-slider owl-carousel">
                                                <div class="item">
                                                    <img src="img/blog-listing/listing-img2.png" alt="">
                                                </div>
                                                <div class="item">
                                                    <img src="img/blog-listing/listing-img.png" alt="">
                                                </div>
                                                <div class="item">
                                                    <img src="img/blog-listing/listing-img3.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="rq-listing-title"><a href="#">title of single post with gallery format</a></h3>
                                        <div class="rq-listing-meta">
                                            <span class="author-name"><a href="#">Admin</a></span>
                                            <span class="v-line">|</span>
                                            <span class="date"><a href="#">February, 15th, 2016</a></span>
                                            <span class="v-line">|</span>
                                            <span class="category"><a href="#">Property</a></span>
                                        </div>
                                        <p class="post-content"><span class="first-line">Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                          suscipit lobortis nisl ut aliquip ex ea commodo.</span>autem vel eum iriure dolor in heninndrerit in
                                            vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at
                                            vero eros et accumsan et iusto.Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation...
                                        </p>
                                        <a class="continue-btn rq-btn rq-btn-normal" href="#">Continue <i class="arrow_right"></i></a>
                                    </div>
                                </div>

                                <div class="rq-listing-single">
                                    <div class="rq-listing-standard-video-post">
                                        <div class="video-wrapper">
                                            <div class="feature-image">
                                                <img src="img/blog-listing/listing-img3.png" alt="">
                                                <a href="#">
                                                    <i class="ion-ios-play"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <h3 class="rq-listing-title"><a href="#">title of single post with video format</a></h3>
                                        <div class="rq-listing-meta">
                                            <span class="author-name"><a href="#">Logan cee</a></span>
                                            <span class="v-line">|</span>
                                            <span class="date"><a href="#">February, 15th, 2016</a></span>
                                            <span class="v-line">|</span>
                                            <span class="category"><a href="#">Property</a></span>
                                        </div>
                                        <p class="post-content"><span class="first-line">Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                          suscipit lobortis nisl ut aliquip ex ea commodo.</span>autem vel eum iriure dolor in heninndrerit in
                                            vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at
                                            vero eros et accumsan et iusto.Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation...
                                        </p>
                                        <a class="continue-btn rq-btn rq-btn-normal" href="#">Continue <i class="arrow_right"></i></a>
                                    </div>
                                </div>
                                <div class="rq-listing-single">
                                    <div class="rq-listing-standard-video-post">
                                        <div class="video-wrapper fitvids-wrapper">
                                            <iframe width="560" height="300" src="https://www.youtube.com/embed/b8RrXzWPmSc" allowfullscreen></iframe>
                                        </div>
                                        <h3 class="rq-listing-title"><a href="#">title of single post with video format</a></h3>
                                        <div class="rq-listing-meta">
                                            <span class="author-name"><a href="#">Logan cee</a></span>
                                            <span class="v-line">|</span>
                                            <span class="date"><a href="#">February, 15th, 2016</a></span>
                                            <span class="v-line">|</span>
                                            <span class="category"><a href="#">Property</a></span>
                                        </div>
                                        <p class="post-content"><span class="first-line">Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                          suscipit lobortis nisl ut aliquip ex ea commodo.</span>autem vel eum iriure dolor in heninndrerit in
                                            vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at
                                            vero eros et accumsan et iusto.Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation...
                                        </p>
                                        <a class="continue-btn rq-btn rq-btn-normal" href="#">Continue <i class="arrow_right"></i></a>
                                    </div>
                                </div>

                                <div class="rq-listing-single">
                                    <div class="rq-listing-standard-image-post">
                                        <div class="video-wrapper">
                                            <iframe id="sc-widget" width="500" height="166" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F1848538&show_artwork=true"></iframe>
                                        </div>
                                        <h3 class="rq-listing-title"><a href="#">title of single post with audio format</a></h3>
                                        <div class="rq-listing-meta">
                                            <span class="author-name"><a href="#">Logan cee</a></span>
                                            <span class="v-line">|</span>
                                            <span class="date"><a href="#">February, 15th, 2016</a></span>
                                            <span class="v-line">|</span>
                                            <span class="category"><a href="#">Property</a></span>
                                        </div>
                                        <p class="post-content"><span class="first-line">Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                          suscipit lobortis nisl ut aliquip ex ea commodo.</span>autem vel eum iriure dolor in heninndrerit in
                                            vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at
                                            vero eros et accumsan et iusto.Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation...
                                        </p>
                                        <a class="continue-btn rq-btn rq-btn-normal" href="#">Continue <i class="arrow_right"></i></a>
                                    </div>
                                </div>
                                <div class="rq-pagination">
                                    <ul class="rq-pagination-list-secondary">
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- /.tabe pane for all -->
                        <div role="tabpanel" class="tab-pane fade" id="property">
                            <div class="rq-listing-wrapper">
                                <div class="rq-listing-single">
                                    <div class="rq-listing-standard-image-post">
                                        <img src="img/blog-listing/listing-img2.png" alt="">
                                        <h3 class="rq-listing-title"><a href="#">title of single post with image format</a></h3>
                                        <div class="rq-listing-meta">
                                            <span class="author-name"><a href="#">Logan cee</a></span>
                                            <span class="v-line">|</span>
                                            <span class="date"><a href="#">February, 15th, 2016</a></span>
                                            <span class="v-line">|</span>
                                            <span class="category"><a href="#">Property</a></span>
                                        </div>
                                        <p class="post-content"><span class="first-line">Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                          suscipit lobortis nisl ut aliquip ex ea commodo.</span>autem vel eum iriure dolor in heninndrerit in
                                            vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at
                                            vero eros et accumsan et iusto.Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation...
                                        </p>
                                        <a class="continue-btn rq-btn rq-btn-normal" href="#">Continue <i class="arrow_right"></i></a>
                                    </div>
                                </div>

                                <div class="rq-listing-single">
                                    <div class="rq-listing-standard-image-post">
                                        <img src="img/blog-listing/listing-img.png" alt="">
                                        <h3 class="rq-listing-title"><a href="#">title of single post with image format</a></h3>
                                        <div class="rq-listing-meta">
                                            <span class="author-name"><a href="#">Logan cee</a></span>
                                            <span class="v-line">|</span>
                                            <span class="date"><a href="#">February, 15th, 2016</a></span>
                                            <span class="v-line">|</span>
                                            <span class="category"><a href="#">Property</a></span>
                                        </div>
                                        <p class="post-content"><span class="first-line">Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                          suscipit lobortis nisl ut aliquip ex ea commodo.</span>autem vel eum iriure dolor in heninndrerit in
                                            vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at
                                            vero eros et accumsan et iusto.Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation...
                                        </p>
                                        <a class="continue-btn rq-btn rq-btn-normal" href="#">Continue <i class="arrow_right"></i></a>
                                    </div>
                                </div>

                                <div class="rq-listing-single">
                                    <div class="rq-listing-standard-image-post">
                                        <img src="img/blog-listing/listing-img3.png" alt="">
                                        <h3 class="rq-listing-title"><a href="#">title of single post with image format</a></h3>
                                        <div class="rq-listing-meta">
                                            <span class="author-name"><a href="#">Logan cee</a></span>
                                            <span class="v-line">|</span>
                                            <span class="date"><a href="#">February, 15th, 2016</a></span>
                                            <span class="v-line">|</span>
                                            <span class="category"><a href="#">Property</a></span>
                                        </div>
                                        <p class="post-content"><span class="first-line">Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                          suscipit lobortis nisl ut aliquip ex ea commodo.</span>autem vel eum iriure dolor in heninndrerit in
                                            vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at
                                            vero eros et accumsan et iusto.Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation...
                                        </p>
                                        <a class="continue-btn rq-btn rq-btn-normal" href="#">Continue <i class="arrow_right"></i></a>
                                    </div>
                                </div>

                                <div class="rq-listing-single">
                                    <div class="rq-listing-standard-video-post">
                                        <div class="video-wrapper">
                                            <div class="feature-image">
                                                <img src="img/blog-listing/listing-img3.png" alt="">
                                                <a href="#">
                                                    <i class="ion-ios-play"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <h3 class="rq-listing-title"><a href="#">title of single post with video format</a></h3>
                                        <div class="rq-listing-meta">
                                            <span class="author-name"><a href="#">Logan cee</a></span>
                                            <span class="v-line">|</span>
                                            <span class="date"><a href="#">February, 15th, 2016</a></span>
                                            <span class="v-line">|</span>
                                            <span class="category"><a href="#">Property</a></span>
                                        </div>
                                        <p class="post-content"><span class="first-line">Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                          suscipit lobortis nisl ut aliquip ex ea commodo.</span>autem vel eum iriure dolor in heninndrerit in
                                            vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at
                                            vero eros et accumsan et iusto.Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation...
                                        </p>
                                        <a class="continue-btn rq-btn rq-btn-normal" href="#">Continue <i class="arrow_right"></i></a>
                                    </div>
                                </div>
                                <div class="rq-pagination">
                                    <ul class="rq-pagination-list-secondary">
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="business">
                            <div class="rq-listing-wrapper">
                                <div class="rq-listing-single">
                                    <div class="rq-listing-standard-image-post">
                                        <img src="img/blog-listing/listing-img3.png" alt="">
                                        <h3 class="rq-listing-title"><a href="#">title of single post with image format</a></h3>
                                        <div class="rq-listing-meta">
                                            <span class="author-name"><a href="#">Logan cee</a></span>
                                            <span class="v-line">|</span>
                                            <span class="date"><a href="#">February, 15th, 2016</a></span>
                                            <span class="v-line">|</span>
                                            <span class="category"><a href="#">Property</a></span>
                                        </div>
                                        <p class="post-content"><span class="first-line">Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                          suscipit lobortis nisl ut aliquip ex ea commodo.</span>autem vel eum iriure dolor in heninndrerit in
                                            vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at
                                            vero eros et accumsan et iusto.Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation...
                                        </p>
                                        <a class="continue-btn rq-btn rq-btn-normal" href="#">Continue <i class="arrow_right"></i></a>
                                    </div>
                                </div>

                                <div class="rq-listing-single">
                                    <div class="rq-listing-standard-image-post">
                                        <img src="img/blog-listing/listing-img3.png" alt="">
                                        <h3 class="rq-listing-title"><a href="#">title of single post with image format</a></h3>
                                        <div class="rq-listing-meta">
                                            <span class="author-name"><a href="#">Logan cee</a></span>
                                            <span class="v-line">|</span>
                                            <span class="date"><a href="#">February, 15th, 2016</a></span>
                                            <span class="v-line">|</span>
                                            <span class="category"><a href="#">Property</a></span>
                                        </div>
                                        <p class="post-content"><span class="first-line">Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                          suscipit lobortis nisl ut aliquip ex ea commodo.</span>autem vel eum iriure dolor in heninndrerit in
                                            vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at
                                            vero eros et accumsan et iusto.Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation...
                                        </p>
                                        <a class="continue-btn rq-btn rq-btn-normal" href="#">Continue <i class="arrow_right"></i></a>
                                    </div>
                                </div>

                                <div class="rq-listing-single">
                                    <div class="rq-listing-standard-image-post">
                                        <img src="img/blog-listing/listing-img2.png" alt="">
                                        <h3 class="rq-listing-title"><a href="#">title of single post with image format</a></h3>
                                        <div class="rq-listing-meta">
                                            <span class="author-name"><a href="#">Logan cee</a></span>
                                            <span class="v-line">|</span>
                                            <span class="date"><a href="#">February, 15th, 2016</a></span>
                                            <span class="v-line">|</span>
                                            <span class="category"><a href="#">Property</a></span>
                                        </div>
                                        <p class="post-content"><span class="first-line">Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                          suscipit lobortis nisl ut aliquip ex ea commodo.</span>autem vel eum iriure dolor in heninndrerit in
                                            vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at
                                            vero eros et accumsan et iusto.Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation...
                                        </p>
                                        <a class="continue-btn rq-btn rq-btn-normal" href="#">Continue <i class="arrow_right"></i></a>
                                    </div>
                                </div>

                                <div class="rq-listing-single">
                                    <div class="rq-listing-standard-video-post">
                                        <div class="video-wrapper">
                                            <div class="feature-image">
                                                <img src="img/blog-listing/listing-img3.png" alt="">
                                                <a href="#">
                                                    <i class="ion-ios-play"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <h3 class="rq-listing-title"><a href="#">title of single post with video format</a></h3>
                                        <div class="rq-listing-meta">
                                            <span class="author-name"><a href="#">Logan cee</a></span>
                                            <span class="v-line">|</span>
                                            <span class="date"><a href="#">February, 15th, 2016</a></span>
                                            <span class="v-line">|</span>
                                            <span class="category"><a href="#">Property</a></span>
                                        </div>
                                        <p class="post-content"><span class="first-line">Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                          suscipit lobortis nisl ut aliquip ex ea commodo.</span>autem vel eum iriure dolor in heninndrerit in
                                            vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at
                                            vero eros et accumsan et iusto.Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation...
                                        </p>
                                        <a class="continue-btn rq-btn rq-btn-normal" href="#">Continue <i class="arrow_right"></i></a>
                                    </div>
                                </div>
                                <div class="rq-pagination">
                                    <ul class="rq-pagination-list-secondary">
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="lifestyle">
                            <div class="rq-listing-wrapper">
                                <div class="rq-listing-single">
                                    <div class="rq-listing-standard-video-post">
                                        <div class="video-wrapper">
                                            <div class="feature-image">
                                                <img src="img/blog-listing/listing-img.png" alt="">
                                                <a href="#">
                                                    <i class="ion-ios-play"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <h3 class="rq-listing-title"><a href="#">title of single post with video format</a></h3>
                                        <div class="rq-listing-meta">
                                            <span class="author-name"><a href="#">Logan cee</a></span>
                                            <span class="v-line">|</span>
                                            <span class="date"><a href="#">February, 15th, 2016</a></span>
                                            <span class="v-line">|</span>
                                            <span class="category"><a href="#">Property</a></span>
                                        </div>
                                        <p class="post-content"><span class="first-line">Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                          suscipit lobortis nisl ut aliquip ex ea commodo.</span>autem vel eum iriure dolor in heninndrerit in
                                            vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at
                                            vero eros et accumsan et iusto.Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation...
                                        </p>
                                        <a class="continue-btn rq-btn rq-btn-normal" href="#">Continue <i class="arrow_right"></i></a>
                                    </div>
                                </div>
                                <div class="rq-listing-single">
                                    <div class="rq-listing-standard-image-post">
                                        <img src="img/blog-listing/listing-img.png" alt="">
                                        <h3 class="rq-listing-title"><a href="#">title of single post with image format</a></h3>
                                        <div class="rq-listing-meta">
                                            <span class="author-name"><a href="#">Logan cee</a></span>
                                            <span class="v-line">|</span>
                                            <span class="date"><a href="#">February, 15th, 2016</a></span>
                                            <span class="v-line">|</span>
                                            <span class="category"><a href="#">Property</a></span>
                                        </div>
                                        <p class="post-content"><span class="first-line">Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                          suscipit lobortis nisl ut aliquip ex ea commodo.</span>autem vel eum iriure dolor in heninndrerit in
                                            vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at
                                            vero eros et accumsan et iusto.Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation...
                                        </p>
                                        <a class="continue-btn rq-btn rq-btn-normal" href="#">Continue <i class="arrow_right"></i></a>
                                    </div>
                                </div>

                                <div class="rq-listing-single">
                                    <div class="rq-listing-standard-image-post">
                                        <img src="img/blog-listing/listing-img2.png" alt="">
                                        <h3 class="rq-listing-title"><a href="#">title of single post with image format</a></h3>
                                        <div class="rq-listing-meta">
                                            <span class="author-name"><a href="#">Logan cee</a></span>
                                            <span class="v-line">|</span>
                                            <span class="date"><a href="#">February, 15th, 2016</a></span>
                                            <span class="v-line">|</span>
                                            <span class="category"><a href="#">Property</a></span>
                                        </div>
                                        <p class="post-content"><span class="first-line">Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                          suscipit lobortis nisl ut aliquip ex ea commodo.</span>autem vel eum iriure dolor in heninndrerit in
                                            vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at
                                            vero eros et accumsan et iusto.Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation...
                                        </p>
                                        <a class="continue-btn rq-btn rq-btn-normal" href="#">Continue <i class="arrow_right"></i></a>
                                    </div>
                                </div>

                                <div class="rq-listing-single">
                                    <div class="rq-listing-standard-image-post">
                                        <img src="img/blog-listing/listing-img3.png" alt="">
                                        <h3 class="rq-listing-title"><a href="#">title of single post with image format</a></h3>
                                        <div class="rq-listing-meta">
                                            <span class="author-name"><a href="#">Logan cee</a></span>
                                            <span class="v-line">|</span>
                                            <span class="date"><a href="#">February, 15th, 2016</a></span>
                                            <span class="v-line">|</span>
                                            <span class="category"><a href="#">Property</a></span>
                                        </div>
                                        <p class="post-content"><span class="first-line">Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                          suscipit lobortis nisl ut aliquip ex ea commodo.</span>autem vel eum iriure dolor in heninndrerit in
                                            vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at
                                            vero eros et accumsan et iusto.Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation...
                                        </p>
                                        <a class="continue-btn rq-btn rq-btn-normal" href="#">Continue <i class="arrow_right"></i></a>
                                    </div>
                                </div>

                                <div class="rq-pagination">
                                    <ul class="rq-pagination-list-secondary">
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="entertainment">
                            <div class="rq-listing-wrapper">
                                <div class="rq-listing-single">
                                    <div class="rq-listing-standard-image-post">
                                        <img src="img/blog-listing/listing-img3.png" alt="">
                                        <h3 class="rq-listing-title"><a href="#">title of single post with image format</a></h3>
                                        <div class="rq-listing-meta">
                                            <span class="author-name"><a href="#">Logan cee</a></span>
                                            <span class="v-line">|</span>
                                            <span class="date"><a href="#">February, 15th, 2016</a></span>
                                            <span class="v-line">|</span>
                                            <span class="category"><a href="#">Property</a></span>
                                        </div>
                                        <p class="post-content"><span class="first-line">Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                          suscipit lobortis nisl ut aliquip ex ea commodo.</span>autem vel eum iriure dolor in heninndrerit in
                                            vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at
                                            vero eros et accumsan et iusto.Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation...
                                        </p>
                                        <a class="continue-btn rq-btn rq-btn-normal" href="#">Continue <i class="arrow_right"></i></a>
                                    </div>
                                </div>

                                <div class="rq-listing-single">
                                    <div class="rq-listing-standard-image-post">
                                        <img src="img/blog-listing/listing-img.png" alt="">
                                        <h3 class="rq-listing-title"><a href="#">title of single post with image format</a></h3>
                                        <div class="rq-listing-meta">
                                            <span class="author-name"><a href="#">Logan cee</a></span>
                                            <span class="v-line">|</span>
                                            <span class="date"><a href="#">February, 15th, 2016</a></span>
                                            <span class="v-line">|</span>
                                            <span class="category"><a href="#">Property</a></span>
                                        </div>
                                        <p class="post-content"><span class="first-line">Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                          suscipit lobortis nisl ut aliquip ex ea commodo.</span>autem vel eum iriure dolor in heninndrerit in
                                            vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at
                                            vero eros et accumsan et iusto.Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation...
                                        </p>
                                        <a class="continue-btn rq-btn rq-btn-normal" href="#">Continue <i class="arrow_right"></i></a>
                                    </div>
                                </div>

                                <div class="rq-listing-single">
                                    <div class="rq-listing-standard-image-post">
                                        <img src="img/blog-listing/listing-img2.png" alt="">
                                        <h3 class="rq-listing-title"><a href="#">title of single post with image format</a></h3>
                                        <div class="rq-listing-meta">
                                            <span class="author-name"><a href="#">Logan cee</a></span>
                                            <span class="v-line">|</span>
                                            <span class="date"><a href="#">February, 15th, 2016</a></span>
                                            <span class="v-line">|</span>
                                            <span class="category"><a href="#">Property</a></span>
                                        </div>
                                        <p class="post-content"><span class="first-line">Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                          suscipit lobortis nisl ut aliquip ex ea commodo.</span>autem vel eum iriure dolor in heninndrerit in
                                            vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at
                                            vero eros et accumsan et iusto.Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation...
                                        </p>
                                        <a class="continue-btn rq-btn rq-btn-normal" href="#">Continue <i class="arrow_right"></i></a>
                                    </div>
                                </div>

                                <div class="rq-listing-single">
                                    <div class="rq-listing-standard-video-post">
                                        <div class="video-wrapper">
                                            <div class="feature-image">
                                                <img src="img/blog-listing/listing-img3.png" alt="">
                                                <a href="#">
                                                    <i class="ion-ios-play"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <h3 class="rq-listing-title"><a href="#">title of single post with video format</a></h3>
                                        <div class="rq-listing-meta">
                                            <span class="author-name"><a href="#">Logan cee</a></span>
                                            <span class="v-line">|</span>
                                            <span class="date"><a href="#">February, 15th, 2016</a></span>
                                            <span class="v-line">|</span>
                                            <span class="category"><a href="#">Property</a></span>
                                        </div>
                                        <p class="post-content"><span class="first-line">Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                          suscipit lobortis nisl ut aliquip ex ea commodo.</span>autem vel eum iriure dolor in heninndrerit in
                                            vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at
                                            vero eros et accumsan et iusto.Erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation...
                                        </p>
                                        <a class="continue-btn rq-btn rq-btn-normal" href="#">Continue <i class="arrow_right"></i></a>
                                    </div>
                                </div>
                                <div class="rq-pagination">
                                    <ul class="rq-pagination-list-secondary">
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> <!-- /.rq-blog-listing -->
            </div>
        </div> <!-- /.content-block -->
    </div> <!-- /.page-content -->
</div> <!-- end #main-wrapper -->

<footer class="rq-footer">
    <div class="rq-main-footer">
        <div class="container">
            <button class="toggle-widget">Footer widget</button>
            <div class="footer-widget">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <div class="widget-list">
                            <ul>
                                <li><a href="#">Site map</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Help</a></li>
                                <li><a href="#">Affiliate</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="widget-list">
                            <ul class="address">
                                <li><a href="#">Our Location</a></li>
                                <li><a href="#">Career</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="widget-list">
                            <ul class="address">
                                <li><a href="#">FAQs</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Car Blog</a></li>
                                <li><a href="#">Location</a></li>
                                <li><a href="#">Press</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="widget-list">
                            <div class="rq-newsletter">
                                <h5>Sign up for get our newsletter</h5>
                                <form action="#">
                                    <input class="fq-newsletter-form" type="text" placeholder="Your Email...">
                                    <button class="rq-btn" type="submit"><i class="ion-android-send"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /.rq-main-footer -->
    <div class="rq-copyright-section">
        <div class="container">
            <div class="copyright-content">
                <p><a href="#"><img src="img/company-logo.png" alt=""></a> © 2016 <a href="#">Turbo, Inc</a>.</p>
                <ul class="list-unstyled social-list">
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                </ul>
            </div>
        </div>
    </div> <!-- /.rq-copyright-section -->
</footer>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/soundcloud.player.api.js"></script>
<script type="text/javascript" src="js/soundcloud.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>



