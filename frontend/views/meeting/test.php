<pre>

<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use frontend\models\Issue;
use frontend\models\Country;

use function PHPUnit\Framework\isNull;

/** @var yii\web\View $this */
/** @var app\models\Meeting $model */
$forum_id = 3;
$data = array();
$categories = array();
$firstCategory = '';
$firstCategoryName = '';
$topics = array();
$query = Issue::find()
->select('nam_issue.meeting_id, nam_issue.category_id, nam_issue.topic_id, nam_category.name as category_name, nam_topic.name as topic_name, nam_topic.description as topic_description, nam_meeting.year as year')
->joinWith([
    'meeting' => function (\yii\db\ActiveQuery $query) use ($forum_id) { $query->andWhere('nam_meeting.forum_id=' . $forum_id);},
    'category',
    'topic'
])
->where('nam_issue.published > 0')
->orderBy('nam_meeting.year')
->limit(-1)
;
$command = $query->createCommand();
$issues = $command->queryAll();
echo "\n" . count($issues);
foreach($issues as $issue) {
    if(!isset($data[$issue['year']])) $data[$issue['year']] = array();
    if(!isset($categories[$issue['category_id']])) if(isset($issue['category_name'])) $categories[$issue['category_id']] = $issue['category_name'];
    //if(!isset($data[$issue['year'][$issue['category_id']]])) {
    if(!isset($data[$issue['year']][$issue['category_id']])) {
                if(empty($firstCategory)) {
                $firstCategory = $issue['category_id'];
                $firstCategoryName = $issue['category_name'];
                }
    }
    if(!isset($topics[$issue['category_id']])) $topics[$issue['category_id']] = array();
    if(isset($issue['topic_name'])) $topics[$issue['category_id']][$issue['topic_id']] = $issue['topic_name'] . '|' . $issue['topic_description'];
    if(!isset($data[$issue['year']][$issue['category_id']][$issue['topic_id']])) $data[$issue['year']][$issue['category_id']][$issue['topic_id']] = $issue['meeting_id'] . "|" . $issue['topic_name'];
    else {
        $data[$issue['year']][$issue['category_id']][$issue['topic_id']] = $issue['meeting_id'] . "," . $data[$issue['year']][$issue['category_id']][$issue['topic_id']];
    }

}
foreach($topics as &$cat) {
    asort($cat);
}

?>
<?= $firstCategoryName ?>

<?= print_r($categories) ?>

<?= print_r($topics) ?>

<?= print_r($data) ?>

</pre>

