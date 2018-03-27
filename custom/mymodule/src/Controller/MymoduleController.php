<?php

/**
 * @file
 * Contains \Drupal\mymodule\Controller\MymoduleController.
 */
namespace Drupal\mymodule\Controller;

use Drupal\Core\Controller\ControllerBase;
use \SoapClient;

/**
 * Controller.
 */
class MymoduleController extends ControllerBase {

  /**
   * Callback function to get the data from webservice
   */
  public function getResponse() {
	  $apiauth =array('UserName'=>'test','Password'=>'test');
		$service = new SoapClient("http://www.webservicex.com/globalweather.asmx?WSDL", $apiauth);
		$country = 'India';
		$result = $service->GetCitiesByCountry(array('CountryName'=>$country));
		$response = (array)$result;
		dpm($response);
		return $response;
	}
}









