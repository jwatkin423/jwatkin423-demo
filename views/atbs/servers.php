<div class="row-fluid">
    <div class="span12">
        <a href="/itdata/admin/dc/<?=$clientd['clnum']*6111988?>">Back to Client<? echo " ".$clientd['clientname']?></a>
        <h4>Fill out the form to add another Server for <? echo $clientd['clientname']; ?></h4>
        <form method="post" action="/itdata/admin/cl_servers">
            <table class="table-bordered table-hover table-striped">
                
                <tr>
                    <td>IP Address</td><td><input type="text" name="ipaddress"></td>
                </tr>
                              
                <tr>
                    <td>server Name</td><td><input type="text" name="servername"></td>
                </tr>
                                
                <tr>
                    <td>Server Type</td><td><input type="text" name="stype"></td>
                </tr>
                <tr>
                    <td>Location</td><td></td>
                </tr>
            </table>
            <input type="hidden" value="<?=$clientd['clnum']?>" name="server_num"><br />
            <button class="btn-primary">Add Server</button>
        </form>      
   </div>
</div>