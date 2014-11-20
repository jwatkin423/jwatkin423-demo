<div class="row-fluid">
    <div class="span12">
        <a href="/itdata/admin/dc/<?=$asps['clnum']*6111988?>">Back to Client<? echo " ".$asps['clientname']?></a>
        <h4>Edit Application Service Provider</h4>
        <form method="post" action="/itdata/edit/update_asp">
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <td>Type/Name</td><td><input type="text" name="asp_name" value="<?=$asps['aspname']?>"></td>
                </tr>
                <tr>
                    <td>URL Address</td><td><input type="text" name="asp_address" value="<?=$asps['aspipaddress']?>"></td>
                </tr>
                              
                <tr>
                    <td>Username</td><td><input type="text" name="asp_username" value="<?=$asps['aspusername']?>"></td>
                </tr>
                                
                <tr>
                    <td>Password</td><td><input type="text" name="asp_pd" value="<?=$asps['asppassword']?>"></td>
                </tr>
                <tr>
                    <td>Note</td><td><input type="text" name="asp_note" value="<?=$asps['aspnote']?>"></td>
                </tr>
            </table>
            <input type="hidden" value="<?=$asps['aspsid']?>" name="asp_id">
            <input type="hidden" value="<?=$asps['clnum']?>" name="asp_num"><br />
            <button class="btn-primary">Edit ASP</button>
        </form>      
   </div>
</div>