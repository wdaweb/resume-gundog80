<?php
			include_once "./base.php";
			
			$table=$_GET['table'];
			$userID=1;
			if(isset($_GET['resumeID'])){
				$resumeID=$_GET['resumeID'];
			}else{
				$temp=find('resume',['userID'=>$userID])['id'];
				$_GET['resumeID']=$resumeID=$temp;
			}
			$show=explode(",",find('resume',$resumeID)[$table]);
			
			// echop($show);
			// echop($show);
			// $table=$_GET['table'];
			// print_r($rows);
			?>
<div id="choseResume">
	<div>  <!-- 選擇履歷表 -->
					履歷表：
					<?php
					$temp=find('resume',$resumeID)['resumeName'];

					echop($temp);
					?>
	</div>	
	<datalist id=resumeList>
	<?php
		$rows=all('resume',['userID'=>$userID]);
		foreach($rows as $k => $v){
			echo "<option value=" . $v['id'] . " label=" . $v['resumeName'] . "></option>";
		}
		?>
	</datalist>
	<div>
		<input type="url" list=resumeList name="resume" id=resumeInput class=minInput 
		onchange="resumeChange()">
	</div>
</div>
<br>
<br>
<div class=middleStyle>

	<form action="./api/saveResume.php" method="post">
		<table class=optionTable>
		<?php
		$data=['userID'=>$userID];
		$rows=all($table,$data);
		?>
			<tr>
				<td>公司</td>
				<td>職稱</td>
				<td style="width:5em;">任職期間</td>
				<td style="width:5em;">詳細說明</td>
				<td class=std>顯示</td>
				<td>編輯</td>
				<td>刪除</td>
				<!-- <div >測試</div> -->
			</tr>
<?php
			foreach($rows as $n){
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
					<td> 
					<input type='checkbox' name='sh[]' id=<?php echo "sh" . $n['id'] ; ?> value=
					<?php
					echo $n['id'];
					// if ($show==$n['id']){
					if(in_array($n['id'],$show)){
						echo " checked=true";
					}
						?>>
						
					</td>
					<td> 
						<div name='editBtn' class=button 
						 onclick="op('#cover','#cvr','./modal/saveWorkExperience.php?table=<?php echo $table; ?>&id=<?php echo $n['id']; ?>')">
						編輯
						</div>
					</td>
					<td>
						<div name='deleteBtn' class=button 
						 onclick="op('#cover','#cvr','./modal/deleteData.php?table=<?php echo $table; ?>&id=<?php echo $n['id']; ?>')">
						刪除
						</div>
					</td>

					</tr>
<?php
			}
			?>
			<tr>
				<td colspan=1></td>
				<td colspan=6>
					<input type="button" value="新增工作經歷" 
					onclick="op('#cover','#cvr','./modal/saveWorkExperience.php?table=<?php echo $table; ?>&userID=<?php echo $userID; ?>')">
					<!-- &userID= -->
					<?php
					//  echo $userID; 
					 ?>
			        
					<input type="hidden" name="table" value=<?php echo $table ?>>
					<input type="hidden" name="resumeID" value=<?php echo $resumeID ?>>
					<input type="submit" value="儲存狀態">
				</td>
			</tr>
		</table>
	</form>


</div>
