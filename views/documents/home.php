<div class="row-fluid">
    <div class="span12">
        <a href="/itdata/admin/dc/<?=$clientd['clnum']*6111988?>">Back to Client<? echo " ".$clientd['clientname']?></a>
        <h4>Add a document for <? echo $clientd['clientname']; ?></h4>
        <?php/* 
       //echo form_open('main/car_validation_insert');
        echo form_open_multipart('/itdata/admin/cl_docs');  
        
        */?>
        <form method="post" action="/itdata/admin/cl_docs" enctype="multipart/form-data">
            <table class="table-bordered table-hover table-striped">
                
                <tr>
                    <td>Document</td><td><input type="file" name="dfile"></td>
                </tr>
                <tr>
                    <td>Description: </td><td><input type="text" name="fdescript"></td>
                </tr>
              
            </table>
            <input type="hidden" value="<?=$clientd['clnum']?>" name="doc_num"><br />
            <button class="btn-primary">Add File</button>
        </form>      
   </div>
</div>