<?php include 'Connection.php' ?>
<?php 
if(isset($_POST['hidden_package_name'])) {
	$_SESSION['step3_package_name'] = $_POST['hidden_package_name'];
	$_SESSION['step3_package_price'] = $_POST['hidden_package_price'];
	
	//Update
	$item_array = ['item_id' => $_SESSION['step1_option_id']];
	foreach( $_SESSION['shopping_cart'] as $key => $value ) {
      if( $value['item_id']  == $item_array['item_id']) {
		  $_SESSION['shopping_cart'][$key]['item_step3_package_name'] = $_POST['hidden_package_name'];
		  $_SESSION['shopping_cart'][$key]['item_step3_package_price'] = $_POST['hidden_package_price'];
		  header("Location: basket.php");
		  
        }
    }
}
//Recall
	$item_array = ['item_id' => $_GET['Product_id']];
    foreach( $_SESSION['shopping_cart'] as $key => $value2 ) {
      if( $value2['item_id']  == $item_array['item_id']) {
		  $_SESSION['step1_option_type'] = $_SESSION['shopping_cart'][$key]['item_step1_option_type'];
		  $_SESSION['step1_option_name'] = $_SESSION['shopping_cart'][$key]['item_step1_option_name'];
		  $_SESSION['step1_option_price'] = $_SESSION['shopping_cart'][$key]['item_step1_option_price'];
		  
		  //step 2
		  $_SESSION['step2_option_hidden_alize_forte'] = $_SESSION['shopping_cart'][$key]['item_step2_option_hidden_alize_forte'];
		  $_SESSION['step2_option_hidden_alize_forte_price'] = $_SESSION['shopping_cart'][$key]['item_step2_option_hidden_alize_forte_price'];
		  $_SESSION['step2_option_hidden_option_all'] = $_SESSION['shopping_cart'][$key]['item_step2_option_hidden_option_all'];
		  $_SESSION['step2_option_hidden_option_all_price'] = $_SESSION['shopping_cart'][$key]['item_step2_option_hidden_option_all_price'];
		  $_SESSION['step2_option_hidden_option_btn'] = $_SESSION['shopping_cart'][$key]['item_step2_option_hidden_option_btn'];
		  $_SESSION['step2_option_hidden_option_tint_info'] = $_SESSION['shopping_cart'][$key]['item_step2_option_hidden_option_tint_info'];
		  
		  //3
		  $_SESSION['step3_package_name'] = $_SESSION['shopping_cart'][$key]['item_step3_package_name'];
		  $_SESSION['step3_package_price'] = $_SESSION['shopping_cart'][$key]['item_step3_package_price'];
		  
		  
		  
        }
    }
echo $_SESSION['step4_prescription_name'];
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Step4</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />	
<link rel="stylesheet" href="css/all.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
	
<?php include 'header.php' ?>
	
<div class="container">
		
		
		<div class="row">
			<?php
	
	$temp_product_id = $_SESSION['step1_option_id'];
		
		$fetch_query1 = mysqli_query($conn,"SELECT * FROM lenses_visions_price where id=1");
				while($row1=mysqli_fetch_array($fetch_query1,MYSQLI_ASSOC)) {
		?>
			<!-- Col1 -->
			<div class="col-sm-12 col-md-9 col-lg-9 step_1_main_rows">
				<!-- Col1 Start-->
				
				<div class="step1_col1 col-sm-12 col-md-12 col-lg-12 product_question_col step_1_main_rows" id="main_row">
					
					<!-- Col01 Start -->
					
					<div class="col-md-6 col-sm-6 col-lg-4 step4_div_main">
						<div class="step4_div">
							<h4 class="step4_heading">Send prescription Later</h4>
							<p class="step4_para">Do you still need an eye test or simply don’t have your prescription to hand? Send your prescription later via email, telephone or post.</p>
							<form method="post" action="basket.php">
							<!--Product Basic Info Start -->
							<input type="hidden" name="hidden_id" id="hidden_id" value="<?php echo $temp_product_id ?>" />
			<?php
			$fetch_query3s = mysqli_query($conn,"SELECT * FROM product where id=$temp_product_id AND active=1");
				while($row3s=mysqli_fetch_array($fetch_query3s,MYSQLI_ASSOC)) { ?>
				<input type="hidden" name="hidden_name" id="hidden_name" value="<?php echo $row3s['name']; ?>" />
				<input type="hidden" name="hidden_price" id="hidden_price" value="" />
				<input type="hidden" name="hidden_image" id="hidden_image" value="<?php echo $row3s['image']; ?>" />
			<?php } ?>
			<!--Step1-->
			<input type="hidden" name="step1_option_type" id="step1_option_type" value="<?php echo $_SESSION['step1_option_type']; ?>" />
			<input type="hidden" name="step1_option_name" id="step1_option_name" value="<?php echo $_SESSION['step1_option_name']; ?>" />
			<input type="hidden" name="step1_option_price" id="step1_option_price" value="<?php echo $_SESSION['step1_option_price']; ?>" />
			<!--Step2-->
			<input type="hidden" name="step2_option_hidden_alize_forte" id="step2_option_hidden_alize_forte" value="<?php echo $_SESSION['step2_option_hidden_alize_forte']; ?>" />
			<input type="hidden" name="step2_option_hidden_alize_forte_price" id="step2_option_hidden_alize_forte_price" value="<?php echo $_SESSION['step2_option_hidden_alize_forte_price']; ?>" />
			<input type="hidden" name="step2_option_hidden_option_all" id="step2_option_hidden_option_all" value="<?php echo $_SESSION['step2_option_hidden_option_all']; ?>" />
			<input type="hidden" name="step2_option_hidden_option_all_price" id="step2_option_hidden_option_all_price" value="<?php echo $_SESSION['step2_option_hidden_option_all_price']; ?>" />
			<input type="hidden" name="step2_option_hidden_option_btn" id="step2_option_hidden_option_btn" value="<?php echo $_SESSION['step2_option_hidden_option_btn']; ?>" />
			<input type="hidden" name="step2_option_hidden_option_tint_info" id="step2_option_hidden_option_tint_info" value="<?php echo $_SESSION['step2_option_hidden_option_tint_info']; ?>" />
			<!--Step3-->
			<input type="hidden" name="step3_package_name" id="step3_package_name" value="<?php echo $_SESSION['step3_package_name']; ?>" />
			<input type="hidden" name="step3_package_price" id="step3_package_price" value="<?php echo $_SESSION['step3_package_price']; ?>" />
			<!--Customer Info-->
			<input type="hidden" name="hidden_cust_id" id="cust_id" value="<?php echo $_SESSION['id']; ?>" />
			<!--Prescription Name-->
			<input type="hidden" name="step4_presc_name" id="presc_name" value="" />
							<!-- Product Basic Info End -->
							<input type="hidden" name="prescription_name" value="Send It Later" />
							<input type="hidden" name="edit" value="<?php echo $_GET['edit']; ?>" />
							<button type="submit" name="add_to_cart" class="step4_btn btn btn-info">SELECT</button>
							</form>
						</div>
					</div>
					
					<!-- Col01 End -->
					
					<!-- Col02 Start -->
					<div class="col-md-6 col-sm-6 col-lg-4 step4_div_main">
						<div class="step4_div">
							<h4 class="step4_heading">Enter new prescription</h4>
							<p class="step4_para">Enter your prescription here and one of our qualified opticians will check through your details.</p>
							<button type="button" id="new_prescription" class="step4_btn btn btn-info">SELECT</button>
						</div>
					</div>
					<!-- Col02 End -->
					
					<!-- Col03 Start -->
					<div class="col-md-6 col-sm-6 col-lg-4 step4_div_main">
						<div class="step4_div">
							<h4 class="step4_heading">Use saved prescription</h4>
							<p class="step4_para">Purchased from us before? If so, you can use an existing prescription saved to your Account here.</p>
							<button type="button" class="step4_btn btn btn-info" id="saved_prescription">SELECT</button>
						</div>
					</div>
					<!-- Col03 End -->
					
				
				</div>
				
				<!-- COl1 End -->
					
				
			</div>
			<!-- Col1 -->
			
			<form method="post" id="target" action="basket.php" >
			<!--Prescription Form-->
			<!-- Col1 -->
			<div class="col-sm-9 col-md-9 col-lg-9 step_4_main_rows step4_hide" id="new_prescription_detail">
				<a  href="#" class="" id="back">< GO BACK</a>
				
				<div class="col-sm-12 col-md-12 col-lg-12  prescription_main_col">
					<h5 class="myaccount_heading">PRESCRIPTION</h5>
					<p class="presc_txt">Enter your prescription below, or send it later.</p>
					<p class="presc_txt">All prescriptions will be checked by one of our opticians and verified for any potential errors or delays, and they may contact you if they need to discuss your details any further.</p>
				
				<div class="form-group row">
    				<label for="inputPassword" class="col-sm-2 col-form-label">Name:</label>
				<div class="col-sm-10">
				  <input type="text" name="prescription_name" id="prescription_name" class="form-control" id="inputPassword" placeholder="june2020" required>
				</div>
					
				</div>
				
				<div id="detail">
				<!-- Detail Right Start -->
				<table class="table">
				  
				  <tbody>
					  
					  <tr>
					  <th scope="row"></th>
					  <td class="presc_txt">Sphere (SPH) ⓘ </td>
					  <td class="presc_txt"> Cylinder (CYL) ⓘ	</td>
					  <td class="presc_txt"> Axis ⓘ	</td>
					  <td class="presc_txt"> Addition (ADD) ⓘ </td>
					</tr>
					  
					  
					  <tr>
					  <th scope="row">Right</th>
					  <td> </td>
					  <td> </td>
					  <td> </td>
					  <td> </td>
					</tr>
					  
					  
					<tr>
					  <th scope="row">Distance</th>
					  <td>
						  <select class="form-control form-control-sm" name="right_d_sphere">
						  <option value="-8.00">-8.00</option>
						  <option value="-7.75">-7.75</option>
						  <option value="-7.50">-7.50</option>
						  <option value="-7.25">-7.25</option>
						  <option value="-7.00">-7.00</option>
						  <option value="-6.75">-6.75</option>
						  <option value="-6.50">-6.50</option>
						  <option value="-6.25">-6.25</option>
						  <option value="-6.00">-6.00</option>
						  <option value="-5.75">-5.75</option>
						  <option value="-5.50">-5.50</option>
						  <option value="-5.25">-5.25</option>
						  <option value="-5.00">-5.00</option>
						  <option value="-4.75">-4.75</option>
						  <option value="-4.50">-4.50</option>
						  <option value="-4.25">-4.25</option>
						  <option value="-4.00">-4.00</option>
						  <option value="-3.75">-3.75</option>
						  <option value="-3.50">-3.50</option>
						  <option value="-3.25">-3.25</option>
						  <option value="-3.00">-3.00</option>
						  <option value="-2.75">-2.75</option>
						  <option value="-2.50">-2.50</option>
						  <option value="-2.25">-2.25</option>
						  <option value="-2.00">-2.00</option>
						  <option value="-1.75">-1.75</option>
						  <option value="-1.50">-1.50</option>
						  <option value="-1.25">-1.25</option>
						  <option value="-1.00">-1.00</option>
						  <option value="-0.75">-0.75</option>
						  <option value="-0.50">-0.50</option>
						  <option value="-0.25">-0.25</option>
						  <option value="" selected>+/-</option>
						  <option value="0.00">0.00</option>
						  <option value="INFINITY">&infin;</option>
						  <option value="PLANO">PLANO</option>
						  <option value="BALANCE">BALANCE</option>
						  <option value="+0.25">+0.25</option>
						  <option value="+0.50">+0.50</option>
						  <option value="+0.75">+0.75</option>
						  <option value="+1.00">+1.00</option>
						  <option value="+1.25">+1.25</option>
						  <option value="+1.50">+1.50</option>
						  <option value="+1.75">+1.75</option>
						  <option value="+2.00">+2.00</option>
						  <option value="+2.25">+2.25</option>
						  <option value="+2.50">+2.50</option>
						  <option value="+2.75">+2.75</option>
						  <option value="+3.00">+3.00</option>
						  <option value="+3.25">+3.25</option>
						  <option value="+3.50">+3.50</option>
						  <option value="+3.75">+3.75</option>
						  <option value="+4.00">+4.00</option>
						  <option value="+4.25">+4.25</option>
						  <option value="+4.50">+4.50</option>
						  <option value="+4.75">+4.75</option>
						  <option value="+5.00">+5.00</option>
						  <option value="+5.25">+5.25</option>
						  <option value="+5.50">+5.50</option>
						  <option value="+5.75">+5.75</option>
						  <option value="+6.00">+6.00</option>
						  <option value="+6.25">+6.25</option>
						  <option value="+6.50">+6.50</option>
						  <option value="+6.75">+6.75</option>
						  <option value="+7.00">+7.00</option>
						  <option value="+7.25">+7.25</option>
						  <option value="+7.50">+7.50</option>
						  <option value="+7.75">+7.75</option>
						  <option value="+8.00">+8.00</option>
						</select>
					  </td>
					  <td>
	   				  <select class="form-control form-control-sm" name="right_d_cylinder">
						  <option value="-4.00">-4.00</option>
						  <option value="-3.75">-3.75</option>
						  <option value="-3.50">-3.50</option>
						  <option value="-3.25">-3.25</option>
						  <option value="-3.00">-3.00</option>
						  <option value="-2.75">-2.75</option>
						  <option value="-2.50">-2.50</option>
						  <option value="-2.25">-2.25</option>
						  <option value="-2.00">-2.00</option>
						  <option value="-1.75">-1.75</option>
						  <option value="-1.50">-1.50</option>
						  <option value="-1.25">-1.25</option>
						  <option value="-1.00">-1.00</option>
						  <option value="-0.75">-0.75</option>
						  <option value="-0.50">-0.50</option>
						  <option value="-0.25">-0.25</option>
						  <option value="" selected>+/-</option>
						  <option value="0.00">0.00</option>
						  <option value="INFINITY">&infin;</option>
						  <option value="PLANO">PLANO</option>
						  <option value="BALANCE">BALANCE</option>
						  <option value="DS">DS</option>
						  <option value="+0.25">+0.25</option>
						  <option value="+0.50">+0.50</option>
						  <option value="+0.75">+0.75</option>
						  <option value="+1.00">+1.00</option>
						  <option value="+1.25">+1.25</option>
						  <option value="+1.50">+1.50</option>
						  <option value="+1.75">+1.75</option>
						  <option value="+2.00">+2.00</option>
						  <option value="+2.25">+2.25</option>
						  <option value="+2.50">+2.50</option>
						  <option value="+2.75">+2.75</option>
						  <option value="+3.00">+3.00</option>
						  <option value="+3.25">+3.25</option>
						  <option value="+3.50">+3.50</option>
						  <option value="+3.75">+3.75</option>
						  <option value="+4.00">+4.00</option>
						</select>
					  </td>
					  <td>
						<select class="form-control form-control-sm" name="right_d_axis">
							<option value="">Select Axis</option>
						  	<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
							<option value="32">32</option>
							<option value="33">33</option>
							<option value="34">34</option>
							<option value="35">35</option>
							<option value="36">36</option>
							<option value="37">37</option>
							<option value="38">38</option>
							<option value="39">39</option>
							<option value="40">40</option>
							<option value="41">41</option>
							<option value="42">42</option>
							<option value="43">43</option>
							<option value="44">44</option>
							<option value="45">45</option>
							<option value="46">46</option>
							<option value="47">47</option>
							<option value="48">48</option>
							<option value="49">49</option>
							<option value="50">50</option>
							<option value="51">51</option>
							<option value="52">52</option>
							<option value="53">53</option>
							<option value="54">54</option>
							<option value="55">55</option>
							<option value="56">56</option>
							<option value="57">57</option>
							<option value="58">58</option>
							<option value="59">59</option>
							<option value="60">60</option>
							<option value="61">61</option>
							<option value="62">62</option>
							<option value="63">63</option>
							<option value="64">64</option>
							<option value="65">65</option>
							<option value="66">66</option>
							<option value="67">67</option>
							<option value="68">68</option>
							<option value="69">69</option>
							<option value="70">70</option>
							<option value="71">71</option>
							<option value="72">72</option>
							<option value="73">73</option>
							<option value="74">74</option>
							<option value="75">75</option>
							<option value="76">76</option>
							<option value="77">77</option>
							<option value="78">78</option>
							<option value="79">79</option>
							<option value="80">80</option>
							<option value="81">81</option>
							<option value="82">82</option>
							<option value="83">83</option>
							<option value="84">84</option>
							<option value="85">85</option>
							<option value="86">86</option>
							<option value="87">87</option>
							<option value="88">88</option>
							<option value="89">89</option>
							<option value="90">90</option>
							<option value="91">91</option>
							<option value="92">92</option>
							<option value="93">93</option>
							<option value="94">94</option>
							<option value="95">95</option>
							<option value="96">96</option>
							<option value="97">97</option>
							<option value="98">98</option>
							<option value="99">99</option>
							<option value="100">100</option>
							<option value="101">101</option>
							<option value="102">102</option>
							<option value="103">103</option>
							<option value="104">104</option>
							<option value="105">105</option>
							<option value="106">106</option>
							<option value="107">107</option>
							<option value="108">108</option>
							<option value="109">109</option>
							<option value="110">110</option>
							<option value="111">111</option>
							<option value="112">112</option>
							<option value="113">113</option>
							<option value="114">114</option>
							<option value="115">115</option>
							<option value="116">116</option>
							<option value="117">117</option>
							<option value="118">118</option>
							<option value="119">119</option>
							<option value="120">120</option>
							<option value="121">121</option>
							<option value="122">122</option>
							<option value="123">123</option>
							<option value="124">124</option>
							<option value="125">125</option>
							<option value="126">126</option>
							<option value="127">127</option>
							<option value="128">128</option>
							<option value="129">129</option>
							<option value="130">130</option>
							<option value="131">131</option>
							<option value="132">132</option>
							<option value="133">133</option>
							<option value="134">134</option>
							<option value="135">135</option>
							<option value="136">136</option>
							<option value="137">137</option>
							<option value="138">138</option>
							<option value="139">139</option>
							<option value="140">140</option>
							<option value="141">141</option>
							<option value="142">142</option>
							<option value="143">143</option>
							<option value="144">144</option>
							<option value="145">145</option>
							<option value="146">146</option>
							<option value="147">147</option>
							<option value="148">148</option>
							<option value="149">149</option>
							<option value="150">150</option>
							<option value="151">151</option>
							<option value="152">152</option>
							<option value="153">153</option>
							<option value="154">154</option>
							<option value="155">155</option>
							<option value="156">156</option>
							<option value="157">157</option>
							<option value="158">158</option>
							<option value="159">159</option>
							<option value="160">160</option>
							<option value="161">161</option>
							<option value="162">162</option>
							<option value="163">163</option>
							<option value="164">164</option>
							<option value="165">165</option>
							<option value="166">166</option>
							<option value="167">167</option>
							<option value="168">168</option>
							<option value="169">169</option>
							<option value="170">170</option>
							<option value="171">171</option>
							<option value="172">172</option>
							<option value="173">173</option>
							<option value="174">174</option>
							<option value="175">175</option>
							<option value="176">176</option>
							<option value="177">177</option>
							<option value="178">178</option>
							<option value="179">179</option>
							<option value="180">180</option>
						</select>

					  </td>
					  <td>
						
					  </td>
					</tr>
					<tr>
					  <th scope="row">Intermediate	</th>
					  <td>
						  <select class="form-control form-control-sm" name="right_i_sphere">
						  <option value="-8.00">-8.00</option>
						  <option value="-7.75">-7.75</option>
						  <option value="-7.50">-7.50</option>
						  <option value="-7.25">-7.25</option>
						  <option value="-7.00">-7.00</option>
						  <option value="-6.75">-6.75</option>
						  <option value="-6.50">-6.50</option>
						  <option value="-6.25">-6.25</option>
						  <option value="-6.00">-6.00</option>
						  <option value="-5.75">-5.75</option>
						  <option value="-5.50">-5.50</option>
						  <option value="-5.25">-5.25</option>
						  <option value="-5.00">-5.00</option>
						  <option value="-4.75">-4.75</option>
						  <option value="-4.50">-4.50</option>
						  <option value="-4.25">-4.25</option>
						  <option value="-4.00">-4.00</option>
						  <option value="-3.75">-3.75</option>
						  <option value="-3.50">-3.50</option>
						  <option value="-3.25">-3.25</option>
						  <option value="-3.00">-3.00</option>
						  <option value="-2.75">-2.75</option>
						  <option value="-2.50">-2.50</option>
						  <option value="-2.25">-2.25</option>
						  <option value="-2.00">-2.00</option>
						  <option value="-1.75">-1.75</option>
						  <option value="-1.50">-1.50</option>
						  <option value="-1.25">-1.25</option>
						  <option value="-1.00">-1.00</option>
						  <option value="-0.75">-0.75</option>
						  <option value="-0.50">-0.50</option>
						  <option value="-0.25">-0.25</option>
						  <option value="" selected>+/-</option>
						  <option value="0.00">0.00</option>
						  <option value="INFINITY">&infin;</option>
						  <option value="PLANO">PLANO</option>
						  <option value="BALANCE">BALANCE</option>
						  <option value="+0.25">+0.25</option>
						  <option value="+0.50">+0.50</option>
						  <option value="+0.75">+0.75</option>
						  <option value="+1.00">+1.00</option>
						  <option value="+1.25">+1.25</option>
						  <option value="+1.50">+1.50</option>
						  <option value="+1.75">+1.75</option>
						  <option value="+2.00">+2.00</option>
						  <option value="+2.25">+2.25</option>
						  <option value="+2.50">+2.50</option>
						  <option value="+2.75">+2.75</option>
						  <option value="+3.00">+3.00</option>
						  <option value="+3.25">+3.25</option>
						  <option value="+3.50">+3.50</option>
						  <option value="+3.75">+3.75</option>
						  <option value="+4.00">+4.00</option>
						  <option value="+4.25">+4.25</option>
						  <option value="+4.50">+4.50</option>
						  <option value="+4.75">+4.75</option>
						  <option value="+5.00">+5.00</option>
						  <option value="+5.25">+5.25</option>
						  <option value="+5.50">+5.50</option>
						  <option value="+5.75">+5.75</option>
						  <option value="+6.00">+6.00</option>
						  <option value="+6.25">+6.25</option>
						  <option value="+6.50">+6.50</option>
						  <option value="+6.75">+6.75</option>
						  <option value="+7.00">+7.00</option>
						  <option value="+7.25">+7.25</option>
						  <option value="+7.50">+7.50</option>
						  <option value="+7.75">+7.75</option>
						  <option value="+8.00">+8.00</option>
						</select>
					  </td>
					  <td>
		    			 <select class="form-control form-control-sm" name="right_i_cylinder">
						  <option value="-4.00">-4.00</option>
						  <option value="-3.75">-3.75</option>
						  <option value="-3.50">-3.50</option>
						  <option value="-3.25">-3.25</option>
						  <option value="-3.00">-3.00</option>
						  <option value="-2.75">-2.75</option>
						  <option value="-2.50">-2.50</option>
						  <option value="-2.25">-2.25</option>
						  <option value="-2.00">-2.00</option>
						  <option value="-1.75">-1.75</option>
						  <option value="-1.50">-1.50</option>
						  <option value="-1.25">-1.25</option>
						  <option value="-1.00">-1.00</option>
						  <option value="-0.75">-0.75</option>
						  <option value="-0.50">-0.50</option>
						  <option value="-0.25">-0.25</option>
						  <option value="" selected>+/-</option>
						  <option value="0.00">0.00</option>
						  <option value="INFINITY">&infin;</option>
						  <option value="PLANO">PLANO</option>
						  <option value="BALANCE">BALANCE</option>
						  <option value="DS">DS</option>
						  <option value="+0.25">+0.25</option>
						  <option value="+0.50">+0.50</option>
						  <option value="+0.75">+0.75</option>
						  <option value="+1.00">+1.00</option>
						  <option value="+1.25">+1.25</option>
						  <option value="+1.50">+1.50</option>
						  <option value="+1.75">+1.75</option>
						  <option value="+2.00">+2.00</option>
						  <option value="+2.25">+2.25</option>
						  <option value="+2.50">+2.50</option>
						  <option value="+2.75">+2.75</option>
						  <option value="+3.00">+3.00</option>
						  <option value="+3.25">+3.25</option>
						  <option value="+3.50">+3.50</option>
						  <option value="+3.75">+3.75</option>
						  <option value="+4.00">+4.00</option>
						</select>
					  </td>
					  <td><select class="form-control form-control-sm" name="right_i_axis">
						  	<option value="">Select Axis</option>
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
							<option value="32">32</option>
							<option value="33">33</option>
							<option value="34">34</option>
							<option value="35">35</option>
							<option value="36">36</option>
							<option value="37">37</option>
							<option value="38">38</option>
							<option value="39">39</option>
							<option value="40">40</option>
							<option value="41">41</option>
							<option value="42">42</option>
							<option value="43">43</option>
							<option value="44">44</option>
							<option value="45">45</option>
							<option value="46">46</option>
							<option value="47">47</option>
							<option value="48">48</option>
							<option value="49">49</option>
							<option value="50">50</option>
							<option value="51">51</option>
							<option value="52">52</option>
							<option value="53">53</option>
							<option value="54">54</option>
							<option value="55">55</option>
							<option value="56">56</option>
							<option value="57">57</option>
							<option value="58">58</option>
							<option value="59">59</option>
							<option value="60">60</option>
							<option value="61">61</option>
							<option value="62">62</option>
							<option value="63">63</option>
							<option value="64">64</option>
							<option value="65">65</option>
							<option value="66">66</option>
							<option value="67">67</option>
							<option value="68">68</option>
							<option value="69">69</option>
							<option value="70">70</option>
							<option value="71">71</option>
							<option value="72">72</option>
							<option value="73">73</option>
							<option value="74">74</option>
							<option value="75">75</option>
							<option value="76">76</option>
							<option value="77">77</option>
							<option value="78">78</option>
							<option value="79">79</option>
							<option value="80">80</option>
							<option value="81">81</option>
							<option value="82">82</option>
							<option value="83">83</option>
							<option value="84">84</option>
							<option value="85">85</option>
							<option value="86">86</option>
							<option value="87">87</option>
							<option value="88">88</option>
							<option value="89">89</option>
							<option value="90">90</option>
							<option value="91">91</option>
							<option value="92">92</option>
							<option value="93">93</option>
							<option value="94">94</option>
							<option value="95">95</option>
							<option value="96">96</option>
							<option value="97">97</option>
							<option value="98">98</option>
							<option value="99">99</option>
							<option value="100">100</option>
							<option value="101">101</option>
							<option value="102">102</option>
							<option value="103">103</option>
							<option value="104">104</option>
							<option value="105">105</option>
							<option value="106">106</option>
							<option value="107">107</option>
							<option value="108">108</option>
							<option value="109">109</option>
							<option value="110">110</option>
							<option value="111">111</option>
							<option value="112">112</option>
							<option value="113">113</option>
							<option value="114">114</option>
							<option value="115">115</option>
							<option value="116">116</option>
							<option value="117">117</option>
							<option value="118">118</option>
							<option value="119">119</option>
							<option value="120">120</option>
							<option value="121">121</option>
							<option value="122">122</option>
							<option value="123">123</option>
							<option value="124">124</option>
							<option value="125">125</option>
							<option value="126">126</option>
							<option value="127">127</option>
							<option value="128">128</option>
							<option value="129">129</option>
							<option value="130">130</option>
							<option value="131">131</option>
							<option value="132">132</option>
							<option value="133">133</option>
							<option value="134">134</option>
							<option value="135">135</option>
							<option value="136">136</option>
							<option value="137">137</option>
							<option value="138">138</option>
							<option value="139">139</option>
							<option value="140">140</option>
							<option value="141">141</option>
							<option value="142">142</option>
							<option value="143">143</option>
							<option value="144">144</option>
							<option value="145">145</option>
							<option value="146">146</option>
							<option value="147">147</option>
							<option value="148">148</option>
							<option value="149">149</option>
							<option value="150">150</option>
							<option value="151">151</option>
							<option value="152">152</option>
							<option value="153">153</option>
							<option value="154">154</option>
							<option value="155">155</option>
							<option value="156">156</option>
							<option value="157">157</option>
							<option value="158">158</option>
							<option value="159">159</option>
							<option value="160">160</option>
							<option value="161">161</option>
							<option value="162">162</option>
							<option value="163">163</option>
							<option value="164">164</option>
							<option value="165">165</option>
							<option value="166">166</option>
							<option value="167">167</option>
							<option value="168">168</option>
							<option value="169">169</option>
							<option value="170">170</option>
							<option value="171">171</option>
							<option value="172">172</option>
							<option value="173">173</option>
							<option value="174">174</option>
							<option value="175">175</option>
							<option value="176">176</option>
							<option value="177">177</option>
							<option value="178">178</option>
							<option value="179">179</option>
							<option value="180">180</option>
						</select>
						</td>
					  <td>
						<select class="form-control form-control-sm" name="right_i_near_addition">
						  <option value="" selected>--</option>
						  <option value="+0.50">+0.50</option>
						  <option value="+0.75">+0.75</option>
						  <option value="+1.00">+1.00</option>
						  <option value="+1.25">+1.25</option>
						  <option value="+1.50">+1.50</option>
						  <option value="+1.75">+1.75</option>
						  <option value="+2.00">+2.00</option>
						  <option value="+2.25">+2.25</option>
						  <option value="+2.50">+2.50</option>
						  <option value="+2.75">+2.75</option>
						  <option value="+3.00">+3.00</option>
						  <option value="+3.25">+3.25</option>
						  <option value="+3.50">+3.50</option>
						</select>
					  </td>	
					</tr>
					<tr>
					  <th scope="row">Near</th>
					  <td><select class="form-control form-control-sm" name="right_n_sphere">
						  <option value="-8.00">-8.00</option>
						  <option value="-7.75">-7.75</option>
						  <option value="-7.50">-7.50</option>
						  <option value="-7.25">-7.25</option>
						  <option value="-7.00">-7.00</option>
						  <option value="-6.75">-6.75</option>
						  <option value="-6.50">-6.50</option>
						  <option value="-6.25">-6.25</option>
						  <option value="-6.00">-6.00</option>
						  <option value="-5.75">-5.75</option>
						  <option value="-5.50">-5.50</option>
						  <option value="-5.25">-5.25</option>
						  <option value="-5.00">-5.00</option>
						  <option value="-4.75">-4.75</option>
						  <option value="-4.50">-4.50</option>
						  <option value="-4.25">-4.25</option>
						  <option value="-4.00">-4.00</option>
						  <option value="-3.75">-3.75</option>
						  <option value="-3.50">-3.50</option>
						  <option value="-3.25">-3.25</option>
						  <option value="-3.00">-3.00</option>
						  <option value="-2.75">-2.75</option>
						  <option value="-2.50">-2.50</option>
						  <option value="-2.25">-2.25</option>
						  <option value="-2.00">-2.00</option>
						  <option value="-1.75">-1.75</option>
						  <option value="-1.50">-1.50</option>
						  <option value="-1.25">-1.25</option>
						  <option value="-1.00">-1.00</option>
						  <option value="-0.75">-0.75</option>
						  <option value="-0.50">-0.50</option>
						  <option value="-0.25">-0.25</option>
						  <option value="" selected>+/-</option>
						  <option value="0.00">0.00</option>
						  <option value="INFINITY">&infin;</option>
						  <option value="PLANO">PLANO</option>
						  <option value="BALANCE">BALANCE</option>
						  <option value="+0.25">+0.25</option>
						  <option value="+0.50">+0.50</option>
						  <option value="+0.75">+0.75</option>
						  <option value="+1.00">+1.00</option>
						  <option value="+1.25">+1.25</option>
						  <option value="+1.50">+1.50</option>
						  <option value="+1.75">+1.75</option>
						  <option value="+2.00">+2.00</option>
						  <option value="+2.25">+2.25</option>
						  <option value="+2.50">+2.50</option>
						  <option value="+2.75">+2.75</option>
						  <option value="+3.00">+3.00</option>
						  <option value="+3.25">+3.25</option>
						  <option value="+3.50">+3.50</option>
						  <option value="+3.75">+3.75</option>
						  <option value="+4.00">+4.00</option>
						  <option value="+4.25">+4.25</option>
						  <option value="+4.50">+4.50</option>
						  <option value="+4.75">+4.75</option>
						  <option value="+5.00">+5.00</option>
						  <option value="+5.25">+5.25</option>
						  <option value="+5.50">+5.50</option>
						  <option value="+5.75">+5.75</option>
						  <option value="+6.00">+6.00</option>
						  <option value="+6.25">+6.25</option>
						  <option value="+6.50">+6.50</option>
						  <option value="+6.75">+6.75</option>
						  <option value="+7.00">+7.00</option>
						  <option value="+7.25">+7.25</option>
						  <option value="+7.50">+7.50</option>
						  <option value="+7.75">+7.75</option>
						  <option value="+8.00">+8.00</option>
						</select></td>
					  <td>
						<select class="form-control form-control-sm" name="right_n_cylinder">
						  <option value="-4.00">-4.00</option>
						  <option value="-3.75">-3.75</option>
						  <option value="-3.50">-3.50</option>
						  <option value="-3.25">-3.25</option>
						  <option value="-3.00">-3.00</option>
						  <option value="-2.75">-2.75</option>
						  <option value="-2.50">-2.50</option>
						  <option value="-2.25">-2.25</option>
						  <option value="-2.00">-2.00</option>
						  <option value="-1.75">-1.75</option>
						  <option value="-1.50">-1.50</option>
						  <option value="-1.25">-1.25</option>
						  <option value="-1.00">-1.00</option>
						  <option value="-0.75">-0.75</option>
						  <option value="-0.50">-0.50</option>
						  <option value="-0.25">-0.25</option>
						  <option value="" selected>+/-</option>
						  <option value="0.00">0.00</option>
						  <option value="INFINITY">&infin;</option>
						  <option value="PLANO">PLANO</option>
						  <option value="BALANCE">BALANCE</option>
						  <option value="DS">DS</option>
						  <option value="+0.25">+0.25</option>
						  <option value="+0.50">+0.50</option>
						  <option value="+0.75">+0.75</option>
						  <option value="+1.00">+1.00</option>
						  <option value="+1.25">+1.25</option>
						  <option value="+1.50">+1.50</option>
						  <option value="+1.75">+1.75</option>
						  <option value="+2.00">+2.00</option>
						  <option value="+2.25">+2.25</option>
						  <option value="+2.50">+2.50</option>
						  <option value="+2.75">+2.75</option>
						  <option value="+3.00">+3.00</option>
						  <option value="+3.25">+3.25</option>
						  <option value="+3.50">+3.50</option>
						  <option value="+3.75">+3.75</option>
						  <option value="+4.00">+4.00</option>
						</select>
					  </td>
					  <td><select class="form-control form-control-sm" name="right_n_axis">
						  	<option value="">Select Axis</option>
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
							<option value="32">32</option>
							<option value="33">33</option>
							<option value="34">34</option>
							<option value="35">35</option>
							<option value="36">36</option>
							<option value="37">37</option>
							<option value="38">38</option>
							<option value="39">39</option>
							<option value="40">40</option>
							<option value="41">41</option>
							<option value="42">42</option>
							<option value="43">43</option>
							<option value="44">44</option>
							<option value="45">45</option>
							<option value="46">46</option>
							<option value="47">47</option>
							<option value="48">48</option>
							<option value="49">49</option>
							<option value="50">50</option>
							<option value="51">51</option>
							<option value="52">52</option>
							<option value="53">53</option>
							<option value="54">54</option>
							<option value="55">55</option>
							<option value="56">56</option>
							<option value="57">57</option>
							<option value="58">58</option>
							<option value="59">59</option>
							<option value="60">60</option>
							<option value="61">61</option>
							<option value="62">62</option>
							<option value="63">63</option>
							<option value="64">64</option>
							<option value="65">65</option>
							<option value="66">66</option>
							<option value="67">67</option>
							<option value="68">68</option>
							<option value="69">69</option>
							<option value="70">70</option>
							<option value="71">71</option>
							<option value="72">72</option>
							<option value="73">73</option>
							<option value="74">74</option>
							<option value="75">75</option>
							<option value="76">76</option>
							<option value="77">77</option>
							<option value="78">78</option>
							<option value="79">79</option>
							<option value="80">80</option>
							<option value="81">81</option>
							<option value="82">82</option>
							<option value="83">83</option>
							<option value="84">84</option>
							<option value="85">85</option>
							<option value="86">86</option>
							<option value="87">87</option>
							<option value="88">88</option>
							<option value="89">89</option>
							<option value="90">90</option>
							<option value="91">91</option>
							<option value="92">92</option>
							<option value="93">93</option>
							<option value="94">94</option>
							<option value="95">95</option>
							<option value="96">96</option>
							<option value="97">97</option>
							<option value="98">98</option>
							<option value="99">99</option>
							<option value="100">100</option>
							<option value="101">101</option>
							<option value="102">102</option>
							<option value="103">103</option>
							<option value="104">104</option>
							<option value="105">105</option>
							<option value="106">106</option>
							<option value="107">107</option>
							<option value="108">108</option>
							<option value="109">109</option>
							<option value="110">110</option>
							<option value="111">111</option>
							<option value="112">112</option>
							<option value="113">113</option>
							<option value="114">114</option>
							<option value="115">115</option>
							<option value="116">116</option>
							<option value="117">117</option>
							<option value="118">118</option>
							<option value="119">119</option>
							<option value="120">120</option>
							<option value="121">121</option>
							<option value="122">122</option>
							<option value="123">123</option>
							<option value="124">124</option>
							<option value="125">125</option>
							<option value="126">126</option>
							<option value="127">127</option>
							<option value="128">128</option>
							<option value="129">129</option>
							<option value="130">130</option>
							<option value="131">131</option>
							<option value="132">132</option>
							<option value="133">133</option>
							<option value="134">134</option>
							<option value="135">135</option>
							<option value="136">136</option>
							<option value="137">137</option>
							<option value="138">138</option>
							<option value="139">139</option>
							<option value="140">140</option>
							<option value="141">141</option>
							<option value="142">142</option>
							<option value="143">143</option>
							<option value="144">144</option>
							<option value="145">145</option>
							<option value="146">146</option>
							<option value="147">147</option>
							<option value="148">148</option>
							<option value="149">149</option>
							<option value="150">150</option>
							<option value="151">151</option>
							<option value="152">152</option>
							<option value="153">153</option>
							<option value="154">154</option>
							<option value="155">155</option>
							<option value="156">156</option>
							<option value="157">157</option>
							<option value="158">158</option>
							<option value="159">159</option>
							<option value="160">160</option>
							<option value="161">161</option>
							<option value="162">162</option>
							<option value="163">163</option>
							<option value="164">164</option>
							<option value="165">165</option>
							<option value="166">166</option>
							<option value="167">167</option>
							<option value="168">168</option>
							<option value="169">169</option>
							<option value="170">170</option>
							<option value="171">171</option>
							<option value="172">172</option>
							<option value="173">173</option>
							<option value="174">174</option>
							<option value="175">175</option>
							<option value="176">176</option>
							<option value="177">177</option>
							<option value="178">178</option>
							<option value="179">179</option>
							<option value="180">180</option>
						</select>
						</td>
					  <td>
						<select class="form-control form-control-sm" name="right_n_near_addition">
						  <option value="" selected>--</option>
						  <option value="+0.50">+0.50</option>
						  <option value="+0.75">+0.75</option>
						  <option value="+1.00">+1.00</option>
						  <option value="+1.25">+1.25</option>
						  <option value="+1.50">+1.50</option>
						  <option value="+1.75">+1.75</option>
						  <option value="+2.00">+2.00</option>
						  <option value="+2.25">+2.25</option>
						  <option value="+2.50">+2.50</option>
						  <option value="+2.75">+2.75</option>
						  <option value="+3.00">+3.00</option>
						  <option value="+3.25">+3.25</option>
						  <option value="+3.50">+3.50</option>
						</select>
					  </td>	
					</tr>
					 
					
					  
				  </tbody>
				</table>
				<!-- Detail Right End -->
				
				<!-- Detail Left Start -->
				<table class="table">
				  
				  <tbody>
					  
					  <tr>
					  <th scope="row"></th>
					  <td class="presc_txt ">Sphere (SPH) ⓘ </td>
					  <td class="presc_txt "> Cylinder (CYL) ⓘ	</td>
					  <td class="presc_txt "> Axis ⓘ	</td>
					  <td class="presc_txt"> Addition (ADD) ⓘ </td>
					</tr>
					  
					  
					  <tr>
					  <th scope="row">Left</th>
					  <td> </td>
					  <td> </td>
					  <td> </td>
					  <td> </td>
					</tr>
					  
					  
					<tr>
					  <th scope="row">Distance</th>
					  <td>
						  <select class="form-control form-control-sm" name="left_d_sphere">
						  <option value="-8.00">-8.00</option>
						  <option value="-7.75">-7.75</option>
						  <option value="-7.50">-7.50</option>
						  <option value="-7.25">-7.25</option>
						  <option value="-7.00">-7.00</option>
						  <option value="-6.75">-6.75</option>
						  <option value="-6.50">-6.50</option>
						  <option value="-6.25">-6.25</option>
						  <option value="-6.00">-6.00</option>
						  <option value="-5.75">-5.75</option>
						  <option value="-5.50">-5.50</option>
						  <option value="-5.25">-5.25</option>
						  <option value="-5.00">-5.00</option>
						  <option value="-4.75">-4.75</option>
						  <option value="-4.50">-4.50</option>
						  <option value="-4.25">-4.25</option>
						  <option value="-4.00">-4.00</option>
						  <option value="-3.75">-3.75</option>
						  <option value="-3.50">-3.50</option>
						  <option value="-3.25">-3.25</option>
						  <option value="-3.00">-3.00</option>
						  <option value="-2.75">-2.75</option>
						  <option value="-2.50">-2.50</option>
						  <option value="-2.25">-2.25</option>
						  <option value="-2.00">-2.00</option>
						  <option value="-1.75">-1.75</option>
						  <option value="-1.50">-1.50</option>
						  <option value="-1.25">-1.25</option>
						  <option value="-1.00">-1.00</option>
						  <option value="-0.75">-0.75</option>
						  <option value="-0.50">-0.50</option>
						  <option value="-0.25">-0.25</option>
						  <option value="" selected>+/-</option>
						  <option value="0.00">0.00</option>
						  <option value="INFINITY">&infin;</option>
						  <option value="PLANO">PLANO</option>
						  <option value="BALANCE">BALANCE</option>
						  <option value="+0.25">+0.25</option>
						  <option value="+0.50">+0.50</option>
						  <option value="+0.75">+0.75</option>
						  <option value="+1.00">+1.00</option>
						  <option value="+1.25">+1.25</option>
						  <option value="+1.50">+1.50</option>
						  <option value="+1.75">+1.75</option>
						  <option value="+2.00">+2.00</option>
						  <option value="+2.25">+2.25</option>
						  <option value="+2.50">+2.50</option>
						  <option value="+2.75">+2.75</option>
						  <option value="+3.00">+3.00</option>
						  <option value="+3.25">+3.25</option>
						  <option value="+3.50">+3.50</option>
						  <option value="+3.75">+3.75</option>
						  <option value="+4.00">+4.00</option>
						  <option value="+4.25">+4.25</option>
						  <option value="+4.50">+4.50</option>
						  <option value="+4.75">+4.75</option>
						  <option value="+5.00">+5.00</option>
						  <option value="+5.25">+5.25</option>
						  <option value="+5.50">+5.50</option>
						  <option value="+5.75">+5.75</option>
						  <option value="+6.00">+6.00</option>
						  <option value="+6.25">+6.25</option>
						  <option value="+6.50">+6.50</option>
						  <option value="+6.75">+6.75</option>
						  <option value="+7.00">+7.00</option>
						  <option value="+7.25">+7.25</option>
						  <option value="+7.50">+7.50</option>
						  <option value="+7.75">+7.75</option>
						  <option value="+8.00">+8.00</option>
						</select>
					  </td>
					  <td>
	   				  <select class="form-control form-control-sm" name="left_d_cylinder">
						  <option value="-4.00">-4.00</option>
						  <option value="-3.75">-3.75</option>
						  <option value="-3.50">-3.50</option>
						  <option value="-3.25">-3.25</option>
						  <option value="-3.00">-3.00</option>
						  <option value="-2.75">-2.75</option>
						  <option value="-2.50">-2.50</option>
						  <option value="-2.25">-2.25</option>
						  <option value="-2.00">-2.00</option>
						  <option value="-1.75">-1.75</option>
						  <option value="-1.50">-1.50</option>
						  <option value="-1.25">-1.25</option>
						  <option value="-1.00">-1.00</option>
						  <option value="-0.75">-0.75</option>
						  <option value="-0.50">-0.50</option>
						  <option value="-0.25">-0.25</option>
						  <option value="" selected>+/-</option>
						  <option value="0.00">0.00</option>
						  <option value="INFINITY">&infin;</option>
						  <option value="PLANO">PLANO</option>
						  <option value="BALANCE">BALANCE</option>
						  <option value="DS">DS</option>
						  <option value="+0.25">+0.25</option>
						  <option value="+0.50">+0.50</option>
						  <option value="+0.75">+0.75</option>
						  <option value="+1.00">+1.00</option>
						  <option value="+1.25">+1.25</option>
						  <option value="+1.50">+1.50</option>
						  <option value="+1.75">+1.75</option>
						  <option value="+2.00">+2.00</option>
						  <option value="+2.25">+2.25</option>
						  <option value="+2.50">+2.50</option>
						  <option value="+2.75">+2.75</option>
						  <option value="+3.00">+3.00</option>
						  <option value="+3.25">+3.25</option>
						  <option value="+3.50">+3.50</option>
						  <option value="+3.75">+3.75</option>
						  <option value="+4.00">+4.00</option>
						</select>
					  </td>
					  <td>
						<select class="form-control form-control-sm" name="left_d_axis">
							<option value="">Select Axis</option>
						  	<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
							<option value="32">32</option>
							<option value="33">33</option>
							<option value="34">34</option>
							<option value="35">35</option>
							<option value="36">36</option>
							<option value="37">37</option>
							<option value="38">38</option>
							<option value="39">39</option>
							<option value="40">40</option>
							<option value="41">41</option>
							<option value="42">42</option>
							<option value="43">43</option>
							<option value="44">44</option>
							<option value="45">45</option>
							<option value="46">46</option>
							<option value="47">47</option>
							<option value="48">48</option>
							<option value="49">49</option>
							<option value="50">50</option>
							<option value="51">51</option>
							<option value="52">52</option>
							<option value="53">53</option>
							<option value="54">54</option>
							<option value="55">55</option>
							<option value="56">56</option>
							<option value="57">57</option>
							<option value="58">58</option>
							<option value="59">59</option>
							<option value="60">60</option>
							<option value="61">61</option>
							<option value="62">62</option>
							<option value="63">63</option>
							<option value="64">64</option>
							<option value="65">65</option>
							<option value="66">66</option>
							<option value="67">67</option>
							<option value="68">68</option>
							<option value="69">69</option>
							<option value="70">70</option>
							<option value="71">71</option>
							<option value="72">72</option>
							<option value="73">73</option>
							<option value="74">74</option>
							<option value="75">75</option>
							<option value="76">76</option>
							<option value="77">77</option>
							<option value="78">78</option>
							<option value="79">79</option>
							<option value="80">80</option>
							<option value="81">81</option>
							<option value="82">82</option>
							<option value="83">83</option>
							<option value="84">84</option>
							<option value="85">85</option>
							<option value="86">86</option>
							<option value="87">87</option>
							<option value="88">88</option>
							<option value="89">89</option>
							<option value="90">90</option>
							<option value="91">91</option>
							<option value="92">92</option>
							<option value="93">93</option>
							<option value="94">94</option>
							<option value="95">95</option>
							<option value="96">96</option>
							<option value="97">97</option>
							<option value="98">98</option>
							<option value="99">99</option>
							<option value="100">100</option>
							<option value="101">101</option>
							<option value="102">102</option>
							<option value="103">103</option>
							<option value="104">104</option>
							<option value="105">105</option>
							<option value="106">106</option>
							<option value="107">107</option>
							<option value="108">108</option>
							<option value="109">109</option>
							<option value="110">110</option>
							<option value="111">111</option>
							<option value="112">112</option>
							<option value="113">113</option>
							<option value="114">114</option>
							<option value="115">115</option>
							<option value="116">116</option>
							<option value="117">117</option>
							<option value="118">118</option>
							<option value="119">119</option>
							<option value="120">120</option>
							<option value="121">121</option>
							<option value="122">122</option>
							<option value="123">123</option>
							<option value="124">124</option>
							<option value="125">125</option>
							<option value="126">126</option>
							<option value="127">127</option>
							<option value="128">128</option>
							<option value="129">129</option>
							<option value="130">130</option>
							<option value="131">131</option>
							<option value="132">132</option>
							<option value="133">133</option>
							<option value="134">134</option>
							<option value="135">135</option>
							<option value="136">136</option>
							<option value="137">137</option>
							<option value="138">138</option>
							<option value="139">139</option>
							<option value="140">140</option>
							<option value="141">141</option>
							<option value="142">142</option>
							<option value="143">143</option>
							<option value="144">144</option>
							<option value="145">145</option>
							<option value="146">146</option>
							<option value="147">147</option>
							<option value="148">148</option>
							<option value="149">149</option>
							<option value="150">150</option>
							<option value="151">151</option>
							<option value="152">152</option>
							<option value="153">153</option>
							<option value="154">154</option>
							<option value="155">155</option>
							<option value="156">156</option>
							<option value="157">157</option>
							<option value="158">158</option>
							<option value="159">159</option>
							<option value="160">160</option>
							<option value="161">161</option>
							<option value="162">162</option>
							<option value="163">163</option>
							<option value="164">164</option>
							<option value="165">165</option>
							<option value="166">166</option>
							<option value="167">167</option>
							<option value="168">168</option>
							<option value="169">169</option>
							<option value="170">170</option>
							<option value="171">171</option>
							<option value="172">172</option>
							<option value="173">173</option>
							<option value="174">174</option>
							<option value="175">175</option>
							<option value="176">176</option>
							<option value="177">177</option>
							<option value="178">178</option>
							<option value="179">179</option>
							<option value="180">180</option>
						</select>

					  </td>
					  <td>
						
					  </td>
					</tr>
					<tr>
					  <th scope="row">Intermediate	</th>
					  <td>
						  <select class="form-control form-control-sm" name="left_i_sphere">
						  <option value="-8.00">-8.00</option>
						  <option value="-7.75">-7.75</option>
						  <option value="-7.50">-7.50</option>
						  <option value="-7.25">-7.25</option>
						  <option value="-7.00">-7.00</option>
						  <option value="-6.75">-6.75</option>
						  <option value="-6.50">-6.50</option>
						  <option value="-6.25">-6.25</option>
						  <option value="-6.00">-6.00</option>
						  <option value="-5.75">-5.75</option>
						  <option value="-5.50">-5.50</option>
						  <option value="-5.25">-5.25</option>
						  <option value="-5.00">-5.00</option>
						  <option value="-4.75">-4.75</option>
						  <option value="-4.50">-4.50</option>
						  <option value="-4.25">-4.25</option>
						  <option value="-4.00">-4.00</option>
						  <option value="-3.75">-3.75</option>
						  <option value="-3.50">-3.50</option>
						  <option value="-3.25">-3.25</option>
						  <option value="-3.00">-3.00</option>
						  <option value="-2.75">-2.75</option>
						  <option value="-2.50">-2.50</option>
						  <option value="-2.25">-2.25</option>
						  <option value="-2.00">-2.00</option>
						  <option value="-1.75">-1.75</option>
						  <option value="-1.50">-1.50</option>
						  <option value="-1.25">-1.25</option>
						  <option value="-1.00">-1.00</option>
						  <option value="-0.75">-0.75</option>
						  <option value="-0.50">-0.50</option>
						  <option value="-0.25">-0.25</option>
						  <option value="" selected>+/-</option>
						  <option value="0.00">0.00</option>
						  <option value="INFINITY">&infin;</option>
						  <option value="PLANO">PLANO</option>
						  <option value="BALANCE">BALANCE</option>
						  <option value="+0.25">+0.25</option>
						  <option value="+0.50">+0.50</option>
						  <option value="+0.75">+0.75</option>
						  <option value="+1.00">+1.00</option>
						  <option value="+1.25">+1.25</option>
						  <option value="+1.50">+1.50</option>
						  <option value="+1.75">+1.75</option>
						  <option value="+2.00">+2.00</option>
						  <option value="+2.25">+2.25</option>
						  <option value="+2.50">+2.50</option>
						  <option value="+2.75">+2.75</option>
						  <option value="+3.00">+3.00</option>
						  <option value="+3.25">+3.25</option>
						  <option value="+3.50">+3.50</option>
						  <option value="+3.75">+3.75</option>
						  <option value="+4.00">+4.00</option>
						  <option value="+4.25">+4.25</option>
						  <option value="+4.50">+4.50</option>
						  <option value="+4.75">+4.75</option>
						  <option value="+5.00">+5.00</option>
						  <option value="+5.25">+5.25</option>
						  <option value="+5.50">+5.50</option>
						  <option value="+5.75">+5.75</option>
						  <option value="+6.00">+6.00</option>
						  <option value="+6.25">+6.25</option>
						  <option value="+6.50">+6.50</option>
						  <option value="+6.75">+6.75</option>
						  <option value="+7.00">+7.00</option>
						  <option value="+7.25">+7.25</option>
						  <option value="+7.50">+7.50</option>
						  <option value="+7.75">+7.75</option>
						  <option value="+8.00">+8.00</option>
						</select>
					  </td>
					  <td>
		    			 <select class="form-control form-control-sm" name="left_i_cylinder">
						  <option value="-4.00">-4.00</option>
						  <option value="-3.75">-3.75</option>
						  <option value="-3.50">-3.50</option>
						  <option value="-3.25">-3.25</option>
						  <option value="-3.00">-3.00</option>
						  <option value="-2.75">-2.75</option>
						  <option value="-2.50">-2.50</option>
						  <option value="-2.25">-2.25</option>
						  <option value="-2.00">-2.00</option>
						  <option value="-1.75">-1.75</option>
						  <option value="-1.50">-1.50</option>
						  <option value="-1.25">-1.25</option>
						  <option value="-1.00">-1.00</option>
						  <option value="-0.75">-0.75</option>
						  <option value="-0.50">-0.50</option>
						  <option value="-0.25">-0.25</option>
						  <option value="" selected>+/-</option>
						  <option value="0.00">0.00</option>
						  <option value="INFINITY">&infin;</option>
						  <option value="PLANO">PLANO</option>
						  <option value="BALANCE">BALANCE</option>
						  <option value="DS">DS</option>
						  <option value="+0.25">+0.25</option>
						  <option value="+0.50">+0.50</option>
						  <option value="+0.75">+0.75</option>
						  <option value="+1.00">+1.00</option>
						  <option value="+1.25">+1.25</option>
						  <option value="+1.50">+1.50</option>
						  <option value="+1.75">+1.75</option>
						  <option value="+2.00">+2.00</option>
						  <option value="+2.25">+2.25</option>
						  <option value="+2.50">+2.50</option>
						  <option value="+2.75">+2.75</option>
						  <option value="+3.00">+3.00</option>
						  <option value="+3.25">+3.25</option>
						  <option value="+3.50">+3.50</option>
						  <option value="+3.75">+3.75</option>
						  <option value="+4.00">+4.00</option>
						</select>
					  </td>
					  <td><select class="form-control form-control-sm" name="left_i_axis">
						  	<option value="">Select Axis</option>
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
							<option value="32">32</option>
							<option value="33">33</option>
							<option value="34">34</option>
							<option value="35">35</option>
							<option value="36">36</option>
							<option value="37">37</option>
							<option value="38">38</option>
							<option value="39">39</option>
							<option value="40">40</option>
							<option value="41">41</option>
							<option value="42">42</option>
							<option value="43">43</option>
							<option value="44">44</option>
							<option value="45">45</option>
							<option value="46">46</option>
							<option value="47">47</option>
							<option value="48">48</option>
							<option value="49">49</option>
							<option value="50">50</option>
							<option value="51">51</option>
							<option value="52">52</option>
							<option value="53">53</option>
							<option value="54">54</option>
							<option value="55">55</option>
							<option value="56">56</option>
							<option value="57">57</option>
							<option value="58">58</option>
							<option value="59">59</option>
							<option value="60">60</option>
							<option value="61">61</option>
							<option value="62">62</option>
							<option value="63">63</option>
							<option value="64">64</option>
							<option value="65">65</option>
							<option value="66">66</option>
							<option value="67">67</option>
							<option value="68">68</option>
							<option value="69">69</option>
							<option value="70">70</option>
							<option value="71">71</option>
							<option value="72">72</option>
							<option value="73">73</option>
							<option value="74">74</option>
							<option value="75">75</option>
							<option value="76">76</option>
							<option value="77">77</option>
							<option value="78">78</option>
							<option value="79">79</option>
							<option value="80">80</option>
							<option value="81">81</option>
							<option value="82">82</option>
							<option value="83">83</option>
							<option value="84">84</option>
							<option value="85">85</option>
							<option value="86">86</option>
							<option value="87">87</option>
							<option value="88">88</option>
							<option value="89">89</option>
							<option value="90">90</option>
							<option value="91">91</option>
							<option value="92">92</option>
							<option value="93">93</option>
							<option value="94">94</option>
							<option value="95">95</option>
							<option value="96">96</option>
							<option value="97">97</option>
							<option value="98">98</option>
							<option value="99">99</option>
							<option value="100">100</option>
							<option value="101">101</option>
							<option value="102">102</option>
							<option value="103">103</option>
							<option value="104">104</option>
							<option value="105">105</option>
							<option value="106">106</option>
							<option value="107">107</option>
							<option value="108">108</option>
							<option value="109">109</option>
							<option value="110">110</option>
							<option value="111">111</option>
							<option value="112">112</option>
							<option value="113">113</option>
							<option value="114">114</option>
							<option value="115">115</option>
							<option value="116">116</option>
							<option value="117">117</option>
							<option value="118">118</option>
							<option value="119">119</option>
							<option value="120">120</option>
							<option value="121">121</option>
							<option value="122">122</option>
							<option value="123">123</option>
							<option value="124">124</option>
							<option value="125">125</option>
							<option value="126">126</option>
							<option value="127">127</option>
							<option value="128">128</option>
							<option value="129">129</option>
							<option value="130">130</option>
							<option value="131">131</option>
							<option value="132">132</option>
							<option value="133">133</option>
							<option value="134">134</option>
							<option value="135">135</option>
							<option value="136">136</option>
							<option value="137">137</option>
							<option value="138">138</option>
							<option value="139">139</option>
							<option value="140">140</option>
							<option value="141">141</option>
							<option value="142">142</option>
							<option value="143">143</option>
							<option value="144">144</option>
							<option value="145">145</option>
							<option value="146">146</option>
							<option value="147">147</option>
							<option value="148">148</option>
							<option value="149">149</option>
							<option value="150">150</option>
							<option value="151">151</option>
							<option value="152">152</option>
							<option value="153">153</option>
							<option value="154">154</option>
							<option value="155">155</option>
							<option value="156">156</option>
							<option value="157">157</option>
							<option value="158">158</option>
							<option value="159">159</option>
							<option value="160">160</option>
							<option value="161">161</option>
							<option value="162">162</option>
							<option value="163">163</option>
							<option value="164">164</option>
							<option value="165">165</option>
							<option value="166">166</option>
							<option value="167">167</option>
							<option value="168">168</option>
							<option value="169">169</option>
							<option value="170">170</option>
							<option value="171">171</option>
							<option value="172">172</option>
							<option value="173">173</option>
							<option value="174">174</option>
							<option value="175">175</option>
							<option value="176">176</option>
							<option value="177">177</option>
							<option value="178">178</option>
							<option value="179">179</option>
							<option value="180">180</option>
						</select>
						</td>
					  <td>
						<select class="form-control form-control-sm" name="left_i_near_addition">
						  <option value="" selected>--</option>
						  <option value="+0.50">+0.50</option>
						  <option value="+0.75">+0.75</option>
						  <option value="+1.00">+1.00</option>
						  <option value="+1.25">+1.25</option>
						  <option value="+1.50">+1.50</option>
						  <option value="+1.75">+1.75</option>
						  <option value="+2.00">+2.00</option>
						  <option value="+2.25">+2.25</option>
						  <option value="+2.50">+2.50</option>
						  <option value="+2.75">+2.75</option>
						  <option value="+3.00">+3.00</option>
						  <option value="+3.25">+3.25</option>
						  <option value="+3.50">+3.50</option>
						</select>
					  </td>	
					</tr>
					<tr>
					  <th scope="row">Near</th>
					  <td><select class="form-control form-control-sm" name="left_n_sphere">
						  <option value="-8.00">-8.00</option>
						  <option value="-7.75">-7.75</option>
						  <option value="-7.50">-7.50</option>
						  <option value="-7.25">-7.25</option>
						  <option value="-7.00">-7.00</option>
						  <option value="-6.75">-6.75</option>
						  <option value="-6.50">-6.50</option>
						  <option value="-6.25">-6.25</option>
						  <option value="-6.00">-6.00</option>
						  <option value="-5.75">-5.75</option>
						  <option value="-5.50">-5.50</option>
						  <option value="-5.25">-5.25</option>
						  <option value="-5.00">-5.00</option>
						  <option value="-4.75">-4.75</option>
						  <option value="-4.50">-4.50</option>
						  <option value="-4.25">-4.25</option>
						  <option value="-4.00">-4.00</option>
						  <option value="-3.75">-3.75</option>
						  <option value="-3.50">-3.50</option>
						  <option value="-3.25">-3.25</option>
						  <option value="-3.00">-3.00</option>
						  <option value="-2.75">-2.75</option>
						  <option value="-2.50">-2.50</option>
						  <option value="-2.25">-2.25</option>
						  <option value="-2.00">-2.00</option>
						  <option value="-1.75">-1.75</option>
						  <option value="-1.50">-1.50</option>
						  <option value="-1.25">-1.25</option>
						  <option value="-1.00">-1.00</option>
						  <option value="-0.75">-0.75</option>
						  <option value="-0.50">-0.50</option>
						  <option value="-0.25">-0.25</option>
						  <option value="" selected>+/-</option>
						  <option value="0.00">0.00</option>
						  <option value="INFINITY">&infin;</option>
						  <option value="PLANO">PLANO</option>
						  <option value="BALANCE">BALANCE</option>
						  <option value="+0.25">+0.25</option>
						  <option value="+0.50">+0.50</option>
						  <option value="+0.75">+0.75</option>
						  <option value="+1.00">+1.00</option>
						  <option value="+1.25">+1.25</option>
						  <option value="+1.50">+1.50</option>
						  <option value="+1.75">+1.75</option>
						  <option value="+2.00">+2.00</option>
						  <option value="+2.25">+2.25</option>
						  <option value="+2.50">+2.50</option>
						  <option value="+2.75">+2.75</option>
						  <option value="+3.00">+3.00</option>
						  <option value="+3.25">+3.25</option>
						  <option value="+3.50">+3.50</option>
						  <option value="+3.75">+3.75</option>
						  <option value="+4.00">+4.00</option>
						  <option value="+4.25">+4.25</option>
						  <option value="+4.50">+4.50</option>
						  <option value="+4.75">+4.75</option>
						  <option value="+5.00">+5.00</option>
						  <option value="+5.25">+5.25</option>
						  <option value="+5.50">+5.50</option>
						  <option value="+5.75">+5.75</option>
						  <option value="+6.00">+6.00</option>
						  <option value="+6.25">+6.25</option>
						  <option value="+6.50">+6.50</option>
						  <option value="+6.75">+6.75</option>
						  <option value="+7.00">+7.00</option>
						  <option value="+7.25">+7.25</option>
						  <option value="+7.50">+7.50</option>
						  <option value="+7.75">+7.75</option>
						  <option value="+8.00">+8.00</option>
						</select></td>
					  <td>
						<select class="form-control form-control-sm" name="left_n_cylinder">
						  <option value="-4.00">-4.00</option>
						  <option value="-3.75">-3.75</option>
						  <option value="-3.50">-3.50</option>
						  <option value="-3.25">-3.25</option>
						  <option value="-3.00">-3.00</option>
						  <option value="-2.75">-2.75</option>
						  <option value="-2.50">-2.50</option>
						  <option value="-2.25">-2.25</option>
						  <option value="-2.00">-2.00</option>
						  <option value="-1.75">-1.75</option>
						  <option value="-1.50">-1.50</option>
						  <option value="-1.25">-1.25</option>
						  <option value="-1.00">-1.00</option>
						  <option value="-0.75">-0.75</option>
						  <option value="-0.50">-0.50</option>
						  <option value="-0.25">-0.25</option>
						  <option value="" selected>+/-</option>
						  <option value="0.00">0.00</option>
						  <option value="INFINITY">&infin;</option>
						  <option value="PLANO">PLANO</option>
						  <option value="BALANCE">BALANCE</option>
						  <option value="DS">DS</option>
						  <option value="+0.25">+0.25</option>
						  <option value="+0.50">+0.50</option>
						  <option value="+0.75">+0.75</option>
						  <option value="+1.00">+1.00</option>
						  <option value="+1.25">+1.25</option>
						  <option value="+1.50">+1.50</option>
						  <option value="+1.75">+1.75</option>
						  <option value="+2.00">+2.00</option>
						  <option value="+2.25">+2.25</option>
						  <option value="+2.50">+2.50</option>
						  <option value="+2.75">+2.75</option>
						  <option value="+3.00">+3.00</option>
						  <option value="+3.25">+3.25</option>
						  <option value="+3.50">+3.50</option>
						  <option value="+3.75">+3.75</option>
						  <option value="+4.00">+4.00</option>
						</select>
					  </td>
					  <td><select class="form-control form-control-sm" name="left_n_axis">
						  	<option value="">Select Axis</option>
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
							<option value="32">32</option>
							<option value="33">33</option>
							<option value="34">34</option>
							<option value="35">35</option>
							<option value="36">36</option>
							<option value="37">37</option>
							<option value="38">38</option>
							<option value="39">39</option>
							<option value="40">40</option>
							<option value="41">41</option>
							<option value="42">42</option>
							<option value="43">43</option>
							<option value="44">44</option>
							<option value="45">45</option>
							<option value="46">46</option>
							<option value="47">47</option>
							<option value="48">48</option>
							<option value="49">49</option>
							<option value="50">50</option>
							<option value="51">51</option>
							<option value="52">52</option>
							<option value="53">53</option>
							<option value="54">54</option>
							<option value="55">55</option>
							<option value="56">56</option>
							<option value="57">57</option>
							<option value="58">58</option>
							<option value="59">59</option>
							<option value="60">60</option>
							<option value="61">61</option>
							<option value="62">62</option>
							<option value="63">63</option>
							<option value="64">64</option>
							<option value="65">65</option>
							<option value="66">66</option>
							<option value="67">67</option>
							<option value="68">68</option>
							<option value="69">69</option>
							<option value="70">70</option>
							<option value="71">71</option>
							<option value="72">72</option>
							<option value="73">73</option>
							<option value="74">74</option>
							<option value="75">75</option>
							<option value="76">76</option>
							<option value="77">77</option>
							<option value="78">78</option>
							<option value="79">79</option>
							<option value="80">80</option>
							<option value="81">81</option>
							<option value="82">82</option>
							<option value="83">83</option>
							<option value="84">84</option>
							<option value="85">85</option>
							<option value="86">86</option>
							<option value="87">87</option>
							<option value="88">88</option>
							<option value="89">89</option>
							<option value="90">90</option>
							<option value="91">91</option>
							<option value="92">92</option>
							<option value="93">93</option>
							<option value="94">94</option>
							<option value="95">95</option>
							<option value="96">96</option>
							<option value="97">97</option>
							<option value="98">98</option>
							<option value="99">99</option>
							<option value="100">100</option>
							<option value="101">101</option>
							<option value="102">102</option>
							<option value="103">103</option>
							<option value="104">104</option>
							<option value="105">105</option>
							<option value="106">106</option>
							<option value="107">107</option>
							<option value="108">108</option>
							<option value="109">109</option>
							<option value="110">110</option>
							<option value="111">111</option>
							<option value="112">112</option>
							<option value="113">113</option>
							<option value="114">114</option>
							<option value="115">115</option>
							<option value="116">116</option>
							<option value="117">117</option>
							<option value="118">118</option>
							<option value="119">119</option>
							<option value="120">120</option>
							<option value="121">121</option>
							<option value="122">122</option>
							<option value="123">123</option>
							<option value="124">124</option>
							<option value="125">125</option>
							<option value="126">126</option>
							<option value="127">127</option>
							<option value="128">128</option>
							<option value="129">129</option>
							<option value="130">130</option>
							<option value="131">131</option>
							<option value="132">132</option>
							<option value="133">133</option>
							<option value="134">134</option>
							<option value="135">135</option>
							<option value="136">136</option>
							<option value="137">137</option>
							<option value="138">138</option>
							<option value="139">139</option>
							<option value="140">140</option>
							<option value="141">141</option>
							<option value="142">142</option>
							<option value="143">143</option>
							<option value="144">144</option>
							<option value="145">145</option>
							<option value="146">146</option>
							<option value="147">147</option>
							<option value="148">148</option>
							<option value="149">149</option>
							<option value="150">150</option>
							<option value="151">151</option>
							<option value="152">152</option>
							<option value="153">153</option>
							<option value="154">154</option>
							<option value="155">155</option>
							<option value="156">156</option>
							<option value="157">157</option>
							<option value="158">158</option>
							<option value="159">159</option>
							<option value="160">160</option>
							<option value="161">161</option>
							<option value="162">162</option>
							<option value="163">163</option>
							<option value="164">164</option>
							<option value="165">165</option>
							<option value="166">166</option>
							<option value="167">167</option>
							<option value="168">168</option>
							<option value="169">169</option>
							<option value="170">170</option>
							<option value="171">171</option>
							<option value="172">172</option>
							<option value="173">173</option>
							<option value="174">174</option>
							<option value="175">175</option>
							<option value="176">176</option>
							<option value="177">177</option>
							<option value="178">178</option>
							<option value="179">179</option>
							<option value="180">180</option>
						</select>
						</td>
					  <td>
						<select class="form-control form-control-sm" name="left_n_near_addition">
						  <option value="" selected>--</option>
						  <option value="+0.50">+0.50</option>
						  <option value="+0.75">+0.75</option>
						  <option value="+1.00">+1.00</option>
						  <option value="+1.25">+1.25</option>
						  <option value="+1.50">+1.50</option>
						  <option value="+1.75">+1.75</option>
						  <option value="+2.00">+2.00</option>
						  <option value="+2.25">+2.25</option>
						  <option value="+2.50">+2.50</option>
						  <option value="+2.75">+2.75</option>
						  <option value="+3.00">+3.00</option>
						  <option value="+3.25">+3.25</option>
						  <option value="+3.50">+3.50</option>
						</select>
					  </td>	
					</tr>
					  
					 <tr>
					 	<td colspan="5">
					 	<a id="minus"><i class="fas fa-minus-square"></i> My prescription is more simple than this</a>
						</td> 
					 </tr>
					 
					
					  
				  </tbody>
				</table>
				<!-- Detail Left End -->
				
				</div>
				
				<div id="short">
				<!-- Detail Right Start -->
				<table class="table">
				  
				  <tbody>
					  
					  <tr>
					  <td></td>
					  <td class="presc_txt">Sphere (SPH) ⓘ </td>
					  <td class="presc_txt"> Cylinder (CYL) ⓘ	</td>
					  <td class="presc_txt"> Axis ⓘ	</td>
					  <td class="presc_txt"> Addition (ADD) ⓘ </td>
					</tr>
					  
					  
					 
					  
					  
					
					  <th scope="row">Right Eye</th>
					  <td>
						  <select class="form-control form-control-sm" name="right_sphere">
						  <option value="-8.00">-8.00</option>
						  <option value="-7.75">-7.75</option>
						  <option value="-7.50">-7.50</option>
						  <option value="-7.25">-7.25</option>
						  <option value="-7.00">-7.00</option>
						  <option value="-6.75">-6.75</option>
						  <option value="-6.50">-6.50</option>
						  <option value="-6.25">-6.25</option>
						  <option value="-6.00">-6.00</option>
						  <option value="-5.75">-5.75</option>
						  <option value="-5.50">-5.50</option>
						  <option value="-5.25">-5.25</option>
						  <option value="-5.00">-5.00</option>
						  <option value="-4.75">-4.75</option>
						  <option value="-4.50">-4.50</option>
						  <option value="-4.25">-4.25</option>
						  <option value="-4.00">-4.00</option>
						  <option value="-3.75">-3.75</option>
						  <option value="-3.50">-3.50</option>
						  <option value="-3.25">-3.25</option>
						  <option value="-3.00">-3.00</option>
						  <option value="-2.75">-2.75</option>
						  <option value="-2.50">-2.50</option>
						  <option value="-2.25">-2.25</option>
						  <option value="-2.00">-2.00</option>
						  <option value="-1.75">-1.75</option>
						  <option value="-1.50">-1.50</option>
						  <option value="-1.25">-1.25</option>
						  <option value="-1.00">-1.00</option>
						  <option value="-0.75">-0.75</option>
						  <option value="-0.50">-0.50</option>
						  <option value="-0.25">-0.25</option>
						  <option value="" selected>+/-</option>
						  <option value="0.00">0.00</option>
						  <option value="INFINITY">&infin;</option>
						  <option value="PLANO">PLANO</option>
						  <option value="BALANCE">BALANCE</option>
						  <option value="+0.25">+0.25</option>
						  <option value="+0.50">+0.50</option>
						  <option value="+0.75">+0.75</option>
						  <option value="+1.00">+1.00</option>
						  <option value="+1.25">+1.25</option>
						  <option value="+1.50">+1.50</option>
						  <option value="+1.75">+1.75</option>
						  <option value="+2.00">+2.00</option>
						  <option value="+2.25">+2.25</option>
						  <option value="+2.50">+2.50</option>
						  <option value="+2.75">+2.75</option>
						  <option value="+3.00">+3.00</option>
						  <option value="+3.25">+3.25</option>
						  <option value="+3.50">+3.50</option>
						  <option value="+3.75">+3.75</option>
						  <option value="+4.00">+4.00</option>
						  <option value="+4.25">+4.25</option>
						  <option value="+4.50">+4.50</option>
						  <option value="+4.75">+4.75</option>
						  <option value="+5.00">+5.00</option>
						  <option value="+5.25">+5.25</option>
						  <option value="+5.50">+5.50</option>
						  <option value="+5.75">+5.75</option>
						  <option value="+6.00">+6.00</option>
						  <option value="+6.25">+6.25</option>
						  <option value="+6.50">+6.50</option>
						  <option value="+6.75">+6.75</option>
						  <option value="+7.00">+7.00</option>
						  <option value="+7.25">+7.25</option>
						  <option value="+7.50">+7.50</option>
						  <option value="+7.75">+7.75</option>
						  <option value="+8.00">+8.00</option>
						</select>
					  </td>
					  <td>
		    			 <select class="form-control form-control-sm" name="right_cylinder">
						  <option value="-4.00">-4.00</option>
						  <option value="-3.75">-3.75</option>
						  <option value="-3.50">-3.50</option>
						  <option value="-3.25">-3.25</option>
						  <option value="-3.00">-3.00</option>
						  <option value="-2.75">-2.75</option>
						  <option value="-2.50">-2.50</option>
						  <option value="-2.25">-2.25</option>
						  <option value="-2.00">-2.00</option>
						  <option value="-1.75">-1.75</option>
						  <option value="-1.50">-1.50</option>
						  <option value="-1.25">-1.25</option>
						  <option value="-1.00">-1.00</option>
						  <option value="-0.75">-0.75</option>
						  <option value="-0.50">-0.50</option>
						  <option value="-0.25">-0.25</option>
						  <option value="" selected>+/-</option>
						  <option value="0.00">0.00</option>
						  <option value="INFINITY">&infin;</option>
						  <option value="PLANO">PLANO</option>
						  <option value="BALANCE">BALANCE</option>
						  <option value="DS">DS</option>
						  <option value="+0.25">+0.25</option>
						  <option value="+0.50">+0.50</option>
						  <option value="+0.75">+0.75</option>
						  <option value="+1.00">+1.00</option>
						  <option value="+1.25">+1.25</option>
						  <option value="+1.50">+1.50</option>
						  <option value="+1.75">+1.75</option>
						  <option value="+2.00">+2.00</option>
						  <option value="+2.25">+2.25</option>
						  <option value="+2.50">+2.50</option>
						  <option value="+2.75">+2.75</option>
						  <option value="+3.00">+3.00</option>
						  <option value="+3.25">+3.25</option>
						  <option value="+3.50">+3.50</option>
						  <option value="+3.75">+3.75</option>
						  <option value="+4.00">+4.00</option>
						</select>
					  </td>
					  <td><select class="form-control form-control-sm" name="right_axis">
						  	<option value="">Select Axis</option>
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
							<option value="32">32</option>
							<option value="33">33</option>
							<option value="34">34</option>
							<option value="35">35</option>
							<option value="36">36</option>
							<option value="37">37</option>
							<option value="38">38</option>
							<option value="39">39</option>
							<option value="40">40</option>
							<option value="41">41</option>
							<option value="42">42</option>
							<option value="43">43</option>
							<option value="44">44</option>
							<option value="45">45</option>
							<option value="46">46</option>
							<option value="47">47</option>
							<option value="48">48</option>
							<option value="49">49</option>
							<option value="50">50</option>
							<option value="51">51</option>
							<option value="52">52</option>
							<option value="53">53</option>
							<option value="54">54</option>
							<option value="55">55</option>
							<option value="56">56</option>
							<option value="57">57</option>
							<option value="58">58</option>
							<option value="59">59</option>
							<option value="60">60</option>
							<option value="61">61</option>
							<option value="62">62</option>
							<option value="63">63</option>
							<option value="64">64</option>
							<option value="65">65</option>
							<option value="66">66</option>
							<option value="67">67</option>
							<option value="68">68</option>
							<option value="69">69</option>
							<option value="70">70</option>
							<option value="71">71</option>
							<option value="72">72</option>
							<option value="73">73</option>
							<option value="74">74</option>
							<option value="75">75</option>
							<option value="76">76</option>
							<option value="77">77</option>
							<option value="78">78</option>
							<option value="79">79</option>
							<option value="80">80</option>
							<option value="81">81</option>
							<option value="82">82</option>
							<option value="83">83</option>
							<option value="84">84</option>
							<option value="85">85</option>
							<option value="86">86</option>
							<option value="87">87</option>
							<option value="88">88</option>
							<option value="89">89</option>
							<option value="90">90</option>
							<option value="91">91</option>
							<option value="92">92</option>
							<option value="93">93</option>
							<option value="94">94</option>
							<option value="95">95</option>
							<option value="96">96</option>
							<option value="97">97</option>
							<option value="98">98</option>
							<option value="99">99</option>
							<option value="100">100</option>
							<option value="101">101</option>
							<option value="102">102</option>
							<option value="103">103</option>
							<option value="104">104</option>
							<option value="105">105</option>
							<option value="106">106</option>
							<option value="107">107</option>
							<option value="108">108</option>
							<option value="109">109</option>
							<option value="110">110</option>
							<option value="111">111</option>
							<option value="112">112</option>
							<option value="113">113</option>
							<option value="114">114</option>
							<option value="115">115</option>
							<option value="116">116</option>
							<option value="117">117</option>
							<option value="118">118</option>
							<option value="119">119</option>
							<option value="120">120</option>
							<option value="121">121</option>
							<option value="122">122</option>
							<option value="123">123</option>
							<option value="124">124</option>
							<option value="125">125</option>
							<option value="126">126</option>
							<option value="127">127</option>
							<option value="128">128</option>
							<option value="129">129</option>
							<option value="130">130</option>
							<option value="131">131</option>
							<option value="132">132</option>
							<option value="133">133</option>
							<option value="134">134</option>
							<option value="135">135</option>
							<option value="136">136</option>
							<option value="137">137</option>
							<option value="138">138</option>
							<option value="139">139</option>
							<option value="140">140</option>
							<option value="141">141</option>
							<option value="142">142</option>
							<option value="143">143</option>
							<option value="144">144</option>
							<option value="145">145</option>
							<option value="146">146</option>
							<option value="147">147</option>
							<option value="148">148</option>
							<option value="149">149</option>
							<option value="150">150</option>
							<option value="151">151</option>
							<option value="152">152</option>
							<option value="153">153</option>
							<option value="154">154</option>
							<option value="155">155</option>
							<option value="156">156</option>
							<option value="157">157</option>
							<option value="158">158</option>
							<option value="159">159</option>
							<option value="160">160</option>
							<option value="161">161</option>
							<option value="162">162</option>
							<option value="163">163</option>
							<option value="164">164</option>
							<option value="165">165</option>
							<option value="166">166</option>
							<option value="167">167</option>
							<option value="168">168</option>
							<option value="169">169</option>
							<option value="170">170</option>
							<option value="171">171</option>
							<option value="172">172</option>
							<option value="173">173</option>
							<option value="174">174</option>
							<option value="175">175</option>
							<option value="176">176</option>
							<option value="177">177</option>
							<option value="178">178</option>
							<option value="179">179</option>
							<option value="180">180</option>
						</select>
						</td>
					  <td>
						<select class="form-control form-control-sm" name="right_near_addition">
						  <option value="" selected>--</option>
						  <option value="+0.50">+0.50</option>
						  <option value="+0.75">+0.75</option>
						  <option value="+1.00">+1.00</option>
						  <option value="+1.25">+1.25</option>
						  <option value="+1.50">+1.50</option>
						  <option value="+1.75">+1.75</option>
						  <option value="+2.00">+2.00</option>
						  <option value="+2.25">+2.25</option>
						  <option value="+2.50">+2.50</option>
						  <option value="+2.75">+2.75</option>
						  <option value="+3.00">+3.00</option>
						  <option value="+3.25">+3.25</option>
						  <option value="+3.50">+3.50</option>
						</select>
					  </td>	
					</tr>
					<tr>
					  <th scope="row">Left Eye</th>
					  <td><select class="form-control form-control-sm" name="left_sphere">
						  <option value="-8.00">-8.00</option>
						  <option value="-7.75">-7.75</option>
						  <option value="-7.50">-7.50</option>
						  <option value="-7.25">-7.25</option>
						  <option value="-7.00">-7.00</option>
						  <option value="-6.75">-6.75</option>
						  <option value="-6.50">-6.50</option>
						  <option value="-6.25">-6.25</option>
						  <option value="-6.00">-6.00</option>
						  <option value="-5.75">-5.75</option>
						  <option value="-5.50">-5.50</option>
						  <option value="-5.25">-5.25</option>
						  <option value="-5.00">-5.00</option>
						  <option value="-4.75">-4.75</option>
						  <option value="-4.50">-4.50</option>
						  <option value="-4.25">-4.25</option>
						  <option value="-4.00">-4.00</option>
						  <option value="-3.75">-3.75</option>
						  <option value="-3.50">-3.50</option>
						  <option value="-3.25">-3.25</option>
						  <option value="-3.00">-3.00</option>
						  <option value="-2.75">-2.75</option>
						  <option value="-2.50">-2.50</option>
						  <option value="-2.25">-2.25</option>
						  <option value="-2.00">-2.00</option>
						  <option value="-1.75">-1.75</option>
						  <option value="-1.50">-1.50</option>
						  <option value="-1.25">-1.25</option>
						  <option value="-1.00">-1.00</option>
						  <option value="-0.75">-0.75</option>
						  <option value="-0.50">-0.50</option>
						  <option value="-0.25">-0.25</option>
						  <option value="" selected>+/-</option>
						  <option value="0.00">0.00</option>
						  <option value="INFINITY">&infin;</option>
						  <option value="PLANO">PLANO</option>
						  <option value="BALANCE">BALANCE</option>
						  <option value="+0.25">+0.25</option>
						  <option value="+0.50">+0.50</option>
						  <option value="+0.75">+0.75</option>
						  <option value="+1.00">+1.00</option>
						  <option value="+1.25">+1.25</option>
						  <option value="+1.50">+1.50</option>
						  <option value="+1.75">+1.75</option>
						  <option value="+2.00">+2.00</option>
						  <option value="+2.25">+2.25</option>
						  <option value="+2.50">+2.50</option>
						  <option value="+2.75">+2.75</option>
						  <option value="+3.00">+3.00</option>
						  <option value="+3.25">+3.25</option>
						  <option value="+3.50">+3.50</option>
						  <option value="+3.75">+3.75</option>
						  <option value="+4.00">+4.00</option>
						  <option value="+4.25">+4.25</option>
						  <option value="+4.50">+4.50</option>
						  <option value="+4.75">+4.75</option>
						  <option value="+5.00">+5.00</option>
						  <option value="+5.25">+5.25</option>
						  <option value="+5.50">+5.50</option>
						  <option value="+5.75">+5.75</option>
						  <option value="+6.00">+6.00</option>
						  <option value="+6.25">+6.25</option>
						  <option value="+6.50">+6.50</option>
						  <option value="+6.75">+6.75</option>
						  <option value="+7.00">+7.00</option>
						  <option value="+7.25">+7.25</option>
						  <option value="+7.50">+7.50</option>
						  <option value="+7.75">+7.75</option>
						  <option value="+8.00">+8.00</option>
						</select></td>
					  <td>
						<select class="form-control form-control-sm" name="left_cylinder">
						  <option value="-4.00">-4.00</option>
						  <option value="-3.75">-3.75</option>
						  <option value="-3.50">-3.50</option>
						  <option value="-3.25">-3.25</option>
						  <option value="-3.00">-3.00</option>
						  <option value="-2.75">-2.75</option>
						  <option value="-2.50">-2.50</option>
						  <option value="-2.25">-2.25</option>
						  <option value="-2.00">-2.00</option>
						  <option value="-1.75">-1.75</option>
						  <option value="-1.50">-1.50</option>
						  <option value="-1.25">-1.25</option>
						  <option value="-1.00">-1.00</option>
						  <option value="-0.75">-0.75</option>
						  <option value="-0.50">-0.50</option>
						  <option value="-0.25">-0.25</option>
						  <option value="" selected>+/-</option>
						  <option value="0.00">0.00</option>
						  <option value="INFINITY">&infin;</option>
						  <option value="PLANO">PLANO</option>
						  <option value="BALANCE">BALANCE</option>
						  <option value="DS">DS</option>
						  <option value="+0.25">+0.25</option>
						  <option value="+0.50">+0.50</option>
						  <option value="+0.75">+0.75</option>
						  <option value="+1.00">+1.00</option>
						  <option value="+1.25">+1.25</option>
						  <option value="+1.50">+1.50</option>
						  <option value="+1.75">+1.75</option>
						  <option value="+2.00">+2.00</option>
						  <option value="+2.25">+2.25</option>
						  <option value="+2.50">+2.50</option>
						  <option value="+2.75">+2.75</option>
						  <option value="+3.00">+3.00</option>
						  <option value="+3.25">+3.25</option>
						  <option value="+3.50">+3.50</option>
						  <option value="+3.75">+3.75</option>
						  <option value="+4.00">+4.00</option>
						</select>
					  </td>
					  <td><select class="form-control form-control-sm" name="left_axis">
						  	<option value="">Select Axis</option>
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
							<option value="32">32</option>
							<option value="33">33</option>
							<option value="34">34</option>
							<option value="35">35</option>
							<option value="36">36</option>
							<option value="37">37</option>
							<option value="38">38</option>
							<option value="39">39</option>
							<option value="40">40</option>
							<option value="41">41</option>
							<option value="42">42</option>
							<option value="43">43</option>
							<option value="44">44</option>
							<option value="45">45</option>
							<option value="46">46</option>
							<option value="47">47</option>
							<option value="48">48</option>
							<option value="49">49</option>
							<option value="50">50</option>
							<option value="51">51</option>
							<option value="52">52</option>
							<option value="53">53</option>
							<option value="54">54</option>
							<option value="55">55</option>
							<option value="56">56</option>
							<option value="57">57</option>
							<option value="58">58</option>
							<option value="59">59</option>
							<option value="60">60</option>
							<option value="61">61</option>
							<option value="62">62</option>
							<option value="63">63</option>
							<option value="64">64</option>
							<option value="65">65</option>
							<option value="66">66</option>
							<option value="67">67</option>
							<option value="68">68</option>
							<option value="69">69</option>
							<option value="70">70</option>
							<option value="71">71</option>
							<option value="72">72</option>
							<option value="73">73</option>
							<option value="74">74</option>
							<option value="75">75</option>
							<option value="76">76</option>
							<option value="77">77</option>
							<option value="78">78</option>
							<option value="79">79</option>
							<option value="80">80</option>
							<option value="81">81</option>
							<option value="82">82</option>
							<option value="83">83</option>
							<option value="84">84</option>
							<option value="85">85</option>
							<option value="86">86</option>
							<option value="87">87</option>
							<option value="88">88</option>
							<option value="89">89</option>
							<option value="90">90</option>
							<option value="91">91</option>
							<option value="92">92</option>
							<option value="93">93</option>
							<option value="94">94</option>
							<option value="95">95</option>
							<option value="96">96</option>
							<option value="97">97</option>
							<option value="98">98</option>
							<option value="99">99</option>
							<option value="100">100</option>
							<option value="101">101</option>
							<option value="102">102</option>
							<option value="103">103</option>
							<option value="104">104</option>
							<option value="105">105</option>
							<option value="106">106</option>
							<option value="107">107</option>
							<option value="108">108</option>
							<option value="109">109</option>
							<option value="110">110</option>
							<option value="111">111</option>
							<option value="112">112</option>
							<option value="113">113</option>
							<option value="114">114</option>
							<option value="115">115</option>
							<option value="116">116</option>
							<option value="117">117</option>
							<option value="118">118</option>
							<option value="119">119</option>
							<option value="120">120</option>
							<option value="121">121</option>
							<option value="122">122</option>
							<option value="123">123</option>
							<option value="124">124</option>
							<option value="125">125</option>
							<option value="126">126</option>
							<option value="127">127</option>
							<option value="128">128</option>
							<option value="129">129</option>
							<option value="130">130</option>
							<option value="131">131</option>
							<option value="132">132</option>
							<option value="133">133</option>
							<option value="134">134</option>
							<option value="135">135</option>
							<option value="136">136</option>
							<option value="137">137</option>
							<option value="138">138</option>
							<option value="139">139</option>
							<option value="140">140</option>
							<option value="141">141</option>
							<option value="142">142</option>
							<option value="143">143</option>
							<option value="144">144</option>
							<option value="145">145</option>
							<option value="146">146</option>
							<option value="147">147</option>
							<option value="148">148</option>
							<option value="149">149</option>
							<option value="150">150</option>
							<option value="151">151</option>
							<option value="152">152</option>
							<option value="153">153</option>
							<option value="154">154</option>
							<option value="155">155</option>
							<option value="156">156</option>
							<option value="157">157</option>
							<option value="158">158</option>
							<option value="159">159</option>
							<option value="160">160</option>
							<option value="161">161</option>
							<option value="162">162</option>
							<option value="163">163</option>
							<option value="164">164</option>
							<option value="165">165</option>
							<option value="166">166</option>
							<option value="167">167</option>
							<option value="168">168</option>
							<option value="169">169</option>
							<option value="170">170</option>
							<option value="171">171</option>
							<option value="172">172</option>
							<option value="173">173</option>
							<option value="174">174</option>
							<option value="175">175</option>
							<option value="176">176</option>
							<option value="177">177</option>
							<option value="178">178</option>
							<option value="179">179</option>
							<option value="180">180</option>
						</select>
						</td>
					  <td>
						<select class="form-control form-control-sm" name="left_near_addition">
						  <option value="" selected>--</option>
						  <option value="+0.50">+0.50</option>
						  <option value="+0.75">+0.75</option>
						  <option value="+1.00">+1.00</option>
						  <option value="+1.25">+1.25</option>
						  <option value="+1.50">+1.50</option>
						  <option value="+1.75">+1.75</option>
						  <option value="+2.00">+2.00</option>
						  <option value="+2.25">+2.25</option>
						  <option value="+2.50">+2.50</option>
						  <option value="+2.75">+2.75</option>
						  <option value="+3.00">+3.00</option>
						  <option value="+3.25">+3.25</option>
						  <option value="+3.50">+3.50</option>
						</select>
					  </td>	
					</tr>
					 
					<tr>
					 	<td colspan="5">
						<a id="plus" class=""><i class="fas fa-plus-square"></i> My prescription doesn’t look like this</a>
						</td> 
					 </tr>
					
					  
				  </tbody>
				</table>
				<!-- Detail Right End -->
				</div>
				<hr>
				<div class="col-sm-12 col-md-12">
					
					<div class="form-group row">
    					<label for="inputEmail3" class="col-sm-3 col-form-label">Pupil Distance:	</label>
    					<div class="col-sm-4">
						<select class="form-control form-control-sm" name="pupil_distance">
						  <option value="">Select...</option>
						  <option value="55">55</option>
						  <option value="56">56</option>
						  <option value="57">57</option>
						  <option value="58">58</option>
						  <option value="59">59</option>
						  <option value="60">60</option>
						  <option value="61">61</option>
						  <option value="62">62</option>
						  <option value="63" selected>63 (Average / Don&#39;t Know)</option>
						  <option value="64">64</option>
						  <option value="65">65</option>
						  <option value="66">66</option>
						  <option value="67">67</option>
						  <option value="68">68</option>
						  <option value="69">69</option>
						  <option value="70">70</option>
						  <option value="71">71</option>
						  <option value="72">72</option>
						  <option value="73">73</option>
						  <option value="74">74</option>
						  <option value="75">75</option>
						</select>    
						</div>
 				   </div>
					
		
				
				</div>
					<hr>
				
				
				<!-- @nd COl -->
				<div class="col-sm-12 col-md-12 ">
					
					<div class="form-group row">
    					
						<label for="inputEmail3" class="col-sm-2 col-form-label">Date </label>
						
    					<div class="col-sm-1 prescription_date_col">
							<select class="form-control form-control-sm" name="day">
							    <option value="">DD</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>
							</select>

						</div>
						
						<div class="col-sm-2 prescription_date_col">
							<select class="form-control form-control-sm" name="month">
							  <option value="">MONTH</option>
							  <option value="1">January</option>
								<option value="2">February</option>
								<option value="3">March</option>
								<option value="4">April</option>
								<option value="5">May</option>
								<option value="6">June</option>
								<option value="7">July</option>
								<option value="8">August</option>
								<option value="9">September</option>
								<option value="10">October</option>
								<option value="11">November</option>
								<option value="12">December</option>
							</select>
														
						</div>
						
						<div class="col-sm-1 prescription_date_col">
							<select class="form-control form-control-sm" name="year">
								<option value="">YY</option>
								<option value="2018">2018</option>
								<option value="2019">2019</option>
								<option value="2020">2020</option>
							</select>
														
						</div>
						
 				   </div>
					
		
				
				</div>
					<hr>
				<!-- 2nd COl -->
				
				<!-- Col3 -->
				
				<div class="col-sm-12 col-md-12 ">
					
					<div class="form-group row">
    					<label for="inputEmail3" class="col-sm-2 col-form-label"> Information:</label>
    					<div class="col-sm-10">
						<textarea class="form-control" name="information" id="exampleFormControlTextarea1"></textarea>    
						</div>
 				   </div>
					
		
				
				</div>
				
				<!-- Col3 End -->
				<hr>
				
				<!-- Col4 -->
				
				<div class="col-sm-12 col-md-12">
					
					<div class="form-check">
					  <input class="form-check-input" name="confirm_check" type="checkbox" value="" id="defaultCheck1" required>
					  <label class="form-check-label" for="defaultCheck1">
        I confirm that I've read and agree to the Terms and Conditions . I certify that the wearer is over 16 years old and that they are not registered blind or partially sighted. I also confirm that the prescription details above have been entered correctly and I am happy that no errors have been made.
      					  </label>
					</div>
					<input type="hidden" name="hidden_id" id="hidden_id" value="<?php echo $temp_product_id ?>" />
			<?php
			$fetch_query3s = mysqli_query($conn,"SELECT * FROM product where id=$temp_product_id AND active=1");
				while($row3s=mysqli_fetch_array($fetch_query3s,MYSQLI_ASSOC)) { ?>
				<input type="hidden" name="hidden_name" id="hidden_name" value="<?php echo $row3s['name']; ?>" />
				<input type="hidden" name="hidden_price" id="hidden_price" value="" />
				<input type="hidden" name="hidden_image" id="hidden_image" value="<?php echo $row3s['image']; ?>" />
			<?php } ?>
			<!--Step1-->
			<input type="hidden" name="step1_option_type" id="step1_option_type" value="<?php echo $_SESSION['step1_option_type']; ?>" />
			<input type="hidden" name="step1_option_name" id="step1_option_name" value="<?php echo $_SESSION['step1_option_name']; ?>" />
			<input type="hidden" name="step1_option_price" id="step1_option_price" value="<?php echo $_SESSION['step1_option_price']; ?>" />
			<!--Step2-->
			<input type="hidden" name="step2_option_hidden_alize_forte" id="step2_option_hidden_alize_forte" value="<?php echo $_SESSION['step2_option_hidden_alize_forte']; ?>" />
			<input type="hidden" name="step2_option_hidden_alize_forte_price" id="step2_option_hidden_alize_forte_price" value="<?php echo $_SESSION['step2_option_hidden_alize_forte_price']; ?>" />
			<input type="hidden" name="step2_option_hidden_option_all" id="step2_option_hidden_option_all" value="<?php echo $_SESSION['step2_option_hidden_option_all']; ?>" />
			<input type="hidden" name="step2_option_hidden_option_all_price" id="step2_option_hidden_option_all_price" value="<?php echo $_SESSION['step2_option_hidden_option_all_price']; ?>" />
			<input type="hidden" name="step2_option_hidden_option_btn" id="step2_option_hidden_option_btn" value="<?php echo $_SESSION['step2_option_hidden_option_btn']; ?>" />
			<input type="hidden" name="step2_option_hidden_option_tint_info" id="step2_option_hidden_option_tint_info" value="<?php echo $_SESSION['step2_option_hidden_option_tint_info']; ?>" />
			<!--Step3-->
			<input type="hidden" name="step3_package_name" id="step3_package_name" value="<?php echo $_SESSION['step3_package_name']; ?>" />
			<input type="hidden" name="step3_package_price" id="step3_package_price" value="<?php echo $_SESSION['step3_package_price']; ?>" />
			<!--Customer Info-->
			<input type="hidden" name="hidden_cust_id" id="cust_id" value="<?php echo $_SESSION['id']; ?>" />
			<!--Prescription Name-->
			<input type="hidden" name="step4_presc_name" id="presc_name" value="" />
			<!-- If Edit Id -->
			<input type="hidden" name="edit" value="<?php echo $_GET['edit']; ?>" />
				<button type="submit" name="add_to_cart" class="btn btn-primary btn-lg btn-block add_presc_btn">Add Prescription</button>
	
					
		
				
				</div>
				
				<!-- Col4 End -->
				
				
				
			
				</div>
					
				
			</div>
			<!-- Col1 -->
			</form>
		<?php } ?>
			<!-- Col2 -->
			<div class="col-sm-9 col-md-9 col-lg-9 step_4_main_rows step4_hide" id="new_prescription_detail2">
				<a  href="#" class="" id="back2">< GO BACK</a>
				
				<div class="col-sm-12 col-md-12 col-lg-12  prescription_main_col">
					<h5 class="myaccount_heading">PRESCRIPTION</h5>
					<p class="presc_txt">Enter your prescription below, or send it later.</p>
					<p class="presc_txt">All prescriptions will be checked by one of our opticians and verified for any potential errors or delays, and they may contact you if they need to discuss your details any further.</p>
				
				</div>
					
				
			</div>
			<!-- Col2 -->
			<?php
			
		$fetch_query2 = mysqli_query($conn,"SELECT * FROM product where id=$temp_product_id AND active=1");
				while($row2=mysqli_fetch_array($fetch_query2,MYSQLI_ASSOC)) {
		?>
			<!-- Col2 -->
			<div class="col-sm-12 col-md-3 col-lg-3 step_img_main_col">
			
				<!-- Col1 -->
				<div class="col-sm-12 col-md-12 col-lg-12 step_img_heading_col product_question_col">
				
					<h5 class="step1_img_heading">
						<i class="fa fa-shopping-cart" aria-hidden="true"></i>
						Your Selected Items
					</h5>
									
				</div>
				
				<!-- Col1 End -->
				
				<p class="step_sub_heading"><?php echo $row2['name']; ?></p>
				
				<!-- Col2 -->
				<div class="col-sm-12 col-md-12 col-lg-12 step_img_main_col step_img_heading_col step_img_heading_col_bg">
					
					<img src="images/Products/<?php echo $row2['image']; ?>" class="step_img">
				
				</div>
				<hr>
				
				
				<!-- Col2 End -->
				
				<p class="step_sub_heading">FRAME INFO</p>
				
				<!-- COl3 Start -->
				
				<div class="col-sm-12 col-md-12 col-lg-12 step_side_tbl_col">
					
					<table class="step_side_tbl">
						<tr>
							<th class="step_side_tbl_heading">Brand:</th>
							<td class="step_side_tbl_data"><?php 
					$temp_brand = $row2['Brand'];
					$fetch_query5 = mysqli_query($conn,"SELECT * FROM brand where id=$temp_brand  AND active=1");
									while($row5=mysqli_fetch_array($fetch_query5,MYSQLI_ASSOC)) {
										echo $row5['Brand'];
									}
					 ?></td>
						
						</tr>
						
						<tr>
							<th class="step_side_tbl_heading">Colour:</th>
							<td class="step_side_tbl_data"><?php 
					$temp_color = $row2['Frame_Color'];
					$fetch_query6 = mysqli_query($conn,"SELECT * FROM frame_color where id=$temp_color  AND active=1");
									while($row6=mysqli_fetch_array($fetch_query6,MYSQLI_ASSOC)) {
										echo $row6['Frame_Color'];
									}
					 ?></td>
						
						</tr>
						
						
						<tr>
							<th class="step_side_tbl_heading">Size:</th>
							<td class="step_side_tbl_data"><?php 
					$temp_color = $row2['Frame_Size'];
					$fetch_query6 = mysqli_query($conn,"SELECT * FROM frame_size where id=$temp_color  AND active=1");
									while($row6=mysqli_fetch_array($fetch_query6,MYSQLI_ASSOC)) {
										echo $row6['Frame_Size'];
									}
					 ?></td>
						
						</tr>
						
						<tr>
							<th class="step_side_tbl_heading">Gender:</th>
							<td class="step_side_tbl_data"><?php 
					$temp_gender = $row2['Gender'];
					$fetch_query7 = mysqli_query($conn,"SELECT * FROM gender where id=$temp_gender AND active=1");
									while($row7=mysqli_fetch_array($fetch_query7,MYSQLI_ASSOC)) {
										echo $row7['Gender'];
									}
					 ?></td>
						
						</tr>
						<tr>
							<th class="step_side_tbl_heading">Shape:</th>
							<td class="step_side_tbl_data"><?php 
					$temp_shape = $row2['Shape'];
					$fetch_query8 = mysqli_query($conn,"SELECT * FROM shape where id=$temp_shape AND active=1");
									while($row8=mysqli_fetch_array($fetch_query8,MYSQLI_ASSOC)) {
										echo $row8['Shape'];
									}
					 ?></td>
						
						</tr>
						<tr>
							<th class="step_side_tbl_heading">Material:</th>
							<td class="step_side_tbl_data"><?php 
					$temp_marterial = $row2['Material'];
					$fetch_query9 = mysqli_query($conn,"SELECT * FROM material where id=$temp_marterial AND active=1");
									while($row9=mysqli_fetch_array($fetch_query9,MYSQLI_ASSOC)) {
										echo $row9['Material'];
									}
					 ?></td>
						
						</tr>
						<tr>
							<th class="step_side_tbl_heading">Measurements:</th>
							<td class="step_side_tbl_data"><?php echo $row2['fm_lense_width'] ." - ".$row2['fm_lense_bt_width']." - ".$row2['fm_stick_width']; ?></td>
						
						</tr>
						<tr>
							<th class="step_side_tbl_heading_price">Price: </th>
							<td class="step_side_tbl_data_price"><span class="my_theme_col2">$</span><span id="product_price"><?php echo $row2['Price']; ?></span></td>
						
						</tr>	
											
						
					
					</table>
				
				</div>
				
				<!-- COl3 End -->
				<hr>
				<!-- Col2 End -->
				
				<p class="step_sub_heading">Selected Options</p>
				
				<!-- COl3 Start -->
				
				<div class="col-sm-12 col-md-12 col-lg-12 step_side_tbl_col">
					
					<table class="step_side_tbl">
						<tr>
							<th class="step_side_tbl_heading"><?php
						if($_SESSION['step1_option_type'] == "none") { }
						else { echo $_SESSION['step1_option_type'];
							 }?></th>
							<td class="step_side_tbl_data">&nbsp;</td>
						
						</tr>
						
						<tr>
							<th class="step_side_tbl_heading"><?php echo $_SESSION['step1_option_name']; ?></th>
							<td class="step_side_tbl_data">$<?php echo $_SESSION['step1_option_price']; ?></td>
						
						</tr>
						
						<tr>
							<th class="step_side_tbl_heading"><?php echo $_SESSION['step2_option_hidden_alize_forte'] ?></th>
							<td class="step_side_tbl_data"><?php if(!empty($_SESSION['step2_option_hidden_alize_forte_price'])) { echo "$".$_SESSION['step2_option_hidden_alize_forte_price']; }
								else {} ?></td>
						
						</tr>
						
						<tr>
							<th class="step_side_tbl_heading"><?php echo $_SESSION['step2_option_hidden_option_all'] ?> <?php echo $_SESSION['step2_option_hidden_option_btn'] ?></th>
							<td class="step_side_tbl_data"><?php if(!empty($_SESSION['step2_option_hidden_option_all_price'])) { echo "$".$_SESSION['step2_option_hidden_option_all_price']; }
								else {} ?></td>
						</tr>
						
						<tr>
							<th class="step_side_tbl_heading"><?php echo $_SESSION['step2_option_hidden_option_tint_info'] ?></th>
							
						
						</tr>
						
						<tr>
							<th class="step_side_tbl_heading"><?php echo $_SESSION['step3_package_name'] ?></th>
							<td class="step_side_tbl_data"><?php if(!empty($_SESSION['step3_package_price'])) { echo "$".$_SESSION['step3_package_price']; }
								else {} ?></td>
						</tr>
						
						
						<!--
						<tr>
							<th class="step_side_tbl_heading">Size:</th>
							<td class="step_side_tbl_data">Black (1AB0A7)</td>
						
						</tr>
						
						<tr>
							<th class="step_side_tbl_heading">Gender:</th>
							<td class="step_side_tbl_data">£168.00</td>
						
						</tr>
						-->
											
						
					
					</table>
				
				</div>
				
				<!-- COl3 End -->
				<hr>
				
				
				<!-- COl3 Start -->
				
				<div class="col-sm-12 col-md-12 col-lg-12 step_side_tbl_col">
					
					<table class="step_side_tbl">
						<tr>
							<th class="step_side_tbl_heading_price">TOTAL: </th>
							<td class="step_side_tbl_data_price"><span class="my_theme_col2">$</span><span id="mytotal"></span></td>
						
						</tr>
						
					
					
					</table>
				
				</div>
				
				<!-- COl3 End -->

					
			<!--<input type="hidden" name="hidden_alize_forte" id="option_alize_forte" value="" />
			<input type="hidden" name="hidden_alize_forte_price" id="option_alize_forte_price" value="" />
			<input type="hidden" name="hidden_option_all" id="option_all" value="" />
			<input type="hidden" name="hidden_option_all_price" id="option_all_price" value="" />
			<input type="hidden" name="hidden_option_btn" id="option_btn_val" value="" />
			<input type="hidden" name="hidden_option_tint_info" id="option_tint_info_val" value="" />
			<input type="hidden" name="hidden_step1_option_price" id="hidden_step1_option_price" value="<?php //echo $_SESSION['step1_option_price']; ?>" />-->
			<!--Basic Fields-->
			<input type="hidden" name="hidden_id" id="hidden_id" value="<?php echo $temp_product_id ?>" />
			<?php
			$fetch_query3s = mysqli_query($conn,"SELECT * FROM product where id=$temp_product_id AND active=1");
				while($row3s=mysqli_fetch_array($fetch_query3s,MYSQLI_ASSOC)) { ?>
				<input type="hidden" name="hidden_name" id="hidden_name" value="<?php echo $row3s['name']; ?>" />
				<input type="hidden" name="hidden_price" id="hidden_price" value="" />
				<input type="hidden" name="hidden_image" id="hidden_image" value="<?php echo $row3s['image']; ?>" />
			<?php } ?>
			<!--Step1-->
			<input type="hidden" name="step1_option_type" id="step1_option_type" value="<?php echo $_SESSION['step1_option_type']; ?>" />
			<input type="hidden" name="step1_option_name" id="step1_option_name" value="<?php echo $_SESSION['step1_option_name']; ?>" />
			<input type="hidden" name="step1_option_price" id="step1_option_price" value="<?php echo $_SESSION['step1_option_price']; ?>" />
			<!--Step2-->
			<input type="hidden" name="step2_option_hidden_alize_forte" id="step2_option_hidden_alize_forte" value="<?php echo $_SESSION['step2_option_hidden_alize_forte']; ?>" />
			<input type="hidden" name="step2_option_hidden_alize_forte_price" id="step2_option_hidden_alize_forte_price" value="<?php echo $_SESSION['step2_option_hidden_alize_forte_price']; ?>" />
			<input type="hidden" name="step2_option_hidden_option_all" id="step2_option_hidden_option_all" value="<?php echo $_SESSION['step2_option_hidden_option_all']; ?>" />
			<input type="hidden" name="step2_option_hidden_option_all_price" id="step2_option_hidden_option_all_price" value="<?php echo $_SESSION['step2_option_hidden_option_all_price']; ?>" />
			<input type="hidden" name="step2_option_hidden_option_btn" id="step2_option_hidden_option_btn" value="<?php echo $_SESSION['step2_option_hidden_option_btn']; ?>" />
			<input type="hidden" name="step2_option_hidden_option_tint_info" id="step2_option_hidden_option_tint_info" value="<?php echo $_SESSION['step2_option_hidden_option_tint_info']; ?>" />
			<!--Step3-->
			<input type="hidden" name="step3_package_name" id="step3_package_name" value="<?php echo $_SESSION['step3_package_name']; ?>" />
			<input type="hidden" name="step3_package_price" id="step3_package_price" value="<?php echo $_SESSION['step3_package_price']; ?>" />
			<!--Customer Info-->
			<input type="hidden" name="hidden_cust_id" id="cust_id" value="<?php echo $_SESSION['id']; ?>" />
			<!--Prescription Name-->
			<input type="hidden" name="step4_presc_name" id="presc_name" value="" />
			<!-- If Edit Id -->
			<input type="hidden" name="edit" value="<?php echo $_GET['edit']; ?>" />
				
			
			</div>
			
			
			
			
			<!-- COl2 -->
			<?php } ?>
		</div>
		
		
	</div>	
	
		
		
<?php include 'footer.php' ?>		
	
<script>
//Set Prescription Name
$(document).on("keyup", "#prescription_name", function (e) {
		$("#presc_name").val($("#prescription_name").val());	
});
	

	
function total() {
	var a,b,c,d,e;
	if($('#step2_option_hidden_alize_forte_price').val() == "FREE" || $('#step2_option_hidden_alize_forte_price').val() == "") {
	   a = 0;
	} else { a = $('#step2_option_hidden_alize_forte_price').val(); }
	
	if($('#step2_option_hidden_option_all_price').val() == "FREE" || $('#step2_option_hidden_option_all_price').val() == "") {
	   b = 0;
	} else { b = $('#step2_option_hidden_option_all_price').val(); }
	
	if($('#step1_option_price').val() == "FREE" || $('#step1_option_price').val() == "") {
	   c = 0;
	} else { c = $('#step1_option_price').val(); }
	
	if($('#product_price').text() == "FREE" || $('#product_price').text() == "") {
	   d = 0;
	} else { d = $('#product_price').text(); }
	
	if($('#step3_package_price').val() == "FREE" || $('#step3_package_price').val() == "") {
	   e = 0;
	} else { e = $('#step3_package_price').val(); }
	
	var aa = parseInt(a);
	var bb = parseInt(b);
	var cc = parseInt(c);
	var dd = parseInt(d);
	var ee = parseInt(e);
	var total2 = (aa+bb+cc+dd+ee);
	$('#mytotal').text(total2);
	$('#hidden_price').val(total2);
}

	
//Prescription Buttons
//send_prescription
$(function() {
 $('#send_prescription').click(function(){
	 $('#main_row').addClass('step4_hide');
 });
});
	
	
//new_prescription
$(function() {
 $('#new_prescription').click(function(){
	 $('#main_row').addClass('step4_hide');
	 $('#new_prescription_detail').removeClass('step4_hide');
 });
});
	
	
//saved_prescription
$(function() {
 $('#saved_prescription').click(function(){
	 $('#main_row').addClass('step4_hide');
	 $('#new_prescription_detail2').removeClass('step4_hide');
	 
 });
});

//back
$(function() {
 $('#back').click(function(){
	 $('#new_prescription_detail').addClass('step4_hide');
	 
	 
	 $('#main_row').removeClass('step4_hide');
	 
 });
});
$(function() {
 $('#back2').click(function(){
	 $('#new_prescription_detail2').addClass('step4_hide');
	 
	 
	 $('#main_row').removeClass('step4_hide');
	 
 });
});

$( document ).ready(function() {
    //Total Price
	 total();
	
	//Hide
	$('#detail').addClass('step4_hide');
});
	
//precription
$(function() {
 $('#plus').click(function(){
	 $('#detail').removeClass('step4_hide');
	 $('#short').addClass('step4_hide');
 });
});
	
$(function() {
 $('#minus').click(function(){
	 $('#short').removeClass('step4_hide');
	 $('#detail').addClass('step4_hide');
 });
});
	

	

	
</script>
</body>
</html>