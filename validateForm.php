<?php


$conn = mysqli_connect("localhost","wolfsrvy_opinion","wEzpL6xwXW5U","wolfsrvy_wolfopinion");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
if(isset($_POST['email'])){
   $sql = "SELECT * FROM users WHERE email='".$_POST['email']."'";
}
if(isset($_POST['linkedln'])){
   $sql = "SELECT * FROM users WHERE linked_profile='".$_POST['linkedln']."'";
}
if(isset($_POST['bemail'])){
   $sql = "SELECT * FROM users WHERE business_email='".$_POST['bemail']."'";
}
if(isset($_POST['phone'])){
   $sql = "SELECT * FROM users WHERE phone_number='".$_POST['phone']."'";
}

$result=$conn->query($sql);
$row= mysqli_num_rows($result);
$conn->close();

echo json_encode(['count'=>$row]);

?>