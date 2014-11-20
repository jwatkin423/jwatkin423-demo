<div class="row-fluid">
    <div class="span12">
        <a href="/itdata/admin/dc/<?=$clientd['clnum']*6111988?>">Back to Client<? echo " ".$clientd['clientname']?></a>
        <h4>Fill out the form to add a Primary ISP for <? echo $clientd['clientname']; ?></h4>
        <form method="post" action="/itdata/edit/update_pisp">
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <td>ISP Company</td><td><input type="text" name="pispname" value="<?=$psps['ispname']?>"></td>
                </tr>
                <tr>
                    <td>ISP Circuit ID/Account Number</td><td><input type="text" name="pispcirc" value="<?=$psps['circid']?>"></td>
                </tr>
                <tr>
                    <td>ISP Address Range</td><td><input type="text" name="pispaddrange" value="<?=$psps['addrange']?>"></td>
                </tr>
                <tr>
                    <td>ISP Type/Configuration</td><td><input type="text" name="pispconf" value="<?=$psps['conf']?>"></td>
                </tr>
            </table>
            <input type="hidden" value="<?=$psps['ispid']?>" name="pispid"><br />
            <input type="hidden" value="<?=$psps['clnum']?>" name="pisp_num">
            <button class="btn-primary">Edit Primary ISP</button>
        </form>      
   </div>
</div>