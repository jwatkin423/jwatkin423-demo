<div class="row-fluid">
    <div class="span12">
        <a href="/itdata/admin/dc/<?=$rtrs['clnum']*6111988?>">Back to Client<? echo " ".$clientd['clientname']?></a>
        <h4>Fill out the form to add a Primary ISP for <? echo $clientd['clientname']; ?></h4>
        <form method="post" action="/itdata/edit/update_router">
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <td>Router Name/Type</td><td><input type="text" name="rtrname" value="<?=$rtrs['routername']?>"></td>
                </tr>
                <tr>
                    <td>Internal IP Address</td><td><input type="text" name="rtripa" value="<?=$rtrs['rintipaddress']?>"></td>
                </tr>
                <tr>
                    <td>External IP Address</td><td><input type="text" name="rtrepa" value="<?=$rtrs['rexntipaddress']?>"></td>
                </tr>
                <tr>
                    <td>Default Gateway</td><td><input type="test" name="rtrdfg" value="<?=$rtrs['defgateway']?>"></td>
                </tr>
                <tr>
                    <td>DNS 1</td><td><input type="text" name="rtrdns1" value="<?=$rtrs['dns1']?>"></td>
                </tr>
                <tr>
                    <td>DNS 2</td><td><input type="text" name="rtrdns2" value="<?=$rtrs['dns2']?>"></td>
                </tr>
            </table>
            <input type="hidden" value="<?=$rtrs['routerid']?>" name="rtr_id"><br />
            <input type="hidden" value="<?=$rtrs['clnum']?>" name="rtr_num"><br />
            <button class="btn-primary">Edit Router</button>
        </form>      
   </div>
</div>