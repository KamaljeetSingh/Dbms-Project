<html>
   
   <head>
      <title>Inserting a Record in MySQL Database</title>
   </head>
   
   <body>
      <?php
         if(isset($_POST['updates']))
         {
            include 'mysql_conn.php';
            
            $emp_id = $_POST['emp_id'];
            $emp_salary = $_POST['emp_salary'];
            
            $sql = "Insert into voter_list values($emp_id,5678,'$emp_salary')" ;
            mysql_select_db('kamal_test');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval )
            {
               die('Could not update data: ' . mysql_error());
            }
            echo "Updated data successfully\n";
            
            mysql_close($conn);
         }
         else
         {
            ?>
               <form method="post" action="<?php $_PHP_SELF ?>">
                  <table width="400" border="1" cellspacing="1" cellpadding="2">
                  
                     <tr>
                        <td width="100">Voter_Id</td>
                        <td><input name="emp_id" type="text" value="101"></td>
                     </tr>
                    
                     <tr>
                        <td width="100">OTP</td>
                        <td><input name="emp_salary" type="text" value="YES"></td>
                     </tr>
                  
                     <tr>
                        <td width="100"> </td>
                        <td> </td>
                     </tr>
                  
                     <tr>
                        <td width="100"> </td>
                        <td>
                           <input name="updates" type="submit" value="Update">
                        </td>
                     </tr>
                  
                  </table>
               </form>
            <?php
         }
      ?>
   </body>
</html>