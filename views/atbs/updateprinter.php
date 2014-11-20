<div class="row-fluid">
    <div class="span12">
        <a href="/itdata/admin/dc/<?=$prnt['clnum']*6111988?>">Back to Client<? echo " ".$prnt['clientname']?></a>
        <h4>Edit the Printer</h4>
          <form method="post" action="/itdata/edit/update_printer">
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <td>IP Address</td><td><input type="text" name="ipaddress" value="<?=$prnt['ipaddress']?>"></td>
                </tr>
                              
                <tr>
                    <td>Make and Model</td><td><input type="text" name="mm" value="<?=$prnt['make_model']?>"></td>
                </tr>
                                
                <tr>
                    <td>Password</td><td><input type="text" name="pd" value="<?=$prnt['password']?>"></td>
                </tr>
            </table>
            <input type="hidden" value="<?=$prnt['printerid']?>" name="printer_id"><br />
            <input type="hidden" value="<?=$prnt['clnum']?>" name="printer_num"><br />
            <button class="btn-primary">Edit Printer</button>
        </form>      
   </div>
</div>