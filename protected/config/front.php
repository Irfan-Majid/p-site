<?php

return CMap::mergeArray(
                require(dirname(__FILE__) . '/main.php'), array(
            // Put fron-end settings there.
            //Default admin theme
            'theme' => 'default',
            'name' => 'Superintendent of police, Chattogram',
            // Put front-end settings there.
            'components' => array(
                'clientScript' => array(
                    'packages' => array(
                        'jquery' => array(
                            'baseUrl' => '//ajax.googleapis.com/ajax/libs/jquery/2.1.1/',
                            'js' => array('jquery.min.js'),
                            'coreScriptPosition' => CClientScript::POS_HEAD,
                        ),
                        'jquery.ui' => array(
                            'baseUrl' => '//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/',
                            'js' => array('jquery-ui.min.js'),
                            'depends' => array('jquery'),
                            'coreScriptPosition' => CClientScript::POS_BEGIN,
                        ),
                    ),
                ),
                // uncomment the following to enable URLs in path-format
                'urlManager' => array(
                    'urlFormat' => 'path',
                    'showScriptName' => false,
                    'urlSuffix' => '.html',
                    'rules' => array(
                        '<action>' => 'site/<action>',
                        '<controller:\w+>/<id:\d+>' => '<controller>/view',
                        '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                        '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
                    ),
                ),
            ),
            'params' => array(
                // this is used in contact page
                // application-level parameters that can be accessed
                // using Yii::app()->params['paramName']
                'Companyname' => 'Superintendent of police, Chattogram',
                'adminEmail' => 'spchittagong@police.gov.bd',
                'webmail' => 'https://webmail.police.gov.bd/owa',
                'pageSize' => 25,
                'pageSize20' => 20,
                'pageSize30' => 30,
                'pageSize50' => 50,
                'pageSize100' => 100,
                'pageSize200' => 200,
                'pageSize300' => 300,
                'pageSize400' => 400,
                'pageSize500' => 500,
            ),
                )
);
