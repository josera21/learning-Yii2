<?php 

	namespace app\models;

	use yii\base\Model;


	/**
	* Creando el primer modelo
	*/
	class EntryForm extends Model
	{
		public $nombre;
		public $email;

		public function rules()
		{
			return [
				[['nombre', 'email'], 'required'],
				['email', 'email'],
			];
		}
	}

 ?>