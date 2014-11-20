<div class="row-fluid">
    <div class="span12">
        <a href="/itdata/admin/dc/<?=$wbm['clnum']*6111988?>">Back to Client<? echo " ".$wbm['clientname']?></a>
        <h4>Edit Webmail Address</h4>
        <form method="post" action="/itdata/edit/update_webmail">
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <td>URL Address</td><td><input type="text" name="web_address" value="<?=$wbm['webmail']?>"></td>
                </tr>
                              
                <tr>
                    <td>Admin Username</td><td><input type="text" name="username" value="<?=$wbm['username']?>"></td>
                </tr>
                                
                <tr>
                    <td>Password</td><td><input type="text" name="pd" value="<?=$wbm['password']?>"></td>
                </tr>
                <tr>
                    <td>Note</td><td><input type="text" name="wbnote" value="<?=$wbm['note']?>"></td>
                </tr>
            </table>
            <input type="hidden" value="<?=$wbm['clnum']?>" name="webmail_num"><br />
            <input type="hidden" value="<?=$wbm['wbmailid']?>" name="webmail_id"><br />
            <button class="btn-primary">Edit Webmail Address</button>
        </form>      
   </div>
</div>