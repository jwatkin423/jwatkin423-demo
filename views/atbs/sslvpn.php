<div class="row-fluid">
    <div class="span12">
        <a href="/itdata/admin/dc/<?=$clientd['clnum']*6111988?>">Back to Client<? echo " ".$clientd['clientname']?></a>
        <h4>Fill out the form to add another SSLVPN connection for <? echo $clientd['clientname']; ?></h4>
        <form method="post" action="/itdata/admin/cl_sslvpn">
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <td>URL Address</td><td><input type="text" name="vpnaddress"></td>
                </tr>
                <tr>
                    <td>External/WAN IP</td><td><input type="text" name="ssl_eip"></td>
                </tr>              
                <tr>
                    <td>Internal IP</td><td><input type="text" name="lanip"></td>
                </tr>
                <tr>
                    <td>Username</td><td><input type="text" name="ssl_username"></td>
                </tr>
                <tr>
                    <td>Password</td><td><input type="text" name="ssl_password"></td>
                </tr>
            </table>
            <input type="hidden" value="<?=$clientd['clnum']?>" name="sslvpn_num"><br />
            <button class="btn-primary">Add SSLVPN Connection</button>
        </form>      
   </div>
</div>