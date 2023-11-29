<?php

echo "<pre>";
//print_r($data);
echo "</pre>";
Yii::app()->clientScript->registerCss('issues-css', <<< EOD0
#xxissues-left {
		width:30%;
		float:left;
}
#xxissues-right {
	width: 70%;
	float:right;
}
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

a:hover {
	text-decoration: none;
}

EOD0

);
Yii::app()->clientScript->registerScriptFile('https://www.google.com/jsapi',CClientScript::POS_HEAD);
Yii::app()->clientScript->registerScript('page-head',<<< EOD
	//google.load('visualization','1',{packages:['table','corechart']});
	function buildMatrix(cid) {
		var headers='<tr><td>Year</td>';
		$.each(topics[cid],function(tid,tvalue){
				parts = tvalue.split('|');
				var tname = parts[0];
				var tdescription = parts[1];
				headers += '<td> <a title="' + tdescription + '" href="/nam/index.php/site/issuesByTopic?fid=' + fid + '&tid=' + tid + '&tname=' + tname + '">' + tname + '</a></td>';
		});
		headers += '</tr>';
		
		var table = '<table cellspacing="0">';
		var cells = '';
		var row = 0;
		$.each(data,function(year,categories){
			var rowClass = row % 2 > 0 ? ' class="odd" ' : '';
			cells += '<tr' + rowClass + '>';
			cells += '<td>';
			if(typeof (data[year]) != 'undefined' && typeof (data[year][cid]) != 'undefined') cells += '<a title="View all issues for this year" href="/nam/index.php/site/issuesByYear?fid=' + fid + '&y=' + year + '&cid=' + cid + '&cname=' + currentCategory + '">' + year + '</a>';
			else cells += year;
			cells += '</td>';
			var column = 1;
			$.each(topics[cid],function(tid,tname){
				if(typeof (data[year]) != 'undefined' && typeof (data[year][cid]) != 'undefined' && typeof (data[year][cid][tid]) !== 'undefined') {
						var parts = data[year][cid][tid].split('|');
						var summitId = parts[0];
						//var topicName = parts[1];
						var id = summitId + "|" + cid + "|" + tid + "|" + year + "|" + currentCategory + "|" + header;
						cells += '<td id="' + id + '" onclick="showIssue(this.id)"><a href="javascript:void">✔</a></td>';
					}
					else {
						cells += '<td> &nbsp; </td>';
					}
			});
			cells += '</tr>';
			row++;
		});
		table += '<thead>' + headers + '<tbody>' + cells + '</tbody></table>';
		//$('#log').val(table);
		$('#table_div').empty().append(table);
	}
	function showIssue(id) {
		var parts = id.split('|');
		var summitId = parts[0];
		var categoryId = parts[1];
		var topicId = parts[2];
                                         var year = parts[3];
                                         var category = parts[4];
                                         var header = parts[5];
		parts = topics[categoryId][topicId].split('|');
		var topicName = parts[0];
		var action = url + "?sid=" + summitId + "&cid=" + categoryId + "&tid=" + topicId + "&tname=" + encodeURIComponent(topicName) + "&year=" + year + "&cname=" + encodeURIComponent(category) + "&header=" + encodeURIComponent(header) ;
        //alert(action);
        //document.location.assign(action);
        window.open(action,'NAM Issue');
		/*$.ajax({
	 					url: url,
		 				type: "GET",
		 				dataType: "json",
		 				data: {
		 					sid: summitId,
		 					cid: categoryId,
		 					tid: topicId,
		 					tname: encodeURIComponent(topicName)
		 				},
		 				//data: "lid=01&rid=02&p=0&w=-9",
		 				cache: false,
		 				success: function(data,textStatus,jqXHR) {
		 					$('#issue-window').center().show("slow");
		 					var frame = $('#issue-window-frame');
		 					var issueDiv = frame.contents().find('#window-text');
		 					issueDiv.html(data.text);
		 					var frameBody = frame.contents().find('body');
		 					var frameBodyWidth = frameBody[0].scrollWidth;
		 					frame.width(frameBodyWidth);
		 					frame.height(frameBody[0].offsetHeight > $(window).height()? $(window).height() -200 : frameBody[0].offsetHeight);
		 				},
		 				error: function(XMLHttpRequest, textStatus, errorThrown) {
		 					alert("Error: " + errorThrown);
		 					//location.reload();
		 				}
		 	});*/
		
	}
	function openPrintWindow(text) {
		var issueWindow = window.open('','Topic for Print');
		issueWindow.document.write(text);
	}
	function printFrame(text) {
		window.frames['issue-window-frame'].focus();
		window.frames['issue-window-frame'].print();
	}
	/*function selectHandler() {
  		var selection = chart.getSelection();
  		var item = selection[0];
  		if(item.row != null && item.column != null) {
  			var itt = data.getFormattedValue(item.row, item.column);
  		}
	}*/
EOD
,CClientScript::POS_HEAD);    
//echo "<pre>";
//print_r($matrix);
//print_r($users);
		
/*$topicHeading = array();
		$factorKeys = array();
        foreach($factors as $factor) {
        	$factorHeading[] = sprintf('data.addColumn("number","%1$s");',$factor->name);
        	$factorScatterHeading[] = sprintf('scatterData.addColumn("number","%1$s");',$factor->name);
        	$factorKeys[] = $factor->id;
        }
        $cells = array();
        $scatterCells = array();
        $row = 0;
       	foreach($matrix as $key=>$value) {
        	$cells[] = sprintf('data.setCell(%1$d,%2$d,%3$s);',$row,0,$key);
        	$scatterCells[] = sprintf('scatterData.setCell(%1$d,%2$d,%3$d);',$row,0,$key);
        	//print("<p>" .$key . ": " . $users[$key] .  " - " . $u . "</p>");
        	$i = 1;
        		for($i;$i<=count($factorKeys);$i++) {
        		$fid = $factorKeys[$i-1];
        		//if($fid < 10) $fid = '0' . $fid;
        		//printf('<p>data.setCell(%1$d,%2$d,%3$02.3f);</p>',$row,$i,$value['eigenVector'][$fid]);
        		$cells[] = sprintf('data.setCell(%1$d,%2$d,%3$01.3f);',$row,$i,$value['eigenVector'][$fid]);
        		$scatterCells[] = sprintf('scatterData.setCell(%1$d,%2$d,%3$01.3f);',$row,$i,$value['eigenVector'][$fid]);
        		}
        	$cells[] = sprintf('data.setCell(%1$d,%2$d,%3$01.3f);',$row,$i,$value['lambda']);
        	$cells[] = sprintf('data.setCell(%1$d,%2$d,%3$01.3f);',$row,++$i,$value['ci']);
        	$cells[] = sprintf('data.setCell(%1$d,%2$d,%3$01.3f);',$row,++$i,$value['cr']);
        	$row++;
        }
        $formatter = array();
        $scatterformatter = array();
       	$i = 0;
        for($i;$i<count($factorKeys);$i++) {
        	$formatter[] = sprintf('formatter.format(data,%d);',$i);
        	$scatterFormatter[] = sprintf('formatter.format(scatterData,%d);',$i);
        }
        $formatter[] = sprintf('formatter.format(data,%d);',$i);
        $formatter[] = sprintf('formatter.format(data,%d);',++$i);
        $formatter[] = sprintf('formatter.format(data,%d);',++$i);
        
        //print_r($scatterCells);
echo "</pre>";
 */       
Yii::app()->clientScript->registerScript('page1', <<<EOD1
	google.setOnLoadCallback(function() {
		//chart = new google.visualization.Table(document.getElementById('table_div'));
  		//google.visualization.events.addListener(chart, 'select', selectHandler);
		buildMatrix(firstCategory);
		/*$(".google-visualization-table-td-bool").click(function(obj){
			alert(this);
		});*/
	});
	
	jQuery.fn.center = function () {
	    this.css("position","absolute");
	    //if(firstLoad) {
	    	var pos = $('#xheader').offset();
	    	this.css("top",pos.top + 'px');
	    	this.css("left",pos.left + 'px');
	    	//firstLoad = false;
	    //}
	    /*else {
	    	this.css("top", (($(window).height() - this.outerHeight()) / 2) + 
	                                                $(window).scrollTop() + "px");
	    	this.css("left", (($(window).width() - this.outerWidth()) / 2) + 
	                                                $(window).scrollLeft() + "px");
	    	this.css("top", (($(window).height() - this.offsetParent().clientHeight) / 2) + 
	                                                $(window).scrollTop() + "px");
	    	this.css("left", (($(window).width() - this.offsetParent().clientWidth) / 2) + 
	                                                $(window).scrollLeft() + "px");
		}	*/                                              
	    return this;
	}
	
EOD1
);
Yii::app()->clientScript->registerScript('page-begin', "
	var data = ". json_encode($data) . ";\n
	var topics = " . json_encode($topics) . ";\n
    var header = '" . $header . "';\n
	var url = '" . $url . "';\n
	var firstCategory = '" . $firstCategory . "';\n
	var currentCategory = '" . $firstCategoryName . "';\n
	var fid = '" . $forum_id . "';\n
	var firstLoad = true;\n
",CClientScript::POS_BEGIN);
//echo "<pre>";DISARMAMENT

$cdata = array();
foreach($categories as $key=>$value) {
	$class = $key == $firstCategory ? 'selected' : '';
	list($name,$description) = explode('|',$value);
	if(empty($description)) $description = '';
	$cdata[] = array(
		'id'=>$key,
		'expanded'=>true,
		'hasChildren'=>false,

		'text'=>CHtml::link(CHtml::encode($name),$url,array(
								'id'=>$key,
								'onclick' => 'currentCategory=$(this).text();$(".treeview a").removeClass("selected");$(this).addClass("selected");buildMatrix(this.id);$("#views-doc").attr("href","' . $this->createUrl('issueViews',array('fid'=>$forum_id,'cid'=>$key,'cname'=>$name)) . '").text("\"' . $name . '\" Issue Summaries");return false',
								'class'=>$class,
								'title'=>"$description",
							)),
	);
}
//echo "<pre>";
//print_r($cdata);
//echo "</pre>";

?>

<div id="wrapper" xstyle="width:960px;">
	<div id="xheader">
        		<h1 style="margin:0;padding:0;"><?php  echo $header?></h1>
				
				<!--  p class="data_related">Choose a category:</p -->
	</div>
   <div id="main" class="clear" style="position:relative">
   <div id="issues-left">
 <?php 
				$this->widget('system.web.widgets.CTreeView', array(
	    			'collapsed' => false,
					'data'=>$cdata,
				));
 
 ?>
   </div>
   <div id="issues-right">
   		<div id="scatter_div"></div>
        <p><a id="views-doc" href="<?php echo $this->createUrl('issueViews',array('fid'=>$forum_id,'cid'=>$firstCategory,'cname'=>$firstCategoryName))?>"><?php echo $firstCategoryName ?> Topic Summaries</a>   		<textarea id="log" style="display:none"></textarea></p>
    	<div id="table_div"></div>
    </div>
</div>
	<div id="extras" style="position:relative">

        		<?php
        			//echo $this->renderPartial('_progress', array('progress'=>$progress));
        		?>
	
	</div>
	<div id="pahp-footer">
				<div id="help">
					<?php 
						//echo CHtml::button('Start over',array('id'=>'reset'));
						/*echo CHtml::button('Next',array(
							'id' => 'next',
							'submit' => $this->createUrl('next',array('xj' => $this->page1)),
							//'class'=>'ui-widget ui-widget-header ui-corner-all',
						));*/
					?>
				</div>
        </div>
        <div id="issue-window">
        	<div id="issue-buttons">
	        	<a href="javascript(void)" onclick="$('#issue-window').hide('slow');return false">Close</a> |
	        	<!--  a href="javascript(void)" onclick="openPrintWindow($('#issue-window-text').html());return false">Print</a -->
	        	<a href="javascript(void)" onclick="printFrame($('#issue-window-text').html());return false">Print</a>
        	</div>
        	<iframe id="issue-window-frame" frameborder="0" width="100%" xheight="70%" scrolling="yes" src="<?php echo Yii::app()->baseUrl?>/empty.htm">
        	</iframe>
        		<!--  div id="issue-window-text"></div -->
        </div>
