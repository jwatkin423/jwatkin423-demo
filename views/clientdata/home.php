<br />
<br />
Your Clients:<br />
<table class="table table-striped table-hover table-bordered">
    <tr>
        <td>Client ID</td>
        <td>Client</td>
        <td>Address</td>
        <td>Address</td>
        <td>City</td>
        <td>State</td>
        <td>Zip</td>
        <td>Telephone</td>
        <td>Contact</td>
        <td>Multiple Locations</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    <?
    $accnttype =  $this->session->userdata('user_t');
    if($accnttype != "A")
    {
    foreach ($clients as $client) 
    {
       $compnum = $client['clnum'] * 6111988;
       $compnumraw = $client['clnum'];
       

       foreach($userpermset as $pmset)
       {
           if($pmset['clnum']==$compnumraw)
           {
               if($pmset['vdperm']=="Y")
               {
               ?>
        <tr>
            <td><a href="/itdata/admin/dc/<?=$compnum?>"><?=$compnum?></a></td>
            <td><?=$client['clientname']?></td>
            <td><?=$client['address1']?></td>
            <td><?=$client['address2']?></td>
            <td><?=$client['city']?></td>
            <td><?=$client['state']?></td>
            <td><?=$client['zip']?></td>
            <td><?=$client['num']?></td>
            <td><?=$client['cfname']." ".$client['clname']?></td>
            <td><?=$client['mlocs']?></td>
               <td width="50"><? if($pmset['etperm']=="Y"){ ?><a href="/itdata/admin/update/<?=$compnum?>"><i class="icon-pencil"></i></a><? } else echo "X"; ?></td>
            <td width="50"><? if($pmset['delperm']=="Y"){ ?><a href="/itdata/admin/delete_client/<?=$compnum?>"><i class="icon-trash"></i></a><? } else echo "X";  ?></td>
    <?          
    
            }
    
          }
    }
    }
    }
    else
    {
        foreach ($clients as $client) 
        {
       $compnum = $client['clnum'] * 6111988;
   ?>
        <tr>
            <td><a href="/itdata/admin/dc/<?=$compnum?>"><?=$compnum?></a></td>
            <td><?=$client['clientname']?></td>
            <td><?=$client['address1']?></td>
            <td><?=$client['address2']?></td>
            <td><?=$client['city']?></td>
            <td><?=$client['state']?></td>
            <td><?=$client['zip']?></td>
            <td><?=$client['num']?></td>
            <td><?=$client['cfname']." ".$client['clname']?></td>
            <td><?=$client['mlocs']?></td>
            <td width="50"><a href="/itdata/admin/update/<?=$compnum?>"><i class="icon-pencil"></i></a></td>
            <td width="50"><a href="/itdata/admin/delete_client/<?=$compnum?>"><i class="icon-trash"></i></a></td>
    <?
         }
    }
    ?>
        <tr>
            <td colspan="12"><a class="pull-right" href="/itdata/admin/addclient">Add a Client</a></td>
        </tr>
</table>
