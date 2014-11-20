<br />
<div class="row-fluid">
    <div class="span12">
        <a href="/itdata/admin/dc/<?=$svn['clnum']*6111988?>">Back to Client<? echo " ".$svn['clientname']?></a>
        <h4>Fill out the form to add another SSLVPN connection for <? echo $clientd['clientname']; ?></h4>
        <form method="post" action="/itdata/edit/update_sslvpn">
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <td>URL Address</td><td><input type="text" name="vpnaddress" value="<?=$svn['sslurl']?>"></td>
                </tr>
                    <td>External/WAN IP</td><td><input type="text" name="ssl_eip" value="<?=$svn['ssleipaddress']?>"></td>
                </tr>              
                <tr>
                    <td>Internal IP</td><td><input type="text" name="lanip" value="<?=$svn['ssliipaddress']?>"></td>
                </tr>
                <tr>
                    <td>Username</td><td><input type="text" name="ssl_username" value="<?=$svn['sslusername']?>"></td>
                </tr>
                <tr>
                    <td>Password</td><td><input type="text" name="ssl_password" value="<?=$svn['sslpassword']?>"></td>
                </tr>
            </table>
            <input type="hidden" value="<?=$svn['clnum']?>" name="sslvpn_num"><br />
            <input type="hidden" value="<?=$svn['sslvpnid']?>" name="sslvpn_id"><br />
            <button class="btn-primary">Edit SSLVPN Connection</button>
        </form>      
   </div>
</div>