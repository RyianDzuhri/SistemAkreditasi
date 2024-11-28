<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "universitas".
 *
 * @property int $id_universitas
 * @property string|null $nama_universitas
 *
 * @property Fakultas[] $fakultas
 */
class Universitas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'universitas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_universitas'], 'required'],
            [['id_universitas'], 'integer'],
            [['nama_universitas'], 'string', 'max' => 100],
            [['id_universitas'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_universitas' => 'Id Universitas',
            'nama_universitas' => 'Nama Universitas',
        ];
    }

    /**
     * Gets query for [[Fakultas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFakultas()
    {
        return $this->hasMany(Fakultas::class, ['id_universitas' => 'id_universitas']);
    }
}
