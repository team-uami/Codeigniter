<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Controlador_AdminE extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('controlador_AdminE_model');
        $this->load->helper('url');
    }

    function index() {
        $this->load->view('header_administrador');
        $idCuestionario = $_GET['id']; // id cuestionario viene url

        $data['preguntas'] = $this->controlador_AdminE_model->recuperaPreguntasNoAsignado($idCuestionario);

        $data['pregsCuesionario'] = $this->controlador_AdminE_model->recuperaPreguntasAsignadas($idCuestionario);

       

        if ($this->input->post('aderecha')) {
            $valorDerecha = $this->input->post('aderecha');

            if ($this->controlador_AdminE_model->agregarPreguntaCuestionario($valorDerecha, $idCuestionario)) {
                $idCuestionario = $_GET['id']; // id cuestionario viene url

                $data['preguntas'] = $this->controlador_AdminE_model->recuperaPreguntasNoAsignado($idCuestionario);

                $data['pregsCuesionario'] = $this->controlador_AdminE_model->recuperaPreguntasAsignadas($idCuestionario);
                   header("refresh: ");
            }else{
                echo "valio madres";
            }
        } else {
            $postdata = $this->input->post('aizquierda');

          if($this->controlador_AdminE_model->quitardeC($postdata, $idCuestionario)){
               $idCuestionario = $_GET['id']; // id cuestionario viene url

                $data['preguntas'] = $this->controlador_AdminE_model->recuperaPreguntasNoAsignado($idCuestionario);

                $data['pregsCuesionario'] = $this->controlador_AdminE_model->recuperaPreguntasAsignadas($idCuestionario);
              
          }

          header("refresh: ");
        }
        $this->load->view('agregar_acuestio', $data);
        //header("refresh: ");
        header("refresh: ");
    }

    function dummy() {
        $this->load->model('controlador_AdminE_model');
        $this->load->view('soloboton');
    }

    function agregarPaC() {
        /* $idCuestionario = $_GET['id']; // id cuestionario viene url



          $data1['preguntas'] = $this->controlador_AdminE_model->recuperaPreguntasNoAsignado($idCuestionario);

          $data1['pregsCuesionario'] = $this->controlador_AdminE_model->recuperaPreguntasAsignadas($idCuestionario); */

        //echo $this->input->post('aderecha');
        //echo $this->input->post('aizquierda');

        /* if ($this->input->post('aderecha')) {

          $postdata = $this->input->post('aderecha');

          $this->controlador_AdminE_model->agregarC($postdata, $id);
          header("refresh: ");
          }
          if ($this->input->post('aizquierda')) {

          $postdata = $this->input->post('aizquierda');

          $this->controlador_AdminE_model->quitardeC($postdata, $id);

          header("refresh: ");
          } */
    }

}
