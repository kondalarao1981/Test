<!DOCTYPE html>
<html>
<head>
     <script type="text/javascript" src="jquery-3.0.0.min.js"></script>

</head>
<body>


<form id="uploadform" 
method="post" enctype="multipart/form-data">

<p><a href="#" 
id="addupload">Add another upload control</a></p>
<div style="width:250px; height:auto; border:1px #000 solid; padding:10px;">
<label>Upload Text File:</label> <input type="file" 
name="file[]" class="imageupload">
<div id="display"></div>    ""

<input type="submit" value="submit" 
name="submit" id="submit">
 </div>    
</form> 
<script type="text/javascript">

$(function(){
    $('#addupload').click(function(){
        var addControl = '<label>Upload Text File:</label>';
    c    addControl += ' <input type="file" 
        name="file[]" class="imageupload">';
        $('#display').before(addControl); 
    });
});

</script>
</body>
</html>