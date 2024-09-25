
<footer class="site-footer" id="contact">
    <div class="container">
      <div class="row"> 
        <!-- Start Footer Widgets -->
        <div class="col-md-4 col-sm-4 widget footer-widget">
          <h4 class="footer-widget-title">About Janani Luwum Youths</h4>
          <img src="images/Web icon.png" alt="Logo" width="90" height="90">
		  <?php
				$result = $db->prepare("SELECT * FROM welcome");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
				?>  
          <div class="spacer-20"></div>
        <?php echo strip_tags(substr($row['body'],0,180)) ;?>...  <a href="about.php" style="color: #0369A3; text-decoration: none;">Read More </a>
		  <?php } ?>
		</div>
    <div class="col-md-4 col-sm-4 widget footer-widget">
          <h4 class="footer-widget-title">Quick Links</h4>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">Who We Are</a></li>
            <li><a href="programmes.php">Programmes</a></li>
            <li><a href="notices.php">Notices</a></li>
            <li><a href="events.php">All Events</a></li>
            <li><a href="news-updates.php">News Update</a></li>
            <li><a href="sermons.php">Sermons</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="contact.php">Contact Us</a></li>
          </ul>
        </div>
		 <?php
                            //include('../connect.php');
				$result = $db->prepare("SELECT * FROM settings");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
               ?> 
        <div class="col-md-4 col-sm-4 widget footer-widget">
          <h4 class="footer-widget-title">Contact Information</h4>
          <i class="fa fa-phone"></i>    <?php echo $row['phone'];   ?> </br>
          <i class="fa fa-phone"></i>    <?php echo $row['linkedin']; ?></br>
          <a href=" jananiluwum021@gmail.com" style="text-decoration: none"><i class="fa fa-envelope"></i> <?php echo $row['email']; ?>
        </div>
        <br/>
        <div class="col-md-4 col-sm-4 widget footer-widget">
    <h4 class="footer-widget-title">Our Socials</h4>
    <div class="social-icons">
        <!-- <a href="https://whatsapp.com/" target="_blank"><i class="fab fa-whatsapp" style="font-size: 28px;"></i></a> -->
        <a href="https://instagram.com/mmcyouthofficial" target="_blank"><i class="fab fa-instagram" style="font-size: 28px; color: #E1306C;"></i></a>
        <a href="https://www.facebook.com/profile.php?id=100091925720256" target="_blank"><i class="fab fa-facebook" style="font-size: 28px; color: #3B5998;"></i></a>
        <a href="https://twitter.com/_ackmmcyouth" target="_blank"><i class="fab fa-twitter" style="font-size: 28px; color: #1DA1F2;"></i></a>
        <a href="https://youtube.com/" target="_blank"><i class="fab fa-youtube" style="font-size: 28px; color: #FF0000;"></i></a>
    </div>
</div>

</footer>

<footer class="site-footer-bottom">
    <div class="container" style="text-align: center;">
        <strong>
            <p style="font-size: 15px;" > Copyright © 2024 - ACK MMC YOUTHS - Developed By Daniel Munene</p>
            <a href="https://danielmunene.com" style="text-decoration: none;font-size: 17px; color: #0369A3;" target="_blank"><i class="fa fa-globe"></i> danielmunene.com</a>
        </strong>
    </div>

  
	<?php } ?>
  </footer>
  <!-- End Footer --> 
  <a id="back-to-top"><i class="fa fa-angle-double-up"></i></a> 
</div>
<script src="js/jquery-2.0.0.min.js"></script> <!-- Jquery Library Call --> 
<script src="plugins/prettyphoto/js/prettyphoto.js"></script> <!-- PrettyPhoto Plugin --> 
<script src="js/helper-plugins.js"></script> <!-- Plugins --> 
<script src="js/bootstrap.js"></script> <!-- UI --> 
<script src="js/waypoints.js"></script> <!-- Waypoints --> 
<script src="plugins/mediaelement/mediaelement-and-player.min.js"></script> <!-- MediaElements --> 
<script src="js/init.js"></script> <!-- All Scripts --> 
<script src="plugins/flexslider/js/jquery.flexslider.js"></script> <!-- FlexSlider --> 
<script src="plugins/countdown/js/jquery.countdown.min.js"></script> <!-- Jquery Timer --> 
<script src="style-switcher/js/jquery_cookie.js"></script> 
<script src="style-switcher/js/script.js"></script> 

</body>


</html>