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
            [['ism', 'familiya', 'otasining_ismi'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ism' => 'Ism',
            'familiya' => 'Familiya',
            'otasining_ismi' => 'Otasining Ismi',
            'region_id' => 'Region ID',
            'district_id' => 'District ID',
            'fakultet_id' => 'Fakultet ID',
            'kurs_id' => 'Kurs ID',
            'guruh_id' => 'Guruh ID',
            'yunalish_id' => 'Yunalish ID',
            'edlang_id' => 'Edlang ID',
            'edtype_id' => 'Edtype ID',
            'bino_id' => 'Bino ID',
            'qavat_id' => 'Qavat ID',
            'xona_id' => 'Xona ID',
        ];
    }
}
