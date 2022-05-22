<?php include 'Connection.php' ?>
<?php 
if(isset($_POST['val'])) {
	if($_POST['val'] == "") {
	
	}
	else { //else Start
		//Main Variable
		$tempee = $_POST['val'];
		
		//Remaining 
		//1 Optician Brands (Contact Lenses)
		//Glasses
		//Sunglasses
		
		//EYE CARE
		//Popular Eye Care
		$fetch_querycat1 = mysqli_query($conn,"SELECT * FROM popular_eye_care WHERE Popular_Eye_Care LIKE '%$tempee%' AND active=1");
			while($rowcat1=mysqli_fetch_array($fetch_querycat1,MYSQLI_ASSOC)) {
			?>
				
				<tr class="header_search_result_tr" onClick="window.location.href='eye-care.php?pec=<?php echo $rowcat1['id']; ?>';">
					
					<td colspan="2">
						<a href="#" class="search_link">
						<p class="search_cat_title">&nbsp;&nbsp;<?php echo "All ".$rowcat1['Popular_Eye_Care'] ?></p>
						</a>
					</td>
			    
				
			<?php
			}
		//Eye Care
		$fetch_querycat1 = mysqli_query($conn,"SELECT * FROM eye_care WHERE Eye_Care LIKE '%$tempee%' AND active=1");
			while($rowcat1=mysqli_fetch_array($fetch_querycat1,MYSQLI_ASSOC)) {
			?>
				
				<tr class="header_search_result_tr" onClick="window.location.href='eye-care.php?ec=<?php echo $rowcat1['id']; ?>';">
					
					<td colspan="2">
						<a href="#" class="search_link">
						<p class="search_cat_title">&nbsp;&nbsp;<?php echo "All ".$rowcat1['Eye_Care'] ?></p>
						</a>
					</td>
			    
				
			<?php
			}
		
		//SOLUTIONS
		//Popular Solutions
		$fetch_querycat1 = mysqli_query($conn,"SELECT * FROM popular_solutions WHERE Popular_Solutions LIKE '%$tempee%' AND active=1");
			while($rowcat1=mysqli_fetch_array($fetch_querycat1,MYSQLI_ASSOC)) {
			?>
				
				<tr class="header_search_result_tr" onClick="window.location.href='solutions.php?ps=<?php echo $rowcat1['id']; ?>';">
					
					<td colspan="2">
						<a href="#" class="search_link">
						<p class="search_cat_title">&nbsp;&nbsp;<?php echo "All ".$rowcat1['Popular_Solutions'] ?></p>
						</a>
					</td>
			    
				
			<?php
			}
		//Types Of Solutions
		$fetch_querycat1 = mysqli_query($conn,"SELECT * FROM types_of_solutions WHERE Solution_Type LIKE '%$tempee%' AND active=1");
			while($rowcat1=mysqli_fetch_array($fetch_querycat1,MYSQLI_ASSOC)) {
			?>
				
				<tr class="header_search_result_tr" onClick="window.location.href='solutions.php?tos=<?php echo $rowcat1['id']; ?>';">
					
					<td colspan="2">
						<a href="#" class="search_link">
						<p class="search_cat_title">&nbsp;&nbsp;<?php echo "All ".$rowcat1['Solution_Type'] ?></p>
						</a>
					</td>
			    
				
			<?php
			}
		
		//CONTACT LENSES
		//Shop By Manufacturer
		$fetch_querycat1 = mysqli_query($conn,"SELECT * FROM shop_by_manufacturer WHERE Manufacturer_Name LIKE '%$tempee%' AND active=1");
			while($rowcat1=mysqli_fetch_array($fetch_querycat1,MYSQLI_ASSOC)) {
			?>
				
				<tr class="header_search_result_tr" onClick="window.location.href='contact-lenses.php?sbm=<?php echo $rowcat1['id']; ?>';">
					
					<td colspan="2">
						<a href="#" class="search_link">
						<p class="search_cat_title">&nbsp;&nbsp;<?php echo "All ".$rowcat1['Manufacturer_Name'] ?></p>
						</a>
					</td>
			    
				
			<?php
			}
		//Types Of Contact Lenses
		$fetch_querycat1 = mysqli_query($conn,"SELECT * FROM types_of_contact_lenses WHERE Contact_Lense_Type LIKE '%$tempee%' AND active=1");
			while($rowcat1=mysqli_fetch_array($fetch_querycat1,MYSQLI_ASSOC)) {
			?>
				
				<tr class="header_search_result_tr" onClick="window.location.href='contact-lenses.php?pm=<?php echo $rowcat1['id']; ?>';">
					
					<td colspan="2">
						<a href="#" class="search_link">
						<p class="search_cat_title">&nbsp;&nbsp;<?php echo "All ".$rowcat1['Contact_Lense_Type'] ?></p>
						</a>
					</td>
			    
				
			<?php
			}
		//Brands Of Contact Lenses
		$fetch_querycat1 = mysqli_query($conn,"SELECT * FROM brands_of_contact_lenses WHERE Brands_Name LIKE '%$tempee%' AND active=1");
			while($rowcat1=mysqli_fetch_array($fetch_querycat1,MYSQLI_ASSOC)) {
			?>
				
				<tr class="header_search_result_tr" onClick="window.location.href='contact-lenses.php?bocl=<?php echo $rowcat1['id']; ?>';">
					
					<td colspan="2">
						<a href="#" class="search_link">
						<p class="search_cat_title">&nbsp;&nbsp;<?php echo "All ".$rowcat1['Brands_Name'] ?></p>
						</a>
					</td>
			    
				
			<?php
			}
		
		
		//PRODUCTS
		//Glasses And Sunglasses
		$fetch_queryt = mysqli_query($conn,"SELECT * FROM product WHERE name LIKE '%$tempee%' AND Brand!=0 AND active=1");
			while($rowt=mysqli_fetch_array($fetch_queryt,MYSQLI_ASSOC)) {
			?>
				
				<tr class="header_search_result_tr" onClick="window.location.href='product2.php?product_id=<?php echo $rowt['order_number']; ?>';">
					
					<td class="search_link_td_img">
						<a href="#" class="">
						<img class="header_search_result_img" src="images/Products/<?php echo $rowt['image'] ?>">
						</a>
					</td>
					
					<td>
						<a href="#" class="search_link">
						<?php echo $rowt['name'] ?>
						</a>
					</td>
			    </tr>
				
			<?php
			}
		
		//Contact Lense, Eye Care And Solutions
		$fetch_queryt2 = mysqli_query($conn,"SELECT * FROM product WHERE name LIKE '%$tempee%' AND Brand=0 AND active=1");
			while($rowt2=mysqli_fetch_array($fetch_queryt2,MYSQLI_ASSOC)) {
			?>
				
				<tr class="header_search_result_tr" onClick="window.location.href='product.php?product_id=<?php echo $rowt2['order_number']; ?>';">
					
					<td class="search_link_td_img">
						<a href="#" class="">
						<img class="header_search_result_img" src="images/Products/<?php echo $rowt2['image'] ?>">
						</a>
					</td>
					
					<td>
						<a href="#" class="search_link">
						<?php echo $rowt2['name'] ?>
						</a>
					</td>
			    </tr>
				
			<?php
			}

	} //else End
}

?>