<?php
App::uses('AdminLTEController', 'AdminLTE.Controller');

class ExampleController extends AdminLTEController
{

    public function login()
    {
        $this->setLayoutHeader('AdminLTE 2 | Log in');
        $this->setLayoutOptions(self::LOGIN_LAYOUT);
    }

    public function select()
    {
        $this->setLayoutHeader('AdminLTE 2 | Two Side Select');
        $this->setBreadcrumb(array(
            array(
                'href' => '#',
                'title' => 'Home',
                'fa-icon' => 'dashboard'
            ),
            array(
                'href' => '#',
                'title' => 'Example'
            ),
            array(
                'active' => true,
                'title' => 'Select'
            )
        ));
        $this->setLayoutOptions(self::FIXED_LAYOUT | self::CONTROL_SIDEBAR);
        $this->Flash->info('Select Example.', array(
            'plugin' => 'AdminLTE',
            'params' => array(
                'header' => 'Tip!'
            )
        ));
    }

    public function image_widget()
    {
        FB::info($this->request);
        $this->setLayoutHeader('AdminLTE 2 | Image Widget');
        $this->setBreadcrumb(array(
            array(
                'href' => '#',
                'title' => 'Home',
                'fa-icon' => 'dashboard'
            ),
            array(
                'href' => '#',
                'title' => 'Example'
            ),
            array(
                'active' => true,
                'title' => 'Image Widget'
            )
        ));
        $this->setLayoutOptions(self::FIXED_LAYOUT | self::CONTROL_SIDEBAR);
        $this->Flash->info('Image Widget Select Example.', array(
            'plugin' => 'AdminLTE',
            'params' => array(
                'header' => 'Tip!'
            )
        ));
    }

    public function input_row()
    {
        FB::info($this->request);
        $this->setLayoutHeader('AdminLTE 2 | Input Row');
        $this->setBreadcrumb(array(
            array(
                'href' => '#',
                'title' => 'Home',
                'fa-icon' => 'dashboard'
            ),
            array(
                'href' => '#',
                'title' => 'Example'
            ),
            array(
                'active' => true,
                'title' => 'Input Rowt'
            )
        ));
        $this->setLayoutOptions(self::FIXED_LAYOUT | self::CONTROL_SIDEBAR);
        $this->Flash->info('Input Row Example.', array(
            'plugin' => 'AdminLTE',
            'params' => array(
                'header' => 'Tip!'
            )
        ));
    }
}