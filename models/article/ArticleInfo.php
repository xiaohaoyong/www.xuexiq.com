<?php

namespace app\models\article;

use Yii;

/**
 * This is the model class for table "{{%article_info}}".
 *
 * @property string $aid
 * @property string $content
 * @property string $title
 * @property integer $page
 */
class ArticleInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%article_info}}';
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
            [['aid', 'page'], 'integer'],
            [['content'], 'required'],
            [['content'], 'string'],
            [['title'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'aid' => '主表ID',
            'content' => '内容',
            'title' => '标题',
            'page' => '页号',
        ];
    }
}
