<div class="row-fluid">
    <div class="span12">
        <a href="/itdata/admin/dc/<?=$clientd['clnum']*6111988?>">Back to Client<? echo " ".$clientd['clientname']?></a>
        <h4>Fill out the form to add another Domain for <? echo $clientd['clientname']; ?></h4>
        <form method="post" action="/itdata/admin/cl_printers">
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <td>IP Address</td><td><input type="text" name="ipaddress"></td>
                </tr>
                              
                <tr>
                    <td>Make and Model</td><td><input type="text" name="mm"></td>
                </tr>
                                
                <tr>
                    <td>Password</td><td><input type="text" name="pd"></td>
                </tr>
            </table>
            <input type="hidden" value="<?=$clientd['clnum']?>" name="printer_num"><br />
            <button class="btn-primary">Add Printer</button>
        </form>      
   </div>
</div>