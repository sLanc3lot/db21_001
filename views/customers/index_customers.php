<table border =1>
<tr> <td>ID</td>
<td>code</td>
<td>name</td>
<td>addredd</td>
<td>tel</td>
<td>update</td>
<td>delete</td> </tr>


<?php foreach($customers_list as $customers){
    echo "<tr> <td>$customers->ID</td>
    <td>$customers->code</td>
    <td>$customers->name</td>
    <td>$customers->address</td>
    <td>$customers->tel</td>
    <td>update</td>
    <td>delete</td>
    </tr>";
}
echo "</table>";

?>