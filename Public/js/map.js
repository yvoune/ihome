function loadJScript() {
    var script = document.createElement("script");
    script.type = "text/javascript";
    script.src = "http://api.map.baidu.com/api?v=1.4&callback=init";
    document.body.appendChild(script);
}
function init() {
    var map = new BMap.Map("detailMap");            // 创建Map实例
    //	var point = new BMap.Point(113.40509, 23.070205); // 创建点坐标
    var point = new BMap.Point(113.40423, 23.072142);
    //	map.centerAndZoom(point,16);
    //	map.enableScrollWheelZoom();                 //启用滚轮放大缩小

    //	var local = new BMap.LocalSearch(map, {
    //		renderOptions:{map: map}
    //	});
    //	local.search("广东省广州市番禺区广州大学城广东外语外贸大学");

    //	map.addEventListener("dragend", function(){    
    //	 var center = map.getCenter();    
    //	 alert("地图中心点变更为：" + center.lng + ", " + center.lat);    
    //	});

    // 创建地址解析器实例
    //	var myGeo = new BMap.Geocoder();
    //	// 将地址解析结果显示在地图上,并调整地图视野
    //	myGeo.getPoint("广东省广州市番禺区广州大学城广东外语外贸大学图书馆", function(point){
    //		if (point) {
    map.centerAndZoom(point, 16);
    map.addOverlay(new BMap.Marker(point));
    //			alert('您的位置：'+point.lng+','+point.lat);
    //		}else{
    //			alert("您选择地址没有解析到结果!");
    //		}
    //	}, "北京市");
    //	
}
window.onload = loadJScript;  //异步加载地图