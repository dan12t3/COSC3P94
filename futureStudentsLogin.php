<?php require("header.html"); ?>


    <nav class="navbar navbar-default secondNav" data-spy="affix" data-offset-top="75">
        <div class="customContainer">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar2">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse" id="myNavbar2">

                <ul class="nav navbar-nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Apply</a></li>
                    <li><a href="#">Programs</a></li>
                    <li><a href="#">Campus Tours</a></li>
                    <li><a href="#">Residences</a></li>
                    <li><a href="#">Awards & Financial Aid</a></li>
                    <li><a href="#">Extracurriculars</a></li>
                </ul>
                <ul class="nav navbar-right">

                    <li class="active"><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </div>
    </nav>




    <div class="customContainer">
        <div class="row mainBody">


            <div class="col-lg-9 content col-lg-push-3">
                <div class="loginBar">

                    <div class="logo">
                        <h1>Student Portal Login</h1>
                    </div>

                    <div class="card card-container">

                        <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
                        <p id="profile-name" class="profile-name-card"></p>
                        <form class="form-signin">

                            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                            <div id="remember" class="checkbox">
                                <label>
                                    <input type="checkbox" value="remember-me"> Remember me
                                </label>
                            </div>
                            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
                        </form>
                        <!-- /form -->
                        <a href="#" class="forgot-password">
                Forgot the password?
            </a>
                    </div>
                    <!-- /card-container -->
                </div>










            </div>

            <div class="col-lg-3 col-lg-pull-9 ">
                <div class="row eventBox">

                    <h4>Portals</h4>

                    <div class="row">
                        <ul>
                            <li>
                                <h5>Office 365 WebMail</h5>

                            </li>
                            <li>
                                <h5>Sakai</h5>

                            </li>

                            <li>
                                <h5>CareerZone</h5>

                            </li>

                        </ul>
                    </div>

                </div>


                <br>

                <div class="row eventBox">

                    <h4>Account Activation</h4>
                    <div class="row">
                        <ul>
                            <li>
                                <h5>Applicant, New, Returning Student or Alumni</h5>

                            </li>
                            <li>
                                <h5>Faculty or Staff</h5>

                            </li>

                            <li>
                                <h5>Continuing Education - Request new password.</h5>

                            </li>

                        </ul>
                    </div>



                </div>
                <br>
                <div class="row eventBox">

                    <h4>Tutorial and Resources</h4>

                    <div class="row">
                        <ul>
                            <li>
                                <h5>Account activation</h5>

                            </li>
                            <li>
                                <h5>Password reset</h5>

                            </li>

                            <li>
                                <h5>Frequently asked questions</h5>

                            </li>

                        </ul>
                    </div>

                </div>






            </div>



        </div>



    </div>






    <?php require("footer.html"); ?>