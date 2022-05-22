<?php
    include_once 'header.php';
?>

<div class="container">
    <!-- Displaying All the Data -->
    <div id="country_data" class="row text-center" style='margin-top:50px;'>
    <?php
        // getting the response from the url 
        $url = "https://restcountries.eu/rest/v2/all";
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
    </div>
</div>

<?php
    include_once 'footer.php';
?>