<?php
			include_once "./base.php";
			
			$table=$_GET['do'];
			$userID=1;
			if(isset($_GET['resumeID'])){
				$resumeID=$_GET['resumeID'];
			}else{
				$temp=find('resume',['userID'=>$userID])['id'];
				$_GET['resumeID']=$resumeID=$temp;
			}
			$show=find('resume',$resumeID)[$table];
			echop($show);
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
				<td>已登錄自介</td>
				<td class=std>選用</td>
				<td>編輯</td>
				<td>刪除</td>
			</tr>
<?php
			foreach($rows as $n){
?>
					<tr>
					<td>
						<?php
                        $temp=$n['selfInterduction'];
                        if (strlen($temp)>17){
                            $temp=substr($temp,0,15) . "...";
                        }
						echo $temp;
						?>
					</td>
					<td> 
					<input type='radio' name='sh' value=
					<?php
					echo $n['id'];
					if ($show==$n['id']){
						echo " checked=true";
					}
						?>>
						
					</td>
					<td> 
						<div name='editBtn' class=button 
						 onclick="op('#cover','#cvr','./modal/saveSelfInterduction.php?table=<?php echo $table; ?>&id=<?php echo $n['id']; ?>')">
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
				<td colspan=4>
					<input type="button" value="新增自介" 
					onclick="op('#cover','#cvr','./modal/saveSelfInterduction.php?table=<?php echo $table; ?>&userID=<?php echo $userID; ?>')">
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