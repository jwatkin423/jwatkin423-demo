<div class="row-fluid">
    <div class="span12">
        <a href="/itdata/admin/dc/<?=$clientd['clnum']*6111988?>">Back to Client<? echo " ".$clientd['clientname']?></a>
        <h4>Fill out the form to add Another location for <? echo $clientd['clientname']; ?></h4>
        <form method="post" action="/itdata/edit/update_mlocs">
            <table class="table-bordered table-hover table-striped"
                
                <tr>
                    <td>Address:</td><td><input type="text" name="mloc_address" value="<?=$mloc['address1']?>"></td>
                </tr>
                <tr>
                    <td>Address Two:</td><td><input type="text" name="mloc_address2" value="<?=$mloc['address2']?>"></td>
                </tr>
                <tr>
                    <td>City:</td><td><input type="text" name="mloc_city" value="<?=$mloc['city']?>"></td>
                </tr>
                <tr>
                    <td>State:</td><td><input type="text" name="mloc_state" value="<?=$mloc['state']?>"></td>
                </tr>
                <tr>
                    <td>Zip:</td><td><input type="text" name="mloc_zip" value="<?=$mloc['zip']?>"></td>
                </tr>
                <tr>
                    <td>Tel:</td><td><input type="text" name="mloc_tel" value="<?=$mloc['num']?>"></td>
                </tr>
                <tr>
                    <td>Contact First Name:</td><td><input type="text" name="mloc_cfname" value="<?=$mloc['mlfname']?>"></td>
                </tr>
                <tr>
                    <td>Contact Last Name:</td><td><input type="text" name="mloc_clname" value="<?=$mloc['mllname']?>"></td>
                </tr>
            </table>
            <input type="hidden" value="<?=$mloc['mlocsid']?>" name="mloc_id"><br />
            <input type="hidden" value="<?=$mloc['clnum']?>" name="mloc_num"><br />
            <button class="btn-primary">Edit Location</button>
        </form>      
   </div>
</div>