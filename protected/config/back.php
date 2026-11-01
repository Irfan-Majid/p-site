<?php

return CMap::mergeArray(
                require(dirname(__FILE__) . '/main.php'), array(
            // Put back-end settings there.
            //Default admin theme
            'theme' => 'admin',
            'name' => 'পুলিশ অফিস,চট্রগ্রাম',
            'modules' => array(
                // uncomment the following to enable the Gii tool
                'gii' => array(
                    'class' => 'system.gii.GiiModule',
                    'password' => 'admin',
                    // If removed, Gii defaults to localhost only. Edit carefully to taste.
                    'ipFilters' => array('127.0.0.1', '::1'),
                ),
            ),
            'components' => array(
            // uncomment the following to enable URLs in path-format
//                'urlManager' => array(
//                    'urlFormat' => 'path',
//                    'showScriptName' => true,
//                    'urlSuffix' => '.html',
//                    'rules' => array(
//                        '<action>' => 'site/<action>',
//                        '<controller:\w+>/<id:\d+>' => '<controller>/view',
//                        '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
//                        '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
//                    ),
//                ),
            ),
            'params' => array(
                // this is used in contact page
                // application-level parameters that can be accessed
                // using Yii::app()->params['paramName']
                'adminName' => 'পুলিশ অফিস',
                'tagLine' => 'চট্রগ্রাম পুলিশ অফিসের ওয়েবসাইটের এডমিন প্যানেলে স্বাগতম.',
                'adminEmail' => 'spchittagong@police.gov.bd',
                'noreply' => 'noreply@domain.com',
                'Companyname' => 'POLICE ADMIN',
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
