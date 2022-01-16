<?php
	class Permission_model extends CI_Model {

        function __construct() {
            parent::__construct();
        }

        public function getOnceWebMain() {
            print_r($this->session->all_userdata());
    		if ($this->session->userdata('M_ID') == '') {
                die('MID null');
    			//redirect('control/login', 'refresh');
            }else {
                $row = $this->common_model->get_where_custom('admin', 'M_Username', $this->db->escape_str($this->session->userdata('M_Username')));
                if (count($row) <= 0) {
                    die('row null');
    			//	redirect('control/login', 'refresh');
                }else {
                    //                  Root,           Accountant,     Stock,          Messenger
                     $product    = array('1' => '1',     '2' => '0',     '3' => '1',     '4' => '0');
                     $cart       = array('1' => '1',     '2' => '1',     '3' => '0',     '4' => '1');
                     $bank       = array('1' => '1',     '2' => '0',     '3' => '0',     '4' => '0');
                     $member     = array('1' => '1',     '2' => '0',     '3' => '0',     '4' => '0');
                     $statistic  = array('1' => '1',     '2' => '1',     '3' => '0',     '4' => '0');
                     $webconfig  = array('1' => '1',     '2' => '0',     '3' => '0',     '4' => '0');
                    /*
                    $product    = array('1' => '0',     '2' => '1',     '3' => '1',     '4' => '0');
                    $cart       = array('1' => '0',     '2' => '0',     '3' => '0',     '4' => '1');
                    $bank       = array('1' => '0',     '2' => '1',     '3' => '0',     '4' => '0');
                    $member     = array('1' => '0',     '2' => '1',     '3' => '0',     '4' => '0');
                    $statistic  = array('1' => '0',     '2' => '0',     '3' => '0',     '4' => '1');
                    $webconfig  = array('1' => '0',     '2' => '0',     '3' => '0',     '4' => '0');
                    */
                    //                  Root,           Accountant,     Stock,          Messenger
                    if (uri_seg(2)      == 'control_product')    {
                        die('..1');
                        if ($product[$this->session->userdata('M_Type')]   == '1')
                            redirect('control', 'refresh');
                    }
                    else if (uri_seg(2) == 'control_cart')       {
                        die('..2');
                        if ($cart[$this->session->userdata('M_Type')]      == '1')
                            redirect('control', 'refresh');
                        /**/
                        else {
                            if (uri_seg(3) == 'order_management') {
                                if ($this->session->userdata('M_Type') == '3')
                                    redirect('control', 'refresh');
                            }
                        }
                        /**/
                    }
                    else if (uri_seg(2) == 'control_bank')       {
                        die('..3');
                        if ($bank[$this->session->userdata('M_Type')]      == '1')
                            redirect('control', 'refresh');
                    }
                    else if (uri_seg(2) == 'control_member')     {
                        die('..4');
                        if ($member[$this->session->userdata('M_Type')]    == '1')
                            redirect('control', 'refresh');
                    }
                    else if (uri_seg(2) == 'control_statistic')  {
                        die('..5');
                        if ($statistic[$this->session->userdata('M_Type')] == '1')
                            redirect('control', 'refresh');
                    }
                    else if (uri_seg(1) == 'webconfig')          {
                        die('..6');
                        if ($webconfig[$this->session->userdata('M_Type')] == '1')
                            redirect('control', 'refresh');
                    }
                }
            }
        }

        public function getMemberLevel() {
            if ($this->session->userdata('C_ID') == '') {
                if (uri_seg(1) !== 'member') echo "<script>alert('!!! กรุณาเข้าสู่ระบบ');</script>";
                redirect('main', 'refresh');
            }
            else {
                $row = $this->common_model->get_where_custom('member', 'M_Username', $this->db->escape_str($this->session->userdata('C_Username')));
                if (count($row) <= 0)
                    redirect('main', 'refresh');
            }
        }

    }
?>