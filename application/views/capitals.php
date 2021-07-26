<html>
<body>
<form method="POST">
<select name="country">
<?php foreach($ccaps as $key=>$value)
{
    ?>
    <option value="<?php echo $key;?>"><?php echo $key;?></option>
<?php } ?>

</select>
<input type ="submit" name ="sub" value="find capital">
<input type ="submit" name ="btn1" value="Hello">
<?php 
echo "the capital is $cap";
?>
</form>
</body>
</html>