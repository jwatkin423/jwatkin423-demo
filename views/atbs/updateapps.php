<div class="row-fluid">
    <div class="span12">
        <a href="/itdata/admin/dc/<?=$drcty['clnum']*6111988?>">Back to Client<? echo " ".$drcty['clientname']?></a>
        <h4>Edit Mapped Drive</h4>
        <br />
        <h4><? echo  "Drive letter: ".$drcty['drive']." The path: ".$drcty['appsserver']." ".$drcty['unc']; ?></h4>
        <br />
        <form method="post" action="/itdata/edit/update_apps">
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <td>Drive Letter</td>
                    <td><input type="text" name="dletter" value="<?=$drcty['drive']?>"></td>
                    <td>Hidden Share:<br />
                        <? if($drcty['hiddenshare']=="yes")
                        { ?>
                        <input type="radio" name="hshare" value="yes" checked="true">Yes
                        <input type="radio" name="hshare" value="no">No
                        <?}
                        else
                        {?>
                        <input type="radio" name="hshare" value="yes">Yes
                        <input type="radio" name="hshare" value="no" checked="true">No
                        <?}?>
                    </td>
                </tr>
                <tr>
                    <td>UNC Path</td>
                    <td><select name="svname">
                    <? foreach($servers as $srvr)
                       { 
                        if ($drcty['appsserver']==$srvr['servername'])
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
                    <td><input type="text" name="uncpath" value="<?=$drcty['unc']?>"></td>
                </tr>
                                
                <tr>
                    <td>Description</td>
                    <td  colspan="2">
                    <textarea rows="3" cols="120" wrap="hard" name="descript"><?=$drcty['dscpt']?> 
                    </textarea>
                </td>
                </tr>
            </table>
            <input type="hidden" value="<?=$drcty['clnum']?>" name="apps_num"><br />
            <input type="hidden" value="<?=$drcty['appsid']?>" name="apps_id">
            <button class="btn-primary">Edit Mapped Directory</button>
        </form>      
   </div>
</div>