<?php

/**
 * Created by PhpStorm.
 * User: deyelovi
 * Date: 16/08/2016
 * Time: 10:23
 */
class Report_model extends Base_model
{
    function __construct()
    {
        parent::__construct();
    }

    public function show_data_by_date_range($data)
    {
        $condition = "m_order.created_at BETWEEN " . "'" . $data['tgl_awal'] . "'" . " AND " . "'" . $data['tgl_akhir'] . "'";

        $this->db->select(
            'm_order.*,
            regencies.name as nama_kota,
            districts.name as nama_kecamatan,
            villages.name as nama_kelurahan
            '
        );
        $this->db->from('m_order');
        $this->db->join('regencies', 'regencies.id = m_order.kota');
        $this->db->join('districts', 'districts.id = m_order.kecamatan');
        $this->db->join('villages', 'villages.id = m_order.kelurahan');
        $this->db->order_by('m_order.id', 'DESC');
        $this->db->where($condition);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }
    }

    public function show_data_by_id($id)
    {
        $condition['id'] = $id;
        $query = $this->getData('m_order',$condition);
        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }
    }

    public function show_data_by_date($date)
    {
        $condition['created_at'] = $date;
        $query = $this->getData('m_order',$condition);
        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }
    }
}