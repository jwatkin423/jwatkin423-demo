<div class="row-fluid">
    <div class="span12">
        <a href="/itdata/admin/dc/<?=$avs['clnum']*6111988?>">Back to Client</a>
        <h4>Fill out the form to add a Primary ISP for <? echo $clientd['clientname']; ?></h4>
        <form method="post" action="/itdata/edit/update_av">
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <td>Hosted</td>
                    <?
                    if ($avs == NULL)
                    {?>
                            <td>No Apps</td>
                    <?
                    }
                    else{
                    ?>
                     <td><select name="avspam_name">
                     <?
                        foreach($avsps as $avsp)
                        { 
                            if ($avs['avspamname'] == $avsp['avname'])
                            {?>
                            
                            <option value="<?=$avsp['avname']?>" selected="true">         
                            <? echo $avsp['avname']; ?>
                            </option> 
                            <?}
                            else
                            {?>
                            <option value="<?=$avsp['avname']?>">         
                            <?=$avsp['avname']?>
                            </option> 
                                
                            <?}
                        }
                    }?>
                            </select></td>
                </tr>
                <tr>
                    <td>Hosted URL</td><td><input name="av_hosted" value="<?=$avs['hosted']?>"></td>
                </tr>
                <tr>
                    <td>Other</td><td><input name="av_other" value="<?=$avs['other']?>"></td>
                </tr>
                <tr>
                    <td>Username</td><td colspan="2"><input type="text" name="av_un" value="<?=$avs['avusername']?>"></td>
                </tr>
                <tr>
                    <td>Password</td><td colspan="2"><input type="text" name="av_pw" value="<?=$avs['avpassword']?>"></td>
                </tr>
            </table>
            <input type="hidden" value="<?=$avs['avspamid']?>" name="av_id">
            <input type="hidden" value="<?=$avs['clnum']?>" name="av_num"><br />
            <button class="btn-primary">Edit AV/Spam Program</button>
        </form>      
   </div>
</div>

