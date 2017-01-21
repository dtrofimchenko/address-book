<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "address_book".
 *
 * @property integer $id
 * @property string $name
 * @property string $surname
 * @property string $company
 * @property string $position
 * @property string $email_personal
 * @property string $email_work
 * @property string $phone_personal
 * @property string $phone_work
 * 
 * @property string $fullName
 */
class AddressBook extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'address_book';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'surname'], 'required'],
            [['name', 'surname', 'company', 'position'], 'string', 'max' => 100],
            [['email_personal', 'email_work'], 'string', 'max' => 254],
        	[['email_personal', 'email_work'], 'email'],
        	[['email_personal', 'email_work'], 'unique'],
            [['phone_personal', 'phone_work'], 'string', 'max' => 25],
        	[['phone_personal', 'phone_work'], 'unique'],
            [['company', 'position', 'email_personal', 'email_work', 'phone_personal', 'phone_work'], 'default', 'value' => null],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'surname' => 'Фамилия',
            'company' => 'Компания',
            'position' => 'Должность',
            'email_personal' => 'Личный email',
            'email_work' => 'Рабочий email',
            'phone_personal' => 'Личный телефон',
            'phone_work' => 'Рабочий телефон',
        ];
    }
    
    /**
     * @inheritdoc
     */
    public function fields() {
        $fields = parent::fields();
        $fields[] = 'fullName';
        return $fields;
    }
    
    /**
     * Returns full name.
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->name . ' ' . $this->surname;
    }
}
