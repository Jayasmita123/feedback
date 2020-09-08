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
<!--            <th>Sl_no</th>-->
             <th>Qustions</th>
            <th>Very Good </th>
             <th>Good </th>
             <th>Impressive </th>
             <th>Bad </th>
             <th>Yes</th>
             <th>No</th>
             <th>Total no. of feedback</th>
             
         </tr><br>
        <tbody>

 <?php                            
                            require_once("Db_connection.php");
            
             $me="SELECT * FROM feedback ";
//                            $v1=count($me);
                            $c=mysqli_query($conn, $me);
                            $n=mysqli_num_rows($c);
                        echo " <h1>Total feedbacks given: $n</h1> ";
            
            
            
//            Question 1
                            $me11="SELECT * FROM feedback where q1=4";
//                            $v1=count($me);
                            $c11=mysqli_query($conn, $me11);
                            $n11=mysqli_num_rows($c11);
            
                            
                            $me12="SELECT * FROM feedback where q1=3";
//                            $v1=count($me);
                            $c12=mysqli_query($conn, $me12);
                            $n12=mysqli_num_rows($c12);
            
                            $me13="SELECT * FROM feedback where q1=2";
//                            $v1=count($me);
                            $c13=mysqli_query($conn, $me13);
                            $n13=mysqli_num_rows($c13);
                            
                            $me14="SELECT * FROM feedback where q1=1";
//                            $v1=count($me);
                            $c14=mysqli_query($conn, $me14);
                            $n14=mysqli_num_rows($c14);
//            Question 2
            
                            $me21="SELECT * FROM feedback where q2=4";
//                            $v1=count($me);
                            $c21=mysqli_query($conn, $me21);
                            $n21=mysqli_num_rows($c21);
            
                            $me22="SELECT * FROM feedback where q2=3";
//                            $v1=count($me);
                            $c22=mysqli_query($conn, $me22);
                            $n22=mysqli_num_rows($c22);
                            
            
                            $me23="SELECT * FROM feedback where q2=2";
//                            $v1=count($me);
                            $c23=mysqli_query($conn, $me23);
                            $n23=mysqli_num_rows($c23);
            
            
                            $me24="SELECT * FROM feedback where q2=1";
//                            $v1=count($me);
                            $c24=mysqli_query($conn, $me24);
                            $n24=mysqli_num_rows($c24);
                        
//            Question 3
                            $me31="SELECT * FROM feedback where q3='1'";
//                            $v1=count($me);
                            $c31=mysqli_query($conn, $me31);
                            $n31=mysqli_num_rows($c31);
                        
                
                            $me32="SELECT * FROM feedback where q3='0'";
//                            $v1=count($me);
                            $c32=mysqli_query($conn, $me32);
                            $n32=mysqli_num_rows($c32);
            
//            Question 4
                            $me41="SELECT * FROM feedback where q4=4";
//                            $v1=count($me);
                            $c41=mysqli_query($conn, $me41);
                            $n41=mysqli_num_rows($c41);
            
            
                            $me42="SELECT * FROM feedback where q4=3";
//                            $v1=count($me);
                            $c42=mysqli_query($conn, $me42);
                            $n42=mysqli_num_rows($c42);
            
            
                            $me43="SELECT * FROM feedback where q4=2";
//                            $v1=count($me);
                            $c43=mysqli_query($conn, $me43);
                            $n43=mysqli_num_rows($c43);
            
            
                            $me44="SELECT * FROM feedback where q4=1";
//                            $v1=count($me);
                            $c44=mysqli_query($conn, $me44);
                            $n44=mysqli_num_rows($c44);
                        
            $n1=$n11+$n21+$n41;
            $n2=$n12+$n22+$n42;
            $n3=$n13+$n23+$n43;
            $n4=$n14+$n24+$n44;
            
            $n5=$n31;
            $n6=$n32;
            
                
            
              $n7=$n11+$n12+$n13+$n14;
            $n8=$n21+$n22+$n23+$n24;
            $n9=$n31+$n32;
            $n10=$n41+$n42+$n43+$n44;
            
            
            echo "<tr><td>How satisfied are you with our interaction ?</td><td> $n11</td><td>$n12</td><td>$n13</td><td>$n14</td><td></td><td></td><td>$n7</td>";
            echo "<tr><td>How much this workshop ignite you for the devolopment??</td><td> $n21</td><td>$n22</td><td>$n23</td><td>$n24</td><td></td><td></td><td>$n8</td>";
            echo "<tr><td> The session was well placed within the alloted time?? </td><td></td><td></td><td></td><td></td><td>$n31</td><td>$n32</td><td>$n9</td>";
            echo "<tr><td>Overall, How useful was this workshop for you??</td><td> $n41</td><td>$n42</td><td>$n43</td><td>$n44</td><td></td><td></td><td>$n10</td>";
            echo "<tr style='background-color:skyblue;'><td>TOTAl</td><td> $n1</td><td>$n2</td><td>$n3</td><td>$n4</td><td>$n5</td><td>$n6</td><td></td>";
                           ?>
     </tbody>
            </table></div>
            </body>
    </html>