<?php require("header.html"); ?>


    <nav class="navbar navbar-default secondNav" data-spy="affix" data-offset-top="75">
        <div class="customContainer">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle " data-toggle="collapse" data-target="#myNavbar2">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php" class="navbar-brand">
                    <div class="navbrand2"></div>
                </a>

            </div>
            <div class="collapse navbar-collapse" id="myNavbar2">

                <ul class="nav navbar-nav">
                    <li><a href="futureStudentsHome.php">Home</a></li>
                    <li><a href="admissions.php">Apply</a></li>
                    <li><a href="futureStudentsPrograms.php">Programs</a></li>
                    <li><a href="futureStudentsTours.php">Campus Tours</a></li>
                    <li><a href="futureStudentsLiving.php">Residences</a></li>
                    <li><a href="futureStudentsFinance.php">Awards & Financial Aid</a></li>
                    <li><a href="futureStudentsExtra.php">Extracurriculars</a></li>
                    <li><a href="importantDates.php">Important Dates</a></li>
                </ul>
                <ul class="nav navbar-right">

                    <li><a href="futureStudentsLogin.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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

                        <div class="form-signin">

                            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                            <div id="remember" class="checkbox">
                                <label>
                                    <input type="checkbox" value="remember-me"> Remember me
                                </label>
                            </div>
                            <a href="studentPortal.php">
                                <button class="btn btn-lg btn-primary btn-block btn-signin">Sign in</button>
                            </a>
                        </div>
                        <!-- /form -->
                        <a href="#" class="forgot-password">
                Forgot the password?
            </a>
                    </div>
                    <!-- /card-container -->
                </div>



            </div>

            <div class="col-lg-3 col-lg-pull-9 ">
                <div class="row sideMenu">

                    <h4>PORTALS</h4>

                    <ul>
                        <li>
                            <a href="https://adfs.brocku.ca/adfs/ls/?wa=wsignin1.0&wtrealm=urn:federation:MicrosoftOnline&wctx=bk%3D1406747354%26LoginOptions%3D3">Office 365 WebMail</a>

                        </li>
                        <li>
                            <a href="https://lms.brocku.ca/portal/">Sakai</a>

                        </li>

                        <li>
                            <a href="https://careerzone.brocku.ca/home.htm">CareerZone</a>

                        </li>

                    </ul>


                </div>


                <div class="row sideMenu">

                    <h4>ACCOUNT ACTIVATION</h4>

                    <ul>
                        <li>
                            <a href="https://my.brocku.ca/Portal/StudentActivation.aspx">Applicant, New, Returning Student or Alumni</a>

                        </li>
                        <li>
                            <a href="https://my.brocku.ca/Portal/EmployeeActivation.aspx">Faculty or Staff</a>

                        </li>

                        <li>
                            <a href="https://my.brocku.ca/Portal/ContinuingEdActivation.aspx">Continuing Education - Request new password.</a>

                        </li>

                    </ul>




                </div>
               
                <div class="row sideMenu">

                    <h4>TUTORIAL AND RESSOURCES</h4>

                    <ul>
                        <li>
                            <a href="https://my.brocku.ca/Portal/FileDownload/Account_Activation.pdf">Account activation</a>

                        </li>
                        <li>
                            <a href="https://my.brocku.ca/Portal/FileDownload/Reset_Password.pdf">Password reset</a>

                        </li>

                        <li>
                            <a href="https://my.brocku.ca/Portal/FAQ.aspx">Frequently asked questions</a>

                        </li>

                    </ul>


                </div>



            </div>



        </div>

    </div>




    <?php require("footer.html"); ?>