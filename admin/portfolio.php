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
				<td>展示圖片</td>
				<td>作品名稱</td>
				<td style="width:60%;">連結網址</td>
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
						$temp=$n['imageID'];
						$pic=find('image',$temp);
						$src=$pic['src'];
						$alt=$pic['fileName'];
						echop("<img src=$src alt=$alt>");
						?>
					</td>
					<td>
						<?php
                        $temp=$n['workName'];
                        if (strlen($temp)>20){
                            $temp=substr($temp,0,20) . "...";
                        }
						echo $temp;
						?>
					</td>
					<td>
						<?php
                        $temp=$n['href'];
                        if (strlen($temp)>30){
                            $temp=substr($temp,0,30) . "...";
                        }
						echo $temp;
						?>
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
					<input type="button" value="新增作品" 
					onclick="op('#cover','#cvr','./modal/savePortfolio.php?table=<?php echo $table; ?>&userID=<?php echo $userID; ?>')">
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
