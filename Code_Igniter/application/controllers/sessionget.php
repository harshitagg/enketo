<?php

/**
 * Copyright 2012 Martijn van de Rijdt
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

class Sessionget extends CI_Controller {

	//load with enketo.formhub.org/sessionget?PHPSESSID=abcef
	public function index()
	{
		$session = $_GET['PHPSESSID'];

		session_start();
		echo 'session value of session id '.$session.' is: '.$_SESSION[$session];

		//print_r ($_SESSION);
	}

 	public function library()
 	{
 		$this->load->library('session');

 		//print_r($this->session->all_userdata());
 		echo 'session retrieved with key "abcde": '.$this->session->userdata('abcde');
 		$this->session->unset_userdata('abcde');
 		echo "<br/>Session data now removed.";
 	}

}	
?>

