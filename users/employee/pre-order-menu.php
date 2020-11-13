<?php include('../../includes/connection.php') ?>
<?php include('../../includes/session.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pre-Order Menu</title>
    <!-- Link the style sheet -->
    <link rel="stylesheet" href="../../CSS/employee.css">

</head>
<body class="subbody">
    <h1>Availability on Pre-Order Manues</h1>

    <div class="contentbox">
    <table width="100%"  >
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
        <tr>
            <td class="content-left">Kottu</td>
            <td>Rs. 550.00</td>
            <td><label class="switch">
                <input type="checkbox" checked>
                <span class="slider round"></span>
                </label>
            </td>
        </tr>
        <tr>
            <td class="content-left">Chicken curry</td>
            <td>Rs. 650.00</td>
            <td><label class="switch">
                <input type="checkbox" checked>
                <span class="slider round"></span>
                </label>
            </td>
        </tr>
        <tr>
            <td class="content-left">Fish curry</td>
            <td>Rs. 350.00</td>
            <td><label class="switch">
                <input type="checkbox" checked>
                <span class="slider round"></span>
                </label>
            </td>
        </tr>
      

    </table>
    </div>
    
    <input type="button" name="submit" value="Save & Update" class="btn" style="float:right;margin-right:100px" >

    
</body>
</html>