<div class="row-fluid">
    <div class="span12">
        <a href="/itdata/admin/dc/<?=$clientd['clnum']*6111988?>">Back to Client<? echo " ".$clientd['clientname']?></a>
        <h4>Fill out the form to add another Wi-Fi connection for <? echo $clientd['clientname']; ?></h4>
        <form method="post" action="/itdata/admin/cl_wifi">
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <td>SSID</td><td><input type="text" name="ssid"></td>
                </tr>
                <tr>
                    <td>IP Address</td><td><input type="text" name="wipa"></td>
                </tr>
                <tr>
                    <td>Username</td><td><input type="text" name="wun"></td>
                </tr>
                 <tr>
                    <td>Password</td><td><input type="text" name="pd"></td>
                </tr>
            </table>
            <input type="hidden" value="<?=$clientd['clnum']?>" name="wifi_num"><br />
            <button class="btn-primary">Add Wi-Fi Connection</button>
        </form>      
   </div>
</div>