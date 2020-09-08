<?php
require_once("Db_connection.php");
if(isset($_POST['feedback_submit'])){
 
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
    
    if(isset($_POST['q1'])){
$a1=$_POST['q1'];
    }
    else{
$a1='';
    }
if(isset($_POST['q2'])){
    $a2=$_POST['q2'];
}else{
 $a2='';   
}
if(isset($_POST['q3'])){
    $a3=$_POST['q3'];
}
else{
     $a3='';  
}
  if(isset($_POST['q4'])){
        $a4=$_POST['q4'];  
  }else{
    $a4='';    
  }
$a5=$_POST['message'];

    
    
    
if($a1=='' || $a2==''  || $a3=='' || $a4==''){
    echo"<script>alert('PLEASE ANSWER ALL THE QUESTIONS...');window.location='index.php';</script>";
}
    else
    {
        
//echo "<script>alert('$a1,$a2,$a3,$a4,$a5');</script>";
         $me="SELECT * FROM feedback where email_id ='$email' and phone_number='$phone'";
                            $c=mysqli_query($conn, $me);
                           $n=mysqli_num_rows($c);
                            if($n==0)
                            {
                                $sql="INSERT INTO feedback (name,phone_number,email_id,q1,q2,q3,q4,message,Date) VALUES('$name','$phone','$email','$a1','$a2','$a3','$a4','$a5',CURRENT_DATE)" ;
                                if(mysqli_query($conn, $sql))
                                {
                                    
                                    echo"<script>alert( 'Your feedback has been successfully sent'); window.location='greeting.php';</script>";
                                }
                                else{
                                    echo "<script>alert('retry...');/script>";
                                }
                            }   
                            else
                            {
                                echo " <script>alert( 'Email or Phone Number exists'); window.location='greeting.php';  </script>";
                               
                            }
    }


}
?>