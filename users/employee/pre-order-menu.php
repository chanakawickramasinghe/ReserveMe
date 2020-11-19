<?php include('../../includes/connection.php') ?>
<?php include('../../includes/session.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pre-Order Menu</title>
    <link href="../../images/logo.png" rel="shortcut icon"/> 
    <!-- Link the style sheet -->
    <link rel="stylesheet" href="../../CSS/employee.css">
    <link rel="stylesheet" href="../../CSS/customer-reg.css">  

</head>

<body class="subbody">
    <div style="padding-left:10vw;padding-right:10vw">
    <br>
    <h1>Availability on <span style="color:orange"> Pre-Order Menu </span> </h1>
    <br>
    
    <div class="contentbox">
    <table  width="100%">
        <tr>
            <th>Menu</th>
            <th>Price</th>
            <th>Availability</th>
        </tr>

        <tr>
            <td >Fried Rice</td>
            <td>Rs. 450.00</td>
            <td><label class="switch">
                <input type="checkbox" checked>
                <span class="slider round"></span>
                </label>
            </td>
        </tr>
        <tr><td colspan="3"><hr></td></tr>
       
        <tr>
            <td >Kottu</td>
            <td>Rs. 550.00</td>
            <td><label class="switch">
                <input type="checkbox" checked>
                <span class="slider round"></span>
                </label>
            </td>
        </tr>
        <tr><td colspan="3"><hr></td></tr>
       
        <tr>
            <td >Chicken curry</td>
            <td>Rs. 650.00</td>
            <td><label class="switch">
                <input type="checkbox" checked>
                <span class="slider round"></span>
                </label>
            </td>
        </tr>
        <tr><td colspan="3"><hr></td></tr>
       
        <tr>
            <td >Fish curry</td>
            <td>Rs. 350.00</td>
            <td><label class="switch">
                <input type="checkbox" checked>
                <span class="slider round"></span>
                </label>
            </td>
        </tr>
        <tr><td colspan="3"><hr></td></tr>
      

    </table>
    </div>
    </div>
    
    <input type="button" name="submit" value="Save & Update" class="hero-button" style="float:right;margin-right:15vw" >

    
</body>
</html>