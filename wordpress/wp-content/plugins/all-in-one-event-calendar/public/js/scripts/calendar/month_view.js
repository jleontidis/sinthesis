timely.define(["jquery_timely","external_libs/modernizr"],function(e,t){var n=navigator.userAgent.match(/opera/i),r=navigator.userAgent.match(/webkit/i),i=function(t){var n=t.find(".ai1ec-day"),r=t.find(".ai1ec-week:first .ai1ec-day").length;t.find(".ai1ec-month-view .ai1ec-multiday").each(function(){var t=this.parentNode,r=e(this).outerHeight(!0),i=e(".ai1ec-date",t),u=parseInt(i.text(),10),a=e(this).data("endTruncated"),f=parseInt(a?e(n[n.length-1]).text():e(this).data("endDay"),10),l=e(this),c=e(".ai1ec-event",l)[0].style.backgroundColor,h=0,p=f-u+1,d=p,v,m=0;n.each(function(t){var n=e(".ai1ec-date",this),r=e(this.parentNode),i=r.index(),a=parseInt(n.text(),10);if(a>=u&&a<=f){a===u&&(v=parseInt(n.css("marginBottom"),10)+16),h===0&&m++;if(i===0&&a>u&&d!==0){var p=l.next(".ai1ec-popup").andSelf().clone(!1);n.parent().append(p);var g=p.first();g.addClass("ai1ec-multiday-bar ai1ec-multiday-clone"),g.css({position:"absolute",left:"1px",top:parseInt(n.css("marginBottom"),10)+13,backgroundColor:c});var y=d>7?7:d;g.css("width",s(y)),d>7&&g.append(o(1,c)),g.append(o(2,c))}h===0?n.css({marginBottom:v+"px"}):n.css({marginBottom:"+=16px"}),d--,d>0&&i===6&&h++}});if(a){var g=l.find("."+l[0].className.replace(/\s+/igm,".")).last();g.append(o(1,c))}e(this).css({position:"absolute",top:i.outerHeight(!0)-r-1+"px",left:"1px",width:s(m)}),h>0&&e(this).append(o(1,c)),e(this).data("startTruncated")&&e(this).append(o(2,c)).addClass("ai1ec-multiday-bar")}),n.each(function(){var t=e(".ai1ec-date",this),n=parseInt(t.text(),10),r=t.closest(".ai1ec-week"),i=e(this).find("a.ai1ec-event-container:not(.ai1ec-multiday)").length,s=null,o;if(0===i)return;o=r.find("a.ai1ec-multiday[data-end-day]").filter(function(){return e(this).data("startDay")<=n&&e(this).data("endDay")>=n}),o.each(function(){var t=e(this).prop("offsetTop");if(null===s||t>s)s=t}),null!==s&&(s+=3,t.css("marginBottom",s))})},s=function(e){var t;switch(e){case 1:t=97.5;break;case 2:t=198.7;break;case 3:t=300;break;case 4:t=401;break;case 5:r||n?t=507:t=503.4;break;case 6:r||n?t=608:t=603.5;break;case 7:r||n?t=709:t=705}return t+"%"},o=function(t,n){var r=e('<div class="ai1ec-multiday-arrow'+t+'"></div>');return t===1?r.css({borderLeftColor:n}):r.css({borderTopColor:n,borderRightColor:n,borderBottomColor:n}),r};return{extend_multiday_events:i}});