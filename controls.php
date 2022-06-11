<?php include('part/menu.php');?>
        
        <div class="right">
            <div class="form-box">
            <div class="button-box">
            <h2 class="submit-btn">Add controls</h2>
            </div>
            
            
    
            <form action="" method="POST" class="input-group">
                  <input type="text" class="input-field" name="NIP" placeholder="Your NIP" required>
                  <input type="text" class="input-field" name="REGON" placeholder="Your REGON" required>
                  <input type="text" class="input-field" name="NAME" placeholder="Your NAME" required>
                  <input type="date" class="input-field" name="date" placeholder="Your date" required>
                  <input type="text" class="input-field" name="street" placeholder="Your street" required>
                  <input type="text" class="input-field" name="houseNumber" placeholder="Your houseNumber" required>
                  <input type="text" class="input-field" name="flatNumber" placeholder="Your flatNumber" required>
                  <textarea type="text" class="input-field" name="remarks" placeholder="Your remarks" required></textarea><br>
                 Color <select name="color" id="">
                      <option value="1">Green</option>
                      <option value="2">Blue</option>
                      <option value="3">Gray</option>
                      <option value="4">Turquoise</option>
                      <option value="5">Navy</option>
                      <option value="6">Red</option>
                      <option value="7">White</option>
                  </select>
                </br><br>Vat <select name="Vat" id="">
                    <option value="1">ZW</option>
                    <option value="2">NP</option>
                    <option value="3">0%</option>
                    <option value="4">3%</option>
                    <option value="5">8%</option>
                    <option value="6">23%</option>
                </select>
                <ol>
                    <li> Element </li>
                    <li> Element</li>
                    <li> Element</li>
                 </ol> 
            </br></br><button type="submit" name="submit" value="Add admin" class="submit-btn">Click here</button>
    
            </form>
                </div>
            </div>
        </div>
        
    </div>
   
   
<?php include('part/social.php');?>
<?php include('part/footer.php');?>