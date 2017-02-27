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
echo $this->Form->create('ImageWithPreview', array(
    'enctype' => 'multipart/form-data'
));

$image_with_preview = $this->Form->image('poster', array(
    'label' => 'Poster Image (270x210)',
    'value' => '/image_place_holder/png/117x150/AAAAAA/EFEFEF?text='.urlencode("210x270"),
    'with-preview' => array(
        'resize' => array(
            'width' => 210,
            'height' => 270
        ),
        'width' => '117px',
        'height' => '150px'
    )
));

FB::info($image_with_preview, __METHOD__);

print $image_with_preview;

echo $this->Form->end('Submit');

$this->Html->contentBlockEnd();
$this->Html->sectionEnd();