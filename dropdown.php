<html>
<head>
<script>
function check() {
    var dropdown = document.getElementById("selectSubDomain");
    var current_value = dropdown.options[dropdown.selectedIndex].value;

    if (current_value == "New") {
        document.getElementById("domain_name").style.display = "block";
    }
    else {
        document.getElementById("domain_name").style.display = "none";
    }
}

</script>
</head>
<body>
<label class="control-label col-sm-2" for="CliAppSubDomain"><strong>Seelct Domain</strong></label>
<div class="col-sm-8"> 
        <select class="form-control" id="selectSubDomain" name="ComSubDomain" onChange="check(this);">
        <option value="">Select</option>
        <option value="A1">A1</option>
        <option value="A2">A2</option>        
        <option value="New">Add New</option>                                 
        </select>
        
    </div>
    
    <br />
    
 
    <div class="col-sm-8" id="domain_name" style="display: none;"> 
    <label class="control-label col-sm-2" for="CliAppSubDomain"><strong>New Domain</strong></label>
        <input type="text" name="new_domain" value="" />        
    </div>
    
</body>
</html>