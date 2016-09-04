<?php

/**
 * Created by PhpStorm.
 * User: deyelovi
 * Date: 16/08/2016
 * Time: 0:02
 */
class Report extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('ion_auth');
        $this->load->helper('download');
        $this->load->model('report_model');

        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login');
        }
    }

    public function index()
    {
        $data['title'] = 'Rekap Order';
        $data['sub_title'] = 'Filter Rekap';
        $content = "admin/laporan/form_rekap";
        $this->template_admin->output($data, $content);
    }

    public function rekap()
    {
        $data['tgl_awal'] = $this->input->post('tgl_awal');
        $data['tgl_akhir'] = $this->input->post('tgl_akhir');

        $query['tgl_awal'] = $data['tgl_awal'];
        $query['tgl_akhir'] = $data['tgl_akhir'];

        $query['data'] = $this->report_model->show_data_by_date_range($data);
        $this->load->view('admin/laporan/view_rekap',$query);
    }

    public function detail_rekap($id)
    {
        $data['title'] = 'Order';
        $data['sub_title'] = 'Tabel Order';
        $data['kota']=$this->base_model->get('regencies');
        $table = 'm_order';
        $condition['id'] = $id;
        $data['order'] = $this->base_model->getData($table,$condition);

        $content = "admin/laporan/detail_rekap";
        $this->load->view($content,$data);
    }

    public function excel()
    {
        $this->load->library('excel/Biffwriter');
        $this->load->library('excel/Format');
        $this->load->library('excel/OLEwriter');
        $this->load->library('excel/Parser');
        $this->load->library('excel/Workbook');
        $this->load->library('excel/Worksheet');

        $data['tgl_awal'] = $this->input->post('tgl_awal');
        $data['tgl_akhir'] = $this->input->post('tgl_akhir');

        $query['tgl_awal'] = $data['tgl_awal'];
        $query['tgl_akhir'] = $data['tgl_akhir'];

        $query['data'] = $this->report_model->show_data_by_date_range($data);

        $this->load->view('admin/laporan/export_excel',$query);
    }
}