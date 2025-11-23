<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LaborTrack</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/css/main.css">
    <link rel="stylesheet" href="style/css/report.css">
    <link rel="icon" href="resources/labortrack.png" type="image/x-icon">
    <script src="js/reporting.js" defer></script>
</head>
<body>
    <div class="scroll-container">
        <!-- Scroll Container Div Start-->
    
        <header>
            <div class="header-flex">
                <div class="header-flex-container">
                    <a href="index.php"class="header-flex-container">
                        <img src="resources/labortrack.png" alt="MedWeb Logo" id="logo" class ="header-flex-item">
                        <h3 id="logo-text" class="header-flex-item">LaborTrack</h3>
                    </a>
                </div>
                <nav class="nav-container">
                    <ul class="nav">
                        <li class="nav-item"><a href="index.php">HOME</a></li>
                        <li class="nav-item"><a id="pop-up-btn" href="#">SIGN IN</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        
        <div class="reportBox">
            <!--Container Start -->

            <div class="reportBoxChildFeed">
                <!-- Feed Div Start -->
            
                <!-- Feed Div End -->
            </div>
             
            <div class="reportBoxChildPanel">
                <!-- Side Panel Container Start -->

                <div class="PanelChild">
                    <!-- Side Panel Div Start -->

                    <button id="reportPopup">
                        CREATE A REPORT
                    </button>

                    <form action="">
                        <br>
                        <p class="reportPageBody">Want to know that status of your filed report?<br><br>
                        Please check your inbox and look for the email<br>labeled: <i><b>Report Update</b></i> <br> or <br>
                        Paste your report code below
                        </p>
                        <input type="text" id="reportCode" class="form-input" placeholder="Paste your report ticket here: Amphibious-Rodent  ">
                    </form>

                    <!-- Side Panel Div End -->
                </div>

                <!-- Side Panel Container End -->
            </div>

            <!-- Container End -->
        </div>

        <!-- Scroll Container End  -->
    </div>

    <div id="reporting_modal">
        <div class="violation-reporting">
            <div class="violationInfo">
                <h3>Information about the Report</h3>
                <p class="label">Alias or Email (optional)</p>
                <input class="violation-reporting-input" type="text" id="username" name="username" placeholder="Random Username or Your Preferred Alias (optional)">
                <div class="violationReportFlexHolder">
                    <div>
                        <p class="label">Region</p>
                        <input class="violation-reporting-input" type="text" list="regions" name="region_select" id="region_select" placeholder="Region" required>
                        <datalist id="regions">
                            <option value="BARMM">
                            <option value="CAR">
                            <option value="NCR">
                            <option value="NIR">
                            <option value="Region 1">
                            <option value="Region 2">
                            <option value="Region 3">
                            <option value="Region 4">
                            <option value="Region 5">
                            <option value="Region 6">
                            <option value="Region 7">
                            <option value="Region 8">
                            <option value="Region 9">
                            <option value="Region 10">
                            <option value="Region 11">
                            <option value="Region 12">
                            <option value="Region 13">
                        </datalist>
                    </div>
                    <div>
                        <p class="label">City/Municipality</p>
                        <input class="violation-reporting-input" type="text" placeholder="City/Municipality" required>
                    </div>
                </div>
                <div class="violationReportFlexHolder">
                    <div>
                        <p class="label">Job Position</p>
                        <input class="violation-reporting-input" type="text" placeholder="Job Position" required>
                    </div>
                    <div>
                        <p class="label">Company Type</p>
                        <input class="violation-reporting-input" list="company_type" placeholder="Company Type" required>
                        <datalist id="company_type">
                            <option value="Government">
                            <option value="NGO">
                            <option value="Private">
                        </datalist>
                    </div>
                    
                </div>
                <div>
                    <p class="label">Date of the Incident</p>
                    <input class="violation-reporting-input" type="text" placeholder="Date of Violation" required>
                </div>                
            </div>
            <div class="violationRight">
                <h3>Context of the Incident</h3>
                <form action="">
                    <div>    
                        <p class="label">Date of the Incident</p>
                        <input class="violation-reporting-input" list="violation_cat" placeholder="Violation Category">
                        <datalist id="violation_cat">
                            <option value="Wage Violation">
                            <option value="Discrimination">
                            <option value="Harrasment">
                            <option value="Overtime Violation">
                            <option value="Work and Safety Violation">
                            <option value="Work and Safety Violation">
                        </datalist>
                    </div>
                    <div> 
                        <p class="label">Date of the Incident</p>
                        <textarea class="violation-reporting-input" placeholder="Tell us more about this violation" rows="7" required></textarea>
                        <button id="submitReport" type="submit">SEND MESSAGE</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
    <footer>
        <p>&copy; 2025 MedWeb. All rights reserved.</p>
    </footer>
</body>
</html>