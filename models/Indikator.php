<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "indikator".
 *
 * @property int $id_indikator
 * @property string|null $nama_indikator
 * @property int $id_elemen
 *
 * @property Elemen $elemen
 * @property PenilaianProdi[] $penilaianProdis
 */
class Indikator extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'indikator';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_indikator', 'id_elemen'], 'required'],
            [['id_indikator', 'id_elemen'], 'integer'],
            [['nama_indikator'], 'string', 'max' => 45],
            [['id_indikator'], 'unique'],
            [['id_elemen'], 'exist', 'skipOnError' => true, 'targetClass' => Elemen::class, 'targetAttribute' => ['id_elemen' => 'id_elemen']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_indikator' => 'Id Indikator',
            'nama_indikator' => 'Nama Indikator',
            'id_elemen' => 'Id Elemen',
        ];
    }

    /**
     * Gets query for [[Elemen]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getElemen()
    {
        return $this->hasOne(Elemen::class, ['id_elemen' => 'id_elemen']);
    }

    /**
     * Gets query for [[PenilaianProdis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianProdis()
    {
        return $this->hasMany(PenilaianProdi::class, ['id_indikator' => 'id_indikator']);
    }
}
