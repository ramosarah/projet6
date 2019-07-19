<html>

<head>
    
</head>
<!-- Footer -->
<footer class="page-footer font-small purple-gradient pt-4">

    <!-- Footer Elements -->
    <div class="container">
        <div class="row justify-content-around ">
            <ul style="list-style-type: none">
                <li>
                    <a class="navbar-brand logo text-white" href="index.php"><i class="fas fa-walking fa-3x mr-5"></i></a>
                    <a href="http://instagram.com"><i class="fab fa-instagram fa-3x mr-5"></i> </a>
                    <a href="http://facebook.com"> <i class="fab fa-facebook fa-3x mr-5"></i></a>
                </li>
            </ul>
        </div>

        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-md-6 mb-4">

                <form class="form-inline my-2 my-lg-0" action="index.php" method="GET">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="search">
                    <button class="btn btn-outline-success text-white my-2 my-sm-0" type="submit" value="search">Search</button>
                </form>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-6 mb-4">
                <!-- THE FORM: COPY FROM HERE-->
                <form onsubmit="return signup(this);return false;" method="post" name="subform" id="subform" action="optIn.php">
                    <div><span style="FONT-FAMILY: Arial; FONT-SIZE: 12pt; font-weight:bold;">Subscribe to our newsletter</span></div>
                    <div style="margin-top:20px">
                        <div>
                            <label style="display: inline-block;width:135px">Email:</label>
                            <input type="email" required id="email" name="email" value="">
                        </div>
                        <div>
                            <label style="display: inline-block;width:135px">Name:</label>
                            <input type="text" required name="name" id="name" value="">
                        </div>
                        <div>
                            <div style="display:inline-block;width:135px;">&nbsp;</div>
                            <input type="submit" id="submit" name="submit" value="Sign up">
                        </div>
                        <div style="width:100%"><span id="Error" style="color:red;display:none;"></span></div>
                        <div id="myResponse" style="DISPLAY:none;"></div>
                        <div id="loading" style="display:none;"><img src="wait.gif" alt=""></div>
                    </div>
                </form>
                <!-- END OF FORM: STOP HERE. -->


            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

    </div>
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright: Sarah & Adel<br>
        <a href="https://Realise.ch"> Realise.ch</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->

</html>