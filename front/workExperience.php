<?php
			include_once "./base.php";
			$table=$table;
			$userID=1;
			// $resumeID=2;
			$photoPath=find('userbasicdata',$userID)['photoPath'];
			$show=find('resume',$resumeID)[$table];
			// echo($show);
			// echop($show);
			// $table=$_GET['table'];
			$introduction=find($table,$show);
			// print_r($rows);
?>

<div id=font-simpleIntroduction class=normalArea >
	<table class=frontTable>
		<?php
		$show=explode(",",find('resume',$resumeID)[$table]);
		$data=['userID'=>$userID ];
		$rows=all($table,$data);
		?>
			<tr>
				<td>公司</td>
				<td>職稱</td>
				<td style="width:5em;">任職期間</td>
				<td style="width:5em;">詳細說明</td>

			</tr>
<?php
			foreach($rows as $n){
				if(in_array($n['id'],$show)){
?>
					<tr>
					<td>
						<?php
                        $temp=$n['company'];
                        if (strlen($temp)>20){
                            $temp=substr($temp,0,20) . "...";
                        }
						echo $temp;
						?>
					</td>
					<td>
						<?php
                        $temp=$n['title'];
                        if (strlen($temp)>20){
                            $temp=substr($temp,0,20) . "...";
                        }
						echo $temp;
						?>
					</td>
					<td>
						<?php
						$join=$n['join-time'];
						$end=$n['end-time'];
						$seniority=(strtotime($end)-strtotime($join))/(365*24*60*60);
						// $temp=$n['seniority'];
                        // if (strlen($temp)>10){
                        //     $temp=substr($temp,0,9) . "...";
                        // }
						echo round($seniority);
						?>
					</td>
					<td > 
						<div onmouseover="showData(this)" onmouseout="hideData(this)"  >
							more...
							<div class=more>
								任職期間
								<br>
								<?php
								echo $n['join-time'] . "~" . $n['end-time'];
								?>
								職務說明
								<br>
								<?php
								echo $n['description'];
								?>
							</div>

						</div>
					</td>


					</tr>
<?php
				}
			}
			?>

		</table>
</div>