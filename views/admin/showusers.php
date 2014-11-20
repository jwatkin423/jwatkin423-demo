<?php
/* ---------------------------------Users Table-------------------------------- */ 
?>
<table class="table table-bordered table-striped table-hover"><a href="domains" id="domains"></a>
    <tr>
        <th>User</th>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Email Address/Username</td>
    </tr>

<? 
  if($users_data != NULL)
  {    
    foreach ($users_data as $ud)
    {?>
    <tr>
        <td><?=$ud['fname']?></td>
        <td><?=$ud['lname']?></td>
        <td><?=$ud['user_login']?></td>
        <td width="50"><a href="/itdata/edit/users/<?=$ud['user_id']?>"><i class="icon-pencil"></i></a></li></td>
        <td width="50"><a href="/itdata/delete/user/<?=$ud['user_id']?>"><i class="icon-trash"></i></a></li></td>    
    </tr>
<? } ?>
    <tr>  
        <td colspan="5"><a class="pull-right" href="/itdata/admin/add_domain/<?=$clientnum?>">Add a Domain</a></td>
    </tr>
        

  <?}   
    else
    {
    ?> 
    <tr>  
        <td colspan="5">0/0 Shown<a class="pull-right" href="/itdata/admin/add_domain/<?=$clientnum?>">Add a Domain</a></td>
    </tr>
   <tr> 
        <td colspan="5"><a class="pull-right" href="#top">top</a>
    </tr>
    <? } ?>
</table>