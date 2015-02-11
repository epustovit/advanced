<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Orders".
 *
 * @property integer $Item_ID
 * @property integer $User_ID
 *
 * @property Items $item
 * @property User $user
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Orders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Item_ID', 'User_ID'], 'required'],
            [['Item_ID', 'User_ID'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Item_ID' => 'Item  ID',
            'User_ID' => 'User  ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItem()
    {
        return $this->hasOne(Items::className(), ['Item_ID' => 'Item_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'User_ID']);
    }
}
