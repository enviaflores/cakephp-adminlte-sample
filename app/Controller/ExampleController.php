<?php
App::uses('AdminLTEController', 'AdminLTE.Controller');

/**
 * Class ExampleController
 */
class ExampleController extends AdminLTEController
{

    /**
     * Displays a view that show a login page
     */
    public function login()
    {
        $this->setLayoutHeader('AdminLTE 2 | Log in');
        $this->setLayoutOptions(self::LOGIN_LAYOUT);
    }

    /**
     * Displays a view that show an example of
     * how to use a select tag
     */
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

    /**
     * Displays an example view for loading an image
     */
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

    /**
     * Displays a view that show inputs rows using the grid bootstrap
     */
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

    public function date_fields()
    {
        $this->setLayoutHeader('AdminLTE 2 | Date Fields');
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
                'title' => 'Date Fields'
            )
        ));
        $this->setLayoutOptions(self::FIXED_LAYOUT | self::CONTROL_SIDEBAR);
        $this->Flash->info('Date Fields.', array(
            'plugin' => 'AdminLTE',
            'params' => array(
                'header' => 'Tip!'
            )
        ));
    }

    public function sidebar_struct()
    {
        $this->setLayoutHeader('AdminLTE | Sidebar Struct');
        $this->setBreadcrumb(array(
            array(
                'href' => '',
                'title' => 'Home',
                'fa-icon' => 'dashboard'
            ),
            array(
                'href' => '#',
                'title' => 'Example'
            ),
            array(
                'active' => true,
                'title' => 'Sidebar Struct'
            )
        ));
        $this->setLayoutOptions(self::FIXED_LAYOUT | self::CONTROL_SIDEBAR);
        $this->Flash->info('Sidebar Struct Example', array(
            'plugin' => 'AdminLTE',
            'params' => array(
                'header' => 'Tip!'
            )
        ));
    }
}