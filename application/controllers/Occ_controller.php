<?php

/**
 * Created by PhpStorm.
 * User: zhangzhaoying
 * Date: 25/08/2016
 * Time: 11:12 AM
 */
class Occ_controller extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('occ_model');
        //$this->load->model('Welcome');
    }

    function selectIndustry() {
        $result=$this->occ_model->selectIndustry();
        $data = json_encode($result);
        echo $data;
    }

    function selectSubIndustry() {
        $industry = $this->input->post("industry");
        $result=$this->occ_model->selectSubIndustry($industry);
        $data = json_encode($result);
        echo $data;
    }

    function selectOccupation() {
        $sub_industry = $this->input->post("sub_industry");
        $result=$this->occ_model->selectOccupation($sub_industry);
        $data = json_encode($result);
        echo $data;
    }
//* display all job
    function selectJob() {
        $result=$this->occ_model->selectJob();
        $data = json_encode($result);
        echo $data;
    }
//*jump to prevent injury details page
    function selectJobDetail()
    {
        $data['job'] = $this->input->post("industry");
        $b = substr($data['job'], 0,-1);

        switch ($b) {
            case "Cleaner": $this->load->view("cleaner",$data);
                break;
            case "Kitchen Hand": $this->load->view("kitchhand",$data);
                break;
            case "Convenience Store Worker": $this->load->view("worker",$data);
                break;
            case "Waiter": $this->load->view("prdetails",$data);
                break;
        }
    }

    function selectInjuryDetail()
    {
        $data['job'] = $this->input->post("industry");
        $b = substr($data['job'], 0,-1);

        switch ($b) {
            case "wound": $this->load->view("wound",$data);
                break;
            case "burn": $this->load->view("burn",$data);
                break;
            case "tumble": $this->load->view("tumble",$data);
                break;
            case "recovery": $this->load->view("recovery",$data);
                break;

        }
    }

    function searchData() {
        $data['job'] = $this->input->post("industry");
        $this->load->view("statistics",$data);
    }

    function selectData() {
        $occupation = $this->input->post("industry");
        $result=$this->occ_model->selectIndustry();
        $data = json_encode($result);
        echo $data;

    }

    //* display all job
    function selectStatistic() {
        $result=$this->occ_model->selectIndustry();
        $data = json_encode($result);
        echo $data;
    }


    function selectIndustryInIndustryTable() {
        //$job = $this->input->post("job");
        $result=$this->occ_model->selectIndustryInIndustryTable();
        $data = json_encode($result);
        echo $data;
    }

    function selectJobbyindustry() {
        //$job = $this->input->post("job");
        $industry = $this->input->post("industry");
        echo $industry;

        //$result=$this->occ_model->selectJobbyindustry($industry);
        //$data = json_encode($result);
        //echo $data;
    }

    //* display all job
    function selectInjury() {
        $result=$this->occ_model->selectInjury();
        $data = json_encode($result);
        echo $data;
    }
/*
    function selectAccident() {
        $job = $this->input->post("job");
        $result=$this->occ_model->selectAccident($job);
        $data = json_encode($result);
        echo $data;
        //print_r($result);
    }*/

}
