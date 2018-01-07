<?php  
namespace frontend\controllers;
use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
class WantedController extends Controller{
    
    public $layout=false;
    public function init(){
    
    $this->enableCsrfValidation = false;
  }
      //职位
    public function actionIndex(){

      return $this->render('wanted');
    } 
}    