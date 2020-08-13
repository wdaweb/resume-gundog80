<div id=beginAnimation display="none">
    <!-- <div id=startAnim class="vh-100 vw-100 d-flex flex-column" style="align-items: center;"> -->
    <div id=startAnim class="" style="max-width:600px;width:95vw;height:100vh;min-height:95vw;display:flex;flex-direction: column;align-items: center;">
        <!-- <div> -->
        <?php
            echo file_get_contents("./beginAnimation/svg/個人mark-小丑.php");
        ?>
        <!-- </div> -->
        <div id=marksize style="position:relative;width:60%;">
        <!-- <div style="position:relative;width:313.95px;height:545px"> -->
            <div style="position: absolute;" class="wow bounceInDown" data-wow-delay="2s" data-wow-duration="2s">
                <?php
                echo file_get_contents("./beginAnimation/svg/座-三角G.php") ;
                ?>
            </div>
            <div style="position: absolute;" class="wow bounceInDown wordU" data-wow-delay="2.3s" data-wow-duration="2s">
                <?php
                echo file_get_contents("./beginAnimation/svg/座-三角u.php") ;
                ?>
            </div>
            <div style="position: absolute;" class="wow bounceInDown" data-wow-delay="2.6s" data-wow-duration="2s">
                <?php
                echo file_get_contents("./beginAnimation/svg/座-三角n.php") ;
                ?>
            </div>
            <div style="position: absolute;" class="wow bounceInDown" data-wow-delay="2.9s" data-wow-duration="2s">
                <?php
                echo file_get_contents("./beginAnimation/svg/座-三角d.php") ;
                ?>
            </div>
            <div style="position: absolute;" class="wow bounceInDown wordO" data-wow-delay="3.2s" data-wow-duration="2s">
                <?php
                echo file_get_contents("./beginAnimation/svg/座-三角o.php") ;
                ?>
            </div>
            <div style="position: absolute;" class="wow bounceInDown wordG2" data-wow-delay="3.5s" data-wow-duration="2s">
                <?php
                echo file_get_contents("./beginAnimation/svg/座-三角g2.php") ;
                ?>
            </div>
        </div>
        <br>
    </div>
</div>
<!-- <script src="./lib/jquery/jquery-1.9.1.min.js"></script> -->
<script src="./lib/wow/wow.min.js"></script>
<script>
    new WOW().init();
    // data
    let wordG2 = $('.wordG2');
    let wordU = $('.wordU');
    let wordO= $('.wordO');

    // method
    let markSize=function(){
        //依板面重訂開頭動畫尺寸
        return new Promise((resolve,reject)=>{
            console.log("markSize")
            $("#markPic").attr("height",$("#markPic").width()*0.9+ "px")
            $(".markWord").attr("width",$("#marksize").width() + "px")
            $(".markWord").css("left",$("#marksize").width()*(0.04) + "px")
            $(".markWord").css("top",$(".markWord").width() * -0.45 + "px")
            resolve(1);
        })
    }
    function wordUBeat(){
        //wordU於g2停止後彈動
        wordG2.one('animationend',function(){
            setTimeout(() => {
                wordU.removeClass("bounceInDown")
                wordU.addClass("heartBeat")
                wordU.attr('style',"position: absolute;");
                // setTimeout(()=>{
                wordOBeat();
                // },100)
            }, 100);
        })
    }
    function wordOBeat(){
        //wordO於wordU彈動停止後彈動
        wordU.one('animationend',function(){
            wordO.removeClass("bounceInDown")
            wordO.addClass("bounce")
            wordO.attr('style',"position: absolute;");
            setTimeout(() => {
                beginAnimationEnd()
            }, 1500);
        })
    }
    function beginAnimationEnd(){
        //起始動畫結束收合
        setTimeout(() => {
            $("#startAnim").slideUp(1500)
            $("#startAnim").css("min-height",0)
        }, 1000);
    }

    // $(function(){})
    $(function(){ 
        markSize().
        then(()=>{
            $('#beginAnimation').show();  
        }).
        then(()=>{
            setTimeout(() => {
                wordUBeat()
            }, 100);
        });
    });
</script>