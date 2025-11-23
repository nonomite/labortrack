<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LaborTrack</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/css/main.css">
    <link rel="icon" href="resources/labortrack.png" type="image/x-icon">
    <script src="js/index.js" defer></script>
</head>
<body>
    <div class="scroll-container">
        <header>
            <div class="header-flex">
                <div class="header-flex-container">
                    <a href="index.php"class="header-flex-container">
                        <img src="resources/labortrack.png" alt="MedWeb Logo" id="logo" class ="header-flex-item">
                        <h1 id="logo-text" class ="header-flex-item">LaborTrack</h1>
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
    </div>

    <!-- start here -->
     <div class="calcu-flex-container">
        <div class="calculator-section">
            <h2>Wage Calculator</h2>
            <form id="wage-form">
                <div class="form-flex">
                    <input class="form-calcu" type="number" id="salary" name="salary" placeholder="Salary" required>
                    <!-- <input class="form-calcu" type="number" id="hourly-rate" name="hourly-rate" required>     -->
                        <label class="form-calcu-label" for="intervals-select">Intervals: </label>
                        <select class="form-calcu" id="intervals-select" name="car">
                            <option class="form-calcu" value="default">Select</option>
                            <option class="form-calcu" value="yearly">Yearly</option>
                            <option class="form-calcu" value="monthly">Monthly</option>
                            <option class="form-calcu" value="bi_monthly">Bi-Monthly</option>
                            <option class="form-calcu" value="weekly">Weekly</option>
                        </select>
                </div>
            </form>
            <h2>Result</h2>
            <div class="form-flex" id="result">
                <input class="form-calcu" type="number" id="wage" name="wage" placeholder="Wage" disabled>
                <select class="form-calcu" id="intervals-select" name="car">
                    <option class="form-calcu" value="default">Select</option>
                    <option class="form-calcu" value="yearly">Yearly</option>
                    <option class="form-calcu" value="monthly">Monthly</option>
                    <option class="form-calcu" value="bi_monthly">Bi-Monthly</option>
                    <option class="form-calcu" value="weekly">Weekly</option>
                </select>
            </div>
            <button id="calculate-button" class="form-input" type="submit">Calculate</button>

        </div>
        <div class="calculator-section">
            <h2>Bonuses</h2>
            <form id="wage-form">
                <div class="form-flex">
                    <input class="form-calcu" type="number" id="salary" name="salary" placeholder="Monthly Salary" required>
                        <select class="form-calcu" id="intervals-select" name="car">
                            <option class="form-calcu" value="default">Select</option>
                            <option class="form-calcu" value="double_pay">Holidays/Double Pay</option>
                            <option class="form-calcu" value="13th">13th Month Pay</option>
                            <option class="form-calcu" value="14th">14th Month Pay</option>
                        </select>
                </div>
                <button id="calculate-button" class="form-input" type="submit">Calculate</button>
            </form>
        </div>

        
     </div>
    
        <footer>
        <p>&copy; 2025 MedWeb. All rights reserved.</p>
    </footer>
</body>
</body>
</html>