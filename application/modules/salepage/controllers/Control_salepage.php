<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Control_salepage extends MX_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct() {
		parent::__construct();
		$this->load->database();

		$this->load->library(
            'template',
			array(
                'name'      => 'admin_template1',
				'setting'   => array('data_output' => '')
            )
		);

        $this->load->helper(
            array()
        );
        $this->load->libraries(
            array()
        );
        $this->load->model(
            array(
                'permission_model',
                'statistic_view_model',
                'delete_action_model',
                'product_type_model',
                'crud_level_model',
            )
        );

        $this->permission_model->getOnceWebMain();
        $this->statistic_view_model->getBackLogMain();
        $this->product_type_model->productTypeDailyUpdate();
	}

	public function index() {
		redirect('salepage/control_salepage/salepage_management', 'refresh');
	}

	public function salepage_management() {
        $this->crud_level_model->crudStateEnabled(/*add*/true,/*view*/false,/*edit*/true,/*del*/true,/*export*/true,/*print*/true);
        $this->delete_action_model->del_action('selepage', 'user_update', 'datetime_update', 'allow', 'id');

        $title = 'Salepage';
        $crud = new grocery_CRUD();
        $crud->set_language('thai');
        $crud->set_subject($title);
        $crud->set_table('salepage');
        $crud->where("salepage.allow != ", "3");
        //$crud->order_by("B_Order", "asc");

        $crud->display_as('id',               'ไอดี');
        $crud->display_as('name_th',             'หัวข้อภาษาไทย');
        $crud->display_as('text_th',             'ข้อมูลภาษาไทย');
        $crud->display_as('name_en',             'หัวข้อภาษาอังกฤษ');
        $crud->display_as('text_en',             'ข้อมูลภาษาอังกฤษ');
        $crud->display_as('user_add',          'ผู้เพิ่ม');
        $crud->display_as('datetime_add',      'วันเวลาที่เพิ่ม');
        $crud->display_as('user_update',       'ผู้อัพเดท');
        $crud->display_as('datetime_update',   'วันเวลาที่อัปเดท');
        $crud->display_as('allow',            'สถานะ');

        $crud->required_fields('name_th', 'name_en', 'allow');

        $crud->columns('id','name_th', 'name_en', 'allow');

        $crud->add_fields('name_th', 'text_th', 'name_en','text_en', 'user_add', 'datetime_add', 'user_update', 'datetime_update', 'allow');
        $crud->edit_fields('name_th', 'text_th', 'name_en', 'text_en', 'user_update','datetime_update', 'allow');

        $crud->field_type('allow', 'dropdown', array('1' => 'ปกติ', '2' => 'ระงับ', '3' => 'ลบ / บล็อค'));

        if ($crud->getState() == 'add') {
            $crud->field_type('allow',            'hidden', '1');
            $crud->field_type('user_add',          'hidden', get_session('M_ID'));
            $crud->field_type('datetime_add',      'hidden', date("Y-m-d H:i:s"));
            $crud->field_type('user_update',       'hidden', get_session('M_ID'));
            $crud->field_type('datetime_update',   'hidden', date("Y-m-d H:i:s"));
        }
        if ($crud->getState() == 'edit') {
            $crud->field_type('user_update',       'hidden', get_session('M_ID'));
            $crud->field_type('datetime_update',   'hidden', date("Y-m-d H:i:s"));
        }

        $crud->add_action('ลบ '.$title, base_url('assets/admin/images/tools/delete-icon.png'), 'selepage/control_selepage/salepage_management/del', 'del-row');

        // $crud->unset_add();
        // $crud->unset_back_to_list();
        $crud->unset_delete();
        // $crud->unset_edit();
        // $crud->unset_export();
        // $crud->unset_list();
        // $crud->unset_print();
        $crud->unset_read();
        // $crud->unset_texteditor(array());

        $output = $crud->render();
        $this->_example_output($output, $title);
    }

    public function _example_output($output = null, $title = null) {
        $data = array(
            'content_view'  => $output,
            'title'         => $title
        );
        $this->template->load('index_page', $data);
    }

}
