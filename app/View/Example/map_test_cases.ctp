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
    Use cases <small>Example test cases for Map Widget</small>
</h1>
<?= (defined('AdminLTE_Breadcrumb')) ? AdminLTE_Breadcrumb : '' ?>
<?= $this->Html->sectionEnd(); ?>
<?= $this->Html->sectionStart([
    'class' => 'content'
]) ?>

<h4><?= __('Choose an option') ?></h4>
<ul class="nav nav-pills" role="tablist">
    <li role="presentation" <?= ((empty($case)) ? 'class="active"' : '') ?>>
        <a href="<?= Router::url(['controller' => 'Example', 'action' => 'mapTestCases']) ?>">
            Default values <span class="badge">1</span>
        </a>
    </li>
    <li role="presentation" <?= (($case === 'disable_zoom') ? 'class="active"' : '') ?>>
        <a href="<?= Router::url(['controller' => 'Example', 'action' => 'mapTestCases', 'disable_zoom']) ?>">
            Disable zoom <span class="badge">2</span>
        </a>
    </li>
    <li role="presentation" <?= (($case === 'markers') ? 'class="active"' : '') ?>>
        <a href="<?= Router::url(['controller' => 'Example', 'action' => 'mapTestCases', 'markers']) ?>">
            Marker <span class="badge">3</span>
        </a>
    </li>
    <li role="presentation" <?= (($case === 'heatmap') ? 'class="active"' : '') ?>>
        <a href="<?= Router::url(['controller' => 'Example', 'action' => 'mapTestCases', 'heatmap']) ?>">
            HeatMap Layer <span class="badge">4</span>
        </a>
    </li>
    <li role="presentation" <?= (($case === 'debuggable') ? 'class="active"' : '') ?>>
        <a href="<?= Router::url(['controller' => 'Example', 'action' => 'mapTestCases', 'debuggable']) ?>">
            Disable debug <span class="badge">5</span>
        </a>
    </li>
    <li role="presentation" <?= (($case === 'disable_default_ui') ? 'class="active"' : '') ?>>
        <a href="<?= Router::url(['controller' => 'Example', 'action' => 'mapTestCases', 'disable_default_ui']) ?>">
            Disable default UI <span class="badge">6</span>
        </a>
    </li>
    <li role="presentation" <?= (($case === 'type') ? 'class="active"' : '') ?>>
        <a href="<?= Router::url(['controller' => 'Example', 'action' => 'mapTestCases', 'type']) ?>">
            Change map type <span class="badge">7</span>
        </a>
    </li>
</ul>

<?= $this->Form->input('init_src_code', [
    'label' => 'Map code',
    'type' => 'textarea',
    'value' => $text,
    'codemirror' => array(
        'mode' => 'application/x-httpd-php',
        'lineNumbers' => true
    )
]); ?>

<?= $this->AdminLTEWidgets->drawMap($options) ?>

<?= $this->Html->sectionEnd() ?>
