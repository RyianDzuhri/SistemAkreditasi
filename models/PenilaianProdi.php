<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "penilaian_prodi".
 *
 * @property int $id_penilaian
 * @property int $id_prodi
 * @property int $id_indikator
 * @property string|null $skor_penilaian
 * @property string|null $tgl_penilaian
 *
 * @property Indikator $indikator
 * @property Prodi $prodi
 */
class PenilaianProdi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penilaian_prodi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_penilaian', 'id_prodi', 'id_indikator'], 'required'],
            [['id_penilaian', 'id_prodi', 'id_indikator'], 'integer'],
            [['tgl_penilaian'], 'safe'],
            [['skor_penilaian'], 'string', 'max' => 45],
            [['id_penilaian', 'id_prodi', 'id_indikator'], 'unique', 'targetAttribute' => ['id_penilaian', 'id_prodi', 'id_indikator']],
            [['id_indikator'], 'exist', 'skipOnError' => true, 'targetClass' => Indikator::class, 'targetAttribute' => ['id_indikator' => 'id_indikator']],
            [['id_prodi'], 'exist', 'skipOnError' => true, 'targetClass' => Prodi::class, 'targetAttribute' => ['id_prodi' => 'id_prodi']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_penilaian' => 'Id Penilaian',
            'id_prodi' => 'Id Prodi',
            'id_indikator' => 'Id Indikator',
            'skor_penilaian' => 'Skor Penilaian',
            'tgl_penilaian' => 'Tgl Penilaian',
        ];
    }

    /**
     * Gets query for [[Indikator]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIndikator()
    {
        return $this->hasOne(Indikator::class, ['id_indikator' => 'id_indikator']);
    }

    /**
     * Gets query for [[Prodi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProdi()
    {
        return $this->hasOne(Prodi::class, ['id_prodi' => 'id_prodi']);
    }
}
