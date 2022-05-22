<?php include 'Connection.php' ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Optician Brands</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />	
<link rel="stylesheet" href="css/all.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/style.css" type="text/css">	
</head>

<body>
<?php include 'header.php' ?>
	
	<!--1st Row Start-->
<div class="container home_product_section">
	<div class="row">
    	
        
        <!-- Col01 Start -->
  
	<div class="col-sm-12 col-md-12 col-lg-12 bgcol1 contact_shop_col2">
				
		<!-- Main Heading Start -->
        <?php
            $optician_brand_id = 0;

            if(isset($_GET['ob'])){
                $optician_brand_id = (int)$_GET['ob'];
            }
        ?>
		
        <?php
            if($optician_brand_id == 1){
        ?>
            <h5 class="contact_lense_shop_heading">Boots Contact Lenses</h5>
            <p>Boots contact lenses are a popular choice today, however you might be surprised to know that you could buy the exact same contact lenses with their original branding at FeelGoodContacts.com, and at prices much cheaper than the high street!</p>
            <p>The cornea of the eye is usually spherical. However, some people have astigmatism, which is when the cornea has an unnatural curve to it. This means that your eye is not entirely able to adjust to the light that enters it. As a result blurred or distorted vision occurs.<br></p>
            <p>By offering two or more different prescriptive powers, these progressive contact lenses can ensure clear and concise vision across varying distances. </p>
            <p>Our huge range of optician’s contact lenses means you can buy Boots Premium Dailies, Boots Premium Monthly and Boots Near & Far contact lenses in their original manufacturers packaging at the guaranteed cheapest UK price.</p>
            <p>With our Price Match Guarantee and next day delivery available, you can save time, money and hassle when you buy Boots contact lenses online cheaper at FeelGoodContacts.com.</p>
        <?php }else if($optician_brand_id == 2){?>
            <h5 class="contact_lense_shop_heading">Optical Express contact lenses</h5>
            <p>If you are an Optical Express contact lens wearer, you might be interested to know that the lenses from Optical Express are the exact same contact lenses that we sell, just with their own branding and an inflated price tag.</p>
            <p>This means you can buy genuine branded contact lenses in their original packaging at Feel Good Contacts and save up to 50% on high street optician prices. For example, Daily Vision is equivalent to Focus Dailies All Day Comfort by Ciba Vision.</p>
        <?php }else if($optician_brand_id == 3){?>
            <h5 class="contact_lense_shop_heading">Specsavers Contact Lenses</h5>
            <p>Due to the coronavirus (COVID-19) outbreak, you might not be able to get hold of your Specsavers EasyVision contact lenses. If you wear Specsavers contact lenses, you might be interested to know that they sell the same lenses that we sell with their own branding and an inflated price tag.</p>
            <p>To find out your equivalent Specsavers contact lenses, browse our table below. If you're having trouble finding your Specsavers lenses in the table, feel free to call our dedicated customer service team on 0800 458 2090 or email us at cs@feelgoodcontacts.com for any assistance.</p>
        <?php }else if($optician_brand_id == 5){?>
            <h5 class="contact_lense_shop_heading">Vision Express contact lenses</h5>
            <p>The outbreak of coronavirus (COVID-19) means you might not be able to get an eye test or get hold of your Vision Express contact lenses. As is the case with most high street opticians, Vision Express add their own branding and charge more for the same contact lenses. we sell at Feel Good Contacts.</p>
            <p>It’s important to know that you don’t have to buy your contact lenses from the optician who has prescribed your contact lens prescription. On top of this, you’ll find you can actually buy contact lenses cheaper online when you shop at Feel Good Contacts.</p>
            <p>Our helpful table gives you a list of the branded equivalent to your Vision Express contact lenses. If you can't find your lenses from the table below, call our dedicated customer service team on 0800 458 2090 or email us at cs@feelgoodcontacts.com for assistance.</p>
        <?php }else if($optician_brand_id == 4){?>
            <h5 class="contact_lense_shop_heading">All Contact Lens Brands</h5>
            <p>You might not know that many high street opticians simply repackage the same contact lenses with their own branding and sell them for more. However, at FeelGoodContacts.com, we stock genuine branded contact lenses, that we source directly from the manufacturers, and sell them at prices up to 50% cheaper.</p>
            <p>We offer a Price Match Guarantee to ensure you get the best price in the UK when you buy contact lenses cheaper online with Feel Good Contacts. And, with next day delivery available on all in-stock items, you can get your lenses delivered to you in no time at all.</p>
            <p>If you can’t find your contact lenses on our list, call us on 0800 458 2090 or email us at cs@feelgoodcontacts.com, and we’ll try our very best to track down your lenses.</p>
        <?php }?>
			
		<a href="optician_brands.php?ob=4" class="btn btn-primary optician_brands_btn">All Contact Lense Brands</a>
		<a href="optician_brands.php?ob=3" class="btn btn-primary optician_brands_btn">Specsavers</a>
		<a href="optician_brands.php?ob=1" class="btn btn-primary optician_brands_btn">Boots</a>
		<a href="optician_brands.php?ob=5" class="btn btn-primary optician_brands_btn">Vision Express</a>
		<a href="optician_brands.php?ob=2" class="btn btn-primary optician_brands_btn">Optical Express</a>
		
		<?php if($optician_brand_id == 1){?>
            <h5 class="optician_brands_heading">Boots Contact Lenses</h5>
        <?php }else if($optician_brand_id == 2){?>
            <h5 class="optician_brands_heading">Optical Express contact lenses</h5>
        <?php }else if($optician_brand_id == 3){?>
            <h5 class="optician_brands_heading">Specsavers Contact Lenses</h5>
        <?php }else if($optician_brand_id == 4){?>
            <h5 class="optician_brands_heading">All Contact Lens Brands</h5>
        <?php }else if($optician_brand_id == 5){?>
            <h5 class="optician_brands_heading">Vision Express contact lenses</h5>
        <?php }?>


		
		<table class="table optician_brands_tbl">
		  <thead class="thead optician_brand_tbl_heading">
			<tr>
			  <th scope="col">Contact Lens Name</th>
			  <th scope="col">Manufacturer</th>
			  <th scope="col">	Equivalent Lens</th>
			  <th scope="col">Wearing Type</th>
			  <th scope="col">Price/Box</th>
			  <th scope="col"></th>
			</tr>
		  </thead>
		  <tbody>
            <?php
                $query = mysqli_query($conn, "SELECT * FROM `product` LEFT JOIN Optician_Brands ON Optician_Brands.id = product.Optician_Brands WHERE product.Optician_Brands = " . $optician_brand_id);
                while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
            ?>
                <tr>
                    <td scope="row"><?=$row['name']?></td>
                    <td>Alcon & Ciba Vision</td>
                    <td>Dailies AquaComfort Plus Multifocal</td>
                    <td>Daily | Multifocal</td>
                    <td>$<?=$row['Price']?></td>
                    <td><a href="<?="product.php?product_id=" . $row['order_number']?>" class="btn btn-primary btn-sm optican_brand_tbl_btn">View & Buy</button></td>	
                </tr>  
            <?php }?>
		  </tbody>
		</table>
	</div>
	<!-- Col2 End -->
	</div>
</div>
	
<?php include 'footer.php' ?>	
	
	
</body>
</html>