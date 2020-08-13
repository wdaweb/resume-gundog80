<!-- ---------CSS------------- -->
<style>
.loadingBase {
display: flex;
flex-flow:column wrap;
justify-content:center;
align-items:center;
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background-color: #fff;
text-align:center;
z-index: 999;
}
.loadingBase .progress {
display: table-cell;
vertical-align: middle;
text-align: center;
}
.loading{ 
display: block;
vertical-align: middle;
background:#FF6100;
height:5px;
} 

</style>

<!-- ------------HTML------------- -->
<div class="loadingBase" id="loadingBase">

    <div class="loading" id="loading"></div>
    <div class="progress" id="progress">0%</div>
</div>

<!-- -----------script------------- -->
<script>
$(function(){ 
    setTimeout(() => {
        $('.loadingBase').fadeOut();  
    },200);
});
</script>

