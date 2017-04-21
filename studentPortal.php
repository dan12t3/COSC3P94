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
                <li class="active"><a href="#"><i class="fa fa-home" aria-hidden="true"></i>
Student Portal</a></li>
                    <li><a href="#"><i class="fa fa-scribd" aria-hidden="true"></i>
Sakai</a></li>
                    <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>
Web Mail</a></li>
                    <li><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i>
 Logout</a></li>
            </ul>
          
            </div>
        </div>
    </nav>
    <div class="customContainer">
        <div class="row studentPortalSection1">
            <div class="col-lg-3">
                <ul id="menu">
                    <li id="academics">Academics <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </li>
                    <li class="subAcademics"><a>Register</a></li>
                    <li class="subAcademics"><a>Course Planning</a></li>
                    <li class="subAcademics"><a>Course Schedule</a></li>
                    <li class="subAcademics"><a>Exam Schedule</a></li>
                    <li class="subAcademics"><a>Program Status</a></li>
                    <li id="financial">Financial <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </li>

                    <li class="subFinancial"><a>Financial History
</a></li>
                    <li class="subFinancial"><a>Fee Calculator</a></li>
                    <li class="subFinancial"><a>Tax Awards</a></li>
                    <li class="subFinancial"><a>Tax Certificates (T4)</a></li>

                    <li id="services">Services <i class="fa fa-chevron-right" aria-hidden="true"></i>
                    </li>
                    <li class="subServices"><a>Request Transcript</a></li>
                    <li class="subServices"><a>Request Tutoring</a></li>
                    <li class="subServices"><a>Transfer Credits</a></li>
                    <li class="subServices"><a>Apply for Residence</a></li>
                    <li class="subServices"><a>Change Address</a></li>
                    <li class="subServices"><a>Change Account Information</a></li>
                    <li class="subServices"><a>Intent to Graduate</a></li>
                </ul>

            </div>
            <div class="col-lg-6">
                <div class="alertBox">
                    <p><i class="fa fa-exclamation-circle" aria-hidden="true"></i><strong>Alert: </strong>Your fees have not been paid. Please check your financial account and pay the required amount.</p>
                </div>
                <div class="courseMarks">
                    <h4>Fall 2017</h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Course</th>
                                <th>Marks</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>COSC 4P03</td>
                                <td>80%</td>
                            </tr>
                            <tr>
                                <td>COSC 3P94</td>
                                <td>100%</td>
                            </tr>
                            <tr>
                                <td>COSC 4P80</td>
                                <td>200%</td>
                            </tr>

                            <tr>
                                <td>MATH 2P98</td>
                                <td>80%</td>
                            </tr>

                            <tr>
                                <td>COSC 4P00</td>
                                <td>0%</td>
                            </tr>
                        </tbody>
                    </table>

                </div>

            </div>

            <div class="col-lg-3 eventBox">

                <h4>Dates <span>ALL DATES <i class="fa fa-chevron-right" aria-hidden="true"></i></span></h4>
                <div class="row">
                    <ul>
                        <li>
                            <h5>March 1</h5>
                            <p>COSC 4P80 A1 due</p>
                        </li>
                        <li>
                            <h5>March 3</h5>
                            <p>COSC 4P00 Midterm</p>
                        </li>
                        <li>
                            <h5>March 7</h5>
                            <p>COSC 3P94 Project Stage 2</p>
                        </li>
                        <li class="normalDate">
                            <h5>March 10</h5>
                            <p>Last day to drop courses</p>
                        </li>
                        <li>
                            <h5>March 19</h5>
                            <p>Some due date Y</p>
                        </li>
                    </ul>
                </div>

            </div>

        </div>
    </div>




    <?php require("footer.html"); ?>