<?php
App::uses('AdminLTEController', 'AdminLTE.Controller');

/**
 * Class ExampleController
 */
class ExampleController extends AdminLTEController
{
    public $helpers = ['AdminLTE.AdminLTEWidgets' => [
        'map_options' => [
            'center' => [
                'latitude' => 25.683792,
                'longitude' => -100.338606
            ],
            'zoom' => 13,
            // 'type' => 'satellite',
            'layer' => [
                'type' => 'heatmap',
                'data' => [
                    [25.677167, -100.374260],
                    [25.675885, -100.349513]
                ]
            ],
            'markers' => [
                [
                    'position' => [25.6809602, -100.3680148],
                    'label' => 'EF',
                    'title' => 'Enviaflores'
                ]
            ],
            'disable_default_ui' => true,
            'debuggable' => true,
            'container_size' => 10,
            'disable_zoom' => true
        ]
    ]];

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

    public function showMap() {
        /*
         * TEST
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

    public function testPusher($index=1) {
        App::import('Vendor', 'Pusher/autoload');
        $message = '';

        try {
            $options = array(
                'cluster' => 'us2',
                'useTLS' => true
            );
            $pusher = new Pusher\Pusher(
                '810e43c63bf0d8e80ad8',
                '238f33f49527f90d236a',
                '624684',
                $options
            );

            $m_data = file_get_contents(WWW_ROOT . "geo_test{$index}.json");
            if ($m_data !== false) {
                $data['payload'] = $m_data;
                $pusher->trigger('my-channel', 'my-event', $data);
                $message = 'Done';
            }
        } catch (\Pusher\PusherException $e) {
            LogError($e->getMessage());
            $message = $e->getTraceAsString();
        } finally {
            $this->set('message', $message);
        }
    }

    public function mapTestCases($case=null) {
        switch ($case) {
            case 'disable_zoom':
                $text = "<?= \$this->AdminLTEWidgets->drawMap([
    'disable_zoom' => true
]) ?>";
                $options = [
                    'disable_zoom' => true
                ];
                break;
            case 'markers':
                $text = "<?= \$this->AdminLTEWidgets->drawMap([
    'markers' => [
        [
            'position' => [25.6809602, -100.3680148],
            'label' => 'EF',
            'title' => 'Enviaflores'
        ]
    ]
]) ?>";
                $options = [
                    'markers' => [
                        [
                            'position' => [25.6809602, -100.3680148],
                            'label' => 'EF',
                            'title' => 'Enviaflores'
                        ]
                    ]
                ];
                break;
            case 'heatmap':
                $text = "<?= \$this->AdminLTEWidgets->drawMap([
    'layer' => [
        'type' => 'heatmap',
        'data' => [
            [25.677167, -100.374260],
            [25.675885, -100.349513]
        ]
    ]
]) ?>";
                $options = [
                    'layer' => [
                        'type' => 'heatmap',
                        'data' => [
                            [25.677167, -100.374260],
                            [25.675885, -100.349513]
                        ]
                    ]
                ];
                break;
            case 'debuggable':
                $text = "<?= \$this->AdminLTEWidgets->drawMap([
    'debuggable' => false,
    'container_size' => 10
]) ?>";
                $options = [
                    'debuggable' => false,
                    'container_size' => 10
                ];
                break;
            case 'disable_default_ui':
                $text = "<?= \$this->AdminLTEWidgets->drawMap([
    'disable_default_ui' => true
]) ?>";
                $options = [
                    'disable_default_ui' => true
                ];
                break;
            case 'type':
                $text = "<?= \$this->AdminLTEWidgets->drawMap([
    'type' => 'satellite'
]) ?>";
                $options = [
                    'type' => 'satellite'
                ];
                break;
            default:
                $text = "<?= \$this->AdminLTEWidgets->drawMap() ?>";
                $options = [];
                break;
        }
        $this->set(compact('case', 'text', 'options'));
    }
}