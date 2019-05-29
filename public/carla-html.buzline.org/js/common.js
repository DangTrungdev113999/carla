"use strict";function isMobileDeviceUsed(){var e=!1;return(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4)))&&(e=!0),e}function windowWidth(){return $(window).width()}function sliderNavigation(){var e,t,i,o,s=$(".to-count-slider");if(void 0!==s){e=s.find(".slick-slide").length,t=s.find(".slick-slide.slick-cloned").length,i=e-t,o=s.closest("section").find(".slick-dots li");for(var a=1;a<=i;a++)a<10?s.closest("section").find(".slick-dots li:nth-child("+a+") button").html("0"+a):s.closest("section").find(".slick-dots li:nth-child("+a+") button").html(a)}o.on("click","p[data-slide]",function(e){e.preventDefault(),o.find("p[data-slide]").removeClass("active"),$(this).addClass("active");var t=$(this).data("slide");$(".main-slider").slick("slickGoTo",t-1)})}function sliderInit(){$(".main-slider").on("init",function(e,t){$(".main-slider .slick-active").addClass("animate-slide")}),$(".main-slider").slick({dots:!0,nextArrow:".main-slider-wrap .main-slider__navigation.next",prevArrow:".main-slider-wrap .main-slider__navigation.prev",speed:800}),$(".main-slider").on("afterChange",function(e,t,i){$(".main-slider .slick-slide").removeClass("animate-slide"),$(".main-slider .slick-active").addClass("animate-slide")}),$(".new-arrivals-slider").slick({nextArrow:".new-arrivals-next.slider-arrow",prevArrow:".new-arrivals-prev.slider-arrow",slidesToShow:3,speed:500,responsive:[{breakpoint:992,settings:{slidesToShow:2}},{breakpoint:768,settings:{slidesToShow:3}},{breakpoint:630,settings:{slidesToShow:2}},{breakpoint:425,settings:{slidesToShow:1}}]}),$(".instagram-widget-slider").slick({arrows:!1,slidesToShow:8,speed:500,autoplay:!1,responsive:[{breakpoint:1400,settings:{slidesToShow:7}},{breakpoint:1e3,settings:{slidesToShow:5,slidesToScroll:2}},{breakpoint:768,settings:{slidesToShow:4,slidesToScroll:2,autoplay:!0,autoplaySpeed:3e3}},{breakpoint:481,settings:{slidesToShow:2,slidesToScroll:2,autoplay:!0,autoplaySpeed:3e3}}]}),$(".big-slider-1").slick({arrows:!1,infinite:!1,fade:!0,asNavFor:".vertical-slider-1"}),$(".vertical-slider-1").slick({nextArrow:".vertical-nav.prev",prevArrow:".vertical-nav.next",slidesToShow:3,vertical:!0,asNavFor:".big-slider-1",centerPadding:"0px",centerMode:!0,focusOnSelect:!0,responsive:[{breakpoint:768,settings:{slidesToShow:3,slidesToScroll:1,vertical:!1}}]}),$(".big-slider-2").slick({arrows:!1,infinite:!1,fade:!0,asNavFor:".nav-slider-2"}),$(".nav-slider-2").slick({nextArrow:".nav-slider.prev",prevArrow:".nav-slider.next",slidesToShow:3,asNavFor:".big-slider-2",centerPadding:"0px",centerMode:!0,focusOnSelect:!0,responsive:[{breakpoint:768,settings:{slidesToShow:3,slidesToScroll:1}}]}),$(".big-slider-6").slick({arrows:!1,infinite:!1,fade:!0,asNavFor:".vertical-slider-6"}),$(".vertical-slider-6").slick({nextArrow:".vertical-nav.prev",prevArrow:".vertical-nav.next",slidesToShow:5,slidesToScroll:1,vertical:!0,asNavFor:".big-slider-6",centerPadding:"0px",centerMode:!0,focusOnSelect:!0,responsive:[{breakpoint:768,settings:{slidesToShow:5,slidesToScroll:1,vertical:!1}},{breakpoint:430,settings:{slidesToShow:4,slidesToScroll:1,vertical:!1}},{breakpoint:350,settings:{slidesToShow:3,slidesToScroll:1,vertical:!1}}]}),$(".partners-slider").slick({slidesToShow:5,slidesToScroll:1,arrows:!1,autoplay:!0,responsive:[{breakpoint:768,settings:{slidesToShow:4}},{breakpoint:630,settings:{slidesToShow:3}},{breakpoint:430,settings:{slidesToShow:2}}]})}function mobileMenu(){$(".toggle-menu >p, .toggle-menu >a span").on("click",function(e){if(windowWidth()<992){event.preventDefault();$(this).closest(".toggle-menu").toggleClass("show").find(">ul").slideToggle()}}),$(".humburger-wrap").on("click",function(){$(".main-navigation").addClass("show-nav")}),$(".close-wrap").on("click",function(){$(".main-navigation").removeClass("show-nav")})}function stickyHeder(){function e(e){e>199?(i.addClass("is-scroll"),$(".clone-nav").show()):i.removeClass("is-scroll")}function t(){i=$("header"),o=$(window).scrollTop(),s=i.outerHeight(!0),$(".clone-nav").css("height",s),e(o)}if(void 0!==$("header")){var i=$("header"),o=$(window).scrollTop(),s=(i.offset().top,i.outerHeight(!0));$('<div class="clone-nav"></div>').insertAfter("header").css("height",s).show(),e(o),$(window).on("scroll",function(){o=$(window).scrollTop(),e(o)}),$(window).on("resize",function(){t()})}}function stickyDesc(){var e,t,i,o,s,a,n=($(".sticky-desc"),$("*").hasClass("sticky-desc")),r=$(window).scrollTop();if(n){var l=windowWidth();$(".sticky-desc").each(function(){var n=$(this);t=n.outerWidth(),a=n.offset().left,s=a-t,e=n.outerHeight(),$('<div class="clone-desc"></div>').insertAfter(n).css({position:"absolute"}).show();var c=n.next(".clone-desc"),d=c.width(),p=(c.height(),c.offset().left);i=c.offset().top;var f=n.closest("section"),u=f.outerHeight();$(window).on("resize",function(){e=n.outerHeight(),t=n.outerWidth(),u=f.outerHeight(),i=$(".product-preview").offset().top,p=c.offset().left,d=c.width(),l=windowWidth(),l>768?(r=$(window).scrollTop(),r+82>=i?(n.addClass("fixed"),n.removeClass("stop"),n.css({position:"fixed",bottom:"auto",top:"82px",left:p+"px",width:d+"px"}),n.outerHeight()+r+82-i>=u&&(o=n.offset().top,n.addClass("stop"),n.css({position:"absolute",top:"auto",bottom:"0",left:"auto",right:"0px"}))):(n.removeClass("fixed"),n.removeClass("stop"),n.removeAttr("style"))):(n.removeClass("fixed"),n.removeClass("stop"),n.removeAttr("style"))}),$(window).on("scroll",function(){l>768?(r=$(window).scrollTop(),r+82>=i?(n.addClass("fixed"),n.removeClass("stop"),n.css({position:"fixed",bottom:"auto",top:"82px",left:p+"px",width:d+"px"}),n.outerHeight()+r+82-i>=u&&(o=n.offset().top,n.addClass("stop"),n.css({position:"absolute",top:"auto",bottom:"0",left:"auto",right:"0px"}))):(n.removeClass("fixed"),n.removeClass("stop"),n.removeAttr("style"))):(n.removeClass("fixed"),n.removeClass("stop"),n.removeAttr("style"))})})}}function popupCart(){$(".header-cart").on("click",function(){$(".popup-cart").addClass("show-popup-cart"),$(".bg-popup").addClass("show-bg"),$("body").css({overflow:"hidden"})}),$(".popup-cart__close").on("click",function(){$(".popup-cart").removeClass("show-popup-cart"),$(".bg-popup").removeClass("show-bg"),$("body").css({overflow:"visible"})}),$(document).mouseup(function(e){var t=$(".popup-cart");!t.is(e.target)&&0===t.has(e.target).length&&$(".popup-cart").hasClass("show-popup-cart")&&($(".popup-cart").removeClass("show-popup-cart"),$(".bg-popup").removeClass("show-bg"),$("body").css({overflow:"visible"}))}),$(".delete-product").on("click",function(){$(this).closest(".product-card-small").fadeOut("slow",function(){$(this).remove()})})}function eqvalHeight(){var e=$(".row_eq >div"),t=e.eq(0).height();e.each(function(){t=$(this).height()>t?$(this).height():t}),e.css({"min-height":t})}function mansoryInit(){$(".grid").imagesLoaded(function(){$(".grid").isotope({itemSelector:".grid-item",columnWidth:".grid-item",isAnimated:!0})})}function gridFilter(){$(".grid-filter a").on("click",function(e){e.preventDefault();var t=$(this).attr("data-filter"),i=$(this).closest(".grid-wrap").find(".grid");i.find(".grid-item");$(".grid-filter a").removeClass("active"),$(this).addClass("active"),$(".grid").isotope({filter:t})})}function makeTimer(){var e=new Date("december 30, 2019 12:00:00 PDT"),t=Date.parse(e)/1e3,i=new Date,o=Date.parse(i)/1e3,s=t-o,a=Math.floor(s/86400),n=Math.floor((s-86400*a)/3600),r=Math.floor((s-86400*a-3600*n)/60),l=Math.floor(s-86400*a-3600*n-60*r);n<"10"&&(n="0"+n),r<"10"&&(r="0"+r),l<"10"&&(l="0"+l),$("#days").html(a+"<span><br></span>"),$("#hours").html(n+"<span><br></span>"),$("#minutes").html(r+"<span><br></span>"),$("#seconds").html(l+"<span><br></span>")}function selectStyle(){$(".select-2").select2(),$(".select").select2(),$(".select2-selection__arrow").html('<span class="mdi mdi-chevron-down"></span>')}function headerSearch(){$(".header-search >.mdi").on("click",function(){$(this).parent().toggleClass("show-search")})}function myRange(){var e=$("#slider-range").attr("data-from"),t=$("#slider-range").attr("data-to");$("#slider-range").slider({range:!0,min:0,max:t,values:[e,t],slide:function(e,t){$(".price-filter #from").val(t.values[0]),$(".price-filter #to").val(t.values[1])}}),$(".price-filter #from").val($("#slider-range").slider("values",0)),$(".price-filter #to").val($("#slider-range").slider("values",1))}function filterAccordeon(){$(".filter-head").on("click",function(){var e=$(this);1==e.next().is(":visible")?(e.next().slideUp(),e.parent().addClass("short"),e.removeClass("filter-head-active")):(e.next().slideDown(),e.addClass("filter-head-active"),e.parent().removeClass("short"))}),$(".filter-body>li .plus").on("click",function(e){e.preventDefault();var t=$(this),i=t.parent();1==i.next().is(":visible")?($(".filter-body>li a, .filter-body>li p").next().slideUp(),$(".filter-body>li a, .filter-body>li p").removeClass("active"),i.next().slideUp(),i.removeClass("active")):($(".filter-body>li a, .filter-body>li p").next().slideUp(),$(".filter-body>li a, .filter-body>li p").removeClass("active"),i.next().slideDown(),i.addClass("active"))})}function showFilter(){$(".show-filter").on("click",function(){$(".sidebar-filter").toggleClass("show"),$(".bg-popup").toggleClass("show-bg")}),$(".close-filter, .bg-popup").on("click",function(){$(".sidebar-filter").removeClass("show"),$(".bg-popup").removeClass("show-bg")})}function backTop(){var e=$("#toTop");e.outerHeight(!0),$(window).height();$(window).on("scroll",function(){$(window).scrollTop()>=400?e.addClass("show_btn"):e.removeClass("show_btn")}),e.on("click",function(){$("html, body").animate({scrollTop:0},600)})}function photoswipeSet(){$(".photoswipe").each(function(){$(this).find("a").each(function(e){$(this).attr("data-index",e)})}),function(e){var t=e(".pswp")[0];e(".photoswipe").each(function(){var i=e(this),o=function(){var t=[];return i.find("a").each(function(){var i=e(this).attr("href"),o=e(this).data("size").split("x"),s=o[0],a=o[1],n={src:i,w:s,h:a};t.push(n)}),t}();i.on("click","a",function(i){i.preventDefault();var s=e(this).data("index"),a={index:s,bgOpacity:.7,showHideOpacity:!0,shareEl:!1,closeOnScroll:!1,history:!1};new PhotoSwipe(t,PhotoSwipeUI_Default,o,a).init()})})}(jQuery)}function countForm(){$(".minus").on("click",function(){var e=($(this),$(this).closest(".counter-area").find("input")),t=parseInt(e.val(),10);t>1?e.val(t=+t-1):e.val(t=1)}),$(".plus").on("click",function(){var e=($(this),$(this).closest(".counter-area").find("input")),t=parseInt(e.val(),10);isNaN(t)?e.val(t=1):e.val(t=+t+1)}),$(".counter-area input").on("keyup",function(){var e=($(this),$(this).closest(".counter-area").find("input")),t=e.val();isNaN(t)?(t=parseInt(e.val(),10),isNaN(t)?e.val(t=1):e.val(t)):t<1&&e.val(t=1)})}function tab(){$("[data-tab]").on("click",function(){var e=$(this),t=e.attr("data-tab");$(t).is(":visible")||($(".tab-content").hide(),$(t).fadeIn(),$("[data-tab]").removeClass("active-tab"),$("[data-tab^='"+t+"']").addClass("active-tab"))}),$(".mobile-accordeon").on("click",function(){var e=$(this).offset().top-100;$("body,html").animate({scrollTop:e},800)})}function cartScript(){$(".delete-cart_product").on("click",function(){$(this).closest(".cart__item").fadeOut("slow",function(){$(this).remove()})}),$(".clear-cart").on("click",function(e){e.preventDefault(),$(this).closest(".cart-table").find(".cart__item").fadeOut("slow",function(){$(this).parent().html("<h3>Cart is empty</h3>"),$(this).remove()})})}function startVideo(e){var t;$(e).on("click",function(){t=$(this).attr("data-video"),$(".video-popup").fadeIn(1e3),$(".video-popup .inner-popup").append('<iframe src="https://www.youtube.com/embed/'+t+'?autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'),$(".close_popup-video, .video-popup .video-bg").click(function(){$(".video-popup").fadeOut(500),$(".video-popup iframe").remove()})})}function initMap(){var e,t;$("*").is("#map")&&(e=document.getElementById("map"));var i={zoom:17.4,center:{lat:34.0887252,lng:-117.2697074},styles:[{featureType:"water",elementType:"geometry",stylers:[{color:"#e9e9e9"},{lightness:17}]},{featureType:"landscape",elementType:"geometry",stylers:[{color:"#f5f5f5"},{lightness:20}]},{featureType:"road.highway",elementType:"geometry.fill",stylers:[{color:"#ffffff"},{lightness:17}]},{featureType:"road.highway",elementType:"geometry.stroke",stylers:[{color:"#ffffff"},{lightness:29},{weight:.2}]},{featureType:"road.arterial",elementType:"geometry",stylers:[{color:"#ffffff"},{lightness:18}]},{featureType:"road.local",elementType:"geometry",stylers:[{color:"#ffffff"},{lightness:16}]},{featureType:"poi",elementType:"geometry",stylers:[{color:"#f5f5f5"},{lightness:21}]},{featureType:"poi.park",elementType:"geometry",stylers:[{color:"#dedede"},{lightness:21}]},{elementType:"labels.text.stroke",stylers:[{visibility:"on"},{color:"#ffffff"},{lightness:16}]},{elementType:"labels.text.fill",stylers:[{saturation:36},{color:"#333333"},{lightness:40}]},{elementType:"labels.icon",stylers:[{visibility:"off"}]},{featureType:"transit",elementType:"geometry",stylers:[{color:"#f2f2f2"},{lightness:19}]},{featureType:"administrative",elementType:"geometry.fill",stylers:[{color:"#fefefe"},{lightness:20}]},{featureType:"administrative",elementType:"geometry.stroke",stylers:[{color:"#fefefe"},{lightness:17},{weight:1.2}]}]};if($("*").is("#map")){t=new google.maps.Map(e,i);for(var o=[{coordinates:{lat:34.0887252,lng:-117.2697074},myMap:t,iconImg:"./img/map-marker.png"}],s=0;s<o.length;s++)!function(e){new google.maps.Marker({position:e.coordinates,map:e.myMap,icon:e.iconImg})}(o[s])}}function inputCheck(){$('input[type="tel"]').mask("+0-000-000-00-00")}function backTop(){function e(e){e>350?$("#backTop").addClass("show-btn"):$("#backTop").removeClass("show-btn")}var t=$(window).scrollTop();$("#backTop").on("click",function(){$("html, body").animate({scrollTop:0},600)}),e(t),$(window).on("scroll",function(){t=$(window).scrollTop(),e(t)})}function initEvents(){$(function(){sliderInit(),sliderNavigation(),mobileMenu(),stickyHeder(),popupCart(),eqvalHeight(),gridFilter(),mansoryInit(),makeTimer(),selectStyle(),headerSearch(),myRange(),filterAccordeon(),showFilter(),inputCheck(),photoswipeSet(),countForm(),tab(),cartScript(),stickyDesc(),backTop()}),$(window).on("load",function(){startVideo(".play"),$(".preloader").fadeOut("slow",function(){$(".preloader-container").remove()})})}setInterval(function(){makeTimer()},1e3),initEvents();