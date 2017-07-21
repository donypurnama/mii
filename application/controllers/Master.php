<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

    public $settings;

    function __construct () {
        parent::__construct();
        $this->load->model("standard_model");
        $this->settings["title"] = "Mats Express";
    }

    public function checkpoint() {
      $menu = [
        "parent" => "masterdata",
        "child" => "checkpoint"
      ];
      $this->settings["header"] = $this->load->view("header/header", null, true);
      $this->settings["aside"] = $this->load->view("sidebar/aside", [
        "menu" => $menu
      ], true);
      $this->settings["main"] = $this->load->view("main/checkpoint", null, true);
      $this->settings["footer"] = $this->load->view("footer/footer", null, true);

      $this->template->page($this->settings);
    }

    public function addCheckpoint() {
      $menu = [
        "parent" => "masterdata",
        "child" => "checkpoint"
      ];
      $this->settings["header"] = $this->load->view("header/header", null, true);
      $this->settings["aside"] = $this->load->view("sidebar/aside", [
        "menu" => $menu
      ], true);
      $this->settings["main"] = $this->load->view("main/checkpointForm", null, true);
      $this->settings["footer"] = $this->load->view("footer/footer", null, true);

      $this->template->page($this->settings);
    }

    public function subCheckpoint($checkpoint = null) {
      $menu = [
        "parent" => "masterdata",
        "child" => "checkpoint"
      ];

      $this->settings["header"] = $this->load->view("header/header", null, true);
      $this->settings["aside"] = $this->load->view("sidebar/aside", [
        "menu" => $menu
      ], true);
      $this->settings["main"] = $this->load->view("main/subcheckpoint", null, true);
      $this->settings["footer"] = $this->load->view("footer/footer", null, true);

      $this->template->page($this->settings);
    }

    public function addSubCheckpoint() {
      $menu = [
        "parent" => "masterdata",
        "child" => "checkpoint"
      ];
      $this->settings["header"] = $this->load->view("header/header", null, true);
      $this->settings["aside"] = $this->load->view("sidebar/aside", [
        "menu" => $menu
      ], true);
      $this->settings["main"] = $this->load->view("main/subcheckpointForm", null, true);
      $this->settings["footer"] = $this->load->view("footer/footer", null, true);

      $this->template->page($this->settings);
    }

    public function taskList($subcheckpoint = null) {
      $menu = [
        "parent" => "masterdata",
        "child" => "checkpoint"
      ];

      $this->settings["header"] = $this->load->view("header/header", null, true);
      $this->settings["aside"] = $this->load->view("sidebar/aside", [
        "menu" => $menu
      ], true);
      $this->settings["main"] = $this->load->view("main/tasklist", null, true);
      $this->settings["footer"] = $this->load->view("footer/footer", null, true);

      $this->template->page($this->settings);
    }

    public function addTasklist() {
      $menu = [
        "parent" => "masterdata",
        "child" => "checkpoint"
      ];
      $this->settings["header"] = $this->load->view("header/header", null, true);
      $this->settings["aside"] = $this->load->view("sidebar/aside", [
        "menu" => $menu
      ], true);
      $this->settings["main"] = $this->load->view("main/tasklistForm", null, true);
      $this->settings["footer"] = $this->load->view("footer/footer", null, true);

      $this->template->page($this->settings);
    }

    public function serviceGroup() {
      $menu = [
        "parent" => "masterdata",
        "child" => "servicegroup"
      ];

      $this->settings["header"] = $this->load->view("header/header", null, true);
      $this->settings["aside"] = $this->load->view("sidebar/aside", [
        "menu" => $menu
      ], true);
      $this->settings["main"] = $this->load->view("main/servicegroup", null, true);
      $this->settings["modal"] = $this->load->view("modal/modal_checkpoint", null, true);
      $this->settings["footer"] = $this->load->view("footer/footer", null, true);

      $this->template->page($this->settings);
    }

    public function addServiceGroup() {
      $menu = [
        "parent" => "masterdata",
        "child" => "servicegroup"
      ];

      $this->settings["header"] = $this->load->view("header/header", null, true);
      $this->settings["aside"] = $this->load->view("sidebar/aside", [
        "menu" => $menu
      ], true);
      $this->settings["main"] = $this->load->view("main/servicegroupform", null, true);
      $this->settings["footer"] = $this->load->view("footer/footer", null, true);

      $this->template->page($this->settings);
    }

    public function assignServiceGroup() {
      $menu = [
        "parent" => "masterdata",
        "child" => "servicegroup"
      ];

      $this->settings["header"] = $this->load->view("header/header", null, true);
      $this->settings["aside"] = $this->load->view("sidebar/aside", [
        "menu" => $menu
      ], true);
      $this->settings["modal"] = $this->load->view("modal/modal_checkpoint", null, true);
      $this->settings["main"] = $this->load->view("main/servicegroupformassign", null, true);
      $this->settings["footer"] = $this->load->view("footer/footer", null, true);

      $this->template->page($this->settings);
    }
}
