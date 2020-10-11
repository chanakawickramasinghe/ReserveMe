<DOCTYPE html>
<html lang = "en" dir = "ltr">

<head>
    <title>Restaurant Sign Up</title>
    <link rel="stylesheet" type="text/css" href="res.css">
    <meta name="view port" content ="width=device-width", meta charset="utf-8">
</head>

<body>
    <?php include('includes/res_registration.php'); ?>
    <form id="formRestSignup" action="index.html" method="post">

        //tabs are used to open the separate parts in separate pages.
        <div class="tab"><h1>Sign Up</h1>

            <p>Name
                <input type="text" name="res_name" placeholder="Restaurant Name" class="inp" required>
            </p>

            <p>Email
                <input type="Email" name="res_email" placeholder="Email" class="inp" required>
            </p>

            <p>Address
                <input type="text" name="res_address"  placeholder="Address" class="inp" required>
            </p>

            <p>Location
                <input type="url" name="res_location" placeholder="Location" class="inp" required>
            </p>

            <p>Telephone No
                <input type="tel" name="res_tel" placeholder="Telephone No" class="inp" required>
            </p>

            <p>Floor Plan
                <input type="image" name="res_floor" placeholder="Floor Plan" class="inp" required>
            </p>

            <p>Preorder Facility
                <input type="radio" name="" placeholder="Floor Plan" class="inp" required>
            </p>

            <p>Restaurant Category
                <input type="checkbox" name="res_type1" value="Arabic"><br>
                <input type="checkbox" name="res_type2" value="Chinese"><br>
                <input type="checkbox" name="res_type1" value="Italian"><br>
                <input type="checkbox" name="res_type1" value="Mongolian"><br>
                <input type="checkbox" name="res_type1" value="Sri Lankan"><br>
                <input type="checkbox" name="res_type1" value="Thai"><br>
                <input type="checkbox" name="res_type1" value="Sri Lankan Street Food"><br>
            </p>

            <p>Password
                <input type="password" name="res_password" placeholder="Password" class="inp" required>    
            </p>
        </div>

        <div class="tab"><h2>Menu</h2>
            <p>Insert the images of your Restaurant Menu
                <input type="image" name="res_menu" placeholder="Menu" class="inp" required>
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

        //To show that there are 4 steps in the registartion process.
        <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
        </div>

    </form>
</body>
</html>
