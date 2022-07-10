<?php if (!isset($_SESSION['login_user'])) {
				?>
				
					<?php
                                        
                                        
					echo "<div class='container-fluid'>
<div class='row topdiv'>
				<div class='col-sm-3'>
				<a href='sign in.php' ><i class='fa fa-unlock-alt'></i> Sign In </a>
				</div>
				<div class='col-sm-3'>
				<a href='register.php' ><i class='fa fa-file-text'></i> Register </a>
				</div>
				<div class='col-sm-3'>
				<i class='fa fa-phone'></i> Call : 01234567898</li>
				</div>
				<div class='col-sm-3'>
				<i class='fa fa-envelope-o'></i> <a href='mailto:info@example.com'>info@example.com</a>
				</div>
</div>
</div>"
					?>;
				
				<?php } ?>
				
                                        
				<?php
if (isset( $_SESSION['login_user'])) {
    include 'profile-nav.php';
				
				} ?> 

