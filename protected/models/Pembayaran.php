<?php

/**
 * This is the model class for table "pembayaran".
 *
 * The followings are the available columns in table 'pembayaran':
 * @property string $nokw
 * @property string $nosis
 * @property integer $jmlbayar
 * @property string $tgl_bayar
 * @property integer $jumlah
 * @property string $keterangan
 */
class Pembayaran extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pembayaran';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nokw, nosis, jmlbayar, tgl_bayar, keterangan', 'required'),
			array('jmlbayar', 'numerical', 'integerOnly'=>true),
			array('nokw', 'length', 'max'=>11),
			array('nosis', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('nokw, nosis, jmlbayar, tgl_bayar, keterangan', 'safe', 'on'=>'search'),
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
			'nokw' => 'Nokw',
			'nosis' => 'Nosis',
			'jmlbayar' => 'Jmlbayar',
			'tgl_bayar' => 'Tgl Bayar',
			'keterangan' => 'Keterangan',
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

		$criteria->compare('nokw',$this->nokw,true);
		$criteria->compare('nosis',$this->nosis,true);
		$criteria->compare('jmlbayar',$this->jmlbayar);
		$criteria->compare('tgl_bayar',$this->tgl_bayar,true);
		$criteria->compare('keterangan',$this->keterangan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pembayaran the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
