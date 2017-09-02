<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/1
 * Time: 14:34
 */
$this->title=\app\models\Area::$province[$areaid]."公务员考试";
$this->registerCssFile('/css/other.css');

?>


<div class="wx-wrap">
    <div class="wx-ggw">
        <a href="#"><img src="/images/ggw1.jpg" height="90" width="837" alt=""></a>
    </div>
</div>
<div class="hd-title mt20">
    <div class="hd-title_h2">
        <i></i>
        <a href=""><?=\app\models\Area::$province[$areaid]?>公务员考试</a>
        <b></b>
    </div>
    <span class="fr">

        <?php $area=Yii::$app->request->get('area');?>
        <?=\yii\helpers\Html::a("考试动态",["/gwy/$area/new"])?>|
        <?=\yii\helpers\Html::a("报名时间",["/gwy/$area/baoming"])?>|
        <?=\yii\helpers\Html::a("职位表",["/gwy/$area/zhiwei"])?>|
        <?=\yii\helpers\Html::a("准考证打印",["/gwy/$area/zkzdy"])?>|
        <?=\yii\helpers\Html::a("考试时间",["/gwy/$area/kssj"])?>|
        <?=\yii\helpers\Html::a("成绩查询",["/gwy/$area/cjcx"])?>

    </span>
</div>
<div class="wx-wrap mt20">
    <div class="left-slide">
        <?php
        $count=count(\app\models\article\Article::$catText);
        $n=ceil($count/2);
        for($i=0;$i<$n;$i++){
        ?>
        <div class="row1">
            <?php
            $list=array_slice(\app\models\article\Article::$catText,($i*2),2,true);
            foreach($list as $k=>$v){
            ?>
            <div class="row1-one <?php if(end($list)==$v){?>fr<?php }else{?>fl<?php }?>">
                <div class="row1-one-tit">
                    <span class="row1-tit-1"><?=$v?></span>
                    <?php
                    $cat=\app\models\article\Article::$categoryP[$k];
                    ?>
                    <a class="tit-more" target="_blank" href="<?=\yii\helpers\Url::to(["/gwy/$area/$cat"])?>">更多<i></i></a>
                </div>
                <ul class="row1-one-list">
                    <?php
                    if($k)
                    {
                        $where=['area'=>$areaid,'cat'=>$k];
                    }else{
                        $where=['area'=>$areaid];
                    }
                    $articleList = \app\models\article\Article::find()->where($where)->orderBy('id desc')->limit(10)->all();
                    foreach($articleList as $ak=>$av){
                        $article=\app\models\article\ArticleInfo::findOne($av->id);
                        ?>
                    <li><a href="<?=\yii\helpers\Url::to(['/show/'.$av->id])?>" title="<?=$article->title?>" target="_blank" class="txt"><?=$article->title?></a></li>
                    <?php }?>
                </ul>
            </div>
            <?php }?>
        </div>
        <?php }?>

    </div>
    <div class="right-slide">
        <div class="right_01">
            <div class="right_01_title">考试日历</div>
            <div class="channel_calendar">
                <ul class="channel_calendar_list">
                    <li><div>报名时间</div>	<div>预计2017年10月15日左右</div></li>
                    <li><div>准考证打印</div>	<div>笔试前一周左右</div></li>
                    <li><div>笔试时间</div>	<div>预计2017年11月下旬</div></li>
                    <li><div>成绩查询</div>	<div>预计2018年1月中旬</div></li>
                    <li><div>面试时间</div>	<div>预计2018年2月份起</div></li>
                </ul>
            </div>
        </div>

    </div>
</div>

