<?php include('part/menu.php');?>
        
        <div class="right">
            <div class="form-box3">
            <table class="button-box3">
                <thead>
                <tr >
                    <th>vatId</th>
                    <th>Desc</th>
                    <th>MPK</th>
                    <th>Quantity</th>
                    <th>Vat </th>
                    <th>Kwota Brutto</th>
                    <th>Wartosc Netto</th>
                    <th>Wartosc Brutto</th>
                    <th>Action</th>
                    
                </tr>
                </thead>
                      <tbody>
                      <tr id="vatek" class="active-row">
                        <td>1</td>
                        <td>xx</td>
                        <td>Stychurski</td>
                        <td>Manager</td>
                        <td>21.04.2020</td>
                        <td>20</td> 
                        <td >2022</td>    
                        <td>20</td>  
                        <td>
                                <a href="#" type="button" class="submit-btn3" onclick="setColor('#e47911')">Change</a>
                            </td>                  
                        <tr class="active-row">
                            <td>2</td>
                            <td>xxx</td>
                            <td>Stychurski</td>
                            <td>Manager</td>
                            <td>21.04.2020</td>
                            <td>20</td> 
                            <td>2011</td>    
                            <td>20</td>   
                            <td>
                                <a href="#"  type="button" class="submit-btn3">Change</a>
                            </td>                            
                            <tr class="active-row">
                                <td>3</td>
                                <td>Manxxxiek</td>
                                <td>Stychurski</td>
                                <td>Manager</td>
                                <td>21.04.2020</td>
                                <td>20</td>  
                                <td>2066</td>    
                                <td>20</td>  
                                <td>
                                <a href="#" type="button" class="submit-btn3">Change</a>
                            </td>                            
                                <tr class="active-row">
                                    <td>4</td>
                                    <td>Maniek</td>
                                    <td>Stychurski</td>
                                    <td>Manager</td>
                                    <td>21.04.2020</td>
                                    <td>20</td>  
                                    <td>120</td>    
                                    <td>20</td>   
                                    <td>
                                <a href="#" type="button" class="submit-btn3">Change</a>
                            </td>                 
                                    <tr class="active-row">
                                        <td>5</td>
                                        <td>Maniek</td>
                                        <td>Stychurski</td>
                                        <td>Manager</td>
                                        <td>21.04.2020</td>
                                        <td>20</td>      
                                        <td>720</td>    
                                        <td>20</td> 
                                        <td>
                                <a href="#" type="button" class="submit-btn3">Change</a>
                            </td>                               
                    </tr>
                    </tbody>
            </table>
            </div>
            </div>
        </div>
        
    </div>
   
   
    <?php include('part/social.php');?>
    <?php include('part/footer.php');?>
    <script>
   function setColor(color){ 
    
    document.getElementById("vatek").style.backgroundColor=color;
};
</script>