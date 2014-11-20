<div class="row-fluid">
    <div class="span12">
        <a href="/itdata/admin/dc/<?=$dmns['clnum']*6111988?>">Back to Client<? echo " ".$dmns['clientname']?></a>
        <h4>Edit Domain</h4>
        <br />
        <h5><? echo "Current Domain: ".$dmns['domain']; ?></h5>
        <br />
        <form method="post" action="/itdata/edit/update_domain">
            <table class="table-bordered table-hover table-striped">
                
                <tr>
                    <td>Domain</td><td><input type="text" name="domain"></td>
                </tr>
              
            </table>
            <input type="hidden" value="<?=$dmns['domainid']?>" name="domainid"><br />
            <input type="hidden" value="<?=$dmns['clnum']?>" name="domain_num">
            <button class="btn-primary">Edit Domain</button>
        </form>      
   </div>
</div>