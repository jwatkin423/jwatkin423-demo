<script src="/public/bootstrap/js/val.js"></script>
<div class="row-fluid">
    <div class="span12">
        <h4>Create new User</h4>
        
        <form method="post" action="/itdata/adminpanel/edit_profile">
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <td>User Number</td><td><?=$ud['user_id']*7676767?></td>
                </tr>
                <tr>
                    <td>Email/Login ID</td><td colspan="2"><input type="text" name="email" value="<?=$ud['user_login']?>"></td>
                </tr>
                <tr>
                    <td>First Name</td><td colspan="2"><input type="text" name="fname" value="<?=$ud['fname']?>"></td>
                </tr>
                <tr>
                    <td>Last Name</td><td colspan="2"><input type="text" name="lname" value="<?=$ud['lname']?>"></td>
                </tr>
            <tr>
                    <td>
                        Check either Yes or No, to change the password or not.
                    </td>

                    <td>Yes<input type="radio" name="chpwd" value="Y"><br />
                        No <input type="radio" name="chpwd" value="N"></td>
                </tr>
                <tr>
                    <td>Password</td><td><input type="password" name="password1" id="pw1" onKeyUp="passlen();"></td><td><label id="pw_label1"></label></td>
                </tr>
                <tr>
                    <td>Confirm Password</td><td colspan="2"><input type="password" name="password2" id="pw2" onBlur="v();" ></td>
                </tr>
                <tr>
                    <td>Type</td><td>
                        <? if (($ud['usertype']=="A") || ($ud['usertype']=="SA"))
                        {?>
                            <input type="radio" name="accnttype" value="SA" checked>Administrator <br />
                            <input type="radio" name="accnttype" value="U">User</td>
                        <?
                        }
                        else
                        {?>
                            <input type="radio" name="accnttype" value="SA">Administrator <br />
                            <input type="radio" name="accnttype" value="U" checked>User</td>
                        <?
                        }
                        ?>
                </tr>
            </table>
            <input type="hidden" name="userid" value="<?=$ud['user_id']?>">
            <input type="hidden" name="company_id" value="<?=$coid['compid']?>"><br />
            <table class="table table-striped table-hover table-bordered">
                <tr>
                    <td>Client ID</td>
                    <td>Client</td>
                    <td>View</td>
                    <td>Edit</td>
                    <td>Delete</td>
            </tr>
            <?
           if(!empty($userpermset))
           {
           foreach ($clients as $client) 
           {
              $compnum = $client['clnum'] * 6111988; 
              $compnumraw = $client['clnum'];
              foreach ($userpermset as $upst)
              {
                   if(($upst['clnum'] == $compnumraw) || ($upst['clnum']==NULL))
                   {
           ?>


                    <tr>
                        <td><a href="/itdata/admin/dc/<?=$compnum?>"><?=$compnum?></a></td>
                        <td><?=$client['clientname']?></td>
                        
                
                        <td>
                            Yes <input class="pull-right" type="radio" name="view_<?=$compnum?>" value="Y" <?if($upst['vdperm']=="Y"){echo "checked";}?>><br />
                            No  <input class="pull-right" type="radio" name="view_<?=$compnum?>" value="N" <?if(($upst['vdperm']=="N")||($upst['vdperm']==NULL)){echo "checked";}?>>
                        </td>
                        <td>
                            Yes <input class="pull-right" type="radio" name="edit_<?=$compnum?>" value="Y" <?if($upst['etperm']=="Y"){echo "checked";}?>><br />
                            No  <input class="pull-right" type="radio" name="edit_<?=$compnum?>" value="N" <?if(($upst['etperm']=="N")||($upst['etperm']==NULL)){echo "checked";}?>>
                        </td>
                        <td>
                            Yes <input class="pull-right" type="radio" name="delete_<?=$compnum?>" value="Y" <?if($upst['delperm']=="Y"){echo "checked";}?>><br />
                            No  <input class="pull-right" type="radio" name="delete_<?=$compnum?>" value="N" <?if(($upst['delperm']=="N")||($upst['delperm']==NULL)){echo "checked";}?>>
                        </td>
                       <?
                                }
                      }
                    }
                }
                else
                {
                ?>
                <table class="table table-striped table-hover table-bordered">
                    <tr>
                        <td>Client ID</td>
                        <td>Client</td>
                        <td>View</td>
                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>
                <?
                foreach ($clients as $client) 
                {  
                    $compnum = $client['clnum'] * 6111988; 
                    ?>
                    <tr>
                        <td><a href="/itdata/admin/dc/<?=$compnum?>"><?=$compnum?></a></td>
                        <td><?=$client['clientname']?></td>
                        <td>
                                Yes <input class="pull-right" type="radio" name="view_<?=$compnum?>" value="Y"><br />
                                No  <input class="pull-right" type="radio" name="view_<?=$compnum?>" value="N">
                        </td>
                        <td>
                                Yes <input class="pull-right" type="radio" name="edit_<?=$compnum?>" value="Y"><br />
                                No  <input class="pull-right" type="radio" name="edit_<?=$compnum?>" value="N">
                        </td>
                        <td>
                            Yes <input class="pull-right" type="radio" name="delete_<?=$compnum?>" value="Y"><br />
                            No  <input class="pull-right" type="radio" name="delete_<?=$compnum?>" value="N">
                        </td>
                    </tr>
                    
                 <?  
                 }
                 }
                 ?>

            </table>
            <table class="table table-striped table-hover table-bordered">
                <tr>
                    <th>Item</th><th colspan="2">Access To:</th>
                </tr>
                <tr>
                    <td>Documents</td>
                    <td>Yes <input class="pull-right" type="radio" name="docs" value="Y" <?if($useripermset['i_docs']=="Y") echo "checked"?>></td>
                    <td>No <input class="pull-right" type="radio" name="docs" value="N" <?if($useripermset['i_docs']=="N") echo "checked"?>></td>
                </tr>
                <tr>
                    <td>Anti-virus programs</td>
                    <td>Yes <input class="pull-right" type="radio" name="avp" value="Y" <?if($useripermset['i_avspam']=="Y") echo "checked"?>></td>
                    <td>No <input class="pull-right" type="radio" name="avp" value="N" <?if($useripermset['i_avspam']=="N") echo "checked"?>></td>
                </tr>
                <tr>
                    <td>Shared Drives</td>
                    <td>Yes <input class="pull-right" type="radio" name="shrddrvs" value="Y" <?if($useripermset['i_apps']=="Y") echo "checked" ?>></td>
                    <td>No <input class="pull-right" type="radio" name="shrddrvs" value="N" <?if($useripermset['i_apps']=="N") echo "checked" ?>></td>
                </tr>
                <tr>
                    <td>Application Service Providers</td>
                    <td>Yes <input class="pull-right" type="radio" name="asps" value="Y" <?if($useripermset['i_asps']=="Y") echo "checked" ?>></td>
                    <td>No <input class="pull-right" type="radio" name="asps" value="N" <?if($useripermset['i_asps']=="N") echo "checked" ?>></td>
                </tr>
                <tr>
                    <td>Domain</td>
                    <td>Yes <input class="pull-right" type="radio" name="dmn" value="Y" <?if($useripermset['i_clientdomain']=="Y") echo "checked" ?>></td>
                    <td>No <input class="pull-right" type="radio" name="dmn" value="N" <?if($useripermset['i_clientdomain']=="N") echo "checked" ?>></td>
                </tr>
                <tr>
                    <td>Primary Internet Service Providers</td>
                    <td>Yes <input class="pull-right" type="radio" name="pisps" value="Y" <?if($useripermset['i_pisp']=="Y") echo "checked" ?>></td>
                    <td>No <input class="pull-right" type="radio" name="pisps" value="N" <?if($useripermset['i_pisp']=="N") echo "checked" ?>></td>
                </tr>
                <tr>
                    <td>Backup Internet Service Providers</td>
                    <td>Yes <input class="pull-right" type="radio" name="bisps" value="Y" <?if($useripermset['i_bisp']=="Y") echo "checked" ?>></td>
                    <td>No <input class="pull-right" type="radio" name="bisps" value="N" <?if($useripermset['i_bisp']=="N") echo "checked" ?>></td>
                </tr>
                <tr>
                    <td>DRAC</td>
                    <td>Yes <input class="pull-right" type="radio" name="drac" value="Y" <?if($useripermset['i_drac']=="Y") echo "checked"?>></td>
                    <td>No <input class="pull-right" type="radio" name="drac" value="N" <?if($useripermset['i_drac']=="N") echo "checked" ?>></td>
                </tr>
                <tr>
                    <td>Firewalls</td>
                    <td>Yes <input class="pull-right" type="radio" name="firewall" value="Y" <?if($useripermset['i_firewall']=="Y") echo "checked" ?>></td>
                    <td>No <input class="pull-right" type="radio" name="firewall" value="N" <?if($useripermset['i_firewall']=="N") echo "checked" ?>></td>
                </tr>
                <tr>
                    <td>Multiple Locations</td>
                    <td>Yes <input class="pull-right" type="radio" name="mlocs" value="Y" <?if($useripermset['i_mlocs']=="Y") echo "checked" ?>></td>
                    <td>No <input class="pull-right" type="radio" name="mlocs" value="N" <?if($useripermset['i_mlocs']=="N") echo "checked" ?>></td>
                </tr>
                <tr>
                    <td>Printers</td>
                    <td>Yes <input class="pull-right" type="radio" name="printers" value="Y" <?if($useripermset['i_printers']=="Y") echo "checked" ?>></td>
                    <td>No <input class="pull-right" type="radio" name="printers" value="N" <?if($useripermset['i_printers']=="N") echo "checked" ?>></td>
                </tr>
                <tr>
                    <td>Routers</td>
                    <td>Yes <input class="pull-right" type="radio" name="routers" value="Y" <?if($useripermset['i_routers']=="Y") echo "checked" ?>></td>
                    <td>No <input class="pull-right" type="radio" name="routers" value="N" <?if($useripermset['i_routers']=="N") echo "checked" ?>></td>
                </tr>
                <tr>
                    <td>Service Accounts</td>
                    <td>Yes <input class="pull-right" type="radio" name="sa" value="Y" <?if($useripermset['i_serveraccounts']=="Y") echo "checked" ?>></td>
                    <td>No <input class="pull-right" type="radio" name="sa" value="N" <?if($useripermset['i_serveraccounts']=="N") echo "checked" ?>></td>
                </tr>
                <tr>
                    <td>Servers</td>
                    <td>Yes <input class="pull-right" type="radio" name="servers" value="Y" <?if($useripermset['i_servers']=="Y") echo "checked" ?>></td>
                    <td>No <input class="pull-right" type="radio" name="servers" value="N" <?if($useripermset['i_servers']=="N") echo "checked" ?>></td>
                </tr>

                <tr>
                    <td>Switches</td>
                    <td>Yes <input class="pull-right" type="radio" name="swtchs" value="Y" <?if($useripermset['i_switches']=="Y") echo "checked" ?>></td>
                    <td>No <input class="pull-right" type="radio" name="swtchs" value="N" <?if($useripermset['i_switches']=="N") echo "checked" ?>></td>
                </tr>
                <tr>
                    <td>UPS</td>
                    <td>Yes <input class="pull-right" type="radio" name="ups" value="Y" <?if($useripermset['i_ups']=="Y") echo "checked" ?>></td>
                    <td>No <input class="pull-right" type="radio" name="ups" value="N" <?if($useripermset['i_ups']=="N") echo "checked" ?>></td>
                </tr>
                <tr>
                    <td>VPN</td>
                    <td>Yes <input class="pull-right" type="radio" name="vpn" value="Y" <?if($useripermset['i_sslvpn']=="Y") echo "checked" ?>></td>
                    <td>No <input class="pull-right" type="radio" name="vpn" value="N" <?if($useripermset['i_sslvpn']=="N") echo "checked" ?>></td>
                </tr>
                <tr>
                    <td>Webmail</td>
                    <td>Yes <input class="pull-right" type="radio" name="webmail" value="Y" <?if($useripermset['i_webmail']=="Y") echo "checked" ?>></td>
                    <td>No <input class="pull-right" type="radio" name="webmail" value="N" <?if($useripermset['i_webmail']=="N") echo "checked" ?>></td>
                </tr>
                <tr>
                    <td>Wi-Fi</td>
                    <td>Yes <input class="pull-right" type="radio" name="wifi" value="Y" <?if($useripermset['i_wifi']=="Y") echo "checked"?>></td>
                    <td>No <input class="pull-right" type="radio" name="wifi" value="N" <?if($useripermset['i_wifi']=="N") echo "checked" ?>></td>
                </tr>
            </table>
            <button class="btn-primary">Edit User</button>
        </form>      
   </div>
</div>