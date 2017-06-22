<?php
/**
 * Include if exists CSS Styles
 */
if (file_exists(dirname(__FILE__) . '/css/' . basename(__FILE__, 'ctp') . 'css')) {
    $this->start('cssHead');
    include_once dirname(__FILE__) . '/css/' . basename(__FILE__, 'ctp') . 'css';
    $this->end();
}
/**
 * Include if exists JS Code
 */
if (file_exists(dirname(__FILE__) . '/js/' . basename(__FILE__, 'ctp') . 'js')) {
    $this->start('scriptBody');
    include_once dirname(__FILE__) . '/js/' . basename(__FILE__, 'ctp') . 'js';
    $this->end();
}

$this->Html->controlSideBarStart();
$first_tab_content = '<p>This is the content of the first tab, you can add more things here for example a form.</p>';
$second_tab_content = '<p>Html code can be hosted here</p>';
echo $this->Html->controlSideBarStruct(array(
    'control_panes' => array(
        'first_tab' => array(
            'fa_icon' => 'wrench',
            'tab_li_class' => 'my_li_class',
            'tab_pane_class' => 'my_pane_class',
            'content' => $first_tab_content
        ),
        'second_tab' => array(
            'fa_icon' => 'home',
            'content' => $second_tab_content
        )
    )
));
$this->Html->controlSideBarEnd();

$this->Html->sectionStart(array(
    'class' => 'content-header'
));
?>
    <h1>
        Fixed Layout <small>Blank example to the fixed layout</small>
    </h1>
<?php
if (defined('AdminLTE_Breadcrumb'))
    echo AdminLTE_Breadcrumb;

$this->Html->sectionEnd();

$this->Html->sectionStart(array(
    'class' => 'content'
));

echo $this->Flash->render();

$this->Html->contentBlockStart(array(
    'header' => array(
        'title' => 'Title',
        'icon' => 'th',
        'border' => true
    ),
    'box-tools' => array(
        'label' => 'test',
        'collapsable' => true,
        'remove' => true
    ),
    'footer' => 'Footer'
));

echo $this->Form->create('sidebar_struct');

echo $this->Form->input('sidebar_struct_1_src_code', array(
    'label' => 'Sidebar Struct Source Code Sample #1',
    'type' => 'textarea',
    'value' => '
    <?php
    $this->Html->controlSideBarStart();
    
    $first_tab_content = \'<p>This is the content of the first tab, you can add more things here for example a form.</p>\';
    $second_tab_content = \'<p>Html code can be hosted here</p>\';
    
    echo $this->Html->controlSideBarStruct(array(
        \'control_panes\' => array(
            \'first_tab\' => array(
                \'fa_icon\' => \'wrench\',
                \'tab_li_class\' => \'my_li_class\',
                \'tab_pane_class\' => \'my_pane_class\',
                \'content\' => $first_tab_content
            ),
            \'second_tab\' => array(
                \'fa_icon\' => \'home\',
                \'content\' => $second_tab_content
            )
        )
    ));
    
    $this->Html->controlSideBarEnd();
    ?>
    ',
    'codemirror' => array(
        'mode' => 'application/x-httpd-php',
        'lineNumbers' => true
    )
));

echo $this->Form->input('sidebar_struct_2_src_code', array(
    'label' => 'Sidebar Struct Source Code Sample #2',
    'type' => 'textarea',
    'value' => '
    <?php
    $this->Html->controlSideBarStart();
    
    $tabs_content = \'
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li class="active my_li_class">
                <a href="#first_tab" data-toggle="tab" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            </li>
            <li class=" ">
                <a href="#second_tab" data-toggle="tab" aria-expanded="false"><i class="fa fa-home"></i></a>
            </li>
        </ul>\';
    $panes_content = \'
        <!-- Tab panes -->
        <div class="tab-content">
            <div id="first_tab" class="tab-pane my_pane_class active">
                <div>
                    <p>This is the content of the first tab, you can add more things here for example a form.</p>
                </div>
            </div>
            <div id="second_tab" class="tab-pane">
                <div>
                    <p>Html code can be hosted here</p>
                </div>
            </div>
        </div>\';
    echo $this->Html->controlSideBarStruct(array(
        \'control_panes\' => $panes_content,
        \'control_tabs\' => $tabs_content
    ));
    
    $this->Html->controlSideBarEnd();
    ?>
    ',
    'codemirror' => array(
        'mode' => 'application/x-httpd-php',
        'lineNumbers' => true
    )
));

$this->Html->contentBlockEnd();
$this->Html->sectionEnd();