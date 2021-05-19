<?php
            // Initialize the session
            session_start();

            // // Check if the user is logged in, if not then redirect him to login page
            // if($_SESSION['Active']==false)
            // {header("location: index_resume1.php");
            // } --> -->

            

            if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
                    header("location: index_resume1.php");
                        exit;}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UFT-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style_welcome_resume.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title> Angella Marston Resume</title>
    </head>

    <body>
        <div class="print-area">
            <div class="header">
                <img src="me2.jpg">
                <div class="header-text">
                    <h1> ANGELLA MARSTON </h1>
                    <p>Web Developer</p>
                </div>
            </div>

            <div class="content">
                <div class="left-area">
                    <div class="contact">
                        <h4>CONTACT</h4>
                        <h5>Phone</h5>
                        <p> 1876-454-6395</p>
                        <h5>Email</h5>
                        <p>marston.angella@hotmail.com</p>
                        <h5>Address</h5>
                        <p> Lot 301, 2nd way, <br>
                            Christian Gardens,
                            <br>Gregory Park P.O.,<br>
                            St.Catherine, Jamaica.
                        </p>
                    </div>
                    <div class="skills">
                        <h1>SKILLS</h1>
                        <div class="bars">
                            <div class="bar">
                                <p>PHP</p>
                                <span></span>
                            </div>
                            <div class="bar">
                                <p>HTML/CSS</p>
                                <span></span>
                            </div>
                            <div class="bar">
                                <p>SQL</p>
                                <span></span>
                            </div>
                            <div class="bar">
                                <p>Team player</p>
                                <span></span>
                            </div>
                            <div class="bar">
                                <p>Problem Solving</p>
                                <span></span>
                            </div>
                            <div class="bar">
                                <p>Testing & Debugging</p>
                                <span></span>
                            </div>

                        </div>
                        <div class="project">
                            <h1>PROJECT</h1>
                            <p>&#10004; <b>Login Form:</b> <a href="login_form.pdf">view file</a><br>
                                &#10004; <b>Time Table: </b><a href="timetable.pdf">view file</a><br>
                                &#10004; <b>Student Marks Table: </b><a href="marks_table.pdf">view file</a><br>
                                &#10004; <b>Fetch Data from Database: </b>&nbsp;<a href="retrieve_data_from_database_using_php.pdf">view file</a>
                            </p>
                        </div>
                        <div class="interest">
                            <h1>INTERESTS</h1>
                            <p>&#10004; Graphic designing<br>
                                &#10004; Debugging code<br>
                                &#10004; Reading Novels</p>
                        </div>
                        <div class="ref">
                            <h1>REFERENCES</h1>
                            <ol TYPE="1">
                                <p>
                                    <li><b>Name:</b> Mr. Mathew Kendley.<br><b>Relation:</b> Computer Repairs Instructor.<br><b>Address:</b> HEART/NSTA Trust
                                        (National Tools & Engineering Institute)
                                        7 Ashenheim Rd, Kingston.<br><b>Telephone No.:</b> 1876-460-9493.
                                </p>
                                </li><br>
                                <li> <b>Name:</b> Miss. Cheanette Stobbs, Attorney-at-Law.<br>
                                    <b>Relation: </b>Former Employer.<br><b>Address: </b> 24B,Phase 1, Portmore Pines,
                                    Greater Portmore P.O.,St.Catherine.<br><b>Telephone No.:</b> 1876-363-2565.
                                </li>
                            </ol>

                        </div>

                    </div>

                </div>


                <div class="right-area">
                    <div class="objective">
                        <h1><span><i class="fa fa-archive"></i>
                            </span>CAREER OBJECTIVE</h1>
                        <p> A highly skilled Information technology
                            professional with strong experience and knowledge creating high-quality, scalable,
                            predictable, and high-performance web applications
                            seeks the role of Web Developer at your company.
                        </p><br>
                    </div>
                    <div class="education">
                        <h1><span><i class="fa fa-book"></i></span>
                            EDUCATION</h1>
                        <div class="edu-group">

                            <p>Amber Group/Heart Trust NTA</p><span>Present</span>
                        </div>

                        <div class="edu-group">
                            <span>2014-2015</span>
                            <p>National Tool & Engineering Institute</p>
                        </div>

                        <div class="edu-group">
                            <span>2013-2014</span>
                            <p>Bridgeport Evening Institute</p>
                        </div>

                        <div class="edu-group">
                            <span>2008-2013</span>
                            <p>Jonathan Grant High School</p>
                        </div>

                        <div class="edu-group">
                            <span>2002-2008</span>
                            <p>Southborough Primary School</p><br>
                        </div>
                    </div>

                    <div class="qual">
                        <h1><span><i class="fa fa-graduation-cap"></i>
                            </span> QUALIFICATIONS
                        </h1>
                        <div class="qual-group">
                            <p>Pending<br>PHP Web Developer<span>
                                    Level II</span> <br>NVQ-J Certificate</p>
                        </div>

                        <div class="qual-group">
                            <p>2015<br>System Administration<span>Level III</span>
                                <br>NVQ-J Certificate
                            </p>
                        </div>
                        <div class="qual-group">
                            <p>2014<br>Computer Support & Services(Repairs)<span>Level II</span>
                                <br>NVQ-J Certificate
                            </p>
                        </div>
                        <div class="qual-group">
                            <p>2013-2014<br>CSEC Proficiency:<br>Information Technology<span><br><br>Grade I<br>
                                    Grade II<br>Grade II<br>Grade II<br>Grade III<br>Grade III<br>Grade III<br>Grade III
                                </span><br>Integrated Science<br>English B<br>Social Studies<br>Office Administration
                                <br>Business Adminstration<br>Mathematics<br>English
                            </p><br>
                        </div>

                    </div>
                    <div class="work">
                        <h1><span><i class="fa fa-briefcase"></i>
                            </span>WORK EXPERIENCE</h1>
                        <div class="work-group">
                            <h3>Legal Assistant</h3>
                            <h4>Cheanette A. Stobbs, Attoreny-at-Law<br><i>Main Functions:</i></h4>
                            <span>2017-2020</span>
                        </div>

                        <div class="work-group">
                            <ul>
                                <p>
                                    <li>Create letter, invoices, statement of account and legal documents.</li>
                                    <li>Gather and arrange legal documents for attorney review and case preparation.</li>
                                    <li>Scan, email and photocopy documents.</li>
                                    <li> Call clients, and other lawyers to schedule interviews, meetings, and depositions.</li>
                                    <li>Organize and maintain documents in a paper or electronic filing systems.<br><br></li>
                                </p>
                            </ul>
                        </div>
                        <div class="work-group">
                            <h3>Junior Computer Repairs/Phone Technician</h3>
                            <h4>123 Jewellers Pawn and Loan<br><i>Main Functions:</i></h4>
                            <span>Jul-Oct 2016</span>
                        </div>
                        <div class="work-group">
                            <ul>
                                <p>
                                    <li>Offer timely technical support and teach users how to utilize computers correctly.</li>
                                    <li> Setting up hardware and installing and configure software and drivers.</li>
                                    <li>Maintaining and repairing technological equipment.</li>
                                    <li>Disassemble and reassemble computer/phone units as per work instructions.<br><br></li>
                                </p>
                            </ul>

                            <div class="work-group">
                                <h3>Office Clerk</h3>
                                <h4>Jamaica Cultrua Development Commission<br>Summer Job<br><i>Main Functions:</i></h4>
                                <span>Aug 2015</span>
                            </div>
                            <div class="work-group">
                                <ul>
                                    <p>
                                        <li>Answering and making phone calls.</li>
                                        <li> Reviewing files and records to answer requests for information.</li>
                                        <li>Keeping office area neat and tidy.</li>
                                        <li>Compiling records of office activities.</li>
                                    </p>
                                </ul>
                            </div>
                        </div>
                    </div>




                </div>


            </div>

        </div>

        </div>
            
            <div class="logout">
                <a href="logout.php">Logout</a>
            </div>
            <div class="print">
                <button onclick="window.print()"><i class="fa fa-print"> </i> Print</button>
            </div>
        </div>
    </body>
</html>
