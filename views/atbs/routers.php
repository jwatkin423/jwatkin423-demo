<div class="row-fluid">
    <div class="span12">
        <a href="/itdata/admin/dc/<?=$clientd['clnum']*6111988?>">Back to Client<? echo " ".$clientd['clientname']?></a>
        <h4>Fill out the form to add a Primary ISP for <? echo $clientd['clientname']; ?></h4>
        <form method="post" action="/itdata/admin/cl_router">
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <td>Router Name/Type</td><td><input type="text" name="rtrname"></td>
                </tr>
                <tr>
                    <td>Internal IP Address</td><td><input type="text" name="rtriipa"></td>
                </tr>
                <tr>
                    <td>External IP Address</td><td><input type="text" name="rtreipa"></td>
                </tr>
                <tr>
                    <td>Default Gateway</td><td><input type="text" name="rtrdfg"></td>
                </tr>
                <tr>
                    <td>DNS 1</td><td><input type="text" name="rtrdns1"></td>
                </tr>
                <tr>
                    <td>DNS 2</td><td><input type="text" name="rtrdns2"></td>
                </tr>
            </table>
            <input type="hidden" value="<?=$clientd['clnum']?>" name="rtr_num"><br />
            <button class="btn-primary">Add Router</button>
        </form>      
   </div>
</div>