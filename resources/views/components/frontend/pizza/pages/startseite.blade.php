<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <!--================ Basic page needs ================-->
  <title>Yummi | Home</title>
  <meta charset="UTF-8">
  <meta name="author" content="">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <!--================ Mobile specific metas ================-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--================ Favicon ================-->
  <link rel="shortcut icon" href="assets/pizza/images/favicon.ico">

    <x-frontend.pizza.pages.fontsgoogle></x-frontend.pizza.pages.fontsgoogle>

  <!--================ Vendor CSS ================-->
  <link rel="stylesheet" href="assets\pizza\css/fontawesome-all.min.css">
  <link rel="stylesheet" href="assets\pizza/css/linearicons.css">
  <link rel="stylesheet" href="assets\pizza\vendors/owl-carousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="assets\pizza\vendors/arcticmodal/jquery.arcticmodal-0.3.css">
  <link rel="stylesheet" href="assets\pizza\css/bootstrap.min.css">
  <link rel="stylesheet" href="assets\pizza\css/animate.min.css">
  <!-- REVOLUTION STYLE SHEETS -->
  <link rel="stylesheet" type="text/css" href="assets\pizza\css/settings.css">
  <!--================ Theme CSS ================-->
  <link rel="stylesheet" href="assets\pizza\css/style.css">
  <link rel="stylesheet" href="assets\pizza\css/responsive.css">
  <!--================ Vendor JS ================-->

</head>

<body>
  <div class="mad-preloader"></div>
  <div id="mad-page-wrapper" class="mad-page-wrapper">
    <!--================ Popup ================-->
    <div id="page-popup" class="mad-page-popup">
      <div class="mad-popup-inner">
        <button id="mad-popup-close" class="arcticmodal-close"><i class="material-icons">close</i></button>
        <div class="container">
          <div class="row justify-content-end">
            <div class="col-md-6">
              <h3 class="mad-page-title">We Are Open!</h3>
              <p>We offer our full menu for Pick Up and Delivery during our hours of operation.</p>
              <p class="content-element-4">Click on the link below or Call our restaurant at <br>
                +1 800 559 6580 to place your order.</p>
              <a href="#" class="btn btn-big btn-style-3">Order Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--================ /Popup ================-->
    <!--================ Search Modal ================-->
    <div class="mad-d-none">
      <div id="search-modal" class="mad-modal mad-modal--search">
        <button type="button" class="arcticmodal-close"><i class="material-icons">close</i></button>
        <h4 class="mad-title">Search</h4>
        <!--================ Search Form ================-->
        <form role="search" method="get" class="mad-searchform">
          <input type="text" name="s" placeholder="Type your keyword here">
          <button type="submit" class="btn btn-style-3"><i class="material-icons">search</i></button>
        </form>
        <!--================ End of Search Form ================-->
      </div>
    </div>
    <!--================ End of Search Modal ================-->
    <!--================ Header ================-->
    <header id="mad-header" class="mad-header mad-header--transparent">
      <div class="mad-pre-header">
        <div class="mad-our-info">
          <div class="mad-info"><i class="material-icons-outlined">location_on</i> <span> {{ $Shopdaten->zip }} {{ $Shopdaten->city }}, {{ $Shopdaten->street }}
             </span></div>
          <div class="mad-info"><i class="material-icons">access_time</i> <span>Mon - Fri: 8am - 11pm, Sat - Sun: 8am -
              12pm</span></div>
        </div>
        <div class="mad-quick-links">
          <a href="#">Gift Cards</a> <span>|</span> <a href="#">Track Your Order</a> <span>|</span> <a
            href="#">Login/Register</a>
        </div>
      </div>
      <div class="mad-header-section--sticky-xl">
        <div class="mad-header-items">
          <div class="mad-header-item">
            <a href="index.html" class="mad-logo"><img src="{{$Shopdaten->getFirstMediaUrl('sidelogo', 'fotos')}}" alt="{{ $Shopdaten->Shoptitel }}"></a>
          </div>

          <x-frontend.pizza.pages.nav :Produkte="$Produkte"></x-frontend.pizza.pages.nav>

          <div class="mad-header-item">
            <div class="mad-our-info type-2">
              <div class="mad-info">
                <i class="material-icons-outlined">call</i>
                <div class="mad-info-content">
                  <span>{{ $Shopdaten->phone_info }}</span>
                  <div class="mad-info-title">
                    <a href="tel:{{ $Shopdaten->phone_number }}" class="mad-info-title">{{ $Shopdaten->phone_number }}</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="mad-header-item">
            <div class="mad-actions">
              <div class="mad-item">
                <a href="#" class="mad-item-link" data-arctic-modal="#search-modal"><i
                    class="material-icons">search</i></a>
                <a href="#" class="mad-item-link"><i class="material-icons">person_outline</i></a>
                <div class="mad-dropdown">
                  <a href="#" type="button" class="mad-item-link mad-dropdown-title"><i
                      class="material-icons-outlined">shopping_cart</i><span class="quantity">3</span></a>
                  <div class="shopping-cart mad-dropdown-element">
                    <div class="mad-products mad-product-small">
                      <div class="mad-col">
                        <!-- Product -->
                        <div class="mad-product">
                          <button class="mad-close-item"><i class="material-icons-outlined">cancel</i></button>
                          <a href="#" class="mad-product-image">
                            <img src="assets/pizza/images/72x72_img1.jpg" alt="">
                          </a>
                          <!-- product-info -->
                          <div class="mad-product-description">
                            <h6 class="mad-product-title"><a href="#" class="mad-link">Chicken Burger</a></h6>
                            <span class="mad-product-price">1 × $14.99</span>
                          </div>
                          <!--/ product-info -->
                        </div>
                        <!-- End of Product -->
                      </div>
                      <div class="mad-col">
                        <!-- Product -->
                        <div class="mad-product">
                          <button class="mad-close-item"><i class="material-icons-outlined">cancel</i></button>
                          <a href="#" class="mad-product-image">
                            <img src="assets/pizza/images/72x72_img2.jpg" alt="">
                          </a>
                          <!-- product-info -->
                          <div class="mad-product-description">
                            <h6 class="mad-product-title"><a href="#" class="mad-link">Affogato</a></h6>
                            <span class="mad-product-price">1 x $4.99</span>
                          </div>
                          <!--/ product-info -->
                        </div>
                        <!-- End of Product -->
                      </div>
                      <div class="mad-col">
                        <!-- Product -->
                        <div class="mad-product">
                          <button class="mad-close-item"><i class="material-icons-outlined">cancel</i></button>
                          <a href="#" class="mad-product-image">
                            <img src="assets/pizza/images/72x72_img3.jpg" alt="">
                          </a>
                          <!-- product-info -->
                          <div class="mad-product-description">
                            <h6 class="mad-product-title"><a href="#" class="mad-link">Conchiglia
                            Verdura.</a></h6>
                            <span class="mad-product-price">1 x $14.99</span>
                          </div>
                          <!--/ product-info -->
                        </div>
                        <!-- End of Product -->
                      </div>
                    </div>
                    <div class="sc-footer">
                      <div class="subtotal">Subtotal: <span class="mad-price">34.97</span></div>
                      <a href="#" class="btn btn-small btn-style-3 w-100"><i class="material-icons">arrow_right_alt</i><span>Checkout</span></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mad-item">
                <a href="#" class="btn btn-small"><span>Order Online</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!--================ End of Header ================-->

    <x-frontend.pizza.pages.revslider></x-frontend.pizza.pages.revslider>

    <div class="mad-content no-pd">
      <div class="container">
        <div class="mad-menu-box with-slide-top">
          <div class="mad-col">
            <a href="#" class="mad-menu-item">
              <i class="mad-menu-icon"><img class="svg" src="assets/pizza/yummi_svg_icons/pizza.svg" alt=""></i>
              <h6 class="mad-menu-title">Pizza</h6>
            </a>
          </div>
          <div class="mad-col">
            <a href="#" class="mad-menu-item">
              <i class="mad-menu-icon"><img class="svg" src="assets/pizza/yummi_svg_icons/pasta.svg" alt=""></i>
              <h6 class="mad-menu-title">Pasta</h6>
            </a>
          </div>
          <div class="mad-col">
            <a href="#" class="mad-menu-item">
              <i class="mad-menu-icon"><img class="svg" src="assets/pizza/yummi_svg_icons/burger.svg" alt=""></i>
              <h6 class="mad-menu-title">Burgers</h6>
            </a>
          </div>
          <div class="mad-col">
            <a href="#" class="mad-menu-item">
              <i class="mad-menu-icon"><img class="svg" src="assets/pizza/yummi_svg_icons/french_fries.svg" alt=""></i>
              <h6 class="mad-menu-title">Sides</h6>
            </a>
          </div>
          <div class="mad-col">
            <a href="#" class="mad-menu-item">
              <i class="mad-menu-icon"><img class="svg" src="assets/pizza/yummi_svg_icons/dessert.svg" alt=""></i>
              <h6 class="mad-menu-title">Desserts</h6>
            </a>
          </div>
          <div class="mad-col">
            <a href="#" class="mad-menu-item">
              <i class="mad-menu-icon"><img class="svg" src="assets/pizza/yummi_svg_icons/drink.svg" alt=""></i>
              <h6 class="mad-menu-title">Drinks</h6>
            </a>
          </div>
        </div>
        <div class="mad-section">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="content-element-4">
                <h2>Real Delicious Food
                  Straight To Your Door</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut
                  tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat.
                </p>
              </div>
              <!--================ Icon Boxes ================-->
              <div class="mad-icon-boxes item-col-2">
                <div class="mad-col">
                  <!--================ Icon Box ================-->
                  <article class="mad-icon-box">
                    <i class="mad-icon-box-icon"><img class="svg" src="assets/pizza/yummi_svg_icons/quality.svg" alt=""></i>
                    <div class="mad-icon-box-content">
                      <h6 class="mad-icon-box-title"><b>Premium Quality</b></h6>
                      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                      </p>
                    </div>
                  </article>
                  <!--================ End of Icon Box ================-->
                </div>
                <div class="mad-col">
                  <!--================ Icon Box ================-->
                  <article class="mad-icon-box">
                    <i class="mad-icon-box-icon"><img class="svg" src="assets/pizza/yummi_svg_icons/fresh.svg" alt=""></i>
                    <div class="mad-icon-box-content">
                      <h6 class="mad-icon-box-title">Always Fresh</h6>
                      <p>Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis.
                      </p>
                    </div>
                  </article>
                  <!--================ End of Icon Box ================-->
                </div>
                <div class="mad-col">
                  <!--================ Icon Box ================-->
                  <article class="mad-icon-box">
                    <i class="mad-icon-box-icon"><img class="svg" src="assets/pizza/yummi_svg_icons/dish.svg" alt=""></i>
                    <div class="mad-icon-box-content">
                      <h6 class="mad-icon-box-title">Variety of Dishes</h6>
                      <p>Suspendisse sollicitudin velit sed leo. Ut pharetra augue nec augue.
                      </p>
                    </div>
                  </article>
                  <!--================ End of Icon Box ================-->
                </div>
                <div class="mad-col">
                  <!--================ Icon Box ================-->
                  <article class="mad-icon-box">
                    <i class="mad-icon-box-icon"><img class="svg" src="assets/pizza/yummi_svg_icons/delivery.svg" alt=""></i>
                    <div class="mad-icon-box-content">
                      <h6 class="mad-icon-box-title">Fastest Delivery</h6>
                      <p>Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis.
                      </p>
                    </div>
                  </article>
                  <!--================ End of Icon Box ================-->
                </div>
              </div>
              <!--================ End of Icon Boxes ================-->
            </div>
            <div class="col-lg-6">
              <div class="mad-img">
                <img src="assets/pizza/images/688x944_img1.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="mad-section mad-section--stretched mad-colorizer--scheme-color-2">
          <div class="mad-title-wrap align-center">
            <h2 class="mad-page-title">How It Works</h2>
            <p>Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus <br> eget nibh. Etiam cursus leo vel metus.
            Nulla facilisi.</p>
          </div>
          <!--================ Icon Boxes ================-->
          <div class="mad-icon-boxes with-arrows style-3 align-center item-col-3">
            <div class="mad-col">
              <!--================ Icon Box ================-->
              <article class="mad-icon-box">
                <i class="mad-icon-box-icon"><img class="svg" src="assets/pizza/yummi_svg_icons/cart.svg" alt=""></i>
                <div class="mad-icon-box-content">
                  <h5 class="mad-icon-box-title">1. Select Your Food</h5>
                  <p>Lorem ipsum dolor sit amet, consec-<br>tetuer adipiscing elit.
                  </p>
                </div>
              </article>
              <!--================ End of Icon Box ================-->
            </div>
            <div class="mad-col">
              <!--================ Icon Box ================-->
              <article class="mad-icon-box">
                <i class="mad-icon-box-icon"><img class="svg" src="assets/pizza/yummi_svg_icons/wallet.svg" alt=""></i>
                <div class="mad-icon-box-content">
                  <h5 class="mad-icon-box-title">2. Pay With Card or Cash</h5>
                  <p>Mauris fermentum dictum magna. <br>
                    Sed laoreet aliquam leo.
                  </p>
                </div>
              </article>
              <!--================ End of Icon Box ================-->
            </div>
            <div class="mad-col">
              <!--================ Icon Box ================-->
              <article class="mad-icon-box">
                <i class="mad-icon-box-icon"><img class="svg" src="assets/pizza/yummi_svg_icons/delivery2.svg" alt=""></i>
                <div class="mad-icon-box-content">
                  <h5 class="mad-icon-box-title">3. Pickup or Delivery</h5>
                  <p>Ut tellus dolor, dapibus eget, elemen-<br>tum vel, cursus eleifend, elit.
                  </p>
                </div>
              </article>
              <!--================ End of Icon Box ================-->
            </div>
          </div>
          <!--================ End of Icon Boxes ================-->
          <div class="align-center">
            <a href="#" class="btn btn-style-3 btn-big">Order Now</a>
          </div>
        </div>

        <x-frontend.pizza.pages.menue_1 :Produkte="$Produkte"></x-frontend.pizza.pages.menue_1>



        <div class="mad-section no-pd mad-section--stretched-content-no-px">
          <div class="mad-half-section">
            <div class="mad-col">
              <div class="mad-half-section-item" data-bg-image-src="assets/pizza/images/944x648_bg1.jpg">
                <div class="mad-half-content">
                  <div class="content-element-6">
                    <h2 class="mad-page-title">Create Your
                      Own Pizza</h2>
                    <p>Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi.</p>
                  </div>
                  <a href="https://pizza-express-edemissen.de/pizza-express-pizza-edemissen/lecker-bausatz/" class="btn btn-style-3 btn-big">Add Toppings</a>
                </div>
              </div>
            </div>
            <div class="mad-col">
              <div class="mad-half-section-item" data-bg-image-src="assets/pizza/images/944x648_bg2.jpg">
                <div class="mad-half-content">
                  <div class="content-element-6">
                    <h2 class="mad-page-title">Create Your
                      Own Burger</h2>
                    <p>Aenean nec eros. Vestibulum ante ipsum primis in faucibus.</p>
                  </div>
                  <a href="#" class="btn btn-style-3 btn-big">Add Toppings</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="mad-section">
          <h2 class="mad-page-title align-center">Customer Testimonials</h2>
          <!--================ Testimonials ================-->
          <div class="mad-testimonials">
            <div class="mad-grid mad-grid--cols-2 owl-carousel">
              <!-- owl item -->
              <div class="mad-grid-item">
                <div class="mad-testimonial">
                  <div data-estimate="5" class="mad-rating"></div>
                  <div class="mad-testimonial-info">
                    <blockquote>
                      <p>“Mauris fermentum dictum magna. Sed laoreet ali&shy;quam leo. Ut tellus dolor, dapibus eget, elementum
                        vel, cursus eleifend,
                        elit.”</p>
                    </blockquote>
                  </div>
                  <div class="mad-author">
                    <div class="mad-author-img"><img src="assets/pizza/images/96x96_photo1.jpg" alt=""></div>
                    <div class="mad-author-info">
                      <cite>Rebecca Johnson, CA, USA</cite>
                    </div>
                  </div>
                </div>
              </div>
              <!-- / owl item -->
              <!-- owl item -->
              <div class="mad-grid-item">
                <div class="mad-testimonial">
                  <div data-estimate="5" class="mad-rating"></div>
                  <div class="mad-testimonial-info">
                    <blockquote>
                      <p>“Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel,
                        scelerisque
                        eget, malesuada at, neque.”</p>
                    </blockquote>
                  </div>
                  <div class="mad-author">
                    <div class="mad-author-img"><img src="assets/pizza/images/96x96_photo2.jpg" alt=""></div>
                    <div class="mad-author-info">
                      <cite>Alan Smith, NY, USA</cite>
                    </div>
                  </div>
                </div>
              </div>
              <!-- / owl item -->
              <!-- owl item -->
              <div class="mad-grid-item">
                <div class="mad-testimonial">
                  <div data-estimate="5" class="mad-rating"></div>
                  <div class="mad-testimonial-info">
                    <blockquote>
                      <p>“Integer rutrum ante eu lacus.Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at.”</p>
                    </blockquote>
                  </div>
                  <div class="mad-author">
                    <div class="mad-author-img"><img src="assets/pizza/images/96x96_photo3.jpg" alt=""></div>
                    <div class="mad-author-info">
                      <cite>Bradley Grosh,
                        FL, USA</cite>
                    </div>
                  </div>
                </div>
              </div>
              <!-- / owl item -->
              <!-- owl item -->
              <div class="mad-grid-item">
                <div class="mad-testimonial">
                  <div data-estimate="5" class="mad-rating"></div>
                  <div class="mad-testimonial-info">
                    <blockquote>
                      <p>“Suspendisse sollicitudin velit sed leo. Ut pharetra augue nec augue. Nam elit agna,endrerit sit amet,
                        tincidunt ac,
                        viverra sed, nulla.”</p>
                    </blockquote>
                  </div>
                  <div class="mad-author">
                    <div class="mad-author-img"><img src="assets/pizza/images/96x96_photo4.jpg" alt=""></div>
                    <div class="mad-author-info">
                      <cite>Ivana Wong,
                        TX, USA</cite>
                    </div>
                  </div>
                </div>
              </div>
              <!-- / owl item -->
              <!-- owl item -->
              <div class="mad-grid-item">
                <div class="mad-testimonial">
                  <div data-estimate="5" class="mad-rating"></div>
                  <div class="mad-testimonial-info">
                    <blockquote>
                      <p>“Mauris fermentum dictum magna. Sed laoreet ali&shy;quam leo. Ut tellus dolor, dapibus eget, elementum
                        vel, cursus
                        eleifend,
                        elit.”</p>
                    </blockquote>
                  </div>
                  <div class="mad-author">
                    <div class="mad-author-img"><img src="assets/pizza/images/96x96_photo1.jpg" alt=""></div>
                    <div class="mad-author-info">
                      <cite>Rebecca Johnson, CA, USA</cite>
                    </div>
                  </div>
                </div>
              </div>
              <!-- / owl item -->
              <!-- owl item -->
              <div class="mad-grid-item">
                <div class="mad-testimonial">
                  <div data-estimate="5" class="mad-rating"></div>
                  <div class="mad-testimonial-info">
                    <blockquote>
                      <p>“Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel,
                        scelerisque
                        eget, malesuada at, neque.”</p>
                    </blockquote>
                  </div>
                  <div class="mad-author">
                    <div class="mad-author-img"><img src="assets/pizza/images/96x96_photo2.jpg" alt=""></div>
                    <div class="mad-author-info">
                      <cite>Alan Smith, NY, USA</cite>
                    </div>
                  </div>
                </div>
              </div>
              <!-- / owl item -->
            </div>
          </div>
          <!--================ End of Testimonials ================-->
        </div>
        <div data-bg-image-src="assets/pizza/images/1920x672_bg1.jpg" class="mad-section mad-col-img mad-section--stretched mad-colorizer--scheme-">
          <div class="row">
            <div class="col-lg-5 col-sm-10">
              <h2>Order and Pay <br>
              in a Few Minutes</h2>
              <p class="content-element-6">Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh. Etiam cursus leo vel metus.
              Aenean nec eros. Vestibu&shy;lum ante ipsum primis in faucibus orci luctus et ultrices.</p>
              <div class="btn-set big-btns">
                <a href="#"><img src="assets/pizza/images/app_store.png" alt=""></a>
                <a href="#"><img src="assets/pizza/images/google_pay.png" alt=""></a>
              </div>
            </div>
          </div>
        </div>
        <div class="mad-section mad-section--stretched mad-colorizer--scheme-color-5">
          <h2 class="mad-page-title align-center">Latest News</h2>
          <!--================ Image Boxes ================-->
          <div class="mad-entities item-col-3 type-3">
            <div class="mad-col">
              <!--================ Entity ================-->
              <article class="mad-entity">
                <div class="mad-entity-media">
                  <img src="assets/pizza/images/448x288_img1.jpg" alt="">
                </div>
                <div class="mad-entity-body">
                  <div class="mad-entity-tags">
                    <span>September 28, 2021</span>
                    <span class="mad-in">News</span>
                  </div>
                  <h5 class="mad-entity-title"><a href="#" class="mad-link">Sed in Lacus ut Enim</a></h5>
                  <p>Mauris fermentum dictum magna. Sed laoreet ali&shy;quam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend,
                  elit.</p>
                  <a href="#" class="mad-read-more small-size">Read More</a>
                </div>
              </article>
              <!--================ End of Entity ================-->
            </div>
            <div class="mad-col">
              <!--================ Entity ================-->
              <article class="mad-entity">
                <div class="mad-entity-media">
                  <img src="assets/pizza/images/448x288_img2.jpg" alt="">
                </div>
                <div class="mad-entity-body">
                  <div class="mad-entity-tags">
                    <span>September 21, 2021</span>
                    <a href="#">Events</a>
                  </div>
                  <h5 class="mad-entity-title"><a href="#" class="mad-link">Aliquam Erat Volutpat</a></h5>
                  <p>Aenean auctor wisi et urna. Aliquam erat volut&shy;pat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl,
                  porta vel, scelerisque.</p>
                  <a href="#" class="mad-read-more small-size">Read More </a>
                </div>
              </article>
              <!--================ End of Entity ================-->
            </div>
            <div class="mad-col">
              <!--================ Entity ================-->
              <article class="mad-entity">
                <div class="mad-entity-media">
                  <img src="assets/pizza/images/448x288_img3.jpg" alt="">
                </div>
                <div class="mad-entity-body">
                  <div class="mad-entity-tags">
                    <span>September 15, 2021</span>
                    <a href="#">Offers</a>
                  </div>
                  <h5 class="mad-entity-title"><a href="#" class="mad-link">Donec in Velit Vel Ipsum</a></h5>
                  <p>Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus
                  orci luctus.</p>
                  <a href="#" class="mad-read-more small-size">Read More</a>
                </div>
              </article>
              <!--================ End of Entity ================-->
            </div>
          </div>
          <!--================ End of Image Boxes ================-->
        </div>
        <div class="mad-section no-pd mad-section--stretched-content-no-px">
          <div class="mad-instafeed">
            <div class="mad-grid item-col-5 no-gutters">
              <div class="mad-col">
                <a href="#"><img src="assets/pizza/images/384x384_img1.jpg" alt=""></a>
              </div>
              <div class="mad-col">
                <a href="#"><img src="assets/pizza/images/384x384_img2.jpg" alt=""></a>
              </div>
              <div class="mad-col">
                <a href="#"><img src="assets/pizza/images/384x384_img3.jpg" alt=""></a>
              </div>
              <div class="mad-col">
                <a href="#"><img src="assets/pizza/images/384x384_img4.jpg" alt=""></a>
              </div>
              <div class="mad-col">
                <a href="#"><img src="assets/pizza/images/384x384_img5.jpg" alt=""></a>
              </div>
            </div>
          </div>
        </div>
        <div class="mad-section very-small-size mad-section--stretched mad-colorizer--scheme-color-2">
          <div class="row align-items-center">
            <div class="col-xl-6">
              <h4 class="mad-page-title">Receive Great Offers and Event Updates</h4>
            </div>
            <div class="col-xl-6">
              <form class="mad-newsletter-form one-line">
                <input type="email" name="email" placeholder="Enter Your Email Address">
                <button type="submit" class="btn btn-style-3 btn-small"><span>Sign Up</span></button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <x-frontend.pizza.includes.footer :Shopdaten="$Shopdaten"></x-frontend.pizza.includes.footer>
  </div>

  <x-frontend.pizza.pages.java></x-frontend.pizza.pages.java>

</body>

</html>
