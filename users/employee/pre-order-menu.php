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
    <link rel="stylesheet" href="../../CSS/main.css">


</head>

<body class="subbody">
    <div style="padding:10px">
    <br>
    <h1>Availability on Pre-Order Menu</h1>
    <br>
    
    <div class="contentbox">
    <table  width="100%">
        <tr>
            <th>Menu</th>
            <th>Price</th>
            <th>Availability</th>
        </tr>

        <tr>
            <td class="content-left">Fried Rice</td>
            <td>Rs. 450.00</td>
            <td><label class="switch">
                <input type="checkbox" checked>
                <span class="slider round"></span>
                </label>
            </td>
        </tr>
        <tr><td colspan="3"><hr></td></tr>
       
        <tr>
            <td class="content-left">Kottu</td>
            <td>Rs. 550.00</td>
            <td><label class="switch">
                <input type="checkbox" checked>
                <span class="slider round"></span>
                </label>
            </td>
        </tr>
        <tr><td colspan="3"><hr></td></tr>
       
        <tr>
            <td class="content-left">Chicken curry</td>
            <td>Rs. 650.00</td>
            <td><label class="switch">
                <input type="checkbox" checked>
                <span class="slider round"></span>
                </label>
            </td>
        </tr>
        <tr><td colspan="3"><hr></td></tr>
       
        <tr>
            <td class="content-left">Fish curry</td>
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
    
    <input type="button" name="submit" value="Save & Update" class="hero-button" style="float:right;margin-right:100px" >

    
</body>
</html>