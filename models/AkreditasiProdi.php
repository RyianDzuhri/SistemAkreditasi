<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "akreditasi_prodi".
 *
 * @property int $id_akreditasi
 * @property int $id_prodi
 * @property int $id_la
 * @property string|null $histori_akreditasi
 * @property string|null $tgl_mulai
 * @property string|null $tgl_berakhir
 *
 * @property LembagaAkreditasi $la
 * @property Prodi $prodi
 */
class AkreditasiProdi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'akreditasi_prodi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_akreditasi', 'id_prodi', 'id_la'], 'required'],
            [['id_akreditasi', 'id_prodi', 'id_la'], 'integer'],
            [['tgl_mulai', 'tgl_berakhir'], 'safe'],
            [['histori_akreditasi'], 'string', 'max' => 255],
            [['id_akreditasi'], 'unique'],
            [['id_la'], 'exist', 'skipOnError' => true, 'targetClass' => LembagaAkreditasi::class, 'targetAttribute' => ['id_la' => 'id_la']],
            [['id_prodi'], 'exist', 'skipOnError' => true, 'targetClass' => Prodi::class, 'targetAttribute' => ['id_prodi' => 'id_prodi']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_akreditasi' => 'Id Akreditasi',
            'id_prodi' => 'Id Prodi',
            'id_la' => 'Id La',
            'histori_akreditasi' => 'Histori Akreditasi',
            'tgl_mulai' => 'Tgl Mulai',
            'tgl_berakhir' => 'Tgl Berakhir',
        ];
    }

    /**
     * Gets query for [[La]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLa()
    {
        return $this->hasOne(LembagaAkreditasi::class, ['id_la' => 'id_la']);
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
