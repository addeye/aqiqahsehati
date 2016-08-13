<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: deyelovi
 * Date: 03/08/2016
 * Time: 8:37
 */
class Base_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get($table)
    {
        $this->db->select("*");
        $this->db->from($table);

        return $this->db->get();
    }

    function getData($table, $condition)
    {
        $this->db->where($condition);
        $this->db->select("*");
        $this->db->from($table);

        return $this->db->get();
    }

    function addData($table,$data)
    {
        $this->db->insert($table, $data);
    }

    function updateData($table, $data, $condition)
    {
        $this->db->where($condition);
        $this->db->update($table, $data);
    }

    function deleteData($table, $condition)
    {
        $this->db->where($condition);
        $this->db->delete($table);
    }

    function getItemData()
    {
        $this->db->select('m_item.*,m_jenis.jenis as nama_jenis');
        $this->db->from('m_item');
        $this->db->join('m_jenis', 'm_jenis.id_jenis = m_item.jenis');
        $query = $this->db->get();
        return $query;
    }
}