<?php include('../../includes/connection.php') ?>
<?php include('../../includes/session.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pre-Order Menu</title>
    <link href="../../images/logo.png" rel="shortcut icon"/> 
        <!-- Link the style sheets -->
        <link rel="stylesheet" href="../../CSS/employee.css">
        <link rel="stylesheet" href="../../CSS/main.css">
        <link rel="stylesheet" href="../../CSS/nav.css">   
        <link rel="stylesheet" href="../../CSS/footer.css">

</head>

<body>

    <?php include('navigations.php'); ?>

    <!-- Start of sidbar -->
    <div class="sidebar"> 
      <a href="employee-home.php" >Employee Home</a>
      <a href="venues.php">Venues</a>     
      <a href="menu.php" class="active">Set Menu</a>
      <a href="queries.php">Queries</a>
      <a href="table-reservation.php">Manage Reservation</a>
    </div>
    <!-- End of sidebar -->

<div class="content"> <!-- To set the 80% size of page -->

    <div class="employee-container">
        <center><div class="form-btn">
            <span onclick="menu()">Pre-order Menu</span>
            <span onclick="pre_menu()">Menu</span>
            <hr id="Indicator">
        </div></center>


        <form id="menu" action="menu-submit.php">
            <table  class="menu-table">
                <tr>
                    <td>Menu</td>
                    <td>Price</td>
                    <td>Status</td>
                </tr>
                <?php
                    $sql="SELECT * FROM menu ";
                    // $userquery = mysqli_query($connection,$sql);
                    // $row = mysqli_fetch_assoc($userquery);

                    if ($result = $connection->query($sql)) {
                        while ($row = $result->fetch_assoc()) {
                            $menu = $row["item_name"];
                            $price = $row["item_price"];
                            $status = $row["item_avail"];
                ?>
                    <tr>
                        <td><?php echo $menu ; ?></td>
                        <td><?php echo $price ;?></td>
                        <td><?php echo $status ;?></td>
                    </tr>

                <?php                        }
                    /*freeresultset*/
                    $result->free();
                    }
                ?>

            </table>
        </form>

        <form id="preorder-menu" action="preorder-menu-submit.php">
            <table  class="menu-table">
                <tr>
                    <td>Menu</td>
                    <td>Price</td>
                    <td>Status</td>
                </tr>
                <?php
                    $sql="SELECT * FROM menu where allow_preorder";
                    // $userquery = mysqli_query($connection,$sql);
                    // $row = mysqli_fetch_assoc($userquery);

                    if ($result = $connection->query($sql)) {
                        while ($row = $result->fetch_assoc()) {
                            $menu = $row["item_name"];
                            $price = $row["item_price"];
                            $status = $row["item_avail"];
                ?>
                    <tr>
                        <td><?php echo $menu ; ?></td>
                        <td><?php echo $price ;?></td>
                        <td><?php echo $status ;?></td>
                    </tr>

                <?php
                        }
                    /*freeresultset*/
                    $result->free();
                    }

                ?>

            </table>
        </form>

    </div>
    <?php include('../../includes/footer.php'); ?>
</div>   

    <!--------js for menu swap-->
    
    <script>
        var MenuForm = document.getElementById("menu");
        var PreMenuForm = document.getElementById("preorder-menu");
        var Indicator = document.getElementById("Indicator");
        function menu(){
                MenuForm.style.transform="translateX(300px)";
                PreMenuForm.style.transform="translateX(300px)";
                Indicator.style.transform="translateX(0px)";
        }

        function pre_menu(){

                MenuForm.style.transform="translateX(0px)";
                PreMenuForm.style.transform="translateX(0px)";
                Indicator.style.transform="translateX(120px)";
        }        
    </script>


</body>
</html>