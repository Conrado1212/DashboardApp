<?php include('part/menu.php');?>
        
        <div class="right">
            <div class="form-box2">
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                  <label for="color-picker">
                    Select a color
                    <input type="color" name="color-picker" id="color-picker" value="#808080" />
                  </label>
                <table class="button-box2">
                        <thead>
                        <tr >
                            <th>employeeId</th>
                            <th>name</th>
                            <th>surname</th>
                            <th>position</th>
                            <th>employment data</th>
                            <th>Holiday</th>
                            
                        </tr>
                        </thead>
                              <tbody>
                              <tr class="active-row"  style="--bg-color: #808080;">
                                <td>1</td>
                                <td>Maniek</td>
                                <td>Stychurski</td>
                                <td>Manager</td>
                                <td>21.04.2020</td>
                                <td>20</td>      
                                <tr class="active-row">
                                    <td>2</td>
                                    <td>Maniek</td>
                                    <td>Stychurski</td>
                                    <td>Manager</td>
                                    <td>21.04.2020</td>
                                    <td>20</td>                 
                                    <tr class="active-row">
                                        <td>3</td>
                                        <td>Maniek</td>
                                        <td>Stychurski</td>
                                        <td>Manager</td>
                                        <td>21.04.2020</td>
                                        <td>20</td>                 
                                        <tr class="active-row">
                                            <td>4</td>
                                            <td>Maniek</td>
                                            <td>Stychurski</td>
                                            <td>Manager</td>
                                            <td>21.04.2020</td>
                                            <td>20</td>       
                                            <tr class="active-row">
                                                <td>5</td>
                                                <td>Maniek</td>
                                                <td>Stychurski</td>
                                                <td>Manager</td>
                                                <td>21.04.2020</td>
                                                <td>20</td>                                 
                            </tr>
                            </tbody>
                    </table>
            </div>
            
        </div>
     </div>
        
    </div>
   
   
<?php include('part/social.php');?>



<script>
    var $colorPicker = $('#color-picker').on('change', changeTableRowColor);

function changeTableRowColor() {
  var selectedColor = $colorPicker.val(),
    $targetRows = $('table tr.active-row'),
    numberRows = $targetRows.length;

  for (var i = 0; i < numberRows; i++) {
    $targetRows[i].style.setProperty('--bg-color', selectedColor);
  }

} 


function changeTableRowColorr() {
  var selectedColor = $colorPicker.val(),
    $targetRows = $('table tr.active-row'),
    numberRows = $targetRows.length;

  for (var i = 0; i < numberRows; i++) {
    $targetRows[i].style.setProperty('--bg-color', selectedColor);
  }

}
</script>
<?php include('part/footer.php');?>