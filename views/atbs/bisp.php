<div class="row-fluid">
    <div class="span12">
        <a href="/itdata/admin/dc/<?=$clientd['clnum']*6111988?>">Back to Client<? echo " ".$clientd['clientname']?></a>
        <h4>Fill out the form to add a Primary ISP for <? echo $clientd['clientname']; ?></h4>
        <form method="post" action="/itdata/admin/cl_bisp">
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <td>Backup ISP Company</td><td><input type="text" name="bispname"></td>
                </tr>
                <tr>
                    <td>Backup ISP Circuit ID/Account Number</td><td><input type="text" name="bispcirc"></td>
                </tr>
                <tr>
                    <td>Backup ISP Address Range</td><td><input type="text" name="bispaddrange"></td>
                </tr>
            </table>
            <input type="hidden" value="<?=$clientd['clnum']?>" name="bisp_num"><br />
            <button class="btn-primary">Add Backup ISP</button>
        </form>      
   </div>
</div>

