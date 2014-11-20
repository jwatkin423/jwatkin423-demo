<div class="row-fluid">
    <div class="span12">
        <a href="/itdata/admin/dc/<?=$ups['clnum']*6111988?>">Back to Client<? echo " ".$ups['clientname']?></a>
        <h4>Edit Application Service Provider</h4>
        <form method="post" action="/itdata/edit/update_ups">
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <td>Type/Name</td><td><input type="text" name="ups_name" value="<?=$ups['upsname']?>"></td>
                </tr>
                <tr>
                    <td>URL Address</td><td><input type="text" name="ups_address" value="<?=$ups['upsipaddress']?>"></td>
                </tr>
                <tr>
                    <td>Username</td><td><input type="text" name="ups_username" value="<?=$ups['upsusername']?>"></td>
                </tr>
                                
                <tr>
                    <td>Password</td><td><input type="text" name="ups_pd" value="<?=$ups['upspassword']?>"></td>
                </tr>
            </table>
            <input type="hidden" value="<?=$ups['upsid']?>" name="ups_id">
            <input type="hidden" value="<?=$ups['clnum']?>" name="ups_num"><br />
            <button class="btn-primary">Edit UPS</button>
        </form>      
   </div>
</div>