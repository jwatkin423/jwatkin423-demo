<div class="row-fluid">
    <div class="span12">
        <a href="/itdata/admin/dc/<?=$clientd['clnum']*6111988?>">Back to Client<? echo " ".$clientd['clientname']?></a>
        <h4>Fill out the form to add a Primary ISP for <? echo $clientd['clientname']; ?></h4>
        <form method="post" action="/itdata/admin/cl_av">
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <td>Hosted</td>
                    <?
                    if ($avsps == NULL)
                    {?>
                    <td>No Apps <?=print_r($avsps)?></td>
                    <?
                    }
                    else{
                    ?>
                     <td><select name="avspamname">
                     <?
                        foreach($avsps as $avsp)
                        { ?>
                            
                            <option value="<?=$avsp['avname']?>">         
                            <? echo $avsp['avname']; ?>
                            </option> 
                          <?}
                    }?>
                            <option value="other">Other</option>
                         </select></td>
                </tr>
                <tr>
                    <td>Hosted URL</td><td><input type="text" name="av_hosted"></td>
                </tr>
                <tr>
                    <td>Other</td><td><input name="av_other"></td>
                </tr>
                <tr>
                    <td>Username</td><td colspan="2"><input type="text" name="av_un"></td>
                </tr>
                <tr>
                    <td>Password</td><td colspan="2"><input type="text" name="av_pw"></td>
                </tr>
            </table>
            <input type="hidden" value="<?=$clientd['clnum']?>" name="av_num"><br />
            <button class="btn-primary">Add an AV/Spam</button>
        </form>      
   </div>
</div>

