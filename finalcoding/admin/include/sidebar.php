<div class="clearfix">
					<div class="sidebar">


<ul class="widget widget-menu unstyled">
							<li>
								<a class="collapsed" data-toggle="collapse" href="#togglePages">
									
									<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
									<font face = "Lucida Handwriting" size = "4">ORDERS
								</a>
								<ul id="togglePages" class="collapse unstyled">
									<li>
										<a href="todays-orders.php">
											<i class="icon-tasks"></i>
											NUMBER OF ORDERS TODAY:
  <?php
  $f1="00:00:00";
$from=date('Y-m-d')." ".$f1;
$t1="23:59:59";
$to=date('Y-m-d')." ".$t1;
 $result = mysql_query("SELECT * FROM Orders where orderDate Between '$from' and '$to'");
$num_rows1 = mysql_num_rows($result);
{
?>
											<b class="label green pull-right"><?php echo htmlentities($num_rows1); ?></b>
											<?php } ?>
										</a>
									</li>
									<li>
										<a href="pending-orders.php">
											<i class="icon-tasks"></i>
											PENDING ORDER:
										<?php	
	$status='Delivered';									 
$ret = mysql_query("SELECT * FROM Orders where orderStatus!='$status' || orderStatus is null ");
$num = mysql_num_rows($ret);
{?><b class="label green pull-right"><?php echo htmlentities($num); ?></b>
<?php } ?>
										</a>
									</li>
									
								</ul>
							</li>
							
							<li>
								<a href="manage-users.php">
									
									<font face="timesnewroman" color="red"><b>TOTAL NUMBER OF USERS</b></font>
								</a>
							</li>
                           
						
                                <li><a href="category.php"><font face="timesnewroman" color="red"><b>CREATE NEW CATEGORY</font> </a></li>
                                <li><a href="subcategory.php"><font face="timesnewroman" color="red"><b>CREATE NEW SUBCATEGORY</font></a></li>
                                <li><a href="insert-product.php"><font face="timesnewroman" color="red"><b>INSERT NEW SEAT COVER</font></a></li>
                                <li><a href="manage-products.php"><font face="timesnewroman" color="red"><b>EDIT AND MANAGE SEAT COVER PRODUCTS</b></font></a></li>
                        
                            </ul><!--/.widget-nav-->

						</ul>


						<ul class="widget widget-menu unstyled">
							
						
								<a href="logout.php">
									
									Logout
								</a></font>
						
						</ul>

					</div><!--/.sidebar-->
				</div><!--/.span3-->
