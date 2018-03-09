<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    public function beforeFilter(){
        $this->set('isLoggedIn', $this->is_logged_in());

        if (isset($this->params['prefix']) && $this->params['prefix'] == 'admin') {
            $this->layout = 'admin';
        }
		
		$offset = '+8:00';// set timezone to +08:00
		// Calculate seconds from offset
		list($hours, $minutes) = explode(':', $offset);
		$seconds = $hours * 60 * 60 + $minutes * 60;
		// Get timezone name from seconds
		$tz = timezone_name_from_abbr('', $seconds, 1);
		// Workaround for bug #44780
		if($tz === false) $tz = timezone_name_from_abbr('', $seconds, 0);
		// Set timezone
		date_default_timezone_set($tz);
    }

    public function is_logged_in(){
        // simple checking for now
        $currentUser = $this->Session->read('User');
        if ($currentUser == '' || $currentUser == null) {
            return false;
        } else {
            return true;
        }
    }

    public function check_authorization(){
        // simple checking for now
        $currentUser = $this->Session->read('User');
        if ($currentUser == '' || $currentUser == null) {
            $this->Session->setFlash('You are not authorized to view this page.');
            $this->redirect(array('controllers' => 'Users', 'action' => 'login','admin'=>FALSE));
            return false;
        } else {
            return true;
        }
    }

}
