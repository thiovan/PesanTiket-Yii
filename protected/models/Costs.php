<?php

/**
 * This is the model class for table "costs".
 *
 * The followings are the available columns in table 'costs':
 * @property integer $id_cost
 * @property integer $id_airline
 * @property integer $id_origin
 * @property integer $id_destination
 * @property integer $adult
 * @property integer $child
 * @property integer $infant
 *
 * The followings are the available model relations:
 * @property Airlines $idAirline
 * @property Origins $idOrigin
 * @property Destinations $idDestination
 * @property Transactions[] $transactions
 */
class Costs extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'costs';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_airline, id_origin, id_destination, adult, child, infant', 'required'),
			array('id_airline, id_origin, id_destination, adult, child, infant', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_cost, id_airline, id_origin, id_destination, adult, child, infant', 'safe', 'on'=>'search'),
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
			'idAirline' => array(self::BELONGS_TO, 'Airlines', 'id_airline'),
			'idOrigin' => array(self::BELONGS_TO, 'Origins', 'id_origin'),
			'idDestination' => array(self::BELONGS_TO, 'Destinations', 'id_destination'),
			'transactions' => array(self::HAS_MANY, 'Transactions', 'id_cost'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_cost' => 'Id Cost',
			'id_airline' => 'Maskapai',
			'id_origin' => 'Kota Keberangkatan',
			'id_destination' => 'Kota Tujuan',
			'adult' => 'Ongkos Dewasa',
			'child' => 'Ongkos Anak-Anak',
			'infant' => 'Ongkos Bayi',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_cost',$this->id_cost);
		$criteria->compare('id_airline',$this->id_airline);
		$criteria->compare('id_origin',$this->id_origin);
		$criteria->compare('id_destination',$this->id_destination);
		$criteria->compare('adult',$this->adult);
		$criteria->compare('child',$this->child);
		$criteria->compare('infant',$this->infant);
		$criteria->compare('id_cost',$this->infant);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Costs the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function origins_list(){
		$result = Yii::app()->db->createCommand()
				->select('*')
				->from('origins')
				->queryAll();

		foreach ($result as $value) {
			$array[$value['id_origin']] = $value['city'];
		}
		return $array;
	}

	public function destinations_list(){
		$result = Yii::app()->db->createCommand()
				->select('*')
				->from('destinations')
				->queryAll();

		foreach ($result as $value) {
			$array[$value['id_destination']] = $value['city'];
		}
		return $array;
	}

	public function airline_list(){
		$result = Yii::app()->db->createCommand()
				->select('*')
				->from('airlines')
				->queryAll();

		foreach ($result as $value) {
			$array[$value['id_airline']] = $value['name'];
		}
		return $array;
	}

}
