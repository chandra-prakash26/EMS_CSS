<html>
    <head>
        <title>EMPLOYEE MANAGEMENT SYSTEM</title>
        <link rel="stylesheet" href="style.css" type="text/css" />
        <script>
            window.onload = function () {
                if (document.querySelectorAll("section:target").length == 0) {
                    window.location = "#home";
                }
            };
        </script>
        <body>
            <h1 style="text-align: center; color: white; font-size: 50px; background-color: #8a0051;">EMPLOYEE MANAGEMENT SYSTEM</h1>
            <div class="parallax">
                <main>
                    <!--Navigation Bar-->
                    <div class="navbar">
                        <a href="table.php">Home</a>
                        <a href="#news">News</a>
                        <div class="dropdown">
                            <button class="dropbtn">
                                Dropdown
                                <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-content">
                                <div class="header">
                                    <h2>Mega Menu</h2>
                                </div>
                                <div class="row">
                                    <div class="column">
                                        <h3>Employee</h3>
                                        <a href="#empreg">Register Employee</a>
                                        <a href="empname.php">Employee Name</a>
                                        <a href="#empdelete">Remove Employee</a>
                                    </div>
                                    <div class="column">
                                        <h3>Update</h3>
                                        <a href="#updateemployee">Update Employee Details</a>
                                        <a href="#updateproject">Update Project Details</a>
                                    </div>
                                    <div class="column">
                                        <h3>Project</h3>
                                        <a href="#addproject">Add Project</a>
                                        <a href="displayproject.php">Display Project</a>
                                        <a href="#assignproject">Assign Project</a>
                                    </div>
                                    <div class="column">
                                        <h3>Project</h3>
                                        <a href="projName.php">Display Project Name</a>
                                        <a href="#displayAssignProject">Display Assign Projects</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Employee Details-->
                    <div class="form">
                        <section id="empreg">
                            <form action="database.php" method="post">
                                <fieldset>
                                    <legend>Employee Registration</legend>
                                    <div>
                                        <label for="firstname">First Name:</label>
                                        <input type="text" id="firstname" name="firstname" value="" required aria-required="true" />
                                    </div>
                                    <div>
                                        <label for="lastname">Last Name:</label>
                                        <input type="text" id="lastname" name="lastname" value="" required aria-required="true" />
                                    </div>
                                    <div>
                                        <label for="mobno">MobileNo:</label>
                                        <input type="tel" id="mobno" name="mobno" required /><br />
                                    </div>
                                    <div>
                                        <label for="DOB">Date Of Birth:</label>
                                        <input type="date" id="DOB" name="DOB" value="" required aria-required="true" />
                                    </div>
                                    <div class="button">
                                        <label>Gender:</label><br />
                                        <input type="radio" id="male" name="gender" value="male">
                                         <label for="male" style='position: relative; left:-180px;'>Male</label><br>
                                         <input type="radio" id="female" name="gender" value="female">
                                         <label for="female" style='position: relative; left:-180px;'>Female</label><br>
                                         <input type="radio" id="other" name="gender" value="other">
                                         <label for="other" style='position: relative; left:-180px;'>Other</label><br>
                                        <br />
                                    </div>
                                    <div>
                                        <label>City:</label>
                                        <select name="city">
                                            <option value="hyderabad">hyderabad</option>
                                            <option value="kolkata">kolkata</option>
                                            <option value="chennai">chennai</option>
                                            <option value="bangalore">bangalore</option>
                                            <option value="patna">patna</option>
                                            <option value="Others">Others</option>
                                        </select>
                                        <br />
                                        <br />
                                    </div>
                                    <div>
                                        <label for="hobby">Hobby:</label><br />
                                        <input type="checkbox" id="sports" name="hobby[]" value="sports" />
                                        <label for="sports" style='position: relative; left:-180px;'>Sports</label><br />
                                        <input type="checkbox" id="dance" name="hobby[]" value="dance" />
                                        <label for="dance" style='position: relative; left:-180px;'>Dance</label><br />
                                        <input type="checkbox" id="study" name="hobby[]" value="study" />
                                        <label for="study" style='position: relative; left:-180px;'>Study</label><br />
                                        <br />
                                    </div>
                                    <br />
                                    <div class="submit">
                                        <input type="submit" value="Submit" />
                                    </div>
                                </fieldset>
                            </form>
                            <a href="http://localhost/DB/mega.php#home" style='color:blue; margin:230px;'>
                                    Click here to go for home page</a>;
                        </section>
                    </div>

                    <!--remove employee details-->
                    <div class="form">
                        <section id="empdelete">
                            <legend style="text-align: center; padding-top:10px; font-size:30px;margin:5px;">Remove Employee Details</legend>
                            <br />
                            <br />
                            <form action="empdelete.php" method="post">
                                <div>
                                    <label for="empid">Employee ID:</label>
                                    <input type="text" id="empid" name="empid" value="" required aria-required="true" /><br />
                                    <br />
                                </div>
                                <div class="submit">
                                    <input type="submit" value="Submit" />
                                </div>
                            </form>
                        </section>
                    </div>

                    <!--add project-->
                    <div class="form">
                        <section id="addproject">
                            <fieldset>
                                <legend style="text-align: center; padding-top:10px; font-size:30px;margin:5px;">Add Project</legend>
                                <form action="addproject.php" method="post">
                                    <div>
                                        <label for="projname">Project Name:</label>
                                        <input type="text" id="projname" name="projname" value="" required aria-required="true" /><br />
                                    </div>
                                    <div>
                                        <label for="projdesc">Project Desc:</label>
                                        <input type="text" id="projdesc" name="projdesc" value="" required aria-required="true" /><br />
                                    </div>
                                    <div>
                                        <label for="projstartdate">Project Start Date:</label>
                                        <input type="date" id="projstartdate" name="projstartdate" value="" required aria-required="true" /><br />
                                    </div>
                                    <div>
                                        <label for="projenddate">Project End Date:</label>
                                        <input type="date" id="projenddate" name="projenddate" value="" required aria-required="true" /><br />
                                        <br />
                                    </div>
                                    <div class="submit">
                                        <input type="submit" value="Submit" />
                                    </div>
                                </form>
                            </fieldset>
                        </section>
                    </div>
                    
                    <!--update project details-->
                    <div class="form">
                        <section id="updateproject">
                            <legend style="text-align: center; padding-top:10px; font-size:30px;margin:5px;">Update Project Details</legend>
                            <br />
                            <br />
                            <form action="updateproject.php" method="post">
                                <div>
                                    <label for="projid">Project ID:</label>
                                    <input type="text" id="projid" name="projid" value="" required aria-required="true" /><br />
                                    <br />
                                </div>
                                <div>
                                    <label for="projname">Update Project Name:</label>
                                    <input type="text" id="projname" name="projname" value="" required aria-required="true" /><br />
                                    <br />
                                </div>
                                <div class="submit">
                                    <input type="submit" value="Submit" />
                                </div>
                            </form>
                        </section>
                    </div>

                    <!--update Employee Details-->
                    <div class="form">
                        <section id="updateemployee">
                            <legend style="text-align: center; padding-top:10px; font-size:30px;margin:5px;">Update Employee Details</legend>
                            <br />
                            <br />
                            <form action="updateemployee.php" method="post">
                                <div>
                                    <label for="empid">Employee ID:</label>
                                    <input type="text" id="empid" name="empid" value="" required aria-required="true" /><br />
                                </div>
                                <div>
                                    <label for="mobileno">Update Employee MobileNo:</label>
                                    <input type="text" id="mobileno" name="mobileno" value="" required aria-required="true" /><br />
                                    <br />
                                </div>
                                <div class="submit">
                                    <input type="submit" value="Submit" />
                                </div>
                            </form>
                        </section>
                    </div>

                    <!--assign project to Employee -->
                    <div class="form">
                        <section id="assignproject">
                            <legend style="text-align: center; padding-top:10px; font-size:30px;margin:5px;">Assign Project to Employee</legend>
                            <br />
                            <br />
                            <form action="assignproject.php" method="post">
                                <div>
                                    <label for="empid">Employee ID:</label>
                                    <input type="text" id="empid" name="empid" value="" required aria-required="true" /><br />
                                </div>
                                <div>
                                    <label for="projid">Project ID:</label>
                                    <input type="text" id="projid" name="projid" value="" required aria-required="true" /><br />
                                    <br />
                                </div>
                                <div class="submit">
                                    <input type="submit" value="Submit" />
                                </div>
                            </form>
                        </section>
                    </div>

                    <!--Show Assign Project -->
                    <div class="form">
                        <section id="displayAssignProject">
                            <legend style="text-align: center; padding-top:10px; font-size:30px;margin:5px;">Project Details</legend>
                            <br />
                            <br />
                            <form action="displayAssignProject.php" method="post">
                                <div>
                                    <label for="empid">Employee ID:</label>
                                    <input type="text" id="empid" name="empid" value="" required aria-required="true" /><br /><br>
                                </div>
                                <div class="submit">
                                    <input type="submit" value="Submit" />
                                </div>
                            </form>
                        </section>
                    </div>

                </main>
            </div>
        </body>
    </head>
</html>
