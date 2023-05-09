<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%mahasiswa}}".
 *
 * @property string $nim
 * @property string $nama
 * @property string $kelas
 */
class Mahasiswa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%mahasiswa}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim', 'nama', 'kelas'], 'required'],
            [['kelas'], 'string'],
            [['nim'], 'string', 'max' => 11],
            [['nama'], 'string', 'max' => 50],
            [['nim'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nim' => Yii::t('app', 'Nim'),
            'nama' => Yii::t('app', 'Nama'),
            'kelas' => Yii::t('app', 'Kelas'),
        ];
    }
}
