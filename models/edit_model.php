<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Edit_model extends CI_Model {
    
    public function __construct() {
        $this->load->database();
    }
        
        public function update_domain($domainid)
        {
            $this->db->select('clientdomain.*');
            $this->db->from('clientdomain');
            $this->db->where('clientdomain.domainid', $domainid);
            $query = $this->db->get();
            return $query->row_array();
        }
        public function edit_domain($domainid, $domain, $clnum)
        {
            $this->db->select('clientdomain.domainid');
            $this->db->where('clientdomain.domainid', $domainid);
            $this->db->update('clientdomain', array('domain' => $domain));
        }
        public function update_server($serverid)
        {
            $this->db->select('servers.*');
            $this->db->from('servers');
            $this->db->where('servers.serverid', $serverid);
            $query = $this->db->get();
            return $query->row_array();
            
        }
        public function edit_server($serverid, $serverip, $servername, $servertype, $servernum)
        {
            $this->db->select('servers.serverid');
            $this->db->where('servers.serverid', $serverid);
            $this->db->update('servers', array(
                'ipaddress' => $serverip,
                'servername' => $servername,
                'servertype' => $servertype));
        }
        public function update_printer($printerid)
        {
            $this->db->select('printers.*');
            $this->db->from('printers');
            $this->db->where('printers.printerid', $printerid);
            $query = $this->db->get();
            return $query->row_array();
            
        }
        public function edit_printer($printerid, $printerip, $printermm, $printerpd, $printernum)
        {
            $this->db->select('printers.printerid');
            $this->db->where('printers.printerid', $printerid);
            $this->db->update('printers', array(
                'ipaddress' => $printerip,
                'make_model' => $printermm,
                'password' => $printerpd));
        }
        public function update_apps($appsid)
        {
            $this->db->select('apps.*');
            $this->db->from('apps');
            $this->db->where('apps.appsid', $appsid);
            $query = $this->db->get();
            return $query->row_array();
        }
        public function edit_apps($appsid, $apps_hshare, $appserver, $apppath, $appdrive, $appdesc)
        {
            $this->db->select('apps.appsid');
            $this->db->where('apps.appsid', $appsid);
            $this->db->update('apps', array(
                'appsserver' => $appserver,
                'unc' => $apppath,
                'drive' => $appdrive,
                'hiddenshare' => $apps_hshare,
                'dscpt' => $appdesc));
        }
        public function update_webmail($webmailid)
        {
            $this->db->select('webmail.*');
            $this->db->from('webmail');
            $this->db->where('webmail.wbmailid', $webmailid);
            $query = $this->db->get();
            return $query->row_array();
        }
        public function edit_webmail($web_id, $web_path, $web_un, $web_pd, $web_note, $web_num)
        {
            $this->db->select('webmail.wbmailid');
            $this->db->where('webmail.wbmailid', $web_id);
            $this->db->update('webmail', array(
                'webmail' => $web_path,
                'note' => $web_note,
                'username' => $web_un,
                'password' => $web_pd));
        }
        public function update_wifi($wifiid)
        {
            $this->db->select('wifi.*');
            $this->db->from('wifi');
            $this->db->where('wifi.wifiid', $wifiid);
            $query = $this->db->get();
            return $query->row_array();
        }
        public function edit_wifi($wf_id, $wf_sd, $wf_ipa, $wf_un, $wf_pd, $wf_num)
        {
            $this->db->select('wifi.wifiid');
            $this->db->where('wifi.wifiid', $wf_id);
            $this->db->update('wifi', array(
                'ssid' => $wf_sd,
                'wifiipaddress' => $wf_ipa,
                'wifiusername' => $wf_un,
                'wifipassword' => $wf_pd));
        }
        public function update_sslvpn($sslvpnid)
        {
            $this->db->select('sslvpn.*');
            $this->db->from('sslvpn');
            $this->db->where('sslvpn.sslvpnid', $sslvpnid);
            $query = $this->db->get();
            return $query->row_array();
        }
        public function edit_sslvpn($sp_id, $sp_url, $sp_eip, $sp_iip, $sp_un, $sp_pd)
        {
            $this->db->select('sslvpn.sslvpnid');
            $this->db->where('sslvpn.sslvpnid', $sp_id);
            $this->db->update('sslvpn', array(
                'sslurl' => $sp_url,
                'ssleipaddress' => $sp_eip,
                'ssliipaddress' => $sp_iip,
                'sslusername' => $sp_un,
                'sslpassword' => $sp_pd));
        }
        public function update_pisp($pispid)
        {
            $this->db->select('pisp.*');
            $this->db->from('pisp');
            $this->db->where('pisp.ispid', $pispid);
            $query = $this->db->get();
            return $query->row_array();
        }
        public function edit_pisp($pisp_id, $pisp_num, $pisp_name, $pisp_circ, $pisp_adda, $pisp_conf)
        {
            $this->db->select('pisp.ispid');
            $this->db->where('pisp.ispid', $pisp_id);
            $this->db->update('pisp', array(
              'ispname' => $pisp_name,
              'circid' => $pisp_circ,
              'addrange' => $pisp_adda,
              'conf' => $pisp_conf
            ));
        }
        public function update_bisp($bispid)
        {
            $this->db->select('bisp.*');
            $this->db->from('bisp');
            $this->db->where('bisp.bispid', $bispid);
            $query = $this->db->get();
            return $query->row_array();
        }
        public function edit_bisp($bisp_bid, $bisp_name, $bisp_circid, $bisp_range, $bisp_nm)
        {
            $this->db->select('bisp.bispid');
            $this->db->where('bisp.bispid', $bisp_bid);
            $this->db->update('bisp', array(
               'bispname' => $bisp_name,
               'bcircid' => $bisp_circid,
               'baddrange' => $bisp_range 
            ));
        }
        public function update_router($router_id) 
        {
            $this->db->select('routers.*');
            $this->db->from('routers');
            $this->db->where('routers.routerid', $router_id);
            $query = $this->db->get();
            return $query->row_array();
        }
        public function edit_router($rtr_rid, $rtr_name, $rtr_ipa, $rtr_epa, $rtr_dfg, $rtr_dns1, $rtr_dns2) 
        {
            
            $this->db->select('routers.routerid');
            $this->db->where('routers.routerid', $rtr_rid);
            $this->db->update('routers', array(
                'routername' => $rtr_name,
                'rexntipaddress' => $rtr_epa,
                'rintipaddress' => $rtr_ipa,
                'defgateway' => $rtr_dfg,
                'dns1' => $rtr_dns1,
                'dns2' => $rtr_dns2));
        }
        public function update_firewall($firewall_id)
        {
            $this->db->select('firewalls.*');
            $this->db->from('firewalls');
            $this->db->where('firewalls.fwid', $firewall_id);
            $query = $this->db->get();
            return $query->row_array();
        }
        public function edit_firewall($fw_fid, $fw_name, $fw_ipa, $fw_epa, $fw_dfg, $fw_un, $fw_pd) 
        {
            
            $this->db->select('firewalls.fwid');
            $this->db->where('firewalls.fwid', $fw_fid);
            $this->db->update('firewalls', array(
                'firewall' => $fw_name,
                'fwexntipaddress' => $fw_epa,
                'fwintipaddress' => $fw_ipa,
                'fwdefgateway' => $fw_dfg,
                'fwusername' => $fw_un,
                'fwpassword' => $fw_pd));
        }
        public function update_switches($switch_id)
        {
            $this->db->select('switches.*');
            $this->db->from('switches');
            $this->db->where('switches.swid', $switch_id);
            $query = $this->db->get();
            return $query->row_array();
        }
        public function edit_switches($sw_sid, $sw_name, $sw_ipa, $sw_un, $sw_pd) 
        {
            
            $this->db->select('switches.swid');
            $this->db->where('switches.swid', $sw_sid);
            $this->db->update('switches', array(
                'swname' => $sw_name,
                'swipaddress' => $sw_ipa,
                'swusername' => $sw_un,
                'switchpassword' => $sw_pd));
        }
        public function update_sa($said)
        {
            $this->db->select('serveraccounts.*');
            $this->db->from('serveraccounts');
            $this->db->where('serveraccounts.serveraccountsid', $said);
            $query = $this->db->get();
            return $query->row_array();
        }
        public function edit_sa($said, $sa_un, $sa_pw)
        {
            $this->db->select('serveraccounts.serveraccountsid');
            $this->db->where('serveraccounts.serveraccountsid', $said);
            $this->db->update('serveraccounts', array(
                'dausername' => $sa_un,
                'dapassword' => $sa_pw));
        }
        public function update_av($avid)
        {
            $this->db->select('avspam.*');
            $this->db->from('avspam');
            $this->db->where('avspam.avspamid', $avid);
            $query = $this->db->get();
            return $query->row_array();
        }
        public function edit_av($av_avid, $av_name, $av_hosted, $av_other, $av_usrn, $av_passwd)
        {
            $this->db->select('avspam.avspamid');
            $this->db->where('avspam.avspamid', $av_avid);
            $this->db->update('avspam', array(
                'avspname' => $av_name,
                'hosted' => $av_hosted,
                'other' => $av_other,
                'avusername' => $av_usrn,
                'avpassword' => $av_passwd));
        }
        public function update_asp($aspid)
        {
            $this->db->select('asps.*');
            $this->db->from('asps');
            $this->db->where('asps.aspsid', $aspid);
            $query = $this->db->get();
            return $query->row_array();
        }
        public function edit_asp($asp_aspid, $asp_aspname, $asp_url, $asp_un, $asp_pd, $asp_aspnote)
        {
            $this->db->select('asps.aspsid');
            $this->db->where('asps.aspsid', $asp_aspid);
            $this->db->update('asps', array(
                'aspname' => $asp_aspname,
                'aspipaddress' => $asp_url,
                'aspusername' => $asp_un,
                'asppassword' => $asp_pd,
                'aspnote' => $asp_aspnote));            
        }
        public function update_ups($upsid)
        {
            $this->db->select('ups.*');
            $this->db->from('ups');
            $this->db->where('ups.upsid', $upsid);
            $query = $this->db->get();
            return $query->row_array();
        }
        public function edit_ups($ups_upsid, $ups_name, $ups_url, $ups_un, $ups_pw)
        {
            $this->db->select('ups.upsid');
            $this->db->where('ups.upsid', $ups_upsid);
            $this->db->update('ups', array(
                'upsname' => $ups_name,
                'upsipaddress' => $ups_url,
                'upsusername' => $ups_un,
                'upspassword' => $ups_pw));
        }  
        public function update_drac($dracid)
        {
            $this->db->select('drac.*');
            $this->db->from ('drac');
            $this->db->where('drac.dracid', $dracid);
            $query = $this->db->get();
            return $query->row_array();
        }
        public function edit_drac($drac_id, $drac_ip, $drac_server, $drac_un, $drac_pd)
        {
            $this->db->select('drac.*');
            $this->db->where('drac.dracid', $drac_id);
            $this->db->update('drac', array(
                'dracip' => $drac_ip,
                'dracserver' => $drac_server,
                'dracusername' => $drac_un,
                'dracpassword' => $drac_pd));
            
        }
        public function update_mlocs($mlocsid)
        {
            $this->db->select('mlocs.*');
            $this->db->from('mlocs');
            $this->db->where('mlocs.mlocsid', $mlocsid);
            $query = $this->db->get();
            return $query->row_array();
        }
        public function edit_mlocs($comp_id,
                  $comp_num, 
                  $comp_address, 
                  $comp_address2, 
                  $comp_city, 
                  $comp_state, 
                  $comp_zip, 
                  $comp_tel, 
                  $comp_cfname, 
                  $comp_clname)
        {
            $this->db->select('mlocs.mlocsid');
            $this->db->where('mlocs.mlocsid', $comp_id);
            $this->db->update('mlocs', array(
            'clnum' => $comp_num,
            'address1' => $comp_address,
            'address2' => $comp_address2,
            'city' => $comp_city,
            'state' => $comp_state,
            'zip' => $comp_zip,
            'num' => $comp_tel,
            'mlfname' => $comp_cfname,
            'mllname' => $comp_clname));
        }
}

?>
