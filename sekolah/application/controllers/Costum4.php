<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Costum4 extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Costum4_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'costum4/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'costum4/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'costum4/index.html';
            $config['first_url'] = base_url() . 'costum4/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Costum4_model->total_rows($q);
        $costum4 = $this->Costum4_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'costum4_data' => $costum4,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('costum4/costum4_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Costum4_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'status' => $row->status,
		'angka' => $row->angka,
		'text' => $row->text,
		'text2' => $row->text2,
	    );
            $this->load->view('costum4/costum4_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('costum4'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('costum4/create_action'),
	    'id' => set_value('id'),
	    'status' => set_value('status'),
	    'angka' => set_value('angka'),
	    'text' => set_value('text'),
	    'text2' => set_value('text2'),
	);
        $this->load->view('costum4/costum4_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'status' => $this->input->post('status',TRUE),
		'angka' => $this->input->post('angka',TRUE),
		'text' => $this->input->post('text',TRUE),
		'text2' => $this->input->post('text2',TRUE),
	    );

            $this->Costum4_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('costum4'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Costum4_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('costum4/update_action'),
		'id' => set_value('id', $row->id),
		'status' => set_value('status', $row->status),
		'angka' => set_value('angka', $row->angka),
		'text' => set_value('text', $row->text),
		'text2' => set_value('text2', $row->text2),
	    );
            $this->load->view('costum4/costum4_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('costum4'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'status' => $this->input->post('status',TRUE),
		'angka' => $this->input->post('angka',TRUE),
		'text' => $this->input->post('text',TRUE),
		'text2' => $this->input->post('text2',TRUE),
	    );

            $this->Costum4_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('costum4'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Costum4_model->get_by_id($id);

        if ($row) {
            $this->Costum4_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('costum4'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('costum4'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('status', 'status', 'trim|required');
	$this->form_validation->set_rules('angka', 'angka', 'trim|required');
	$this->form_validation->set_rules('text', 'text', 'trim|required');
	$this->form_validation->set_rules('text2', 'text2', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Costum4.php */
/* Location: ./application/controllers/Costum4.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-08-11 11:13:03 */
/* http://harviacode.com */