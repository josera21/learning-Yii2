<?php 
	
namespace app\models;

use dektrium\user\models\RegistrationForm as BaseRegistrationForm;
use dektrium\user\models\User;
use dektrium\user\models\Profile;

class RegistrationForm extends BaseRegistrationForm
{
	public $name;
	public $role;

	public function rules()
	{
		$rules = parent::rules();
        //$rules['fieldRequired'] = ['role', 'required'];
        $rules['fieldLength']   = ['role', 'string', 'max' => 10];
        $rules[] = ['name','required'];
        return $rules;
	}

	public function attributeLabels()
	{
		$labels = parent::attributeLabels();
		$labels['name'] = \Yii::t('user', 'Full name');
		return $labels;
	}

	public function loadAttributes(User $user)
	{
		$user->setAttributes($this->attributes);

		$profile = \Yii::createObject(Profile::className());
		$profile->setAttributes([
			'name'=>$this->name,
		]);

		$user->setProfile($profile);
	}
}