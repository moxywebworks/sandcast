var cssua=function(e,i,o){var t=/\s*([\-\w ]+)[\s\/\:]([\d_]+\b(?:[\-\._\/]\w+)*)/,n=/([\w\-\.]+[\s\/][v]?[\d_]+\b(?:[\-\._\/]\w+)*)/g,a=/\b(?:(blackberry\w*|bb10)|(rim tablet os))(?:\/(\d+\.\d+(?:\.\w+)*))?/,r=/\bsilk-accelerated=true\b/,s=/\bfluidapp\b/,l=/(\bwindows\b|\bmacintosh\b|\blinux\b|\bunix\b)/,d=/(\bandroid\b|\bipad\b|\bipod\b|\bwindows phone\b|\bwpdesktop\b|\bxblwp7\b|\bzunewp7\b|\bwindows ce\b|\bblackberry\w*|\bbb10\b|\brim tablet os\b|\bmeego|\bwebos\b|\bpalm|\bsymbian|\bj2me\b|\bdocomo\b|\bpda\b|\bchtml\b|\bmidp\b|\bcldc\b|\w*?mobile\w*?|\w*?phone\w*?)/,b=/(\bxbox\b|\bplaystation\b|\bnintendo\s+\w+)/,p={parse:function(e,i){var o={};if(i&&(o.standalone=i),!(e=(""+e).toLowerCase()))return o;for(var p,c,u=e.split(/[()]/),m=0,w=u.length;m<w;m++)if(m%2){var f=u[m].split(";");for(p=0,c=f.length;p<c;p++)if(t.exec(f[p])){var h=RegExp.$1.split(" ").join("_"),v=RegExp.$2;(!o[h]||parseFloat(o[h])<parseFloat(v))&&(o[h]=v)}}else if(f=u[m].match(n))for(p=0,c=f.length;p<c;p++)(h=f[p].split(/[\/\s]+/)).length&&"mozilla"!==h[0]&&(o[h[0].split(" ").join("_")]=h.slice(1).join("-"));return d.exec(e)?(o.mobile=RegExp.$1,a.exec(e)&&(delete o[o.mobile],o.blackberry=o.version||RegExp.$3||RegExp.$2||RegExp.$1,RegExp.$1?o.mobile="blackberry":"0.0.1"===o.version&&(o.blackberry="7.1.0.0"))):b.exec(e)?(o.game=RegExp.$1,p=o.game.split(" ").join("_"),o.version&&!o[p]&&(o[p]=o.version)):l.exec(e)&&(o.desktop=RegExp.$1),o.intel_mac_os_x?(o.mac_os_x=o.intel_mac_os_x.split("_").join("."),delete o.intel_mac_os_x):o.cpu_iphone_os?(o.ios=o.cpu_iphone_os.split("_").join("."),delete o.cpu_iphone_os):o.cpu_os?(o.ios=o.cpu_os.split("_").join("."),delete o.cpu_os):"iphone"!==o.mobile||o.ios||(o.ios="1"),o.opera&&o.version?(o.opera=o.version,delete o.blackberry):r.exec(e)?o.silk_accelerated=!0:s.exec(e)&&(o.fluidapp=o.version),o.edge&&(delete o.applewebkit,delete o.safari,delete o.chrome,delete o.android),o.applewebkit?(o.webkit=o.applewebkit,delete o.applewebkit,o.opr&&(o.opera=o.opr,delete o.opr,delete o.chrome),o.safari&&(o.chrome||o.crios||o.fxios||o.opera||o.silk||o.fluidapp||o.phantomjs||o.mobile&&!o.ios?(delete o.safari,o.vivaldi&&delete o.chrome):o.safari=o.version&&!o.rim_tablet_os?o.version:{419:"2.0.4",417:"2.0.3",416:"2.0.2",412:"2.0",312:"1.3",125:"1.2",85:"1.0"}[parseInt(o.safari,10)]||o.safari)):o.msie||o.trident?(o.opera||(o.ie=o.msie||o.rv),delete o.msie,delete o.android,o.windows_phone_os?(o.windows_phone=o.windows_phone_os,delete o.windows_phone_os):"wpdesktop"!==o.mobile&&"xblwp7"!==o.mobile&&"zunewp7"!==o.mobile||(o.mobile="windows desktop",o.windows_phone=9>+o.ie?"7.0":10>+o.ie?"7.5":"8.0",delete o.windows_nt)):(o.gecko||o.firefox)&&(o.gecko=o.rv),o.rv&&delete o.rv,o.version&&delete o.version,o},format:function(e){var i,o="";for(i in e)if(i&&e.hasOwnProperty(i)){var t=i,n=e[i],a=" ua-"+(t=t.split(".").join("-"));if("string"==typeof n){for(var r=(n=n.split(" ").join("_").split(".").join("-")).indexOf("-");0<r;)a+=" ua-"+t+"-"+n.substring(0,r),r=n.indexOf("-",r+1);a+=" ua-"+t+"-"+n}o+=a}return o},encode:function(e){var i,o="";for(i in e)i&&e.hasOwnProperty(i)&&(o&&(o+="&"),o+=encodeURIComponent(i)+"="+encodeURIComponent(e[i]));return o}};return p.userAgent=p.ua=p.parse(i,o),i=p.format(p.ua)+" js",e.className=e.className?e.className.replace(/\bno-js\b/g,"")+i:i.substr(1),p}(document.documentElement,navigator.userAgent,navigator.standalone);
/*!------------------------------------------------------
 * jQuery nearest v1.0.3
 * http://github.com/jjenzz/jQuery.nearest
 * ------------------------------------------------------
 * Copyright (c) 2012 J. Smith (@jjenzz)
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 *
 * Have you ever tried to find the nearest element down in
 * the DOM that wasn't a child? Then jQuery nearest is for you.
 * And it works traversing both up and down, finding...wait
 * for it...the nearest element. 
 * 
 * Like this: jQuery(this).nearest('.overlay');
 */function updateViewportDimensions(){var e=window,i=document,o=i.documentElement,t=i.getElementsByTagName("body")[0];return{width:e.innerWidth||o.clientWidth||t.clientWidth,height:e.innerHeight||o.clientHeight||t.clientHeight}}!function(e,i){e.fn.nearest=function(o){var t,n,a,r,s,l=i.querySelectorAll;function d(i){n=n?n.add(i):e(i)}return this.each((function(){t=this,e.each(o.split(","),(function(){if((r=e.trim(this)).indexOf("#"))for(s=t.parentNode;s;){if((a=l?s.querySelectorAll(r):e(s).find(r)).length){d(a);break}s=s.parentNode}else d(l?i.querySelectorAll(r):e(r))}))})),n||e()}}(jQuery,document);var viewport=updateViewportDimensions(),waitForFinalEvent=function(){var e={};return function(i,o,t){t||(t="Don't call this twice without a uniqueId"),e[t]&&clearTimeout(e[t]),e[t]=setTimeout(i,o)}}(),timeToWaitForLast=100;function loadGravatars(){(viewport=updateViewportDimensions()).width>=768&&jQuery(".comment img[data-gravatar]").each((function(){jQuery(this).attr("src",jQuery(this).attr("data-gravatar"))}))}jQuery(document).ready((function(e){loadGravatars(),(viewport=updateViewportDimensions()).width,e("p > img").unwrap(),AOS.init({offset:100,duration:600,easing:"ease-in-sine",disable:"mobile"}),e((function(){e(window).scroll((function(){e(this).scrollTop()>200?(e("header").addClass("fixed-header"),e("body").addClass("fixed-header")):(e("header").removeClass("fixed-header"),e("body").removeClass("fixed-header"))}))}));var i=function(){var i=e("header").outerHeight(),o=e(window).height();e(".hero.is-fullheight").css({"min-height":o-i+"px"})};e(window).load((function(){i()})),e(window).resize((function(){i()})),e("#wpadminbar")[0]&&e("header").css("top","32px"),e(".navbar-burger").click((function(){e(".navbar-burger").toggleClass("is-active"),e(".navbar-menu").toggleClass("is-active")})),bulmaCarousel.attach("#carousel",{slidesToScroll:1,slidesToShow:1,loop:!0,navigationKeys:!0,infinite:!1,autoplay:!0,autoplaySpeed:6e3,pauseOnHover:!1,effect:"fade",duration:2e3})}));