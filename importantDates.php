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
                <li ><a href="futureStudentsHome.php">Home</a></li>
                <li><a href="admissions.php">Apply</a></li>
                <li><a href="futureStudentsPrograms.php">Programs</a></li>
                <li><a href="futureStudentsTours.php">Campus Tours</a></li>
                <li><a href="futureStudentsLiving.php">Residences</a></li>
                <li><a href="futureStudentsFinance.php">Awards & Financial Aid</a></li>
                <li><a href="futureStudentsExtra.php">Extracurriculars</a></li>
                <li class="active"><a href="importantDates.php">Important Dates</a></li>
            </ul>
            <ul class="nav navbar-right">

                <li><a href="futureStudentsLogin.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
            </div>
        </div>
    </nav>
    <div class="customContainer">
        <div class="row">
            <div class="col-lg-3 sideMenu">
                <h4>IN THIS SECTION</h4>
                <ul>
                    <li class="activeSidebar"><a><i class="fa fa-chevron-right" aria-hidden="true"></i> Important Dates</a></li>
                    <li><a href="examSchedule.php">Examination schedule</a></li>
                    <li><a>undergraduate studies</a></li>
                     
                    <li><a>Admission Deadlines</a></li>
                    <li><a>graduate studies</a></li>

                    <li><a>teacher education</a></li>

                    <li><a>inservice education</a></li>

                    <li><a>ESL courses</a></li>
                    <li><a>University Closures</a></li>
                    
                </ul>


            </div>
            <div class="col-lg-9">
                <h1>Important Dates</h1>
                <p>Find all important date information for all sessions and programs at Brock University.</p>
                <hr/>

                <div class="table-responsive">
                    <table id = "dates" class="table table-striped">
                        <thead>
                            <tr>
                                <th>Winter 2017</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>January 3, 2017</td>
                                <td>University re-opens</td>
                            </tr>
                            
                            <tr>
                                <td>January 9, 2017</td>
                                <td>First daat of winter term, undergraduate program- teacher education programs winter term resuems</td>
                            </tr>
                            
                            <tr>
                                <td>February 1, 2017</td>
                                <td>	Last day to submit Intent to Graduate for Spring Convocation.</td>
                            </tr>
                            <tr>
                                <td>February 20, 2017</td>
                                <td>Family Day - university closed (no classes).</td>
                            </tr>
                            <tr>
                                <td>February 21, 2017</td>
                                <td>	President’s Holiday - administrative offices closed; limited service may be available in some areas</td>
                            </tr>
                             <tr>
                                <td>February 20 - February 24, 2017</td>
                                <td>Reading Week - no classes will be held in undergraduate programs</td>
                            </tr>
                              <tr>
                                <td>March 13 - March 17, 2017</td>
                                <td>Spring break for school boards - no classes will be held in the Teacher Education program</td>
                            </tr>
                             <tr>
                                <td>April 2, 2017</td>
                                <td>Spring Open House</td>
                            </tr>
                            <tr>
                                <td>April 7, 2017</td>
                                <td>Last day for fall/winter session, duration 1 and duration 3 classes</td>
                            </tr>
                            <tr>
                                <td>April 10, 2017</td>
                                <td>Snow/reading days - day of the week missed will determine the replacement schedule of classes</td>
                            </tr>
                             <tr>
                                <td>April 14, 2017</td>
                                <td>	Good Friday - university closed; library closed</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>





<?php require("footer.html"); ?>
