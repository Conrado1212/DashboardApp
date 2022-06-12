<?php include('part/menu.php');?>
        
        <div class="right">
            <div class="form-box3">
                <table class="button-box3">
                    <thead>
                    <tr >
                        <th>delegationId</th>
                        <th>fullName</th>
                        <th>Data from</th>
                        <th>Data to</th>
                        <th>Place  from </th>
                        <th>Place  to</th>
                       
                        
                    </tr>
                    </thead>
                    <?php
                        $sql = "SELECT * from delegation";

                        $res= mysqli_query($conn,$sql) or die(mysqli_error());

                        if($res==true){
                            $rows = mysqli_num_rows($res);

                            if($rows>0){
                                while($rows=mysqli_fetch_assoc($res)){
                                    $delegationId=$rows['delegationId'];
                                    $fullName=$rows['fullName'];
                                    $DataFrom=$rows['DataFrom'];
                                    $DataTo=$rows['DataTo'];
                                    $PlaceFrom=$rows['PlaceFrom'];
                                    $PlaceTo=$rows['PlaceTo'];
                           
                    ?>
                          <tbody>
                          <tr class="active-row">
                            <td><?php echo $delegationId ;?></td>
                            <td><?php echo $fullName ;?></td>
                            <td><?php echo $DataFrom ;?></td>
                            <td><?php echo $DataTo ;?></td>
                            <td><?php echo $PlaceFrom ;?></td>
                            <td><?php echo $PlaceTo ;?></td> 
                                                                    
                        </tr>
                        </tbody>
                        <?php
                        }
                    }
                }
                        ?>
                </table>
                </div>
            
            </div>
        </div>
        
    </div>
   
   
 <?php include('part/social.php');?>
<?php include('part/footer.php');?>