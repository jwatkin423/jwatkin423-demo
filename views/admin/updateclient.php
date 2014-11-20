<?
    $compnum = $clients['clnum']*6111988;
?>
<form method="post" action="/itdata/admin/update_client_data">
    <input type="hidden" name="comp_num" value="<?=$clients['clnum']?>">
<table class="table-striped table-hover table-bordered">
    <tr>
        <td>Client ID</td><td><?=$compnum?></td>
    </tr>
    <tr>    
         <td>Client</td><td><input type="text" name="comp_name" value="<?=$clients['clientname']?>"></td>
    <tr>     
        <td>Address</td><td><input type="text" name="comp_address" value="<?=$clients['address1']?>"></td>
    </tr>
    <tr>    
        <td>Address2</td><td><input type="text" name="comp_address2" value="<?=$clients['address2']?>"></td>
     </tr>
     <tr>   
        <td>City</td><td><input type="text" name="comp_city" value="<?=$clients['city']?>"></td>
     </tr>
     <tr>   
        <td>State</td><td><input type="text" name="comp_state" value="<?=$clients['state']?>"></td>
     </tr>
     <tr>   
        <td>Zip</td><td><input type="text" name="comp_zip" value="<?=$clients['zip']?>"></td>
     </tr>
     <tr>   
        <td>Telephone</td><td><input type="text" name="comp_tel" value="<?=$clients['num']?>"></td>
     </tr>
     <tr>   
        <td>Contact First Name</td><td><input type="text" name="comp_cfname" value="<?=$clients['cfname']?>"></td>
     </tr>
     <tr>   
        <td>Contact Last Name</td><td><input type="text" name="comp_clname" value="<?=$clients['clname']?>"></td>
     </tr>
     <tr>   
     <tr>   
        <td>Multiple Locations</td><td><input type="text" name="comp_mlocs" value="<?=$clients['mlocs']?>"></td>
     </tr>
     <tr>   
    </tr>
    <tr>
        <td align="center" colspan="2"><button class="btn-primary">Update</button></td>
    </tr>
</table>
</form>    
 

