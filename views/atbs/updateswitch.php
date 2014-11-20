<div class="row-fluid">
    <div class="span12">
        <a href="/itdata/admin/dc/<?=$sws['clnum']*6111988?>">Back to Client<? echo " ".$clientd['clientname']?></a>
        <h4>Fill out the form to edit the Switch <? echo $clientd['clientname']; ?></h4>
        <form method="post" action="/itdata/edit/update_switches">
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <td>Switch Name/Type</td><td><input type="text" name="swname" value="<?=$sws['swname']?>"></td>
                </tr>
                <tr>
                    <td>Switch Managed</td><td><input type="text" name="swmngd" value="<?=$sws['switchmanaged']?>"></td>
                </tr>
                <tr>
                    <td>IP Address</td><td><input type="text" name="swipa" value="<?=$sws['swipaddress']?>"></td>
                </tr>
                <tr>
                    <td>Username</td><td><input type="text" name="swun" value="<?=$sws['swusername']?>"></td>
                </tr>
                <tr>
                    <td>Password</td><td><input type="text" name="swpassword" value="<?=$sws['switchpassword']?>"></td>
                </tr>
            </table>
            <input type="hidden" value="<?=$sws['swid']?>" name="sw_id"><br />
            <input type="hidden" value="<?=$sws['clnum']?>" name="sw_num"><br />
            <button class="btn-primary">Edit Switch</button>
        </form>      
   </div>
</div>