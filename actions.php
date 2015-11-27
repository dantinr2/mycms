<?php
	$act = isset($_GET['act']) ? $_GET['act'] : 0;		//请求类型
	
	switch( $act ){
		case 1:		// 发布文章
			$title = $_POST['title'];
			$content = $_POST['content'];
			
			$words = segment($title);	//标题分词
			foreach($words as $k=>$v){
				echo $v,'<br />';
			}
			echo '<pre>';print_r($words);echo '</pre>';
			//segment($content);	//内容分词
			
			//echo '<pre>';print_r($_POST);echo '</pre>';
		break;
		
		
		default:
			return;
	}
	
	
	
	
	// 分词
	function segment( $words ){
		$url = "http://ujpseg.sinaapp.com/";
		$p_data = 'wd='.$words;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $p_data);
		$info = curl_exec($ch);       //返回String
		curl_close($ch);
		$rs = json_decode($info);
		return $rs;
	}
	
	