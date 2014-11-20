<div class="row-fluid">
    <div class="span12">
        <a href="/itdata/admin/dc/<?=$drcs['clnum']*6111988?>">Back to Client<? echo " ".$clientd['clientname']?></a>
        <h4>Fill out the form to add a DRAC for <? echo $clientd['clientname']; ?></h4>
        <form method="post" action="/itdata/edit/update_drac">
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <td>IP Address</td><td><input type="text" name="drac_address" value="<?=$drcs['dracip']?>"></td>
                </tr>
                <tr>
                    <td>Server</td>
                    <td><select name="svname">
                    <? foreach($servers as $srvr)
                       { 
                        if ($drcs['dracserver']==$srvr['servername'])
                        {?>
                            <option value="<? echo $srvr['servername']; ?>" selected="true">         
                            <?  echo $srvr['servername']; ?>
                            </option> 
                        <?
                        }
                        else
                        {
                        ?>
                       <option value="<? echo $srvr['servername']; ?>">         
                       <?  echo $srvr['servername']; ?>
                       </option> 
                       <?
                         }
                       }
                        ?>
                        </select>
                    </td>
                    
                </tr>
                <tr>
                    <td>Username</td><td><input type="text" name="drac_un" value="<?=$drcs['dracusername']?>"></td>
                </tr>              
                <tr>
                    <td>Password</td><td><input type="text" name="drac_pw" value="<?=$drcs['dracpassword']?>"></td>
                </tr>
            </table>
            <input type="hidden" value="<?=$drcs['dracid']?>" name="drac_id"><br />
            <input type="hidden" value="<?=$drcs['clnum']?>" name="drac_num">
            <button class="btn-primary">Update DRAC</button>
        </form>      
   </div>
</div>