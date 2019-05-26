<!DOCTYPE html>

<html lang="en">

<head>

    <title>Test | acad</title>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Creativeitem" />

    <meta name="keywords" content="LMS,Learning Management System,Creativeitem" />
    <meta name="description" content="Nice application" />

    <link name="favicon" type="image/x-icon" href="http://localhost/Acad/assets/favicon.png" rel="shortcut icon" />
    <link rel="favicon" href="http://localhost/Acad/assets/frontend/img/icons/favicon.ico">
    <link rel="apple-touch-icon" href="http://localhost/Acad/assets/frontend/img/icons/icon.png">
    <link rel="stylesheet" href="http://localhost/Acad/assets/frontend/css/jquery.webui-popover.min.css">
    <link rel="stylesheet" href="http://localhost/Acad/assets/frontend/css/select2.min.css">
    <link rel="stylesheet" href="http://localhost/Acad/assets/frontend/css/slick.css">
    <link rel="stylesheet" href="http://localhost/Acad/assets/frontend/css/slick-theme.css">
    <!-- font awesome 5 -->
    <link rel="stylesheet" href="http://localhost/Acad/assets/frontend/css/fontawesome-all.min.css">
    <!-- font awesome 4 -->
    <link rel="stylesheet" href="http://localhost/Acad/assets/backend/css/font-icons/font-awesome-new/css/font-awesome.min.css">

    <link rel="stylesheet" href="http://localhost/Acad/assets/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/Acad/assets/frontend/css/bootstrap-tagsinput.css">
    <link rel="stylesheet" href="http://localhost/Acad/assets/frontend/css/main.css">
    <link rel="stylesheet" href="http://localhost/Acad/assets/frontend/css/responsive.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/nestable2/1.6.0/jquery.nestable.min.css" />
    <script src="http://localhost/Acad/assets/backend/js/jquery-1.11.0.min.js"></script>

</head>

<body class="gray-bg">
    <section class="menu-area">
        <div class="container-xl">
            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">

                        <ul class="mobile-header-buttons">
                            <li><a class="mobile-nav-trigger" href="#mobile-primary-nav">Menu<span></span></a></li>
                            <li><a class="mobile-search-trigger" href="#mobile-search">Search<span></span></a></li>
                        </ul>

                        <a href="http://localhost/Acad/" class="navbar-brand" href="#"><img src="http://localhost/Acad/assets/frontend/img/logo.png" alt="" height="30"></a>

                        <div class="main-nav-wrap">
                            <div class="mobile-overlay"></div>

                            <ul class="mobile-main-nav">
                                <div class="mobile-menu-helper-top"></div>

                                <li class="has-children">
                                    <a href="">
                <i class="fas fa-th d-inline"></i>
                <span>Categories</span>
                <span class="has-sub-category"><i class="fas fa-angle-right"></i></span>
            </a>

                                    <ul class="category corner-triangle top-left is-hidden">
                                        <li class="go-back"><a href=""><i class="fas fa-angle-left"></i>Menu</a></li>
                                        <li class="has-children">
                                            <a href="#">
                            <span class="icon"><i class="fa fa-address-book"></i></span>
                            <span>test</span>
                            <span class="has-sub-category"><i class="fas fa-angle-right"></i></span>
                        </a>
                                            <ul class="sub-category is-hidden">
                                                <li class="go-back-menu"><a href=""><i class="fas fa-angle-left"></i>Menu</a></li>
                                                <li class="go-back"><a href="">
                                <i class="fas fa-angle-left"></i>
                                <span class="icon"><i class="fa fa-address-book"></i></span>
                                test                            </a></li>
                                                <li><a href="http://localhost/Acad/home/category/seb/2">seb</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <div class="mobile-menu-helper-bottom"></div>
                            </ul>
                        </div>

                        <form class="inline-form" action="http://localhost/Acad/home/get_courses_by_search_string" method="post" style="width: 100%;">
                            <div class="input-group search-box mobile-search">
                                <input type="text" name='search_string' class="form-control" placeholder="Search For Courses">
                                <div class="input-group-append">
                                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>

                        <div class="cart-box menu-icon-box" id="cart_items">
                            <div class="icon">
                                <a href="http://localhost/Acad/home/shopping_cart"><i class="fas fa-shopping-cart"></i></a>
                                <span class="number">0</span>
                            </div>

                            <!-- Cart Dropdown goes here -->
                            <div class="dropdown course-list-dropdown corner-triangle top-right" style="display: none;">
                                <!-- Just remove the display none from the css to make it work -->
                                <div class="list-wrapper">
                                    <div class="item-list">
                                        <ul>
                                        </ul>
                                    </div>
                                    <div class="dropdown-footer">
                                        <div class="cart-total-price clearfix">
                                            <span>Total:</span>
                                            <div class="float-right">
                                                <span class="current-price"></span>
                                                <!-- <span class="original-price">$94.99</span> -->
                                            </div>
                                        </div>
                                        <a href="http://localhost/Acad/home/shopping_cart">Go To Cart</a>
                                    </div>
                                </div>
                                <div class="empty-box text-center d-none">
                                    <p>Your Cart Is Empty.</p>
                                    <a href="">Keep Shopping</a>
                                </div>
                            </div>
                        </div>

                        <span class="signin-box-move-desktop-helper"></span>
                        <div class="sign-in-box btn-group">

                            <button type="button" class="btn btn-sign-in" data-toggle="modal" data-target="#signInModal">Log In</button>

                            <button type="button" class="btn btn-sign-up" data-toggle="modal" data-target="#signUpModal">Sign Up</button>

                        </div>
                        <!--  sign-in-box end -->



                    </nav>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="text-center" style="margin-top: 10px;">
                    <h4>test</h4>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="card" style="margin:10px 0px;">
                        <div class="card-header" id="heading-1">

                            <h5 class="mb-0">
                                <button class="btn btn-link w-100 text-left" type="button" data-toggle="collapse" data-target="#collapse-1" aria-expanded="true"
                                    aria-controls="collapse-1" style="color: #535a66; background: none; border: none; white-space: normal;">
                                    <h6 style="color: #686f7a; font-size: 15px;">section 1</h6>
                                    a                                </button>
                            </h5>
                        </div>

                        <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordionExample">
                            <div class="card-body" style="padding:0px;">
                                <table style="width: 100%;">

                                    <tr style="width: 100%; padding: 5px 0px;">
                                        <td style="text-align: left;padding:10px; border-bottom:1px solid #ccc;">
                                            <a href="http://localhost/Acad/home/lesson/test/1/1" id="1">
                                                    <i class="fa fa-play" style="font-size: 12px;color: #909090;padding: 10px;"></i>
                                                                                                          abcd                                                    
                                                </a>
                                        </td>
                                        <td style="text-align: right; padding:10px; border-bottom:1px solid #ccc;">
                                            <span class="lesson_duration">
                                                                                                        01:08:52                                                                                                  </span>
                                        </td>
                                    </tr>

                                    <tr style="width: 100%; padding: 5px 0px;">
                                        <td style="text-align: left;padding:10px; border-bottom:1px solid #ccc;">
                                            <a href="http://localhost/Acad/home/lesson/test/1/2" id="2">
                                                    <i class="fa fa-play" style="font-size: 12px;color: #909090;padding: 10px;"></i>
                                                                                                          tetstwt                                                    
                                                </a>
                                        </td>
                                        <td style="text-align: right; padding:10px; border-bottom:1px solid #ccc;">
                                            <span class="lesson_duration">
                                                                                                        00:00:00                                                                                                  </span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 align-self-center" id="video_player_area">
                <!-- <div class="" style="background-color: #333;"> -->
                <div class="" style="text-align: center;">
                    <!------------- PLYR.IO ------------>
                    <link rel="stylesheet" href="http://localhost/Acad/assets/global/plyr/plyr.css">

                    <div class="plyr__video-embed" id="player">
                        <iframe height="500" src="https://www.youtube.com/watch?v=DSGyEsJ17cI?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1"
                            allowfullscreen allowtransparency allow="autoplay"></iframe>
                    </div>

                    <script src="http://localhost/Acad/assets/global/plyr/plyr.js"></script>
                    <script>
                        const player = new Plyr('#player');
                    </script>
                    <!------------- PLYR.IO ------------>
                </div>

                <div class="" style="margin: 20px 0;">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Note:</h5>
                            <p class="card-text">No Summary Found.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--<section class="footer-top-widget-area">
            <div class="container-xl">
                <div class="row">
                     <div class="col-md-3 col-sm-6">
                        <div class="footer-widget link-widget">
                            <ul>
                                <li><a href=""><b>Udemy for Business</b></a></li>
                                <li><a href=""><b>Become an Instructor</b></a></li>
                                <li><a href="">Mobile Apps</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-widget link-widget">
                            <ul>
                                <li><a href="http://localhost/Acad/home/about_us">About Us</a></li>
                                <li><a href="http://localhost/Acad/home/blog">Blog</a></li>
                            </ul>
                        </div>
                    </div>-->
    <!-- <div class="col-md-offest-6 col-md-3 col-sm-6 pull-right">
                        <div class="footer-widget language-widget text-right">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" id="languageButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-globe"></i>English
                                </button>
                                <div class="dropdown-menu" aria-labelledby="languageButton">
                                    <a class="dropdown-item" href="#">English</a>
                                    <a class="dropdown-item" href="#">Deutsch</a>
                                    <a class="dropdown-item" href="#">Español</a>
                                    <a class="dropdown-item" href="#">Français</a>
                                    <a class="dropdown-item" href="#">Français</a>
                                    <a class="dropdown-item" href="#">Italiano</a>
                                    <a class="dropdown-item" href="#">日本語</a>
                                    <a class="dropdown-item" href="#">한국어</a>
                                    <a class="dropdown-item" href="#">Nederlands</a>
                                    <a class="dropdown-item" href="#">Polski</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->

    <footer class="footer-area">
        <div class="container-xl">
            <div class="row">
                <div class="col-md-6">
                    <p class="copyright-text">
                        <a href=""><img src="http://localhost/Acad/assets/frontend/img/logo.png" alt="" class="d-inline-block" width="110"></a>
                        <a href="http://creativeitem.com/" target="_blank">By Creativeitem</a>
                    </p>
                </div>
                <div class="col-md-6">
                    <ul class="nav justify-content-md-end footer-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/Acad/home/about_us">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/Acad/home/privacy_policy">Privacy Policy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/Acad/home/terms_and_condition">Terms & Condition</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/Acad/login" target="_blank">
                                    Admin                                </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>



    <!-- Modal -->
    <div class="modal fade" id="signInModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content sign-in-modal">
                <div class="modal-header">
                    <h5 class="modal-title">Log In To Your Account!</h5>
                    <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <form action="http://localhost/Acad/login/validate_login/user" method="post">
                        <div class="input-group">
                            <span class="input-field-icon"><i class="fas fa-envelope"></i></span>
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="input-group">
                            <span class="input-field-icon"><i class="fas fa-lock"></i></span>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary">Log In</button>
                        <div class="forgot-pass">
                            <span>or</span>
                            <a href="" data-toggle="modal" data-target="#forgotModal" data-dismiss="modal">Forgot Password</a>
                        </div>
                    </form>
                    <div class="agreement-text">
                        By Signing Up You Agree To Our <a href="#">Terms Of Use</a> And <a href="#">Privacy Policy</a>.
                    </div>
                    <div class="account-have">
                        Do Not Have An Account? <a href="" data-toggle="modal" data-target="#signUpModal" data-dismiss="modal">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->


    <!-- Modal -->
    <div class="modal fade" id="forgotModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content sign-in-modal">
                <div class="modal-header">
                    <h5 class="modal-title">Forgot Password</h5>
                    <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <form action="http://localhost/Acad/login/forgot_password/frontend" method="post">
                        <div class="input-group">
                            <input type="email" name="email" class="form-control forgot-email" placeholder="E-mail">
                        </div>
                        <div class="forgot-pass-btn">
                            <button type="submit" class="btn btn-primary d-inline-block">Reset Password</button>
                            <span>or</span>
                            <a href="" data-toggle="modal" data-target="#signInModal" data-dismiss="modal">Log In</a>
                        </div>
                    </form>
                    <div class="forgot-recaptcha">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->

    <!-- Modal -->
    <div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content sign-in-modal">
                <div class="modal-header">
                    <h5 class="modal-title">Sign Up And Start Learning!</h5>
                    <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <form action="http://localhost/Acad/login/register" method="post">
                        <div class="input-group">
                            <span class="input-field-icon"><i class="fas fa-user"></i></span>
                            <input type="text" name="first_name" class="form-control" placeholder="First Name">
                        </div>
                        <div class="input-group">
                            <span class="input-field-icon"><i class="fas fa-user"></i></span>
                            <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                        </div>
                        <div class="input-group">
                            <span class="input-field-icon"><i class="fas fa-envelope"></i></span>
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="input-group">
                            <span class="input-field-icon"><i class="fas fa-lock"></i></span>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="custom-control custom-checkbox deal-checkbox">
                            <input type="checkbox" class="custom-control-input" id="dealCheckbox">
                            <label class="custom-control-label" for="dealCheckbox">Check Here For Exciting Deals And Personalized Course Recommendations</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Sign Up</button>
                    </form>
                    <div class="agreement-text">
                        By Signing Up You Agree To Our <a href="#">Terms Of Use</a> And <a href="#">Privacy Policy</a>.
                    </div>
                    <div class="account-have">
                        Already Have An Account? <a href="" data-toggle="modal" data-target="#signInModal" data-dismiss="modal">Log In</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->



    <!-- PAYMENT MODAL -->
    <!-- Modal -->
    <div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content payment-in-modal">
                <div class="modal-header">
                    <h5 class="modal-title">Checkout!</h5>
                    <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <form action="http://localhost/Acad/home/paypal_checkout" method="post">
                                <input type="hidden" class="total_price_of_checking_out" name="total_price_of_checking_out" value="">
                                <button type="submit" class="btn btn-default paypal">Paypal</button>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <form action="http://localhost/Acad/home/stripe_checkout" method="post">
                                <input type="hidden" class="total_price_of_checking_out" name="total_price_of_checking_out" value="">
                                <button type="submit" class="btn btn-primary stripe">Stripe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->

    <!-- Modal -->
    <div class="modal fade multi-step" id="EditRatingModal" tabindex="-1" role="dialog" aria-hidden="true" reset-on-close="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content edit-rating-modal">
                <div class="modal-header">
                    <h5 class="modal-title step-1" data-step="1">Step 1</h5>
                    <h5 class="modal-title step-2" data-step="2">Step 2</h5>
                    <h5 class="m-progress-stats modal-title">
                        &nbsp;of&nbsp;<span class="m-progress-total"></span>
                    </h5>

                    <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="m-progress-bar-wrapper">
                    <div class="m-progress-bar">
                    </div>
                </div>
                <div class="modal-body step step-1">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="modal-rating-box">
                                    <h4 class="rating-title">How Would You Rate This Course Overall?</h4>
                                    <fieldset class="your-rating">

                                        <input type="radio" id="star5" name="rating" value="5" />
                                        <label class="full" for="star5"></label>

                                        <!-- <input type="radio" id="star4half" name="rating" value="4 and a half" />
                                            <label class="half" for="star4half"></label> -->

                                        <input type="radio" id="star4" name="rating" value="4" />
                                        <label class="full" for="star4"></label>

                                        <!-- <input type="radio" id="star3half" name="rating" value="3 and a half" />
                                            <label class="half" for="star3half"></label> -->

                                        <input type="radio" id="star3" name="rating" value="3" />
                                        <label class="full" for="star3"></label>

                                        <!-- <input type="radio" id="star2half" name="rating" value="2 and a half" />
                                            <label class="half" for="star2half"></label> -->

                                        <input type="radio" id="star2" name="rating" value="2" />
                                        <label class="full" for="star2"></label>

                                        <!-- <input type="radio" id="star1half" name="rating" value="1 and a half" />
                                            <label class="half" for="star1half"></label> -->

                                        <input type="radio" id="star1" name="rating" value="1" />
                                        <label class="full" for="star1"></label>

                                        <!-- <input type="radio" id="starhalf" name="rating" value="half" />
                                            <label class="half" for="starhalf"></label> -->

                                    </fieldset>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="modal-course-preview-box">
                                    <div class="card">
                                        <img class="card-img-top img-fluid" id="course_thumbnail_1" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title" class="course_title_for_rating" id="course_title_1"></h5>
                                            <p class="card-text" id="instructor_details">

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-body step step-2">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="modal-rating-comment-box">
                                    <h4 class="rating-title">Write A Public Review</h4>
                                    <textarea id="review_of_a_course" name="review_of_a_course" placeholder="Describe Your Experience What You Got Out Of The Course And Other Helpful Highlights. What Did The Instructor Do Well And What Could Use Some Improvement?"
                                        maxlength="65000" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="modal-course-preview-box">
                                    <div class="card">
                                        <img class="card-img-top img-fluid" id="course_thumbnail_2" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title" class="course_title_for_rating" id="course_title_2"></h5>
                                            <p class="card-text">
                                                - ali jawish </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="course_id" id="course_id_for_rating" value="">
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary next step step-1" data-step="1" onclick="sendEvent(2)">Next</button>
                    <button type="button" class="btn btn-primary previous step step-2 mr-auto" data-step="2" onclick="sendEvent(1)">Previous</button>
                    <button type="button" class="btn btn-primary publish step step-2" onclick="publishRating($('#course_id_for_rating').val())"
                        id="">Publish</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->


    <script type="text/javascript">
        function publishRating(course_id) {
                var review = $('#review_of_a_course').val();
                var starRating = 0;
                $('input:radio[name="rating"]:checked').each(function() {
                    starRating = $('input:radio[name="rating"]:checked').val();
                });

                $.ajax({
                    type : 'POST',
                    url  : 'http://localhost/Acad/home/rate_course',
                    data : {course_id : course_id, review : review, starRating : starRating},
                    success : function(response) {
                        console.log(response);
                        $('#EditRatingModal').modal('hide');
                        location.reload();
                    }
                });
            }
    </script>
    <script src="http://localhost/Acad/assets/frontend/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="http://localhost/Acad/assets/frontend/js/vendor/jquery-3.2.1.min.js"></script>
    <script src="http://localhost/Acad/assets/backend/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
    <script src="http://localhost/Acad/assets/frontend/js/popper.min.js"></script>
    <script src="http://localhost/Acad/assets/frontend/js/bootstrap.min.js"></script>
    <script src="http://localhost/Acad/assets/frontend/js/slick.min.js"></script>
    <script src="http://localhost/Acad/assets/frontend/js/select2.min.js"></script>
    <script src="http://localhost/Acad/assets/frontend/js/tinymce.min.js"></script>
    <script src="http://localhost/Acad/assets/frontend/js/multi-step-modal.js"></script>
    <script src="http://localhost/Acad/assets/frontend/js/jquery.webui-popover.min.js"></script>
    <script src="https://content.jwplatform.com/libraries/O7BMTay5.js"></script>
    <script src="http://localhost/Acad/assets/frontend/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/nestable2/1.6.0/jquery.nestable.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js" integrity="sha384-FzT3vTVGXqf7wRfy8k4BiyzvbNfeYjK+frTVqZeNDFl8woCbF0CYG6g2fMEFFo/i"
        crossorigin="anonymous"></script>
    <script src="http://localhost/Acad/assets/frontend/js/bootstrap-tagsinput.min.js"></script>
    <script src="http://localhost/Acad/assets/frontend/js/custom.js"></script>

    <!-- SHOW TOASTR NOTIFIVATION -->

    <script type="text/javascript">
        function showAjaxModal(url)
{
// SHOWING AJAX PRELOADER IMAGE
jQuery('#modal_ajax .modal-body').html('<div style="text-align:center;margin-top:200px;"><img src="assets/images/preloader.gif" /></div>');

// LOADING THE AJAX MODAL
jQuery('#modal_ajax').modal('show', {backdrop: 'true'});

// SHOW AJAX RESPONSE ON REQUEST SUCCESS
$.ajax({
  url: url,
  success: function(response)
  {
    jQuery('#modal_ajax .modal-body').html(response);
  }
});
}

    </script>

    <!-- (Ajax Modal)-->
    <div class="modal fade" id="modal_ajax">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Modal</h4>
                </div>

                <div class="modal-body" style="height:500px; overflow:auto;">



                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>




    <script type="text/javascript">
        function confirm_modal(delete_url)
{
jQuery('#modal-4').modal('show', {backdrop: 'static'});
document.getElementById('delete_link').setAttribute('href' , delete_url);
}

    </script>

    <!-- (Normal Modal)-->
    <div class="modal fade" id="modal-4">
        <div class="modal-dialog">
            <div class="modal-content" style="margin-top:100px;">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" style="text-align:center;">Are you sure to delete this information ?</h4>
                </div>


                <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
                    <a href="#" class="btn btn-danger" id="delete_link">Delete</a>
                    <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>