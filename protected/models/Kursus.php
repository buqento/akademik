<?php

/**
 * This is the model class for table "kursus".
 *
 * The followings are the available columns in table 'kursus':
 * @property integer $id
 * @property string $nosis
 * @property string $kd_kelas
 * @property string $kd_paket
 */
class Kursus extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'kursus';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nosis, kd_kelas, kd_paket', 'required'),
			array('nosis', 'length', 'max'=>12),
			array('kd_kelas, kd_paket', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nosis, kd_kelas, kd_paket', 'safe', 'on'=>'search'),
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
		'kelas' => array(self::BELONGS_TO,'Kelas','kd_kelas')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nosis' => 'Nosis',
			'kd_kelas' => 'Kd Kelas',
			'kd_paket' => 'Kd Paket',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('nosis',$this->nosis,true);
		$criteria->compare('kd_kelas',$this->kd_kelas,true);
		$criteria->compare('kd_paket',$this->kd_paket,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Kursus the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
