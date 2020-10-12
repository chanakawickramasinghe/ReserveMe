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
        <div class="tab"><h1>Sign Up</h1>

            <p>Name</p>
                <input type="text" name="res_name" placeholder="Restaurant Name" class="inp" required>
            
            <p>Email</p>
                <input type="Email" name="res_email" placeholder="Email" class="inp" required>
            
            <p>Address</p>
                <input type="text" name="res_address"  placeholder="Address" class="inp" required>

            <p>Location</p>
                <input type="url" name="res_location" placeholder="Location" class="inp" required>

            <p>Telephone No</p>
                <input type="tel" name="res_tel" placeholder="Telephone No" class="inp" required>

            <p>Floor Plan</p>
                <input type="image" name="res_floor" placeholder="Floor Plan" class="inp" required>

            <p>Preorder Facility</p>
                <input type="radio" name="" placeholder="Floor Plan" class="inp" required>

            <input type="checkbox" style="border:2px dotted #00f;display:block;background:#ff0000;"/>
            <p>Restaurant Category</p>
                <input type="checkbox" name="res_type1" value="Arabic"><br>
                <input type="checkbox" name="res_type2" value="Chinese"><br>
                <input type="checkbox" name="res_type1" value="Italian"><br>
                <input type="checkbox" name="res_type1" value="Mongolian"><br>
                <input type="checkbox" name="res_type1" value="Sri Lankan"><br>
                <input type="checkbox" name="res_type1" value="Thai"><br>
                <input type="checkbox" name="res_type1" value="Sri Lankan Street Food"><br>

            <p>Password</p>
                <input type="password" name="res_password" placeholder="Password" class="inp" required>          
        </div>

        <div class="tab"><h2>Menu</h2>
            <p>Insert the images of your Restaurant Menu
                <input type="file" name="res_menu" placeholder="Menu" class="inp" required>
            </p>
        </div>

        <div class="tab"><h2>Preordering Menue</h2>
            <input type="text" name="dish_name" placeholder="Dish Name"> 
            <input type="text" name="dish_price" placeholder="Dish Price"> 
        </div>

        <div style="overflow:auto;">
            <div style="float:right;"><h2>Confirm Registration</h2>
              <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
              <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
            </div>
        </div>

        <!--To show that there are 4 steps in the registartion process.-->
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
