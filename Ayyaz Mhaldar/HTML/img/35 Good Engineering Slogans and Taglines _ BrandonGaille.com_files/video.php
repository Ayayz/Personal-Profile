    var options = {
        "currentUrl":"/video?zoneid=48047&width=300px&height=250px&siteurl=http://123rede.com&wrapper=video_contioner&adtype=video_image_text_flash&autoplay=1",
        "removeDiv":"0",
        "cdnUrl":"https://ad4game-a.akamaihd.net",
        "wrapper":"video_contioner",
        "descriptionUrl":"http://123rede.com",
        "errorTrackUrl":"https://ads.ad4game.com/www/delivery/lge.php?s=googleima&p=zone%3A48047%3Bwidth%3A3%3Bheight%3A3%3Bdevice%3Ant6.3%3Bad_type%3Avideo%3Bversion%3D4.0&e=[ERRORCODE]",
        "callbackFunction":"",
        "slotId":"6261506245",
        "fallbackAjsZone":"0",
        "forceFullSlot":false,
        "adType":"video_image_text_flash",
        "denyAnalytics":"0",
        "videoFilePath":"//ad4game-a.akamaihd.net/a4gvideo.mp4",
        "height":"250",
        "autoplay":"autoplay",
        "preloaderSizes":"width:300pxpx;height:250pxpx;",
        "width":"300",
        "zoneid":"48,047",
        "isGoogleImaABTesting":true,
        "asyncAjsUrl":"//ads.ad4game.com/www/delivery/async-ajs.php"
    };
var googleImaA4G=function(e){function t(o){if(n[o])return n[o].exports;var i=n[o]={i:o,l:!1,exports:{}};return e[o].call(i.exports,i,i.exports,t),i.l=!0,i.exports}var n={};return t.m=e,t.c=n,t.i=function(e){return e},t.d=function(e,n,o){t.o(e,n)||Object.defineProperty(e,n,{configurable:!1,enumerable:!0,get:o})},t.n=function(e){var n=e&&e.__esModule?function(){return e.default}:function(){return e};return t.d(n,"a",n),n},t.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},t.p="",t(t.s=72)}({72:function(e,t){!function(e){function t(){function t(){if(1==e.removeDiv){var t=function(e){var t=document.getElementById(e);t&&t.parentNode&&t.parentNode.removeChild(t)};t(wrapper),t("a4gpreloader")}else{document.getElementById(e.wrapper).style.display="block",document.getElementById(e.wrapper).style.visibility="visible";try{document.getElementById("a4gpreloader").style.display="none"}catch(e){}}e.callbackFunction&&window[e.callbackFunction]()}document.getElementById(e.wrapper).style.display="none",document.getElementById(e.wrapper).style.visibility="hidden",function(a){function r(){var l=document.createElement("script"),c=function(){++s===d?function(){function a(e,t,n){e.attachEvent?e.attachEvent("on"+t,n):e.addEventListener(t,n,!1)}function r(e){document.getElementById(e).style.display="none"}function d(e){document.getElementById(e).style.display="block",document.getElementById(e).style.visibility="visible"}function s(e){-1!=e?(y=e,k=!0):k=!1,document.getElementById("_4timer").innerHTML=y,k||window.setTimeout(u,1e3*y),R=setInterval(g,1e3)}function l(){var t="a4gV"+Math.round(1e7*Math.random()),n=document.charset?document.charset:document.characterSet?document.characterSet:"",o=e.asyncAjsUrl+"?v=1&da=1&h=0&z="+e.fallbackAjsZone+"&cb="+t+"&c="+n,i=!1,a=document.createElement("script");a.type="text/javascript",a.src=o,a.async=!0,console.log(a),document.getElementsByTagName("head")[0].appendChild(a),a.addEventListener("load",function(){i||setTimeout(function(){i||c()},300)}),a.addEventListener("error",c),window[t]=function(e){if(i=!0,e[0]){var t=document.getElementById("A4Gwrap");t.innerHTML="",t.setAttribute("style","box-sizing: border-box;background-color:#000;display:inline-block;position:relative;margin: 0 auto;width: "+I+"px;height: "+D+"px;"),t&&e[0](t,function(){setTimeout(c,y);for(var e,n=0;n<t.children.length;n++){var o=t.children[n].tagName;if("DIV"===o||"IFRAME"===o||"INS"===o){e=t.children[n];break}}e.style.margin=(t.offsetHeight-e.offsetHeight)/2+"px "+(t.offsetWidth-e.offsetWidth)/2+"px";var i=setTimeout(function(){t.insertAdjacentHTML("beforeend",'<style type="text/css">._a4g_fajs{position:absolute; display:inline-block; width: 40px; right:0px; bottom: 40px;background-color:rgba(0, 0, 0, 0.5); cursor:pointer; color: #fff; border: 1px solid #ccc; padding: 10px 20px}._a4g_fajs:hover{background-color:rgba(200, 200, 200, 0.5);}</style><a class="_a4g_fajs">Skip</a>'),t.querySelector("._a4g_fajs").addEventListener("click",function(){c()},!1)},1e3);e.addEventListener("click",function(){clearTimeout(i),c()},!1)})}}}function c(){r("A4Gwrap"),d(e.wrapper);try{t()}catch(e){}}function p(){c(),M&&M()}function u(){c(),L&&L()}function h(){c(),b&&b()}function g(){var e=Math.round(100-Math.round(100*(y-1)/m));document.getElementById("_4gprogress").style.width=e+"%",(y-=1)<=0?clearInterval(R):document.getElementById("_4timer").innerHTML=y}var y=3e4,m=y,f=function(t){for(var n=0;n<t.length;n++)if(-1!==t[n].src.indexOf(e.currentUrl))return t[n];return document.getElementById(e.wrapper)}(document.scripts);n=window.timerCloseCallbackFunctionName||"gotoGameTimerClose",o=window.userCloseCallbackFunctionName||"gotoGameUserClose",i=window.adClickCallbackFunctionName||"adWasClicked";for(var v=e.adType.split("_"),E=[],A=0;A<v.length;A++)"flash"===v[A]&&(FlashDetect.installed,1)||E.push(v[A]);var T=e.slotId,w=E.join("_"),C=e.descriptionUrl,_=null,b=null,L=null,M=null,I=(document.documentElement.clientWidth||document.body.clientWidth)-0;I>=320&&(I=320);var D=window.innerHeight-40;D>=280&&(D=280),D=e.height||D,I=e.width||I;var R,k=!1;window.removeAd=c,window.noAdsReturned=c;var x=function(e,t){this.controller=e,this.player=t,this.adDisplayContainer=new google.ima.AdDisplayContainer(this.player.adContainer),this.adDisplayContainer.initialize(),this.adsLoader=new google.ima.AdsLoader(this.adDisplayContainer),this.adsManager=null,this.adsLoader.addEventListener(google.ima.AdsManagerLoadedEvent.Type.ADS_MANAGER_LOADED,this.onAdsManagerLoaded,!1,this),this.adsLoader.addEventListener(google.ima.AdErrorEvent.Type.AD_ERROR,this.onAdError,!1,this)};x.prototype.requestAds=function(t){var n=new google.ima.AdsRequest;n.adTagUrl=t,n.forceNonLinearFullSlot=e.forceFullSlot,n.linearAdSlotWidth=this.player.width,n.linearAdSlotHeight=this.player.height,n.nonLinearAdSlotWidth=this.player.width,n.nonLinearAdSlotHeight=this.player.height,this.adsLoader.requestAds(n)},x.prototype.onAdsManagerLoaded=function(e){this.controller.log("Ads loaded."),this.adsManager=e.getAdsManager(this.player.contentPlayer),this.processAdsManager(this.adsManager)},x.prototype.processAdsManager=function(e){e.addEventListener(google.ima.AdEvent.Type.CONTENT_PAUSE_REQUESTED,this.onContentPauseRequested,!1,this),e.addEventListener(google.ima.AdEvent.Type.CONTENT_RESUME_REQUESTED,this.onContentResumeRequested,!1,this),e.addEventListener(google.ima.AdErrorEvent.Type.AD_ERROR,this.onAdError,!1,this);var t=[google.ima.AdEvent.Type.ALL_ADS_COMPLETED,google.ima.AdEvent.Type.CLICK,google.ima.AdEvent.Type.COMPLETE,google.ima.AdEvent.Type.FIRST_QUARTILE,google.ima.AdEvent.Type.LOADED,google.ima.AdEvent.Type.MIDPOINT,google.ima.AdEvent.Type.PAUSED,google.ima.AdEvent.Type.STARTED,google.ima.AdEvent.Type.THIRD_QUARTILE,google.ima.AdEvent.Type.USER_CLOSE];for(var n in t)e.addEventListener(t[n],this.onAdEvent,!1,this);e.init(this.player.width,this.player.height,google.ima.ViewMode.NORMAL),e.start()},x.prototype.pause=function(){this.adsManager&&this.adsManager.pause()},x.prototype.resume=function(){this.adsManager&&this.adsManager.resume()},x.prototype.destroy=function(){this.adsManager&&this.adsManager.destroy()},x.prototype.onContentPauseRequested=function(e){this.controller.pauseForAd()},x.prototype.onContentResumeRequested=function(e){this.controller.resumeAfterAd()},x.prototype.onAdEvent=function(e){e.type==google.ima.AdEvent.Type.CLICK&&(p(),this.destroy(),this.controller.adClicked()),e.type==google.ima.AdEvent.Type.ALL_ADS_COMPLETED&&h(),e.type==google.ima.AdEvent.Type.USER_CLOSE&&h(),e.type==google.ima.AdEvent.Type.COMPLETE&&u(),e.type,google.ima.AdEvent.Type.LOADED,e.type==google.ima.AdEvent.Type.STARTED&&s(e.getAd().getDuration())},x.prototype.onAdError=function(t){this.adsManager&&this.adsManager.destroy(),this.controller.resumeAfterAd(),e.fallbackAjsZone>0?l():u();var n=document.createElement("SCRIPT");err=t.getError(),n.src=e.errorTrackUrl.replace("[ERRORCODE]",encodeURIComponent(err.getErrorCode()+" "+err.getMessage())),n.async=!0,document.body.appendChild(n)};var S=function(e){this.playButton=document.getElementById("_4playpause"),a(this.playButton,"click",this.bind(this,this.onClick)),this.playing=!1,this.adsActive=!1,this.adsDone=!1,this.playerController=e,this.adsController=new x(this,this.playerController),this.adTagUrl="http://googleads.g.doubleclick.net/pagead/ads?ad_type="+w+"&client=ca-games-pub-1232265399417302&slotname="+T+"&videoad_start_delay=0&description_url="+C+"&max_ad_duration="+y};S.prototype.bind=function(e,t){return function(){t.apply(e,arguments)}},S.prototype.onClick=function(){if(!this.adsDone)return this.loadAds(),void(this.adsDone=!0);this.adsActive?this.playing?this.adsController.pause():this.adsController.resume():this.playing,this.playing=!this.playing,this.updateChrome()},S.prototype.updateChrome=function(){this.playing?this.playButton.textContent="II":this.playButton.textContent=String.fromCharCode(9654)},S.prototype.log=function(e){},S.prototype.resumeAfterAd=function(){this.adsActive=!1,this.updateChrome()},S.prototype.pauseForAd=function(){this.adsActive=!0,this.playing=!0,this.updateChrome()},S.prototype.adClicked=function(){this.playing=!1,this.updateChrome()},S.prototype.loadAds=function(){this.adsController.requestAds(this.adTagUrl)};var B=function(){this.contentPlayer=document.getElementById("_4content"),this.adContainer=document.getElementById("_4adcontainer"),this.width=I,this.height=D,this.adPlaying=!1};B.prototype.setAdPlaying=function(e){this.adPlaying=e};try{var O='<div id="A4Gwrap"><div id="_4videoplayer" style="text-align: center;display: inline-block"><div id="_4content"></div><div id="_4adcontainer" style="display: inline-block;position:relative;margin: 0 auto;width: '+I+"px;height: "+D+'px;"></div><button id="_4playpause" style="display:none">&#9654;</button></div><div class="ad_close" style="display:none;padding:1px;margin: 5px auto 0;background: #333;height: 5px;"><span style="display:block;position:relative;background:#FFD700;height:5px;width:0px;transition:width 1s;" id="_4gprogress"></span><span id="_4timer" style="display:none;"></span></div></div>';if(r(e.wrapper),f.insertAdjacentHTML("afterend",O),FlashDetect.installed,!0){_=new S(new B);var g=setTimeout(function(){_.onClick()},100);n&&"function"!=typeof(L=window[n])&&(L=null),o&&"function"!=typeof(b=window[o])&&(b=null),i&&"function"!=typeof(M=window[i])&&(M=null)}}catch(e){t()}}():r()};l.src=a[s],l.type="text/javascript",l.async=!0,l.readyState?setTimeout(function e(){"loaded"===l.readyState?c():setTimeout(e,10)},10):l.onload=c,l.onerror=t,document.getElementsByTagName("head")[0].appendChild(l)}var d=a.length,s=0;r()}(["//s0.2mdn.net/instream/html5/ima3.js",e.cdnUrl+"/flash_detect.js"]),0==e.denyAnalytics&&(window._qevents=window._qevents||[],function(){var e=document.createElement("script");e.src=("https:"==document.location.protocol?"https://secure":"http://edge")+".quantserve.com/quant.js",e.async=!0,e.type="text/javascript";var t=document.getElementsByTagName("script")[0];t.parentNode.insertBefore(e,t)}(),window._qevents.push({qacct:"p-83POQfOeGbhRY"}))}var n,o,i;"loading"===document.readyState?document.addEventListener?document.addEventListener("DOMContentLoaded",t,!1):document.attachEvent&&document.attachEvent("onreadystatechange",function(){"complete"===document.readyState&&t()}):t()}(options)}});