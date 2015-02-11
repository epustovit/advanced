<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Items".
 *
 * @property integer $Item_ID
 * @property string $Name
 * @property string $Description
 * @property string $PhotoPath
 * @property string $Price
 * @property integer $Category_ID
 *
 * @property Categories $category
 * @property Orders[] $orders
 * @property Users[] $users
 */
class Items extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Items';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name', 'Category_ID'], 'required'],
            [['Price'], 'number'],
            [['Category_ID'], 'integer'],
            [['Name'], 'string', 'max' => 32],
            [['Description'], 'string', 'max' => 300],
            [['PhotoPath'], 'string', 'max' => 128]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Item_ID' => 'Item  ID',
            'Name' => 'Name',
            'Description' => 'Description',
            'PhotoPath' => 'Photo Path',
            'Price' => 'Price',
            'Category_ID' => 'Category  ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Categories::className(), ['Category_ID' => 'Category_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Orders::className(), ['Item_ID' => 'Item_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(Users::className(), ['User_ID' => 'User_ID'])->viaTable('Orders', ['Item_ID' => 'Item_ID']);
    }
}
