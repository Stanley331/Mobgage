<!DOCTYPE html>  
<html>  
<head>  
</head>  
<body style = "text-align: center; font-size: 20px;">  

 Welcome
<?php echo $this->session->userdata('name'); ?>

<br>
No. of hits for this page is 
<?php echo $this->session->userdata('counter'); ?>

<br>
<a href = 'http://localhost:81/Coding/Session_ex/unset_sess_var'>
    Click Here
</a>to unset the session data.

</body>  
</html>