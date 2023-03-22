<?php
function logic(){
    echo "smart<p></p>";
}
logic();
?>

<?php
   $connect = mysqli_connect("localhost","root","","logic");

   if ($connect){
    echo "Connected Successfully";
   } else{
    echo "Not connected";
   }
?>