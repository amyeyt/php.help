<!-- Footer Start -->
<footer >

    <div class="text pt-5 pb-4">
    <div class="container text-center text-md-left">

        <div class="row text-center text-md-left">

            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold texti">About Us</h5> 
                <p>Just a little throwback to some of our childhoods and some of our earlier days. Some items I have never personally had but I know some of and maybe most of you have! I hope you like it.</p>
                
            </div>

            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold texti">Menu</h5>
                <?php
                    wp_nav_menu( array(
                        'theme_location' => 'footerMenuLocation',
                    )); 
                ?>
            </div>

            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold texti">Contact Information</h5>
                <p>
                    <i class="fas fa-phone mr-3"></i> 999-990-3040</a>
                </p>
                <p>
                    <i class="fas fa-envelope mr-3"></i> Spprt4You@gmail.com</a>
                </p>
                
            </div>

        </div>

        <hr class="mb-4"> 

            <div class="row align-items-center">

                <div class="col-md-7 mol-lg-8">
                    <p>© 2021 Copyright: MDBootstrap.com </p>

                </div>

                <div class="icons col-md-5 col-lg-4">
                    <div class="text-center text-md-right">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/" class="btn-floating btn-sm text" style="font-size: 20px;"><i class="fab fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://twitter.com/" class="btn-floating btn-sm text" style="font-size: 20px;"><i class="fab fa-twitter-square"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.instagram.com/" class="btn-floating btn-sm text" style="font-size: 20px;"><i class="fab fa-instagram"></i></a>
                            </li>


                        </ul>


                    </div>
                </div>


            </div>

    </div>

</div>
    
</footer>
<!-- Footer End -->
      
      <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>