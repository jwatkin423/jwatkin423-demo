<div class="row-fluid">
    <div class="span12">
        <a href="/itdata/admin/dc/<?=$srvr['clnum']*6111988?>">Back to Client<? echo " ".$srvr['clientname']?></a>
        <h4>Edit The Server</h4>
        <form method="post" action="/itdata/edit/update_server">
            <table class="table-bordered table-hover table-striped">
                
                <tr>
                    <td>IP Address</td><td><input type="text" name="ipaddress" value="<?=$srvr['ipaddress']?>"></td>
                </tr>
                              
                <tr>
                    <td>server Name</td><td><input type="text" name="servername" value="<?=$srvr['servername']?>"></td>
                </tr>
                                
                <tr>
                    <td>Server Type</td><td><input type="text" name="servertype" value="<?=$srvr['servertype']?>"></td>
                </tr>
            </table>
            <input type="hidden" value="<?=$srvr['serverid']?>" name="server_id"><br />
            <input type="hidden" value="<?=$srvr['clnum']?>" name="server_num"><br />
            <button class="btn-primary">Edit Server</button>
        </form>      
   </div>
</div>