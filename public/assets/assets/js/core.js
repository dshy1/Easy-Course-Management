let hexToRgba=function(e,t){let l=/^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(e),r=l?{r:parseInt(l[1],16),g:parseInt(l[2],16),b:parseInt(l[3],16)}:null;return"rgba("+r.r+", "+r.g+", "+r.b+", "+t+")"};$(document).ready(function(){if($('[data-toggle="tooltip"]').tooltip(),$('[data-toggle="popover"]').popover({html:!0}),$('[data-toggle="card-remove"]').on("click",function(e){return $(this).closest("div.card").remove(),e.preventDefault(),!1}),$('[data-toggle="card-collapse"]').on("click",function(e){return $(this).closest("div.card").toggleClass("card-collapsed"),e.preventDefault(),!1}),$('[data-toggle="card-fullscreen"]').on("click",function(e){return $(this).closest("div.card").toggleClass("card-fullscreen").removeClass("card-collapsed"),e.preventDefault(),!1}),$("[data-sparkline]").length){let e=function(e,t,l){e.sparkline(t,{type:e.attr("data-sparkline-type"),height:"100%",barColor:l.color,lineColor:l.color,fillColor:"transparent",spotColor:l.color,spotRadius:0,lineWidth:2,highlightColor:hexToRgba(l.color,.6),highlightLineColor:"#666",defaultPixelsPerValue:5})};require(["sparkline"],function(){$("[data-sparkline]").each(function(){let t=$(this);e(t,JSON.parse(t.attr("data-sparkline")),{color:t.attr("data-sparkline-color")})})})}$(".chart-circle").length&&require(["circle-progress"],function(){$(".chart-circle").each(function(){let e=$(this);e.circleProgress({fill:{color:tabler.colors[e.attr("data-color")]||tabler.colors.blue},size:e.height(),startAngle:-Math.PI/4*2,emptyFill:"#F4F4F4",lineCap:"round"})})})});
