<? 
    $clientnum = $clientnum * 6111988; 
    $at = $this->session->userdata('user_t');
    $usernum = $this->session->userdata('user_id');
    $this->load->model('adminpanel/adminpanel_model');
    $uipmset = $this->adminpanel_model->get_ipermset($usernum);
?>
<br />
<a href="top" id="top"></a>
<a href="/itdata/user">Back To Clients</a>
<legend>
    <h5>Client:  <?=$clinfo['clientname']?></h5>
</legend>
<a href="#docs">Documents</a> | <a href="#domains">Domains</a> | <a href="#servers">Servers</a> | <a href="#drac">DRACs</a> | <a href="#printers">Printers</a> | <a href="#apps">Mapped Drives</a> | <a href="#webmail">Webmail</a>  | <a href="#wifi">Wi-fi</a> | <a href="#sslvpn">SSL VPN</a> | <a href="#mlocs">Locations</a> | <a href="#pisp">PISP</a> | <a href="#bisp">BISP</a> | <a href="#rid">Routers</a> | <a href="#fwid">Firewalls</a> | <a href="#swid">Switches</a> | <a href="#said">Server Accounts</a> | <a href="#avid">AV/Spam</a> | <a href="#aspid">ASP</a> | <a href="#upsid">UPS</a>
<div class="table-section">
<?
if($at !="A")
{
/* ---------------------------------Document Table-------------------------------- */ 
if($uipmset['i_docs'] == "Y")
{
?>
<table class="table table-bordered table-striped table-hover"><a href="docs" id="docs"></a>
    <tr>
        <th>Document</th>
        <th>Description</th>
        <td>Delete</td>
    </tr>

<? 
  if($documents != NULL)
  {    
    foreach ($documents as $dcs)
    {
        $cld = $dcs['clnum'] * 6111988;
        $clpath = "file://///www.josephwatkin.com/uploads/c".$cld."/".$dcs['filename'];
    ?>
    <tr>
        <td><a href="<?=$clpath?>"><?$dcs['filename']?></a></td>
        <td><?=$dcs['descript']?></td>
        <td width="50"><a href="/itdata/delete/docs/<?=$dcs['domainid']."/".$dcs['clnum']?>"><i class="icon-trash"></i></a></li></td>    
    </tr>
<? } ?>
    <tr>  
        <td colspan="3"><a class="pull-right" href="/itdata/admin/add_docs/<?=$clientnum?>">Add a Document</a></td>
    </tr>
  <?}   
    else
    {
    ?> 
    <tr>  
        <td colspan="3">0/0 Shown<a class="pull-right" href="/itdata/admin/add_docs/<?=$clientnum?>">Add a Document</a></td>
    </tr>
   <tr> 
        <td colspan="3"><a class="pull-right" href="#top">top</a>
    </tr>
<? } ?>
</table>
<? } ?>
<?
/* ---------------------------------Domain Table-------------------------------- */ 
if($uipmset['i_clientdomain'] == "Y")
{
?>
<table class="table table-bordered table-striped table-hover"><a href="domains" id="domains"></a>
    <tr>
        <th>Domains</th>
        <td>Edit</td>
        <td>Delete</td>
    </tr>

<? 
  if($domains != NULL)
  {    
    foreach ($domains as $cd)
    {?>
    <tr>
        <td><?=$cd['domain']?></td>
        <td width="50"><a href="/itdata/edit/domain/<?=$cd['domainid']."/".$cd['clnum']?>"><i class="icon-pencil"></i></a></li></td>
        <td width="50"><a href="/itdata/delete/domain/<?=$cd['domainid']."/".$cd['clnum']?>"><i class="icon-trash"></i></a></li></td>    
    </tr>
<? } ?>
    <tr>  
        <td colspan="3"><a class="pull-right" href="/itdata/admin/add_domain/<?=$clientnum?>">Add a Domain</a></td>
    </tr>
        

  <?}   
    else
    {
    ?> 
    <tr>  
        <td colspan="3">0/0 Shown<a class="pull-right" href="/itdata/admin/add_domain/<?=$clientnum?>">Add a Domain</a></td>
    </tr>
   <tr> 
        <td colspan="3"><a class="pull-right" href="#top">top</a>
    </tr>
<? } ?>
</table>
<? } ?>
<?php
/* ---------------------------------Servers Table-------------------------------- */ 
if($uipmset['i_servers'] == "Y")
{
?>
<table class="table table-bordered table-striped table-hover"><a href="servers" id="servers"></a>   
    <tr>
        <th colspan="5">Servers</th>
    </tr>
    <tr>
        <td>IP Address</td>
        <td>Server Name</td>
        <td>Server Type</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
  
<? 
  if($servers != NULL)
  {    
    foreach ($servers as $server)
    {?>
    <tr>
        <td><?=$server['ipaddress']?></td>
        <td><?=$server['servername']?></td>
        <td><?=$server['servertype']?></td>
        <td width="50"><a href="/itdata/edit/server/<?=$server['serverid']."/".$server['clnum']?>"><i class="icon-pencil"></i></a></li></td>
        <td width="50"><a href="/itdata/delete/server/<?=$server['serverid']."/".$server['clnum']?>"><i class="icon-trash"></i></a></li></td>
    </tr>
   <? } ?>
   <tr>  
        <td colspan="5"><a class="pull-right" href="/itdata/admin/add_server/<?=$clientnum?>">Add a Server</a></td>
    </tr>
  <? }
   else 
   { ?>
    <tr>  
        <td colspan="5"><a class="pull-right" href="/itdata/admin/add_server/<?=$clientnum?>">Add a Server</a></td>
    </tr>
    <tr>    
        <td colspan="5"><a class="pull-right" href="#top">top</a>
    </tr>
   <? } ?>
    </table>
<? } ?>
<?
/*---------------------------------DRAC TABLE-------------------------------------*/
if($uipmset['i_drac'] == "Y")
{
?>
<table class="table table-bordered table-striped table-hover"><a href="drac" id="drac"></a>   
    <tr>
        <th colspan="6">DRAC</th>
    </tr>
    <tr>
        <td>IP Address</td>
        <td>Server</td>
        <td>Username</td>
        <td>Password</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
  
<? 
  if($dinfo != NULL)
  {    
    foreach ($dinfo as $di)
    {?>
    <tr>
        <td><a href="https://<?=$di['dracip']?>"><?=$di['dracip']?></a></td>
        <td><?=$di['dracserver']?></td>
        <td><?=$di['dracusername']?></td>
        <td><?=$di['dracpassword']?></td>
        <td width="50"><a href="/itdata/edit/drac/<?=$di['dracid']."/".$di['clnum']?>"><i class="icon-pencil"></i></a></li></td>
        <td width="50"><a href="/itdata/delete/drac/<?=$di['dracid']."/".$di['clnum']?>"><i class="icon-trash"></i></a></li></td>
    </tr>
   <? } ?>
   <tr>  
        <td colspan="6"><a class="pull-right" href="/itdata/admin/add_drac/<?=$clientnum?>">Add DRAC</a></td>
    </tr>
  <? }
   else 
   { ?>
    <tr>  
        <td colspan="6"><a class="pull-right" href="/itdata/admin/add_drac/<?=$clientnum?>">Add DRAC</a></td>
    </tr>
    <tr>    
        <td colspan="6"><a class="pull-right" href="#top">top</a>
    </tr>
   <? } ?>
    </table>
    <? } ?>

<?php
/* ---------------------------------Printers Table-------------------------------- */ 
if($uipmset['i_printers'] == "Y")
{
?>
<table class="table table-bordered table-striped table-hover"><a href="printers" id="printers"></a>
    <tr>
        <th colspan="5">Printers</th>
    </tr>
        <tr>
        <td>IP Address</td>
        <td>Make and Model</td>
        <td>Password</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>    

<? 
if ($printers != NULL)
{
foreach ($printers as $printer) {?>
    <tr>
        <td><a href="http://<?=$printer['ipaddress']?>"><?=$printer['ipaddress']?></a></td>
        <td><?=$printer['make_model']?></td>
        <td><?=$printer['password']?></td>
        <td width="50"><a href="/itdata/edit/printer/<?=$printer['printerid']."/".$printer['clnum']?>"><i class="icon-pencil"></i></a></li></td>
        <td width="50"><a href="/itdata/delete/printer/<?=$printer['printerid']."/".$printer['clnum']?>"><i class="icon-trash"></i></a></li></td> 
    </tr>
<? } ?>
   <tr>  
        <td colspan="5"><a class="pull-right" href="/itdata/admin/add_printer/<?=$clientnum?>">Add a Printer</a></td>
    </tr>
<? }
else 
{ ?>
    <tr>  
        <td colspan="5"><a class="pull-right" href="/itdata/admin/add_printer/<?=$clientnum?>">Add a Printer</a></td>
    </tr>
    <tr>    
        <td colspan="5"><a class="pull-right" href="#top">top</a>
    </tr>
<? } ?>
</table>
<? } ?>

<?php
/* ---------------------------------Mapped Drives Table-------------------------------- */ 
if($uipmset['i_apps'] == "Y")
{
?>
<table class="table table-bordered table-striped table-hover"><a href="apps" id="apps"></a>    
    <tr>
        <th colspan="5">Mapped Drives</th>
    </tr>
    <tr>
        <td>Drive</td>
        <td>UNC</td>
        <td>Description</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
<? 
    if ($apps){
    foreach ($apps as $app){
    //$list = explode(".", $app['unc']);
    if ($app['hiddenshare']=='yes')
    {
            $uncstring = "\\\\".$app['appsserver']."\\";
            $uncstring = $uncstring.$app['unc'];
            $uncstring=$uncstring."$";
    }
    else
    {
            $uncstring = "\\\\".$app['appsserver']."\\";
            $uncstring = $uncstring.$app['unc'];
    }
?>
    <tr>
    <td><?=$app['drive']?></td>
    <td><?=$uncstring?></td>
    <td><?=$app['dscpt']?></td>
    <td width="50"><a href="/itdata/edit/apps/<?=$app['appsid']."/".$app['clnum']?>"><i class="icon-pencil"></i></a></td>
    <td width="50"><a href="/itdata/delete/apps/<?=$app['appsid']."/".$app['clnum']?>"><i class="icon-trash"></i></a></td>
    </tr>
    <? } }
    else{
        $uncstring = "No apps directory entered.";
        ?>
    <tr>
        <td>Not Available</td>
        <td><?=$uncstring?></td>
    </tr>
    <?}
    
    ?> 
           <tr>  
        <td colspan="5"><a class="pull-right" href="/itdata/admin/add_apps/<?=$clientnum?>">Add an Apps Directory</a></td>
    </tr>
    <tr>    
        <td colspan="5"><a class="pull-right" href="#top">top</a>
    </tr>
</table>
<? } ?>
<?php
/* ---------------------------------Webmail Table-------------------------------- */ 
if($uipmset['i_webmail'] == "Y")
{
?>
<table class="table table-bordered table-striped table-hover"><a href="webmail" id="webmail"></a>   
    <tr>
        <th colspan="6">Webmail</th>
    </tr>
    <tr>
        <td>Address</td>
        <td>Username</td>
        <td>Password</td>
        <td>Notes</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>

<? 
if($webmail != NULL)
{
foreach ($webmail as $webm)
{?>
    <tr>
        <td><a href="http://<?=$webm['webmail']?>"><?=$webm['webmail']?></td>
        <td><?=$webm['username']?></td>
        <td><?=$webm['password']?></td>
        <td><?=$webm['note']?></td>
        <td width="50"><a href="/itdata/edit/webmail/<?=$webm['wbmailid']."/".$webm['clnum']?>"><i class="icon-pencil"></i></a></li></td>
        <td width="50"><a href="/itdata/delete/webmail/<?=$webm['wbmailid']."/".$webm['clnum']?>"><i class="icon-trash"></i></a></td>
     </tr>
<? } ?> 
    <tr>  
        <td colspan="6"><a class="pull-right" href="/itdata/admin/add_webmail/<?=$clientnum?>">Add Webmail</a></td>
    </tr>
<? }
else
{ ?>
       <tr>  
        <td colspan="6"><a class="pull-right" href="/itdata/admin/add_webmail/<?=$clientnum?>">Add Webmail</a></td>
    </tr>
<? } ?>   
    <tr>    
        <td colspan="6"><a class="pull-right" href="#top">top</a></td>
    </tr>

</table>
<? } ?>
<?php
/* ---------------------------------WiFi Table-------------------------------- */ 
if($uipmset['i_wifi'] == "Y")
{
?>
<table class="table table-bordered table-striped table-hover"><a href="wifi" id="wifi"></a>   
    <tr>
        <th colspan="4">Wi-Fi</th>
    </tr>
    <tr>
        <td>SSID</td>
        <td>UserName</td>
        <td>Password</td>
        <td>IP Address</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    

<? 
if($wifi != NULL)
{
foreach ($wifi as $wfi)
{?>
    <tr>
        <td><?=$wfi['ssid']?></td>
        <td><?=$wfi['wifiusername']?></td>
        <td><?=$wfi['wifipassword']?></td>
        <td><a href="http://<?=$wfi['wifiipaddress']?>"><?=$wfi['wifiipaddress']?></a></td>
        <td width="50"><a href="/itdata/edit/wifi/<?=$wfi['wifiid']."/".$wfi['clnum']?>"><i class="icon-pencil"></i></a></li></td>
        <td width="50"><a href="/itdata/delete/wifi/<?=$wfi['wifiid']."/".$wfi['clnum']?>"><i class="icon-trash"></i></a></td>
    </tr>
<? }?> 
       <tr>  
        <td colspan="6"><a class="pull-right" href="/itdata/admin/add_wifi/<?=$clientnum?>">Add a Wi-Fi Connection</a></td>
    </tr>
<?}
else 
{ ?>
     <tr>  
        <td colspan="6"><a class="pull-right" href="/itdata/admin/add_wifi/<?=$clientnum?>">Add a Wi-Fi Connection</a></td>
    </tr>
<? }?>
    <tr>    
        <td colspan="6"><a class="pull-right" href="#top">top</a></td>
    </tr>
</table>
<? } ?>
<?
/*-----------------SSLVPN Table--------------------------*/
if($uipmset['i_sslvpn'] == "Y")
{
?>
<table class="table table-bordered table-striped table-hover"><a href="sslvpn" id="sslvpn"></a>
<tr>
        <th colspan="4">SSLVPN</th>
</tr>
<tr>
    <td>URL Address</td>
    <td>External/WAN IP</td>
    <td>LAN IP</td>
    <td>Username</td>
    <td>Password</td>
    <td>Edit</td>
    <td>Delete</td>
</tr>
<? 
if ($sslvpn != NULL)
{
foreach ($sslvpn as $svpn)
{?>

    <tr>
        <td><?=$svpn['sslurl']?></t>
        <td><?=$svpn['ssleipaddress']?></td>
        <td><?=$svpn['ssliipaddress']?></td>
        <td><?=$svpn['sslusername']?></td>
        <td><?=$svpn['sslpassword']?></td>
        <td width="50"><a href="/itdata/edit/sslvpn/<?=$svpn['sslvpnid']."/".$svpn['clnum']?>"><i class="icon-pencil"></i></a></li></td>
        <td width="50"><a href="/itdata/delete/sslvpn/<?=$svpn['sslvpnid']."/".$svpn['clnum']?>"><i class="icon-trash"></i></a></td>
<? }?> 
   
    </tr>
     <tr>  
 
        <td colspan="7"><a class="pull-right" href="/itdata/admin/add_sslvpn/<?=$clientnum?>">Add an SSLVPN Connection</a></td>
    </tr>
<? }
 else { 
 ?>
     <tr>  
 
        <td colspan="7"><a class="pull-right" href="/itdata/admin/add_sslvpn/<?=$clientnum?>">Add an SSLVPN Connection</a></td>
    </tr>
<? } ?>
    <tr>    
        <td colspan="7"><a class="pull-right" href="#top">top</a></td>
    </tr>
</table>
<? } ?>
<?
/* ---------------------------------Locations Table-------------------------------- */ 
if($uipmset['i_mlocs'] == "Y")
{
?>

<table class="table table-bordered table-striped table-hover"><a href="mlocs" id="mlocs"></a> 
<tr>
        <th colspan="10">Locations</th>
</tr>
<tr>
    <td>Address</td>
    <td>Address Two</td>
    <td>City</td>
    <td>State</td>
    <td>Zip</td>
    <td>Telephone</td>
    <td>Contact First Name</td>
    <td>Contact Last Name</td>
    <td>Edit</td>
    <td>Delete</td>
</tr>
<? 
if ($mlcs != NULL)
{    
foreach ($mlcs as $mc)
{?>
   <tr>
        <td><?=$mc['address1']?></t>
        <td><?=$mc['address2']?></td>
        <td><?=$mc['city']?></t><td><?=$mc['state']?></td>
        <td><?=$mc['zip']?></td>
        <td><?=$mc['num']?></td>
        <td><?=$mc['mlfname']?></td>
        <td><?=$mc['mllname']?></td>
        <td width="50"><a href="/itdata/edit/mlocs/<?=$mc['mlocsid']."/".$mc['clnum']?>"><i class="icon-pencil"></i></a></li></td>
        <td width="50"><a href="/itdata/delete/mlocs/<?=$mc['mlocsid']."/".$mc['clnum']?>"><i class="icon-trash"></i></a></td>
</tr>
<? }?> 
   <tr>  
        <td colspan="10"><a class="pull-right" href="/itdata/admin/addmlocation/<?=$clientnum?>">Add a Location</a></td>
    </tr>
<? }
    else
    { ?>
        <tr>  
        <td colspan="10"><a class="pull-right" href="/itdata/admin/addmlocation/<?=$clientnum?>">Add a Location</a></td>
    </tr>
<? } ?>
   <tr>    
        <td colspan="10"><a class="pull-right" href="#top">top</a></td>
   </tr>
   
</table>
<? }
/*------------------------------ISP Table------------------------------*/
if($uipmset['i_pisp'] == "Y")
{
?>

<table class="table table-bordered table-striped table-hover"><a href="pisp" id="pisp"></a> 
    <tr>
        <th colspan="6">Internet Service Provider</th><a href="ispid" id="ispid"></a>
    </tr>
    <tr>    
        <td>ISP Company</td>
        <td>Account Number/Circuit ID</td>
        <td>IP Address Range</td>
        <td>Type of Configuration/Fail Over</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    <? 
    if ($isps != NULL)
    {
    foreach ($isps as $psp)
    {?>
    <tr>
        <td><?=$psp['ispname']?></td>
        <td><?=$psp['circid']?></td>
        <td><?=$psp['addrange']?></td>
        <td><?=$psp['conf']?></td>
        <td width="50"><a href="/itdata/edit/pisp/<?=$psp['ispid']."/".$psp['clnum']?>"><i class="icon-pencil"></i></a></td>
        <td width="50"><a href="/itdata/delete/pisp/<?=$psp['ispid']."/".$psp['clnum']?>"><i class="icon-trash"></i></a></li></td>
    </tr>
    <?}?>
    <tr>  
        <td colspan="10"><a class="pull-right" href="/itdata/admin/add_pisp/<?=$clientnum?>">Add Primary ISP</a></td>
    </tr>
    <? }
    else
    { ?>
    <tr>  
        <td colspan="10"><a class="pull-right" href="/itdata/admin/add_pisp/<?=$clientnum?>">Add Primary ISP</a></td>
    </tr>
    <? } ?>
   <tr>    
        <td colspan="10"><a class="pull-right" href="#top">top</a></td>
   </tr>
</table>
<? }
/*------------------------------BISP Table------------------------------*/
if($uipmset['i_bisp'] == "Y")
{
?>

<table class="table table-bordered table-striped table-hover"><a href="bisp" id="bisp"></a>
    <tr>
        <th colspan="5">Backup Internet Service Provider</th>
    </tr>
    <tr>
        <td>BISP Name</td>
        <td>Circuit ID/Account Num</td>
        <td>Circuit Range</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    <?
    if ($bisps != NULL)
    {
    foreach($bisps as $bp)
    {?>
    <tr>    
        <td><?=$bp['bispname']?></td>
        <td><?=$bp['bcircid']?></td>
        <td><?=$bp['baddrange']?></td>
        <td width="50"><a href="/itdata/edit/bisp/<?=$bp['bispid']."/".$bp['clnum']?>"><i class="icon-pencil"></i></a></td>
        <td width="50"><a href="/itdata/delete/bisp/<?=$bp['bispid']."/".$bp['clnum']?>"><i class="icon-trash"></i></a></li></td>
    </tr>
   <?}?>
   <td colspan="5"><a class="pull-right" href="/itdata/admin/add_bisp/<?=$clientnum?>">Add Backup Internet Service Provider</a></td>
    <?}
    else
    {
        ?>
        <td colspan="5">(0/0 shown)<a class="pull-right" href="/itdata/admin/add_bisp/<?=$clientnum?>">Add Backup Internet Service Provider</a></td>
 <? } ?>
</table>
<? }
/*------------------------------Routers Table------------------------------*/
if($uipmset['i_routers'] == "Y")
{
?>
<table class="table table-bordered table-striped table-hover"><a href="rid" id="rid"></a>
    <tr>
        <th colspan="8">Routers</th><a href="rid" id="rid"></a>
    </tr>
    <tr>
        <td>Router Type</td>
        <td>Internal IP address</td>
        <td>External IP Address</td>
        <td>Default Gateway</td>
        <td>DNS 1</td>
        <td>DNS 2</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    <?    
    if ($rtrs != NULL)
    {
            foreach($rtrs as $rt)
            {?>
                <tr>
                    <td><?=$rt['routername']?></td>
                    <td><?=$rt['rintipaddress']?></td>
                    <td><?=$rt['rexntipaddress']?></td>
                    <td><?=$rt['defgateway']?></td>
                    <td><?=$rt['dns1']?></td>
                    <td><?=$rt['dns2']?></td>
                    <td width="50"><a href="/itdata/edit/router/<?=$rt['routerid']."/".$rt['clnum']?>"><i class="icon-pencil"></i></a></td>
                    <td width="50"><a href="/itdata/delete/router/<?=$rt['routerid']."/".$rt['clnum']?>"><i class="icon-trash"></i></a></td>
                </tr>
                
            <?}?>
     <tr>            
        <td colspan="8"><a class="pull-right" href="/itdata/admin/add_routers/<?=$clientnum?>">Add a Router</a></td>    
    </tr>
    <? }
    else
    {?>
    <tr>            
        <td colspan="8">(0/0 shown)<a class="pull-right" href="/itdata/admin/add_routers/<?=$clientnum?>">Add a Router</a></td>    
    </tr>
    <?}?>
 </table>
<? } 
/*------------------------------Firewalls Table------------------------------*/
if($uipmset['i_firewall'] == "Y")
{
?>
<table class="table table-bordered table-striped table-hover"><a href="fwid" id="fwid"></a>
    <tr>
        <th colspan="8">Firewalls</th><a href="fwid" id="fwid"></a>
    </tr>
    <tr>
        <td>Firewall Type/Name</td>
        <td>Internal IP address</td>
        <td>External IP Address</td>
        <td>Default Gateway</td>
        <td>Username</td>
        <td>Password</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    <?    
    if ($fwlls != NULL)
    {
            foreach($fwlls as $fw)
            {?>
                <tr>
                    <td><?=$fw['firewall']?></td>
                    <td><?=$fw['fwintipaddress']?></td>
                    <td><?=$fw['fwexntipaddress']?></td>
                    <td><?=$fw['fwdefgateway']?></td>
                    <td><?=$fw['fwusername']?></td>
                    <td><?=$fw['fwpassword']?></td>
                    <td width="50"><a href="/itdata/edit/firewall/<?=$fw['fwid']."/".$fw['clnum']?>"><i class="icon-pencil"></i></a></td>
                    <td width="50"><a href="/itdata/delete/firewall/<?=$fw['fwid']."/".$fw['clnum']?>"><i class="icon-trash"></i></a></td>
                </tr>
                
            <?}?>
     <tr>            
        <td colspan="8"><a class="pull-right" href="/itdata/admin/add_firewall/<?=$clientnum?>">Add a Firewall</a></td>    
    </tr>
    <? }
    else
    {?>
    <tr>            
        <td colspan="8">(0/0 shown)<a class="pull-right" href="/itdata/admin/add_firewall/<?=$clientnum?>">Add a Firewall</a></td>    
    </tr>
    <?}?>
</table>
<? }
/*------------------------------Switches Table------------------------------*/
if($uipmset['i_switches'] == "Y")
{
?>
<table class="table table-bordered table-striped table-hover">
    <tr>
        <th colspan="7">Switches</th><a href="swid" id="swid"></a>
    </tr>
    <tr>
        <td>Switch Name/Type</td>
        <td>Switch Managed</td>
        <td>IP address</td>
        <td>Username</td>
        <td>Password</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    <?    
    if ($swths != NULL)
    {
            foreach($swths as $sw)
            {?>
                <tr>
                    <td><?=$sw['swname']?></td>
                    <td><?
                    if (($sw['switchmanaged'] =="y") ||($sw['switchmanaged'] == "Y"))
                    {
                        echo "The switch is managed";
                    }
                    else
                    {
                        echo "The switch is not managed";
                    }
                    ?></td>
                    
                    <td><?=$sw['swipaddress']?></td>
                    <td><?=$sw['swusername']?></td>
                    <td><?=$sw['switchpassword']?></td>
                    <td width="50"><a href="/itdata/edit/switches/<?=$sw['swid']."/".$sw['clnum']?>"><i class="icon-pencil"></i></a></td>
                    <td width="50"><a href="/itdata/delete/switches/<?=$sw['swid']."/".$sw['clnum']?>"><i class="icon-trash"></i></a></td>
                </tr>
                
            <?}?>
     <tr>            
        <td colspan="7"><a class="pull-right" href="/itdata/admin/add_switch/<?=$clientnum?>">Add a Switch</a></td>    
    </tr>
    <? }
    else
    {?>
    <tr>            
        <td colspan="7">(0/0 shown)<a class="pull-right" href="/itdata/admin/add_switch/<?=$clientnum?>">Add a Switch</a></td>    
    </tr>
    <?}?>
</table>
<? } 
/*------------------------------Server Accounts Table------------------------------*/
if($uipmset['i_serveraccounts'] == "Y")
{
?>
<table class="table table-bordered table-striped table-hover"><a href="said" id="said"></a>
    <tr>
        <th>Server Accounts</th><a href="said" id="said"></a>
    </tr>
    <tr>
        <td>Username</td>
        <td>Password</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    <?    
    if ($svaccnts != NULL)
    {
            foreach($svaccnts as $sva)
            {?>
                <tr>
                    <td><?=$sva['dausername']?></td>
                    <td><?=$sva['dapassword']?></td>
                    <td width="50"><a href="/itdata/edit/sa/<?=$sva['serveraccountsid']."/".$sva['clnum']?>"><i class="icon-pencil"></i></a></td>
                    <td width="50"><a href="/itdata/delete/sa/<?=$sva['serveraccountsid']."/".$sva['clnum']?>"><i class="icon-trash"></i></a></td>
                </tr>
                
            <?}?>
     <tr>            
        <td colspan="7"><a class="pull-right" href="/itdata/admin/add_sa/<?=$clientnum?>">Add a Server Account</a></td>    
    </tr>
    <? }
    else
    {?>
    <tr>            
        <td colspan="7">(0/0 shown)<a class="pull-right" href="/itdata/admin/add_sa/<?=$clientnum?>">Add a Server Account</a></td>    
    </tr>
    <?}?>
</table>
<? } 
/*------------------------------AVSPAM Table------------------------------*/
if($uipmset['i_avspam'] == "Y")
{
?>
<table class="table table-bordered table-striped table-hover"><a href="avid" id="avid"></a>
    <tr>
        <th>Anti-Virus/Anti-Spam</th>
    <tr>
        <td>Antivirus Spam/Type</td>
        <td>Hosted</td>
        <td>Other</td>
        <td>Username</td>
        <td>Password</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    <?    
    if ($avspms != NULL)
    {
            foreach($avspms as $avs)
            {?>
                <tr>
                    <td><?=$avs['avspname']?></td>
                    <td><a href="https://<?=$avs['hosted']?>"><?=$avs['hosted']?></a></td>
                    <td><?=$avs['other']?></td>
                    <td><?=$avs['avusername']?></td>
                    <td><?=$avs['avpassword']?></td>
                    <td width="50"><a href="/itdata/edit/av/<?=$avs['avspamid']."/".$avs['clnum']?>"><i class="icon-pencil"></i></a></td>
                    <td width="50"><a href="/itdata/delete/av/<?=$avs['avspamid']."/".$avs['clnum']?>"><i class="icon-trash"></i></a></td>
                </tr>
                
            <?}?>
     <tr>            
        <td colspan="7"><a class="pull-right" href="/itdata/admin/add_av/<?=$clientnum?>">Add an AntiVirus/Spam</a></td>    
    </tr>
    <? }
    else
    {?>
    <tr>            
        <td colspan="7">(0/0 shown)<a class="pull-right" href="/itdata/admin/add_av/<?=$clientnum?>">Add an AntiVirus/Spam</a></td>    
    </tr>
    <?}?>
</table>
<?}
/*------------------------------ASPS Table------------------------------*/
if($uipmset['i_asps'] == "Y")
{
?>
<table class="table table-bordered table-striped table-hover"><a href="aspid" id="aspid"></a>
    <tr>
        <th>Application Service Provider</th>
    </tr>
    <tr>
        <td>Application Service Provider Name</td>
        <td>ASP URL</td>
        <td>Username</td>
        <td>Password</td>
        <td>Notes</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    <?    
    if ($appservprovs != NULL)
    {
            foreach($appservprovs as $asp)
            {?>
                <tr>
                    <td><?=$asp['aspname']?></td>
                    <td><a href="<?=$asp['aspipaddress']?>"><?=$asp['aspipaddress']?></a></td>
                    <td><?=$asp['aspusername']?></td>
                    <td><?=$asp['asppassword']?></td>
                    <td><?=$asp['aspnote']?></td>
                    <td width="50"><a href="/itdata/edit/asp/<?=$asp['aspsid']."/".$asp['clnum']?>"><i class="icon-pencil"></i></a></td>
                    <td width="50"><a href="/itdata/delete/asp/<?=$asp['aspsid']."/".$asp['clnum']?>"><i class="icon-trash"></i></a></td>
                </tr>
                
            <?}?>
     <tr>            
        <td colspan="7"><a class="pull-right" href="/itdata/admin/add_asp/<?=$clientnum?>">Add an ASP</a></td>    
    </tr>
    <? }
    else
    {?>
    <tr>            
        <td colspan="7">(0/0 shown)<a class="pull-right" href="/itdata/admin/add_asp/<?=$clientnum?>">Add an ASP</a></td>    
    </tr>
    <?}?>
</table>
<?}
/*------------------------------UPS Table------------------------------*/
if($uipmset['i_ups'] == "Y")
{
?>
<table class="table table-bordered table-striped table-hover"><a href="upsid" id="upsid"></a>
    <tr>
        <th>Uninterrupted Power Supply</th>
    </tr>
    <tr>
        <td>Uninterrupted Power Supply Name</td>
        <td>UPS URL</td>
        <td>Username</td>
        <td>Password</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    <?    
    if ($upsp != NULL)
    {
            foreach($upsp as $unps)
            {?>
                <tr>
                    <td><?=$unps['upsname']?></td>
                    <td><a href="<?=$unps['upsipaddress']?>"><?=$unps['upsipaddress']?></a></td>
                    <td><?=$unps['upsusername']?></td>
                    <td><?=$unps['upspassword']?></td>
                    <td width="50"><a href="/itdata/edit/ups/<?=$unps['upsid']."/".$unps['clnum']?>"><i class="icon-pencil"></i></a></td>
                    <td width="50"><a href="/itdata/delete/ups/<?=$unps['upsid']."/".$unps['clnum']?>"><i class="icon-trash"></i></a></td>
                </tr>
                
            <?}?>
     <tr>            
        <td colspan="7"><a class="pull-right" href="/itdata/admin/add_ups/<?=$clientnum?>">Add an UPS</a></td>    
    </tr>
    <? }
    else
    {?>
    <tr>            
        <td colspan="7">(0/0 shown)<a class="pull-right" href="/itdata/admin/add_ups/<?=$clientnum?>">Add an UPS</a></td>    
    </tr>
    <?}?>
</table>
<?} }
else
{
/*
This is the Administration section of the Page.  All Accounts that are not SA or U (in the users table) will see everything.

*/
    
/*------------------------Documents Table--------------------------------------------*/
?>
<table class="table table-bordered table-striped table-hover"><a href="docs" id="docs"></a>
    <tr>
        <th>Document</th>
        <th>Description</th>
        <td>Delete</td>
    </tr>

<? 
  if($documents != NULL)
  {    
    foreach ($documents as $dcs)
    {
        $clpath = $dcs['clnum'] * 6111988;
        $clpath = "/www.josephwatkin.com/uploads/c".$clpath."/".$dcs['filename'];
    ?>
    
    <tr>
        <td><a href="http:/<?=$clpath?>"><?=$dcs['filename']?></a></td>
        <td><?=$dcs['descript']?></td>
        <td width="50"><a href="/itdata/delete/docs/<?=$dcs['docid']."/".$dcs['clnum']?>"><i class="icon-trash"></i></a></li></td>    
    </tr>
<? } ?>
    <tr>  
        <td colspan="3"><a class="pull-right" href="/itdata/admin/add_docs/<?=$clientnum?>">Add a Document</a></td>
    </tr>
        

  <?}   
    else
    {
    ?> 
    <tr>  
        <td colspan="3">0/0 Shown<a class="pull-right" href="/itdata/admin/add_docs/<?=$clientnum?>">Add a Document</a></td>
    </tr>
   <tr> 
        <td colspan="3"><a class="pull-right" href="#top">top</a>
    </tr>
<? } ?>
</table>
<?

/* ---------------------------------Domain Table-------------------------------- */ 
?>
<table class="table table-bordered table-striped table-hover"><a href="domains" id="domains"></a>
    <tr>
        <th>Domains</th>
        <td>Edit</td>
        <td>Delete</td>
    </tr>

<? 
  if($domains != NULL)
  {    
    foreach ($domains as $cd)
    {?>
    <tr>
        <td><?=$cd['domain']?></td>
        <td width="50"><a href="/itdata/edit/domain/<?=$cd['domainid']."/".$cd['clnum']?>"><i class="icon-pencil"></i></a></li></td>
        <td width="50"><a href="/itdata/delete/domain/<?=$cd['domainid']."/".$cd['clnum']?>"><i class="icon-trash"></i></a></li></td>    
    </tr>
<? } ?>
    <tr>  
        <td colspan="3"><a class="pull-right" href="/itdata/admin/add_domain/<?=$clientnum?>">Add a Domain</a></td>
    </tr>
        

  <?}   
    else
    {
    ?> 
    <tr>  
        <td colspan="3">0/0 Shown<a class="pull-right" href="/itdata/admin/add_domain/<?=$clientnum?>">Add a Domain</a></td>
    </tr>
   <tr> 
        <td colspan="3"><a class="pull-right" href="#top">top</a>
    </tr>
    <? } ?>
</table>
<?php
/* ---------------------------------Servers Table-------------------------------- */ 
?>
<table class="table table-bordered table-striped table-hover"><a href="servers" id="servers"></a>   
    <tr>
        <th colspan="5">Servers</th>
    </tr>
    <tr>
        <td>IP Address</td>
        <td>Server Name</td>
        <td>Server Type</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
  
<? 
  if($servers != NULL)
  {    
    foreach ($servers as $server)
    {?>
    <tr>
        <td><?=$server['ipaddress']?></td>
        <td><?=$server['servername']?></td>
        <td><?=$server['servertype']?></td>
        <td width="50"><a href="/itdata/edit/server/<?=$server['serverid']."/".$server['clnum']?>"><i class="icon-pencil"></i></a></li></td>
        <td width="50"><a href="/itdata/delete/server/<?=$server['serverid']."/".$server['clnum']?>"><i class="icon-trash"></i></a></li></td>
    </tr>
   <? } ?>
   <tr>  
        <td colspan="5"><a class="pull-right" href="/itdata/admin/add_server/<?=$clientnum?>">Add a Server</a></td>
    </tr>
  <? }
   else 
   { ?>
    <tr>  
        <td colspan="5"><a class="pull-right" href="/itdata/admin/add_server/<?=$clientnum?>">Add a Server</a></td>
    </tr>
    <tr>    
        <td colspan="5"><a class="pull-right" href="#top">top</a>
    </tr>
   <? } ?>
    </table>

<?
/*---------------------------------DRAC TABLE-------------------------------------*/
?>
<table class="table table-bordered table-striped table-hover"><a href="drac" id="dracid"></a>   
    <tr>
        <th colspan="6">DRAC</th>
    </tr>
    <tr>
        <td>IP Address</td>
        <td>Server</td>
        <td>Username</td>
        <td>Password</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
  
<? 
  if($dinfo != NULL)
  {    
    foreach ($dinfo as $di)
    {?>
    <tr>
        <td><a href="https://<?=$di['dracip']?>"><?=$di['dracip']?></a></td>
        <td><?=$di['dracserver']?></td>
        <td><?=$di['dracusername']?></td>
        <td><?=$di['dracpassword']?></td>
        <td width="50"><a href="/itdata/edit/drac/<?=$di['dracid']."/".$di['clnum']?>"><i class="icon-pencil"></i></a></li></td>
        <td width="50"><a href="/itdata/delete/drac/<?=$di['dracid']."/".$di['clnum']?>"><i class="icon-trash"></i></a></li></td>
    </tr>
   <? } ?>
   <tr>  
        <td colspan="6"><a class="pull-right" href="/itdata/admin/add_drac/<?=$clientnum?>">Add DRAC</a></td>
    </tr>
  <? }
   else 
   { ?>
    <tr>  
        <td colspan="6"><a class="pull-right" href="/itdata/admin/add_drac/<?=$clientnum?>">Add DRAC</a></td>
    </tr>
    <tr>    
        <td colspan="6"><a class="pull-right" href="#top">top</a>
    </tr>
   <? } ?>
    </table>


<?php
/* ---------------------------------Printers Table-------------------------------- */ 
?>
<table class="table table-bordered table-striped table-hover"><a href="printers" id="printers"></a>
    <tr>
        <th colspan="5">Printers</th>
    </tr>
        <tr>
        <td>IP Address</td>
        <td>Make and Model</td>
        <td>Password</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>    

<? 
if ($printers != NULL)
{
foreach ($printers as $printer) {?>
    <tr>
        <td><a href="http://<?=$printer['ipaddress']?>"><?=$printer['ipaddress']?></a></td>
        <td><?=$printer['make_model']?></td>
        <td><?=$printer['password']?></td>
        <td width="50"><a href="/itdata/edit/printer/<?=$printer['printerid']."/".$printer['clnum']?>"><i class="icon-pencil"></i></a></li></td>
        <td width="50"><a href="/itdata/delete/printer/<?=$printer['printerid']."/".$printer['clnum']?>"><i class="icon-trash"></i></a></li></td> 
    </tr>
<? } ?>
   <tr>  
        <td colspan="5"><a class="pull-right" href="/itdata/admin/add_printer/<?=$clientnum?>">Add a Printer</a></td>
    </tr>
<? }
else 
{ ?>
    <tr>  
        <td colspan="5"><a class="pull-right" href="/itdata/admin/add_printer/<?=$clientnum?>">Add a Printer</a></td>
    </tr>
    <tr>    
        <td colspan="5"><a class="pull-right" href="#top">top</a>
    </tr>
<? } ?>
</table>

<br />
<br />
<?php
/* ---------------------------------Mapped Drives Table-------------------------------- */ 
?>
<table class="table table-bordered table-striped table-hover"><a href="apps" id="apps"></a>    
    <tr>
        <th colspan="5">Mapped Drives</th>
    </tr>
    <tr>
        <td>Drive</td>
        <td>UNC</td>
        <td>Description</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
<? 
    if ($apps){
    foreach ($apps as $app){
    //$list = explode(".", $app['unc']);
    if ($app['hiddenshare']=='yes')
    {
            $uncstring = "\\\\".$app['appsserver']."\\";
            $uncstring = $uncstring.$app['unc'];
            $uncstring=$uncstring."$";
    }
    else
    {
            $uncstring = "\\\\".$app['appsserver']."\\";
            $uncstring = $uncstring.$app['unc'];
    }
?>
    <tr>
    <td><?=$app['drive']?></td>
    <td><?=$uncstring?></td>
    <td><?=$app['dscpt']?></td>
    <td width="50"><a href="/itdata/edit/apps/<?=$app['appsid']."/".$app['clnum']?>"><i class="icon-pencil"></i></a></td>
    <td width="50"><a href="/itdata/delete/apps/<?=$app['appsid']."/".$app['clnum']?>"><i class="icon-trash"></i></a></td>
    </tr>
    <? } }
    else{
        $uncstring = "No apps directory entered.";
        ?>
    <tr>
        <td>Not Available</td>
        <td><?=$uncstring?></td>
    </tr>
    <?}
    
    ?> 
           <tr>  
        <td colspan="5"><a class="pull-right" href="/itdata/admin/add_apps/<?=$clientnum?>">Add an Apps Directory</a></td>
    </tr>
    <tr>    
        <td colspan="5"><a class="pull-right" href="#top">top</a>
    </tr>
</table>

<br />
<br />

<?php
/* ---------------------------------Webmail Table-------------------------------- */ 
?>
<table class="table table-bordered table-striped table-hover"><a href="webmail" id="webmail"></a>   
    <tr>
        <th colspan="6">Webmail</th>
    </tr>
    <tr>
        <td>Address</td>
        <td>Username</td>
        <td>Password</td>
        <td>Notes</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>

<? 
if($webmail != NULL)
{
foreach ($webmail as $webm)
{?>
    <tr>
        <td><a href="http://<?=$webm['webmail']?>"><?=$webm['webmail']?></td>
        <td><?=$webm['username']?></td>
        <td><?=$webm['password']?></td>
        <td><?=$webm['note']?></td>
        <td width="50"><a href="/itdata/edit/webmail/<?=$webm['wbmailid']."/".$webm['clnum']?>"><i class="icon-pencil"></i></a></li></td>
        <td width="50"><a href="/itdata/delete/webmail/<?=$webm['wbmailid']."/".$webm['clnum']?>"><i class="icon-trash"></i></a></td>
     </tr>
<? } ?> 
    <tr>  
        <td colspan="6"><a class="pull-right" href="/itdata/admin/add_webmail/<?=$clientnum?>">Add Webmail</a></td>
    </tr>
<? }
else
{ ?>
       <tr>  
        <td colspan="6"><a class="pull-right" href="/itdata/admin/add_webmail/<?=$clientnum?>">Add Webmail</a></td>
    </tr>
<? } ?>   
    <tr>    
        <td colspan="6"><a class="pull-right" href="#top">top</a></td>
    </tr>
</table>
<br />
<br />
<?php
/* ---------------------------------WiFi Table-------------------------------- */ 
?>
<table class="table table-bordered table-striped table-hover"><a href="wifi" id="wifi"></a>   
    <tr>
        <th colspan="4">Wi-Fi</th>
    </tr>
    <tr>
        <td>SSID</td>
        <td>UserName</td>
        <td>Password</td>
        <td>IP Address</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    

<? 
if($wifi != NULL)
{
foreach ($wifi as $wfi)
{?>
    <tr>
        <td><?=$wfi['ssid']?></td>
        <td><?=$wfi['wifiusername']?></td>
        <td><?=$wfi['wifipassword']?></td>
        <td><a href="http://<?=$wfi['wifiipaddress']?>"><?=$wfi['wifiipaddress']?></a></td>
        <td width="50"><a href="/itdata/edit/wifi/<?=$wfi['wifiid']."/".$wfi['clnum']?>"><i class="icon-pencil"></i></a></li></td>
        <td width="50"><a href="/itdata/delete/wifi/<?=$wfi['wifiid']."/".$wfi['clnum']?>"><i class="icon-trash"></i></a></td>
    </tr>
<? }?> 
       <tr>  
        <td colspan="6"><a class="pull-right" href="/itdata/admin/add_wifi/<?=$clientnum?>">Add a Wi-Fi Connection</a></td>
    </tr>
<?}
else 
{ ?>
     <tr>  
        <td colspan="6"><a class="pull-right" href="/itdata/admin/add_wifi/<?=$clientnum?>">Add a Wi-Fi Connection</a></td>
    </tr>
<? }?>
    <tr>    
        <td colspan="6"><a class="pull-right" href="#top">top</a></td>
    </tr>
</table>
<table class="table table-bordered table-striped table-hover"><a href="sslvpn" id="sslvpn"></a>
<tr>
        <th colspan="4">SSLVPN</th>
</tr>
<tr>
    <td>URL Address</td>
    <td>External/WAN IP</td>
    <td>LAN IP</td>
    <td>Username</td>
    <td>Password</td>
    <td>Edit</td>
    <td>Delete</td>
</tr>
<? 
if ($sslvpn != NULL)
{
foreach ($sslvpn as $svpn)
{?>

    <tr>
        <td><?=$svpn['sslurl']?></t>
        <td><?=$svpn['ssleipaddress']?></td>
        <td><?=$svpn['ssliipaddress']?></td>
        <td><?=$svpn['sslusername']?></td>
        <td><?=$svpn['sslpassword']?></td>
        <td width="50"><a href="/itdata/edit/sslvpn/<?=$svpn['sslvpnid']."/".$svpn['clnum']?>"><i class="icon-pencil"></i></a></li></td>
        <td width="50"><a href="/itdata/delete/sslvpn/<?=$svpn['sslvpnid']."/".$svpn['clnum']?>"><i class="icon-trash"></i></a></td>
<? }?> 
   
    </tr>
     <tr>  
 
        <td colspan="7"><a class="pull-right" href="/itdata/admin/add_sslvpn/<?=$clientnum?>">Add an SSLVPN Connection</a></td>
    </tr>
<? }
 else { 
 ?>
     <tr>  
 
        <td colspan="7"><a class="pull-right" href="/itdata/admin/add_sslvpn/<?=$clientnum?>">Add an SSLVPN Connection</a></td>
    </tr>
<? } ?>
    <tr>    
        <td colspan="7"><a class="pull-right" href="#top">top</a></td>
    </tr>
</table>

<table class="table table-bordered table-striped table-hover"><a href="mlocs" id="mlocs"></a> 
<tr>
        <th colspan="10">Locations</th>
</tr>
<tr>
    <td>Address</td>
    <td>Address Two</td>
    <td>City</td>
    <td>State</td>
    <td>Zip</td>
    <td>Telephone</td>
    <td>Contact First Name</td>
    <td>Contact Last Name</td>
    <td>Edit</td>
    <td>Delete</td>
</tr>
<? 
if ($mlcs != NULL)
{    
foreach ($mlcs as $mc)
{?>
   <tr>
        <td><?=$mc['address1']?></t>
        <td><?=$mc['address2']?></td>
        <td><?=$mc['city']?></t><td><?=$mc['state']?></td>
        <td><?=$mc['zip']?></td>
        <td><?=$mc['num']?></td>
        <td><?=$mc['mlfname']?></td>
        <td><?=$mc['mllname']?></td>
        <td width="50"><a href="/itdata/edit/mlocs/<?=$mc['mlocsid']."/".$mc['clnum']?>"><i class="icon-pencil"></i></a></li></td>
        <td width="50"><a href="/itdata/delete/mlocs/<?=$mc['mlocsid']."/".$mc['clnum']?>"><i class="icon-trash"></i></a></td>
</tr>
<? }?> 
   <tr>  
        <td colspan="10"><a class="pull-right" href="/itdata/admin/addmlocation/<?=$clientnum?>">Add a Location</a></td>
    </tr>
<? }
    else
    { ?>
        <tr>  
        <td colspan="10"><a class="pull-right" href="/itdata/admin/addmlocation/<?=$clientnum?>">Add a Location</a></td>
    </tr>
<? } ?>
   <tr>    
        <td colspan="10"><a class="pull-right" href="#top">top</a></td>
   </tr>
   
</table>
<? 
/*------------------------------ISP Table------------------------------*/
?>
<table class="table table-bordered table-striped table-hover"><a href="pisp" id="pisp"></a> 
    <tr>
        <th colspan="6">Internet Service Provider</th><a href="ispid" id="ispid"></a>
    </tr>
    <tr>    
        <td>ISP Company</td>
        <td>Account Number/Circuit ID</td>
        <td>IP Address Range</td>
        <td>Type of Configuration/Fail Over</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    <? 
    if ($isps != NULL)
    {
    foreach ($isps as $psp)
    {?>
    <tr>
        <td><?=$psp['ispname']?></td>
        <td><?=$psp['circid']?></td>
        <td><?=$psp['addrange']?></td>
        <td><?=$psp['conf']?></td>
        <td width="50"><a href="/itdata/edit/pisp/<?=$psp['ispid']."/".$psp['clnum']?>"><i class="icon-pencil"></i></a></td>
        <td width="50"><a href="/itdata/delete/pisp/<?=$psp['ispid']."/".$psp['clnum']?>"><i class="icon-trash"></i></a></li></td>
    </tr>
    <?}?>
    <tr>  
        <td colspan="10"><a class="pull-right" href="/itdata/admin/add_pisp/<?=$clientnum?>">Add Primary ISP</a></td>
    </tr>
    <? }
    else
    { ?>
    <tr>  
        <td colspan="10"><a class="pull-right" href="/itdata/admin/add_pisp/<?=$clientnum?>">Add Primary ISP</a></td>
    </tr>
    <? } ?>
   <tr>    
        <td colspan="10"><a class="pull-right" href="#top">top</a></td>
   </tr>
</table>
<?php 
/*------------------------------BISP Table------------------------------*/
?>

<table class="table table-bordered table-striped table-hover"><a href="bisp" id="bisp"></a>
    <tr>
        <th colspan="5">Backup Internet Service Provider</th>
    </tr>
    <tr>
        <td>BISP Name</td>
        <td>Circuit ID/Account Num</td>
        <td>Circuit Range</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    <?
    if ($bisps != NULL)
    {
    foreach($bisps as $bp)
    {?>
    <tr>    
        <td><?=$bp['bispname']?></td>
        <td><?=$bp['bcircid']?></td>
        <td><?=$bp['baddrange']?></td>
        <td width="50"><a href="/itdata/edit/bisp/<?=$bp['bispid']."/".$bp['clnum']?>"><i class="icon-pencil"></i></a></td>
        <td width="50"><a href="/itdata/delete/bisp/<?=$bp['bispid']."/".$bp['clnum']?>"><i class="icon-trash"></i></a></li></td>
    </tr>
   <?}?>
   <td colspan="5"><a class="pull-right" href="/itdata/admin/add_bisp/<?=$clientnum?>">Add Backup Internet Service Provider</a></td>
    <?}
    else
    {
        ?>
        <td colspan="5">(0/0 shown)<a class="pull-right" href="/itdata/admin/add_bisp/<?=$clientnum?>">Add Backup Internet Service Provider</a></td>
    <?
    }
    ?>
</table>
<?php 
/*------------------------------Routers Table------------------------------*/
?>
<table class="table table-bordered table-striped table-hover"><a href="rid" id="rid"></a>
    <tr>
        <th colspan="8">Routers</th><a href="rid" id="rid"></a>
    </tr>
    <tr>
        <td>Router Type</td>
        <td>Internal IP address</td>
        <td>External IP Address</td>
        <td>Default Gateway</td>
        <td>DNS 1</td>
        <td>DNS 2</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    <?    
    if ($rtrs != NULL)
    {
            foreach($rtrs as $rt)
            {?>
                <tr>
                    <td><?=$rt['routername']?></td>
                    <td><?=$rt['rintipaddress']?></td>
                    <td><?=$rt['rexntipaddress']?></td>
                    <td><?=$rt['defgateway']?></td>
                    <td><?=$rt['dns1']?></td>
                    <td><?=$rt['dns2']?></td>
                    <td width="50"><a href="/itdata/edit/router/<?=$rt['routerid']."/".$rt['clnum']?>"><i class="icon-pencil"></i></a></td>
                    <td width="50"><a href="/itdata/delete/router/<?=$rt['routerid']."/".$rt['clnum']?>"><i class="icon-trash"></i></a></td>
                </tr>
                
            <?}?>
     <tr>            
        <td colspan="8"><a class="pull-right" href="/itdata/admin/add_routers/<?=$clientnum?>">Add a Router</a></td>    
    </tr>
    <? }
    else
    {?>
    <tr>            
        <td colspan="8">(0/0 shown)<a class="pull-right" href="/itdata/admin/add_routers/<?=$clientnum?>">Add a Router</a></td>    
    </tr>
    <?}?>
 </table>
<?php 
/*------------------------------Firewalls Table------------------------------*/
?>
<table class="table table-bordered table-striped table-hover"><a href="fwid" id="fwid"></a>
    <tr>
        <th colspan="8">Firewalls</th><a href="fwid" id="fwid"></a>
    </tr>
    <tr>
        <td>Firewall Type/Name</td>
        <td>Internal IP address</td>
        <td>External IP Address</td>
        <td>Default Gateway</td>
        <td>Username</td>
        <td>Password</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    <?    
    if ($fwlls != NULL)
    {
            foreach($fwlls as $fw)
            {?>
                <tr>
                    <td><?=$fw['firewall']?></td>
                    <td><?=$fw['fwintipaddress']?></td>
                    <td><?=$fw['fwexntipaddress']?></td>
                    <td><?=$fw['fwdefgateway']?></td>
                    <td><?=$fw['fwusername']?></td>
                    <td><?=$fw['fwpassword']?></td>
                    <td width="50"><a href="/itdata/edit/firewall/<?=$fw['fwid']."/".$fw['clnum']?>"><i class="icon-pencil"></i></a></td>
                    <td width="50"><a href="/itdata/delete/firewall/<?=$fw['fwid']."/".$fw['clnum']?>"><i class="icon-trash"></i></a></td>
                </tr>
                
            <?}?>
     <tr>            
        <td colspan="8"><a class="pull-right" href="/itdata/admin/add_firewall/<?=$clientnum?>">Add a Firewall</a></td>    
    </tr>
    <? }
    else
    {?>
    <tr>            
        <td colspan="8">(0/0 shown)<a class="pull-right" href="/itdata/admin/add_firewall/<?=$clientnum?>">Add a Firewall</a></td>    
    </tr>
    <?}?>
</table>
<?php 
/*------------------------------Switches Table------------------------------*/
?>
<table class="table table-bordered table-striped table-hover">
    <tr>
        <th colspan="7">Switches</th><a href="swid" id="swid"></a>
    </tr>
    <tr>
        <td>Switch Name/Type</td>
        <td>Switch Managed</td>
        <td>IP address</td>
        <td>Username</td>
        <td>Password</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    <?    
    if ($swths != NULL)
    {
            foreach($swths as $sw)
            {?>
                <tr>
                    <td><?=$sw['swname']?></td>
                    <td><?
                    if (($sw['switchmanaged'] =="y") ||($sw['switchmanaged'] == "Y"))
                    {
                        echo "The switch is managed";
                    }
                    else
                    {
                        echo "The switch is not managed";
                    }
                    ?></td>
                    
                    <td><?=$sw['swipaddress']?></td>
                    <td><?=$sw['swusername']?></td>
                    <td><?=$sw['switchpassword']?></td>
                    <td width="50"><a href="/itdata/edit/switches/<?=$sw['swid']."/".$sw['clnum']?>"><i class="icon-pencil"></i></a></td>
                    <td width="50"><a href="/itdata/delete/switches/<?=$sw['swid']."/".$sw['clnum']?>"><i class="icon-trash"></i></a></td>
                </tr>
                
            <?}?>
     <tr>            
        <td colspan="7"><a class="pull-right" href="/itdata/admin/add_switch/<?=$clientnum?>">Add a Switch</a></td>    
    </tr>
    <? }
    else
    {?>
    <tr>            
        <td colspan="7">(0/0 shown)<a class="pull-right" href="/itdata/admin/add_switch/<?=$clientnum?>">Add a Switch</a></td>    
    </tr>
    <?}?>
</table>
<?php 
/*------------------------------Server Accounts Table------------------------------*/
?>
<table class="table table-bordered table-striped table-hover"><a href="said" id="said"></a>
    <tr>
        <th>Server Accounts</th><a href="said" id="said"></a>
    </tr>
    <tr>
        <td>Username</td>
        <td>Password</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    <?    
    if ($svaccnts != NULL)
    {
            foreach($svaccnts as $sva)
            {?>
                <tr>
                    <td><?=$sva['dausername']?></td>
                    <td><?=$sva['dapassword']?></td>
                    <td width="50"><a href="/itdata/edit/sa/<?=$sva['serveraccountsid']."/".$sva['clnum']?>"><i class="icon-pencil"></i></a></td>
                    <td width="50"><a href="/itdata/delete/sa/<?=$sva['serveraccountsid']."/".$sva['clnum']?>"><i class="icon-trash"></i></a></td>
                </tr>
                
            <?}?>
     <tr>            
        <td colspan="7"><a class="pull-right" href="/itdata/admin/add_sa/<?=$clientnum?>">Add a Server Account</a></td>    
    </tr>
    <? }
    else
    {?>
    <tr>            
        <td colspan="7">(0/0 shown)<a class="pull-right" href="/itdata/admin/add_sa/<?=$clientnum?>">Add a Server Account</a></td>    
    </tr>
    <?}?>
</table>
<?php 
/*------------------------------AVSPAM Table------------------------------*/
?>
<table class="table table-bordered table-striped table-hover"><a href="avid" id="avid"></a>
    <tr>
        <th>Anti-Virus/Anti-Spam</th>
    <tr>
        <td>Antivirus Spam/Type</td>
        <td>Hosted</td>
        <td>Other</td>
        <td>Username</td>
        <td>Password</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    <?    
    if ($avspms != NULL)
    {
            foreach($avspms as $avs)
            {?>
                <tr>
                    <td><?=$avs['avspname']?></td>
                    <td><a href="https://<?=$avs['hosted']?>"><?=$avs['hosted']?></a></td>
                    <td><?=$avs['other']?></td>
                    <td><?=$avs['avusername']?></td>
                    <td><?=$avs['avpassword']?></td>
                    <td width="50"><a href="/itdata/edit/av/<?=$avs['avspamid']."/".$avs['clnum']?>"><i class="icon-pencil"></i></a></td>
                    <td width="50"><a href="/itdata/delete/av/<?=$avs['avspamid']."/".$avs['clnum']?>"><i class="icon-trash"></i></a></td>
                </tr>
                
            <?}?>
     <tr>            
        <td colspan="7"><a class="pull-right" href="/itdata/admin/add_av/<?=$clientnum?>">Add an AntiVirus/Spam</a></td>    
    </tr>
    <? }
    else
    {?>
    <tr>            
        <td colspan="7">(0/0 shown)<a class="pull-right" href="/itdata/admin/add_av/<?=$clientnum?>">Add an AntiVirus/Spam</a></td>    
    </tr>
    <?}?>
</table>
<?
/*------------------------------ASPS Table------------------------------*/
?>
<table class="table table-bordered table-striped table-hover"><a href="aspid" id="aspid"></a>
    <tr>
        <th>Application Service Provider</th>
    </tr>
    <tr>
        <td>Application Service Provider Name</td>
        <td>ASP URL</td>
        <td>Username</td>
        <td>Password</td>
        <td>Notes</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    <?    
    if ($appservprovs != NULL)
    {
            foreach($appservprovs as $asp)
            {?>
                <tr>
                    <td><?=$asp['aspname']?></td>
                    <td><a href="<?=$asp['aspipaddress']?>"><?=$asp['aspipaddress']?></a></td>
                    <td><?=$asp['aspusername']?></td>
                    <td><?=$asp['asppassword']?></td>
                    <td><?=$asp['aspnote']?></td>
                    <td width="50"><a href="/itdata/edit/asp/<?=$asp['aspsid']."/".$asp['clnum']?>"><i class="icon-pencil"></i></a></td>
                    <td width="50"><a href="/itdata/delete/asp/<?=$asp['aspsid']."/".$asp['clnum']?>"><i class="icon-trash"></i></a></td>
                </tr>
                
            <?}?>
     <tr>            
        <td colspan="7"><a class="pull-right" href="/itdata/admin/add_asp/<?=$clientnum?>">Add an ASP</a></td>    
    </tr>
    <? }
    else
    {?>
    <tr>            
        <td colspan="7">(0/0 shown)<a class="pull-right" href="/itdata/admin/add_asp/<?=$clientnum?>">Add an ASP</a></td>    
    </tr>
    <?}?>
</table>
<?php 
/*------------------------------UPS Table------------------------------*/
?>
<table class="table table-bordered table-striped table-hover"><a href="upsid" id="upsid"></a>
    <tr>
        <th>Uninterrupted Power Supply</th>
    </tr>
    <tr>
        <td>Uninterrupted Power Supply Name</td>
        <td>UPS URL</td>
        <td>Username</td>
        <td>Password</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    <?    
    if ($upsp != NULL)
    {
            foreach($upsp as $unps)
            {?>
                <tr>
                    <td><?=$unps['upsname']?></td>
                    <td><a href="<?=$unps['upsipaddress']?>"><?=$unps['upsipaddress']?></a></td>
                    <td><?=$unps['upsusername']?></td>
                    <td><?=$unps['upspassword']?></td>
                    <td width="50"><a href="/itdata/edit/ups/<?=$unps['upsid']."/".$unps['clnum']?>"><i class="icon-pencil"></i></a></td>
                    <td width="50"><a href="/itdata/delete/ups/<?=$unps['upsid']."/".$unps['clnum']?>"><i class="icon-trash"></i></a></td>
                </tr>
                
            <?}?>
     <tr>            
        <td colspan="7"><a class="pull-right" href="/itdata/admin/add_ups/<?=$clientnum?>">Add an UPS</a></td>    
    </tr>
    <? }
    else
    {?>
    <tr>            
        <td colspan="7">(0/0 shown)<a class="pull-right" href="/itdata/admin/add_ups/<?=$clientnum?>">Add an UPS</a></td>    
    </tr>
    <?}?>
</table>
<?}?>
</div>

