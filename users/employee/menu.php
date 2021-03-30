<?php include('../../includes/connection.php') ?>
<?php include('../../includes/session.php') ?>
<?php include('emp-session.php') ?>


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

    <style>
        th:nth-of-type(4),td:nth-of-type(4) {
        display: none;
        }
    </style>

</head>

<body>
    <?php include('../../includes/message.php'); ?>
    <?php include('navigations.php'); ?>

    <!-- Start of sidbar -->
    <div class="sidebar">
      <!-- <a href="venues.php">Reservation Status</a><hr>     -->
      <a href="menu.php" class="active">Set Menu</a><hr>
      <a href="queries.php">Queries</a><hr>
      <a href="table-reservation.php">Manage Reservation</a><hr>
    </div>
    <!-- End of sidebar -->

<div class="content"> <!-- To set the 80% size of page -->

                        <!-- To get the item -->
                            <form action="menu-submit.php" method="POST">
                            <input type="hidden" id="item_name" name="item_name" required>
                            <input type="hidden" id="item_avail" name="item_avail" required>
                            <input type="hidden" id="preorder_avail" name="preorder_avail" required>
                            <div class="menu-button"><button name="submit" class="emp-button" >Save & update </button></div>
                            </form>
                        <!--________________ -->

    <div class="employee-container">
        <center><div class="form-btn">
            <span onclick="menu()">Menu</span>
            <span onclick="pre_menu()">Pre-order Menu</span>
            <hr id="Indicator">
        </div></center>  

            <table  class="menu-table" id="menu">
                <tr>
                    <th>Menu</th>
                    <th>Price</th>
                    <th>Availability</th>
                    <th>Status</th>
                </tr>

                <?php
                    $sql="SELECT * FROM menu ";

                    if ($result = $connection->query($sql)) {
                        while ($row = $result->fetch_assoc()) {
                            $menu = $row["item_name"];
                            $price = $row["item_price"];
                            $status = $row["item_avail"];
                ?>
                    <tr>
                        <td><?php echo $menu ; ?></td>
                        <td><center><?php echo $price ;?></center></td>
                        <td>
                        <center><?php 
                                if ($status==1){
                                    echo '<label class="switch">
                                            <input type="checkbox" name="item_avail" value="1" checked>
                                            <span class="slider round"></span>
                                        </label>';

                                } else {
                                    echo '<label class="switch">
                                            <input type="checkbox" name="item_avail" value="0">
                                            <span class="slider round"></span>
                                        </label>';
                                }
                                ?></center>
                        </td>
                        <td><?php echo $status ;?></td>
                    </tr>
                <?php                        }
                    /*freeresultset*/
                    $result->free();
                    }
                ?>
            </table>


            <table  class="menu-table" id="preorder-menu">
                <tr>
                    <th>Menu</th>
                    <th>Price</th>
                    <th>Availability</th>
                    <th>Status</th>
                </tr>
                <?php
                    $sql="SELECT * FROM menu where allow_preorder";

                    if ($result = $connection->query($sql)) {
                        while ($row = $result->fetch_assoc()) {
                            $menu = $row["item_name"];
                            $price = $row["item_price"];
                            $allow_pre= $row['allow_preorder'];
                            $preStatus = $row["preorder_avail"];
                ?>
                    <tr>
                        <td><?php echo $menu ; ?></td>
                        <td><center><?php echo $price ;?></center></td>
                        <td>

                            <center><?php 
                                if ($preStatus==1){
                                    echo '<label class="switch">
                                            <input type="checkbox" name="allow_preorder" value="1" checked>
                                            <span class="slider round"></span>
                                        </label>';

                                } else {
                                    echo '<label class="switch">
                                            <input type="checkbox" name="allow_preorder" value="0">
                                            <span class="slider round"></span>
                                        </label>';
                                }
                                ?></center>
                        </td>
                        <td><?php echo $preStatus ;?></td>
                    </tr>

                <?php
                        }
                    /*freeresultset*/
                    $result->free();
                    }

                ?>


            </table>
        
    </div>

    
</div>

<div class="footer"> <?php include('../../includes/footer.php'); ?> </div>


    <!--------js for menu swap-->
    <!-- Script for slide movement -->
    <script>
        var MenuForm = document.getElementById("menu");
        var PreMenuForm = document.getElementById("preorder-menu");
        var Indicator = document.getElementById("Indicator");
        
        function menu(){
                MenuForm.style.transform="translateX(0px)";
                PreMenuForm.style.transform="translateX(0px)";
                Indicator.style.transform="translateX(0px)";
                
        }

        function pre_menu(){

                MenuForm.style.transform="translateX(-65vw)";
                PreMenuForm.style.transform="translateX(-72vw)"; 
                Indicator.style.transform="translateX(140px)";
                
        }        
    </script>

<!-- Script for select the food menu -->

<script>
    var table = document.getElementById('menu');
                
        for(var i = 1; i < table.rows.length; i++)
        {
            table.rows[i].onclick  = function()
            {
                // document.getElementById("cus_name").value = this.cells[1].innerHTML;
                document.getElementById("item_name").value = this.cells[0].innerHTML;
                document.getElementById("item_avail").value = this.cells[3].innerHTML;
                document.getElementById("preorder_avail").value = "Book";
            };
        }

        var table = document.getElementById('preorder-menu');
                
                for(var i = 1; i < table.rows.length; i++)
                {
                    table.rows[i].onclick = function()
                    {
                        // document.getElementById("cus_name").value = this.cells[1].innerHTML;
                        document.getElementById("item_name").value = this.cells[0].innerHTML;
                        document.getElementById("item_avail").value = "Book";
                        document.getElementById("preorder_avail").value = this.cells[3].innerHTML;
                    };
                }

</script>

</body>
</html>