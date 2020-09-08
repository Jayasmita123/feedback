<!doctype html>
<html><head>
    <style>
        th
        {
            font-size: 20px;
            background-color: skyblue;
/*            width: 500px;*/
/*            height: 20px;*/
            height: 50px;
            
        }
        
        td{
            text-align: center;
            font-size:15px;
/*            width:30%;*/
              height: 50px;

            
            
          }
       tr:nth-child(odd)
        {
            background-color: lightgrey;
        }
        tr:nth-child(even)
        {
            background-color: grey;
            color: white;
        }
       
    </style>
    </head>
    <body>
        <div style="overflow-x:auto;">
    <table width=100%  >
         <tr>
            <th>Sl_no</th>
             <th>Name</th>
            <th>Email Id</th>
             <th>Phone Number </th>
             <th>Question1 </th>
             <th>Question2 </th>
             <th>Question3</th>
             <th>Question 4</th>
             <th>Message</th>
             
         </tr><br>
        <tbody>

        <?php                            
            require_once("Db_connection.php");
             $me="SELECT * FROM feedback";
             $c=mysqli_query($conn, $me);
                $n=mysqli_num_rows($c);
                            if($n==0)
                            {
                                echo "no data found";
                            }   
                            else
                            {
                                $i=1;
                                while($fe= ($c->fetch_assoc()))
                                {                                     
                                    $name=$fe['name']; 
                                    $email=$fe['email_id'];
                                    $phone=$fe['phone_number'];
                                    $q1=$fe['q1'];
                                    $q2=$fe['q2'];
                                    $q3=$fe['q3'];
                                    $q4=$fe['q4'];
                                    $msg=$fe['message'];
                                    echo "<tr><td>$i</td><td>$name</td><td>$email</td><td>$phone</td><td>$q1</td><td>$q2</td><td>$q3</td><td>$q4</td><td>$msg</td></tr>";  
                                    $i++;
                                }
                                 echo "<br>";
                            }
            
        ?>
     </tbody>
            </table></div>
            </body>
    </html>