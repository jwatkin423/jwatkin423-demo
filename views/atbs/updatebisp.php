<div class="row-fluid">
    <div class="span12">
        <a href="/itdata/admin/dc/<?=$bsps['clnum']*6111988?>">Back to Client<? echo " ".$clientd['clientname']?></a>
        <h4>Fill out the form to add a Primary ISP for <? echo $clientd['clientname']; ?></h4>
        <form method="post" action="/itdata/edit/update_bisp">
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <td>Backup ISP Company</td><td><input type="text" name="bispname" value="<?=$bsps['bispname']?>"></td>
                </tr>
                <tr>
                    <td>Backup ISP Circuit ID/Account Number</td><td><input type="text" name="bispcirc" value="<?=$bsps['bcircid']?>"></td>
                </tr>
                <tr>
                    <td>Backup ISP Address Range</td><td><input type="text" name="bispaddrange" value="<?=$bsps['baddrange']?>"></td>
                </tr>
            </table>
            <input type="hidden" value="<?=$bsps['clnum']?>" name="bisp_num"><br />
            <input type="hidden" value="<?=$bsps['bispid']?>" name="bisp_id"><br />
            <button class="btn-primary">Edit Backup ISP</button>
        </form>      
   </div>
</div>

