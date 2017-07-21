<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public $settings;

    function __construct () {
        parent::__construct();
        $this->load->model("standard_model");
        $this->settings["title"] = "Mats Express";
    }

    public function index () {
      $menu = [
        "parent" => "shipment",
        "child" => ""
      ];

      $this->settings["header"] = $this->load->view("header/header", null, true);
      $this->settings["aside"] = $this->load->view("sidebar/aside", [
        "menu" => $menu
      ], true);
      $this->settings["main"] = $this->load->view("main/main", null, true);
      $this->settings["footer"] = $this->load->view("footer/footer", null, true);

      $this->template->page($this->settings);
	}

  public function detail () {
    $menu = [
      "parent" => "shipment",
      "child" => ""
    ];

    $this->settings["header"] = $this->load->view("header/header", null, true);
    $this->settings["aside"] = $this->load->view("sidebar/aside", [
      "menu" => $menu
    ], true);
    $this->settings["main"] = $this->load->view("main/detail", null, true);
    $this->settings["footer"] = $this->load->view("footer/footer", null, true);

    $this->template->page($this->settings);
}
}
