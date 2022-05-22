<!doctype html>
<html>
    <head>
        <title>Form Markup</title>
    </head>
    <body>
        <form action="selector_operation.php" method="get" id="demoForm" class="demoForm">
            <select name="demoSel[]" id="demoSel" size="4" multiple>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="8">9</option>
                <option value="10">10</option>
            </select>
            <input type="submit" value="Submit" />
            <textarea name="display" id="display" placeholder="List of Numbers" cols="20" rows="4" readonly></textarea>
        </form>
    </body>
</html>

<script>

    // anonymous function onchange for select list with id demoSel
    document.getElementById('demoSel').onchange = function(e) {
        // get reference to display textarea
        var display = document.getElementById('display');
        display.innerHTML = ''; // reset
        
        // callback fn handles selected options
        getSelectedOptions(this, callback);
        
        // remove ', ' at end of string
        var str = display.innerHTML.slice(0, -2);
        display.innerHTML = str;
    };
 
    // arguments: reference to select list, callback function (optional)
    function getSelectedOptions(sel, fn) {
        var opt, len=sel.options.length;
        
        // loop through options in select list
        for (let i=0; i<len; i++) {
            opt = sel.options[i];
            // check if selected
            if ( opt.selected ) {
                // invoke optional callback function if provided
                if (fn) {
                    fn(opt);
                }
            }
        }
    }

    // a call back function that appends the data in the text area 
    // example callback function (selected options passed one by one)
    function callback(opt) {
        // display in textarea for this example
        var display = document.getElementById('display');
        display.innerHTML += opt.value + '; ';

        // can access properties of opt, such as...
        //alert( opt.value )
        //alert( opt.text )
        //alert( opt.form )
    }
</script>