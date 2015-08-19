<?php

/**
 * This is the model class for table "job_application".
 *
 * The followings are the available columns in table 'job_application':
 * @property integer $id
 * @property integer $job_id
 * @property string $name
 * @property string $email
 * @property integer $mobile
 * @property string $url_github
 * @property string $url_behance
 * @property string $description
 * @property string $resume_path
 * @property string $remark
 * @property integer $status
 * @property string $applied_on
 */
class JobApplication extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'job_application';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('job_id, name, email, mobile, description, resume_path', 'required'),
            array('mobile', 'numerical', 'integerOnly' => true),
            array('name, email', 'length', 'max' => 50),
            array('url_github, url_behance, resume_path', 'length', 'max' => 100),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, job_id, name, email, mobile, url_github, url_behance, description, resume_path, remark, status, applied_on', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'job_id' => 'Job Id',
            'name' => 'Name',
            'email' => 'Email',
            'mobile' => 'Mobile',
            'url_github' => 'Url Github',
            'url_behance' => 'Url Behance',
            'description' => 'Description',
            'resume_path' => 'Resume Path',
            'remark' => 'Remark',
            'status' => 'Status',
            'applied_on' => 'Applied On',
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('job_id', $this->job_id);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('mobile', $this->mobile);
        $criteria->compare('url_github', $this->url_github, true);
        $criteria->compare('url_behance', $this->url_behance, true);
        $criteria->compare('description', $this->description, true);
        $criteria->compare('resume_path', $this->resume_path, true);
        $criteria->compare('remark', $this->remark, true);
        $criteria->compare('status', $this->status);
        $criteria->compare('applied_on', $this->applied_on, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return JobApplication the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}