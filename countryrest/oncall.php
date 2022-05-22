<?php
    include_once 'header.php';
?>

<div class="container">
    <!--  -->
    <form action="oncall.php" method="POST" style='margin-top:10px;'>
        <div class="form-group">
            <label for="call_code">Enter Calling Code</label>
            <input id="call_code" name="call_code" type="number" class="form-control" placeholder="Calling Code" required>
        </div>
        <div class="form-group">
            <input id="submit" type="submit" class="form-control btn btn-primary btn-block" value="Search">
        </div>
    </form>
    <!-- Displaying All the Data -->
    <div id="country_data" class="container row text-center">
        <?php if($_SERVER['REQUEST_METHOD'] == 'POST'){?>
            <?php if(isset($_POST['call_code'])){?>
                <?php
                    // getting the response from the url 
                    $url = "https://restcountries.eu/rest/v2/callingcode/".urlencode($_POST['call_code']);
                    $response = file_get_contents($url);
                    $response = json_decode($response, true);
                    foreach($response as $country){ ?>
                        <div class="col">
                            <h3 id="country"><?=$country['name']?></h3>
                        </div>
                        <div class="w-100"></div>   
                        <div class="col">
                            <h5>
                                Population: <span id="population"><?=$country['population']?></span>
                            </h5>
                        </div>
                        <div class="w-100"></div>
                        <div class="col">
                            <h5>
                                Area: <span id="area"><?=$country['area']?></span>
                            </h5>
                        </div>
                        <div class="w-100"></div>
                        <div class="col">
                                <?php
                                    $currency_array = $country['currencies'];
                                    $currency_string = "";
                                    if(sizeof($currency_array) == 1){
                                        $currency_string .= $currency_array[0]['name']."(".$currency_array[0]['symbol'].")";
                                    }else{
                                        foreach($currency_array as $currency){
                                            $currency_string .= $currency['name']."(".$currency['symbol']."), ";
                                        }
                                    }
                                ?>
                                <h5>
                                    Currency: <span id="currency"><?=$currency_string?></span>
                                </h5>
                            </div>
                            <div class="w-100"></div>
                            <div class="col">
                                <?php
                                    $lang_array = $country['languages'];
                                    $lang_string = "";
                                    if(sizeof($lang_array) == 1){
                                        $lang_string .= $lang_array[0]['name']."(".$lang_array[0]['nativeName'].")";
                                    }else{
                                        foreach($lang_array as $lang){
                                            $lang_string .= $lang['name']."(".$lang['nativeName']."), ";
                                        }
                                    }
                                ?>
                                <h5>
                                    Languages: <span id="languages"><?=$lang_string?></span>
                                </h5>
                            </div>
                        <div class="w-100"></div>
                        <div class="col">
                            <h5>
                                Capital: <span id="capital"><?=$country['capital']?></span>
                            </h5>
                        </div>
                        <div class="w-100"></div>
                        <div class="col">
                            <img id="flag_img" src="<?=$country['flag']?>" width="150px">
                        </div>
                        <div class="w-100" style="border: 1px solid; margin: 5px;"></div>
                    <?php }?>
                <?php }?>
            <?php }?>
    </div>
</div>

<?php
    include_once 'footer.php';
?>