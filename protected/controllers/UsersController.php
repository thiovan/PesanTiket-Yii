<?php

class UsersController extends Controller
{

	public function actions()
	{
		// captcha action renders the CAPTCHA image displayed on the contact page
		return array(
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	public function actionIndex()
	{
		$model=new Users;

    	if(isset($_POST['ajax']) && $_POST['ajax']==='users-index-form')
    	{
        	echo CActiveForm::validate($model);
        	Yii::app()->end();
    	}

    	if(isset($_POST['Users']))
    	{
        	$model->attributes=$_POST['Users'];
        	if($model->validate())
        	{
            	if($model->save())
            	{
            		$this->redirect(array('site/login'));
            	}
            	return;
        	}
    	}
    	$this->render('index',array('model'=>$model));

	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}