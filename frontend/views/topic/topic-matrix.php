<?php
/** @var yii\web\View $this */
/** @var string header */
/** @var int forum_id */
/** 
 * @var array $data
 * [year][category_id]][topic_id] = [meeting_id]|[topic_name];
*/
/** @var array $topics */
/** @var array $categories */
/** @var int $firstCategory */
/** @var string $firstCategoryName */
/** @#var string $url */

use yii\web\View;
//use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
$this->registerCss(<<< EOD0
#column_sidebar {
	display: none;
}
#issue-window {
	display:none;
	position: absolute;
	z-index: 100;
	padding: 20px;
	border: 1px solid #cccccc;
	background-color:aliceBlue;
}

#issue-buttons {
	margin-bottom:20px;
	margin-right: 20px;
	margin-top: 0;
	padding-top: 0;
	float:right;
	border-bottom: 1px solid #69C;
}

td {
	text-align: center;
	border: 1px solid #9CF;
}

tr.odd {
	background-color: aliceBlue;
}

thead td {
	background: #E0E8F8!important;
	border: 1px solid #9CF!important;
	border-bottom: 2px solid #69C!important;
	xxfont-weight: normal!important;
	font-size: 0.8em!important;
	color: #444!important;
	cursor: default!important;
}

a,a:hover {
	text-decoration: none;
}
EOD0
);
$this->registerJS(<<< EOD
	function buildMatrix(cid) {
		var headers='<tr><th scope="col">Year</th>';
		$.each(topics[cid],function(tid,tvalue){
				parts = tvalue.split('|');
				var tname = parts[0];
				var tdescription = parts[1];
				var meetingId = "";
				var year = "";
				var id = meetingId + "|" + cid + "|" + tid + "|" + year + "|" + currentCategory;
				//console.log(id);
				//headers += '<th scope="col"> <a title="' + tdescription + '" href="/index.php/issue/issue-by?forum_id=' + fid + '&topic_id=' + tid + '&topic_name=' + tname + '&header=' + encodeURIComponent(header) + '">' + tname + '</a></td>';
				headers += '<th id="' + id + '" scope="col" onclick="showIssue(this.id)"><a href="javascript:void()">' + tname + '</a></td>';
		});
		headers += '</th>';
		
		var table = '<table class="table table-striped table-bordered table-sm">';
		var cells = '';
		var row = 0;
		$.each(data,function(year,categories){
			//var rowClass = row % 2 > 0 ? ' class="odd" ' : '';
			cells += '<tr>';
			cells += '<td>';
			var meetingId = "";
			var tid = "";
			var id = meetingId + "|" + cid + "|" + tid + "|" + year + "|" + currentCategory;
			//if(typeof (data[year]) != 'undefined' && typeof (data[year][cid]) != 'undefined') cells += '<a title="View all issues for this year" href="/nam/index.php/site/issuesByYear?fid=' + fid + '&y=' + year + '&cid=' + cid + '&cname=' + currentCategory + '">' + year + '</a>';
			if(typeof (data[year]) != 'undefined' && typeof (data[year][cid]) != 'undefined') cells += '<a id="' + id + '" title="View all ' + year + ' ' + header + '" href="javascript:void()" onclick="showIssue(this.id)">' + year + '</a>';
			else cells += year;
			cells += '</td>';
			var column = 1;
			$.each(topics[cid],function(tid,tname){
				if(typeof (data[year]) != 'undefined' && typeof (data[year][cid]) != 'undefined' && typeof (data[year][cid][tid]) !== 'undefined') {
						var parts = data[year][cid][tid].split('|');
						var meetingId = parts[0]; 
						//var topicName = parts[1];
						var id = meetingId + "|" + cid + "|" + tid + "|" + year + "|" + currentCategory;
						cells += '<td id="' + id + '" onclick="showIssue(this.id)"><a href="javascript:void()"><sup>✔</sup></a></td>';
					}
					else {
						cells += '<td> &nbsp; </td>';
					}
			});
			cells += '</tr>';
			row++;
		});
		table += '<thead>' + headers + '</thead><tbody class="table-group-divider">' + cells + '</tbody></table>';
		//$('#log').val(table);
		$('#table_div').empty().append(table);
	}
	function showIssue(id) {
		console.log(id);
		var parts = id.split('|');
		var meetingId = parts[0];
		var categoryId = parts[1];
		var topicId = parts[2];
        var year = parts[3];
        var categoryName = parts[4];
		var topicName = "";
		try {
			parts = topics[categoryId][topicId].split('|');
			var topicName = parts[0];
		} catch(error) {}	
		var action = url + "?forum_id=" + fid + "&meeting_id=" + meetingId + "&category_id=" + categoryId + "&topic_id=" + topicId + "&tname=" + encodeURIComponent(topicName) + "&year=" + year + "&cname=" + encodeURIComponent(categoryName) + "&header=" + encodeURIComponent(header) ;
        //alert(action);
        //document.location.assign(action);
        window.open(action,'NAM Issue');		
	}
EOD
,View::POS_HEAD);    
$this->registerJS("
	var data = ". json_encode($data) . ";\n
	var topics = " . json_encode($topics) . ";\n
    var header = '" . $header . "';\n
	var url = '" . $url . "';\n
	var firstCategory = '" . $firstCategory . "';\n
	var currentCategory = '" . $firstCategoryName . "';\n
	var fid = '" . $forum_id . "';\n
	var firstLoad = true;\n
",View::POS_BEGIN);
$this->registerJS("buildMatrix(firstCategory);",View::POS_READY);

$cdata = array();
$menuItems = array();
$menuItems[] = '<div id="categories-menu" class="row">';

foreach($categories as $id=>$name) {
	if(!isset($id) || !isset($name) || empty($id) || empty($name)) { continue;}
	$class = ($id == $firstCategory) ? 'text-danger-emphasis' : '';
	//$menuItems[] = '<div class="col">' . Html::a(Html::encode($name), ['class' => $class]) . '</div>';0
	$menuItems[] = '<div class="col">' . Html::a(Html::encode($name),'#', [
		'id' => $id,
		'class' => $class,
		'onclick' => 'currentCategory=this.text;buildMatrix(this.id);$("#views-doc").text("\"' . $name . '\" Topic Summaries");$("#categories-menu a").removeClass("text-danger-emphasis");$(this).addClass("text-danger-emphasis");return false;'
	]) . '</div>';

}
$menuItems[] = '</div>';

$this->title = $header;
//$this->params['breadcrumbs'][] = ['label' => 'Home', 'url' => ['site/index']];
$this->params['breadcrumbs'][] = $this->title;

?>

<h3><?= $header?></h3>

<?php 
//print(implode(" ",$menuItems));
   NavBar::begin([
	//'brandLabel' => Html::img("/assets/images/cns-logo.jpg", ['width' => '30%']) . ' &nbsp;&nbsp; ' . Yii::$app->name,
	//'brandUrl' => Yii::$app->homeUrl,
	'options' => [
		'class' => 'navbar navbar-expand-md',
	],
]);
echo Nav::widget([
		'id' => 'categories-list',
        'options' => ['class' => 'navbar-nav me-auto mb-2 mb-md-0 text-decoration-underline'],
        'items' => $menuItems, 
	]);
NavBar::end();

?>
<p>&nbsp;</p>
<p  id="views-doc" class="h5">
	"<?php echo $firstCategoryName ?>" Topic Summaries</a>  
<div id="table_div"></div>
<pre></pre>
   


