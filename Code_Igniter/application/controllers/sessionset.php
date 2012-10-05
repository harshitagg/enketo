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


class Sessionset extends CI_Controller {

	public function index()
	{
		

		session_start();

		$_SESSION['abcef'] = 'hello there!';

		print_r($_SESSION);
		//echo 'set session with key abcd: '.$_SESSION['abcd'];
		
		//php.ini requirements:
		//* session.use_only_cookies: 0
		//* session.use_cookies: 0
		//* session.use_trans_sid: 1
	}

	public function library()
	{
		$key = 'abcde';
		$data = 'This is an instance.';

		$this->load->library('session');
		$this->session->set_userdata($key, $data);

		echo 'session data "'.$data.'" stored with key: '.$key;
	}

}	
?>

