(function(c){function a(d){if(d.attr("title")||typeof(d.attr("original-title"))!="string"){d.attr("original-title",d.attr("title")||"").removeAttr("title")}}function b(e,d){this.$element=c(e);this.options=d;this.enabled=true;a(this.$element)}b.prototype={show:function(){var g=this.getTitle();if(g&&this.enabled){var f=this.tip();f.find(".tipsy-inner")[this.options.html?"html":"text"](g);f[0].className="tipsy";f.remove().css({top:0,left:0,visibility:"hidden",display:"block"}).appendTo(document.body);var j=c.extend({},this.$element.offset(),{width:this.$element[0].offsetWidth,height:this.$element[0].offsetHeight});var d=f[0].offsetWidth,i=f[0].offsetHeight;var h=(typeof this.options.gravity=="function")?this.options.gravity.call(this.$element[0]):this.options.gravity;var e;switch(h.charAt(0)){case"n":e={top:j.top+j.height+this.options.offset,left:j.left+j.width/2-d/2};break;case"s":e={top:j.top-i-this.options.offset,left:j.left+j.width/2-d/2};break;case"e":e={top:j.top+j.height/2-i/2,left:j.left-d-this.options.offset};break;case"w":e={top:j.top+j.height/2-i/2,left:j.left+j.width+this.options.offset};break}if(h.length==2){if(h.charAt(1)=="w"){e.left=j.left+j.width/2-15}else{e.left=j.left+j.width/2-d+15}}f.css(e).addClass("tipsy-"+h);if(this.options.fade){f.stop().css({opacity:0,display:"block",visibility:"visible"}).animate({opacity:this.options.opacity})}else{f.css({visibility:"visible",opacity:this.options.opacity})}}},hide:function(){if(this.options.fade){this.tip().stop().fadeOut(function(){c(this).remove()})}else{this.tip().remove()}},getTitle:function(){var f,d=this.$element,e=this.options;a(d);var f,e=this.options;if(typeof e.title=="string"){f=d.attr(e.title=="title"?"original-title":e.title)}else{if(typeof e.title=="function"){f=e.title.call(d[0])}}f=(""+f).replace(/(^\s*|\s*$)/,"");return f||e.fallback},tip:function(){if(!this.$tip){this.$tip=c('<div class="tipsy"></div>').html('<div class="tipsy-arrow"></div><div class="tipsy-inner"/></div>')}return this.$tip},validate:function(){if(!this.$element[0].parentNode){this.hide()}},enable:function(){this.enabled=true},disable:function(){this.enabled=false},toggleEnabled:function(){this.enabled=!this.enabled}};c.fn.tipsy=function(h){if(h===true){return this.data("tipsy")}else{if(typeof h=="string"){return this.data("tipsy")[h]()}}h=c.extend({},c.fn.tipsy.defaults,h);function g(k){var l=c.data(k,"tipsy");if(!l){l=new b(k,c.fn.tipsy.elementOptions(k,h));c.data(k,"tipsy",l)}return l}function j(){var k=g(this);k.hoverState="in";if(h.delayIn==0){k.show()}else{setTimeout(function(){if(k.hoverState=="in"){k.show()}},h.delayIn)}}function f(){var k=g(this);k.hoverState="out";if(h.delayOut==0){k.hide()}else{setTimeout(function(){if(k.hoverState=="out"){k.hide()}},h.delayOut)}}if(!h.live){this.each(function(){g(this)})}if(h.trigger!="manual"){var d=h.live?"live":"bind",i=h.trigger=="hover"?"mouseenter":"focus",e=h.trigger=="hover"?"mouseleave":"blur";this[d](i,j)[d](e,f)}return this};c.fn.tipsy.defaults={delayIn:0,delayOut:0,fade:false,fallback:"",gravity:"n",html:false,live:false,offset:0,opacity:1,title:"title",trigger:"hover"};c.fn.tipsy.elementOptions=function(e,d){return c.metadata?c.extend({},d,c(e).metadata()):d};c.fn.tipsy.autoNS=function(){return c(this).offset().top>(c(document).scrollTop()+c(window).height()/2)?"s":"n"};c.fn.tipsy.autoWE=function(){return c(this).offset().left>(c(document).scrollLeft()+c(window).width()/2)?"e":"w"}})(jQuery);