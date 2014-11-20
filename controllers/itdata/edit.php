<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Edit extends CI_Controller {
        public function __construct(){
        parent::__construct();    
        
        // libraries
        $this->load->library('session');

        // helpers
        $this->load->helper('url');
        }
        //pulls the row for the domain associated with the $domainid
	public function domain($domainid)
	{
            $this->load->model('edit_model');
            $dmn = $this->edit_model->update_domain($domainid);
            $data['dmns'] = $dmn;
            $this->load->view('header/header');
            $this->load->view('atbs/updatedomain', $data);
            $this->load->view('footer/footer');
        }
        //updates the domain associated with the domain id
        public function update_domain()
        {
            $dm_id = $this->input->post('domainid');
            $dm_dm = $this->input->post('domain');
            $dm_num = $this->input->post('domain_num');
            $this->load->model('edit_model');
            $this->edit_model->edit_domain($dm_id, $dm_dm, $dm_num);
            $dm_num = $dm_num * 6111988;
            redirect('/itdata/admin/dc/'.$dm_num.'#domains');
        }
        public function server($serverid)
        {
            $this->load->model('edit_model');
            $srv = $this->edit_model->update_server($serverid);
            $data['srvr'] = $srv;
            $this->load->view('header/header');
            $this->load->view('atbs/updateserver', $data);
            $this->load->view('footer/footer');
        }
        public function update_server()
        {
            $sv_id = $this->input->post('server_id');    
            $sv_ip = $this->input->post('ipaddress');
            $sv_sn = $this->input->post('servername');
            $sv_st = $this->input->post('servertype');
            $sv_num = $this->input->post('server_num');
            $this->load->model('edit_model');
            $this->edit_model->edit_server($sv_id, $sv_ip, $sv_sn, $sv_st, $sv_num);
            $sv_num = $sv_num * 6111988;
            redirect('/itdata/admin/dc/'.$sv_num.'#servers');
        }   
        public function printer($printerid)
        {
            $this->load->model('edit_model');
            $pt = $this->edit_model->update_printer($printerid);
            $data['prnt'] = $pt;
            $this->load->view('header/header');
            $this->load->view('atbs/updateprinter', $data);
            $this->load->view('footer/footer');
        }
        public function update_printer()
        {
            $pr_id = $this->input->post('printer_id');    
            $pr_ip = $this->input->post('ipaddress');
            $pr_mm = $this->input->post('mm');
            $pr_pd = $this->input->post('pd');
            $pr_num = $this->input->post('printer_num');
            $this->load->model('edit_model');
            $this->edit_model->edit_printer($pr_id, $pr_ip, $pr_mm, $pr_pd, $pr_num);
            $pr_num = $pr_num * 6111988;
            redirect('/itdata/admin/dc/'.$pr_num.'#printers');
        }
        public function apps($appsid, $clientid)
        {
           $this->load->model('edit_model');
           $ap = $this->edit_model->update_apps($appsid);
           $data['drcty'] = $ap;
           $this->load->model('dispdat_model');
           $server = $this->dispdat_model->servers($clientid);
           $data['servers'] = $server;
           $this->load->view('header/header');
           $this->load->view('atbs/updateapps', $data);
           $this->load->view('footer/footer');
        }
        public function update_apps()
        {
            $app_id = $this->input->post('apps_id');
            $app_hshare = $this->input->post('hshare');
            $app_server = $this->input->post('svname');
            $app_path = $this->input->post('uncpath');
            $app_drive = $this->input->post('dletter');
            $app_ds = $this->input->post('descript');
            $app_num = $this->input->post('apps_num');
            $this->load->model('edit_model');
            $this->edit_model->edit_apps($app_id, $app_hshare, $app_server, $app_path, $app_drive, $app_ds, $apps_num);
            $app_num = $app_num * 6111988;
            redirect('/itdata/admin/dc/'.$app_num.'#apps');
        }
        public function webmail($webmailid)
        {
           $this->load->model('edit_model');
           $w = $this->edit_model->update_webmail($webmailid);
           $data['wbm'] = $w;
           $this->load->view('header/header');
           $this->load->view('atbs/updatewebmail', $data);
           $this->load->view('footer/footer');
        }
        public function update_webmail()
        {
            $web_id = $this->input->post('webmail_id');    
            $web_path = $this->input->post('web_address');
            $web_un = $this->input->post('username');
            $web_pd = $this->input->post('pd');
            $web_note = $this->input->post('wbnote');
            $web_num = $this->input->post('webmail_num');
            $this->load->model('edit_model');
            $this->edit_model->edit_webmail($web_id, $web_path, $web_un, $web_pd, $web_note, $web_num);
            $web_num = $web_num * 6111988;
            redirect('/itdata/admin/dc/'.$web_num.'#webmail');
        }
        public function wifi($wifiid)
        {
           $this->load->model('edit_model');
           $wi = $this->edit_model->update_wifi($wifiid);
           $data['wfi'] = $wi;
           $this->load->view('header/header');
           $this->load->view('atbs/updatewifi', $data);
           $this->load->view('footer/footer');
        }
        public function update_wifi()
        {
            $wf_id = $this->input->post('wifi_id');    
            $wf_sd = $this->input->post('ssid');
            $wf_ipa = $this->input->post('wipa');
            $wf_un = $this->input->post('wun');
            $wf_pd = $this->input->post('pd');
            $wf_num = $this->input->post('wifi_num');
            $this->load->model('edit_model');
            $this->edit_model->edit_wifi($wf_id, $wf_sd, $wf_ipa, $wf_un, $wf_pd, $wf_num);
            $wf_num = $wf_num * 6111988;
            redirect('/itdata/admin/dc/'.$wf_num.'#wifi');
        }
        public function sslvpn($sslvpnid)
        {
           $this->load->model('edit_model');
           $sl = $this->edit_model->update_sslvpn($sslvpnid);
           $data['svn'] = $sl;
           $this->load->view('header/header');
           $this->load->view('atbs/updatesslvpn', $data);
           $this->load->view('footer/footer');
        }
        public function update_sslvpn()
        {
            $sp_id = $this->input->post('sslvpn_id');    
            $sp_url = $this->input->post('vpnaddress');
            $sp_eip = $this->input->post('ssl_eip');
            $sp_iip = $this->input->post('lanip');
            $sp_un = $this->input->post('ssl_username');
            $sp_pd = $this->input->post('ssl_password');
            $sp_num = $this->input->post('sslvpn_num');
            $this->load->model('edit_model');
            $this->edit_model->edit_sslvpn($sp_id, $sp_url, $sp_eip, $sp_iip, $sp_un, $sp_pd);
            $sp_num = $sp_num * 6111988;
            redirect('/itdata/admin/dc/'.$sp_num.'#sslvpn');
        }
        public function pisp($pispid)
        {
            $this->load->model('edit_model');
            $psp = $this->edit_model->update_pisp($pispid);
            $data['psps'] = $psp;
            $this->load->view('header/header');
            $this->load->view('atbs/updatepisp', $data);
            $this->load->view('footer/footer');
        }
        public function update_pisp()
        {
            $pisp_id = $this->input->post('pispid');
            $pisp_name = $this->input->post('pispname');
            $pisp_circ = $this->input->post('pispcirc');
            $pisp_adda = $this->input->post('pispaddrange');
            $pisp_conf = $this->input->post('pispconf');
            $pisp_nm = $this->input->post('pisp_num');
            $this->load->model('edit_model');
            $this->edit_model->edit_pisp($pisp_id, $pisp_num, $pisp_name, $pisp_circ, $pisp_adda, $pisp_conf);
            $pisp_nm = $pisp_nm * 6111988;
            redirect('/itdata/admin/dc/'.$pisp_nm.'#pisp');
        }
        public function bisp($bispid)
        {
            $this->load->model('edit_model');
            $bsp = $this->edit_model->update_bisp($bispid);
            $data['bsps'] = $bsp;
            $this->load->view('header/header');
            $this->load->view('atbs/updatebisp', $data);
            $this->load->view('footer/footer');
        }
        public function update_bisp()
        {
            $bisp_bid = $this->input->post('bisp_id');
            $bisp_name = $this->input->post('bispname');
            $bisp_circ = $this->input->post('bispcirc');
            $bisp_range = $this->input->post('bispaddrange');
            $bisp_nm = $this->input->post('bisp_num');
            $this->load->model('edit_model');
            $this->edit_model->edit_bisp($bisp_bid, $bisp_name, $bisp_circ, $bisp_range, $bisp_nm);
            $bisp_nm = $bisp_nm * 6111988;
            redirect('/itdata/admin/dc/'.$bisp_nm.'#bisp');
        }
        public function router($rtrid) 
        {
            $this->load->model('edit_model');
            $rt = $this->edit_model->update_router($rtrid);
            $data['rtrs'] = $rt;
            $this->load->view('header/header');
            $this->load->view('atbs/updaterouter', $data);
            $this->load->view('footer/footer');
        }
        public function update_router()
        {
            $rtr_rid = $this->input->post('rtr_id');
            $rtr_name = $this->input->post('rtrname');
            $rtr_ipa = $this->input->post('rtripa');
            $rtr_epa = $this->input->post('rtrepa');
            $rtr_dfg = $this->input->post('rtrdfg');
            $rtr_dns1 = $this->input->post('rtrdns1');
            $rtr_dns2 = $this->input->post('rtrdns2');
            $rtr_nm = $this->input->post('rtr_num');
            $this->load->model('edit_model');
            $this->edit_model->edit_router($rtr_rid, $rtr_name, $rtr_ipa, $rtr_epa, $rtr_dfg, $rtr_dns1, $rtr_dns2);
            $rtr_nm = $rtr_nm * 6111988;
            redirect('/itdata/admin/dc/'.$rtr_nm.'#rid');
        }
        public function firewall($fwid)
        {
            $this->load->model('edit_model');
            $fw = $this->edit_model->update_firewall($fwid);
            $data['fws'] = $fw;
            $this->load->view('header/header');
            $this->load->view('atbs/updatefirewall', $data);
            $this->load->view('footer/footer');
        }
        public function update_firewall()
        {
            $fw_fid = $this->input->post('fw_id');
            $fw_name = $this->input->post('fwname');
            $fw_ipa = $this->input->post('fwipa');
            $fw_epa = $this->input->post('fwepa');
            $fw_dfg = $this->input->post('fwdfg');
            $fw_un = $this->input->post('fwusername');
            $fw_pd = $this->input->post('fwpassword');
            $fw_nm = $this->input->post('fw_num');
            $this->load->model('edit_model');
            $this->edit_model->edit_firewall($fw_fid, $fw_name, $fw_ipa, $fw_epa, $fw_dfg, $fw_un, $fw_pd);
            $fw_nm = $fw_nm * 6111988;
            redirect('/itdata/admin/dc/'.$fw_nm.'#fwid');
        }
        public function switches($swid)
        {
            $this->load->model('edit_model');
            $sw = $this->edit_model->update_switches($swid);
            $data['sws'] = $sw;
            $this->load->view('header/header');
            $this->load->view('atbs/updateswitch', $data);
            $this->load->view('footer/footer');
        }
        public function update_switches()
        {
            $sw_sid = $this->input->post('sw_id');
            $sw_name = $this->input->post('swname');
            $sw_ipa = $this->input->post('swipa');
            $sw_un = $this->input->post('swun');
            $sw_pd = $this->input->post('swpassword');
            $sw_nm = $this->input->post('sw_num');
            $this->load->model('edit_model');
            $this->edit_model->edit_switches($sw_sid, $sw_name, $sw_ipa, $sw_un, $sw_pd);
            $sw_nm = $sw_nm * 6111988;
            redirect('/itdata/admin/dc/'.$sw_nm.'#swid');
        }
        public function sa($said)
        {
            $this->load->model('edit_model');
            $sa = $this->edit_model->update_sa($said);
            $data['sas'] = $sa;
            $this->load->view('header/header');
            $this->load->view('atbs/updatesvraccnt', $data);
            $this->load->view('footer/footer');
        }
        public function update_sa()
        {
            $sa_id = $this->input->post('sa_id');
            $sa_usn = $this->input->post('sa_un');
            $sa_pw = $this->input->post('sa_pw');
            $sa_nm = $this->input->post('sa_num');
            $this->load->model('edit_model');
            $this->edit_model->edit_sa($sa_id, $sa_usn, $sa_pw);
            $sa_nm = $sa_nm * 6111988;
            redirect('/itdata/admin/dc/'.$sa_nm.'#said');
        }
        public function av($avid)
        {
            $this->load->model('edit_model');
            $av = $this->edit_model->update_av($avid);
            $data['avs'] = $av;
            $this->load->model('dispdat_model');
            $anti_spam_apps = $this->dispdat_model->avspamapps();
            $data['avsps'] = $anti_spam_apps;
            $this->load->view('header/header');
            $this->load->view('atbs/updateantvspam', $data);
            $this->load->view('footer/footer');
        }
        public function update_av()
        {
            $av_avid = $this->input->post('av_id');
            $av_nm = $this->input->post('av_num');
            $av_name = $this->input->post('avspam_name');
            $av_hosted = $this->input->post('av_hosted');
            $av_other = $this->input->post('av_other');
            $av_usrn = $this->input->post('av_un');
            $av_passwd = $this->input->post('av_pw');
            $this->load->model('edit_model');
            $this->edit_model->edit_av($av_avid, $av_name, $av_hosted, $av_other, $av_usrn, $av_passwd);
            $av_nm = $av_nm * 6111988;
            redirect('/itdata/admin/dc/'.$av_nm.'#avid');
         }
        public function asp($aspid)
        {
            $this->load->model('edit_model');
            $asp = $this->edit_model->update_asp($aspid);
            $data['asps'] = $asp;           
            $this->load->view('header/header');
            $this->load->view('atbs/updateasp', $data);
            $this->load->view('footer/footer');
        }
        public function update_asp()
        {
            $asp_aspid = $this->input->post('asp_id');
            $asp_aspname = $this->input->post('asp_name');
            $asp_url = $this->input->post('asp_address');
            $asp_un = $this->input->post('asp_username');
            $asp_pd = $this->input->post('asp_pd');
            $asp_nm = $this->input->post('asp_num');
            $asp_aspnote = $this->input->post('asp_note');
            $this->load->model('edit_model');
            $this->edit_model->edit_asp($asp_aspid, $asp_aspname, $asp_url, $asp_un, $asp_pd, $asp_aspnote);
            $asp_nm = $asp_nm * 6111988;
            redirect('/itdata/admin/dc/'.$asp_nm.'#aspid');
        }
        public function ups($upsid)
        {
            $this->load->model('edit_model');
            $upsup = $this->edit_model->update_ups($upsid);
            $data['ups'] = $upsup;
            $this->load->view('header/header');
            $this->load->view('atbs/updateups', $data);
            $this->load->view('footer/footer');
        }
        public function update_ups()
        {
            $ups_upsid = $this->input->post('ups_id');
            $ups_nm = $this->input->post('ups_num');
            $ups_name = $this->input->post('ups_name');
            $ups_url = $this->input->post('ups_address');
            $ups_un = $this->input->post('ups_username');
            $ups_pw = $this->input->post('ups_pd');
            $this->load->model('edit_model');
            $this->edit_model->edit_ups($ups_upsid, $ups_name, $ups_url, $ups_un, $ups_pw);
            $ups_nm = $ups_nm * 6111988;
            redirect('/itdata/admin/dc/'.$ups_nm.'#upsid');
        }
        public function drac($dracid, $clientid)
        {
            $this->load->model('edit_model');
            $dracs = $this->edit_model->update_drac($dracid);
            $data['drcs'] = $dracs;
            $this->load->model('dispdat_model');
            $server = $this->dispdat_model->servers($clientid);
            $data['servers'] = $server;
            $this->load->view('header/header');
            $this->load->view('atbs/updatedrac', $data);
            $this->load->view('footer/footer'); 
        }
        public function update_drac()
        {
            $dracid = $this->input->post('drac_id');
            $drac_ip = $this->input->post('drac_address');
            $drac_server = $this->input->post('svname');
            $drac_un = $this->input->post('drac_un');
            $drac_pd = $this->input->post('drac_pw');
            $drac_nm = $this->input->post('drac_num');
            $this->load->model('edit_model');
            $this->edit_model->edit_drac($dracid, $drac_ip, $drac_server, $drac_un, $drac_pd);
            $drac_nm = $drac_nm * 6111988;
            redirect('/itdata/admin/dc/'.$drac_nm.'#dracid');
        }
        public function mlocs($mlocsid)
        {
           $this->load->model('edit_model');
           $ml = $this->edit_model->update_mlocs($mlocsid);
           $data['mloc'] = $ml;
           $this->load->view('header/header');
           $this->load->view('atbs/mlocs', $data);
           $this->load->view('footer/footer');
        }
        public function update_mlocs()
        {
          $comp_id = $this->input->post('mloc_id');
          $comp_address = $this->input->post('mloc_address');
          $comp_address2 = $this->input->post('mloc_address2');
          $comp_city = $this->input->post('mloc_city');
          $comp_state = $this->input->post('mloc_state');
          $comp_zip = $this->input->post('mloc_zip');
          $comp_tel = $this->input->post('mloc_tel');
          $comp_cfname = $this->input->post('mloc_cfname');
          $comp_clname = $this->input->post('mloc_clname');
          $comp_num = $this->input->post('mloc_num');
          $this->load->model('edit_model');
          $this->edit_model->edit_mlocs(
                  $comp_id,
                  $comp_num, 
                  $comp_address, 
                  $comp_address2, 
                  $comp_city, 
                  $comp_state, 
                  $comp_zip, 
                  $comp_tel, 
                  $comp_cfname, 
                  $comp_clname);
            $comp_num = $comp_num * 6111988;
            redirect('/itdata/admin/dc/'.$comp_num.'#mlocs');
        } 
}