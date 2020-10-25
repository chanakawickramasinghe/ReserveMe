<?php include('../includes/connection.php'); ?>
<!--Start of Map-->
    <section class="content">
        <section id="gallery">    
            <div id="gallery-center">
                <?php 
                    if(isset($_GET['res_id'])){
                        $retriewMenu = "SELECT * FROM restaurant WHERE res_id = ".$_GET['res_id'];
                        $resultMenu = mysqli_query($connection,$retriewMenu);
                        while($rowProduct  = mysqli_fetch_assoc($resultMenu)){  
                            echo"<div class=\"mapouter\">
                                    <div class=\"gmap_canvas\">
                                        <iframe width=\"100%\" height=\"100%\" id=\"gmap_canvas\" src=\"{$rowProduct['res_location']}\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe>                               
                                    </div>
                                </div>";
                        }
                        echo"</article>";
                    }
                ?>    
            </div>
        </section>   
    </section>
<!--End of Map-->