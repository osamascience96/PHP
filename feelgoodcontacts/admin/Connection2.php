<?php 

$db = "feelgoodcontact";
$servername= "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername,$username,$password,$db);
if(!empty($_SESSION['id'])) {
	//
}
else { session_start();}



/*CODE BY NAEEM START*/


//Add reglaze
if(isset($_POST['insert_reglaze'])) {
	
	$name = $_POST['name'];
	$price = $_POST['price'];
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
	$targetDir = "../images/Reglaze/"; 
    $allowTypes = array('jpg','JPG','png','PNG','jpeg','JPEG','gif','GIF'); 
     
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['files']['name']); 
    if(!empty($fileNames)){ 
        foreach($_FILES['files']['name'] as $key=>$val){ 
            // File upload path 
            $fileName = basename($_FILES['files']['name'][$key]); 
            $targetFilePath = $targetDir . $fileName; 
             
            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            if(in_array($fileType, $allowTypes)){ 
                // Upload file to server 
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                    // Image db insert sql 
                    $insertValuesSQL .=$fileName; 
                }else{ 
                    $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                } 
            }else{ 
                $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
            } 
        } 
		
	$image = $insertValuesSQL;	
	$stmt = $conn->prepare("INSERT INTO reglaze (name, price, image, active, created_at, updated_at) VALUES(?, ?, ?, ?, ? ,?)");
	$stmt->bind_param("sssiss", $name, $price,$image, $active, $created_at, $updated_at);

	$stmt->execute();
	header('location: reglaze.php');
	}
}
if(isset($_POST['update_reglaze'])) {
	//File Delete
	
	if(!empty($_POST['files[]'])) {
		$temp_image = $_POST['image_delete_name'];
	unlink($_SERVER['DOCUMENT_ROOT'] ."/feelgoodcontacts/images/Reglaze/".$temp_image);
	}
	
	else {}
	
	
	$id = $_POST['prod_id'];
	$name = $_POST['name'];
	$updated_at = date("Y-m-d H:i:s");
	$price = $_POST['price'];
	
	
	$targetDir = "../images/Reglaze/"; 
    $allowTypes = array('jpg','JPG','png','PNG','jpeg','JPEG','gif','GIF'); 
     
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['files']['name']); 
    if(!empty($fileNames)){ 
        foreach($_FILES['files']['name'] as $key=>$val){ 
            // File upload path 
            $fileName = basename($_FILES['files']['name'][$key]); 
            $targetFilePath = $targetDir . $fileName; 
             
            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            if(in_array($fileType, $allowTypes)){ 
                // Upload file to server 
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                    // Image db insert sql 
                    $insertValuesSQL .=$fileName; 
                }else{ 
                    $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                } 
            }else{ 
                $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
            } 
        } 
		
	}
	$image = $insertValuesSQL;	
	$stmt = $conn->prepare("Update reglaze SET name=?, price=?, image=?, updated_at=? where id=?");
	$stmt->bind_param("sdssi", $name, $price,$image,$updated_at,$id);

	$stmt->execute();
		header('location: reglaze.php');
}

if(isset($_POST['insert_offers'])) {
	
	$name = $_POST['name'];
	$code = $_POST['code'];
	$type = $_POST['type'];
	$moa = $_POST['moa'];
	$dis = $_POST['discount'];
	$vf = $_POST['vf'];
	$vt = $_POST['vt'];
	$des = $_POST['description'];
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
	
	$stmt = $conn->prepare("INSERT INTO offer (name, code, type, minimum_order_amount, discount_value, valid_from, valid_upto, offer_active, description, active, created_at, updated_at) VALUES(?, ?, ?, ?, ? ,?, ?, ?, ?, ?, ? ,?)");
	$stmt->bind_param("sssiissisiss", $name, $code,$type, $moa, $dis, $vf, $vt, $active, $des, $active, $created_at, $updated_at);

	$stmt->execute();
	header('location: offers.php');
	}
if(isset($_POST['update_offers'])) {
	$id=$_SESSION['upd_id'];
	$name = $_POST['name'];
	$code = $_POST['code'];
	$type = $_POST['type'];
	$moa = $_POST['moa'];
	$dis = $_POST['discount'];
	
	$vf = $_POST['vf'];
	$vt = $_POST['vt'];
	$des = $_POST['description'];
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");	
	$stmt = $conn->prepare("Update offer SET name=?, code=?, type=?, minimum_order_amount=?, discount_value=?, valid_from=?, valid_upto=?, description=?, updated_at=? where id=?");
	$stmt->bind_param("sisiissssi", $name, $code, $type,$moa, $dis, $vf, $vt, $des,$updated_at,$id);

	$stmt->execute();
		header('location: offers.php');
	}

if(isset($_POST['insert_labs'])) {
	
	$add=$_POST['address'];
	$contact=$_POST['contactperson'];
	$email=$_POST['email'];
	$phone=$_POST['phonenumber'];
	$name = $_POST['labname'];
	$acc = $_POST['accountnumber'];
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
	
	$stmt = $conn->prepare("INSERT INTO labs (labname, contactperson, accountnumber, address, phone , email, active, created_at, updated_at) VALUES(?, ?, ?, ?, ? ,?, ?, ?, ?)");
	$stmt->bind_param("sssssssss", $name, $contact,$acc, $add, $phone, $email, $active, $created_at, $updated_at);

	$stmt->execute();
	header('location: labs.php');
	}
if(isset($_POST['update_labs'])) {
	
	$id=$_SESSION['upd_id'];
	$ln=$_POST['labname'];
	$cp = $_POST['contactperson'];
	$an = $_POST['accountnumber'];
	$add = $_POST['address'];
	$pn = $_POST['phonenumber'];
	$email = $_POST['email'];
	
	$updated_at = date("Y-m-d H:i:s");
	
	$stmt = $conn->prepare("Update labs SET labname=?, contactperson=?, accountnumber=?, address=?, phone=?, email=?, updated_at=? where id=?");
	$stmt->bind_param("sssssssi", $ln, $cp, $an, $add, $pn, $email, $updated_at ,$id);

	$stmt->execute();
		header('location: labs.php');
	}

if(isset($_POST['insert_postage'])) {
	
	$name = $_POST['name'];
	$price = $_POST['price'];
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
	
	$stmt = $conn->prepare("INSERT INTO postage (servicename, price, active, created_at, updated_at) VALUES(?, ?, ?, ?,?)");
	$stmt->bind_param("siiss", $name, $price, $active, $created_at, $updated_at);

	$stmt->execute();
	header('location: postage.php');
	}
if(isset($_POST['update_postage'])) {
	
	$id = $_SESSION['upd_id'];
	$name = $_POST['name'];
	$price = $_POST['price'];
	$updated_at = date("Y-m-d H:i:s");
	
	$stmt = $conn->prepare("Update postage SET servicename=?, price=?, updated_at=? where id=?");
	$stmt->bind_param("sssi", $name, $price,$updated_at,$id);

	$stmt->execute();
		header('location: postage.php');
	}

if(isset($_POST['insert_customer'])) {
	
	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$country = $_POST['country'];
	$add1 = $_POST['address1'];
	$add2 = $_POST['address2'];
	$cs = $_POST['countrystate'];
	$cityst = $_POST['citytown'];
	$phone = $_POST['phone'];
	$targetDir = "../images/CustomersPresciptions/"; 
    $allowTypes = array('jpg','JPG','png','PNG','jpeg','JPEG','gif','GIF'); 
     
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['files']['name']); 
    if(!empty($fileNames)){ 
        foreach($_FILES['files']['name'] as $key=>$val){ 
            // File upload path 
            $fileName = basename($_FILES['files']['name'][$key]); 
            $targetFilePath = $targetDir . $fileName; 
             
            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            if(in_array($fileType, $allowTypes)){ 
                // Upload file to server 
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                    // Image db insert sql 
                    $insertValuesSQL .=$fileName; 
                }else{ 
                    $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                } 
            }else{ 
                $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
            } 
        } 
		
	$presciption = $insertValuesSQL;	
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
	
	$stmt = $conn->prepare("INSERT INTO customers (first_name, last_name, email, password, presciption, country, address1, address2, city_town, country_state, phone, active, created_at, updated_at) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("sssssssssssiss", $fname, $lname, $email, $pass, $presciption, $country, $add1, $add2, $cityst, $cs, $phone , $active, $created_at, $updated_at);

	$stmt->execute();
	header('location: customers.php');
}
}
if(isset($_POST['update_customer'])) {
	
	$id = $_SESSION['upd_id'];
	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$country = $_POST['country'];
	$add1 = $_POST['address1'];
	$add2 = $_POST['address2'];
	$cs = $_POST['countrystate'];
	$cityst = $_POST['citytown'];
	$phone = $_POST['phone'];
	$targetDir = "../images/CustomersPresciptions/"; 
    $allowTypes = array('jpg','JPG','png','PNG','jpeg','JPEG','gif','GIF'); 
     
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['files']['name']); 
    if(!empty($fileNames)){ 
        foreach($_FILES['files']['name'] as $key=>$val){ 
            // File upload path 
            $fileName = basename($_FILES['files']['name'][$key]); 
            $targetFilePath = $targetDir . $fileName; 
             
            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            if(in_array($fileType, $allowTypes)){ 
                // Upload file to server 
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                    // Image db insert sql 
                    $insertValuesSQL .=$fileName; 
                }else{ 
                    $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                } 
            }else{ 
                $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
            } 
        } 
		
	$presciption = $insertValuesSQL;	
	$updated_at = date("Y-m-d H:i:s");
	
	
	$stmt = $conn->prepare("Update customers SET first_name=?, last_name=?, email=?, password=?, presciption=?, country,=? address1=?, address2=?, city_town=?, country_state=?, phone=?, updated_at=? where $id=?");
	$stmt->bind_param("ssssssssssssi", $fname, $lname, $email, $pass, $presciption, $country, $add1, $add2, $cityst, $cs, $phone , $updated_at, $id);

	$stmt->execute();
	header('location: customers.php');
}
}
	
if(isset($_POST['insert_user'])) {
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$phone = $_POST['phone'];	
	$role = $_POST['role'];
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
	
	$stmt = $conn->prepare("INSERT INTO users (name, email, password, contact, role, active, created_at, updated_at) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("sssssiss", $name, $email, $pass, $phone, $role , $active, $created_at, $updated_at);

	$stmt->execute();
	header('location: users.php');
}
if(isset($_POST['update_user'])) {
	
	$id = $_SESSION['upd_id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$phone = $_POST['phone'];	
	$role = $_POST['role'];
	$updated_at = date("Y-m-d H:i:s");
	
	$stmt = $conn->prepare("Update users SET name=?, email=?, password=?, contact=?, role=?, updated_at=? where $id=?");
	$stmt->bind_param("ssssssi", $name, $email, $pass, $phone, $role ,$updated_at, $id);

	$stmt->execute();
	header('location: users.php');
	
}
	
	
//Reglaze End

/*CODE BY NAEEM END*/
/*
if(!$conn) {
	echo "Error404 : " . mysqli_connect_error();
}
else {
	echo "Connected Successfully";
	echo "<hr>";
}*/

 //TABLE CREATE QUERY
/*
$sql = "CREATE TABLE orders(
id int AUTO_INCREMENT PRIMARY KEY,
Product_id int,
Customer_id int,
Product_Type varchar(225),
Product_Price int,
Price_After_Discount int,
Quantity int,
Discount varchar(225),
Total int,
Payment_id int,
Shipper_id int,
Power_Left varchar(225),
Power_Right varchar(225),
BC_Left varchar(225),
BC_Right varchar(225),
Diameter_Left varchar(225),
Diameter_Right varchar(225),
Cylinder_Left varchar(225),
Cylinder_Right varchar(225),
Axis_Left varchar(225),
Axis_Right varchar(225),
Left_Selected varchar(225),
Right_Selected varchar(225),
Qty_Boxes_Left varchar(225),
Qty_Boxes_Right varchar(225),




Number_Of_Pack varchar(225),
Step_1_Option varchar(225),
Step_2_Option varchar(225),
Step_3_Option varchar(225),
Prescription_id int,
active int,
created_at timestamp,
updated_at timestamp NULL);";
if($conn->query($sql) === true) {
	echo "TABLE Created Successfully";
}
else {
	echo "Error : ". $conn->error;
}*/
/*


//Inert Into Table
	$id = 14;
	$name = "Titanium";
	$product_id = 1;
	$active = 1;
	$date_temp = (string)date('Y-m-d H:i:s');
	$date_temp2 = NULL;
//INSERT
$pst = $conn->prepare("INSERT INTO material values($id,$product_id,'$name','Sunglasses',$active,'$date_temp','$date_temp2')");
//$pst->bind_param('isiss',$id,$name,$active,$date_temp,$date_temp2);

$pst->execute();
echo "Submitted Succesfully";
*/

 //TABLE CREATE QUERY 
/*
$sql = "CREATE TABLE reglaze(
id int AUTO_INCREMENT PRIMARY KEY,
name varchar(225),
price varchar(225),
image varchar(225),
active int,
created_at timestamp,
updated_at timestamp NULL);";
if($conn->query($sql) === true) {
	echo "TABLE Created Successfully";
}
else {
	echo "Error : ". $conn->error;
}*/
/* Sunglasses Start*/

/*Create Sunglasses Product*/
if(isset($_POST['insert_sunglasses'])) {
	
	global $customer_id_count;
	global $customer_id_number;
	
	//Order Number START
	$contact_order_number_fetch = mysqli_query($conn,"SELECT * FROM order_numbers where name='product'");
	while($order_number_fetch=mysqli_fetch_array($contact_order_number_fetch,MYSQLI_ASSOC)) {
		$customer_id_number = $order_number_fetch['number'];
	}
	$customer_id_count = 1;
	//trim And finalize the Emp ID
			$customer_id_trim = trim($customer_id_number,"PR");
			$customer_id_number_increament = (int)$customer_id_trim + $customer_id_count;//coun;
			$customer_id_concatinate = "PR".$customer_id_number_increament;
	$stmt2 = $conn->prepare("UPDATE order_numbers SET number=? where name='product'");
	$stmt2->bind_param("s", $customer_id_concatinate);
	$stmt2->execute();
	$stmt2->close();
	//Order Number END
	
	
	//Upload Image Start
	// File upload configuration 
    $targetDir = "../images/Products/"; 
    $allowTypes = array('jpg','JPG','png','PNG','jpeg','JPEG','gif','GIF'); 
     
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['files']['name']); 
    if(!empty($fileNames)){ 
        foreach($_FILES['files']['name'] as $key=>$val){ 
            // File upload path 
            $fileName = basename($_FILES['files']['name'][$key]); 
            $targetFilePath = $targetDir . $fileName; 
             
            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            if(in_array($fileType, $allowTypes)){ 
                // Upload file to server 
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                    // Image db insert sql 
                    $insertValuesSQL .=$fileName; 
                }else{ 
                    $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                } 
            }else{ 
                $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
            } 
        } 
         
     
    // Display status message 
    //echo $statusMsg; 
} 
	//Upload Image End
	
	$id = "";
	$order_number = $customer_id_concatinate;
	$image = $insertValuesSQL;
	$name = $_POST['name'];
	$Price = $_POST['price'];
	$Sale_Price = $_POST['sale_price'];
	$Quantity = $_POST['quantity'];
	$Power_Range = 0;
	$Base_Curve = 0;
	$Diameter = 0;
	$Lens_Material = 0;
	$Water_Content = 0;
	$Oxygen_Permeability = 0;
	$Customer_Reviews = 0;
	$Product_Qty_Description = 0;
	$product_lense_description = 0;
	$Pack = 0;
	$Product_Description = 0;
	$Product_Detail_Advice  = 0;
	$Further_Optical_Advice = 0;
	$Brands_of_Contact_Lenses = 0;
	$Types_of_Contact_Lenses = 0;
	$Shop_by_Manufacturer = 0;
	$Types_of_Solutions = 0;
	$Popular_Solutions = 0;
	$Eye_Care = 0;
	$Popular_Eye_Care = 0;
	$Wearing_Type = 0;
	$Optician_Brands = 0;
	$Colours = 0;
	$Gender = $_POST['gender'];
	$Brand = $_POST['brand'];
	$Shape = $_POST['shape'];
	$Frame_Color = $_POST['frame_color'];
	$LENS_SIZE = $_POST['lens_size'];;
	$LENS_COLOUR = $_POST['lens_color'];;
	$Frame_Size = 0;
	$Material = $_POST['material'];
	$fm_height = 0;
	$fm_lense_width = 0;
	$fm_lense_bt_width = 0;
	$fm_stick_width = 0;
	$fm_width = 0;
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");

	// prepare and bind
	$stmt = $conn->prepare("INSERT INTO product (id,
order_number,
image,
name,
Price,
Sale_Price,
Quantity,
Power_Range,
Base_Curve,
Diameter,
Lens_Material,
Water_Content,
Oxygen_Permeability,
Customer_Reviews,
Product_Qty_Description,
product_lense_description,
Pack,
Product_Description ,
Product_Detail_Advice ,
Further_Optical_Advice,
Brands_of_Contact_Lenses,
Types_of_Contact_Lenses,
Shop_by_Manufacturer,
Types_of_Solutions,
Popular_Solutions,
Eye_Care,
Popular_Eye_Care,
Wearing_Type,
Optician_Brands,
Colours,
Gender,
Brand,
Shape,
Frame_Color,
LENS_SIZE,
LENS_COLOUR,
Frame_Size,
Material,
fm_height,
fm_lense_width,
fm_lense_bt_width,
fm_stick_width,
fm_width,
active,
created_at,
updated_at) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("isssdsissssssisiiiiiiiiiiiiiiiiiiiiiiiiiiiiiss", $id,
$order_number,
$image,
$name,
$Price,
$Sale_Price,
$Quantity,
$Power_Range,
$Base_Curve,
$Diameter,
$Lens_Material,
$Water_Content,
$Oxygen_Permeability,
$Customer_Reviews,
$Product_Qty_Description,
$product_lense_description,
$Pack,
$Product_Description ,
$Product_Detail_Advice ,
$Further_Optical_Advice,
$Brands_of_Contact_Lenses,
$Types_of_Contact_Lenses,
$Shop_by_Manufacturer,
$Types_of_Solutions,
$Popular_Solutions,
$Eye_Care,
$Popular_Eye_Care,
$Wearing_Type,
$Optician_Brands,
$Colours,
$Gender,
$Brand,
$Shape,
$Frame_Color,
$LENS_SIZE,
$LENS_COLOUR,
$Frame_Size,
$Material,
$fm_height,
$fm_lense_width,
$fm_lense_bt_width,
$fm_stick_width,
$fm_width,
$active,
$created_at,
$updated_at);


	$stmt->execute();

	$stmt->close();
	$conn->close();
}
/*Edit Sunglasses Product*/
if(isset($_POST['edit_sunglasses'])) {
	if(isset($_POST['img_check'])){
	//File Delete
		$file = $_POST['image_delete_name'];
	unlink($_SERVER['DOCUMENT_ROOT'] ."/feelgoodcontacts/images/Products/".$file);
		
	//Upload Image Start
	// File upload configuration 
    $targetDir = "../images/Products/"; 
    $allowTypes = array('jpg','JPG','png','PNG','jpeg','JPEG','gif','GIF'); 
     
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['files']['name']); 
    if(!empty($fileNames)){ 
        foreach($_FILES['files']['name'] as $key=>$val){ 
            // File upload path 
            $fileName = basename($_FILES['files']['name'][$key]); 
            $targetFilePath = $targetDir . $fileName; 
             
            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            if(in_array($fileType, $allowTypes)){ 
                // Upload file to server 
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                    // Image db insert sql 
                    $insertValuesSQL .=$fileName; 
                }else{ 
                    $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                } 
            }else{ 
                $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
            } 
        } 
         
     
    // Display status message 
    //echo $statusMsg; 
	}	
	$image = $insertValuesSQL;
	//Upload Image End
}
	else {
		$image = $_POST['image_delete_name'];
	}
	
	$id = $_POST['prod_id'];
	$order_number = $customer_id_concatinate;
	$name = $_POST['name'];
	$Price = $_POST['price'];
	$Sale_Price = $_POST['sale_price'];
	$Quantity = $_POST['quantity'];
	$Power_Range = 0;
	$Base_Curve = 0;
	$Diameter = 0;
	$Lens_Material = 0;
	$Water_Content = 0;
	$Oxygen_Permeability = 0;
	$Customer_Reviews = 0;
	$Product_Qty_Description = 0;
	$product_lense_description = 0;
	$Pack = 0;
	$Product_Description = 0;
	$Product_Detail_Advice  = 0;
	$Further_Optical_Advice = 0;
	$Brands_of_Contact_Lenses = 0;
	$Types_of_Contact_Lenses = 0;
	$Shop_by_Manufacturer = 0;
	$Types_of_Solutions = 0;
	$Popular_Solutions = 0;
	$Eye_Care = 0;
	$Popular_Eye_Care = 0;
	$Wearing_Type = 0;
	$Optician_Brands = 0;
	$Colours = 0;
	$Gender = $_POST['gender'];
	$Brand = $_POST['brand'];
	$Shape = $_POST['shape'];
	$Frame_Color = $_POST['frame_color'];
	$LENS_SIZE = $_POST['lens_size'];
	$LENS_COLOUR = $_POST['lens_color'];
	$Frame_Size = 0;
	$Material = $_POST['material'];
	$fm_height = 0;
	$fm_lense_width = 0;
	$fm_lense_bt_width = 0;
	$fm_stick_width = 0;
	$fm_width = 0;
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");

	// prepare and bind
	$stmt = $conn->prepare("UPDATE product SET image=?, name=?, Price=?, Sale_Price=?, Quantity=?, Gender=?, Brand=?, Shape=?, Frame_Color=?, Frame_Size=?, Material=?, LENS_SIZE=?, LENS_COLOUR=?, updated_at=? where id=?");
	$stmt->bind_param("ssdsiiiiiiiiisi", $image,
$name,
$Price,
$Sale_Price,
$Quantity,
$Gender,
$Brand,
$Shape,
$Frame_Color,
$Frame_Size,
$Material,
$LENS_SIZE,
$LENS_COLOUR,
$updated_at,
$id);


	$stmt->execute();

	$stmt->close();
	$conn->close();
	header('location: product_edit5.php?product_id='.$id);
}
/*Delete Sunglasses Product*/
if(isset($_GET['delete_sunglasses_product'])) {
	$del_id = $_GET['delete_sunglasses_product'];
	
	$sql = "DELETE FROM product WHERE id=$del_id";
		if(mysqli_query($conn, $sql)){
	}
	
	$sql1 = "DELETE FROM customer_review WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql1)){
	}
	
	$sql2 = "DELETE FROM product_description WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql2)){
	}
	
	$sql3 = "DELETE FROM furthur_optical_advice WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql3)){
	}
	
	$sql4 = "DELETE FROM power WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql4)){
	}
	
	$sql5 = "DELETE FROM base_curve WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql5)){
	}
	
	$sql6 = "DELETE FROM diameter WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql6)){
	}
	
	$sql7 = "DELETE FROM cylinder WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql7)){
	}
	
	$sql8 = "DELETE FROM axis WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql8)){
	}
	
	$sql9 = "DELETE FROM color WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql9)){
	}
	
	$sql10 = "DELETE FROM quantity_of_boxes WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql10)){
	}
	
	$sql11 = "DELETE FROM number_of_packs WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql11)){
	}
	
	
}


//Sunglasses Size Description
if(isset($_POST['update_size_description2'])) {
	
	
	
	$id = $_POST['prod_id'];
	$fm_height = $_POST['fm_height'];;
	$fm_lense_width = $_POST['fm_lense_width'];;
	$fm_lense_bt_width = $_POST['fm_lense_bt_width'];;
	$fm_stick_width = $_POST['fm_stick_width'];;
	$fm_width = $_POST['fm_width'];;

	// prepare and bind
	$stmt = $conn->prepare("UPDATE product SET fm_height=?, fm_lense_width=?, fm_lense_bt_width=?, fm_stick_width=?, fm_width=? where id=?");
	$stmt->bind_param("iiiiii", $fm_height,
$fm_lense_width,
$fm_lense_bt_width,
$fm_stick_width,
$fm_width,
$id);


	$stmt->execute();

	$stmt->close();
	$conn->close();
	header('location: product_view5.php?product_id='.$id);
}
/*Number Of Pack Sunglasses*/
if(isset($_POST['add_variant_sunglasses'])) {
	$id = "";
	$Product_id = $_POST['prod_id'];
	$Merge = $_POST['variant'];
	$Type = 'Sunglasses';
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
	
	// prepare and bind
	$stmt = $conn->prepare("insert into product_merge (id,Product_id,Merge,Type,active,created_at,updated_at) VALUES(?,?,?,?,?,?,?)");
	$stmt->bind_param("iiisiss", $id,$Product_id,$Merge,$Type,$active,$created_at,$updated_at);


	$stmt->execute();

	$stmt->close();
	$conn->close();
	header('location: product_view5.php?product_id='.$Product_id);
}
/*Sunglasses Variant Delete*/
if(isset($_POST['sunglasses_variant_delete'])) {
	$del_id = $_POST['delete_id'];
	$prod_id = $_POST['prod_id'];
	
	$sql = "DELETE FROM product_merge WHERE id=$del_id";
	if(mysqli_query($conn, $sql)){
	}
}
//Search Product
if(isset($_POST['search_btn5'])){ 
		$src = $_POST['search_text'];
	header("location: sunglasses.php?search=$src");
}
/*Add Gender*/
if(isset($_POST['add_sun_gender'])) {
	
	$id = "";
	$Product_id = 1;
	$name = $_POST['name'];
	$type = 'Sunglasses';
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
		
		// prepare and bind
	$stmt = $conn->prepare("INSERT INTO gender (id, Product_id, Gender, Type, active, created_at, updated_at) VALUES(?, ?, ?, ?, ? , ?, ?)");
	$stmt->bind_param("iississ", $id, $Product_id,$name, $type, $active, $created_at, $updated_at);


	$stmt->execute();
}
/*

/*Add Material*/
if(isset($_POST['add_sun_material'])) {
	
	$id = "";
	$Product_id = 1;
	$name = $_POST['name'];
	$type = 'Sunglasses';
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
		
		// prepare and bind
	$stmt = $conn->prepare("INSERT INTO material (id, Product_id, Material, Type, active, created_at, updated_at) VALUES(?, ?, ?, ?, ? , ?, ?)");
	$stmt->bind_param("iississ", $id, $Product_id,$name, $type, $active, $created_at, $updated_at);


	$stmt->execute();
}
/*Add Lens Size*/
if(isset($_POST['add_sun_lens_size'])) {
	
	$id = "";
	$Product_id = 1;
	$name = $_POST['name'];
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
		
		// prepare and bind
	$stmt = $conn->prepare("INSERT INTO lens_size (id, Product_id, LENS_SIZE, active, created_at, updated_at) VALUES(?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("iisiss", $id, $Product_id,$name, $active, $created_at, $updated_at);


	$stmt->execute();
}
/*Add Brand*/
if(isset($_POST['add_sun_brand'])) {
	
	$id = "";
	$Product_id = 1;
	$name = $_POST['name'];
	$type = 'Sunglasses';
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
		
	//Upload Image Start
	// File upload configuration 
    $targetDir = "../images/header/All Brands/"; 
    $allowTypes = array('jpg','JPG','png','PNG','jpeg','JPEG','gif','GIF'); 
     
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['files']['name']); 
    if(!empty($fileNames)){ 
        foreach($_FILES['files']['name'] as $key=>$val){ 
            // File upload path 
            $fileName = basename($_FILES['files']['name'][$key]); 
            $targetFilePath = $targetDir . $fileName; 
             
            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            if(in_array($fileType, $allowTypes)){ 
                // Upload file to server 
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                    // Image db insert sql 
                    $insertValuesSQL .=$fileName; 
                }else{ 
                    $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                } 
            }else{ 
                $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
            } 
        } 
         
     
    // Display status message 
    //echo $statusMsg; 
	}	
	$image = $insertValuesSQL;
	//Upload Image End
	
	
		// prepare and bind
	$stmt = $conn->prepare("INSERT INTO brand (id, Product_id, Brand, Type, active, created_at, updated_at, image_link) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("iississs", $id, $Product_id, $name, $type, $active, $created_at, $updated_at, $image);


	$stmt->execute();
}
/*Add Shape*/
if(isset($_POST['add_sun_shape'])) {
	
	$id = "";
	$Product_id = 1;
	$name = $_POST['name'];
	$type = 'Sunglasses';
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
		
	//Upload Image Start
	// File upload configuration 
    $targetDir = "../images/header/Glasses/Frames/"; 
    $allowTypes = array('jpg','JPG','png','PNG','jpeg','JPEG','gif','GIF'); 
     
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['files']['name']); 
    if(!empty($fileNames)){ 
        foreach($_FILES['files']['name'] as $key=>$val){ 
            // File upload path 
            $fileName = basename($_FILES['files']['name'][$key]); 
            $targetFilePath = $targetDir . $fileName; 
             
            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            if(in_array($fileType, $allowTypes)){ 
                // Upload file to server 
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                    // Image db insert sql 
                    $insertValuesSQL .=$fileName; 
                }else{ 
                    $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                } 
            }else{ 
                $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
            } 
        } 
         
     
    // Display status message 
    //echo $statusMsg; 
	}	
	$image = $insertValuesSQL;
	//Upload Image End
	
	
		// prepare and bind
	$stmt = $conn->prepare("INSERT INTO shape (id, Product_id, Shape, image_link, Type, active, created_at, updated_at) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("iisssiss", $id, $Product_id, $name, $image, $type, $active, $created_at, $updated_at);


	$stmt->execute();
}
/*Add Frame Color*/
if(isset($_POST['add_sun_frame_color'])) {
	
	$id = "";
	$Product_id = 1;
	$name = $_POST['name'];
	$type = 'Sunglasses';
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
		
	//Upload Image Start
	// File upload configuration 
    $targetDir = "../images/Shop/glasses/"; 
    $allowTypes = array('jpg','JPG','png','PNG','jpeg','JPEG','gif','GIF'); 
     
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['files']['name']); 
    if(!empty($fileNames)){ 
        foreach($_FILES['files']['name'] as $key=>$val){ 
            // File upload path 
            $fileName = basename($_FILES['files']['name'][$key]); 
            $targetFilePath = $targetDir . $fileName; 
             
            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            if(in_array($fileType, $allowTypes)){ 
                // Upload file to server 
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                    // Image db insert sql 
                    $insertValuesSQL .=$fileName; 
                }else{ 
                    $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                } 
            }else{ 
                $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
            } 
        } 
         
     
    // Display status message 
    //echo $statusMsg; 
	}	
	$image = $insertValuesSQL;
	//Upload Image End
	
	
		// prepare and bind
	$stmt = $conn->prepare("INSERT INTO frame_color (id, Product_id, Frame_Color, image_link, Type, active, created_at, updated_at) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("iisssiss", $id, $Product_id, $name, $image, $type, $active, $created_at, $updated_at);


	$stmt->execute();
}
/*Add Lens Color*/
if(isset($_POST['add_sun_lens_color'])) {
	
	$id = "";
	$Product_id = 1;
	$name = $_POST['name'];
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
		
	//Upload Image Start
	// File upload configuration 
    $targetDir = "../images/Shop/glasses/"; 
    $allowTypes = array('jpg','JPG','png','PNG','jpeg','JPEG','gif','GIF'); 
     
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['files']['name']); 
    if(!empty($fileNames)){ 
        foreach($_FILES['files']['name'] as $key=>$val){ 
            // File upload path 
            $fileName = basename($_FILES['files']['name'][$key]); 
            $targetFilePath = $targetDir . $fileName; 
             
            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            if(in_array($fileType, $allowTypes)){ 
                // Upload file to server 
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                    // Image db insert sql 
                    $insertValuesSQL .=$fileName; 
                }else{ 
                    $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                } 
            }else{ 
                $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
            } 
        } 
         
     
    // Display status message 
    //echo $statusMsg; 
	}	
	$image = $insertValuesSQL;
	//Upload Image End
	
	
		// prepare and bind
	$stmt = $conn->prepare("INSERT INTO lens_colour (id, Product_id, LENS_COLOUR, image_link, active, created_at, updated_at) VALUES(?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("iississ", $id, $Product_id, $name, $image, $active, $created_at, $updated_at);


	$stmt->execute();
}

/*Delete Lens Size*/
if(isset($_GET['delete_sunglasses_lens_size_id'])) {
	$del_id = $_GET['delete_sunglasses_lens_size_id'];
	
	$sql = "DELETE FROM lens_size WHERE id=$del_id";
		if(mysqli_query($conn, $sql)){
	}
}
/*Delete Lens Color*/
if(isset($_GET['delete_sunglasses_lens_color_id'])) {
	$del_id = $_GET['delete_sunglasses_lens_color_id'];
	
	//File Delete
		$file = $_GET['image_name'];
	echo $file;
	unlink($_SERVER['DOCUMENT_ROOT'] ."/feelgoodcontacts/images/Shop/glasses/".$file);
	
	$sql = "DELETE FROM lens_colour WHERE id=$del_id";
		if(mysqli_query($conn, $sql)){
	}
}
/*Delete Material*/
if(isset($_GET['delete_sunglasses_material_id'])) {
	$del_id = $_GET['delete_sunglasses_material_id'];
	
	$sql = "DELETE FROM material WHERE id=$del_id";
		if(mysqli_query($conn, $sql)){
	}
}
/*Delete Gender*/
if(isset($_GET['delete_sunglasses_gender_id'])) {
	$del_id = $_GET['delete_sunglasses_gender_id'];
	
	$sql = "DELETE FROM gender WHERE id=$del_id";
		if(mysqli_query($conn, $sql)){
	}
}
/*Delete Brand*/
if(isset($_GET['delete_sunglasses_brand_id'])) {
	$del_id = $_GET['delete_sunglasses_brand_id'];
	
	//File Delete
		$file = $_GET['image_name'];
	echo $file;
	unlink($_SERVER['DOCUMENT_ROOT'] ."/feelgoodcontacts/images/header/All Brands/".$file);
	
	$sql = "DELETE FROM brand WHERE id=$del_id";
		if(mysqli_query($conn, $sql)){
	}
}
/*Delete Shape*/
if(isset($_GET['delete_sunglasses_shape_id'])) {
	$del_id = $_GET['delete_sunglasses_shape_id'];
	
	//File Delete
		$file = $_GET['image_name'];
	echo $file;
	unlink($_SERVER['DOCUMENT_ROOT'] ."/feelgoodcontacts/images/header/Glasses/Frames/".$file);
	
	$sql = "DELETE FROM shape WHERE id=$del_id";
		if(mysqli_query($conn, $sql)){
	}
}
/*Delete Frame Color*/
if(isset($_GET['delete_sunglasses_frame_color_id'])) {
	$del_id = $_GET['delete_sunglasses_frame_color_id'];
	
	//File Delete
		$file = $_GET['image_name'];
	
	unlink($_SERVER['DOCUMENT_ROOT'] ."/feelgoodcontacts/images/Shop/glasses/".$file);
	
	$sql = "DELETE FROM frame_color WHERE id=$del_id";
		if(mysqli_query($conn, $sql)){
	}
}



/* Glasses Start*/
/* Glasses Search */

/*Create Glasses Product*/
if(isset($_POST['insert_glasses'])) {
	
	global $customer_id_count;
	global $customer_id_number;
	
	//Order Number START
	$contact_order_number_fetch = mysqli_query($conn,"SELECT * FROM order_numbers where name='product'");
	while($order_number_fetch=mysqli_fetch_array($contact_order_number_fetch,MYSQLI_ASSOC)) {
		$customer_id_number = $order_number_fetch['number'];
	}
	$customer_id_count = 1;
	//trim And finalize the Emp ID
			$customer_id_trim = trim($customer_id_number,"PR");
			$customer_id_number_increament = (int)$customer_id_trim + $customer_id_count;//coun;
			$customer_id_concatinate = "PR".$customer_id_number_increament;
	$stmt2 = $conn->prepare("UPDATE order_numbers SET number=? where name='product'");
	$stmt2->bind_param("s", $customer_id_concatinate);
	$stmt2->execute();
	$stmt2->close();
	//Order Number END
	
	
	//Upload Image Start
	// File upload configuration 
    $targetDir = "../images/Products/"; 
    $allowTypes = array('jpg','JPG','png','PNG','jpeg','JPEG','gif','GIF'); 
     
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['files']['name']); 
    if(!empty($fileNames)){ 
        foreach($_FILES['files']['name'] as $key=>$val){ 
            // File upload path 
            $fileName = basename($_FILES['files']['name'][$key]); 
            $targetFilePath = $targetDir . $fileName; 
             
            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            if(in_array($fileType, $allowTypes)){ 
                // Upload file to server 
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                    // Image db insert sql 
                    $insertValuesSQL .=$fileName; 
                }else{ 
                    $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                } 
            }else{ 
                $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
            } 
        } 
         
     
    // Display status message 
    //echo $statusMsg; 
} 
	//Upload Image End
	
	$id = "";
	$order_number = $customer_id_concatinate;
	$image = $insertValuesSQL;
	$name = $_POST['name'];
	$Price = $_POST['price'];
	$Sale_Price = $_POST['sale_price'];
	$Quantity = $_POST['quantity'];
	$Power_Range = 0;
	$Base_Curve = 0;
	$Diameter = 0;
	$Lens_Material = 0;
	$Water_Content = 0;
	$Oxygen_Permeability = 0;
	$Customer_Reviews = 0;
	$Product_Qty_Description = 0;
	$product_lense_description = 0;
	$Pack = 0;
	$Product_Description = 0;
	$Product_Detail_Advice  = 0;
	$Further_Optical_Advice = 0;
	$Brands_of_Contact_Lenses = 0;
	$Types_of_Contact_Lenses = 0;
	$Shop_by_Manufacturer = 0;
	$Types_of_Solutions = 0;
	$Popular_Solutions = 0;
	$Eye_Care = 0;
	$Popular_Eye_Care = 0;
	$Wearing_Type = 0;
	$Optician_Brands = 0;
	$Colours = 0;
	$Gender = $_POST['gender'];
	$Brand = $_POST['brand'];
	$Shape = $_POST['shape'];
	$Frame_Color = $_POST['frame_color'];
	$LENS_SIZE = 0;
	$LENS_COLOUR = 0;
	$Frame_Size = $_POST['frame_size'];
	$Material = $_POST['material'];
	$fm_height = 0;
	$fm_lense_width = 0;
	$fm_lense_bt_width = 0;
	$fm_stick_width = 0;
	$fm_width = 0;
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");

	// prepare and bind
	$stmt = $conn->prepare("INSERT INTO product (id,
order_number,
image,
name,
Price,
Sale_Price,
Quantity,
Power_Range,
Base_Curve,
Diameter,
Lens_Material,
Water_Content,
Oxygen_Permeability,
Customer_Reviews,
Product_Qty_Description,
product_lense_description,
Pack,
Product_Description ,
Product_Detail_Advice ,
Further_Optical_Advice,
Brands_of_Contact_Lenses,
Types_of_Contact_Lenses,
Shop_by_Manufacturer,
Types_of_Solutions,
Popular_Solutions,
Eye_Care,
Popular_Eye_Care,
Wearing_Type,
Optician_Brands,
Colours,
Gender,
Brand,
Shape,
Frame_Color,
LENS_SIZE,
LENS_COLOUR,
Frame_Size,
Material,
fm_height,
fm_lense_width,
fm_lense_bt_width,
fm_stick_width,
fm_width,
active,
created_at,
updated_at) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("isssdsissssssisiiiiiiiiiiiiiiiiiiiiiiiiiiiiiss", $id,
$order_number,
$image,
$name,
$Price,
$Sale_Price,
$Quantity,
$Power_Range,
$Base_Curve,
$Diameter,
$Lens_Material,
$Water_Content,
$Oxygen_Permeability,
$Customer_Reviews,
$Product_Qty_Description,
$product_lense_description,
$Pack,
$Product_Description ,
$Product_Detail_Advice ,
$Further_Optical_Advice,
$Brands_of_Contact_Lenses,
$Types_of_Contact_Lenses,
$Shop_by_Manufacturer,
$Types_of_Solutions,
$Popular_Solutions,
$Eye_Care,
$Popular_Eye_Care,
$Wearing_Type,
$Optician_Brands,
$Colours,
$Gender,
$Brand,
$Shape,
$Frame_Color,
$LENS_SIZE,
$LENS_COLOUR,
$Frame_Size,
$Material,
$fm_height,
$fm_lense_width,
$fm_lense_bt_width,
$fm_stick_width,
$fm_width,
$active,
$created_at,
$updated_at);


	$stmt->execute();

	$stmt->close();
	$conn->close();
}
/*Edit Glasses Product*/
if(isset($_POST['edit_glasses'])) {
	if(isset($_POST['img_check'])){
	//File Delete
		$file = $_POST['image_delete_name'];
	unlink($_SERVER['DOCUMENT_ROOT'] ."/feelgoodcontacts/images/Products/".$file);
		
	//Upload Image Start
	// File upload configuration 
    $targetDir = "../images/Products/"; 
    $allowTypes = array('jpg','JPG','png','PNG','jpeg','JPEG','gif','GIF'); 
     
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['files']['name']); 
    if(!empty($fileNames)){ 
        foreach($_FILES['files']['name'] as $key=>$val){ 
            // File upload path 
            $fileName = basename($_FILES['files']['name'][$key]); 
            $targetFilePath = $targetDir . $fileName; 
             
            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            if(in_array($fileType, $allowTypes)){ 
                // Upload file to server 
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                    // Image db insert sql 
                    $insertValuesSQL .=$fileName; 
                }else{ 
                    $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                } 
            }else{ 
                $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
            } 
        } 
         
     
    // Display status message 
    //echo $statusMsg; 
	}	
	$image = $insertValuesSQL;
	//Upload Image End
}
	else {
		$image = $_POST['image_delete_name'];
	}
	
	$id = $_POST['prod_id'];
	$order_number = $customer_id_concatinate;
	$name = $_POST['name'];
	$Price = $_POST['price'];
	$Sale_Price = $_POST['sale_price'];
	$Quantity = $_POST['quantity'];
	$Power_Range = 0;
	$Base_Curve = 0;
	$Diameter = 0;
	$Lens_Material = 0;
	$Water_Content = 0;
	$Oxygen_Permeability = 0;
	$Customer_Reviews = 0;
	$Product_Qty_Description = 0;
	$product_lense_description = 0;
	$Pack = 0;
	$Product_Description = 0;
	$Product_Detail_Advice  = 0;
	$Further_Optical_Advice = 0;
	$Brands_of_Contact_Lenses = 0;
	$Types_of_Contact_Lenses = 0;
	$Shop_by_Manufacturer = 0;
	$Types_of_Solutions = 0;
	$Popular_Solutions = 0;
	$Eye_Care = 0;
	$Popular_Eye_Care = 0;
	$Wearing_Type = 0;
	$Optician_Brands = 0;
	$Colours = 0;
	$Gender = $_POST['gender'];
	$Brand = $_POST['brand'];
	$Shape = $_POST['shape'];
	$Frame_Color = $_POST['frame_color'];
	$LENS_SIZE = 0;
	$LENS_COLOUR = 0;
	$Frame_Size = $_POST['frame_size'];
	$Material = $_POST['material'];
	$fm_height = 0;
	$fm_lense_width = 0;
	$fm_lense_bt_width = 0;
	$fm_stick_width = 0;
	$fm_width = 0;
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");

	// prepare and bind
	$stmt = $conn->prepare("UPDATE product SET image=?, name=?, Price=?, Sale_Price=?, Quantity=?, Gender=?, Brand=?, Shape=?, Frame_Color=?, Frame_Size=?, Material=?, updated_at=? where id=?");
	$stmt->bind_param("ssdsiiiiiiisi", $image,
$name,
$Price,
$Sale_Price,
$Quantity,
$Gender,
$Brand,
$Shape,
$Frame_Color,
$Frame_Size,
$Material,
$updated_at,
$id);


	$stmt->execute();

	$stmt->close();
	$conn->close();
	header('location: product_edit4.php?product_id='.$id);
}
/*Delete Glasses Product*/
if(isset($_GET['delete_glasses_product'])) {
	$del_id = $_GET['delete_glasses_product'];
	
	$sql = "DELETE FROM product WHERE id=$del_id";
		if(mysqli_query($conn, $sql)){
	}
	
	$sql1 = "DELETE FROM customer_review WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql1)){
	}
	
	$sql2 = "DELETE FROM product_description WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql2)){
	}
	
	$sql3 = "DELETE FROM furthur_optical_advice WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql3)){
	}
	
	$sql4 = "DELETE FROM power WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql4)){
	}
	
	$sql5 = "DELETE FROM base_curve WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql5)){
	}
	
	$sql6 = "DELETE FROM diameter WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql6)){
	}
	
	$sql7 = "DELETE FROM cylinder WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql7)){
	}
	
	$sql8 = "DELETE FROM axis WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql8)){
	}
	
	$sql9 = "DELETE FROM color WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql9)){
	}
	
	$sql10 = "DELETE FROM quantity_of_boxes WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql10)){
	}
	
	$sql11 = "DELETE FROM number_of_packs WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql11)){
	}
	
	
}

//Glasses Size Description
if(isset($_POST['update_size_description'])) {
	
	
	
	$id = $_POST['prod_id'];
	$fm_height = $_POST['fm_height'];;
	$fm_lense_width = $_POST['fm_lense_width'];;
	$fm_lense_bt_width = $_POST['fm_lense_bt_width'];;
	$fm_stick_width = $_POST['fm_stick_width'];;
	$fm_width = $_POST['fm_width'];;

	// prepare and bind
	$stmt = $conn->prepare("UPDATE product SET fm_height=?, fm_lense_width=?, fm_lense_bt_width=?, fm_stick_width=?, fm_width=? where id=?");
	$stmt->bind_param("iiiiii", $fm_height,
$fm_lense_width,
$fm_lense_bt_width,
$fm_stick_width,
$fm_width,
$id);


	$stmt->execute();

	$stmt->close();
	$conn->close();
	header('location: product_view4.php?product_id='.$id);
}
/*Number Of Pack Glasses*/
if(isset($_POST['add_variant_glasses'])) {
	$id = "";
	$Product_id = $_POST['prod_id'];
	$Merge = $_POST['variant'];
	$Type = 'Glasses';
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
	
	// prepare and bind
	$stmt = $conn->prepare("insert into product_merge (id,Product_id,Merge,Type,active,created_at,updated_at) VALUES(?,?,?,?,?,?,?)");
	$stmt->bind_param("iiisiss", $id,$Product_id,$Merge,$Type,$active,$created_at,$updated_at);


	$stmt->execute();

	$stmt->close();
	$conn->close();
	header('location: product_view4.php?product_id='.$Product_id);
}
/*Glasses Variant Delete*/
if(isset($_POST['glasses_variant_delete'])) {
	$del_id = $_POST['delete_id'];
	$prod_id = $_POST['prod_id'];
	
	$sql = "DELETE FROM product_merge WHERE id=$del_id";
	if(mysqli_query($conn, $sql)){
	}
}

//Search Product
if(isset($_POST['search_btn4'])){ 
		$src = $_POST['search_text'];
	header("location: glasses.php?search=$src");
}
/*Add Gender*/
if(isset($_POST['add_gender'])) {
	
	$id = "";
	$Product_id = 1;
	$name = $_POST['name'];
	$type = 'Glasses';
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
		
		// prepare and bind
	$stmt = $conn->prepare("INSERT INTO gender (id, Product_id, Gender, Type, active, created_at, updated_at) VALUES(?, ?, ?, ?, ? , ?, ?)");
	$stmt->bind_param("iississ", $id, $Product_id,$name, $type, $active, $created_at, $updated_at);


	$stmt->execute();
}
/*Add Material*/
if(isset($_POST['add_material'])) {
	
	$id = "";
	$Product_id = 1;
	$name = $_POST['name'];
	$type = 'Glasses';
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
		
		// prepare and bind
	$stmt = $conn->prepare("INSERT INTO material (id, Product_id, Material, Type, active, created_at, updated_at) VALUES(?, ?, ?, ?, ? , ?, ?)");
	$stmt->bind_param("iississ", $id, $Product_id,$name, $type, $active, $created_at, $updated_at);


	$stmt->execute();
}
/*Add Frame Size*/
if(isset($_POST['add_frame_size'])) {
	
	$id = "";
	$Product_id = 1;
	$name = $_POST['name'];
	$type = 'Glasses';
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
		
		// prepare and bind
	$stmt = $conn->prepare("INSERT INTO frame_size (id, Product_id, Frame_Size, Type, active, created_at, updated_at) VALUES(?, ?, ?, ?, ? , ?, ?)");
	$stmt->bind_param("iississ", $id, $Product_id,$name, $type, $active, $created_at, $updated_at);


	$stmt->execute();
}
/*Add Brand*/
if(isset($_POST['add_brand'])) {
	
	$id = "";
	$Product_id = 1;
	$name = $_POST['name'];
	$type = 'Glasses';
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
		
	//Upload Image Start
	// File upload configuration 
    $targetDir = "../images/header/All Brands/"; 
    $allowTypes = array('jpg','JPG','png','PNG','jpeg','JPEG','gif','GIF'); 
     
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['files']['name']); 
    if(!empty($fileNames)){ 
        foreach($_FILES['files']['name'] as $key=>$val){ 
            // File upload path 
            $fileName = basename($_FILES['files']['name'][$key]); 
            $targetFilePath = $targetDir . $fileName; 
             
            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            if(in_array($fileType, $allowTypes)){ 
                // Upload file to server 
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                    // Image db insert sql 
                    $insertValuesSQL .=$fileName; 
                }else{ 
                    $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                } 
            }else{ 
                $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
            } 
        } 
         
     
    // Display status message 
    //echo $statusMsg; 
	}	
	$image = $insertValuesSQL;
	//Upload Image End
	
	
		// prepare and bind
	$stmt = $conn->prepare("INSERT INTO brand (id, Product_id, Brand, Type, active, created_at, updated_at, image_link) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("iississs", $id, $Product_id, $name, $type, $active, $created_at, $updated_at, $image);


	$stmt->execute();
}
/*Add Shape*/
if(isset($_POST['add_shape'])) {
	
	$id = "";
	$Product_id = 1;
	$name = $_POST['name'];
	$type = 'Glasses';
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
		
	//Upload Image Start
	// File upload configuration 
    $targetDir = "../images/header/Glasses/Frames/"; 
    $allowTypes = array('jpg','JPG','png','PNG','jpeg','JPEG','gif','GIF'); 
     
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['files']['name']); 
    if(!empty($fileNames)){ 
        foreach($_FILES['files']['name'] as $key=>$val){ 
            // File upload path 
            $fileName = basename($_FILES['files']['name'][$key]); 
            $targetFilePath = $targetDir . $fileName; 
             
            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            if(in_array($fileType, $allowTypes)){ 
                // Upload file to server 
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                    // Image db insert sql 
                    $insertValuesSQL .=$fileName; 
                }else{ 
                    $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                } 
            }else{ 
                $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
            } 
        } 
         
     
    // Display status message 
    //echo $statusMsg; 
	}	
	$image = $insertValuesSQL;
	//Upload Image End
	
	
		// prepare and bind
	$stmt = $conn->prepare("INSERT INTO shape (id, Product_id, Shape, image_link, Type, active, created_at, updated_at) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("iisssiss", $id, $Product_id, $name, $image, $type, $active, $created_at, $updated_at);


	$stmt->execute();
}
/*Add Frame Color*/
if(isset($_POST['add_frame_color'])) {
	
	$id = "";
	$Product_id = 1;
	$name = $_POST['name'];
	$type = 'Glasses';
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
		
	//Upload Image Start
	// File upload configuration 
    $targetDir = "../images/Shop/glasses/"; 
    $allowTypes = array('jpg','JPG','png','PNG','jpeg','JPEG','gif','GIF'); 
     
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['files']['name']); 
    if(!empty($fileNames)){ 
        foreach($_FILES['files']['name'] as $key=>$val){ 
            // File upload path 
            $fileName = basename($_FILES['files']['name'][$key]); 
            $targetFilePath = $targetDir . $fileName; 
             
            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            if(in_array($fileType, $allowTypes)){ 
                // Upload file to server 
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                    // Image db insert sql 
                    $insertValuesSQL .=$fileName; 
                }else{ 
                    $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                } 
            }else{ 
                $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
            } 
        } 
         
     
    // Display status message 
    //echo $statusMsg; 
	}	
	$image = $insertValuesSQL;
	//Upload Image End
	
	
		// prepare and bind
	$stmt = $conn->prepare("INSERT INTO frame_color (id, Product_id, Frame_Color, image_link, Type, active, created_at, updated_at) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("iisssiss", $id, $Product_id, $name, $image, $type, $active, $created_at, $updated_at);


	$stmt->execute();
}


/*Delete Frame Size*/
if(isset($_GET['delete_glasses_frame_size_id'])) {
	$del_id = $_GET['delete_glasses_frame_size_id'];
	
	$sql = "DELETE FROM frame_size WHERE id=$del_id";
		if(mysqli_query($conn, $sql)){
	}
}
/*Delete Material*/
if(isset($_GET['delete_glasses_material_id'])) {
	$del_id = $_GET['delete_glasses_material_id'];
	
	$sql = "DELETE FROM material WHERE id=$del_id";
		if(mysqli_query($conn, $sql)){
	}
}
/*Delete Gender*/
if(isset($_GET['delete_glasses_gender_id'])) {
	$del_id = $_GET['delete_glasses_gender_id'];
	
	$sql = "DELETE FROM gender WHERE id=$del_id";
		if(mysqli_query($conn, $sql)){
	}
}
/*Delete Brand*/
if(isset($_GET['delete_glasses_brand_id'])) {
	$del_id = $_GET['delete_glasses_brand_id'];
	
	//File Delete
		$file = $_GET['image_name'];
	echo $file;
	unlink($_SERVER['DOCUMENT_ROOT'] ."/feelgoodcontacts/images/header/All Brands/".$file);
	
	$sql = "DELETE FROM brand WHERE id=$del_id";
		if(mysqli_query($conn, $sql)){
	}
}
/*Delete Shape*/
if(isset($_GET['delete_glasses_shape_id'])) {
	$del_id = $_GET['delete_glasses_shape_id'];
	
	//File Delete
		$file = $_GET['image_name'];
	echo $file;
	unlink($_SERVER['DOCUMENT_ROOT'] ."/feelgoodcontacts/images/header/Glasses/Frames/".$file);
	
	$sql = "DELETE FROM shape WHERE id=$del_id";
		if(mysqli_query($conn, $sql)){
	}
}
/*Delete Frame Color*/
if(isset($_GET['delete_glasses_frame_color_id'])) {
	$del_id = $_GET['delete_glasses_frame_color_id'];
	
	//File Delete
		$file = $_GET['image_name'];
	echo $file;
	unlink($_SERVER['DOCUMENT_ROOT'] ."/feelgoodcontacts/images/Shop/glasses/".$file);
	
	$sql = "DELETE FROM frame_color WHERE id=$del_id";
		if(mysqli_query($conn, $sql)){
	}
}



/* Eye Care Start*/
/* Eye Care Search */
if(isset($_POST['search_btn3'])){ 
		$src = $_POST['search_text'];
	header("location: eye_care.php?search=$src");
}
/*Add Eye Care*/
if(isset($_POST['add_eye_care'])) {
	
	$id = "";
	$Product_id = 1;
	$name = $_POST['name'];
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
		
		// prepare and bind
	$stmt = $conn->prepare("INSERT INTO eye_care (id, Product_id, Eye_Care, active, created_at, updated_at) VALUES(?, ?, ?, ?,  ?, ?)");
	$stmt->bind_param("iisiss", $id, $Product_id,$name, $active, $created_at, $updated_at);


	$stmt->execute();
}
/*Add Popular Eye Care*/
if(isset($_POST['add_popular_eye_care'])) {
	
	$id = "";
	$Product_id = 1;
	$name = $_POST['name'];
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
		
		// prepare and bind
	$stmt = $conn->prepare("INSERT INTO popular_eye_care (id, Product_id, Popular_Eye_Care, active, created_at, updated_at) VALUES(?, ?, ?, ?,  ?, ?)");
	$stmt->bind_param("iisiss", $id, $Product_id,$name, $active, $created_at, $updated_at);


	$stmt->execute();
}
/*Delete Eye Care*/
if(isset($_GET['delete_eye_care_type_id'])) {
	$del_id = $_GET['delete_eye_care_type_id'];
	
	$sql = "DELETE FROM eye_care WHERE id=$del_id";
		if(mysqli_query($conn, $sql)){
	}
}
/*Delete Popular Eye Care*/
if(isset($_GET['delete_popular_eye_care_id'])) {
	$del_id = $_GET['delete_popular_eye_care_id'];
	
	$sql = "DELETE FROM popular_eye_care WHERE id=$del_id";
		if(mysqli_query($conn, $sql)){
	}
}

/*Create Solution Product*/
if(isset($_POST['insert_eye_care'])) {
	
	global $customer_id_count;
	global $customer_id_number;
	
	//Order Number START
	$contact_order_number_fetch = mysqli_query($conn,"SELECT * FROM order_numbers where name='product'");
	while($order_number_fetch=mysqli_fetch_array($contact_order_number_fetch,MYSQLI_ASSOC)) {
		$customer_id_number = $order_number_fetch['number'];
	}
	$customer_id_count = 1;
	//trim And finalize the Emp ID
			$customer_id_trim = trim($customer_id_number,"PR");
			$customer_id_number_increament = (int)$customer_id_trim + $customer_id_count;//coun;
			$customer_id_concatinate = "PR".$customer_id_number_increament;
	$stmt2 = $conn->prepare("UPDATE order_numbers SET number=? where name='product'");
	$stmt2->bind_param("s", $customer_id_concatinate);
	$stmt2->execute();
	$stmt2->close();
	//Order Number END
	
	
	//Upload Image Start
	// File upload configuration 
    $targetDir = "../images/Products/"; 
    $allowTypes = array('jpg','JPG','png','PNG','jpeg','JPEG','gif','GIF'); 
     
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['files']['name']); 
    if(!empty($fileNames)){ 
        foreach($_FILES['files']['name'] as $key=>$val){ 
            // File upload path 
            $fileName = basename($_FILES['files']['name'][$key]); 
            $targetFilePath = $targetDir . $fileName; 
             
            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            if(in_array($fileType, $allowTypes)){ 
                // Upload file to server 
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                    // Image db insert sql 
                    $insertValuesSQL .=$fileName; 
                }else{ 
                    $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                } 
            }else{ 
                $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
            } 
        } 
         
     
    // Display status message 
    //echo $statusMsg; 
} 
	//Upload Image End
	
	$id = "";
	$order_number = $customer_id_concatinate;
	$image = $insertValuesSQL;
	$name = $_POST['name'];
	$Price = $_POST['price'];
	$Sale_Price = $_POST['sale_price'];
	$Quantity = $_POST['quantity'];
	$Power_Range = 0;
	$Base_Curve = 0;
	$Diameter = 0;
	$Lens_Material = 0;
	$Water_Content = 0;
	$Oxygen_Permeability = 0;
	$Customer_Reviews = 0;
	$Product_Qty_Description = $_POST['product_qty_description'];
	$product_lense_description = 0;
	$Pack = 0;
	$Product_Description = 0;
	$Product_Detail_Advice  = 0;
	$Further_Optical_Advice = 0;
	$Brands_of_Contact_Lenses = 0;
	$Types_of_Contact_Lenses = 0;
	$Shop_by_Manufacturer = 0;
	$Types_of_Solutions = 0;
	$Popular_Solutions = 0;
	$Eye_Care = $_POST['eye_care'];
	$Popular_Eye_Care = $_POST['popular_eye_care'];
	$Wearing_Type = 0;
	$Optician_Brands = 0;
	$Colours = 0;
	$Gender = 0;
	$Brand = 0;
	$Shape = 0;
	$Frame_Color = 0;
	$LENS_SIZE = 0;
	$LENS_COLOUR = 0;
	$Frame_Size = 0;
	$Material = 0;
	$fm_height = 0;
	$fm_lense_width = 0;
	$fm_lense_bt_width = 0;
	$fm_stick_width = 0;
	$fm_width = 0;
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");

	// prepare and bind
	$stmt = $conn->prepare("INSERT INTO product (id,
order_number,
image,
name,
Price,
Sale_Price,
Quantity,
Power_Range,
Base_Curve,
Diameter,
Lens_Material,
Water_Content,
Oxygen_Permeability,
Customer_Reviews,
Product_Qty_Description,
product_lense_description,
Pack,
Product_Description ,
Product_Detail_Advice ,
Further_Optical_Advice,
Brands_of_Contact_Lenses,
Types_of_Contact_Lenses,
Shop_by_Manufacturer,
Types_of_Solutions,
Popular_Solutions,
Eye_Care,
Popular_Eye_Care,
Wearing_Type,
Optician_Brands,
Colours,
Gender,
Brand,
Shape,
Frame_Color,
LENS_SIZE,
LENS_COLOUR,
Frame_Size,
Material,
fm_height,
fm_lense_width,
fm_lense_bt_width,
fm_stick_width,
fm_width,
active,
created_at,
updated_at) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("isssdsissssssisiiiiiiiiiiiiiiiiiiiiiiiiiiiiiss", $id,
$order_number,
$image,
$name,
$Price,
$Sale_Price,
$Quantity,
$Power_Range,
$Base_Curve,
$Diameter,
$Lens_Material,
$Water_Content,
$Oxygen_Permeability,
$Customer_Reviews,
$Product_Qty_Description,
$product_lense_description,
$Pack,
$Product_Description ,
$Product_Detail_Advice ,
$Further_Optical_Advice,
$Brands_of_Contact_Lenses,
$Types_of_Contact_Lenses,
$Shop_by_Manufacturer,
$Types_of_Solutions,
$Popular_Solutions,
$Eye_Care,
$Popular_Eye_Care,
$Wearing_Type,
$Optician_Brands,
$Colours,
$Gender,
$Brand,
$Shape,
$Frame_Color,
$LENS_SIZE,
$LENS_COLOUR,
$Frame_Size,
$Material,
$fm_height,
$fm_lense_width,
$fm_lense_bt_width,
$fm_stick_width,
$fm_width,
$active,
$created_at,
$updated_at);


	$stmt->execute();

	$stmt->close();
	$conn->close();
}
/*Delete Eye Care Product*/
if(isset($_GET['delete_eye_care_product'])) {
	$del_id = $_GET['delete_eye_care_product'];
	
	$sql = "DELETE FROM product WHERE id=$del_id";
		if(mysqli_query($conn, $sql)){
	}
	
	$sql1 = "DELETE FROM customer_review WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql1)){
	}
	
	$sql2 = "DELETE FROM product_description WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql2)){
	}
	
	$sql3 = "DELETE FROM furthur_optical_advice WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql3)){
	}
	
	$sql4 = "DELETE FROM power WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql4)){
	}
	
	$sql5 = "DELETE FROM base_curve WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql5)){
	}
	
	$sql6 = "DELETE FROM diameter WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql6)){
	}
	
	$sql7 = "DELETE FROM cylinder WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql7)){
	}
	
	$sql8 = "DELETE FROM axis WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql8)){
	}
	
	$sql9 = "DELETE FROM color WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql9)){
	}
	
	$sql10 = "DELETE FROM quantity_of_boxes WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql10)){
	}
	
	$sql11 = "DELETE FROM number_of_packs WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql11)){
	}
	
	
}
/*Edit Eye Care Product*/
if(isset($_POST['edit_eye_care'])) {
	if(isset($_POST['img_check'])){
	//File Delete
		$file = $_POST['image_delete_name'];
	unlink($_SERVER['DOCUMENT_ROOT'] ."/feelgoodcontacts/images/Products/".$file);
		
	//Upload Image Start
	// File upload configuration 
    $targetDir = "../images/Products/"; 
    $allowTypes = array('jpg','JPG','png','PNG','jpeg','JPEG','gif','GIF'); 
     
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['files']['name']); 
    if(!empty($fileNames)){ 
        foreach($_FILES['files']['name'] as $key=>$val){ 
            // File upload path 
            $fileName = basename($_FILES['files']['name'][$key]); 
            $targetFilePath = $targetDir . $fileName; 
             
            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            if(in_array($fileType, $allowTypes)){ 
                // Upload file to server 
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                    // Image db insert sql 
                    $insertValuesSQL .=$fileName; 
                }else{ 
                    $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                } 
            }else{ 
                $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
            } 
        } 
         
     
    // Display status message 
    //echo $statusMsg; 
	}	
	$image = $insertValuesSQL;
	//Upload Image End
}
	else {
		$image = $_POST['image_delete_name'];
	}
	
	$id = $_POST['prod_id'];
	$order_number = $customer_id_concatinate;
	$name = $_POST['name'];
	$Price = $_POST['price'];
	$Sale_Price = $_POST['sale_price'];
	$Quantity = $_POST['quantity'];
	$Power_Range = 0;
	$Base_Curve = 0;
	$Diameter = 0;
	$Lens_Material = 0;
	$Water_Content = 0;
	$Oxygen_Permeability = 0;
	$Customer_Reviews = 0;
	$Product_Qty_Description = $_POST['product_qty_description'];
	$product_lense_description = 0;
	$Pack = 0;
	$Product_Description = 0;
	$Product_Detail_Advice  = 0;
	$Further_Optical_Advice = 0;
	$Brands_of_Contact_Lenses = 0;
	$Types_of_Contact_Lenses = 0;
	$Shop_by_Manufacturer = 0;
	$Types_of_Solutions = 0;
	$Popular_Solutions = 0;
	$Eye_Care = $_POST['eye_care'];
	$Popular_Eye_Care = $_POST['popular_eye_care'];
	$Wearing_Type = 0;
	$Optician_Brands = 0;
	$Colours = 0;
	$Gender = 0;
	$Brand = 0;
	$Shape = 0;
	$Frame_Color = 0;
	$LENS_SIZE = 0;
	$LENS_COLOUR = 0;
	$Frame_Size = 0;
	$Material = 0;
	$fm_height = 0;
	$fm_lense_width = 0;
	$fm_lense_bt_width = 0;
	$fm_stick_width = 0;
	$fm_width = 0;
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");

	// prepare and bind
	$stmt = $conn->prepare("UPDATE product SET image=?, name=?, Price=?, Sale_Price=?, Quantity=?, Product_Qty_Description=?, Eye_Care=?, Popular_Eye_Care=?, updated_at=? where id=?");
	$stmt->bind_param("ssdsisiisi", $image,
$name,
$Price,
$Sale_Price,
$Quantity,
$Product_Qty_Description,
$Eye_Care,
$Popular_Eye_Care,
$updated_at,
$id);


	$stmt->execute();

	$stmt->close();
	$conn->close();
	header('location: product_edit3.php?product_id='.$id);
}

/* Solutions Start*/
/* Solutions Search */
if(isset($_POST['search_btn2'])){ 
		$src = $_POST['search_text'];
	header("location: solutions.php?search=$src");
}
/*Add Types Of Solutions*/
if(isset($_POST['add_solution_type'])) {
	
	$id = "";
	$Product_id = 1;
	$name = $_POST['name'];
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
		
		// prepare and bind
	$stmt = $conn->prepare("INSERT INTO types_of_solutions (id, Product_id, Solution_Type, active, created_at, updated_at) VALUES(?, ?, ?, ?,  ?, ?)");
	$stmt->bind_param("iisiss", $id, $Product_id,$name, $active, $created_at, $updated_at);


	$stmt->execute();
}
/*Add Popular Solutions*/
if(isset($_POST['add_popular_solution'])) {
	
	$id = "";
	$Product_id = 1;
	$name = $_POST['name'];
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
		
		// prepare and bind
	$stmt = $conn->prepare("INSERT INTO popular_solutions (id, Product_id, Popular_Solutions, active, created_at, updated_at) VALUES(?, ?, ?, ?,  ?, ?)");
	$stmt->bind_param("iisiss", $id, $Product_id,$name, $active, $created_at, $updated_at);


	$stmt->execute();
}

/*Delete Types Of Solutions*/
if(isset($_GET['delete_solution_type_id'])) {
	$del_id = $_GET['delete_solution_type_id'];
	
	$sql = "DELETE FROM types_of_solutions WHERE id=$del_id";
		if(mysqli_query($conn, $sql)){
	}
}

/*Delete Popular Solutions*/
if(isset($_GET['delete_popular_solution_id'])) {
	$del_id = $_GET['delete_popular_solution_id'];
	
	$sql = "DELETE FROM popular_solutions WHERE id=$del_id";
		if(mysqli_query($conn, $sql)){
	}
}
/*Create Solution Product*/
if(isset($_POST['insert_solution'])) {
	
	global $customer_id_count;
	global $customer_id_number;
	
	//Order Number START
	$contact_order_number_fetch = mysqli_query($conn,"SELECT * FROM order_numbers where name='product'");
	while($order_number_fetch=mysqli_fetch_array($contact_order_number_fetch,MYSQLI_ASSOC)) {
		$customer_id_number = $order_number_fetch['number'];
	}
	$customer_id_count = 1;
	//trim And finalize the Emp ID
			$customer_id_trim = trim($customer_id_number,"PR");
			$customer_id_number_increament = (int)$customer_id_trim + $customer_id_count;//coun;
			$customer_id_concatinate = "PR".$customer_id_number_increament;
	$stmt2 = $conn->prepare("UPDATE order_numbers SET number=? where name='product'");
	$stmt2->bind_param("s", $customer_id_concatinate);
	$stmt2->execute();
	$stmt2->close();
	//Order Number END
	
	
	//Upload Image Start
	// File upload configuration 
    $targetDir = "../images/Products/"; 
    $allowTypes = array('jpg','JPG','png','PNG','jpeg','JPEG','gif','GIF'); 
     
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['files']['name']); 
    if(!empty($fileNames)){ 
        foreach($_FILES['files']['name'] as $key=>$val){ 
            // File upload path 
            $fileName = basename($_FILES['files']['name'][$key]); 
            $targetFilePath = $targetDir . $fileName; 
             
            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            if(in_array($fileType, $allowTypes)){ 
                // Upload file to server 
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                    // Image db insert sql 
                    $insertValuesSQL .=$fileName; 
                }else{ 
                    $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                } 
            }else{ 
                $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
            } 
        } 
         
     
    // Display status message 
    //echo $statusMsg; 
} 
	//Upload Image End
	
	$id = "";
	$order_number = $customer_id_concatinate;
	$image = $insertValuesSQL;
	$name = $_POST['name'];
	$Price = $_POST['price'];
	$Sale_Price = $_POST['sale_price'];
	$Quantity = $_POST['quantity'];
	$Power_Range = 0;
	$Base_Curve = 0;
	$Diameter = 0;
	$Lens_Material = 0;
	$Water_Content = 0;
	$Oxygen_Permeability = 0;
	$Customer_Reviews = 0;
	$Product_Qty_Description = $_POST['product_qty_description'];
	$product_lense_description = 0;
	$Pack = 0;
	$Product_Description = 0;
	$Product_Detail_Advice  = 0;
	$Further_Optical_Advice = 0;
	$Brands_of_Contact_Lenses = 0;
	$Types_of_Contact_Lenses = 0;
	$Shop_by_Manufacturer = 0;
	$Types_of_Solutions = $_POST['types_of_solutions'];
	$Popular_Solutions = $_POST['popular_solutions'];
	$Eye_Care = 0;
	$Popular_Eye_Care = 0;
	$Wearing_Type = 0;
	$Optician_Brands = 0;
	$Colours = 0;
	$Gender = 0;
	$Brand = 0;
	$Shape = 0;
	$Frame_Color = 0;
	$LENS_SIZE = 0;
	$LENS_COLOUR = 0;
	$Frame_Size = 0;
	$Material = 0;
	$fm_height = 0;
	$fm_lense_width = 0;
	$fm_lense_bt_width = 0;
	$fm_stick_width = 0;
	$fm_width = 0;
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");

	// prepare and bind
	$stmt = $conn->prepare("INSERT INTO product (id,
order_number,
image,
name,
Price,
Sale_Price,
Quantity,
Power_Range,
Base_Curve,
Diameter,
Lens_Material,
Water_Content,
Oxygen_Permeability,
Customer_Reviews,
Product_Qty_Description,
product_lense_description,
Pack,
Product_Description ,
Product_Detail_Advice ,
Further_Optical_Advice,
Brands_of_Contact_Lenses,
Types_of_Contact_Lenses,
Shop_by_Manufacturer,
Types_of_Solutions,
Popular_Solutions,
Eye_Care,
Popular_Eye_Care,
Wearing_Type,
Optician_Brands,
Colours,
Gender,
Brand,
Shape,
Frame_Color,
LENS_SIZE,
LENS_COLOUR,
Frame_Size,
Material,
fm_height,
fm_lense_width,
fm_lense_bt_width,
fm_stick_width,
fm_width,
active,
created_at,
updated_at) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("isssdsissssssisiiiiiiiiiiiiiiiiiiiiiiiiiiiiiss", $id,
$order_number,
$image,
$name,
$Price,
$Sale_Price,
$Quantity,
$Power_Range,
$Base_Curve,
$Diameter,
$Lens_Material,
$Water_Content,
$Oxygen_Permeability,
$Customer_Reviews,
$Product_Qty_Description,
$product_lense_description,
$Pack,
$Product_Description ,
$Product_Detail_Advice ,
$Further_Optical_Advice,
$Brands_of_Contact_Lenses,
$Types_of_Contact_Lenses,
$Shop_by_Manufacturer,
$Types_of_Solutions,
$Popular_Solutions,
$Eye_Care,
$Popular_Eye_Care,
$Wearing_Type,
$Optician_Brands,
$Colours,
$Gender,
$Brand,
$Shape,
$Frame_Color,
$LENS_SIZE,
$LENS_COLOUR,
$Frame_Size,
$Material,
$fm_height,
$fm_lense_width,
$fm_lense_bt_width,
$fm_stick_width,
$fm_width,
$active,
$created_at,
$updated_at);


	$stmt->execute();

	$stmt->close();
	$conn->close();
}
/*Delete Solution Product*/
if(isset($_GET['delete_solutions_product'])) {
	$del_id = $_GET['delete_solutions_product'];
	
	$sql = "DELETE FROM product WHERE id=$del_id";
		if(mysqli_query($conn, $sql)){
	}
	
	$sql1 = "DELETE FROM customer_review WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql1)){
	}
	
	$sql2 = "DELETE FROM product_description WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql2)){
	}
	
	$sql3 = "DELETE FROM furthur_optical_advice WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql3)){
	}
	
	$sql4 = "DELETE FROM power WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql4)){
	}
	
	$sql5 = "DELETE FROM base_curve WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql5)){
	}
	
	$sql6 = "DELETE FROM diameter WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql6)){
	}
	
	$sql7 = "DELETE FROM cylinder WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql7)){
	}
	
	$sql8 = "DELETE FROM axis WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql8)){
	}
	
	$sql9 = "DELETE FROM color WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql9)){
	}
	
	$sql10 = "DELETE FROM quantity_of_boxes WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql10)){
	}
	
	$sql11 = "DELETE FROM number_of_packs WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql11)){
	}
	
	
}
/*Edit Solution Product*/
if(isset($_POST['edit_solution'])) {
	
	if(isset($_POST['img_check'])) {
	//File Delete
		$file = $_POST['image_delete_name'];
	unlink($_SERVER['DOCUMENT_ROOT'] ."/feelgoodcontacts/images/Products/".$file);
		
	//Upload Image Start
	// File upload configuration 
    $targetDir = "../images/Products/"; 
    $allowTypes = array('jpg','JPG','png','PNG','jpeg','JPEG','gif','GIF'); 
     
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['files']['name']); 
    if(!empty($fileNames)){ 
        foreach($_FILES['files']['name'] as $key=>$val){ 
            // File upload path 
            $fileName = basename($_FILES['files']['name'][$key]); 
            $targetFilePath = $targetDir . $fileName; 
             
            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            if(in_array($fileType, $allowTypes)){ 
                // Upload file to server 
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                    // Image db insert sql 
                    $insertValuesSQL .=$fileName; 
                }else{ 
                    $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                } 
            }else{ 
                $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
            } 
        } 
         
     
    // Display status message 
    //echo $statusMsg; 
	}	
	$image = $insertValuesSQL;
	//Upload Image End
}
	else {
		$image = $_POST['image_delete_name'];;
		
	}
	
	$id = $_POST['prod_id'];
	$order_number = $customer_id_concatinate;
	$name = $_POST['name'];
	$Price = $_POST['price'];
	$Sale_Price = $_POST['sale_price'];
	$Quantity = $_POST['quantity'];
	$Power_Range = 0;
	$Base_Curve = 0;
	$Diameter = 0;
	$Lens_Material = 0;
	$Water_Content = 0;
	$Oxygen_Permeability = 0;
	$Customer_Reviews = 0;
	$Product_Qty_Description = $_POST['product_qty_description'];
	$product_lense_description = 0;
	$Pack = 0;
	$Product_Description = 0;
	$Product_Detail_Advice  = 0;
	$Further_Optical_Advice = 0;
	$Brands_of_Contact_Lenses = 0;
	$Types_of_Contact_Lenses = 0;
	$Shop_by_Manufacturer = 0;
	$Types_of_Solutions = $_POST['types_of_solutions'];
	$Popular_Solutions = $_POST['popular_solutions'];
	$Eye_Care = 0;
	$Popular_Eye_Care = 0;
	$Wearing_Type = 0;
	$Optician_Brands = 0;
	$Colours = 0;
	$Gender = 0;
	$Brand = 0;
	$Shape = 0;
	$Frame_Color = 0;
	$LENS_SIZE = 0;
	$LENS_COLOUR = 0;
	$Frame_Size = 0;
	$Material = 0;
	$fm_height = 0;
	$fm_lense_width = 0;
	$fm_lense_bt_width = 0;
	$fm_stick_width = 0;
	$fm_width = 0;
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");

	// prepare and bind
	$stmt = $conn->prepare("UPDATE product SET image=?, name=?, Price=?, Sale_Price=?, Quantity=?,  Product_Qty_Description=?, Types_of_Solutions=?, Popular_Solutions=?, updated_at=? where id=?");
	$stmt->bind_param("ssdsisiisi", $image,
$name,
$Price,
$Sale_Price,
$Quantity,
$Product_Qty_Description,
$Types_of_Solutions,
$Popular_Solutions,
$updated_at,
$id);


	$stmt->execute();

	$stmt->close();
	$conn->close();
	header('location: product_edit2.php?product_id='.$id);
}
/*Number Of Pack Solutions*/
if(isset($_POST['number_of_pack_range_btn_solution'])) {
	$id = $_POST['prod_id'];
	$Pack = $_POST['number_of_pack'];
	// prepare and bind
	$stmt = $conn->prepare("UPDATE product SET Pack=? where id=?");
	$stmt->bind_param("ii", $Pack,$id);


	$stmt->execute();

	$stmt->close();
	$conn->close();
	header('location: product_view2.php?product_id='.$id);
}

/*CONTACT LENSE START*/
/*Delete Brand Of Contact Lenses*/
if(isset($_GET['delete_brand_id'])) {
	$del_id = $_GET['delete_brand_id'];
	
	$sql = "DELETE FROM brands_of_contact_lenses WHERE id=$del_id";
		if(mysqli_query($conn, $sql)){
	}
}
/*Delete Types Of Contact Lenses*/
if(isset($_GET['delete_type_id'])) {
	$del_id = $_GET['delete_type_id'];
	
	$sql = "DELETE FROM types_of_contact_lenses WHERE id=$del_id";
		if(mysqli_query($conn, $sql)){
	}
}
/*Delete Manufacturer*/
if(isset($_GET['delete_manufacturer_id'])) {
	$del_id = $_GET['delete_manufacturer_id'];
	
	$sql = "DELETE FROM shop_by_manufacturer WHERE id=$del_id";
		if(mysqli_query($conn, $sql)){
	}
}
/*Delete Optician Brands*/
if(isset($_GET['delete_optician_id'])) {
	$del_id = $_GET['delete_optician_id'];
	
	$sql = "DELETE FROM optician_brands WHERE id=$del_id";
		if(mysqli_query($conn, $sql)){
	}
}
/*Delete Colors Of Contact Lenses*/
if(isset($_GET['delete_color_id'])) {
	$del_id = $_GET['delete_color_id'];
	
	//File Delete
		$file = $_GET['image_name'];
	echo $file;
	unlink($_SERVER['DOCUMENT_ROOT'] ."/feelgoodcontacts/images/header/Color/".$file);
	
	$sql = "DELETE FROM contact_lense_color WHERE id=$del_id";
		if(mysqli_query($conn, $sql)){
	}
}

/*Add Colors*/
if(isset($_POST['insert_contact_lense_color'])) {
	
	$id = "";
	$Product_id = 1;
	$name = $_POST['name'];
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
		
	//Upload Image Start
	// File upload configuration 
    $targetDir = "../images/header/Color/"; 
    $allowTypes = array('jpg','JPG','png','PNG','jpeg','JPEG','gif','GIF'); 
     
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['files']['name']); 
    if(!empty($fileNames)){ 
        foreach($_FILES['files']['name'] as $key=>$val){ 
            // File upload path 
            $fileName = basename($_FILES['files']['name'][$key]); 
            $targetFilePath = $targetDir . $fileName; 
             
            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            if(in_array($fileType, $allowTypes)){ 
                // Upload file to server 
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                    // Image db insert sql 
                    $insertValuesSQL .=$fileName; 
                }else{ 
                    $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                } 
            }else{ 
                $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
            } 
        } 
         
     
    // Display status message 
    //echo $statusMsg; 
	}	
	$image = $insertValuesSQL;
	//Upload Image End
	
	
		// prepare and bind
	$stmt = $conn->prepare("INSERT INTO contact_lense_color (id, name, image, active, created_at, updated_at) VALUES(?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("ississ", $id, $name,$image, $active, $created_at, $updated_at);


	$stmt->execute();
}
/*Add Optician Brands*/
if(isset($_POST['add_optician_brand'])) {
	
	$id = "";
	$Product_id = 1;
	$name = $_POST['name'];
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
		
		// prepare and bind
	$stmt = $conn->prepare("INSERT INTO optician_brands (id, Product_id, Optician_Brands, active, created_at, updated_at) VALUES(?, ?, ?, ?,  ?, ?)");
	$stmt->bind_param("iisiss", $id, $Product_id,$name, $active, $created_at, $updated_at);


	$stmt->execute();
}
/*Add Shop By Manufacturer*/
if(isset($_POST['add_shop_by_manufacturers'])) {
	
	$id = "";
	$Product_id = 1;
	$name = $_POST['name'];
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
		
		// prepare and bind
	$stmt = $conn->prepare("INSERT INTO shop_by_manufacturer (id, Product_id, Manufacturer_Name, active, created_at, updated_at) VALUES(?, ?, ?, ?,  ?, ?)");
	$stmt->bind_param("iisiss", $id, $Product_id,$name, $active, $created_at, $updated_at);


	$stmt->execute();
}
/*Add Types Of Contact Lenses*/
if(isset($_POST['add_types_of_contact_lense'])) {
	
	$id = "";
	$Product_id = 1;
	$name = $_POST['name'];
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
		
		// prepare and bind
	$stmt = $conn->prepare("INSERT INTO types_of_contact_lenses (id, Product_id, Contact_Lense_Type, active, created_at, updated_at) VALUES(?, ?, ?, ?,  ?, ?)");
	$stmt->bind_param("iisiss", $id, $Product_id,$name, $active, $created_at, $updated_at);


	$stmt->execute();
}
/*Add Brand Of Contact Lenses*/
if(isset($_POST['add_brand_of_contact_lense'])) {
	
	$id = "";
	$Product_id = 1;
	$name = $_POST['name'];
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
		
		// prepare and bind
	$stmt = $conn->prepare("INSERT INTO brands_of_contact_lenses (id, Product_id, Brands_Name, active, created_at, updated_at) VALUES(?, ?, ?, ?,  ?, ?)");
	$stmt->bind_param("iisiss", $id, $Product_id,$name, $active, $created_at, $updated_at);


	$stmt->execute();
}

/*Delete Contact Lense Product*/
if(isset($_GET['delete_contact_lenses_product'])) {
	$del_id = $_GET['delete_contact_lenses_product'];
	
	$sql = "DELETE FROM product WHERE id=$del_id";
		if(mysqli_query($conn, $sql)){
	}
	
	$sql1 = "DELETE FROM customer_review WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql1)){
	}
	
	$sql2 = "DELETE FROM product_description WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql2)){
	}
	
	$sql3 = "DELETE FROM furthur_optical_advice WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql3)){
	}
	
	$sql4 = "DELETE FROM power WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql4)){
	}
	
	$sql5 = "DELETE FROM base_curve WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql5)){
	}
	
	$sql6 = "DELETE FROM diameter WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql6)){
	}
	
	$sql7 = "DELETE FROM cylinder WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql7)){
	}
	
	$sql8 = "DELETE FROM axis WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql8)){
	}
	
	$sql9 = "DELETE FROM color WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql9)){
	}
	
	$sql10 = "DELETE FROM quantity_of_boxes WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql10)){
	}
	
	$sql11 = "DELETE FROM number_of_packs WHERE Product_id=$del_id";
		if(mysqli_query($conn, $sql11)){
	}
	
	
}
/*Edit Contact Lense Product*/
if(isset($_POST['edit_contact_lense'])) {
	if(isset($_POST['img_check'])){
	//File Delete
		$file = $_POST['image_delete_name'];
	unlink($_SERVER['DOCUMENT_ROOT'] ."/feelgoodcontacts/images/Products/".$file);
		
	//Upload Image Start
	// File upload configuration 
    $targetDir = "../images/Products/"; 
    $allowTypes = array('jpg','JPG','png','PNG','jpeg','JPEG','gif','GIF'); 
     
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['files']['name']); 
    if(!empty($fileNames)){ 
        foreach($_FILES['files']['name'] as $key=>$val){ 
            // File upload path 
            $fileName = basename($_FILES['files']['name'][$key]); 
            $targetFilePath = $targetDir . $fileName; 
             
            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            if(in_array($fileType, $allowTypes)){ 
                // Upload file to server 
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                    // Image db insert sql 
                    $insertValuesSQL .=$fileName; 
                }else{ 
                    $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                } 
            }else{ 
                $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
            } 
        } 
         
     
    // Display status message 
    //echo $statusMsg; 
	}	
	$image = $insertValuesSQL;
	//Upload Image End
}
	else {
		$image = $_POST['image_delete_name'];
	}
	
	$id = $_POST['prod_id'];
	$order_number = "";
	$name = $_POST['name'];
	$Price = $_POST['price'];
	$Sale_Price = $_POST['sale_price'];
	$Quantity = $_POST['quantity'];
	$Power_Range = $_POST['power_range'];
	$Base_Curve = $_POST['base_curve'];
	$Diameter = $_POST['diameter'];
	$Lens_Material = $_POST['lens_material'];
	$Water_Content = $_POST['water_content'];
	$Oxygen_Permeability = $_POST['oxygen_permeability'];
	$Customer_Reviews = 0;
	$Product_Qty_Description = $_POST['product_qty_description'];
	$product_lense_description = $_POST['product_lense_description'];
	$Pack = 0;
	$Product_Description = 0;
	$Product_Detail_Advice  = 1;
	$Further_Optical_Advice = 0;
	$Brands_of_Contact_Lenses = $_POST['brands_of_contact_lense'];
	$Types_of_Contact_Lenses = $_POST['types_of_contact_lense'];
	$Shop_by_Manufacturer = $_POST['shop_by_manufacturer'];
	$Types_of_Solutions = 0;
	$Popular_Solutions = 0;
	$Eye_Care = 0;
	$Popular_Eye_Care = 0;
	$Wearing_Type = 0;
	$Optician_Brands = $_POST['optician_brands'];
	$Colours = 0;
	$Gender = 0;
	$Brand = 0;
	$Shape = 0;
	$Frame_Color = 0;
	$LENS_SIZE = 0;
	$LENS_COLOUR = 0;
	$Frame_Size = 0;
	$Material = 0;
	$fm_height = 0;
	$fm_lense_width = 0;
	$fm_lense_bt_width = 0;
	$fm_stick_width = 0;
	$fm_width = 0;
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");

	// prepare and bind
	$stmt = $conn->prepare("UPDATE product SET image=?, name=?, Price=?, Sale_Price=?, Quantity=?, Power_Range=?, Base_Curve=?, Diameter=?, Lens_Material=?, Water_Content=?, Oxygen_Permeability=?, Product_Qty_Description=?, product_lense_description=?, Brands_of_Contact_Lenses=?, Types_of_Contact_Lenses=?, Shop_by_Manufacturer=?, Optician_Brands=?, updated_at=? where id=?");
	$stmt->bind_param("ssdsisssssssiiiiisi", $image,
$name,
$Price,
$Sale_Price,
$Quantity,
$Power_Range,
$Base_Curve,
$Diameter,
$Lens_Material,
$Water_Content,
$Oxygen_Permeability,
$Product_Qty_Description,
$product_lense_description,
$Brands_of_Contact_Lenses,
$Types_of_Contact_Lenses,
$Shop_by_Manufacturer,
$Optician_Brands,
$updated_at,
$id);


	$stmt->execute();

	$stmt->close();
	$conn->close();
	header('location: product_edit.php?product_id='.$id);
}
/*Create Contact Lense Product*/
if(isset($_POST['insert_contact_lense'])) {
	
	global $customer_id_count;
	global $customer_id_number;
	
	//Order Number START
	$contact_order_number_fetch = mysqli_query($conn,"SELECT * FROM order_numbers where name='product'");
	while($order_number_fetch=mysqli_fetch_array($contact_order_number_fetch,MYSQLI_ASSOC)) {
		$customer_id_number = $order_number_fetch['number'];
	}
	$customer_id_count = 1;
	//trim And finalize the Emp ID
			$customer_id_trim = trim($customer_id_number,"PR");
			$customer_id_number_increament = (int)$customer_id_trim + $customer_id_count;//coun;
			$customer_id_concatinate = "PR".$customer_id_number_increament;
	$stmt2 = $conn->prepare("UPDATE order_numbers SET number=? where name='product'");
	$stmt2->bind_param("s", $customer_id_concatinate);
	$stmt2->execute();
	$stmt2->close();
	//Order Number END
	
	
	//Upload Image Start
	// File upload configuration 
    $targetDir = "../images/Products/"; 
    $allowTypes = array('jpg','JPG','png','PNG','jpeg','JPEG','gif','GIF'); 
     
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['files']['name']); 
    if(!empty($fileNames)){ 
        foreach($_FILES['files']['name'] as $key=>$val){ 
            // File upload path 
            $fileName = basename($_FILES['files']['name'][$key]); 
            $targetFilePath = $targetDir . $fileName; 
             
            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            if(in_array($fileType, $allowTypes)){ 
                // Upload file to server 
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                    // Image db insert sql 
                    $insertValuesSQL .=$fileName; 
                }else{ 
                    $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                } 
            }else{ 
                $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
            } 
        } 
         
     
    // Display status message 
    //echo $statusMsg; 
} 
	//Upload Image End
	
	$id = "";
	$order_number = $customer_id_concatinate;
	$image = $insertValuesSQL;
	$name = $_POST['name'];
	$Price = $_POST['price'];
	$Sale_Price = $_POST['sale_price'];
	$Quantity = $_POST['quantity'];
	$Power_Range = $_POST['power_range'];
	$Base_Curve = $_POST['base_curve'];
	$Diameter = $_POST['diameter'];
	$Lens_Material = $_POST['lens_material'];
	$Water_Content = $_POST['water_content'];
	$Oxygen_Permeability = $_POST['oxygen_permeability'];
	$Customer_Reviews = 0;
	$Product_Qty_Description = $_POST['product_qty_description'];
	$product_lense_description = $_POST['product_lense_description'];
	$Pack = 0;
	$Product_Description = 0;
	$Product_Detail_Advice  = 1;
	$Further_Optical_Advice = 0;
	$Brands_of_Contact_Lenses = $_POST['brands_of_contact_lense'];
	$Types_of_Contact_Lenses = $_POST['types_of_contact_lense'];
	$Shop_by_Manufacturer = $_POST['shop_by_manufacturer'];
	$Types_of_Solutions = 0;
	$Popular_Solutions = 0;
	$Eye_Care = 0;
	$Popular_Eye_Care = 0;
	$Wearing_Type = 0;
	$Optician_Brands = $_POST['optician_brands'];
	$Colours = 0;
	$Gender = 0;
	$Brand = 0;
	$Shape = 0;
	$Frame_Color = 0;
	$LENS_SIZE = 0;
	$LENS_COLOUR = 0;
	$Frame_Size = 0;
	$Material = 0;
	$fm_height = 0;
	$fm_lense_width = 0;
	$fm_lense_bt_width = 0;
	$fm_stick_width = 0;
	$fm_width = 0;
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");

	// prepare and bind
	$stmt = $conn->prepare("INSERT INTO product (id,
order_number,
image,
name,
Price,
Sale_Price,
Quantity,
Power_Range,
Base_Curve,
Diameter,
Lens_Material,
Water_Content,
Oxygen_Permeability,
Customer_Reviews,
Product_Qty_Description,
product_lense_description,
Pack,
Product_Description ,
Product_Detail_Advice ,
Further_Optical_Advice,
Brands_of_Contact_Lenses,
Types_of_Contact_Lenses,
Shop_by_Manufacturer,
Types_of_Solutions,
Popular_Solutions,
Eye_Care,
Popular_Eye_Care,
Wearing_Type,
Optician_Brands,
Colours,
Gender,
Brand,
Shape,
Frame_Color,
LENS_SIZE,
LENS_COLOUR,
Frame_Size,
Material,
fm_height,
fm_lense_width,
fm_lense_bt_width,
fm_stick_width,
fm_width,
active,
created_at,
updated_at) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("isssdsissssssisiiiiiiiiiiiiiiiiiiiiiiiiiiiiiss", $id,
$order_number,
$image,
$name,
$Price,
$Sale_Price,
$Quantity,
$Power_Range,
$Base_Curve,
$Diameter,
$Lens_Material,
$Water_Content,
$Oxygen_Permeability,
$Customer_Reviews,
$Product_Qty_Description,
$product_lense_description,
$Pack,
$Product_Description ,
$Product_Detail_Advice ,
$Further_Optical_Advice,
$Brands_of_Contact_Lenses,
$Types_of_Contact_Lenses,
$Shop_by_Manufacturer,
$Types_of_Solutions,
$Popular_Solutions,
$Eye_Care,
$Popular_Eye_Care,
$Wearing_Type,
$Optician_Brands,
$Colours,
$Gender,
$Brand,
$Shape,
$Frame_Color,
$LENS_SIZE,
$LENS_COLOUR,
$Frame_Size,
$Material,
$fm_height,
$fm_lense_width,
$fm_lense_bt_width,
$fm_stick_width,
$fm_width,
$active,
$created_at,
$updated_at);


	$stmt->execute();

	$stmt->close();
	$conn->close();
}

/* Contact Lense Search */
if(isset($_POST['search_btn'])){ 
		$src = $_POST['search_text'];
	header("location: contact_lenses.php?search=$src");
}

/*Gallery Image Delete*/
if(isset($_POST['delete_gallery_image'])){ 
		$file = $_POST['delete_file'];
		unlink($_SERVER['DOCUMENT_ROOT'] ."/feelgoodcontacts/images/Products/".$file);
		
		$del_id = $_POST['delete_id'];
		$sql = "DELETE FROM gallery WHERE id=$del_id";
		if(mysqli_query($conn, $sql)){
		}
}

/*Gallery Image Upload*/
	if(isset($_POST['gallery_btn'])){ 
		$temp_prod_id = $_POST['prod_id'];
// File upload configuration 
    $targetDir = "../images/Products/"; 
    $allowTypes = array('jpg','JPG','png','PNG','jpeg','JPEG','gif','GIF'); 
     
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['files']['name']); 
    if(!empty($fileNames)){ 
        foreach($_FILES['files']['name'] as $key=>$val){ 
            // File upload path 
            $fileName = basename($_FILES['files']['name'][$key]); 
            $targetFilePath = $targetDir . $fileName; 
             
            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            if(in_array($fileType, $allowTypes)){ 
                // Upload file to server 
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                    // Image db insert sql 
                    $insertValuesSQL .= "('".$temp_prod_id."','".$fileName."',1, NOW()),"; 
                }else{ 
                    $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                } 
            }else{ 
                $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
            } 
        } 
         
        if(!empty($insertValuesSQL)){ 
            $insertValuesSQL = trim($insertValuesSQL, ','); 
            // Insert image file name into database 
            $insert = $conn->query("INSERT INTO gallery (Product_id, Image_Link, active, created_at) VALUES $insertValuesSQL"); 
            if($insert){ 
                $errorUpload = !empty($errorUpload)?'Upload Error: '.trim($errorUpload, ' | '):''; 
                $errorUploadType = !empty($errorUploadType)?'File Type Error: '.trim($errorUploadType, ' | '):''; 
                $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType; 
                $statusMsg = "Files are uploaded successfully.".$errorMsg; 
            }else{ 
                $statusMsg = "Sorry, there was an error uploading your file."; 
            } 
        } 
    }else{ 
        $statusMsg = 'Please select a file to upload.'; 
    } 
     
    // Display status message 
    echo $statusMsg; 
} 

/*Product Detail Advice*/
if(isset($_POST['product_detail_advice_btn'])) {
	$Val = $_POST['product_detail_advice'];
	$temp_prod_id = $_POST['prod_id'];
	
	$id = "";
	$Product_id = $temp_prod_id;
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
	$Value = $Val;
	
	$result = $conn->query("SELECT id FROM product_detail_advice WHERE Product_id=$temp_prod_id");
	if($result->num_rows == 0) {
	// row not found, do stuff...
	// prepare and bind
	$stmt = $conn->prepare("INSERT INTO product_detail_advice (id, Product_id , Product_Detail_Advice, active, created_at, updated_at) VALUES(?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("iisiss", $id, $Product_id,$Value, $active, $created_at, $updated_at);
	$stmt->execute();
		
	} else {
		// do other stuff...
	$stmt = $conn->prepare("UPDATE product_detail_advice SET Product_Detail_Advice=? Where Product_id=?");
	$stmt->bind_param("si", $Value, $Product_id);
	$stmt->execute();
	}
}

/*Furthur Optical Advice*/
if(isset($_POST['further_optical_advice_btn'])) {
	$Val = $_POST['further_optical_advice'];
	$temp_prod_id = $_POST['prod_id'];
	
	$id = "";
	$Product_id = $temp_prod_id;
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
	$Value = $Val;
	
	$result = $conn->query("SELECT id FROM further_optical_advice WHERE Product_id=$temp_prod_id");
	if($result->num_rows == 0) {
	// row not found, do stuff...
	// prepare and bind
	$stmt = $conn->prepare("INSERT INTO further_optical_advice (id, Product_id , Product_Optical_Advice, active, created_at, updated_at) VALUES(?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("iisiss", $id, $Product_id,$Value, $active, $created_at, $updated_at);
	$stmt->execute();
		
	} else {
		// do other stuff...
	$stmt = $conn->prepare("UPDATE further_optical_advice SET Product_Optical_Advice=? Where Product_id=?");
	$stmt->bind_param("si", $Value, $Product_id);
	$stmt->execute();
	}
}

/*Product Description*/
if(isset($_POST['product_description_btn'])) {
	$Val = $_POST['product_description'];
	$temp_prod_id = $_POST['prod_id'];
	
	$id = "";
	$Product_id = $temp_prod_id;
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
	$Value = $Val;
	
	$result = $conn->query("SELECT id FROM product_description WHERE Product_id=$temp_prod_id");
	if($result->num_rows == 0) {
	// row not found, do stuff...
	// prepare and bind
	$stmt = $conn->prepare("INSERT INTO product_description (id, Product_id , Product_Description, active, created_at, updated_at) VALUES(?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("iisiss", $id, $Product_id,$Value, $active, $created_at, $updated_at);
	$stmt->execute();
		
	} else {
		// do other stuff...
	$stmt = $conn->prepare("UPDATE product_description SET Product_Description=? Where Product_id=?");
	$stmt->bind_param("si", $Value, $Product_id);
	$stmt->execute();
	}
}

/*Number Of Pack Delete*/
if(isset($_POST['number_of_pack_delete'])) {
	$del_id = $_POST['delete_id'];
	$prod_id = $_POST['prod_id'];
	
	$sql = "DELETE FROM number_of_pack WHERE id=$del_id";
	if(mysqli_query($conn, $sql)){
	}
}
/*Number Of Pack Range*/
if(isset($_POST['number_of_pack_range_btn'])) {
	$Val = $_POST['range_number_of_pack'];
	$temp_prod_id = $_POST['prod_id'];
	
	$id = "";
	$Product_id = $temp_prod_id;
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
	$Value = $Val;
		
		// prepare and bind
	$stmt = $conn->prepare("INSERT INTO number_of_pack (id, Product_id , NOP_Merge, active, created_at, updated_at) VALUES(?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("iiiiss", $id, $Product_id,$Value, $active, $created_at, $updated_at);


	$stmt->execute();
	
}

/*Quantity Lense Box Delete*/
if(isset($_POST['quantity_of_boxes_delete'])) {
	$del_id = $_POST['delete_id'];
	$prod_id = $_POST['prod_id'];
	
	$sql = "DELETE FROM quantity_of_boxes WHERE id=$del_id";
	if(mysqli_query($conn, $sql)){
	}
}
/*Quantity Lense Box Right Range*/
if(isset($_POST['right_quantity_of_box_range_btn'])) {
	$Val = $_POST['right_range_quantity_of_box'];
	$temp_prod_id = $_POST['prod_id'];
	
	$id = "";
	$Product_id = $temp_prod_id;
	$Side_Select = "right";
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
	$Value = $Val;
		
		// prepare and bind
	$stmt = $conn->prepare("INSERT INTO quantity_of_boxes (id, Product_id, Side_Select, Value, active, created_at, updated_at) VALUES(?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("iisiiss", $id, $Product_id,$Side_Select,$Value, $active, $created_at, $updated_at);


	$stmt->execute();
	
}
/*Quantity Lense Box Left Range*/
if(isset($_POST['left_quantity_of_box_range_btn'])) {
	$Val = $_POST['left_range_quantity_of_box'];
	$temp_prod_id = $_POST['prod_id'];
	
	$id = "";
	$Product_id = $temp_prod_id;
	$Side_Select = "left";
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
	$Value = $Val;
		
		// prepare and bind
	$stmt = $conn->prepare("INSERT INTO quantity_of_boxes (id, Product_id, Side_Select, Value, active, created_at, updated_at) VALUES(?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("iisiiss", $id, $Product_id,$Side_Select,$Value, $active, $created_at, $updated_at);


	$stmt->execute();
	
}



/*Colors Delete*/
if(isset($_POST['colours_delete'])) {
	$del_id = $_POST['delete_id'];
	$prod_id = $_POST['prod_id'];
	
	$sql = "DELETE FROM colours WHERE id=$del_id";
	if(mysqli_query($conn, $sql)){
	}
}

/*Colors Right Range*/
if(isset($_POST['right_colours_range_btn'])) {
	$Val = $_POST['right_range_color'];
	if($Val == "none") {} else {
	$temp_prod_id = $_POST['prod_id'];
	
	$id = "";
	$Product_id = $temp_prod_id;
	$Side_Select = "right";
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
	$Value = $Val;
		
		// prepare and bind
	$stmt = $conn->prepare("INSERT INTO colours (id, Product_id, Side_Select, Color, active, created_at, updated_at) VALUES(?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("iississ", $id, $Product_id,$Side_Select,$Value, $active, $created_at, $updated_at);


	$stmt->execute();
	}
	
}

/*Colors Left Range*/
if(isset($_POST['left_colours_range_btn'])) {
	$Val = $_POST['left_range_color'];
	if($Val == "none") {} else {
	$temp_prod_id = $_POST['prod_id'];
	
	$id = "";
	$Product_id = $temp_prod_id;
	$Side_Select = "left";
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
	$Value = $Val;
		
		// prepare and bind
	$stmt = $conn->prepare("INSERT INTO colours (id, Product_id, Side_Select, Color, active, created_at, updated_at) VALUES(?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("iississ", $id, $Product_id,$Side_Select,$Value, $active, $created_at, $updated_at);


	$stmt->execute();
	}
}


/*Axis Delete*/
if(isset($_POST['axis_delete'])) {
	$del_id = $_POST['delete_id'];
	$prod_id = $_POST['prod_id'];
	
	$sql = "DELETE FROM axis WHERE id=$del_id";
	if(mysqli_query($conn, $sql)){
	}
}

/*Axis Right Range*/
if(isset($_POST['right_axis_range_btn'])) {
	$from = (double)$_POST['right_range_from'];
	$till = (double)$_POST['right_range_till'];
	$temp_prod_id = $_POST['prod_id'];
	
	for($i=$from;$i<=$till;$i++) {
		
	$id = "";
	$Product_id = $temp_prod_id;
	$Side_Select = "right";
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
	$Value = number_format((float)$i, 2, '.', '');
		
		// prepare and bind
	$stmt = $conn->prepare("INSERT INTO axis (id, Product_id, Side_Select, Value, active, created_at, updated_at) VALUES(?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("iisdiss", $id, $Product_id,$Side_Select,$Value, $active, $created_at, $updated_at);


	$stmt->execute();
		
	}
}

/*Axis Left Range*/
if(isset($_POST['left_axis_range_btn'])) {
	$from = (double)$_POST['left_range_from'];
	$till = (double)$_POST['left_range_till'];
	$temp_prod_id = $_POST['prod_id'];
	
	for($i=$from;$i<=$till;$i++) {
		
	$id = "";
	$Product_id = $temp_prod_id;
	$Side_Select = "left";
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
	$Value = number_format((float)$i, 2, '.', '');
		
		// prepare and bind
	$stmt = $conn->prepare("INSERT INTO axis (id, Product_id, Side_Select, Value, active, created_at, updated_at) VALUES(?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("iisdiss", $id, $Product_id,$Side_Select,$Value, $active, $created_at, $updated_at);


	$stmt->execute();
		
	}
}

/*Axis Right Value*/
if(isset($_POST['right_axis_btn'])) {
	$right_val = (int)$_POST['right_axis_value'];
	$temp_prod_id = $_POST['prod_id'];
	

	$id = "";
	$Product_id = $temp_prod_id;
	$Side_Select = "right";
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
	$Value = $right_val; 
		
		// prepare and bind
	$stmt = $conn->prepare("INSERT INTO axis (id, Product_id, Side_Select, Value, active, created_at, updated_at) VALUES(?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("iisdiss", $id, $Product_id,$Side_Select,$Value, $active, $created_at, $updated_at);


	$stmt->execute();

}


/*Axis Left Value*/
if(isset($_POST['left_axis_btn'])) {
	$left_val = (int)$_POST['left_axis_value'];
	$temp_prod_id = $_POST['prod_id'];
	

	$id = "";
	$Product_id = $temp_prod_id;
	$Side_Select = "left";
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
	$Value = $left_val; 
		
		// prepare and bind
	$stmt = $conn->prepare("INSERT INTO axis (id, Product_id, Side_Select, Value, active, created_at, updated_at) VALUES(?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("iisdiss", $id, $Product_id,$Side_Select,$Value, $active, $created_at, $updated_at);


	$stmt->execute();

}

/*Cylinder Delete*/
if(isset($_POST['cylinder_delete'])) {
	$del_id = $_POST['delete_id'];
	$prod_id = $_POST['prod_id'];
	
	$sql = "DELETE FROM cylinder WHERE id=$del_id";
	if(mysqli_query($conn, $sql)){
	}
}

/*Cylinder Right Range*/
if(isset($_POST['right_cylinder_range_btn'])) {
	$from = (double)$_POST['right_range_from'];
	$till = (double)$_POST['right_range_till'];
	$temp_prod_id = $_POST['prod_id'];
	
	for($i=$from;$i<=$till;$i+=0.25) {
		
	$id = "";
	$Product_id = $temp_prod_id;
	$Side_Select = "right";
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
	$Value = number_format((float)$i, 2, '.', '');
		
		// prepare and bind
	$stmt = $conn->prepare("INSERT INTO cylinder (id, Product_id, Side_Select, Value, active, created_at, updated_at) VALUES(?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("iisdiss", $id, $Product_id,$Side_Select,$Value, $active, $created_at, $updated_at);


	$stmt->execute();
		
	}
}

/*Cylinder Left Range*/
if(isset($_POST['left_cylinder_range_btn'])) {
	$from = (double)$_POST['left_range_from'];
	$till = (double)$_POST['left_range_till'];
	$temp_prod_id = $_POST['prod_id'];
	
	for($i=$from;$i<=$till;$i+=0.25) {
		
	$id = "";
	$Product_id = $temp_prod_id;
	$Side_Select = "left";
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
	$Value = number_format((float)$i, 2, '.', '');
		
		// prepare and bind
	$stmt = $conn->prepare("INSERT INTO cylinder (id, Product_id, Side_Select, Value, active, created_at, updated_at) VALUES(?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("iisdiss", $id, $Product_id,$Side_Select,$Value, $active, $created_at, $updated_at);


	$stmt->execute();
		
	}
}

/*Cylinder Right Value*/
if(isset($_POST['right_cylinder_btn'])) {
	$right_val = (int)$_POST['right_cylinder_value'];
	$temp_prod_id = $_POST['prod_id'];
	

	$id = "";
	$Product_id = $temp_prod_id;
	$Side_Select = "right";
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
	$Value = $right_val; 
		
		// prepare and bind
	$stmt = $conn->prepare("INSERT INTO cylinder (id, Product_id, Side_Select, Value, active, created_at, updated_at) VALUES(?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("iisdiss", $id, $Product_id,$Side_Select,$Value, $active, $created_at, $updated_at);


	$stmt->execute();

}


/*Cylinder Left Value*/
if(isset($_POST['left_cylinder_btn'])) {
	$left_val = (int)$_POST['left_cylinder_value'];
	$temp_prod_id = $_POST['prod_id'];
	

	$id = "";
	$Product_id = $temp_prod_id;
	$Side_Select = "left";
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
	$Value = $left_val; 
		
		// prepare and bind
	$stmt = $conn->prepare("INSERT INTO cylinder (id, Product_id, Side_Select, Value, active, created_at, updated_at) VALUES(?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("iisdiss", $id, $Product_id,$Side_Select,$Value, $active, $created_at, $updated_at);


	$stmt->execute();

}


/*Diameter Delete*/
if(isset($_POST['diameter_delete'])) {
	$del_id = $_POST['delete_id'];
	$prod_id = $_POST['prod_id'];
	
	$sql = "DELETE FROM diameter WHERE id=$del_id";
	if(mysqli_query($conn, $sql)){
	}
}

/*Diameter Right Range*/
if(isset($_POST['right_diameter_range_btn'])) {
	$from = (double)$_POST['right_range_from'];
	$till = (double)$_POST['right_range_till'];
	$temp_prod_id = $_POST['prod_id'];
	
	for($i=$from;$i<=$till;$i+=0.1) {
		
	$id = "";
	$Product_id = $temp_prod_id;
	$Side_Select = "right";
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
	$Value = number_format((float)$i, 1, '.', '');
		
		// prepare and bind
	$stmt = $conn->prepare("INSERT INTO diameter (id, Product_id, Side_Select, Value, active, created_at, updated_at) VALUES(?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("iisdiss", $id, $Product_id,$Side_Select,$Value, $active, $created_at, $updated_at);


	$stmt->execute();
		
	}
}

/*Diameter Left Range*/
if(isset($_POST['left_diameter_range_btn'])) {
	$from = (double)$_POST['left_range_from'];
	$till = (double)$_POST['left_range_till'];
	$temp_prod_id = $_POST['prod_id'];
	
	for($i=$from;$i<=$till;$i+=0.1) {
		
	$id = "";
	$Product_id = $temp_prod_id;
	$Side_Select = "left";
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
	$Value = number_format((float)$i, 1, '.', '');;
		
		// prepare and bind
	$stmt = $conn->prepare("INSERT INTO diameter (id, Product_id, Side_Select, Value, active, created_at, updated_at) VALUES(?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("iisdiss", $id, $Product_id,$Side_Select,$Value, $active, $created_at, $updated_at);


	$stmt->execute();
		
	}
}

/*Diameter Right Value*/
if(isset($_POST['right_diameter_btn'])) {
	$right_val = (int)$_POST['right_diameter_value'];
	$temp_prod_id = $_POST['prod_id'];
	

	$id = "";
	$Product_id = $temp_prod_id;
	$Side_Select = "right";
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
	$Value = $right_val; 
		
		// prepare and bind
	$stmt = $conn->prepare("INSERT INTO diameter (id, Product_id, Side_Select, Value, active, created_at, updated_at) VALUES(?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("iisdiss", $id, $Product_id,$Side_Select,$Value, $active, $created_at, $updated_at);


	$stmt->execute();

}


/*Diameter Left Value*/
if(isset($_POST['left_diameter_btn'])) {
	$left_val = (int)$_POST['left_diameter_value'];
	$temp_prod_id = $_POST['prod_id'];
	

	$id = "";
	$Product_id = $temp_prod_id;
	$Side_Select = "left";
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
	$Value = $left_val; 
		
		// prepare and bind
	$stmt = $conn->prepare("INSERT INTO diameter (id, Product_id, Side_Select, Value, active, created_at, updated_at) VALUES(?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("iisdiss", $id, $Product_id,$Side_Select,$Value, $active, $created_at, $updated_at);


	$stmt->execute();

}


/*Base Curve Delete*/
if(isset($_POST['base_curve_delete'])) {
	$del_id = $_POST['delete_id'];
	$prod_id = $_POST['prod_id'];
	
	$sql = "DELETE FROM base_curve WHERE id=$del_id";
	if(mysqli_query($conn, $sql)){
	}
}

/*Base Curve Right Range*/
if(isset($_POST['right_base_curve_range_btn'])) {
	$from = (double)$_POST['right_range_from'];
	$till = (double)$_POST['right_range_till'];
	$temp_prod_id = $_POST['prod_id'];
	
	for($i=$from;$i<=$till;$i+=0.1) {
		
	$id = "";
	$Product_id = $temp_prod_id;
	$Side_Select = "right";
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
	$Value = number_format((float)$i, 1, '.', '');
		
		// prepare and bind
	$stmt = $conn->prepare("INSERT INTO base_curve (id, Product_id, Side_Select, Value, active, created_at, updated_at) VALUES(?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("iisdiss", $id, $Product_id,$Side_Select,$Value, $active, $created_at, $updated_at);


	$stmt->execute();
		
	}
}

/*Base Curve Left Range*/
if(isset($_POST['left_base_curve_range_btn'])) {
	$from = (double)$_POST['left_range_from'];
	$till = (double)$_POST['left_range_till'];
	$temp_prod_id = $_POST['prod_id'];
	
	for($i=$from;$i<=$till;$i+=0.1) {
		
	$id = "";
	$Product_id = $temp_prod_id;
	$Side_Select = "left";
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
	$Value = number_format((float)$i, 1, '.', '');;
		
		// prepare and bind
	$stmt = $conn->prepare("INSERT INTO base_curve (id, Product_id, Side_Select, Value, active, created_at, updated_at) VALUES(?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("iisdiss", $id, $Product_id,$Side_Select,$Value, $active, $created_at, $updated_at);


	$stmt->execute();
		
	}
}

/*Base Curve Right Value*/
if(isset($_POST['right_base_curve_btn'])) {
	$right_val = (int)$_POST['right_base_curve_value'];
	$temp_prod_id = $_POST['prod_id'];
	

	$id = "";
	$Product_id = $temp_prod_id;
	$Side_Select = "right";
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
	$Value = $right_val; 
		
		// prepare and bind
	$stmt = $conn->prepare("INSERT INTO base_curve (id, Product_id, Side_Select, Value, active, created_at, updated_at) VALUES(?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("iisdiss", $id, $Product_id,$Side_Select,$Value, $active, $created_at, $updated_at);


	$stmt->execute();

}

/*Base Curve Left Value*/
if(isset($_POST['left_base_curve_btn'])) {
	$left_val = (int)$_POST['left_base_curve_value'];
	$temp_prod_id = $_POST['prod_id'];
	

	$id = "";
	$Product_id = $temp_prod_id;
	$Side_Select = "left";
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
	$Value = $left_val; 
		
		// prepare and bind
	$stmt = $conn->prepare("INSERT INTO base_curve (id, Product_id, Side_Select, Value, active, created_at, updated_at) VALUES(?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("iisdiss", $id, $Product_id,$Side_Select,$Value, $active, $created_at, $updated_at);


	$stmt->execute();

}


/*Power Delete*/
if(isset($_POST['power_delete'])) {
	$del_id = $_POST['delete_id'];
	$prod_id = $_POST['prod_id'];
	
	$sql = "DELETE FROM power WHERE id=$del_id";
if(mysqli_query($conn, $sql)){
}
}
/*Power Left Value*/
if(isset($_POST['left_power_btn'])) {
	$left_val = (int)$_POST['left_power_value'];
	$temp_prod_id = $_POST['prod_id'];
	

	$id = "";
	$Product_id = $temp_prod_id;
	$Side_Select = "left";
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
	// Test if string contains the word 
		$word = "-";
		if(strpos($left_val, $word) !== false){
			//Minus Condition True
			$Plus = "";
			$Minus = str_replace("-","",$left_val);;
		} else{
			$Plus = $left_val;
			$Minus = "";
		}
		
		// prepare and bind
	$stmt = $conn->prepare("INSERT INTO power (id, Product_id, Side_Select, Plus, Minus, active, created_at, updated_at) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("iisddiss", $id, $Product_id,$Side_Select,$Plus,$Minus, $active, $created_at, $updated_at);


	$stmt->execute();

}

/*Power Right Value*/
if(isset($_POST['right_power_btn'])) {
	$left_val = (int)$_POST['right_power_value'];
	$temp_prod_id = $_POST['prod_id'];
	

	$id = "";
	$Product_id = $temp_prod_id;
	$Side_Select = "right";
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
	// Test if string contains the word 
		$word = "-";
		if(strpos($left_val, $word) !== false){
			//Minus Condition True
			$Plus = "";
			$Minus = str_replace("-","",$left_val);;
		} else{
			$Plus = $left_val;
			$Minus = "";
		}
		
		// prepare and bind
	$stmt = $conn->prepare("INSERT INTO power (id, Product_id, Side_Select, Plus, Minus, active, created_at, updated_at) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("iisddiss", $id, $Product_id,$Side_Select,$Plus,$Minus, $active, $created_at, $updated_at);


	$stmt->execute();

}

/*Power Left Range*/
if(isset($_POST['left_power_range_btn'])) {
	$from = (int)$_POST['left_range_from'];
	$till = (int)$_POST['left_range_till'];
	$temp_prod_id = $_POST['prod_id'];
	
	for($i=$from;$i<=$till;$i+=0.25) {
		
	$id = "";
	$Product_id = $temp_prod_id;
	$Side_Select = "left";
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
	// Test if string contains the word 
		$word = "-";
		if(strpos($i, $word) !== false){
			//Minus Condition True
			$Plus = "";
			$Minus = str_replace("-","",$i);;
		} else{
			$Plus = $i;
			$Minus = "";
		}
		
		// prepare and bind
	$stmt = $conn->prepare("INSERT INTO power (id, Product_id, Side_Select, Plus, Minus, active, created_at, updated_at) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("iisddiss", $id, $Product_id,$Side_Select,$Plus,$Minus, $active, $created_at, $updated_at);


	$stmt->execute();

		
	}
}

/*Power Right Range*/
if(isset($_POST['right_power_range_btn'])) {
	$from = (int)$_POST['right_range_from'];
	$till = (int)$_POST['right_range_till'];
	$temp_prod_id = $_POST['prod_id'];
	
	for($i=$from;$i<=$till;$i+=0.25) {
		
	$id = "";
	$Product_id = $temp_prod_id;
	$Side_Select = "right";
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");
	// Test if string contains the word 
		$word = "-";
		if(strpos($i, $word) !== false){
			//Minus Condition True
			$Plus = "";
			$Minus = str_replace("-","",$i);;
		} else{
			$Plus = $i;
			$Minus = "";
		}
		
		// prepare and bind
	$stmt = $conn->prepare("INSERT INTO power (id, Product_id, Side_Select, Plus, Minus, active, created_at, updated_at) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("iisddiss", $id, $Product_id,$Side_Select,$Plus,$Minus, $active, $created_at, $updated_at);


	$stmt->execute();

		
	}
}

/*CONTACT LENSE END*/



/*
//Register Query
if(isset($_POST['register'])) {
	$id = "";
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$country = "";
	$postcode = "";
	$address1 = "";
	$address2 = "";
	$city_town = "";
	$country_state = "";
	$phone = "";
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");

	// prepare and bind
	$stmt = $conn->prepare("INSERT INTO customers (id, first_name, last_name, email, password, country, postcode, address1, address2, city_town, country_state, phone, active, created_at, updated_at) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("issssssssssssss", $id, $first_name,$last_name,$email,$password,$country, $postcode, $address1, $address2, $city_town, $country_state, $phone, $active, $created_at, $updated_at);


	$stmt->execute();

	$stmt->close();
	$conn->close();
}
//Login Query
if(isset($_POST['login_btn'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$fetch_queryy = mysqli_query($conn,"SELECT * FROM customers where email='$email' AND password='$password' AND active=1");
	while($roww=mysqli_fetch_array($fetch_queryy,MYSQLI_ASSOC)) {
		session_unset();
		session_destroy();
		session_start();
		$_SESSION['id'] = $roww['id'];
		$_SESSION['name'] = $roww['first_name'];
		$_SESSION['email'] = $roww['email'];
		
		header("Location: myaccount.php");
	}
}

//Add A Review 
if(isset($_POST['review_btn'])) {
	$id = "";
	$product_id = $_POST['prod_id'];
	$customer_id = $_POST['cust_id'];
	$customer_review = $_POST['review_text'];
	$stars = $_POST['star_value'];
	$approve = 0;
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");

	// prepare and bind
	$stmt2 = $conn->prepare("INSERT INTO customer_review (id, Product_id, Customer_id, Customer_review, stars, Approve, active, created_at, updated_at) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)");
	$stmt2->bind_param("iiisiiiss", $id, $product_id, $customer_id, $customer_review,$stars,$approve, $active, $created_at, $updated_at);


	$stmt2->execute();

	$stmt2->close();
	$conn->close();
	$order_no = $_POST['order_no'];
	header("Location: product.php?product_id=$order_no&review=success");
}
//Add A Review 2
if(isset($_POST['review_btn2'])) {
	$id = "";
	$product_id = $_POST['prod_id'];
	$customer_id = $_POST['cust_id'];
	$customer_review = $_POST['review_text'];
	$stars = $_POST['star_value'];
	$approve = 0;
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");

	// prepare and bind
	$stmt2 = $conn->prepare("INSERT INTO customer_review (id, Product_id, Customer_id, Customer_review, stars, Approve, active, created_at, updated_at) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)");
	$stmt2->bind_param("iiisiiiss", $id, $product_id, $customer_id, $customer_review,$stars,$approve, $active, $created_at, $updated_at);


	$stmt2->execute();

	$stmt2->close();
	$conn->close();
	$order_no = $_POST['order_no'];
	header("Location: product2.php?product_id=$order_no");
}


function prescription_insert() {
	$db2 = "feelgoodcontact";
$servername2= "localhost";
$username2 = "root";
$password2 = "";
$conn2 = mysqli_connect($servername2,$username2,$password2,$db2);
	//Add Prescription
if(isset($_POST['prescription_name'])) {
	echo "<script>alert('hello')</script>";
	$id = "";
	$admin_id = 0;
	$customer_id = $_POST['hidden_cust_id'];
	$prescription_name = $_POST['prescription_name'];
	$added_by = "user";
	$pupil_distance = $_POST['pupil_distance'];
	$date_of_prescription = $_POST['day']."/".$_POST['month']."/".$_POST['year'];
	$extra_info = $_POST['information'];
	$right_sphere = $_POST['right_sphere'];
	$right_cylinder = $_POST['right_cylinder'];
	$right_axis = $_POST['right_axis'];
	$right_near_addition = $_POST['right_near_addition'];
	$left_sphere = $_POST['left_sphere'];
	$left_cylinder = $_POST['left_cylinder'];
	$left_axis = $_POST['left_axis'];
	$left_near_addition = $_POST['left_near_addition'];
	$right_d_sphere = $_POST['right_d_sphere'];
	$right_d_cylinder = $_POST['right_d_cylinder'];
	$right_d_axis = $_POST['right_d_axis'];
	$right_i_sphere = $_POST['right_i_sphere'];
	$right_i_cylinder = $_POST['right_i_cylinder'];
	$right_i_axis = $_POST['right_i_axis'];
	$right_i_near_addition = $_POST['right_i_near_addition'];
	$right_n_sphere = $_POST['right_n_sphere'];
	$right_n_cylinder = $_POST['right_n_cylinder'];
	$right_n_axis = $_POST['right_n_axis'];
	$right_n_near_addition = $_POST['right_n_near_addition'];
	$left_d_sphere = $_POST['left_d_sphere'];
	$left_d_cylinder = $_POST['left_d_cylinder'];
	$left_d_axis = $_POST['left_d_axis'];
	$left_i_sphere = $_POST['left_i_sphere'];
	$left_i_cylinder = $_POST['left_i_cylinder'];
	$left_i_axis = $_POST['left_i_axis'];
	$left_i_near_addition = $_POST['left_i_near_addition'];
	$left_n_sphere = $_POST['left_n_sphere'];
	$left_n_cylinder = $_POST['left_n_cylinder'];
	$left_n_axis = $_POST['left_n_axis'];
	$left_n_near_addition = $_POST['left_n_near_addition'];
	$active = 1;
	$created_at = date("Y-m-d H:i:s");
	$updated_at = date("Y-m-d H:i:s");

	// prepare and bind
	$stmt2 = $conn2->prepare("INSERT INTO prescription (id, admin_id, customer_id, prescription_name, added_by, pupil_distance, date_of_prescription, extra_info, right_sphere, right_cylinder, right_axis, right_near_addition, left_sphere, left_cylinder, left_axis, left_near_addition, right_d_sphere, right_d_cylinder, right_d_axis, right_i_sphere, right_i_cylinder, right_i_axis, right_i_near_addition, right_n_sphere, right_n_cylinder, right_n_axis, right_n_near_addition, left_d_sphere, left_d_cylinder, left_d_axis, left_i_sphere, left_i_cylinder, left_i_axis, left_i_near_addition, left_n_sphere, left_n_cylinder, left_n_axis, left_n_near_addition, active, created_at, updated_at) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
	$stmt2->bind_param("iiisssssssssssssssssssssssssssssssssssiss", $id,
	$admin_id,
	$customer_id ,
	$prescription_name ,
	$added_by ,
	$pupil_distance ,
	$date_of_prescription ,
	$extra_info ,
	$right_sphere ,
	$right_cylinder ,
	$right_axis ,
	$right_near_addition ,
	$left_sphere ,
	$left_cylinder ,
	$left_axis ,
	$left_near_addition ,
	$right_d_sphere ,
	$right_d_cylinder ,
	$right_d_axis ,
	$right_i_sphere ,
	$right_i_cylinder ,
	$right_i_axis ,
	$right_i_near_addition ,
	$right_n_sphere ,
	$right_n_cylinder ,
	$right_n_axis ,
	$right_n_near_addition ,
	$left_d_sphere ,
	$left_d_cylinder ,
	$left_d_axis ,
	$left_i_sphere ,
	$left_i_cylinder ,
	$left_i_axis ,
	$left_i_near_addition ,
	$left_n_sphere ,
	$left_n_cylinder ,
	$left_n_axis ,
	$left_n_near_addition ,
	$active ,
	$created_at ,
	$updated_at );


	$stmt2->execute();

	$stmt2->close();
	$conn2->close();
	$order_no = $_POST['order_no'];
	header("Location: basket.php");
}
}

*/
?>
