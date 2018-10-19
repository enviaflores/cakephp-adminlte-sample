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
$this->Html->sectionStart([
    'class' => 'content-header'
]);
?>
<h1>
    Map Widget <small>Example for Google Maps Widget</small>
</h1>
<?= (defined('AdminLTE_Breadcrumb')) ? AdminLTE_Breadcrumb : '' ?>
<?= $this->Html->sectionEnd(); ?>
<?= $this->Html->sectionStart([
    'class' => 'content'
]) ?>
<?= $this->AdminLTEWidgets->drawMap(); ?>
<?= $this->Html->sectionEnd() ?>

