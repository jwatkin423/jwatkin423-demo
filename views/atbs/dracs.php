<div class="row-fluid">
    <div class="span12">
        <a href="/itdata/admin/dc/<?=$clientd['clnum']*6111988?>">Back to Client<? echo " ".$clientd['clientname']?></a>
        <h4>Fill out the form to add a DRAC for <? echo $clientd['clientname']; ?></h4>
        <form method="post" action="/itdata/admin/cl_dracs">
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <td>IP Address</td><td><input type="text" name="drac_address"></td>
                </tr>
                <tr>
                    <td>Server</td>
                    <td><select name="svname">
                    <? foreach($servers as $srvr)
                       { ?>
                       <option value="<?=$srvr['servername']?>">         
                       <?  echo $srvr['servername']; ?>
                       </option> 
                       <?}?>
                        </select></td>
                    
                </tr>
                <tr>
                    <td>Username</td><td><input type="text" name="drac_username"></td>
                </tr>              
                <tr>
                    <td>Password</td><td><input type="text" name="drac_password"></td>
                </tr>
            </table>
            <input type="hidden" value="<?=$clientd['clnum']?>" name="drac_num"><br />
            <button class="btn-primary">Add DRAC</button>
        </form>      
   </div>
</div>