<?php

class InformationController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';
	
	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('all','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('index', 'create','update', 'delete', 'adminall', 'adminupdate'),
				'users'=>array('@'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Information;
		

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Information']))
		{
                    $rnd = rand(0,9999);  // generate random number between 0-9999
                    $model->attributes=$_POST['Information'];

                    $uploadedFile=CUploadedFile::getInstance($model,'image');
                    if($uploadedFile){
                        $fileName = "{$rnd}-{$uploadedFile}";  // random number + file name
                        $model->image = $fileName;
                    }       
//                    var_dump($_POST['Information']['description']);exit;
                    $model->user_id=yii::app()->user->id;

                    $phone = Phone::model()->findByPk($_POST['phone']);
                    $model->phone = $phone->phone;
                    $user = Users::model()->findByPk(yii::app()->user->id);
        //            var_dump($user->email);exit;
                    $model->email = $user->email;

                    $location = Location::model()->findByPk($_POST['location']);
                    $model->location = $location->location;
                    

                    $model->description = str_replace("\r\n","<br />",$_POST['Information']['description']);

                    $t=time();
                    $model->time=date("Y-m-d",$t); 
                    
                    if($model->save()){
                        if($uploadedFile){
                            $uploadedFile->saveAs(Yii::app()->basePath.'/../banner/'.$fileName);  // image will uplode to rootDirectory/banner/
                        } 
                    }
                        $this->redirect(array('view','id'=>$model->id));
                }
		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
            $model=$this->loadModel($id);
            $model->description = str_replace("<br />","\n",$model->description );
            $oldimage = $model->image;
            if(isset($_POST['Information']))
            {
                $rnd = rand(0,9999);
                $model->attributes=$_POST['Information'];
                $uploadedFile=CUploadedFile::getInstance($model,'image');
                if($uploadedFile){
                    $fileName = "{$rnd}-{$uploadedFile}";  // random number + file name
                    $model->image = $fileName;
                    if($oldimage){
                        unlink(Yii::app()->basePath.'/../banner/'.$oldimage);
                    }
                }
                $content = $_POST['Information']['description'];
                $model->description = str_replace("\n","<br />",$content);
                if($model->save()){                            
                    if($uploadedFile){
                        $uploadedFile->saveAs(Yii::app()->basePath.'/../banner/'.$fileName);  // image will uplode to rootDirectory/banner/                                
                    }
                    $this->redirect(array('view','id'=>$model->id));
                }
            }

            $this->render('update',array(
                    'model'=>$model,
            ));
	}
        
        public function actionAdminUpdate($id)
	{
            $model=$this->loadModel($id);
            $model->description = str_replace("<br />","\n",$model->description );
            $oldimage = $model->image;
            if(isset($_POST['Information']))
            {
                $rnd = rand(0,9999);
                $model->attributes=$_POST['Information'];
                $uploadedFile=CUploadedFile::getInstance($model,'image');
                if($uploadedFile){
                    $fileName = "{$rnd}-{$uploadedFile}";  // random number + file name
                    $model->image = $fileName;
                    if($oldimage){
                        unlink(Yii::app()->basePath.'/../banner/'.$oldimage);
                    }
                }
                $content = $_POST['Information']['description'];
                $model->description = str_replace("\n","<br />",$content);
                if($model->save()) {
                    // check if uploaded file is set or not
                    if($uploadedFile){
                        $uploadedFile->saveAs(Yii::app()->basePath.'/../banner/'.$fileName);
                    }
                    $this->redirect(array('view','id'=>$model->id));
                }
            }
            $this->render('admin_update',array(
                'model'=>$model,
            ));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
            $this->loadModel($id)->delete();

            // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if(!isset($_GET['ajax']))
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
            $criteria1 = new CDbCriteria;
            $criteria1->compare('user_id',Yii::app()->user->id,true);
            $dataProvider=new CActiveDataProvider('Information', array('criteria'=>$criteria1), array(
                'criteria'=>array(
                'order'=>'id DESC',
                ),
                'pagination'=>array(
                'pageSize'=>15,
                ),
            ));

            $this->render('index1',array(
                'dataProvider'=>$dataProvider,
            ));
	}

	public function actionAll()
	{
            $dataProvider=new CActiveDataProvider('Information', array(
                'criteria'=>array(
                'order'=>'id DESC',
                ),
                'pagination'=>array(
                'pageSize'=>15,
                ),
            ));
            $criteria = new CDbCriteria;
            $criteria->compare('top','1',true);
            $model = Information::model()->findAll($criteria);
            
            $id = array();
            $i= 0;
            foreach ($model as $value){
                $id[$i] = $value->id;
                $i++;
            }
            $limit = 5;
            if(count($id) > $limit)
            {
                shuffle($id);
                $id = array_slice($id, 0, $limit);
            }

            $criteria1 = new CDbCriteria();
            $criteria1->addInCondition('id', $id);
            $model1 = Information::model()->findAll($criteria1, array('top','1',true));
            
            $this->render('index',array(
                'dataProvider'=>$dataProvider,
                'model'=>$model1,
            ));
	}
        
        public function actionAdminAll()
	{
            $dataProvider=new CActiveDataProvider('Information', array(
                'criteria'=>array(
                'order'=>'id DESC',
                ),
                'pagination'=>array(
                'pageSize'=>15,
                ),
            ));
            		
            $this->render('index_admin',array(
                'dataProvider'=>$dataProvider,
            ));
	}

       
	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
            $model=new Information('search');
            $model->unsetAttributes();  // clear any default values
            if(isset($_GET['Information']))
                    $model->attributes=$_GET['Information'];

            $this->render('admin',array(
                    'model'=>$model,
            ));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Information the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
            $model=Information::model()->findByPk($id);
            if($model===null)
                    throw new CHttpException(404,'The requested page does not exist.');
            return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Information $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
            if(isset($_POST['ajax']) && $_POST['ajax']==='information-form')
            {
                echo CActiveForm::validate($model);
                Yii::app()->end();
            }
	}
}
