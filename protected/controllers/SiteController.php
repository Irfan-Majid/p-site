<?php

/**
 * Fallback used only when an error is raised before the front or back
 * controller directory is selected. Normal requests use the SiteController
 * under controllers/front or controllers/back.
 */
class SiteController extends CController {

    public $breadcrumbs = array();
    public $menu = array();

    public function actionError() {
        $error = Yii::app()->errorHandler->error;
        if (!$error) {
            return;
        }
        if (Yii::app()->request->isAjaxRequest) {
            echo $error['message'];
            return;
        }
        $this->layout = false;
        $view = 'error';
        if ($this->getViewFile($view) !== false) {
            $this->render($view, $error);
            return;
        }
        echo '<h1>Error ' . CHtml::encode($error['code']) . '</h1>';
        echo '<p>' . CHtml::encode($error['message']) . '</p>';
    }

}