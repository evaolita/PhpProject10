<!DOCTYPE html>
<html><body>
    <?php
    
    session_start();
    $totalValue2 = $_POST['txtTotal'];
    $fullNameValue = $_POST['txtName'];
    echo "The name is : ".$fullNameValue.".";
    echo "<br></br>";
    echo "the total value is ".$totalValue2.".";
    ?>
    </body>
    <br></br>
     <a href="Homepage.html" class="button">Go to Homepage</a></center>
    </html>