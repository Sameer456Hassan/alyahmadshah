<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>ALY AHMAD SHAH</title>
  <meta name="author" content="p-themes" />
  <meta name="theme-color" content="#ffffff" />
  <link rel="stylesheet" href="assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css" />
  <!-- Plugins CSS File -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/plugins/owl-carousel/owl.carousel.css" />
  <link rel="stylesheet" href="assets/css/plugins/magnific-popup/magnific-popup.css" />
  <link rel="stylesheet" href="assets/css/plugins/jquery.countdown.css" />
  <!-- Main CSS File -->
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/skins/skin-demo-2.css" />
  <link rel="stylesheet" href="assets/css/demos/demo-2.css" />
</head>

<body>
  <div class="page-wrapper">
    <header class="header header-2 header-intro-clearance product_internal_header position-relative">
      <div class="header-middle">
        <div class="container">
          <div class="header-left">
            <button class="mobile-menu-toggler">
              <span class="sr-only">Toggle mobile menu</span>
              <i class="icon-bars"></i>
            </button>

            <h3><a href="index.php" class="logo"> ALY AHMAD SHAH </a></h3>
          </div>
          <!-- End .header-left -->

          <div class="header-right">
            <div class="account">
              <a href="dashboard.html" title="My account">
                <div class="icon">
                  <i class="icon-user"></i>
                </div>
                <p>Account</p>
              </a>
            </div>
            <!-- End .compare-dropdown -->

            <div class="wishlist">
              <a href="wishlist.html" title="Wishlist">
                <div class="icon">
                  <i class="icon-heart-o"></i>
                  <span class="wishlist-count badge">3</span>
                </div>
                <p>Wishlist</p>
              </a>
            </div>
            <!-- End .compare-dropdown -->

            <div class="dropdown cart-dropdown">
              <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                <div class="icon">
                  <i class="icon-shopping-cart"></i>
                  <span class="cart-count">2</span>
                </div>
                <p>Cart</p>
              </a>

              <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-cart-products">
                  <div class="product">
                    <div class="product-cart-details">
                      <h4 class="product-title">
                        <a href="#">Beige knitted elastic runner shoes</a>
                      </h4>

                      <span class="cart-product-info">
                        <span class="cart-product-qty">1</span>
                        x $84.00
                      </span>
                    </div>
                    <!-- End .product-cart-details -->

                    <figure class="product-image-container">
                      <a href="#" class="product-image">
                        <img src="assets/images/products/cart/product-1.jpg" alt="product" />
                      </a>
                    </figure>
                    <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                  </div>
                  <!-- End .product -->

                  <div class="product">
                    <div class="product-cart-details">
                      <h4 class="product-title">
                        <a href="#">Blue utility pinafore denim dress</a>
                      </h4>

                      <span class="cart-product-info">
                        <span class="cart-product-qty">1</span>
                        x $76.00
                      </span>
                    </div>
                    <!-- End .product-cart-details -->

                    <figure class="product-image-container">
                      <a href="#" class="product-image">
                        <img src="assets/images/products/cart/product-2.jpg" alt="product" />
                      </a>
                    </figure>
                    <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                  </div>
                  <!-- End .product -->
                </div>
                <!-- End .cart-product -->

                <div class="dropdown-cart-total">
                  <span>Total</span>

                  <span class="cart-total-price">$160.00</span>
                </div>
                <!-- End .dropdown-cart-total -->

                <div class="dropdown-cart-action">
                  <a href="cart.html" class="btn btn-primary">View Cart</a>
                  <a href="checkout.html" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                </div>
                <!-- End .dropdown-cart-total -->
              </div>
              <!-- End .dropdown-menu -->
            </div>
            <!-- End .cart-dropdown -->
          </div>
          <!-- End .header-right -->
        </div>
        <!-- End .container -->
      </div>
      <!-- End .header-middle -->

      <div class="header-bottom sticky-header">
        <div class="container">
          <div class="header-center mx-auto d-flex justify-content-around">
            <nav class="main-nav">
              <ul class="menu sf-arrows">
                <li class="megamenu-container">
                  <a href="index.php" class="">Home</a>
                </li>
                <li>
                  <a href="about.html" class="">About</a>
                </li>
                <li>
                  <a href="shop.php" class="">Shop</a>
                </li>
                <li>
                  <a href="contact.html" class="">Contact</a>
                </li>
              </ul>
              <!-- End .menu -->
            </nav>
            <!-- End .main-nav -->
          </div>
          <!-- End .header-center -->
        </div>
        <!-- End .container -->
      </div>
      <!-- End .header-bottom -->
    </header>

    <main class="main">
      <div class="page-content page_internal">
        <div class="container">
          <div class="product-details-top">

            <?php
            // Assuming you have a database connection in your ./backend/config.php file
            include_once './backend/config.php';

            // Check if the 'product_id' parameter is set in the URL
            if (isset($_GET['product_id'])) {
              $productId = $_GET['product_id'];

              // Fetch product details from the products table based on product ID
              $query = "SELECT * FROM products WHERE id = $productId";
              $result = $conn->query($query);

              if ($result && $result->num_rows > 0) {
                // Fetch product details
                $row = $result->fetch_assoc();

                // Extract product details
                $productName = $row['title'];
                $productPrice = $row['price'];
                $productDescription = $row['description'];
                $image = $row['image_path'];

                // Use normal HTML structure to display product details
            ?>
                <div class="row align-items-center">
                  <div class="col-md-6">
                    <div class="product-gallery product-gallery-vertical">
                      <div class="row">
                        <figure class="product-main-image">
                          <img id="product-zoom" src="./uploads/<?php echo $image; ?>" data-zoom-image="./uploads/<?php echo $image; ?>" alt="product image">

                        </figure><!-- End .product-main-image -->


                      </div><!-- End .row -->
                    </div><!-- End .product-gallery -->
                  </div><!-- End .col-md-6 -->

                  <div class="col-md-6">
                    <div class="product-details">
                      <h1 class="product-title"><?php echo $productName; ?></h1>
                      <!-- End .product-title -->

                      <div class="product-price">
                        $<?php echo number_format($productPrice, 2); ?>
                      </div>
                      <!-- End .product-price -->

                      <div class="product-content">
                        <p><?php echo $productDescription; ?></p>
                      </div>
                      <!-- End .product-content -->

                      <!-- ... Other product details ... -->

                      <div class="product-details-action">
                        <a href="cart.html" class="btn-product btn-cart"><span>add to cart</span></a>
                      </div>
                      <!-- End .product-details-action -->

                    </div>
                    <!-- End .product-details -->
                  </div>
                  <!-- End .col-md-6 -->
                </div><!-- End .row -->

            <?php
              } else {
                // Handle product not found
                echo '<p>Product not found.</p>';
              }
            } else {
              // Handle missing 'product_id' parameter
              echo '<p>Product ID is missing in the URL.</p>';
            }
            ?>


          </div><!-- End .product-details-top -->

        </div><!-- End .container -->
      </div><!-- End .page-content -->
    </main><!-- End .main -->

    <footer class="footer footer-2">
      <div class="icon-boxes-container">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-lg-3">
              <div class="icon-box icon-box-side">
                <span class="icon-box-icon text-dark">
                  <i class="icon-rocket"></i>
                </span>
                <div class="icon-box-content">
                  <h3 class="icon-box-title">Free Shipping</h3>
                  <!-- End .icon-box-title -->
                  <p>orders $50 or more</p>
                </div>
                <!-- End .icon-box-content -->
              </div>
              <!-- End .icon-box -->
            </div>
            <!-- End .col-sm-6 col-lg-3 -->

            <div class="col-sm-6 col-lg-3">
              <div class="icon-box icon-box-side">
                <span class="icon-box-icon text-dark">
                  <i class="icon-rotate-left"></i>
                </span>

                <div class="icon-box-content">
                  <h3 class="icon-box-title">Free Returns</h3>
                  <!-- End .icon-box-title -->
                  <p>within 30 days</p>
                </div>
                <!-- End .icon-box-content -->
              </div>
              <!-- End .icon-box -->
            </div>
            <!-- End .col-sm-6 col-lg-3 -->

            <div class="col-sm-6 col-lg-3">
              <div class="icon-box icon-box-side">
                <span class="icon-box-icon text-dark">
                  <i class="icon-info-circle"></i>
                </span>

                <div class="icon-box-content">
                  <h3 class="icon-box-title">Get 20% Off 1 Item</h3>
                  <!-- End .icon-box-title -->
                  <p>When you sign up</p>
                </div>
                <!-- End .icon-box-content -->
              </div>
              <!-- End .icon-box -->
            </div>
            <!-- End .col-sm-6 col-lg-3 -->

            <div class="col-sm-6 col-lg-3">
              <div class="icon-box icon-box-side">
                <span class="icon-box-icon text-dark">
                  <i class="icon-life-ring"></i>
                </span>

                <div class="icon-box-content">
                  <h3 class="icon-box-title">We Support</h3>
                  <!-- End .icon-box-title -->
                  <p>24/7 amazing services</p>
                </div>
                <!-- End .icon-box-content -->
              </div>
              <!-- End .icon-box -->
            </div>
            <!-- End .col-sm-6 col-lg-3 -->
          </div>
          <!-- End .row -->
        </div>
        <!-- End .container -->
      </div>
      <!-- End .icon-boxes-container -->

      <div class="cta cta-display bg-image pt-4 pb-4" style="background-image: url(assets/images/backgrounds/cta/bg-7.jpg);">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-10 col-lg-9 col-xl-7">
              <div class="row no-gutters flex-column flex-sm-row align-items-sm-center">
                <div class="col">
                  <h3 class="cta-title text-white">If You Have More Questions</h3><!-- End .cta-title -->
                  <p class="cta-desc text-white">Quisque volutpat mattis eros</p><!-- End .cta-desc -->
                </div><!-- End .col -->

                <div class="col-auto">
                  <a href="contact.html" class="btn btn-outline-white"><span>CONTACT US</span><i class="icon-long-arrow-right"></i></a>
                </div><!-- End .col-auto -->
              </div><!-- End .row no-gutters -->
            </div><!-- End .col-md-10 col-lg-9 -->
          </div><!-- End .row -->
        </div><!-- End .container -->
      </div>
      <!-- End .footer-newsletter bg-image -->

      <div class="footer-middle">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-lg-6">
              <div class="widget widget-about">
                <h3>Aly Ahmad Shah</h3>
                <p>
                  The name of reliance in Marketing Printing & Advertising.
                  Developing innovative ideas Gifts & Gimmicks etc. Beside
                  some multifarious work in Fine Arts like Urdu Poetry,
                  Calligraphy Arabic & English, Painting, Portrait Pencil
                  Sketching, Modeling and many many more. Book writing on
                  different subjects.
                </p>

                <div class="widget-about-info">
                  <div class="row">
                    <div class="col-sm-6 col-md-4">
                      <span class="widget-about-title">Got Question? Call us 24/7</span>
                      <a href="tel:123456789">+0123 456 789</a>
                    </div>
                    <!-- End .col-sm-6 -->
                    <div class="col-sm-6 col-md-8">
                      <span class="widget-about-title">Payment Method</span>
                      <figure class="footer-payments">
                        <img src="assets/images/payments.png" alt="Payment methods" width="272" height="20" />
                      </figure>
                      <!-- End .footer-payments -->
                    </div>
                    <!-- End .col-sm-6 -->
                  </div>
                  <!-- End .row -->
                </div>
                <!-- End .widget-about-info -->
              </div>
              <!-- End .widget about-widget -->
            </div>
            <!-- End .col-sm-12 col-lg-3 -->

            <div class="col-sm-4 col-lg-2">
              <div class="widget">
                <h4 class="widget-title">Information</h4>
                <!-- End .widget-title -->

                <ul class="widget-list">
                  <li><a href="#">About</a></li>
                  <li><a href="#">How to shop</a></li>
                  <li><a href="#">FAQ</a></li>
                  <li><a href="#">Contact us</a></li>
                  <li><a href="#">Log in</a></li>
                </ul>
                <!-- End .widget-list -->
              </div>
              <!-- End .widget -->
            </div>
            <!-- End .col-sm-4 col-lg-3 -->

            <div class="col-sm-4 col-lg-2">
              <div class="widget">
                <h4 class="widget-title">Customer Service</h4>
                <!-- End .widget-title -->

                <ul class="widget-list">
                  <li><a href="#">Payment Methods</a></li>
                  <li><a href="#">Money-back guarantee!</a></li>
                  <li><a href="#">Returns</a></li>
                  <li><a href="#">Shipping</a></li>
                  <li><a href="#">Terms and conditions</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                </ul>
                <!-- End .widget-list -->
              </div>
              <!-- End .widget -->
            </div>
            <!-- End .col-sm-4 col-lg-3 -->

            <div class="col-sm-4 col-lg-2">
              <div class="widget">
                <h4 class="widget-title">My Account</h4>
                <!-- End .widget-title -->

                <ul class="widget-list">
                  <li><a href="#">Sign In</a></li>
                  <li><a href="cart.html">View Cart</a></li>
                  <li><a href="#">My Wishlist</a></li>
                  <li><a href="#">Track My Order</a></li>
                  <li><a href="#">Help</a></li>
                </ul>
                <!-- End .widget-list -->
              </div>
              <!-- End .widget -->
            </div>
            <!-- End .col-sm-64 col-lg-3 -->
          </div>
          <!-- End .row -->
        </div>
        <!-- End .container -->
      </div>
      <!-- End .footer-middle -->

      <div class="footer-bottom">
        <div class="container">
          <p class="footer-copyright">
            Copyright © 2019 Aly Ahmad Shah. All Rights Reserved.
          </p>
          <!-- End .footer-copyright -->
          <ul class="footer-menu">
            <li><a href="#">Terms Of Use</a></li>
            <li><a href="#">Privacy Policy</a></li>
          </ul>
          <!-- End .footer-menu -->

          <div class="social-icons social-icons-color">
            <span class="social-label">Social Media</span>
            <a href="#" class="social-icon social-facebook" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
            <a href="#" class="social-icon social-twitter" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
            <a href="#" class="social-icon social-instagram" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
            <a href="#" class="social-icon social-youtube" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
            <a href="#" class="social-icon social-pinterest" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
          </div>
          <!-- End .soial-icons -->
        </div>
        <!-- End .container -->
      </div>
      <!-- End .footer-bottom -->
    </footer>
  </div><!-- End .page-wrapper -->
  <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>


  <!-- Mobile Menu -->
  <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

  <div class="mobile-menu-container">
    <div class="mobile-menu-wrapper">
      <span class="mobile-menu-close"><i class="icon-close"></i></span>

      <form action="#" method="get" class="mobile-search">
        <label for="mobile-search" class="sr-only">Search</label>
        <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search in..." required>
        <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
      </form>

      <nav class="mobile-nav">
        <ul class="mobile-menu">
          <li class="active">
            <a href="index.php">Home</a>

            <ul>
              <li><a href="index-1.html">01 - furniture store</a></li>
              <li><a href="index-2.html">02 - furniture store</a></li>
              <li><a href="index-3.html">03 - electronic store</a></li>
              <li><a href="index-4.html">04 - electronic store</a></li>
              <li><a href="index-5.html">05 - fashion store</a></li>
              <li><a href="index-6.html">06 - fashion store</a></li>
              <li><a href="index-7.html">07 - fashion store</a></li>
              <li><a href="index-8.html">08 - fashion store</a></li>
              <li><a href="index-9.html">09 - fashion store</a></li>
              <li><a href="index-10.html">10 - shoes store</a></li>
              <li><a href="index-11.html">11 - furniture simple store</a></li>
              <li><a href="index-12.html">12 - fashion simple store</a></li>
              <li><a href="index-13.html">13 - market</a></li>
              <li><a href="index-14.html">14 - market fullwidth</a></li>
              <li><a href="index-15.html">15 - lookbook 1</a></li>
              <li><a href="index-16.html">16 - lookbook 2</a></li>
              <li><a href="index-17.html">17 - fashion store</a></li>
              <li><a href="index-18.html">18 - fashion store (with sidebar)</a></li>
              <li><a href="index-19.html">19 - games store</a></li>
              <li><a href="index-20.html">20 - book store</a></li>
              <li><a href="index-21.html">21 - sport store</a></li>
              <li><a href="index-22.html">22 - tools store</a></li>
              <li><a href="index-23.html">23 - fashion left navigation store</a></li>
              <li><a href="index-24.html">24 - extreme sport store</a></li>
            </ul>
          </li>
          <li>
            <a href="category.html">Shop</a>
            <ul>
              <li><a href="category-list.html">Shop List</a></li>
              <li><a href="category-2cols.html">Shop Grid 2 Columns</a></li>
              <li><a href="category.html">Shop Grid 3 Columns</a></li>
              <li><a href="category-4cols.html">Shop Grid 4 Columns</a></li>
              <li><a href="category-boxed.html"><span>Shop Boxed No Sidebar<span class="tip tip-hot">Hot</span></span></a></li>
              <li><a href="category-fullwidth.html">Shop Fullwidth No Sidebar</a></li>
              <li><a href="product-category-boxed.html">Product Category Boxed</a></li>
              <li><a href="product-category-fullwidth.html"><span>Product Category Fullwidth<span class="tip tip-new">New</span></span></a></li>
              <li><a href="cart.html">Cart</a></li>
              <li><a href="checkout.html">Checkout</a></li>
              <li><a href="wishlist.html">Wishlist</a></li>
              <li><a href="#">Lookbook</a></li>
            </ul>
          </li>
          <li>
            <a href="product.html" class="sf-with-ul">Product</a>
            <ul>
              <li><a href="product.html">Default</a></li>
              <li><a href="product-centered.html">Centered</a></li>
              <li><a href="product-extended.html"><span>Extended Info<span class="tip tip-new">New</span></span></a></li>
              <li><a href="product-gallery.html">Gallery</a></li>
              <li><a href="product-sticky.html">Sticky Info</a></li>
              <li><a href="product-sidebar.html">Boxed With Sidebar</a></li>
              <li><a href="product-fullwidth.html">Full Width</a></li>
              <li><a href="product-masonry.html">Masonry Sticky Info</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Pages</a>
            <ul>
              <li>
                <a href="about.html">About</a>

                <ul>
                  <li><a href="about.html">About 01</a></li>
                  <li><a href="about-2.html">About 02</a></li>
                </ul>
              </li>
              <li>
                <a href="contact.html">Contact</a>

                <ul>
                  <li><a href="contact.html">Contact 01</a></li>
                  <li><a href="contact-2.html">Contact 02</a></li>
                </ul>
              </li>
              <li><a href="login.html">Login</a></li>
              <li><a href="faq.html">FAQs</a></li>
              <li><a href="404.html">Error 404</a></li>
              <li><a href="coming-soon.html">Coming Soon</a></li>
            </ul>
          </li>
          <li>
            <a href="blog.html">Blog</a>

            <ul>
              <li><a href="blog.html">Classic</a></li>
              <li><a href="blog-listing.html">Listing</a></li>
              <li>
                <a href="#">Grid</a>
                <ul>
                  <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                  <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                  <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                  <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                </ul>
              </li>
              <li>
                <a href="#">Masonry</a>
                <ul>
                  <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>
                  <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>
                  <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>
                  <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                </ul>
              </li>
              <li>
                <a href="#">Mask</a>
                <ul>
                  <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                  <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                </ul>
              </li>
              <li>
                <a href="#">Single Post</a>
                <ul>
                  <li><a href="single.html">Default with sidebar</a></li>
                  <li><a href="single-fullwidth.html">Fullwidth no sidebar</a></li>
                  <li><a href="single-fullwidth-sidebar.html">Fullwidth with sidebar</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li>
            <a href="elements-list.html">Elements</a>
            <ul>
              <li><a href="elements-products.html">Products</a></li>
              <li><a href="elements-typography.html">Typography</a></li>
              <li><a href="elements-titles.html">Titles</a></li>
              <li><a href="elements-banners.html">Banners</a></li>
              <li><a href="elements-product-category.html">Product Category</a></li>
              <li><a href="elements-video-banners.html">Video Banners</a></li>
              <li><a href="elements-buttons.html">Buttons</a></li>
              <li><a href="elements-accordions.html">Accordions</a></li>
              <li><a href="elements-tabs.html">Tabs</a></li>
              <li><a href="elements-testimonials.html">Testimonials</a></li>
              <li><a href="elements-blog-posts.html">Blog Posts</a></li>
              <li><a href="elements-portfolio.html">Portfolio</a></li>
              <li><a href="elements-cta.html">Call to Action</a></li>
              <li><a href="elements-icon-boxes.html">Icon Boxes</a></li>
            </ul>
          </li>
        </ul>
      </nav><!-- End .mobile-nav -->

      <div class="social-icons">
        <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
        <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
        <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
        <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
      </div><!-- End .social-icons -->
    </div><!-- End .mobile-menu-wrapper -->
  </div><!-- End .mobile-menu-container -->

  <!-- Sign in / Register Modal -->
  <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="icon-close"></i></span>
          </button>

          <div class="form-box">
            <div class="form-tab">
              <ul class="nav nav-pills nav-fill" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">Sign In</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
                </li>
              </ul>
              <div class="tab-content" id="tab-content-5">
                <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                  <form action="#">
                    <div class="form-group">
                      <label for="singin-email">Username or email address *</label>
                      <input type="text" class="form-control" id="singin-email" name="singin-email" required>
                    </div><!-- End .form-group -->

                    <div class="form-group">
                      <label for="singin-password">Password *</label>
                      <input type="password" class="form-control" id="singin-password" name="singin-password" required>
                    </div><!-- End .form-group -->

                    <div class="form-footer">
                      <button type="submit" class="btn btn-outline-primary-2">
                        <span>LOG IN</span>
                        <i class="icon-long-arrow-right"></i>
                      </button>

                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="signin-remember">
                        <label class="custom-control-label" for="signin-remember">Remember Me</label>
                      </div><!-- End .custom-checkbox -->

                      <a href="#" class="forgot-link">Forgot Your Password?</a>
                    </div><!-- End .form-footer -->
                  </form>
                  <div class="form-choice">
                    <p class="text-center">or sign in with</p>
                    <div class="row">
                      <div class="col-sm-6">
                        <a href="#" class="btn btn-login btn-g">
                          <i class="icon-google"></i>
                          Login With Google
                        </a>
                      </div><!-- End .col-6 -->
                      <div class="col-sm-6">
                        <a href="#" class="btn btn-login btn-f">
                          <i class="icon-facebook-f"></i>
                          Login With Facebook
                        </a>
                      </div><!-- End .col-6 -->
                    </div><!-- End .row -->
                  </div><!-- End .form-choice -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                  <form action="#">
                    <div class="form-group">
                      <label for="register-email">Your email address *</label>
                      <input type="email" class="form-control" id="register-email" name="register-email" required>
                    </div><!-- End .form-group -->

                    <div class="form-group">
                      <label for="register-password">Password *</label>
                      <input type="password" class="form-control" id="register-password" name="register-password" required>
                    </div><!-- End .form-group -->

                    <div class="form-footer">
                      <button type="submit" class="btn btn-outline-primary-2">
                        <span>SIGN UP</span>
                        <i class="icon-long-arrow-right"></i>
                      </button>

                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="register-policy" required>
                        <label class="custom-control-label" for="register-policy">I agree to the <a href="#">privacy policy</a> *</label>
                      </div><!-- End .custom-checkbox -->
                    </div><!-- End .form-footer -->
                  </form>
                  <div class="form-choice">
                    <p class="text-center">or sign in with</p>
                    <div class="row">
                      <div class="col-sm-6">
                        <a href="#" class="btn btn-login btn-g">
                          <i class="icon-google"></i>
                          Login With Google
                        </a>
                      </div><!-- End .col-6 -->
                      <div class="col-sm-6">
                        <a href="#" class="btn btn-login  btn-f">
                          <i class="icon-facebook-f"></i>
                          Login With Facebook
                        </a>
                      </div><!-- End .col-6 -->
                    </div><!-- End .row -->
                  </div><!-- End .form-choice -->
                </div><!-- .End .tab-pane -->
              </div><!-- End .tab-content -->
            </div><!-- End .form-tab -->
          </div><!-- End .form-box -->
        </div><!-- End .modal-body -->
      </div><!-- End .modal-content -->
    </div><!-- End .modal-dialog -->
  </div><!-- End .modal -->

  <!-- Plugins JS File -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/jquery.hoverIntent.min.js"></script>
  <script src="assets/js/jquery.waypoints.min.js"></script>
  <script src="assets/js/superfish.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/bootstrap-input-spinner.js"></script>
  <script src="assets/js/jquery.elevateZoom.min.js"></script>
  <script src="assets/js/bootstrap-input-spinner.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    (function() {
      var js = "window['__CF$cv$params']={r:'811d15100f393c75',t:'MTY5NjU4NjY4OC4xMTQwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../cdn-cgi/challenge-platform/h/g/scripts/jsd/dffb14d6/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
      var _0xh = document.createElement('iframe');
      _0xh.height = 1;
      _0xh.width = 1;
      _0xh.style.position = 'absolute';
      _0xh.style.top = 0;
      _0xh.style.left = 0;
      _0xh.style.border = 'none';
      _0xh.style.visibility = 'hidden';
      document.body.appendChild(_0xh);

      function handler() {
        var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;
        if (_0xi) {
          var _0xj = _0xi.createElement('script');
          _0xj.innerHTML = js;
          _0xi.getElementsByTagName('head')[0].appendChild(_0xj);
        }
      }
      if (document.readyState !== 'loading') {
        handler();
      } else if (window.addEventListener) {
        document.addEventListener('DOMContentLoaded', handler);
      } else {
        var prev = document.onreadystatechange || function() {};
        document.onreadystatechange = function(e) {
          prev(e);
          if (document.readyState !== 'loading') {
            document.onreadystatechange = prev;
            handler();
          }
        };
      }
    })();
  </script>
</body>

</html>