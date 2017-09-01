<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<header>
    <div class="wx-wrap">
        <div class="wx-header">
            <div class="wx-logo">
                <a href="/" title="学习圈"><img src="/images/logo.png" height="58" width="211" alt=""></a>
            </div>
            <div class="wx-search">
                <input type="text" class="keyword" placeholder="请输入关键词">
                <button class="btn-tj"><b>搜索</b></button>
            </div>
        </div>
    </div>
    <div class="wx-ej-daohang">
        <div class="wx-wrap">
            <ul>
                <li><a href="/" class="active">首页</a></li>
                <li><?=\yii\helpers\Html::a("考试动态",['/gwy/new'])?></li>
                <li><?=\yii\helpers\Html::a("报名时间",['/gwy/baoming'])?></li>
                <li><?=\yii\helpers\Html::a("职位表",['/gwy/zhiwei'])?></li>
                <li><?=\yii\helpers\Html::a("准考证打印",['/gwy/zkzdy'])?></li>
                <li><?=\yii\helpers\Html::a("考试时间",['/gwy/kssj'])?></li>
                <li><?=\yii\helpers\Html::a("成绩查询",['/gwy/cjcx'])?></li>
                <li><?=\yii\helpers\Html::a("真题答案",['/gwy/kszt'])?></li>
                <li><?=\yii\helpers\Html::a("模拟试题",['/gwy/shiti'])?></li>
            </ul>
        </div>
    </div>
</header>
    <?= $content ?>

<footer>
    <div class="footerbox1" id="ft"><!--必须写id  来判断当侧导航滚动到底部时停止-->
        <div class="wx-wrap">
            <!--底部导航-->
            <div class="f-nav">
                <dl>
                    <dt class="f-nav-title">如何购买</dt>
                    <dd><a href="#" title="" target="_blank">如何注册用户名</a></dd>
                    <dd><a href="#" title="" target="_blank">订购方式</a></dd>
                    <dd><a href="#" title="" target="_blank">购课流程</a></dd>
                    <dd><a href="#" title="" target="_blank">激活课程方法</a></dd>
                    <dd><a href="#" title="" target="_blank">优惠券使用流程</a></dd>
                </dl>
                <dl>
                    <dt class="f-nav-title">课程与订单</dt>
                    <dd><a href="#" title="" target="_blank">如何查询订单情况</a></dd>
                    <dd><a href="#" title="" target="_blank">退换课规定</a></dd>
                    <dd><a href="#" title="" target="_blank">如何休学</a></dd>
                    <dd><a href="#" title="" target="_blank">课程升级与操作方法说明</a></dd>
                </dl>
                <dl>
                    <dt class="f-nav-title">听课卡充值</dt>
                    <dd><a href="#" title="" target="_blank">听课卡地区限制</a></dd>
                    <dd><a href="#" title="" target="_blank">听课卡充值及使用方法</a></dd>
                </dl>
                <dl>
                    <dt class="f-nav-title">售后服务</dt>
                    <dd><a href="#" title="" target="_blank">开具发票的事宜</a></dd>
                    <dd><a href="#" title="" target="_blank">如何找回用户名和密码</a></dd>
                    <dd><a href="#" title="" target="_blank">视频课程播放卡顿情况</a></dd>
                    <dd><a href="#" title="" target="_blank">插件下载</a></dd>
                    <dd><a href="#" title="" target="_blank">课程功能使用说明</a></dd>
                </dl>
                <dl class="lastdl">
                    <dt class="f-nav-title"><a href="#" title="" target="_blank">各地购课</a></dt>
                    <dd><a href="#" title="" target="_blank">北京</a><a href="#" title="" target="_blank">天津</a><a href="#" title="" target="_blank">上海</a><a href="#" title="" target="_blank">江苏</a><a href="#" title="" target="_blank">浙江</a><a href="#" title="" target="_blank">山东</a><a href="#" title="" target="_blank">江西</a><a href="#" title="" target="_blank">安徽</a><a href="#" title="" target="_blank">福建</a><a href="#" title="" target="_blank">广东</a><a href="#" title="" target="_blank">吉林</a><a href="#" title="" target="_blank">辽宁</a><a href="#" title="" target="_blank">广西</a><a href="#" title="" target="_blank">山西</a><a href="#" title="" target="_blank">河南</a><a href="#" title="" target="_blank">河北</a><a href="#" title="" target="_blank">湖南</a><a href="#" title="" target="_blank">湖北</a><a href="#" title="" target="_blank">四川</a><a href="#" title="" target="_blank">重庆</a><a href="#" title="" target="_blank">新疆</a><a href="#" title="" target="_blank">陕西</a><a href="#" title="" target="_blank">宁夏</a><a href="#" title="" target="_blank">西藏</a><a href="#" title="" target="_blank">海南</a><a href="#" title="" target="_blank">台湾</a><a href="#" title="" target="_blank">贵州</a><a href="#" title="" target="_blank">黑龙江</a><a href="#" title="" target="_blank">青海</a><a href="#" title="" target="_blank">甘肃</a><a href="#" title="" target="_blank">内蒙古</a></dd>
                </dl>
            </div>
            <!--友情链接-->
            <div class="f-link">
                <dl>
                    <dt class="f-link-title">友情链接：</dt>
                    <dd>
                        <a href="#" title="" target="_blank">腾讯教育</a>
                        <a href="#" title="" target="_blank">新浪教育</a>
                        <a href="#" title="" target="_blank">网易教育</a>
                        <a href="#" title="" target="_blank">21CN教育</a>
                        <a href="#" title="" target="_blank">233网校</a>
                        <a href="#" title="" target="_blank">无忧考网</a>
                        <a href="#" title="" target="_blank">考试吧</a>
                        <a href="#" title="" target="_blank">考研网</a>
                        <a href="#" title="" target="_blank">可可英语</a>
                        <a href="#" title="" target="_blank">查查在线词典</a>
                        <a href="#" title="" target="_blank">公务员考试网</a>
                        <a href="#" title="" target="_blank">在线英语听力室</a>
                        <a href="#" title="" target="_blank">中学学科网</a>
                        <a href="#" title="" target="_blank">爱思英语</a>
                        <a href="#" title="" target="_blank">豆丁网</a>
                        <a href="#" title="" target="_blank">听力课堂</a>
                        <a href="#" title="" target="_blank">青年人网</a>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
    <!--版权所有-->
    <div class="footercopyright">
        <div class="wx-wrap">
            <p>
                <a href="#" title="" target="_blank">关于我们</a>
                <span>-</span>
                <a href="#" title="" target="_blank">商务合作</a>
                <span>-</span>
                <a href="#" title="" target="_blank">广告服务</a>
                <span>-</span>
                <a href="#" title="" target="_blank">代理商区域</a>
                <span>-</span>
                <a href="#" title="" target="_blank">客服中心</a>
                <span>-</span>
                <a href="#" title="" target="_blank">在线留言</a>
                <span>-</span>
                <a href="#" title="" target="_blank">合作伙伴</a>
                <span>-</span>
                <a href="#" title="" target="_blank">联系我们</a>
                <span>-</span>
                <a href="#" title="" target="_blank">人员招聘</a>
                <span>-</span>
                <a href="#" title="" target="_blank">网站地图</a>
                <span>-</span>
                <a href="#" title="" target="_blank">热点关注</a>
                <span>-</span>
                <a href="#" title="" target="_blank">寓乐优学</a>
            </p>
            <p>新东方教育科技集团旗下成员公司&nbsp;&nbsp;全国客服专线：<strong>400-676-2300</strong></p>
            <p>Copyright&nbsp;&copy;2000-2015&nbsp;&nbsp;<strong><a href="#" title="" target="_blank">koolearn.com</a></strong>&nbsp;&nbsp;Inc.All rights reserved.&nbsp;&nbsp;新东方在线&nbsp;&nbsp;版权所有</p>
            <p><a href="#" title="" target="_blank">京ICP050421号</a>&nbsp;&nbsp;<a href="#" title="" target="_blank">京ICP备<b>05067669</b>号</a>&nbsp;&nbsp;京公网安备<b>11010802017616</b>号&nbsp;&nbsp;<a href="#" title="" target="_blank">网络视听许可证<b>0110531</b></a>&nbsp;&nbsp;<a href="#" title="" target="_blank">京网文[<b>2012</b>]<b>0651-208</b>号</a></p>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
