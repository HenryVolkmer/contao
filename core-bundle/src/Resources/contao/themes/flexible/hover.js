var Theme={isWebkit:Browser.chrome||Browser.safari||navigator.userAgent.match(/(?:webkit|khtml)/i),hoverRow:function(e,t){for(var n=$(e).getChildren(),o=0;o<n.length;o++)"td"==n[o].nodeName.toLowerCase()&&n[o].setStyle("background-color",t?"#fffce1":"");window.console&&console.warn('The Theme.hoverRow() function has been deprecated in Contao 4 and will be removed in Contao 5. Assign the CSS class "hover-row" instead.')},hoverDiv:function(e,t){t||e.removeAttribute("data-visited"),$(e).setStyle("background-color",t?"#fffce1":""),window.console&&console.warn('The Theme.hoverDiv() function has been deprecated in Contao 4 and will be removed in Contao 5. Assign the CSS class "hover-div" instead.')},stopClickPropagation:function(){$$(".picker_selector").each(function(e){e.getElements("a").each(function(e){e.addEvent("click",function(e){e.stopPropagation()})})}),$$(".picker_selector,.click2edit").each(function(e){e.getElements('input[type="checkbox"]').each(function(e){e.addEvent("click",function(e){e.stopPropagation()})})})},setupCtrlClick:function(){$$(".click2edit").each(function(t){t.getElements("a").each(function(e){e.addEvent("click",function(e){e.stopPropagation()})}),Browser.Features.Touch?t.addEvent("click",function(){t.getAttribute("data-visited")?(t.getElements("a").each(function(e){e.hasClass("edit")&&(document.location.href=e.href)}),t.removeAttribute("data-visited")):t.setAttribute("data-visited","1")}):t.addEvent("click",function(e){(Browser.Platform.mac?e.event.metaKey:e.event.ctrlKey)&&(e.event.shiftKey?t.getElements("a").each(function(e){e.hasClass("editheader")&&(document.location.href=e.href)}):t.getElements("a").each(function(e){e.hasClass("edit")&&(document.location.href=e.href)}))})})},setupTextareaResizing:function(){$$(".tl_textarea").each(function(e){if(!(Browser.ie6||Browser.ie7||Browser.ie8||e.hasClass("noresize")||e.retrieve("autogrow"))){var t=new Element("div",{html:"X",styles:{position:"absolute",top:0,left:"-999em","overflow-x":"hidden"}}).setStyles(e.getStyles("font-size","font-family","width","line-height")).inject(document.body);"border-box"!=e.getStyle("-moz-box-sizing")&&"border-box"!=e.getStyle("-webkit-box-sizing")&&"border-box"!=e.getStyle("box-sizing")||t.setStyles({padding:e.getStyle("padding"),border:e.getStyle("border-left")});var n=Math.max(t.clientHeight,30);e.addEvent("input",function(){t.set("html",this.get("value").replace(/</g,"&lt;").replace(/>/g,"&gt;").replace(/\n|\r\n/g,"<br>X"));var e=Math.max(n,t.getSize().y+2);this.clientHeight!=e&&this.tween("height",e)}).set("tween",{duration:100}).setStyle("height",n+"px"),e.fireEvent("input"),e.store("autogrow",!0)}})},setupMenuToggle:function(){var e=$("burger");e&&e.addEvent("click",function(){document.body.toggleClass("show-navigation")}).addEvent("keydown",function(e){27==e.event.keyCode&&document.body.removeClass("show-navigation")})},setupProfileToggle:function(){var e=$("tmenu");if(e){var t=e.getElement(".level_2"),n=e.getElement("h2");t&&n&&(n.addEvent("click",function(e){t.fade("in"),e.stopPropagation()}),$(document.body).addEvent("click",function(){t.getStyle("opacity")&&t.fade("out")}))}},hideMenuOnScroll:function(){if("ontouchmove"in window){var e=window.getSize().y,t=window.getScrollSize().y-e,n=0;t<=e||window.addEvent("touchmove",function(){var e=window.getScroll().y;Math.abs(n-e)<20||(0<e&&n<e?$("header").addClass("down"):$("header").removeClass("down"),n=e)}).addEvent("scroll",function(){window.getScroll().y<1&&$("header").removeClass("down")})}},setupSplitButtonToggle:function(){var t=$("sbtog");if(t){var n,o,i=t.getParent(".split-button").getElement("ul");t.addEvent("click",function(e){n=!1,i.toggleClass("invisible"),t.toggleClass("active"),e.stopPropagation()}),$(document.body).addEvent("click",function(){n=!1,i.addClass("invisible"),t.removeClass("active")}),$(document.body).addEvent("keydown",function(e){n=9==e.event.keyCode}),[t].append(i.getElements("button")).each(function(e){e.addEvent("focus",function(){n&&(i.removeClass("invisible"),t.addClass("active"),clearTimeout(o))}),e.addEvent("blur",function(){n&&(o=setTimeout(function(){i.addClass("invisible"),t.removeClass("active")},100))})}),t.set("tabindex","-1")}}};window.addEvent("domready",function(){Theme.stopClickPropagation(),Theme.setupCtrlClick(),Theme.setupTextareaResizing(),Theme.setupMenuToggle(),Theme.setupProfileToggle(),Theme.hideMenuOnScroll(),Theme.setupSplitButtonToggle()}),window.addEvent("ajax_change",function(){Theme.stopClickPropagation(),Theme.setupCtrlClick(),Theme.setupTextareaResizing()});