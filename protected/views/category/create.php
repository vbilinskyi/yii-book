<?php
/* @var $this CategoryController */
/* @var $model Category */

$this->breadcrumbs = array(
    'Categories' => array('index'),
    'Create',
);

$this->menu = array(
    array('label' => 'List Category', 'url' => array('index')),
);
?>

    <h1>Create Category</h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>