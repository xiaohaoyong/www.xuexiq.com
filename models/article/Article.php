<?php

namespace app\models\article;

use Yii;

/**
 * This is the model class for table "{{%article}}".
 *
 * @property string $id
 * @property string $createtime
 * @property integer $channel
 * @property integer $cat
 * @property string $area
 * @property integer $source
 * @property string $datas
 * @property integer $level
 */
class Article extends \yii\db\ActiveRecord
{
    public static $catText=[
        0=>"考试动态",
        20=>"备考题库",
        1=>"最新资讯",
        14 => "通知公告",
        2 => "报名时间",
        15 => "职位表",
        //3=>"报名条件",
        4 => "考试时间",
        //5=>"考试科目",
        //6=>"考试大纲",
        7 => "准考证打印",
        8 => "成绩查询",
        //9=>"合格标准",
        10 => "考试真题",
        // 11=>"模拟试题",
        12 => "备考辅导",
        // 13=>"报考指南",
        16=>"报名条件",
        17=>"报名费用",
        18=>"资格复审",
        19=>"面试",
        21=>"模拟试题",
    ];
    public static $categoryP = [
        0=>'new',
        20=>'tiku',
        1=>"xinwen",
        14 => 'tongzhi',
        2 => 'baoming',
        15 => 'zhiwei',
        4 => 'kssj',
        7 => 'zkzdy',
        8 => 'cjcx',
        10 => 'kszt',
        12 => 'bkfd',
        16=> 'tiaojian',
        17=> 'feiyong'  ,
        18=> 'fushen'  ,
        19=> 'mianshi' ,
        21=> 'shiti'   ,
    ];
    public static function getCatP()
    {
        return implode(',',static::$categoryP);
    }

    public static $levelText=[
        0=>'已发布',
        -1=>'后台删除'
    ];
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%article}}';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('dbxxq');
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['createtime', 'channel', 'cat', 'area', 'source', 'datas', 'level'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '主键',
            'createtime' => '发布时间',
            'channel' => '所属频道',
            'cat' => '所属分类',
            'area' => '地区',
            'source' => '来源',
            'datas' => '文章日期',
            'level' => '等级',
        ];
    }
}
