<?php
/* ---------------------------------Users Table-------------------------------- */ 
?>
<table class="table table-bordered table-striped table-hover"><a href="domains" id="domains"></a>
    <tr>
        <th>User</th>
    </tr>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Email Address/Username</td>
        <td>Account Type</td>
        <td>Edit</td>
        <td>Delete</td>
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
        <td><?
            if($ud['usertype']=="A")
            {
                echo "Administrator";
            }
            else
            {
                echo "User";
            }
        ?></td>
        <td width="50"><a href="/itdata/adminpanel/update_profile/<?=$ud['user_id']?>"><i class="icon-pencil"></i></a></td>
        <td width="50">
            <? if(($ud['usertype']!="A") && ($ud['user_id']!=$this->session->userdata['user_id']))
            {?>
            <a href="/itdata/adminpanel/delete_user/<?=$ud['user_id']?>"><i class="icon-trash"></i></a>
            <?}
            else
            {?>
              <i class="icon-trash"></i>
            <?}?>
        </td>    
    </tr>
<? } ?>
    <tr>  
        <td colspan="6"><a class="pull-right" href="/itdata/adminpanel/create_user/<?=$clientnum?>">Add a User</a></td>
    </tr>
        

  <?}   
    else
    {
    ?> 
    <tr>  
        <td colspan="6">0/0 Shown<a class="pull-right" href="/itdata/adminpanel/create_user/<?=$clientnum?>">Add a User</a></td>
    </tr>
   <tr> 
        <td colspan="6"><a class="pull-right" href="#top">top</a>
    </tr>
    <? } ?>
</table>