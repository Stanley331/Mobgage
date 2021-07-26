<!DOCTYPE html>  
<html>  
<head>  
</head>  
<body style = "text-align: center; font-size: 20px;">  
<h1> SWAPING!! </h1>  

<form method="post">  
    Enter the First Number:
    <input type="text" name="num1">  
    <br>
    Enter the Second Number:
    <input type="text" name="num2">  
	<br><br>
    <input type="submit" name="submit">  
	<br>
</form>

<?php   
    if($_POST)
	{    
        $num1 = $_POST['num1'];  
        $num2 = $_POST['num2']; 
        echo "AFTER SWAPPING...."."<br>";   
        $temp = $num1;
        $num1 = $num2;
        $num2 = $temp; 
        echo "Number1 : $num1 <br>";  
        echo "Number2 : $num2 <br>"; 
    }  
?>  
</body>  
</html>