<div class="row-fluid">
    <div class="span12">
        <a href="/itdata/admin/dc/<?=$clientd['clnum']*6111988?>">Back to Client<? echo " ".$clientd['clientname']?></a>
        <h4>Fill out the form to add an Application Service Provider for <? echo $cid['clientname']; ?></h4>
        <form method="post" action="/itdata/admin/cl_ups">
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <td>Type/Name</td><td><input type="text" name="ups_name"></td>
                </tr>
                <tr>
                    <td>URL Address</td><td><input type="text" name="ups_address"></td>
                </tr>
                <tr>
                    <td>Username</td><td><input type="text" name="ups_username"></td>
                </tr>
                                
                <tr>
                    <td>Password</td><td><input type="text" name="ups_pd"></td>
                </tr>
            </table>
            <input type="hidden" value="<?=$clientd['clnum']?>" name="ups_num"><br />
            <button class="btn-primary">Add UPS</button>
        </form>      
   </div>
</div>