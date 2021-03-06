<?php
$this->breadcrumbs = array(
    Yii::t('main', 'ItemProp') => array('admin'),
    Yii::t('main', 'Manage'),
);

$this->menu = array(
    array('label' => Yii::t('main','Create ItemProp'), 'icon' => 'plus', 'url' => array('create')),
);
?>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'item-prop-grid',
    'type' => 'striped bordered condensed',
    'dataProvider' => $model->search(),
//    'filter' => $model,
    'columns' => array(
        'prop_id',
        'category.name',
        'prop_name',
        array(
            'name' => 'type',
            'value' => '$data->getType()',
        ),
        array(
            'name' => 'prop.prop_values',
            'header' => '属性值',
            'value' => '$data->getPropValues()',
            'htmlOptions' => array('width'=>'600'),
        ),
        'sort_order',
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
        ),
    ),
));
?>
