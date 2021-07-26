<html>
<body>
<table>
<tr>
<th>Book Id</th>
<th>Book Title></th>
</tr>
<?php
foreach($book as $id=>$title)
{
    ?>
    <tr>
    <td><?php echo $id?></td>
    <td><?php echo $title?></td>
    </tr>
    <?php }?>
</table>
</body>
</html>