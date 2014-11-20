<div class="row-fluid">
    <div class="span12">
        <a href="/itdata/admin/dc/<?=$clientd['clnum']*6111988?>">Back to Client<? echo " ".$clientd['clientname']?></a>
        <h4>Fill out the form to add another Webmail Address for <? echo $clientd['clientname']; ?></h4>
        <form method="post" action="/itdata/admin/cl_webmail">
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <td>URL Address</td><td><input type="text" name="web_address"></td>
                </tr>
                              
                <tr>
                    <td>Admin Username</td><td><input type="text" name="username"></td>
                </tr>
                                
                <tr>
                    <td>Password</td><td><input type="text" name="pd"></td>
                </tr>
                <tr>
                    <td>Note</td><td><input type="text" name="wbnote"></td>
                </tr>
            </table>
            <input type="hidden" value="<?=$clientd['clnum']?>" name="webmail_num"><br />
            <button class="btn-primary">Add Webmail Address</button>
        </form>      
   </div>
</div>