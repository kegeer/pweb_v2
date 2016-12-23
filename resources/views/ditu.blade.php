{{-- <html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>百度地图API自定义地图</title>
<!--引用百度地图API-->
<style type="text/css">
    html,body{margin:0;padding:0;}
    .iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}
    .iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}
</style>
<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
</head>

<body>
  <!--百度地图容器-->
  <div style="width:600px;height:550px;border:#ccc solid 1px;" id="dituContent"></div>
</body>
<script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
        addMarker();//向地图中添加marker
    }

    //创建地图函数：
    function createMap(){
        var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
        var point = new BMap.Point(114.080399,22.714162);//定义一个中心点坐标
        map.centerAndZoom(point,18);//设定地图的中心点和坐标并将地图显示在地图容器中
        window.map = map;//将map变量存储在全局
    }

    //地图事件设置函数：
    function setMapEvent(){
        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
        map.enableScrollWheelZoom();//启用地图滚轮放大缩小
        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
        map.enableKeyboard();//启用键盘上下左右键移动地图
    }

    //地图控件添加函数：
    function addMapControl(){
        //向地图中添加缩放控件
  var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
  map.addControl(ctrl_nav);
        //向地图中添加缩略图控件
  var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
  map.addControl(ctrl_ove);
        //向地图中添加比例尺控件
  var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
  map.addControl(ctrl_sca);
    }

    //标注点数组
    var markerArr = [{title:"谱元科技有限公司",content:"深圳市龙华新区五和大道锦绣科学园8栋西区五楼",point:"114.079869|22.713737",isOpen:0,icon:{w:21,h:21,l:0,t:0,x:6,lb:5}}
     ];
    //创建marker
    function addMarker(){
        for(var i=0;i<markerArr.length;i++){
            var json = markerArr[i];
            var p0 = json.point.split("|")[0];
            var p1 = json.point.split("|")[1];
            var point = new BMap.Point(p0,p1);
      var iconImg = createIcon(json.icon);
            var marker = new BMap.Marker(point,{icon:iconImg});
      var iw = createInfoWindow(i);
      var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
      marker.setLabel(label);
            map.addOverlay(marker);
            label.setStyle({
                        borderColor:"#808080",
                        color:"#333",
                        cursor:"pointer"
            });

      (function(){
        var index = i;
        var _iw = createInfoWindow(i);
        var _marker = marker;
        _marker.addEventListener("click",function(){
            this.openInfoWindow(_iw);
          });
          _iw.addEventListener("open",function(){
            _marker.getLabel().hide();
          })
          _iw.addEventListener("close",function(){
            _marker.getLabel().show();
          })
        label.addEventListener("click",function(){
            _marker.openInfoWindow(_iw);
          })
        if(!!json.isOpen){
          label.hide();
          _marker.openInfoWindow(_iw);
        }
      })()
        }
    }
    //创建InfoWindow
    function createInfoWindow(i){
        var json = markerArr[i];
        var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
        return iw;
    }
    //创建一个Icon
    function createIcon(json){
        var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
        return icon;
    }

    initMap();//创建和初始化地图
</script>
</html> --}}
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>JSAPI与URLAPI结合示例</title>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=1.5&ak=VrexAGNKQkKhXFt9Woc3LfI6ohIuhDWQ"></script>
<script src="http://d1.lashouimg.com/static/js/release/jquery-1.4.2.min.js" type="text/javascript"></script>
<style type="text/css">
html,body{
    width:400px;
    height:300px;
    margin:0;
    overflow:hidden;
    }
</style>
</head>
<body>
    <div style="width:400px;height:300px;border:1px solid gray" id="container"</div>
</body>
</html>
<script type="text/javascript">
    var map = new BMap.Map("container");
    map.centerAndZoom(new BMap.Point(116.403884,39.914887), 13);
    map.enableScrollWheelZoom();
    var marker=new BMap.Marker(new BMap.Point(116.403884,39.914887));
    map.addOverlay(marker);
    var licontent="<b>天安门</b><br>";
        licontent+="<span><strong>地址：</strong>北京市东城区天安门广场北侧</span><br>";
        licontent+="<span><strong>电话：</strong>(010)63095718,(010)63095630</span><br>";
        licontent+="<span class=\"input\"><strong></strong><input class=\"outset\" type=\"text\" name=\"origin\" value=\"北京站\"/><input class=\"outset-but\" type=\"button\" value=\"公交\" onclick=\"gotobaidu(1)\" /><input class=\"outset-but\" type=\"button\" value=\"驾车\"  onclick=\"gotobaidu(2)\"/><a class=\"gotob\" href=\"url=\"http://api.map.baidu.com/direction?destination=latlng:"+marker.getPosition().lat+","+marker.getPosition().lng+"|name:天安门"+"®ion=北京"+"&output=html\" target=\"_blank\"></a></span>";

    var hiddeninput="<input type=\"hidden\" value=\""+'北京'+"\" name=\"region\" /><input type=\"hidden\" value=\"html\" name=\"output\" /><input type=\"hidden\" value=\"driving\" name=\"mode\" /><input type=\"hidden\" value=\"latlng:"+marker.getPosition().lat+","+marker.getPosition().lng+"|name:天安门"+"\" name=\"destination\" />";

    var content1 ="<form id=\"gotobaiduform\" action=\"http://api.map.baidu.com/direction\" target=\"_blank\" method=\"get\">" + licontent +hiddeninput+"</form>";

    var opts1 = { width: 300 };

    var  infoWindow = new BMap.InfoWindow(content1, opts1);
    marker.openInfoWindow(infoWindow);
    marker.addEventListener('click',function(){
        marker.openInfoWindow(infoWindow);
    });

    function gotobaidu(type)
    {
        if($.trim($("input[name=origin]").val())=="")
        {
            alert("请输入起点！");
            return;
        }else{
            if(type==1)
            {
                $("input[name=mode]").val("transit");
                $("#gotobaiduform")[0].submit();
            }else if(type==2)
            {
                $("input[name=mode]").val("driving");
                $("#gotobaiduform")[0].submit();
            }
        }
    }
</script>
