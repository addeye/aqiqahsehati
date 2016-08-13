<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: deyelovi
 * Date: 13/08/2016
 * Time: 20:11
 */
if ( ! function_exists('nama_user'))
{
    function nama_user()
    {
        $first_name = $this->ion_auth->user()->row()->first_name;
        $last_name = $this->ion_auth->user()->row()->last_name;

        return $first_name.' '.$last_name;
    }
}

if ( ! function_exists('id_user'))
{
    function id_user()
    {
        return $this->ion_auth->user()->row()->id;
    }
}