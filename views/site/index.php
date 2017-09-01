<?php

/* @var $this yii\web\View */

$this->title = '学习圈';
$this->registerCssFile('/css/index.css');

?>
<section>
    <div class="wx-wrap mg10">
        <div class="snav wx-cat">
            <div class="cat-head">
                <i class="cat-head-icon"></i>
                全部地区
            </div>
            <dl class="cat-bd">
                <div class="catbox">
                    <dt class="catbox-title">华东</dt>
                    <dd class="catbox-dd">
                        <?=\yii\helpers\Html::a("山东",['/gwy/shandong'])?>、
                        <?=\yii\helpers\Html::a("江苏",['/gwy/jiangsu'])?>、
                        <?=\yii\helpers\Html::a("安徽",['/gwy/anhui'])?>、
                        <?=\yii\helpers\Html::a("浙江",['/gwy/zhejiang'])?>、
                        <?=\yii\helpers\Html::a("福建",['/gwy/fujian'])?>、
                        <?=\yii\helpers\Html::a("上海",['/gwy/shanghai'])?>
                    </dd>
                </div>
                <div class="catbox">
                    <dt class="catbox-title">华南</dt>
                    <dd class="catbox-dd">
                        <?=\yii\helpers\Html::a("广东",['/gwy/guangdong'])?>、
                        <?=\yii\helpers\Html::a("广西",['/gwy/guangxi'])?>、
                        <?=\yii\helpers\Html::a("海南",['/gwy/hainan'])?>
                    </dd>
                </div>
                <div class="catbox">
                    <dt class="catbox-title">华中</dt>
                    <dd class="catbox-dd">
                        <?=\yii\helpers\Html::a("湖北",['/gwy/hubei'])?>、
                        <?=\yii\helpers\Html::a("湖南",['/gwy/hunan'])?>、
                        <?=\yii\helpers\Html::a("河南",['/gwy/henan'])?>、
                        <?=\yii\helpers\Html::a("江西",['/gwy/jiangxi'])?>
                    </dd>
                </div>
                <div class="catbox">
                    <dt class="catbox-title">华北</dt>
                    <dd class="catbox-dd">
                        <?=\yii\helpers\Html::a("北京",['/gwy/beijing'])?>、
                        <?=\yii\helpers\Html::a("天津",['/gwy/tianjin'])?>、
                        <?=\yii\helpers\Html::a("河北",['/gwy/hebei'])?>、
                        <?=\yii\helpers\Html::a("山西",['/gwy/shanxi'])?>、
                        <?=\yii\helpers\Html::a("内蒙古",['/gwy/neimeng'])?>
                    </dd>
                </div>
                <div class="catbox">
                    <dt class="catbox-title">西北</dt>
                    <dd class="catbox-dd">
                        <?=\yii\helpers\Html::a("宁夏",['/gwy/ningxia'])?>、
                        <?=\yii\helpers\Html::a("新疆",['/gwy/xinjiang'])?>、
                        <?=\yii\helpers\Html::a("青海",['/gwy/qinghai'])?>、
                        <?=\yii\helpers\Html::a("陕西",['/gwy/shanxi'])?>、
                        <?=\yii\helpers\Html::a("甘肃",['/gwy/gansu'])?>
                    </dd>
                </div>
                <div class="catbox">
                    <dt class="catbox-title">西南</dt>
                    <dd class="catbox-dd">
                        <?=\yii\helpers\Html::a("四川",['/gwy/sichuan'])?>、
                        <?=\yii\helpers\Html::a("云南",['/gwy/yunnan'])?>、
                        <?=\yii\helpers\Html::a("贵州",['/gwy/guizhou'])?>、
                        <?=\yii\helpers\Html::a("西藏",['/gwy/xizang'])?>、
                        <?=\yii\helpers\Html::a("重庆",['/gwy/chongqing'])?>
                    </dd>
                </div>
                <div class="catbox">
                    <dt class="catbox-title">东北</dt>
                    <dd class="catbox-dd">
                        <?=\yii\helpers\Html::a("辽宁",['/gwy/liaoning'])?>、
                        <?=\yii\helpers\Html::a("吉林",['/gwy/jilin'])?>、
                        <?=\yii\helpers\Html::a("黑龙江",['/gwy/heilongjiang'])?>
                    </dd>
                </div>
            </dl>
        </div>
        <div class="navwp wx-wrap-r">
            <!--幻灯-->
            <div id="focus">
                <ul>
                    <li><a href="" target="_blank"><img src="images/1.jpg" alt="" width="565" height="373" /></a></li>
                    <li><a href="" target="_blank"><img src="images/2.jpg" alt="" width="565" height="373" /></a></li>
                    <li><a href="" target="_blank"><img src="images/3.jpg" alt="" width="565" height="373" /></a></li>
                </ul>
            </div>
            <!--日历表-->
            <div class="wx-calendar">
                <div class="calendar-main-title">2015年各省市考试日历表</div>
                <ul class="calendar-sub-title">
                    <li>考试名称</li>
                    <li>考试时间</li>
                    <li>辅导</li>
                </ul>
                <ul class="calendar-bd">
                    <li><span>银行从业</span><span class="color1">10.31-11.1</span><span>网校模拟考场</span></li>
                    <li><span>银行从业</span><span class="color1">10.31-11.1</span><span>网校模拟考场</span></li>
                    <li><span>银行从业</span><span class="color1">10.31-11.1</span><span>网校模拟考场</span></li>
                    <li><span>银行从业</span><span class="color1">10.31-11.1</span><span>网校模拟考场</span></li>
                    <li><span>银行从业</span><span class="color1">10.31-11.1</span><span>网校模拟考场</span></li>
                    <li><span>银行从业</span><span class="color1">10.31-11.1</span><span>网校模拟考场</span></li>

                </ul>
                <div class="calendar-btn">
                    <a href="#" title="" target="_blank">免费注册</a>
                    <a href="#" title="" target="_blank">免费注册</a>
                </div>
            </div>
        </div>
    </div>
    <div class="wx-wrap">
        <div id="f1" class="conbx1 wx-newslist">
            <div class="f-titlediv">
                <div class="f-title">出国留学</div>
                <ul class="f-tab">
                    <li><a href="javascript:;" id="conn1" class="active">雅思</a></li>
                </ul>
            </div>
            <div class="f-con" id="con_conn_1">
                <div class="f-con1">
                    <div class="f-header"><a href="#" title="" target="_blank">GRE资讯</a></div>
                    <ul class="f-list">
                        <li><a href="#" title="" target="_blank">GRE分数要求330分以上的美国大学名单</a></li>
                        <li><a href="#" title="" target="_blank">GRE分数要求330分以上的美国大学名单</a></li>
                        <li><a href="#" title="" target="_blank">GRE分数要求330分以上的美国大学名单</a></li>
                        <li><a href="#" title="" target="_blank">GRE分数要求330分以上的美国大学名单</a></li>
                        <li><a href="#" title="" target="_blank">GRE分数要求330分以上的美国大学名单</a></li>
                        <li><a href="#" title="" target="_blank">GRE分数要求330分以上的美国大学名单</a></li>
                        <li><a href="#" title="" target="_blank">GRE分数要求330分以上的美国大学名单</a></li>
                        <li><a href="#" title="" target="_blank">GRE分数要求330分以上的美国大学名单</a></li>
                        <li><a href="#" title="" target="_blank">GRE分数要求330分以上的美国大学名单</a></li>
                        <li><a href="#" title="" target="_blank">GRE分数要求330分以上的美国大学名单</a></li>
                    </ul>
                </div>
                <div class="f-con1">
                    <div class="f-header"><a href="#" title="" target="_blank">GRE资讯</a></div>
                    <ul class="f-list">
                        <li><a href="#" title="" target="_blank">GRE分数要求330分以上的美国大学名单</a></li>
                        <li><a href="#" title="" target="_blank">GRE分数要求330分以上的美国大学名单</a></li>
                        <li><a href="#" title="" target="_blank">GRE分数要求330分以上的美国大学名单</a></li>
                        <li><a href="#" title="" target="_blank">GRE分数要求330分以上的美国大学名单</a></li>
                        <li><a href="#" title="" target="_blank">GRE分数要求330分以上的美国大学名单</a></li>
                        <li><a href="#" title="" target="_blank">GRE分数要求330分以上的美国大学名单</a></li>
                        <li><a href="#" title="" target="_blank">GRE分数要求330分以上的美国大学名单</a></li>
                        <li><a href="#" title="" target="_blank">GRE分数要求330分以上的美国大学名单</a></li>
                        <li><a href="#" title="" target="_blank">GRE分数要求330分以上的美国大学名单</a></li>
                        <li><a href="#" title="" target="_blank">GRE分数要求330分以上的美国大学名单</a></li>
                    </ul>
                </div>
                <div class="f-con2">
                    <div><a href="#" title="" target="_blank"><img src="images/ggw3.jpg" height="140" width="220" alt=""></a></div>
                    <div><a href="#" title="" target="_blank"><img src="images/ggw2.jpg" height="95" width="220" alt=""></a></div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="wx-wrap">
        <div class="wx-ggw">
            <a href="#"><img src="images/ggw1.jpg" height="90" width="837" alt=""></a>
        </div>
    </div>

</section>