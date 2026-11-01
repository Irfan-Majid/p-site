<?php

class BackEndController extends CController {

    public $userData;
    public $layout = 'application.views.layouts.main';
    public $menu = array();
    public $breadcrumbs = array();
    public $bodyClass;

    public function filters() {
        return array(
            'accessControl',
        );
    }

    public function accessRules() {
        return array(
            array('allow',
                'users' => array('*'),
                'actions' => array('login'),
            ),
            array('allow',
                'users' => array('@'),
            ),
            array('deny',
                'users' => array('*'),
            ),
        );
    }

    public function init() {
        
        if (isset(Yii::app()->user->user_type)) {
            if (Yii::app()->user->user_type == 0) {
                Yii::app()->user->setFlash('error', 'Invalid request! Please do not repeat this request again!!!!!');
                $this->redirect('http://' . $_SERVER["SERVER_NAME"]);
            }
        }
        $this->statistics();
    }

    public function checkAccess($controller, $action) {
        $val = Acl::model()->findByAttributes(array('controller' => $controller, 'actions' => $action, 'group_id' => Yii::app()->user->group, 'controller_type' => 1));
        if (!isset($val->access)) {
            $val = 1;
        } else {
            $val = $val->access;
        }
        return $val;
    }

    public function statistics() {
        $model = new Visitor;
        $model->user_type = 1;
        $model->user_id = Yii::app()->user->id;
        $model->user_name = Yii::app()->user->name;
        $model->server_time = new CDbExpression('NOW()');
        $model->page_title = $this->pageTitle;
        $model->page_link = Yii::app()->request->url;
        $model->browser = null;
        $model->visitor_ip = $_SERVER['REMOTE_ADDR'];
        $model->save();
       
    }

}