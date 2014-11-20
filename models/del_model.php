<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Del_model extends CI_Model {
    
    public function __construct() {
        $this->load->database();
    }
        //Deletes the client's domain
        public function del_domain($domainid)
        {
            $this->db->select('clientdomain.*');
            $this->db->from('clientdomain');
            $this->db->where('clientdomain.domainid', $domainid);
            $this->db->delete('clientdomain');
        }
        //Deletes the client's server(s)
        public function del_servers($serverid)
        {
            $this->db->select('servers.*');
            $this->db->from('servers');
            $this->db->where('servers.serverid', $serverid);
            $this->db->delete('servers');
        }
        //Deletes the client's printer(s)
        public function del_printer($printerid)
        {
            $this->db->select('printers.*');
            $this->db->from('printers');
            $this->db->where('printers.printerid', $printerid);
            $this->db->delete('printers');
        }
        //Deletes the client's app(s)
        public function del_apps($appsid)
        {
            $this->db->select('apps.*');
            $this->db->from('apps');
            $this->db->where('apps.appsid', $appsid);
            $this->db->delete('apps');
        }
        //Deletes the client's webmail
        public function del_webmail($webmailid)
        {
            $this->db->select('webmail.*');
            $this->db->from('webmail');
            $this->db->where('webmail.wbmailid', $webmailid);
            $this->db->delete('webmail');
        }
        //Deletes the client's wifi
        public function del_wifi($wifiid)
        {
            $this->db->select('wifi.*');
            $this->db->from('wifi');
            $this->db->where('wifi.wifiid', $wifiid);
            $this->db->delete('wifi');
        }
        //Deletes the client's sslvpn info
        public function del_sslvpn($sslvpnid)
        {
            $this->db->select('sslvpn.*');
            $this->db->from('sslvpn');
            $this->db->where('sslvpn.sslvpnid', $sslvpnid);
            $this->db->delete('sslvpn');
        }
        //Deletes the client's other location(s)
        public function del_mlocs($mlocsid)
        {
            $this->db->select('mlocs.*');
            $this->db->from('mlocs');
            $this->db->where('mlocs.mlocsid', $mlocsid);
            $this->db->delete('mlocs');
        }
        //Deletes the client's Primary ISP
        public function del_pisp($pispid)
        {
            $this->db->select('pisp.*');
            $this->db->from('pisp');
            $this->db->where('pisp.ispid', $pispid);
            $this->db->delete('pisp');
        }
        //Deletes the client's Backup ISP
        public function del_bisp($bispid)
        {
            $this->db->select('bisp.*');
            $this->db->from('bisp');
            $this->db->where('bisp.bispid', $bispid);
            $this->db->delete('bisp');
        }
        //Deletes the client's router(s)
        public function del_router($rid)
        {
            $this->db->select('routers.*');
            $this->db->from('routers');
            $this->db->where('routers.routerid', $rid);
            $this->db->delete('routers');
        }
        //Deletes the client's firewall(s)
        public function del_fw($fwid)
        {
            $this->db->select('firewalls.*');
            $this->db->from('firewalls');
            $this->db->where('firewalls.fwid', $fwid);
            $this->db->delete('firewalls');
        }
        //Deletes the client's switch(es)
        public function del_sw($swid)
        {
            $this->db->select('switches.*');
            $this->db->from('switches');
            $this->db->where('switches.swid', $swid);
            $this->db->delete('switches');
        }
        //Deletes the client's service account(s)
        public function del_sa($said)
        {
            $this->db->select('serveraccounts.*');
            $this->db->from('serveraccounts');
            $this->db->where('serveraccounts.serveraccountsid', $said);
            $this->db->delete('serveraccounts');
        }
        //Deletes the client's antivirus info
        public function del_av($avid)
        {
            $this->db->select('avspam.*');
            $this->db->from('avspam');
            $this->db->where('avspam.avspamid', $avid);
            $this->db->delete('avspam');
        }
        //Deletes the client's Application Service Provider(s)
        public function del_asp($aspid)
        {
            $this->db->select('asps.*');
            $this->db->from('asps');
            $this->db->where('asps.aspsid', $aspid);
            $this->db->delete('asps');
        }
        //Deletes the client's UPS(s)
        public function del_ups($upsid)
        {
            $this->db->select('ups.*');
            $this->db->from('ups');
            $this->db->where('ups.upsid', $upsid);
            $this->db->delete('ups');
        }
        //Deletes the client's drac info
        public function del_drac($dracid)
        {
            $this->db->select('drac.*');
            $this->db->from('drac');
            $this->db->where('drac.dracid', $dracid);
            $this->db->delete('drac');
        }
        //Deletes the client's document(s)
        public function del_docs($docid)
        {
            $this->db->select('docs.*');
            $this->db->from('docs');
            $this->db->where('docs.docid', $docid);
            $this->db->delete('docs');
        }
}

?>
