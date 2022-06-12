<?php include('part/menu.php');?>
<div class="right">
            <div class="form-box">
            <div class="button-box">
            <h2 class="submit-btn">Upd contractor</h2>
            </div>
<?php
if(isset($_SESSION['upd'])){
    echo $_SESSION['upd'];  
    unset($_SESSION['upd']); //remove session
  }

  if(isset($_GET['contractorId'])){

        $contractorId = $_GET['contractorId'];

        $sql= "SELECT * FROM contractor where contractorId = $contractorId";

        $res = mysqli_query($conn, $sql)or die(mysqli_error());

            $rows=mysqli_num_rows($res);

            if($rows==1){
                $rows=mysqli_fetch_assoc($res);

                         $Nip =$rows['Nip'];
                        $Regon =$rows['Regon'];
                        $name =$rows['name'];
                        $vat =$rows['vat'];
                        $street =$rows['street'];
                        $numberH =$rows['numberH'];
                        $numberF =$rows['numberF'];
            }else{
                $_SESSION['upd'] = '<div class="submit-btn4">No data found</div>';
                header("location:".URL.'contractors.php');
        }
    }else{
    header("location:".URL.'contractors.php');
  }
?>
            
    
            <form action="" method="POST" class="input-group">
                    <input type="text" class="input-field" name="Nip" value="<?php echo $Nip ; ?>" >
                  <input type="text" class="input-field" name="Regon" value="<?php echo $Regon ; ?>"  >
                  <input type="text" class="input-field" name="name" value="<?php echo $name ; ?>"  >
                 <h2>Vat ?</h2> <input <?php if($vat == "on"){echo "checked";} ?> type="radio"  name="vat" values="on">On
                 <input <?php if($vat == "off"){echo "checked";} ?> type="radio"   name="vat" values="of" >Off 
                 </br></br> <input type="text" class="input-field" name="street" value="<?php echo $street ; ?>"  >
                  <input type="text" class="input-field" name="numberH" value="<?php echo $numberH ; ?>"  >
                  <input type="text" class="input-field" name="numberF" value="<?php echo $numberF ; ?>"  >
                  
            </br></br><button type="submit" name="submit" value="Upd contractor" class="submit-btn">Upd here</button>
    
            </form>
                </div>
            </div>
        </div>
        
    </div>
<?php include('part/social.php');?>
<?php include('part/footer.php');?>

<?php

    if(isset($_POST['submit'])){
        $Nip=$_POST['Nip'];
        $Regon=$_POST['Regon'];
        $name=$_POST['name'];
        $vat=$_POST['vat'];
        $street=$_POST['street'];
        $numberH=$_POST['numberH'];
        $numberF=$_POST['numberF'];
   

        $sql ="UPDATE  contractor set
        Nip='$Nip',
        Regon = '$Regon',
        name = '$name',
        vat = '$vat',
        street = '$street',
        numberH = '$numberH',
        numberF = '$numberF'
        where contractorId='$contractorId'
        ";

    $res2 = mysqli_query($conn, $sql);

    if($res2==true){
        $_SESSION['upd'] = '<div class="submit-btn4">Upd successfully</div>';
        header("location:".URL.'contractors.php');
    }else{
        $_SESSION['upd'] = '<div class="submit-btn4">Upd failed</div>';
        header("location:".URL.'update.php');
    }
}
?>