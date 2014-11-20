<div class="row-fluid">
    <div class="span12">
        <a href="/itdata/admin/dc/<?=$clientd['clnum']*6111988?>">Back to Client<? echo " ".$clientd['clientname']?></a>
        <h4>Fill out the form to add a Primary ISP for <? echo $clientd['clientname']; ?></h4>
        <form method="post" action="/itdata/admin/cl_switch">
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <td>Switch Name/Type</td><td colspan="2"><input type="text" name="swtype"></td>
                </tr>
                <tr>
                    <td>Switch Managed</td><td>Yes: <input type="radio" name="swmngd" value="y"></td><td> No: <input type="radio" name="swmngd" value="n"></td>
                </tr>
                <tr>
                    <td>Internal IP Address</td><td colspan="2"><input type="text" name="swipa"></td>
                </tr>
                <tr>
                    <td>Username</td><td colspan="2"><input type="text" name="swusername"></td>
                </tr>
                <tr>
                    <td>Password</td><td colspan="2"><input type="text" name="swpassword"></td>
                </tr>
            </table>
            <input type="hidden" value="<?=$clientd['clnum']?>" name="sw_num"><br />
            <button class="btn-primary">Add a Switch</button>
        </form>      
   </div>
</div>
