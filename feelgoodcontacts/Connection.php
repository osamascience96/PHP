
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
$sql = "CREATE TABLE customers(
id int AUTO_INCREMENT PRIMARY KEY,
first_name varchar(225),
last_name varchar(225),
email varchar(225),
password varchar(225),
country varchar(225),
postcode varchar(225),
address1 varchar(225),
address2 varchar(225),
city_town varchar(225),
country_state varchar(225),
phone varchar(225),
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


// CART

	if(isset($_POST['add_to_cart'])) {
		$tempote = $_POST['edit'];
		//prescription update
		if($tempote == 1) {
			echo '<script>alert("Prescription Edited")</script>';	
			
			$_SESSION['step4_prescription_name'] = $_POST['prescription_name'];

			//Update
			$item_array = ['item_id' => $_SESSION['step1_option_id']];
			foreach( $_SESSION['shopping_cart'] as $key => $value ) {
			  if( $value['item_id']  == $item_array['item_id']) {
				  $_SESSION['shopping_cart'][$key]['item_step4_presc_name'] = $_POST['prescription_name'];
				  //header("Location: basket.php");

				}
			}
		}
		//end
		else if(isset($_SESSION['shopping_cart'])) {
			echo '<script>alert("s2")</script>';
			$item_array_id = array_column($_SESSION['shopping_cart'], 'item_id');
				if(!in_array($_POST['hidden_id'], $item_array_id)) {
				
				$count = count($_SESSION['shopping_cart']);
				$item_array = array(
				'item_id' => isset($_POST['hidden_id']) ? $_POST['hidden_id'] : null,
				'item_name' => isset($_POST['hidden_name']) ? $_POST['hidden_name'] : null,
				'item_price' => isset($_POST['hidden_price']) ? $_POST['hidden_price'] : null,
				'item_image' => isset($_POST['hidden_image']) ? $_POST['hidden_image'] : null,
				//ContactLenses
				'item_left_check' => isset($_POST['left_check']) ? $_POST['left_check'] : null,
				'item_right_check' => isset($_POST['right_check']) ? $_POST['right_check'] : null,
				'item_left_power' => isset($_POST['left_power']) ? $_POST['left_power'] : null,
				'item_right_power' => isset($_POST['right_power']) ? $_POST['right_power'] : null,
				'item_left_bc' => isset($_POST['left_bc']) ? $_POST['left_bc'] : null,
				'item_right_bc' => isset($_POST['right_bc']) ? $_POST['right_bc'] : null,
				'item_left_diameter' => isset($_POST['left_diameter']) ? $_POST['left_diameter'] : null,
				'item_right_diameter' => isset($_POST['right_diameter']) ? $_POST['right_diameter'] : null,
				'item_left_cylinder' => isset($_POST['left_cylinder']) ? $_POST['left_cylinder'] : null,
				'item_right_cylinder' => isset($_POST['right_cylinder']) ? $_POST['right_cylinder'] : null,
				'item_left_axis' => isset($_POST['left_axis']) ? $_POST['left_axis'] : null,
				'item_right_axis' => isset($_POST['right_axis']) ? $_POST['right_axis'] : null,
				'item_left_color' => isset($_POST['left_color']) ? $_POST['left_color'] : null,
				'item_right_color' => isset($_POST['right_color']) ? $_POST['right_color'] : null,
				'item_left_qty' => isset($_POST['left_qty']) ? $_POST['left_qty'] : null,
				'item_right_qty' => isset($_POST['right_qty']) ? $_POST['right_qty'] : null,
				//Solutions
				'item_solution_pack' => isset($_POST['solution_pack']) ? $_POST['solution_pack'] : null,
				//EyeCare
				'item_eye_care_pack' => isset($_POST['eye_care_pack']) ? $_POST['eye_care_pack'] : null,
				//Glasses & Sunglasses
				'item_step1_option_type' => isset($_POST['step1_option_type']) ? $_POST['step1_option_type'] : null,
				'item_step1_option_name' => isset($_POST['step1_option_name']) ? $_POST['step1_option_name'] : null,
				'item_step1_option_price' => isset($_POST['step1_option_price']) ? $_POST['step1_option_price'] : null,
				'item_step2_option_hidden_alize_forte' => isset($_POST['step2_option_hidden_alize_forte']) ? $_POST['step2_option_hidden_alize_forte'] : null,
				'item_step2_option_hidden_alize_forte_price' => isset($_POST['step2_option_hidden_alize_forte_price']) ? $_POST['step2_option_hidden_alize_forte_price'] : null,
				'item_step2_option_hidden_option_all' => isset($_POST['step2_option_hidden_option_all']) ? $_POST['step2_option_hidden_option_all'] : null,
				'item_step2_option_hidden_option_all_price' => isset($_POST['step2_option_hidden_option_all_price']) ? $_POST['step2_option_hidden_option_all_price'] : null,
				'item_step2_option_hidden_option_btn' => isset($_POST['step2_option_hidden_option_btn']) ? $_POST['step2_option_hidden_option_btn'] : null,
				'item_step2_option_hidden_option_tint_info' => isset($_POST['step2_option_hidden_option_tint_info']) ? $_POST['step2_option_hidden_option_tint_info'] : null,
				'item_step3_package_name' => isset($_POST['step3_package_name']) ? $_POST['step3_package_name'] : null,
				'item_step3_package_price' => isset($_POST['step3_package_price']) ? $_POST['step3_package_price'] : null,
				'item_step4_presc_name' => isset($_POST['prescription_name']) ? $_POST['prescription_name'] : null
				);
				$_SESSION['shopping_cart'][$count] = $item_array;
				//Precription_Add
					prescription_insert();
				}
				else {
					echo '<script>alert("Item Already Added")</script>';
					echo '<script>window.location="basket.php"</script>';
				}
	}
	else if($_SERVER['REQUEST_METHOD'] != "POST") {
		
	}
	else {
		echo '<script>alert("s3s")</script>';
		$item_array = array(
				'item_id' => isset($_POST['hidden_id']) ? $_POST['hidden_id'] : null,
				'item_name' => isset($_POST['hidden_name']) ? $_POST['hidden_name'] : null,
				'item_price' => isset($_POST['hidden_price']) ? $_POST['hidden_price'] : null,
				'item_image' => isset($_POST['hidden_image']) ? $_POST['hidden_image'] : null,
				//ContactLenses
				'item_left_check' => isset($_POST['left_check']) ? $_POST['left_check'] : null,
				'item_right_check' => isset($_POST['right_check']) ? $_POST['right_check'] : null,
				'item_left_power' => isset($_POST['left_power']) ? $_POST['left_power'] : null,
				'item_right_power' => isset($_POST['right_power']) ? $_POST['right_power'] : null,
				'item_left_bc' => isset($_POST['left_bc']) ? $_POST['left_bc'] : null,
				'item_right_bc' => isset($_POST['right_bc']) ? $_POST['right_bc'] : null,
				'item_left_diameter' => isset($_POST['left_diameter']) ? $_POST['left_diameter'] : null,
				'item_right_diameter' => isset($_POST['right_diameter']) ? $_POST['right_diameter'] : null,
				'item_left_cylinder' => isset($_POST['left_cylinder']) ? $_POST['left_cylinder'] : null,
				'item_right_cylinder' => isset($_POST['right_cylinder']) ? $_POST['right_cylinder'] : null,
				'item_left_axis' => isset($_POST['left_axis']) ? $_POST['left_axis'] : null,
				'item_right_axis' => isset($_POST['right_axis']) ? $_POST['right_axis'] : null,
				'item_left_color' => isset($_POST['left_color']) ? $_POST['left_color'] : null,
				'item_right_color' => isset($_POST['right_color']) ? $_POST['right_color'] : null,
				'item_left_qty' => isset($_POST['left_qty']) ? $_POST['left_qty'] : null,
				'item_right_qty' => isset($_POST['right_qty']) ? $_POST['right_qty'] : null,
				//Solutions
				'item_solution_pack' => isset($_POST['solution_pack']) ? $_POST['solution_pack'] : null,
				//EyeCare
				'item_eye_care_pack' => isset($_POST['eye_care_pack']) ? $_POST['eye_care_pack'] : null,
				//Glasses & Sunglasses
				'item_step1_option_type' => isset($_POST['step1_option_type']) ? $_POST['step1_option_type'] : null,
				'item_step1_option_name' => isset($_POST['step1_option_name']) ? $_POST['step1_option_name'] : null,
				'item_step1_option_price' => isset($_POST['step1_option_price']) ? $_POST['step1_option_price'] : null,
				'item_step2_option_hidden_alize_forte' => isset($_POST['step2_option_hidden_alize_forte']) ? $_POST['step2_option_hidden_alize_forte'] : null,
				'item_step2_option_hidden_alize_forte_price' => isset($_POST['step2_option_hidden_alize_forte_price']) ? $_POST['step2_option_hidden_alize_forte_price'] : null,
				'item_step2_option_hidden_option_all' => isset($_POST['step2_option_hidden_option_all']) ? $_POST['step2_option_hidden_option_all'] : null,
				'item_step2_option_hidden_option_all_price' => isset($_POST['step2_option_hidden_option_all_price']) ? $_POST['step2_option_hidden_option_all_price'] : null,
				'item_step2_option_hidden_option_btn' => isset($_POST['step2_option_hidden_option_btn']) ? $_POST['step2_option_hidden_option_btn'] : null,
				'item_step2_option_hidden_option_tint_info' => isset($_POST['step2_option_hidden_option_tint_info']) ? $_POST['step2_option_hidden_option_tint_info'] : null,
				'item_step3_package_name' => isset($_POST['step3_package_name']) ? $_POST['step3_package_name'] : null,
				'item_step3_package_price' => isset($_POST['step3_package_price']) ? $_POST['step3_package_price'] : null,
			'item_step4_presc_name' => isset($_POST['prescription_name']) ? $_POST['prescription_name'] : null
				);
		$_SESSION['shopping_cart'][0] = $item_array;
		//Precription_Add
					prescription_insert();
	}
	}





// Cart Delete
if(isset($_GET['action']))
{
	if($_GET['action'] == "delete") {
		foreach($_SESSION['shopping_cart'] as $keys => $values)
		{
			if($values['item_id'] == $_GET['id']) {
				unset($_SESSION['shopping_cart'][$keys]);
				
				echo '<script>window.location="basket.php"</script>';
			}
		}
	}
}

//Favorite

	if(isset($_POST['add_to_fav'])) {
		if(isset($_SESSION['favourite_cart'])) {
			$item_array_id = array_column($_SESSION['favourite_cart'], 'item_id');
				if(!in_array($_POST['hidden_id'], $item_array_id)) {
				
				$count = count($_SESSION['favourite_cart']);
				
				$item_array = array(
				'item_id' => $_POST['hidden_id'],
				'item_name' => $_POST['hidden_name'],
				'item_price' => $_POST['hidden_price'],
				'item_image' => $_POST['hidden_image']
				/*'item_left_check' => $_POST['left_check'],
				'item_right_check' => $_POST['right_check'],
				'item_left_power' => $_POST['left_power'],
				'item_right_power' => $_POST['right_power'],
				'item_left_bc' => $_POST['left_bc'],
				'item_right_bc' => $_POST['right_bc'],
				'item_left_diameter' => $_POST['left_diameter'],
				'item_right_diameter' => $_POST['right_diameter'],
				'item_left_qty' => $_POST['left_qty'],
				'item_right_qty' => $_POST['right_qty']*/
				);
				$_SESSION['favourite_cart'][$count] = $item_array;
				}
				else {
				}
	}
	else if($_SERVER['REQUEST_METHOD'] != "POST") {
		
	}
	else {
		$item_array = array(
			'item_id' => $_POST['hidden_id'],
			'item_name' => $_POST['hidden_name'],
			'item_price' => $_POST['hidden_price'],
			'item_image' => $_POST['hidden_image']
			/*'item_left_check' => $_POST['left_check'],
				'item_right_check' => $_POST['right_check'],
				'item_left_power' => $_POST['left_power'],
				'item_right_power' => $_POST['right_power'],
				'item_left_bc' => $_POST['left_bc'],
				'item_right_bc' => $_POST['right_bc'],
				'item_left_diameter' => $_POST['left_diameter'],
				'item_right_diameter' => $_POST['right_diameter'],
				'item_left_qty' => $_POST['left_qty'],
				'item_right_qty' => $_POST['right_qty']*/
		);	
		$_SESSION['favourite_cart'][0] = $item_array;
	}
	}
	
// favourite Delete
if(isset($_GET['action2']))
{
	if($_GET['action2'] == "delete2") {
		foreach($_SESSION['favourite_cart'] as $keys => $values)
		{
			if($values['item_id'] == $_GET['id']) {
				unset($_SESSION['favourite_cart'][$keys]);
				
			}
		}
	}
}
	
//Product Card Title Limit
function limit_text($text, $limit) {
								  if (str_word_count($text, 0) > $limit) {
									  $words = str_word_count($text, 2);
									  $pos = array_keys($words);
									  $text = substr($text, 0, $pos[$limit]).'...';
								  }
								  return $text;
								}
								
					function limit_text2($text, $limit) {
								  if (str_word_count($text, 0) > $limit) {
									  $words = str_word_count($text, 2);
									  $pos = array_keys($words);
									  $text = substr($text, 0, $pos[$limit]).'...';
								  }
								  return $text;
								}



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
	echo '<script>alert("press")</script>';
	$db2 = "feelgoodcontact";
$servername2= "localhost";
$username2 = "root";
$password2 = "";
$conn2 = mysqli_connect($servername2,$username2,$password2,$db2);
	//Add Prescription
if(isset($_POST['prescription_name']) && $_POST['prescription_name'] != "Send It Later") {
	//Create SEssion
	/*$item_array = array(
				'item_id' => isset($_POST['hidden_id']) ? $_POST['hidden_id'] : null,
				'item_name' => isset($_POST['hidden_name']) ? $_POST['hidden_name'] : null,
				'item_price' => isset($_POST['hidden_price']) ? $_POST['hidden_price'] : null,
				'item_image' => isset($_POST['hidden_image']) ? $_POST['hidden_image'] : null,
				
			'item_step4_presc_name' => isset($_POST['prescription_name']) ? $_POST['prescription_name'] : null
				);
		$_SESSION['shopping_cart'][0] = $item_array;*/
	
	
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


?>
