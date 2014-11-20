<div class="row-fluid">
    <div class="span12">
        <a href="/itdata/admin/dc/<?=$clientd['clnum']*6111988?>">Back to Client<? echo " ".$clientd['clientname']?></a>
        <h4>Fill out the form to add another Domain for <? echo $clientd['clientname']; ?></h4>
        <form method="post" action="/itdata/admin/cl_domain">
            <table class="table-bordered table-hover table-striped">
                
                <tr>
                    <td>Domain</td><td><input type="text" name="domain"></td>
                </tr>
              
            </table>
            <input type="hidden" value="<?=$clientd['clnum']?>" name="domain_num"><br />
            <button class="btn-primary">Add Domain</button>
        </form>      
   </div>
</div>