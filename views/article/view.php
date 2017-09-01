<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\article\Article */

$this->title = $aInfo->title;
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$this->registerCssFile('/css/other.css');

?>
<div class="wx-wrap wx-place">
    <i></i>
    <span class="head">您现在的位置：</span><strong><a href="">233网校</a></strong><span class="next"></span><strong><a href="">成人高考</a></strong><span class="next"></span><strong><a href="">成人高考</a></strong><span class="next"></span><strong>北京</strong>
</div>
<div class="wx-wrap">
    <div class="left-slide">
        <div class="show-wrap">
            <div class="show-con">
                <h2><?= $aInfo->title?></h2>
                <div class="tit-bar">
                    <span><?=\Yii::$app->formatter->asDate($model->createtime,'php:Y年m月d日')?></span>
                </div>
                <div class="news-body">
                    <?=$aInfo->content?>
                </div>
                <div class="about-read">
                    <h3>相关推荐</h3>
                    <ul>
                        <li><a title="" href="#" target="_blank">2015贵州毕节市招考公务员和人民警察职位减少情况公告</a> </li>
                        <li><a title="" href="#" target="_blank">2015下半年吉林公务员考试公告</a> </li>
                        <li><a title="" href="#" target="_blank">2015年金华市商务局（粮食局）选调公务员公告</a> </li>
                        <li><a title="" href="#" target="_blank">2015云南楚雄州公务员考试资格复审公告</a> </li>
                        <li><a title="" href="#" target="_blank">2015云南楚雄州公务员考试资格复审公告</a> </li>

                        <li><a title="" href="#" target="_blank">2015贵州毕节市招考公务员和人民警察职位减少情况公告</a> </li>
                        <li><a title="" href="#" target="_blank">2015下半年吉林公务员考试公告</a> </li>
                        <li><a title="" href="#" target="_blank">2015年金华市商务局（粮食局）选调公务员公告</a> </li>
                        <li><a title="" href="#" target="_blank">2015云南楚雄州公务员考试资格复审公告</a> </li>
                        <li><a title="" href="#" target="_blank">2015云南楚雄州公务员考试资格复审公告</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="right-slide">
        <div class="right_01">
            <div class="row1-one-tit1">
                <span class="row1-tit-1"><a href="#">最新资讯</a></span>
                <a class="tit-more" target="_blank" href="#">更多<i></i></a>
            </div>
            <div class="right_01_con">
                <ul class="list-02 clearfix">
                    <li><a href="#" title="" target="_blank">2015年广东成人高考成绩什么时候查询？年广东成人高考成绩什么时候查询年广东成人高考成绩什么时候查询</a></li>
                    <li><a href="#" title="">2015年云南成人高考录取查询时间预计</a></li>
                    <li><a href="#" title="" target="_blank">2015年重庆成人高考录取查询时间</a></li>
                    <li><a href="#" title="" target="_blank">2015年四川成人高考录取查询时间</a></li>
                    <li><a href="#" title="" target="_blank">2015年湖北成人高考录取查询时间</a></li>
                    <li><a href="#" title="" target="_blank">2015年北京成人高考什么时候成绩查询</a></li>
                    <li><a href="#" title="" target="_blank">2015北京成人高考何时成绩查询?在哪查分</a></li>
                    <li><a href="#" title="" target="_blank">2015年成人高考成绩什么时候公布?</a></li>
                    <li><a href="#" title="" target="_blank">2015年江西成人高考专升本成绩何时公布？</a></li>
                    <li><a href="#" title="" target="_blank">2015年江西成人高考专升本成绩何时公布？</a></li>
                </ul>
            </div>
        </div>
        <div class="right_01">
            <div class="row1-one-tit1">
                <span class="row1-tit-1"><a href="#">最新试题</a></span>
                <a class="tit-more" target="_blank" href="#">更多<i></i></a>
            </div>
            <div class="right_01_con">
                <ul class="list-02 clearfix">
                    <li><a href="#" title="" target="_blank">2015年广东成人高考成绩什么时候查询？</a></li>
                    <li><a href="#" title="">2015年云南成人高考录取查询时间预计</a></li>
                    <li><a href="#" title="" target="_blank">2015年重庆成人高考录取查询时间</a></li>
                    <li><a href="#" title="" target="_blank">2015年四川成人高考录取查询时间</a></li>
                    <li><a href="#" title="" target="_blank">2015年湖北成人高考录取查询时间</a></li>
                    <li><a href="#" title="" target="_blank">2015年北京成人高考什么时候成绩查询</a></li>
                    <li><a href="#" title="" target="_blank">2015北京成人高考何时成绩查询?在哪查分</a></li>
                    <li><a href="#" title="" target="_blank">2015年成人高考成绩什么时候公布?</a></li>
                    <li><a href="#" title="" target="_blank">2015年江西成人高考专升本成绩何时公布？</a></li>
                    <li><a href="#" title="" target="_blank">2015年江西成人高考专升本成绩何时公布？</a></li>
                </ul>
            </div>
        </div>
        <div class="right_02"><a href="#" target="_blank"><img src="images/adv.jpg" width="300" height="263"></a></div>
        <div class="right_02"><a href="#" target="_blank"><img src="images/adv.jpg" width="300" height="263"></a></div>
    </div>
</div>
