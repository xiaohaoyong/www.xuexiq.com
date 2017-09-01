<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/1
 * Time: 0:08
 */
/* @var $list app\models\article\Article */
use yii\widgets\LinkPager;
$this->registerCssFile('/css/other.css');

?>
<div class="wx-wrap wx-place">
    <i></i>
    <span class="head">您现在的位置：</span><strong><a href="">233网校</a></strong><span class="next"></span><strong><a href="">成人高考</a></strong><span class="next"></span><strong><a href="">成人高考</a></strong><span class="next"></span><strong>北京</strong>
</div>

<div class="wx-wrap">
    <div class="left-slide">
        <div class="column-hd clearfix">
            <span>成考动态</span>
            <div class="fr"><a href="#">录取查询</a>&nbsp;<a href="#">成考政策</a>&nbsp;<a href="#">报名时间</a>&nbsp;<a href="#">成绩查询</a>&nbsp;</div>
        </div>
        <div class="dqdh">
            <dl>
                <span>地区导航</span>
                <dd><a href="#">全国</a></dd>
                <dd><a href="#">北京</a></dd>
                <dd><a href="#">天津</a></dd>
                <dd><a href="#">上海</a></dd>
                <dd><a href="#">重庆</a></dd>
                <dd><a href="#">河北</a></dd>
                <dd><a href="#">山西</a></dd>
                <dd><a href="#">吉林</a></dd>
                <dd><a href="#">辽宁</a></dd>
                <dd><a href="#">江苏</a></dd>
                <dd><a href="#">浙江</a></dd>
                <dd><a href="#">安徽</a></dd>
                <dd><a href="#">福建</a></dd>
                <dd><a href="#">江西</a></dd>
                <dd><a href="#">山东</a></dd>
                <dd><a href="#">河南</a></dd>
                <dd><a href="#">湖南</a></dd>
                <dd><a href="#">湖北</a></dd>
                <dd><a href="#">广东</a></dd>
                <dd><a href="#">海南</a></dd>
                <dd><a href="#">四川</a></dd>
                <dd><a href="#">云南</a></dd>
                <dd><a href="#">贵州</a></dd>
                <dd><a href="#">广西</a></dd>
                <dd><a href="#">陕西</a></dd>
                <dd><a href="#">甘肃</a></dd>
                <dd><a href="#">宁夏</a></dd>
                <dd><a href="#">青海</a></dd>
                <dd><a href="#">西藏</a></dd>
                <dd><a href="#">新疆</a></dd>
                <dd><a href="#">黑龙江</a></dd>
                <dd><a href="#">内蒙古</a></dd>
            </dl>
        </div>
        <div class="column-con">
            <div class="column-recommend">
                <h3><em class="ico">推荐</em><a target="_blank" href="#" class="cRed">2015年广州公务员考试时间：5月10日</a></h3>
                <ul class="list">
                    <li><a target="_blank" href="#" class="title">2015年山东公务员考试报名时间.年山东公务员考试报名时间年山东公务员考试报名时间年山东公务员考试报名时间年山东公务员考试报名时间</a><a target="_blank" href="#" class="comment">评论</a></li>
                    <li><a target="_blank" href="#" class="title">2015山东潍坊市公务员考试报名时间</a><a target="_blank" href="#" class="comment">评论</a></li>
                    <li><a target="_blank" href="#" class="title">2015山东烟台市公务员考试报名时间</a><a target="_blank" href="#" class="comment">评论</a></li>
                    <li><a target="_blank" href="#" class="title">2015山东东营市公务员考试报名时间</a><a target="_blank" href="#" class="comment">评论</a></li></ul>
            </div>
            <div class="column-list">
                <ul class="box-list">
                    <?php foreach($list as $k=>$v){
                        $article=\app\models\article\ArticleInfo::findOne($v->id);
                        ?>
                    <li>-  <a target="_blank" title="<?=$article->title?>" href="<?=\yii\helpers\Url::to(['/show/'.$v->id])?>"><?=$article->title?></a></li>
                    <?php }?>

                </ul>
                <div class="lmj-page-main">
                    <?php echo LinkPager::widget([
                        'pagination' => $pagination,
                    ]);?>
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
                    <li><a href="#" title="" target="_blank">2015年广东成人高考成绩什么时候查询？年广东成人高考成绩什么时候查询</a></li>
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

