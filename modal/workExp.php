
<div class=row>
	<div class="col-12 col-md-3">
		<label for="">公司</label>
		<input class="col-12" type="text"  name=company value="<?=$data['company'];?>">
	</div>
	<div class="col-12 col-md-3 offset-md-1">
		<label for="">職稱</label>
		<input class="col-12" type="text"  name=title value="<?=$data['title'];?>">
	</div>
	<div class="col-12 col-md-6">
		<label for="">入職時間</label>
		<input id=join-time-input class="col-12" type=month value="<?=substr($data['join-time'],0,7);?>">
		<input id=join-time type="hidden" name="join-time" value="<?=$data['join-time'];?>">
	</div>
	<div class="col-12 col-md-6">
		<label for="">離職時間</label>

		<input id=end-time-input class="col-12" type=month   value="<?=substr($data['end-time'],0,7);?>">
		<input id=end-time type=hidden  name="end-time" value="<?=$data['end-time'];?>">
	</div>
	<div class="col-12">
		<label for="">職務說明</label>
		<br>
		<textarea name=description id="" style="width:100%;" rows="3" 
		 ><?=$data['description'];?></textarea>
	</div>
</div>


<script>
console.log('hi')
$("#join-time-input").on("change",function(){
	let temp = $(this).val();
	temp=$("#join-time").val(temp+`-01`)
})
$("#end-time-input").on("change",function(){
	let temp = $(this).val();
	temp=$("#end-time").val(temp+`-01`)
})

</script>