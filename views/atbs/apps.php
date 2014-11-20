<br />
<div class="row-fluid">
    <div class="span12">
        <a href="/itdata/admin/dc/<?=$clientd['clnum']*6111988?>">Back to Client<? echo " ".$clientd['clientname']?></a>
        <h4>Fill out the form to add another Mapped Drive for <? echo $clientd['clientname']; ?></h4>
        <form method="post" action="/itdata/admin/cl_apps">
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <td>Drive Letter</td><td><input type="text" name="dletter"></td>
                    <td>Hidden Share:<br />
                        <input type="radio" name="hshare" value="yes">Yes<br />
                        <input type="radio" name="hshare" value="no">No<br />
                    </td>
                </tr>
                              
                <tr>
                    <td>UNC Path</td>
                    <td><select name="svname">
                    <? foreach($servers as $srvr)
                       { ?>
                       <option value="<?=$srvr['servername']?>">         
                       <?  echo $srvr['servername']; ?>
                       </option> 
                       <?}?>
                        </select></td>
                    <td><input type="text" name="uncpath"></td>
                </tr>
                                
                <tr>
                    <td>Description</td><td colspan="2"><input type="text" name="desc"></td>
                </tr>
            </table>
            <input type="hidden" value="<?=$clientd['clnum']?>" name="apps_num"><br />
            <button class="btn-primary">Add Mapped Directory</button>
        </form>      
   </div>
</div>