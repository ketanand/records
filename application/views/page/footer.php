<footer>
<div class="reveal-modal-bg" style="opacity: 0.8; display: none; cursor: pointer;"></div>
<div id="login-modal" class="reveal-modal large hide-on-print" style="z-index: 9999; top: 4131px; opacity: 1; visibility: hidden; display: none;"><div class="center">
  <span class="xout" onclick="unreveal()">X</span>

  <header>
    <h2 class="title">Log In</h2>
    <p class="description">Use your Twitter or Facebook account to comment.</p>
    <p class="description error" style="display: none;">Something went wrong while trying to log you in; please try again.</p>
  </header>


  <ul class="block-grid two-up mobile-two-up">

    

    <li class="">

      <a class="twitter button social-button" href="#" data-slug="twitter">

        <span class="overlay">
          <i class="icon-twitter"></i>
          <span class="label hide-for-medium-down">Twitter</span>
        </span>

        
        <img src="/images/spacer-1px.gif" width="1" height="1" class="spacer">
      </a>
    </li>

    

    <li class="">

      <a class="facebook button social-button" href="#" data-slug="facebook" onclick="login()">

        <span class="overlay">
          <i class="icon-facebook"></i>
          <span class="label hide-for-medium-down">Facebook</span>
        </span>

        
        <img src="/images/spacer-1px.gif" width="1" height="1" class="spacer">
      </a>
    </li>

    
  </ul>

</div>
</div>
<script type="text/javascript">
<!--//--><![CDATA[//><!--

		jQuery(document).ready(function($) {

		    $(window).load(function() {

		        $(".flexslider").fadeIn("slow");

		        $(".flexslider").flexslider({
		            useCSS: false,
		            animation: "fade",
		            controlNav: 1,
		            directionNav: 1,
		            animationLoop: true,
		            touch: 1,
		            pauseOnHover: 0,
		            nextText: "&rsaquo;",
		            prevText: "&lsaquo;",
		            keyboard: true,
		            slideshowSpeed: 5000,
		            randomize: 0,
		            start: function(slider) {
		                slider.removeClass("loading");
		            }
		        });
		    });
		});
//--><!]]>
</script>
<script type="text/javascript">
<!--//--><![CDATA[//><!--

		jQuery(document).ready(function($) {

		    if (jQuery("#main-navigation, #main-navigation .content").length && jQuery()) {
		        var arrowimages = {
		            down: ["downarrowclass", "./images/plus.png", 23],
		            right: ["rightarrowclass", "./images/plus-white.png"]
		        }
		        var jqueryslidemenu = {
		            animateduration: {
		                over: 200,
		                out: 100
		            },
		            //duration of slide in/ out animation, in milliseconds
		            buildmenu: function(menuid, arrowsvar) {

		                jQuery(document).ready(function(jQuery) {
		                    var jQuerymainmenu = jQuery("#" + menuid + ">ul.menu:not(.sf-menu)")
		                    var jQueryheaders = jQuerymainmenu.find("ul").parent()

		                    jQueryheaders.each(function(i) {
		                        var jQuerycurobj = jQuery(this)
		                        var jQuerysubul = jQuery(this).find("ul:eq(0)")
		                        this._dimensions = {
		                            w: this.offsetWidth,
		                            h: this.offsetHeight,
		                            subulw: jQuerysubul.outerWidth(),
		                            subulh: jQuerysubul.outerHeight()
		                        }
		                        this.istopheader = jQuerycurobj.parents("ul").length == 1 ? true : false
		                        jQuerysubul.css({
		                            top: this.istopheader ? this._dimensions.h + "px" : 0
		                        })
		                        jQuerycurobj.children("a:eq(0)").css(this.istopheader ? {
		                            paddingRight: arrowsvar.down[2]
		                        } : {}).append("<span class=" + (this.istopheader ? arrowsvar.down[0] : arrowsvar.right[0]) + " />")

		                        jQuerycurobj.hover(

		                        function(e) {
		                            var jQuerytargetul = jQuery(this).children("ul:eq(0)")
		                            this._offsets = {
		                                left: jQuery(this).offset().left,
		                                top: jQuery(this).offset().top
		                            }
		                            var menuleft = this.istopheader ? 0 : this._dimensions.w
		                            menuleft = (this._offsets.left + menuleft + this._dimensions.subulw > jQuery(window).width()) ? (this.istopheader ? -this._dimensions.subulw + this._dimensions.w : -this._dimensions.w) : menuleft
		                            if (jQuerytargetul.queue().length <= 1) //if 1 or less queued animations
		                            jQuerytargetul.css({
		                                left: menuleft + "px",
		                                width: this._dimensions.subulw + "px"
		                            }).slideDown(jqueryslidemenu.animateduration.over)
		                        }, function(e) {
		                            var jQuerytargetul = jQuery(this).children("ul:eq(0)")
		                            jQuerytargetul.slideUp(jqueryslidemenu.animateduration.out)
		                        }) //end hover
		                        jQuerycurobj.click(function() {
		                            jQuery(this).children("ul:eq(0)").hide()
		                        })
		                    }) //end jQueryheaders.each()

		                    jQuerymainmenu.find("ul").css({
		                        display: "none",
		                        visibility: "visible"
		                    })

		                }) //end document.ready
		            }
		        }

		        jqueryslidemenu.buildmenu("main-navigation .content", arrowimages)
		        jqueryslidemenu.buildmenu("main-navigation", arrowimages)

		    }
		});
//--><!]]>
</script>
<script type="text/javascript">
<!--//--><![CDATA[//><!--

		jQuery(document).ready(function($) {

		    var currentWindowWidth = jQuery(window).width();
		    jQuery(window).resize(function() {
		        currentWindowWidth = jQuery(window).width();
		    });

		    $(window).load(function() {

		        $("ul#projects-carousel").fadeIn("fast");

		        if (jQuery(".portfolio-item-hover-content").length && jQuery()) {
		            function hover_effect() {
		                jQuery(".portfolio-item-hover-content").hover(function() {
		                    jQuery(this).find("div,a").stop(0, 0).removeAttr("style");
		                    jQuery(this).find(".hover-options").animate({
		                        opacity: 0.9
		                    }, "fast");
		                    jQuery(this).find("a").animate({
		                        "top": "60%"
		                    });
		                }, function() {
		                    jQuery(this).find(".hover-options").stop(0, 0).animate({
		                        opacity: 0
		                    }, "fast");
		                    jQuery(this).find("a").stop(0, 0).animate({
		                        "top": "150%"
		                    }, "slow");
		                    jQuery(this).find("a.zoom").stop(0, 0).animate({
		                        "top": "150%"
		                    }, "slow");
		                });
		            }
		            hover_effect();
		        }
				
		        (function() {
		            var jQuerycarousel = jQuery("#projects-carousel");
		            if (jQuerycarousel.length) {
		                var scrollCount;
		                if (jQuery(window).width() < 480) {
		                    scrollCount = 1;
		                } else if (jQuery(window).width() < 768) {
		                    scrollCount = 1;
		                } else if (jQuery(window).width() < 960) {
		                    scrollCount = 3;
		                } else {
		                    scrollCount = 4;
		                }
		                jQuerycarousel.jcarousel({
		                    animation: 600,
		                    easing: "easeOutCirc",
		                    scroll: scrollCount,
		                    initCallback: function() {
		                        jQuerycarousel.removeClass("loading")
		                    },
		                });
		            }
		        })();
		    });
		});
//--><!]]>
</script>
<script type="text/javascript">
<!--//--><![CDATA[//><!--

		jQuery(document).ready(function($) {
		    if (jQuery().tipsy) {
		        jQuery("#social-01").tipsy({ gravity: "n" });
		        jQuery("#social-02").tipsy({ gravity: "n" });
		        jQuery("#social-03").tipsy({ gravity: "n" });
		        jQuery("#social-04").tipsy({ gravity: "n" });
		        jQuery("#social-05").tipsy({ gravity: "n" });
		        jQuery("#social-06").tipsy({ gravity: "n" });
		        jQuery("#social-07").tipsy({ gravity: "n" });
		        jQuery("#social-07").tipsy({ gravity: "n" });
		        jQuery("#social-08").tipsy({ gravity: "n" });
		        jQuery("#social-09").tipsy({ gravity: "n" });
		        jQuery("#social-10").tipsy({ gravity: "n" });
		        jQuery("#social-11").tipsy({ gravity: "n" });
		        jQuery("#team-01").tipsy({ gravity: "s" });
		    }
		});
//--><!]]>
</script>
<script type="text/javascript">
<!--//--><![CDATA[//><!--

jQuery(document).ready(function() { jQuery(".backtotop").click(function(){ jQuery("html, body").animate({scrollTop:0}, "slow"); return false; }); });

//--><!]]>
</script>
<script type="text/javascript">
<!--//--><![CDATA[//><!--

jQuery(document).ready(function($) {

	$("#main-navigation > ul, #main-navigation .content > ul").mobileMenu({
	prependTo: "#navigation-wrapper",
	combine: false,
	switchWidth: 960,
	topOptionText: "Select a page"
	});

});
//--><!]]>
</script>
<script type="text/javascript">
<!--//--><![CDATA[//><!--

			jQuery("a[data-rel^=prettyPhoto], a.prettyPhoto, a[rel^=prettyPhoto]").prettyPhoto({
			    overlay_gallery: false,
			    theme: "pp_default",
			});
//--><!]]>
</script>
</footer>
