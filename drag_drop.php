<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery UI Draggable - Default functionality</title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<!--<link rel="stylesheet" href="/resources/demos/style.css">-->
<style>
#draggable {border: none;margin-top:-25.2px; }
</style>
<script>
$(function() {
$( "#draggable" ).draggable();
    $("#click").click(function(){
        var htmlVal = $("#dropsection").html();
        $.post( "html_to_pdf.php", { htmldata: htmlVal })
        .done(function( data ) {
        //alert( "Data Loaded: " + data );
        });
    });
});
</script>
</head>
<body>
<div id="dropsection">
<?php  $homepage = file_get_contents('http://localhost/ex1/MyAccess.html');
echo $homepage;
?>

<div id="draggable" class="ui-widget-content">
<?php
$im = file_get_contents('http://localhost/ex1/images.jpeg');
$imdata = base64_encode($im);
?>
<img src="data:image/png;base64,<?=$imdata?>"/>
</div>
</div>
<input type="button" id="click" value="convert"/>
</body>
</html>