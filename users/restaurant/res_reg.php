<DOCTYPE html>
<html lang = "en" dir = "ltr">

<head>
    <title>Restaurant Registration</title>
    <link rel="stylesheet" href="../../CSS/res_reg.css">
    <meta name="view port" content ="width=device-width", meta charset="utf-8">
</head>

<body>
        <?php include('includes/res_reg_submit.php'); ?>
        <form id="formRestSignup" action="index.html" method="post">
    
            <!--tabs are used to open the separate parts in separate pages.-->
            <div class="tab">
                <h1>Sign Up</h1>
                <h2>Restaurant Details</h2>
                
                <p><h3>Name</h3>
                    <input type="text" name="res_name" placeholder="Restaurant Name" class="inp" required>
                </p>
                <br>
    
                <p><h3>Email</h3>
                    <input type="Email" name="res_email" placeholder="Email" class="inp" required>
                </p>
                <br>
    
                <p><h3>Address</h3>
                    <input type="text" name="res_address"  placeholder="Address" class="inp" required>
                </p>
                <br>
    
                <p><h3>Location</h3>
                    <input type="url" name="res_location" placeholder="Location" class="inp" required>
                </p>
                <br>
    
                <p><h3>Telephone No</h3>
                    <input type="tel" name="res_tel" placeholder="Telephone No" class="inp" required>
                </p>
                <br>
    
                <p><h3>Floor Plan</h3>
                    <input type="file" id="res_floor" name="res_floor">
                </p>
                <br>
    
                <p><h3>Preorder Facility</h3>
                    <input type="radio" id="Yes" name="preorder" value="Yes">Yes<br>
                    <input type="radio" id="No" name="preorder" value="No">No
                </p>
                <br>
    
                <p><h3>Restaurant Category</h3>
                    <input type="checkbox" name="res_type1" value="Arabic">Arabic<br>
                    <input type="checkbox" name="res_type2" value="Chinese">Chinese<br>
                    <input type="checkbox" name="res_type1" value="Italian">Italian<br>
                    <input type="checkbox" name="res_type1" value="Mongolian">Mongolian<br>
                    <input type="checkbox" name="res_type1" value="Sri Lankan">Sri Lankan<br>
                    <input type="checkbox" name="res_type1" value="Thai">Thai<br>
                    <input type="checkbox" name="res_type1" value="Sri Lankan Street Food">Sri Lankan Street Food<br>
                </p>
                <br>
    
                <p><h3>Password</h3>
                    <input type="password" name="res_password" placeholder="Password" class="inp" required>    
                </p>
            </div>
    
            <div class = "tab">
                <h2>Menu</h2>
                <p><h3>Insert the images of the Restaurant Menu (Maximum 05)</h3>
                    <input type="file" id="res_menue" name="res_menu">
                </p>
            </div>
    
            <div class="tab">
                <h2>Preordering Menue</h2>
                <p><h3>Dish Name</h3>
                <input type="text" name="dish_name" placeholder="Dish Name"><br>
                <h3>Dish Price</h3>
                <input type="text" name="dish_price" placeholder="Dish Price"><br>
                
            </div>
    
            <div style="overflow:auto;">
            <div style="float:center;">
                  <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                  <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                </div>
            </div>
    
            <div class="tab"><p>
                <h2>Confirm Registration</h2>
                <button type="submit" value="Submit">Submit</button>
                </p>
            </div>
            
    
            <!--To show that there are 4 steps in the registartion process-->
            <div style="text-align:center;margin-top:40px;">
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
            </div>
    
</form>

    <script>
        var currentTab = 0; //First tab to be showed(0)
        showTab(currentTab); //Display the current tab

        function showTab(n) {
            //This function will display the specified tab of the form
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block"; 
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
        //Run a function
        fixStepIndicator(n)
        }

        function nextPrev(n) {
            // Select the tab to viewed
            var x = document.getElementsByClassName("tab");// Exit current tab when invalid
            if (n == 1 && !validateForm()) return false;
                x[currentTab].style.display = "none";
                currentTab = currentTab + n;
            // At end
            if (currentTab >= x.length) {
                document.getElementById("regForm").submit();
                return false;
            }
        showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    valid = false;
                }
            }
            // Mark as finish when 
            if (valid) {
                 document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; 
        }

        function fixStepIndicator(n) {
            var i, x = document.getElementsByClassName("step");// This removes active class 
                for (i = 0; i < x.length; i++) {
                    x[i].className = x[i].className.replace(" active", "");
                }
            x[n].className += " active";
        }
</script>
    
</body>
</html>
