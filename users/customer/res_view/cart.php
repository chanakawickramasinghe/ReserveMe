<?php include('../../../includes/connection.php'); ?>
<?php include('../../../includes/session.php'); ?>

<html>

<head>

</head>

<body onload="getUrlVars()">
        <?php
        checkSession();
        $user_id = $_SESSION["userID"];
        // echo $user_id;

            if(isset($_GET['cart'])){

            
            // sql for get the available preorder menu
            $search_menu = "SELECT * FROM menu WHERE item_avail='1' And preorder_avail = '1' AND allow_preorder = '1'";
            $result_menu = mysqli_query($connection,$search_menu);
            $x=0;
            while($row = mysqli_fetch_assoc($result_menu)){
                $item_id= $row['item_id']; 
                echo "
                    <form action=\"\" method=\"POST\">      
                        <label>$item_id</lable>
                        <input type=\"text\" name=\"quanOf[".$item_id."]\" id=\"$x\" value=\"0\" required>
                        
                    </form>";
                    if(isset($_POST['quanOf'][$item_id])){
                        $quan = $_POST['quanOf'][$item_id];
                        $sql_pre_insert="INSERT INTO cart(cus_id, item_id, quantity) VALUES ($user_id,$item_id,$quan)";
                        $result=$connection->query($sql_pre_insert); 
                        if(!$result){
                                echo "Something Error";
                        }
                    }
        
                $x++;
                }
                // header('Location:preorder.php');
            }
        ?>

  <!-- <h1>"The value for number is: " <span id="myText"></span></h1> -->

<script>

    function getUrlVars(){
        var vars = [], hash;
        var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
        for(var i = 0; i < hashes.length; i++)
        {
                hash = hashes[i].split('=');                        
                vars[hash[0]] = hash[1];
        }
        return vars;
    }

    var url_vars = getUrlVars();
        var x=0;
        for(var i in url_vars){
        document.getElementById(x).value=url_vars[i];
        x++;
        // document.write(i+"=="+url_vars[i]+"  ");
        }  
  </script>

</body>

</html>

<script type="text/javascript">
    function formAutoSubmit () {
    var frm = document.getElementById("myForm");
    frm.submit();
    }
    window.onload = formAutoSubmit;

</script>