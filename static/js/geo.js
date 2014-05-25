function init_baidu_map(id, city)
{
	var map = new BMap.Map(id);
	// map.centerAndZoom(city, 12);                   // 初始化地图,设置城市和地图级别。
	map.enableScrollWheelZoom();                            //启用滚轮放大缩小
	map.addControl(new BMap.NavigationControl());               // 添加平移缩放控件
	map.addControl(new BMap.ScaleControl());                    // 添加比例尺控件
	map.addControl(new BMap.OverviewMapControl());              //添加缩略地图控件
	map.addControl(new BMap.MapTypeControl());          //添加地图类型控件
	return map;
}