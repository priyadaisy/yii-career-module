<?php

/**
 * This is the model class for table "job_description".
 *
 * The followings are the available columns in table 'job_description':
 * @property integer $id
 * @property string $job_title
 * @property string $job_kind
 * @property string $job_category
 * @property string $job_description_details
 * @property integer $status
 * @property string $created_on
 * @property string $update_on
 */
class JobDescription extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'job_description';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('job_title, job_kind, job_category, job_description_details', 'required'),
			array('status', 'numerical', 'integerOnly'=>true),
			array('job_title, job_kind', 'length', 'max'=>50),
			array('job_category', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, job_title, job_kind, job_category, job_description_details, status, created_on, update_on', 'safe', 'on'=>'search'),
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
			'job_title' => 'Job Title',
			'job_kind' => 'Job Kind',
			'job_category' => 'Job Category',
			'job_description_details' => 'Job Description Details',
			'status' => 'Status',
			'update_on' => 'Update On',
                        'created_on' => 'Created On',

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
		$criteria->compare('job_title',$this->job_title,true);
		$criteria->compare('job_kind',$this->job_kind,true);
		$criteria->compare('job_category',$this->job_category,true);
		$criteria->compare('job_description_details',$this->job_description_details,true);
		$criteria->compare('status',$this->status);
                $criteria->compare('created_on',$this->created_on,true);
		$criteria->compare('update_on',$this->update_on,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return JobDescription the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
