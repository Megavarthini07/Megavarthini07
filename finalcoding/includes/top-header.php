<?php 
//session_start();

?>

<div class="top-bar animate-dropdown">
	<div class="container">
		<div class="header-top-inner">
			<div class="cnt-account">
				
				

<?php if(strlen($_SESSION['login']))
    {   ?>
				<li><a href="#"><font face = "cursive" size = "5" color="green">Welcome- </font><?php echo htmlentities($_SESSION['username']);?></a></li>
				<?php } ?>

					<li><a href="my-account.php"></i><font face = "cursive" size = "5" color="green"><b>My Account</b></font></a></li>
					<li><a href="my-cart.php"></i><font face = "cursive" size = "5" color="green"><b>My Cart</b></font></a></li>
                    <li><a href="admin/"></i><font face = "cursive" size = "5" color="green"><b>Admin</b></font></a></li>
					<?php if(strlen($_SESSION['login'])==0)
    {   ?>
<li><a href="login.php"></i><font face = "cursive" size = "5" color="green"><b>Login</b></font></a></li>
<?php }
else{ ?>
	
				<li><a href="logout.php"><font face = "cursive" size = "5" color="green"><b>Logout</b></font></a></li>
				<?php } ?>	
				</ul>
			</div>

<div class="cnt-block">
				<ul class="list-unstyled list-inline">
					<li class="dropdown dropdown-small">
						
					</li>
				</ul>
			</div>
			
			<div class="clearfix"></div>
		</div>
	</div>
</div>