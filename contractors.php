<?php include('part/menu.php');?>

        <div class="right">
            <a href="addContractor.php" class="submit-btn2">Add Contractor</a>
            <?php
          if(isset($_SESSION['add'])){
            echo $_SESSION['add'];  
            unset($_SESSION['add']); //remove session
          }

          if(isset($_SESSION['del'])){
            echo $_SESSION['del'];  
            unset($_SESSION['del']); //remove session
          }
          ?>
          </br>
          </br>
            <div class="form-box3">
                <table class="button-box3">
                    <thead>
                    <tr >
                        <th>ContractornId</th>
                        <th>Nip</th>
                        <th>Regon</th>
                        <th>name</th>
                        <th>Vat?</th>
                        <th>street</th>
                        <th>numberH</th>
                        <th>numberF</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                <?php
                $sql = "SELECT * from contractor";

                $res = mysqli_query($conn, $sql) or die(mysqli_error()); //save to database

                if($res==TRUE){
                    $rows=mysqli_num_rows($res);

                    if($rows>0){
                        while($rows = mysqli_fetch_assoc($res)){
                            $contractorId = $rows['contractorId'];
                            $Nip = $rows['Nip'];
                            $Regon = $rows['Regon'];
                            $name = $rows['name'];
                            $vat = $rows['vat'];
                            $street = $rows['street'];
                            $numberH = $rows['numberH'];
                            $numberF = $rows['numberF'];
    
                   
                ?>
                          <tbody>
                          <tr class="active-row">
                            <td><?php echo $contractorId ;?></td>
                            <td><?php echo $Nip ;?></td>
                            <td><?php echo $Regon ;?></td>
                            <td><?php echo $name ;?></td>
                            <td><?php echo $vat ;?></td>
                            <td><?php echo $street ;?></td>
                            <td><?php echo $numberH ;?></td> 
                            <td><?php echo $numberF ;?></td> 
                            <td>
                                <a href="update.php?contractorId=<?php echo $contractorId;?>" class="submit-btn4">Update</a>
                                <a href="delete.php?contractorId=<?php echo $contractorId;?>" class="submit-btn3">Delete</a>
                            </td> 
                            
                         
                                                                    
                        </tr>
                        </tbody>
                        <?php
                     }
                    }else{

                    }
                }else{

                }
                ?>
                </table>
                </div>
            
            </div>
        </div>
        
    </div>
   
    <?php include('part/social.php');?>
<?php include('part/footer.php');?>