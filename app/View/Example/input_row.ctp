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
?>
Control Side Bar
<?php
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
    // 'variant' => 'info',
    'footer' => 'Footer'
));

echo $this->Form->inputRow($this->Form->input('Field1'), $this->Form->input('Field2'), array(
    'settings' => array(
        'pre' => '<hr>',
        'style' => 'border: 1px solid blue;'
    )
));

echo $this->Form->inputRow($this->Form->input('Field1'), $this->Form->input('Field2'), $this->Form->input('Field3'), array(
    'settings' => array(
        'style' => 'border: 1px solid green;'
    )
));

echo $this->Form->inputRow($this->Form->input('Field1'), $this->Form->input('Field2'), $this->Form->input('Field3'), $this->Form->input('Field4'), array(
    'settings' => array(
        'style' => 'border: 1px solid orange;'
    )
));

echo $this->Form->inputRow(array(
    'size' => 2,
    'content' => $this->Form->input('Field1')
), $this->Form->input('Field2'), $this->Form->input('Field3'), $this->Form->input('Field4'), array(
    'settings' => array(
        'style' => 'border: 1px solid black;'
    )
));

echo $this->Form->inputRow(array(
    'size' => 2,
    'content' => $this->Form->input('Field1')
), array(
    'size' => 6,
    'content' => $this->Form->input('Field2')
), $this->Form->input('Field3'), $this->Form->input('Field4'));

echo $this->Form->inputRow(array(
    'size' => 2,
    'class' => 'has-error',
    'content' => $this->Form->input('Field1')
), array(
    'size' => 6,
    'content' => $this->Form->input('Field2')
), $this->Form->input('Field3'), $this->Form->input('Field4'), array(
    'settings' => array(
        'post' => '<span>PostHtml</span>'
    )
));

$this->Html->contentBlockEnd();
$this->Html->sectionEnd();