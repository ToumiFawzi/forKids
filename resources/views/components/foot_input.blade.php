<script type="text/javascript">
    function asideswipe()   {
        var div = document.getElementById('aside'),
        display = getComputedStyle(div, null).display;
         
        if(display == "block")  {
            document.getElementById("aside").style.display = "none";
            document.getElementById("acontent").className = "col-md-12";
        }else   {
            document.getElementById("aside").style.display = "block";
            document.getElementById("acontent").className = "col-md-9";
        }
    }  
</script>

<div class="footer">
    <div class="row">
        <div class="col-md-3">
    <button class="navbar-toggle" onClick="asideswipe()">+</button> Copyright @ Forkid 2018
    </div>
        <div class="col-md-9">
            <form action="#">
            <div class="row">
            <div class="col-md-9">
            	<input type="text" name="message" id="message">
            	</div>
            	<div class="col-md-3">
            	<input type="submit" value="OK" id="okmessage"> <a href="#"><img src="../resources/images/picto_smileys.svg" class="picto"></a>
            	</div>
            	</div>
            </form>
        </div>
</div>
