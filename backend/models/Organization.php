<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%nam_organization}}".
 *
 * @property int $id
 * @property string $name
 * @property int $active
 * @property string $nam
 * @property string $nam_summit_chair
 * @property string|null $iaea
 * @property string|null $npt
 * @property string|null $bwc
 * @property string|null $cwc
 * @property string|null $ctbt
 * @property string|null $g77
 */
class Organization extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%nam_organization}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'active', 'nam', 'nam_summit_chair'], 'required'],
            [['active'], 'integer'],
            [['name'], 'string', 'max' => 80],
            [['nam', 'nam_summit_chair', 'iaea', 'npt', 'bwc', 'cwc', 'ctbt', 'g77'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'active' => 'Active',
            'nam' => 'Nam',
            'nam_summit_chair' => 'Nam Summit Chair',
            'iaea' => 'Iaea',
            'npt' => 'Npt',
            'bwc' => 'Bwc',
            'cwc' => 'Cwc',
            'ctbt' => 'Ctbt',
            'g77' => 'G77',
        ];
    }
}
