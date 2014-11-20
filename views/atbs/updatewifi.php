<div class="row-fluid">
    <div class="span12">
        <a href="/itdata/admin/dc/<?=$wfi['clnum']*6111988?>">Back to Client<? echo " ".$wfi['clientname']?></a>
        <h4>Edit Wi-Fi Connection</h4>
        <form method="post" action="/itdata/edit/update_wifi">
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <td>SSID</td><td><input type="text" name="ssid" value="<?=$wfi['ssid']?>"></td>
                </tr>
                <tr>
                    <td>IP Address</td><td><input type="text" name="wipa" value="<?=$wfi['wifiipaddress']?>"></td>
                </tr>
                <tr>
                    <td>Username</td><td><input type="text" name="wun" value="<?=$wfi['wifiusername']?>"></td>
                </tr>
                             
                <tr>
                    <td>Password</td><td><input type="text" name="pd" value="<?=$wfi['wifipassword']?>"></td>
                </tr>
            </table>
            <input type="hidden" value="<?=$wfi['clnum']?>" name="wifi_num"><br />
            <input type="hidden" value="<?=$wfi['wifiid']?>" name="wifi_id">
            <button class="btn-primary">Edit SSLVPN Connection</button>
        </form>      
   </div>
</div>