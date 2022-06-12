<?php include('part/menu.php'); ?>
<div class="right">
            <div class="form-box">
            <div class="button-box">
            <h2 class="submit-btn">Add contractor</h2>
            </div>
            <?php
          if(isset($_SESSION['add'])){
            echo $_SESSION['add'];  
            unset($_SESSION['add']); //remove session
          }
        ?>
            
    
            <form action="" method="POST" class="input-group">
                    <input type="text" class="input-field" name="NIP" placeholder="Your NIP" required>
                  <input type="text" class="input-field" name="REGON" placeholder="Your REGON" required>
                  <input type="text" class="input-field" name="name" placeholder="Your name" required>
                 <h2>Vat ?</h2> <input type="radio"  name="vat" values="YES">YES
                 <input type="radio"   name="vat" values="No" >NO 
                 </br></br> <input type="text" class="input-field" name="street" placeholder="Your street" required>
                  <input type="text" class="input-field" name="numberH" placeholder="Your houseNumber" required>
                  <input type="text" class="input-field" name="numberF" placeholder="Your flatNumber" required>
                  
            </br></br><button type="submit" name="submit" value="Add admin" class="submit-btn">Add here</button>
    
            </form>
                </div>
            </div>
        </div>
        
    </div>
<?php include('part/social.php'); ?>
<?php include('part/footer.php'); ?>
<?php
if(isset($_POST['submit'])){
    $NIP=mysqli_real_escape_string($conn,$_POST['NIP']);
    $REGON=mysqli_real_escape_string($conn,$_POST['REGON']);
    $name=mysqli_real_escape_string($conn,$_POST['name']);

    if(isset($_POST['vat'])){
        $vat=$_POST['vat'];

    }else{
        $vat="No";
    }

    $street=mysqli_real_escape_string($conn,$_POST['street']);
    $numberH=mysqli_real_escape_string($conn,$_POST['numberH']);
    $numberF=mysqli_real_escape_string($conn,$_POST['numberF']);

    $sql = "INSERT INTO contractor set
    NIP = '$NIP',
    REGON = '$REGON',
    vat = '$vat',
    street = '$street',
    numberH = '$numberH',
    numberF = '$$numberF'
    ";

    $res = mysqli_query($conn,$sql) or die(mysqli_error());

    if($res==true){
        $_SESSION['add'] = '<div class="submit-btn">Added successfully</div>';

        header("location:".URL.'contractors.php');
    }else{
        $_SESSION['add'] = '<div class="submit-btn">Added successfully</div>';

        header("location:".URL.'addContractor.php');
    }
}
?>