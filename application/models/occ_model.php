<?php

/**
 * Created by PhpStorm.
 * User: zhangzhaoying
 * Date: 25/08/2016
 * Time: 2:36 PM
 */
class occ_model extends CI_Model
{
    public function selectIndustry() {
        $sql='SELECT DISTINCT occupation FROM number_of_injury_by_occupation';
        $query=$this->db->query($sql, array());
        return $query->result_array();
    }

    public function selectInjury() {
        $sql='SELECT DISTINCT injury_Name FROM injury';
        $query=$this->db->query($sql, array());
        return $query->result_array();
    }


    // dispaly all job
    public function selectJob() {
        $sql='SELECT DISTINCT job_name FROM job';
        $query=$this->db->query($sql, array());
        return $query->result_array();
    }



    public function selectIndustryInIndustryTable() {
        $sql='SELECT DISTINCT industry_name FROM industry';
        $query=$this->db->query($sql, array());
        return $query->result_array();
    }

    public function selectJobbyindustry($industry) {
        $sql='SELECT job_name from job where industry_ID = (SELECT industry_ID FROM industry WHERE industry_name = ?)';
        $query=$this->db->query($sql, array($industry));
        return $query->result_array();
    }

    public function selectAccident($job) {
        $sql='SELECT DISTINCT accident_name FROM accident where job_ID = (SELECT job_ID from job where job_name = ?) ';
        $query=$this->db->query($sql, array($job));
        return $query->result_array();
    }


    public function selectData($occupation) {
        $sql='SELECT DISTINCT num_claims FROM number_of_injury_by_occupation where occupation = ? ';
        $query=$this->db->query($sql, array($occupation));
        return $query->result_array();
    }

}