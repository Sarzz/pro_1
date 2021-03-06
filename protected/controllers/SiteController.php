<?php

class SiteController extends Controller
{

	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->redirect('index.php/information/all');
	}

	/**
	 * This is the action to handle external exceptions.
	 */

	public function actionUsers()
    {
       $model=new Users;
       $model->scenario = 'users';

       if(isset($_POST['Users']))
            {
                $model->attributes=$_POST['Users'];
                $location = Location::model()->findByPk($_POST['location']);
            	$model->location = $location->location;

                if ($model->save()) {
        $this->redirect(array('site/login'));
    }
}
       $this->render('users',array(
       'model'=>$model,
       ));
    }

	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}

}