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
                    <li><a href="importantDates.php">Important Dates</a></li>
                    <li class="activeSidebar"><a><i class="fa fa-chevron-right" aria-hidden="true"></i> Examination schedule</a></li>
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
                <h1>Examination Schedule</h1>

                <hr/>

                <div class="table-responsive">
                    <table id="dates" class="table table-striped">
                        <thead>
                            <tr>
                                <th>Winter 2017</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>June 3 and June 4, 2016</td>
                                <td>Progress examinations for spring duration 1 courses and final examinations for duration 2 courses</td>
                            </tr>

                            <tr>
                                <td>July 8 to July 9, 2016 </td>
                                <td> Final examinations for duration 1 and duration 3 courses</td>
                            </tr>


                        </tbody>
                    </table>
                </div>
                <div class="table-responsive">
                    <table id="dates" class="table table-striped">
                        <thead>
                            <tr>
                                <th>Summer 2017</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>August 19, 2016</td>
                                <td>Summer examinations for summer courses</td>
                            </tr>



                        </tbody>
                    </table>
                </div>
                <div class="table-responsive">
                    <table id="dates" class="table table-striped">
                        <thead>
                            <tr>
                                <th>Fall 2017</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>December 9 to December 20, 2016</td>
                                <td>Progress examinations for duration 1 courses and final examinations for duration 2 courses</td>
                            </tr>




                        </tbody>
                    </table>
                </div>
                
                <h4>Examination Schedule by Subject</h4>
                <p>Looking for a complete listing of exams by course?</p>
                <div class = "viewButton">View All <i class="fa fa-chevron-right" aria-hidden="true"></i>
                </div>
            </div>

        </div>



    </div>





    <?php require("footer.html"); ?>