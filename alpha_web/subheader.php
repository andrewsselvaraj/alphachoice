		<div class="content-bottom">
			
			<span style="clear:both"></span>
			<div class="wrap">
				<div class="heading4">
				  <!--<p style="text-align:left;"><span style="font-size:30px;color:#737373;"><i>Product Catalog</i></span></p>-->
				<!--<p style="text-align:left;"><span style="font-size:36px;color:#3a3a3a;"><i>Select Your Product</i></span></p>-->
				<?php 
				ob_start();
					session_start();
					$transaction_id = session_id(); 
				
				?>
				
		
			<marquee>Currently On Line Ordering is under construction , Please order using Contact US Page</marquee>
			<div align="right">
			<?php
			echo "<a href=pc_ViewConfirmCart.php?transaction_id=".$transaction_id.">Click Here to Complete Shopping</a>";
			?>
			</div>
				</div>