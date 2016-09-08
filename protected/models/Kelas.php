<?php

/**
 * This is the model class for table "kelas".
 *
 * The followings are the available columns in table 'kelas':
 * @property string $kdkelas
 * @property string $tglmulai
 * @property string $tglselesai
 * @property string $hari
 * @property string $waktu
 * @property string $pengajar
 */
class Kelas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'kelas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kdkelas, tglmulai, tglselesai, hari, waktu, pengajar, kd_paket', 'required'),
			array('kdkelas, pengajar', 'length', 'max'=>50),
			array('hari, waktu', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('kdkelas, tglmulai, tglselesai, hari, waktu, pengajar, kd_paket', 'safe', 'on'=>'search'),
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
			 'siswa'=>array(self::HAS_MANY, 'Kursus', 'kd_kelas'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'kdkelas' => 'Kode Kelas',
			'tglmulai' => 'Tanggal Mulai',
			'tglselesai' => 'Tanggal Selesai',
			'hari' => 'Hari',
			'waktu' => 'Waktu',
			'pengajar' => 'Pengajar',
			'kd_paket' => 'Kode Paket',
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

		$criteria->compare('kdkelas',$this->kdkelas,true);
		$criteria->compare('tglmulai',$this->tglmulai,true);
		$criteria->compare('tglselesai',$this->tglselesai,true);
		$criteria->compare('hari',$this->hari,true);
		$criteria->compare('waktu',$this->waktu,true);
		$criteria->compare('pengajar',$this->pengajar,true);
		$criteria->compare('kd_paket',$this->pengajar,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Kelas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
