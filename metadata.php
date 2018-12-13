<?php
$aModule = array(
    'id'          => 'backend-autoscroll',
    'title'       => 'Zunderweb Admin Lists Autoscroll',
    'description' =>  array(
        'de'=>'Scrollt im Backend automatisch zum ausgew&auml;hlten Listeneintrag',
        'en'=>'Scrolls to selected list entry automatically in backend',
    ),
    'version'     => '1.0',
    'url'         => 'http://zunderweb.de',
    'email'       => 'info@zunderweb.de',
    'author'      => 'Zunderweb',
    'extend'      => array(
    ),
    'blocks' => array(
        array('template' => 'headitem.tpl', 'block'=>'admin_headitem_js', 'file'=>'backend_autoscroll_admin_headitem_js.tpl'),
    ),
);