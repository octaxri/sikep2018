<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trans_usulan_kpo".
 *
 * @property int $IdUsulanKPO
 * @property string $PeriodeUsulanKPO
 * @property string $TahunUsulanKPO
 * @property string $TanggalMulaiUsulanKPO
 * @property string $TanggalSelesaiUsulanKPO
 * @property string $StatusUsulanKPO
 */
class TransUsulanKpo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trans_usulan_kpo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdUsulanKPO', 'PeriodeUsulanKPO'], 'required'],
            [['IdUsulanKPO'], 'integer'],
            [['TanggalMulaiUsulanKPO', 'TanggalSelesaiUsulanKPO'], 'safe'],
            [['PeriodeUsulanKPO', 'StatusUsulanKPO'], 'string', 'max' => 1],
            [['TahunUsulanKPO'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdUsulanKPO' => 'Id Usulan Kpo',
            'PeriodeUsulanKPO' => 'Periode Usulan Kpo',
            'TahunUsulanKPO' => 'Tahun Usulan Kpo',
            'TanggalMulaiUsulanKPO' => 'Tanggal Mulai Usulan Kpo',
            'TanggalSelesaiUsulanKPO' => 'Tanggal Selesai Usulan Kpo',
            'StatusUsulanKPO' => 'Status Usulan Kpo',
        ];
    }
}
