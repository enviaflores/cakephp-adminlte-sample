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
App::uses('AdminLTEController', 'AdminLTE.Controller');
/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends AdminLTEController
{
    public function beforeFilter(){
        FB::info($this->request, __METHOD__);
    }

    public function beforeRender()
    {
        parent::beforeRender();

        /**
         * AdminLTE SideBarMenu
         */
        $left_main_menu = array(
            'header' => array(
                'label' => 'Menu'
            ),
            'treeview' => array(
                array(
                    'label' => __('Sidebar'),
                    'icon' => 'fa-circle-o',
                    'a-href' => '/example/sidebar_struct'
                ),
                array(
                    'label' => __('Map'),
                    'icon' => 'fa-map-o',
                    'a-href' => Router::url(['controller' => 'Example', 'action' => 'showMap'])
                )
            )
        );
        Configure::Write('AdminLTELeftSideMainMenu', $left_main_menu);
    }
}
