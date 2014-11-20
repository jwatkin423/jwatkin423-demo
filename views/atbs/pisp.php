<div class="row-fluid">
    <div class="span12">
        <a href="/itdata/admin/dc/<?=$clientd['clnum']*6111988?>">Back to Client<? echo " ".$clientd['clientname']?></a>
        <h4>Fill out the form to add a Primary ISP for <? echo $clientd['clientname']; ?></h4>
        <form method="post" action="/itdata/admin/cl_pisp">
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <td>ISP Company</td><td><input type="text" name="pispname"></td>
                </tr>
                <tr>
                    <td>ISP Circuit ID/Account Number</td><td><input type="text" name="pispcirc"></td>
                </tr>
                <tr>
                    <td>ISP Address Range</td><td><input type="text" name="pispaddrange"></td>
                </tr>
                <tr>
                    <td>ISP Type/Configuration</td><td><input type="text" name="pispconf"></td>
                </tr>
            </table>
            <input type="hidden" value="<?=$clientd['clnum']?>" name="pisp_num"><br />
            <button class="btn-primary">Add Primary ISP</button>
        </form>      
   </div>
</div>