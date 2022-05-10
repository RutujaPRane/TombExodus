<?php

if(isset($_POST['insert']))
{$conn=mysqli_connect('sql306.epizy.com','epiz_31319075','RQFPNWVOKKoI','epiz_31319075_tombexodus');
if(!$conn)
{
die("connection failed:".mysqli_connect_error());
}
else{echo"Connection Successful";
}
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$contact=$_POST['contact'];
$sql="insert into userinfodata(name,email,message,contact)VALUES('$name','$email','$message','$contact')";
$query=mysqli_query($conn,$sql);
if($query)
{ 
?>

<script>
window.location.href = "index.php";
</script>

<?php 
}
else
{
echo"Unsuccessful".$query;
}
}

?>