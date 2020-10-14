<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
  <title>Reset</title>
  <style>
body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background: url(../images/bg.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  color: white;

}

.reset{
    position: absolute;
    top: 5%;
    left: 50%;
    transform: translate(-50%,50%);
    width: 30%;
    padding: 40px;
    background: rgba(0,0,0,.8);
    box-sizing: border-box;
    box-shadow: 0 15px 25px rgba(0,0,0,.5);
    border-radius: 10px;
}


.reset .inputBox
{
    position: relative;
}

.reset .inputBox input
{
    width: 100%;
    padding: 14px 0;
    font-size: 16px;
    color: #fff;
    letter-spacing: 1px;
    margin-top: 2px;
    margin-bottom: 15px;
    border: none;
    border-bottom: 1px solid #fff;
    outline: none;
    background: transparent;
}

.reset .inputBox label
{
   position: absolute;
   top: 0;
   left: 0;  
   padding: 15px 0;
   font-size: 18px; 
   color: #fff;
   pointer-events: none;
   transition: .5s;

}
.reset .inputBox input:focus ~ label,
.reset .inputBox input:valid ~ label 
{
    top: -18px;
    left: 0;
    color: #03a9f4;
    font-size: 14px;

} 

.reset input[type="submit" i]
{
    margin-top: 8px;  
    margin-left: 35%;
    margin-bottom: -10px;
    background: transparent;
    border: none;
    outline: none;
    color: #fff;
    background: #03a9f4;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
    display: inline-block;
    font-size: 16px;
}

.reset input[type="submit" i]:hover
{
    background-color: #3e8e41;
    color: white;
}
.anchor{
  display: block;
  position: relative;
  top: 0px;
  margin-bottom: 15px;
    
}
.message{
    color: white;
}
p{
    color: white;
}
a {
  position: relative;
  top: -15px; 
  left: -35px; 
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
  
}

a:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  font-size: 18px;
  color: white;
}


.round {
  border-radius: 50%;
}


</style>  
</head>
<?php
    $alert='';
    require '../includes/connection.php';
    $token=$_GET['token'];
    if(isset($_POST['reset'])){
        $password=md5($_POST["password"]);
        $re_password=md5($_POST["re_password"]);
        if($password===$re_password){
            $ret_query="SELECT email FROM tokens WHERE token='$token'";
            
            $ret_result=mysqli_query($connection,$ret_query);
            if(mysqli_num_rows($ret_result)>0){
                $ret_array=mysqli_fetch_assoc($ret_result);
                $email=$ret_array['email'];
                $update_query="UPDATE customer SET password='$password' WHERE email='$email' ";
                $update_result=mysqli_query($connection,$update_query);
                
                if(mysqli_affected_rows($connection)>0){
                    
                    $alert="<div class='sent'>Password Reseted sucessfully.</div>";
                    $delete_query="DELETE FROM tokens WHERE token='$token'";
                    $delete_result=mysqli_query($connection,$delete_query);
                }
                else{
                    
                    $alert="<div class='error'>Failed to reset the password.Please try again.</div>";

                }

            }else{
                $alert="<div class='error'>Access Denided!Token has used before.</div>";
            }
        }
        else{
            $alert="<div class='error'>Passwords do not match!</div>";
        }
    }
?>
<body>
    <div class="reset">
    <a href="../login.php" class="previous round">&#8249;</a>
        <?php echo $alert;?>
        
        <form method="POST">            
            <div class="inputBox">
                <input type="password" name="password" required="">
                <label>Enter the password</label>
            </div>
            <div class="inputBox">
                <input type="password" name="re_password" required="">
                <label>Re-enter the password</label>
            </div>
            <input type="submit" name="reset" value="Reset">
        </form> 
    </div>  
</body>
</html>