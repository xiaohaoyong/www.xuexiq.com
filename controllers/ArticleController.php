<?php

namespace app\controllers;

use app\models\Area;
use app\models\article\ArticleInfo;
use Yii;
use app\models\article\Article;
use app\models\article\ArticleSearch;
use yii\data\Pagination;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ArticleController implements the CRUD actions for Article model.
 */
class ArticleController extends Controller
{

    /**
     * Displays a single Article model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model=$this->findModel($id);
        $aInfo=ArticleInfo::findOne($id);
        return $this->render('view', [
            'model' => $this->findModel($id),
            'aInfo' => $aInfo,
        ]);
    }

    public function actionList()
    {
        $cat=Yii::$app->request->get('cat');
        $catAll=array_flip(Article::$categoryP);
        $catid=$catAll[$cat];
        if($catid)
        {
            $where['cat']=$catid;
        }

        $area=Yii::$app->request->get('area');
        $areaAll=array_flip(Area::$areaP);
        $areaid=$areaAll[$area];
        if($areaid)
        {
            $where['area']=$areaid;
        }

        $query=Article::find()->where($where);
        $query->andFilterWhere(['>','level',-1]);
        $query->orderBy(['id'=>SORT_DESC]);

        $count=$query->count();
        $pagination= new Pagination(['totalCount'=>$count]);
        $list=$query->offset($pagination->offset)->limit($pagination->limit)->all();


        return $this->render('list',[
            'list'=>$list,
            'pagination'=>$pagination
        ]);
    }
    public function actionChannel()
    {
        $area=Yii::$app->request->get('area');
        $areaAll=array_flip(Area::$areaP);
        $areaid=$areaAll[$area];
        if($areaid)
        {
            $where['area']=$areaid;
        }
        return $this->render('channel',[
            'areaid'=>$areaid,
        ]);

    }
    /**
     * Finds the Article model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Article the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Article::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
