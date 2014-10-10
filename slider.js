<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>

<script type="text/javascript">
$(function(){
    setInterval(function(){
        $(".slideshow ul").animate({marginLeft:-1000},1300,function(){
            $(this).css({marginLeft:0}).find("li:last").after($(this).find("li:first"));
        })
    }, 3500);
});
</script>
