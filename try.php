<?php
if(isset($_POST['submit']))
{
$code1=$_POST['code1'];
$code=$_POST['code']; 
if($code1!="$code")
{
$msg="Invalide code"; 
}
else
{
$msg="Your code is correct";
}
}
?>
<form name="form" method="post">
<p>Type Below this code <?php $Random_code=rand(); echo$Random_code; ?> </p><br />
<p>Enter the random code<br />
<input type="text" name="code1" title="random code" />
<input type="hidden" name="code" value="<?php echo $Random_code; ?>" />
</p>
<p><input type="submit" value="check" title="code check" name="submit"/></p>
</form>
<p><?php if(isset($_POST['submit']))
{ echo $msg; } ?>
</p>