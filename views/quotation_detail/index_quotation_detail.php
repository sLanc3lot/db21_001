<table border =1>
    <tr> <td>QUD_ID</td>
    <td>QU_ID</td>
    <td>C_ID</td>
    <td>QUD_AMOUNT</td>
    <td>QUD_PRINT</td>
    <td>update</td>
    <td>delete</td> </tr>

<?php
    foreach($quotation_detailList=$quantation_detail){
        echo "
        <tr> <td>$quantation_detail->QUD_ID</td>
        <td>$quantation_detail->QU_ID</td>
        <td>$quantation_detail->C_ID</td>
        <td>$quantation_detail->QUD_AMOUNT</td>
        <td>$quantation_detail->QUD_PRINT</td>
        <td>update</td>
        <td>delete</td> </tr>
        ";
    }
    echo "</table>";
?>