<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use frontend\models\TbUsersProfile;
/**
 * Description of TbUsersProfile
 *
 * @author damasac
 */
class TbUsersProfileController extends Controller{
    //put your code here
    public function actionIndex(){
       $user_id = Yii::$app->session["login"]; 
       $model = TbUsersProfile::find()->where(["user_id"=>$user_id])->one(); 
       return $this->render("index",["model"=>$model]);
    }
    public function actionCreate(){
        $model = new TbUsersProfile();
        if(!empty($_POST)){
            $model->user_id = Yii::$app->session["login"];
            $model->fname= $_POST["TbUsersProfile"]["fname"];
            $model->lname= $_POST["TbUsersProfile"]["lname"];
            $model->address= $_POST["TbUsersProfile"]["address"];
            if($model->save()){
               return $this->redirect(["/tb-users-profile/index"]);
            }
             
        }
        return $this->render("create",["model"=>$model]);
    }
    
    public function actionUpdate($id){
        $model = TbUsersProfile::findOne($id);
        if(!empty($_POST)){
            $model->fname= $_POST["TbUsersProfile"]["fname"];
            $model->lname= $_POST["TbUsersProfile"]["lname"];
            $model->address= $_POST["TbUsersProfile"]["address"];
            if($model->save()){
               return $this->redirect(["/tb-users-profile/index"]);
            }
             
        }
        return $this->render("update",["model"=>$model]);
    }
    
    public function actionUpdateAjax($id){
        
        if(Yii::$app->request->isAjax)
        {
            $model = TbUsersProfile::findOne($id);
            if(!empty($_POST)){
                $model->fname= $_POST["TbUsersProfile"]["fname"];
                $model->lname= $_POST["TbUsersProfile"]["lname"];
                $model->address= $_POST["TbUsersProfile"]["address"];
                if($model->save()){
                   //return $this->redirect(["/tb-users-profile/index"]);
                }

            }
            return $this->renderAjax("update",["model"=>$model]);
        }
    }
}
