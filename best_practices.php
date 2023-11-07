<?php include ('header.php'); ?>
<div class="clearfix"></div>

<!-- top tiles -->
<div class="row tile_count" style="margin-right: -245px;">

    <div class="col-md-6 col-sm-6 col-xs-12">
        <!-- Add a link to the PDF file -->
        <a href="videos/Best_Practices.pdf" target="_blank">View PDF</a>

        <!--slider-->
        <div id="slidy-container" style="width: 980px; padding: 1px;">
            <figure id="slidy">
                <img class="img-responsive img-rounded" src="Best_Practices/1.jpg" alt="">
                <img class="img-responsive img-rounded" src="Best_Practices/2.jpg" alt="">
                <img class="img-responsive img-rounded" src="Best_Practices/3.jpg" alt="">
                <img class="img-responsive img-rounded" src="Best_Practices/4.jpg" alt="">
                <img class="img-responsive img-rounded" src="Best_Practices/5.jpg" alt="">
                <img class="img-responsive img-rounded" src="Best_Practices/6.jpg" alt="">
                <img class="img-responsive img-rounded" src="Best_Practices/7.jpg" alt="">
                <img class="img-responsive img-rounded" src="Best_Practices/8.jpg" alt="">
                <img class="img-responsive img-rounded" src="Best_Practices/9.jpg" alt="">
                <img class="img-responsive img-rounded" src="Best_Practices/10.jpg" alt="">
                <img class="img-responsive img-rounded" src="Best_Practices/11.jpg" alt="">
                <img class="img-responsive img-rounded" src="Best_Practices/12.jpg" alt="">
                <img class="img-responsive img-rounded" src="Best_Practices/13.jpg" alt="">
            </figure>
        </div>
        <script>
            var timeOnSlide = 3,
                timeBetweenSlides = 1,
                animationstring = 'animation',
                animation = false,
                keyframeprefix = '',
                domPrefixes = 'Webkit Moz O Khtml'.split(' '),
                pfx = '',
                slidy = document.getElementById("slidy");
            if (slidy.style.animationName !== undefined) { animation = true; }
            if ( animation === false ) {
                for ( var i = 0; i < domPrefixes.length; i++ ) {
                    if ( slidy.style[ domPrefixes[i] + 'AnimationName' ] !== undefined ) {
                        pfx = domPrefixes[ i ];
                        animationstring = pfx + 'Animation';
                        keyframeprefix = '-' + pfx.toLowerCase() + '-';
                        animation = true;
                        break;
                    } } }
            if ( animation === false ) {
                // animate using a JavaScript fallback, if you wish
            } else {
                var images = slidy.getElementsByTagName("img"),
                    firstImg = images[0],
                    imgWrap = firstImg.cloneNode(false);
                slidy.appendChild(imgWrap);
                var imgCount = images.length,
                    totalTime = (timeOnSlide + timeBetweenSlides) * (imgCount - 1),
                    slideRatio = (timeOnSlide / totalTime)*100,
                    moveRatio = (timeBetweenSlides / totalTime)*100,
                    basePercentage = 100/imgCount,
                    position = 0,
                    css = document.createElement("style");
                css.type = "text/css";
                css.innerHTML += "#slidy { text-align: left; margin: 0; font-size: 0; position: relative; width: " + (imgCount * 100) + "%; }";
                css.innerHTML += "#slidy img { float: left; width: " + basePercentage + "%; }";
                css.innerHTML += "@"+keyframeprefix+"keyframes slidy {";
                for (i=0;i<(imgCount-1); i++) {
                    position+= slideRatio;
                    css.innerHTML += position+"% { left: -"+(i * 100)+"%; }";
                    position += moveRatio;
                    css.innerHTML += position+"% { left: -"+((i+1) * 100)+"%; }";
                }
                css.innerHTML += "}";
                css.innerHTML += "#slidy { left: 0%; "+keyframeprefix+"transform: translate3d(0,0,0); "+keyframeprefix+"animation: "+totalTime+"s slidy infinite; }";
                document.body.appendChild(css);
            }
        </script>
    </div>

</div>
<!-- /top tiles -->

<?php include ('footer.php'); ?>


