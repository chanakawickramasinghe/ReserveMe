<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Help - desk</title>
<link type="text/css" rel="stylesheet" href="../../CSS/style.css" />
</head>
 <body>

 <div id="wrapper">
    <div id="menu">
        <p class="welcome">Welcome</p>
        <p class="logout"><a id="exit" href="../../index.php">Exit Chat</a></p>
        <div style="clear:both"></div>
    </div>
     
    <form name="message" action="help-desk.php">
    <input type="text" id="chatbox" placeholder="Enter your massage.............">
        <input name="usermsg" type="text" id="usermsg" size="63" placeholder="Email Address"/>
        <input name="submitmsg" type="submit"  id="submitmsg" value="Send" />
    </form>
    </div>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<script type="text/javascript">
// jQuery Document
$(document).ready(function(){
	//If user wants to end session
	$("#exit").click(function(){
		var exit = confirm("Are you sure you want to end the session?");
		if(exit==true){window.location = 'index.php?logout=true';}		
	});
});
</script>
</script>
</body>
</html>