<div class="row-fluid">
    <div class="span12">
        <a href="/itdata/admin/dc/<?=$sas['clnum']*6111988?>">Back to Client<? echo " ".$clientd['clientname']?></a>
        <h4>Fill out the form to edit the Switch <? echo $clientd['clientname']; ?></h4>
        <form method="post" action="/itdata/edit/update_sa">
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <td>Username</td><td><input type="text" name="sa_un" value="<?=$sas['dausername']?>"></td>
                </tr>
                <tr>
                    <td>Password</td><td><input type="text" name="sa_pw" value="<?=$sas['dapassword']?>"></td>
                </tr>
            </table>
            <input type="hidden" value="<?=$sas['serveraccountsid']?>" name="sa_id"><br />
            <input type="hidden" value="<?=$sas['clnum']?>" name="sa_num"><br />
            <button class="btn-primary">Edit Server Account</button>
        </form>      
   </div>
</div>