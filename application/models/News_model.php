<?php

/**
 * Created by PhpStorm.
 * User: deyelovi
 * Date: 11/08/2016
 * Time: 17:08
 */
class News_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {
        $this->db->select('m_posting.*,users.first_name, users.last_name, m_kategori.kategori');
        $this->db->from('m_posting');
        $this->db->join('users', 'users.id = m_posting.id_pengguna');
        $this->db->join('m_kategori', 'm_kategori.id = m_posting.kategori');
        $this->db->where('m_posting.tipe','post');
        $this->db->order_by('m_posting.id_posting', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    public function getData($num, $offset)
    {
        $this->db->select('m_posting.*,users.first_name, users.last_name, m_kategori.kategori');
        $this->db->from('m_posting');
        $this->db->join('users', 'users.id = m_posting.id_pengguna');
        $this->db->join('m_kategori', 'm_kategori.id = m_posting.kategori');
        $this->db->where('m_posting.tipe','post');
        $this->db->limit($num, $offset);
        $this->db->order_by('m_posting.id_posting', 'DESC');
        $query = $this->db->get();
        return $query;
    }
    public function getLimit($num=5)
    {
        $this->db->select('m_posting.*,users.first_name, users.last_name, m_kategori.kategori');
        $this->db->from('m_posting');
        $this->db->join('users', 'users.id = m_posting.id_pengguna');
        $this->db->join('m_kategori', 'm_kategori.id = m_posting.kategori');
        $this->db->where('m_posting.tipe','post');
        $this->db->order_by('m_posting.id_posting', 'DESC');
        $this->db->limit($num);
        $query = $this->db->get();
        return $query;
    }

    public function getSlug($string)
    {
        $this->db->select('m_posting.*,users.first_name, users.last_name, m_kategori.kategori');
        $this->db->from('m_posting');
        $this->db->join('users', 'users.id = m_posting.id_pengguna');
        $this->db->join('m_kategori', 'm_kategori.id = m_posting.kategori');
        $this->db->where('m_posting.tipe','post');
        $this->db->where('m_posting.slug',$string);
        $this->db->order_by('m_posting.id_posting', 'DESC');
        $query = $this->db->get();
        return $query;
    }
}