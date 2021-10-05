<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "talaba".
 *
 * @property int $id
 * @property string $ism
 * @property string $familiya
 * @property string|null $otasining_ismi
 * @property int $region_id
 * @property int $district_id
 * @property int $fakultet_id
 * @property int $kurs_id
 * @property int $guruh_id
 * @property int $yunalish_id
 * @property int $edlang_id
 * @property int $edtype_id
 * @property int $bino_id
 * @property int $qavat_id
 * @property int $xona_id
 */
class Talaba extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'talaba';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ism', 'familiya', 'region_id', 'district_id', 'fakultet_id', 'kurs_id', 'guruh_id', 'yunalish_id', 'edlang_id', 'edtype_id', 'bino_id', 'qavat_id', 'xona_id'], 'required'],
            [['region_id', 'district_id', 'fakultet_id', 'kurs_id', 'guruh_id', 'yunalish_id', 'edlang_id', 'edtype_id', 'bino_id', 'qavat_id', 'xona_id'], 'integer'],
            [['ism', 'familiya', 'otasining_ismi'], 'string', 'max' => 45, 'message' => Yii::t('app', 'This field is required')],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ism' => false,
            'familiya' => false,
            'otasining_ismi' => false,
            'region_id' => false,
            'district_id' => false,
            'fakultet_id' => false,
            'kurs_id' => false,
            'guruh_id' => false,
            'yunalish_id' => false,
            'edlang_id' => false,
            'edtype_id' => false,
            'bino_id' => false,
            'qavat_id' => false,
            'xona_id' => false,
        ];
    }
}
