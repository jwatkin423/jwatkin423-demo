<div class="row-fluid">
    <div class="span12">
        <h4>Fill out the form to add Another location for <? echo $clientd['clientname']; ?></h4>
        <form method="post" action="/itdata/admin/add_location">
            <table class="table-bordered table-hover table-striped"
                
                <tr>
                    <td>Address:</td><td><input type="text" name="mloc_address"></td>
                </tr>
                <tr>
                    <td>Address Two:</td><td><input type="text" name="mloc_address2"></td>
                </tr>
                <tr>
                    <td>City:</td><td><input type="text" name="mloc_city"></td>
                </tr>
                <tr>
                    <td>State:</td><td><input type="text" name="mloc_state"></td>
                </tr>
                <tr>
                    <td>Zip:</td><td><input type="text" name="mloc_zip"></td>
                </tr>
                <tr>
                    <td>Tel:</td><td><input type="text" name="mloc_tel"></td>
                </tr>
                <tr>
                    <td>Contact First Name:</td><td><input type="text" name="mloc_cfname"></td>
                </tr>
                <tr>
                    <td>Contact Last Name:</td><td><input type="text" name="mloc_clname"></td>
                </tr>
            </table>
            <input type="hidden" value="<?=$clientd['clnum']?>" name="mloc_num"><br />
            <button class="btn-primary">Add Location</button>
        </form>      
   </div>
</div>