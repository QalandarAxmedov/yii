<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "xonalar".
 *
 * @property int $id
 * @property int $qavat_id
 * @property string $name
 */
class Xonalar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'xonalar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['qavat_id', 'name'], 'required'],
            [['qavat_id'], 'integer'],
            [['name'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'qavat_id' => 'Qavat ID',
            'name' => 'Name',
        ];
    }
}
