<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class CatalogController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     
     */
   

    public function actionPdf() {
        $filepdf = 'catalogs_v1.pdf';
    
        // This will need to be the path relative to the root of your app.
        $filePath = '/views/pdf';
        // Might need to change '@app' for another alias
        $completePath = Yii::getAlias('@app'.$filePath.'/'.$filepdf);
    
        return Yii::$app->response->sendFile($completePath, $filepdf);
    }

    /**
     * Displays homepage catalog
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

}
