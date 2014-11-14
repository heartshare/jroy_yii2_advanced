<?php  namespace backend\controllers;

use Yii;
use yii\web\Controller;
use backend\models\LoginForm;

class AdminController extends Controller
{

    public $layout = 'main';

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        //$this->layout = false;
        
        if(! \Yii::$app->user->isGuest)
        {
            return $this->redirect(['admin/index']);
        }
        
        $model = new LoginForm();
        if($model->load($_POST) && $model->login())
        {
            return $this->redirect(['admin/index']);
        }
        else
        {
            return $this->render('login', ['model' => $model]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->redirect(['admin/login']);
    }

}
