<div class="row-fluid">
    <div class="span12">
        <a href="/itdata/admin/dc/<?=$clientd['clnum']*6111988?>">Back to Client<? echo " ".$clientd['clientname']?></a>
        <h4>Fill out the form to add a Primary ISP for <? echo $clientd['clientname']; ?></h4>
        <form method="post" action="/itdata/admin/cl_sa">
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <td>Username</td><td colspan="2"><input type="text" name="sa_un"></td>
                </tr>
                <tr>
                    <td>Password</td><td colspan="2"><input type="text" name="sa_pw"></td>
                </tr>
            </table>
            <input type="hidden" value="<?=$clientd['clnum']?>" name="sa_num"><br />
            <button class="btn-primary">Add a Server Account</button>
        </form>      
   </div>
</div>
