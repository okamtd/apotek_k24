<?php

/**
 * This is the model class for table "reg_member".
 *
 * The followings are the available columns in table 'reg_member':
 * @property integer $id_mem
 * @property string $nama_mem
 * @property string $alamat_mem
 * @property string $tgllahir_mem
 * @property string $email_mem
 * @property string $notelf_mem
 */
class RegMember extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'reg_member';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama_mem, alamat_mem, tgllahir_mem, email_mem, notelf_mem', 'required'),
			array('nama_mem, email_mem', 'length', 'max'=>50),
			array('alamat_mem', 'length', 'max'=>100),
			array('notelf_mem', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_mem, nama_mem, alamat_mem, tgllahir_mem, email_mem, notelf_mem', 'safe', 'on'=>'search'),
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
			'id_mem' => 'Id Mem',
			'nama_mem' => 'Nama Mem',
			'alamat_mem' => 'Alamat Mem',
			'tgllahir_mem' => 'Tgllahir Mem',
			'email_mem' => 'Email Mem',
			'notelf_mem' => 'Notelf Mem',
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

		$criteria->compare('id_mem',$this->id_mem);
		$criteria->compare('nama_mem',$this->nama_mem,true);
		$criteria->compare('alamat_mem',$this->alamat_mem,true);
		$criteria->compare('tgllahir_mem',$this->tgllahir_mem,true);
		$criteria->compare('email_mem',$this->email_mem,true);
		$criteria->compare('notelf_mem',$this->notelf_mem,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return RegMember the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
