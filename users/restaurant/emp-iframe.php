<?php include('../../includes/session.php') ?>
<?php include('../../includes/connection.php') ?>

<?php
    $name = "";
    $email = "";
    $contact = "";
    $type = "";
    $password = "";    
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Res-Employee-iframe</title>
        <script src="https://kit.fontawesome.com/20026fc328.js" crossorigin="anonymous"></script>
	    <link rel="stylesheet" href="../../CSS/nav.css">
        <link href="../../images/logo.png" rel="shortcut icon"/>
        <link rel="stylesheet" href="../../CSS/admin-dashboard.css"/>
    </head>
    <body>

        <div class="content-div">
            <br><br>        
            <h1>Employee of your Restaurant</h1>

            <div class="employee-table">

            <table class="employee" id="myTable" border="1">
            <tr>
                <th>Employee Name</th>
                <th>Employee Email</th>
                <th>Contact No.</th>
            </tr>
        
        <?php
        
        $admin_sql = "SELECT * FROM admins";
        
        $userquery = mysqli_query($connection,$admin_sql);
        while($row = mysqli_fetch_assoc($userquery)){
        
            echo "
                <tr>                  
                    <td>".$row['admin_name']."</td>
                    <td>".$row['admin_email']."</td>
                    <td>".$row['contact_no']."</td>
                    <td>".$row['admin_type']."</td>
                    
                </tr>";
                
        } 
        echo "</table>";
        ?>
            </div>
            <div class="vl"></div>
            <div class="coadmin-dashboard">
                
                    <input type="submit" class="btn-coadmins"  name="add" value="Add New">
                    <input type="submit" class="btn-coadmins"  name="update" value="Update">
                    <input type="submit" class="btn-coadmins"  name="delete" value="Delete">
                </form>
            </div>
        </div>
        


<script>
    var table = document.getElementById('myTable');
                
        for(var i = 1; i < table.rows.length; i++)
        {
            table.rows[i].onclick = function()
            {
                document.getElementById("emp_name").value = this.cells[0].innerHTML;
                document.getElementById("emp_email").value = this.cells[1].innerHTML;
                document.getElementById("contact_no").value = this.cells[2].innerHTML;    
            };
        }

</script>




</body>
</html>