<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Map extends CI_Controller {
function __construct()
{
parent::__construct();
}
	function index()
	{
	//basic default controls/properties
	$this->load->library('googlemaps');
	$config['zoom'] = "auto";
	$this->googlemaps->initialize($config);
	$data = array();
	$data['map'] = $this->googlemaps->create_map();
	$this->load->view('map_view', $data);
	}
	function show($place='Bopodi, Pune')
	{
	$this->load->library('googlemaps');
	$config['zoom'] = "auto";
	$this->googlemaps->initialize($config);
	$marker = array();
	$marker['position'] ="$place";
	$marker['animation']='BOUNCE';
	$this->googlemaps->add_marker($marker);
	$data = array();
	$data['map'] = $this->googlemaps->create_map();
	$this->load->view('map_view', $data);
	}
}