<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%nam_meeting}}".
 *
 * @property int $id
 * @property string $title
 * @property int|null $month
 * @property int $year
 * @property int $city_id
 * @property int $forum_id
 * @property int $chair_id
 * @property int $review_cycle_id
 * @property int $created
 * @property string $modified
 */
class Meeting extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%nam_meeting}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'year', 'city_id', 'forum_id', 'chair_id', 'created'], 'required'],
            [['month', 'year', 'city_id', 'forum_id', 'chair_id', 'review_cycle_id', 'created'], 'integer'],
            [['modified'], 'safe'],
            [['title'], 'string', 'max' => 2012],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'month' => 'Month',
            'year' => 'Year',
            'city_id' => 'City ID',
            'forum_id' => 'Forum ID',
            'chair_id' => 'Chair ID',
            'review_cycle_id' => 'Review Cycle',
            'created' => 'Created',
            'modified' => 'Modified',
        ];
    }
    
	public $months = array(
		'1'=>'January',
		'2'=>'February',
		'3'=>'March',
		'4'=>'April',
		'5'=>'May',
		'6'=>'June',
		'7'=>'July',
		'8'=>'August',
		'9'=>'September',
		'10'=>'October',
		'11'=>'November',
		'12'=>'December',
	);

    /**
     * Database relational definitions
     */
    
     public function getForum() //Select * from nam_forum where id = forum_id
    {
        return $this->hasOne(Forum::class, ['id' => 'forum_id'])->inverseOf('meetings');
    }

    public function getCity()  //Select * from nam_city where id = city_id
    {
        return $this->hasOne(City::class, ['id' => 'city_id'])->inverseOf('meetings');
    }

    public function getChair()  // Select * from nam_country where id = chair_id
    {
        return $this->hasOne(Country::class, ['id' => 'chair_id'])->inverseOf('meetings');
    }

    public function getIssues() {
        return $this->hasMany(Issue::class, ['meeting_id', 'id'])->inverseOf('meeting');
    }

    public function getReviewCycle() {  
        return $this->hasOne(ReviewCycle::class, ['id' => 'review_cycle_id']);
    }
}
