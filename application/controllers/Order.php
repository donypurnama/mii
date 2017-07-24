<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

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

  public function orders () {
    $menu = [
      "parent" => "order",
      "child" => "orders"
    ];

    $this->settings["header"] = $this->load->view("header/header", null, true);
    $this->settings["aside"] = $this->load->view("sidebar/aside", [
      "menu" => $menu
    ], true);
    $this->settings["main"] = $this->load->view("main/orderlist", null, true);
    $this->settings["footer"] = $this->load->view("footer/footer", null, true);

    $this->template->page($this->settings);
  }

  public function create () {
    $menu = [
      "parent" => "order",
      "child" => "create"
    ];

    $this->settings["header"] = $this->load->view("header/header", null, true);
    $this->settings["aside"] = $this->load->view("sidebar/aside", [
      "menu" => $menu
    ], true);
    $this->settings["main"] = $this->load->view("main/createOrderForm", null, true);
    $this->settings["modal"] = $this->load->view("modal/modal_checkpoint", null, true);
    $this->settings["footer"] = $this->load->view("footer/footer", null, true);

    $this->template->page($this->settings);
  }

  public function detail () {
    $menu = [
      "parent" => "order",
      "child" => "orders"
    ];

    $this->settings["header"] = $this->load->view("header/header", null, true);
    $this->settings["aside"] = $this->load->view("sidebar/aside", [
      "menu" => $menu
    ], true);
    $this->settings["main"] = $this->load->view("main/detailOrderForm", null, true);
    $this->settings["footer"] = $this->load->view("footer/footer", null, true);

    $this->template->page($this->settings);
  }

  public function additem () {
    $menu = [
      "parent" => "order",
      "child" => "orders"
    ];

    $this->settings["header"] = $this->load->view("header/header", null, true);
    $this->settings["aside"] = $this->load->view("sidebar/aside", [
      "menu" => $menu
    ], true);
    $this->settings["main"] = $this->load->view("main/additemForm", null, true);
    $this->settings["footer"] = $this->load->view("footer/footer", null, true);

    $this->template->page($this->settings);
  }




}
