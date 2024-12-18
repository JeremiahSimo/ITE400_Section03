<?php
include 'includes/connection.php';

$sql = "SELECT * FROM `registration_table` WHERE delete_status=0 ";
$result = $conn->query($sql);


?>



<table class="table datatable">
                <thead>
                  <tr>
                    <th>ID    </th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Birthday</th>
                    <th colspan=2>action</th>
                    
                  </tr>
                </thead>
                <tbody>
                  
                            <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['birthday']; ?></td>
                            <td>
                            <button type="button" class="btn btn-warning" >Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>        
                            </td>
                    
                        </tr>
                        <?php endwhile; ?>
                            
                        
                </tbody>
              </table>

              
