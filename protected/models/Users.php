<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $id
 * @property string $nama_lengkap
 * @property string $jenis_kelamin
 * @property string $username
 * @property string $password
 */
class Users extends CActiveRecord
{
	public $passwordd;
	public $verifyCode;

	/**
	 * Returns the static model of the specified AR class.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama_lengkap, jenis_kelamin, username, password', 'required'),
			array('nama_lengkap', 'length', 'max'=>64),
			array('jenis_kelamin', 'length', 'max'=>16),
			array('username, password', 'length', 'max'=>16),
			// verifyCode needs to be entered correctly
			array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nama_lengkap, jenis_kelamin, username, password', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nama_lengkap' => 'Nama Lengkap',
			'jenis_kelamin' => 'Jenis Kelamin',
			'username' => 'Username',
			'password' => 'Password',
			'verifyCode'=>'Verification Code',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('nama_lengkap',$this->nama_lengkap,true);
		$criteria->compare('jenis_kelamin',$this->jenis_kelamin,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	//check if the password is matched with stored encrypted password
	public function check($value){
		$new_password = $value;
		if($new_password == $this->password){
			return true;
		}
		return false;
	}

	public static function jenis_kelamin(){
		return array(
			'Laki-Laki'=>'Laki-Laki',
			'Perempuan'=>'Perempuan',
			);
	}
}