<!doctype html>
<html lang="zh">
<head>
	<meta charset="utf-8">
	<title>{pboot:pagetitle}</title>
	<meta name="keywords" content="{pboot:pagekeywords}">
	<meta name="description" content="{pboot:pagedescription}">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,shrink-to-fit=no">
	<link rel="stylesheet" href="{pboot:sitetplpath}/bootstrap/css/bootstrap.min.css" >
	<link rel="stylesheet" href="{pboot:sitetplpath}/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{pboot:sitetplpath}/css/aoyun.css?v=v1.3.5" >
	<link rel="stylesheet" href="{pboot:sitetplpath}/swiper-4.3.5/css/swiper.min.css">
	<link rel="stylesheet" href="{pboot:sitetplpath}/css/animate.css">
	<link rel="stylesheet" href="{pboot:sitetplpath}/css/base.css">
	<link rel="shortcut icon" href="{pboot:sitetplpath}/images/favicon.ico" type="image/x-icon">
	<script src="{pboot:sitetplpath}/js/jquery-1.12.4.min.js" ></script>
	<script src="{pboot:sitetplpath}/js/base.js" ></script>
	<!-- 站长资源验证 -->
	<meta name="wlhlauth" content="f8ae9873acf846875ff99cc52cad7c5c"/>
	<!-- 百度站长验证 -->
	<meta name="baidu-site-verification" content="mL1geQezlG" />
	<!-- 360站长验证 -->
	<meta name="360-site-verification" content="eab944f97383c180976823d7c56f6c52" />
	<!-- 360站长自动推送 -->
	<script>
	(function(){
	var src = (document.location.protocol == "http:") ? "http://js.passport.qihucdn.com/11.0.1.js?91f80620f442743a6856d6a6c74ce963":"https://jspassport.ssl.qhimg.com/11.0.1.js?91f80620f442743a6856d6a6c74ce963";
	document.write('<script src="' + src + '" id="sozz"><\/script>');
	})();
	</script>
	<!-- 百度站长自动推送 -->
	<script>
	(function(){
			var bp = document.createElement('script');
			var curProtocol = window.location.protocol.split(':')[0];
			if (curProtocol === 'https') {
					bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
			}
			else {
					bp.src = 'http://push.zhanzhang.baidu.com/push.js';
			}
			var s = document.getElementsByTagName("script")[0];
			s.parentNode.insertBefore(bp, s);
	})();
	</script>
	{pboot:sitestatistical}
	<!-- 网站计时 -->
	<script>
		function show_date_time() {
			window.setTimeout("show_date_time()", 1000);
			BirthDay = new Date("4/30/2019 00:00:00");
			today = new Date();
			timeold = (today.getTime() - BirthDay.getTime());
			sectimeold = timeold / 1000;
			secondsold = Math.floor(sectimeold);
			msPerDay = 24 * 60 * 60 * 1000;
			e_daysold = timeold / msPerDay;
			daysold = Math.floor(e_daysold);
			e_hrsold = (e_daysold - daysold) * 24;
			hrsold = Math.floor(e_hrsold);
			e_minsold = (e_hrsold - hrsold) * 60;
			minsold = Math.floor((e_hrsold - hrsold) * 60);
			seconds = Math.floor((e_minsold - minsold) * 60);
			span_dt_dt.innerHTML = "BBQ博客已运行:" + daysold + "天" + hrsold + "小时" + minsold + "分" + seconds + "秒";
		}
		show_date_time();
	</script>
</head>
<body>

<!-- 头部导航 -->
<nav class="navbar navbar-light bg-light fixed-top navbar-expand-lg shadow-sm">
  <div class="container header">
	  	<a class="navbar-brand my-1" href="{pboot:sitepath}/">
	      <img src="{pboot:sitelogo}" class="logo-sm-height"  height="50">
	    </a>
	    
	    <div class="menu" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    	<span></span>
			</div>

			<!-- 搜索-->
			<form class="form-inline" id="head-search" action="{pboot:scaction}"  method="get" style="display:none">
				<div class="form-group">
						<input type="text" name="keyword" class="form-control" placeholder="请输入关键字">
				</div>
				<button type="submit" class="btn btn-info fr">搜索</button>
			</form>
	    
	    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
	        <ul class="navbar-nav">
	       	  <li class="nav-item {pboot:if(0=='{sort:scode}')}active{/pboot:if}">
				 			<a class="nav-link" href="{pboot:sitepath}/" ><i class="fa fa-home"></i> 首页</a>
	          </li>
	          {pboot:nav num=10 parent=0}
							<li class="nav-item dropdown {pboot:if('[nav:scode]'=='{sort:tcode}')}active{/pboot:if}">
								<a class="nav-link" href="[nav:link]">[nav:name]</a>
								<ul class="dropdown-menu">
									{pboot:2nav parent=[nav:scode]}
									<li>
										<a href= "[2nav:link]">[2nav:name]</a>
									</li>
									{/pboot:2nav}
								</ul>
							</li>
	          {/pboot:nav}
	      </ul>
	    </div>
    </div>
</nav>

<!--占位导航栏-->
<div style="height:71px;" class="head-sm-height"></div>


<h1 class="display-none">
  BBQ前端博客是一个WEB前端技术博客，由90后前端工程师舒彬琪创建并维护，本博客分享本人在前端工作和生活中的一些见解和技术积累。也欢迎各位前端爱好者和我一起互相学习，共同进步。本博客创建于2019年4月31日，将不断地进行更新和迭代整体页面，以达到更好的展示效果和交互效果。
</h1>
<div class="container pages">
  <div class="row slide">
    <div class="col-300 col-xs-12">
	    <!-- 当前位置 -->
<div class="text-right position mb-3 d-none d-md-block">当前位置：{pboot:position separator='> '}</div>
      <!-- 分类筛选 -->
      
			<!-- 分类导航 -->
<div class="sonsort mt-4 mb-2">
    {pboot:nav num=10 parent={sort:tcode}}
    	{pboot:if([nav:i]==1)}
            {pboot:2if('{sort:scode}'=='{sort:tcode}')}
                <a href="{sort:toplink}" class="btn btn-info mb-2">全部 <span class="badge badge-light">{sort:toprows}</a>
            {2else}
                <a href="{sort:toplink}" class="btn btn-light mb-2">全部 <span class="badge btn-info">{sort:toprows}</a>
            {/pboot:2if}
        {/pboot:if}
        
        {pboot:if('[nav:scode]'=='{sort:scode}')}
            <a href="[nav:link]" class="btn btn-info mb-2">[nav:name] <span class="badge badge-light">[nav:rows]</span></a>
        {else}
            <a href="[nav:link]" class="btn btn-light mb-2">[nav:name] <span class="badge btn-info">[nav:rows]</span></a>
        {/pboot:if}
    {/pboot:nav}
</div>
      <!-- <div  class="my-3">
          <div class="row">
            <div class="col-12 col-sm-10 col-md-12">
                {pboot:selectall field=ext_type text=全部  class='mb-3 btn btn-light' active='mb-3 btn btn-info'}
                {pboot:select field=ext_type}
                    <a href= "[select:link]" class="mb-3 btn {pboot:if('[select:value]'=='[select:current]')}btn-info{else}btn-light{/pboot:if}">[select:value]</a>  
                {/pboot:select}
            </div>
          </div>
        </div> -->
      
	      <!-- 图文列表 -->
        <div class="row">
            <div class="container">
              <div class="article-index">
              {pboot:list num=8 order=sorting}
              <div class="box-article article-list col-sm-12" data-wow-delay="[list:i]00ms" data-wow-duration="1s">
                <div class="box-card">
                  <h5 class="card-title fw700"><a href="[list:link]">[list:title]{pboot:if([list:istop]==1)}
                      <span class="badge badge-danger">置顶</span>
                      {/pboot:if}
                      {pboot:if([list:isrecommend]==1)}
                        <span class="badge badge-warning">推荐</span>
                      {/pboot:if}
                      {pboot:if([list:isheadline]==1)}
                        <span class="badge badge-info">头条</span>
                      {/pboot:if}</a>
                    </h5>
                  <div class="box-card-left">
                    <a href="[list:link]"><img class="card-img-top" src="[list:ico]" alt="[list:title]"></a>
                  </div>
                  <div class="box-card-right">
                    <p class="card-text fs16">
                      [list:content drophtml=1 lencn=150]
                    </p>
                    <p class="mt10 fs16">
                      <i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;[list:date]&nbsp;&nbsp;&nbsp;<span class="hidden-xs"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;[list:visits]  次</span>
                      <span class="fr"><a href="[list:link]" target="_blank" class="btn btn-info">阅读全文</a></span>
                    </p>
                  </div>
                </div>
              </div>
              {/pboot:list}
              <div class="clear"></div>
            </div>
          </div>
          </div>
          <div class="white-box">
            <!-- 分页 -->
{pboot:if({page:rows}>0)}
   <nav aria-label="page navigation" class="my-4">
     <div class="pagination justify-content-center">
     	<a class="page-item page-link" href="{page:index}">首页</a>
     	<a class="page-item page-link" href="{page:pre}">上一页</a>
      	{page:numbar}<!-- 数字条，小屏幕时自动隐藏-->
      	<a class="page-item page-link" href="{page:next}">下一页</a>
      	<a class="page-item page-link" href="{page:last}">尾页</a>
     </div>
   </nav>	
{else}
   	<div class="text-center my-5 text-secondary">本分类下无任何数据！</div>
{/pboot:if}
          </div>
        </div>
      
<div class="col300 hidden-xs slidebar">
        <!-- 联系方式 -->
        <div class="panel panel-default wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1s">
            <div class="panel-heading">
                <h1 class="panel-title">联系方式</h1>
            </div>
            <div class="panel-body slide1">
                <p><span>作者：</span>舒彬琪</p>
                <p><span>职业：</span>WEB前端工程师</p>
                <p><span>地址：</span>北京市海淀区中关村</p>
                <p><span>Email：</span>1651978720@qq.com</p>
            </div>
        </div>
        <!-- 文章推荐 -->
        <div class="panel panel-default slidebar-h wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1s">
            <div class="panel-heading tab">
                <h1 class="panel-title"><span class="tab-active">热门文章</span>&nbsp;&nbsp;<span>随笔推荐</span></h1>
            </div>
            <div class="panel-body tab-content">
                <div>
                    {pboot:list scode=2,5 num=10 order='visits desc,date desc'}
                    <a href= "[list:link]"><span class="list-num">[list:i]</span> [list:title lencn=9]<span class="fr min50" style="width:50px"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;[list:visits] 次</span></a>
                    {/pboot:list}
                </div>
                <div class="hidden">
                    {pboot:list scode=2 num=10 order='visits desc,date desc'}
                    <a href= "[list:link]"><span class="list-num">[list:i]</span> [list:title lencn=9]<span class="fr min50" style="width:50px"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;[list:visits] 次</span></a>
                    {/pboot:list}
                </div>
            </div>
        </div>
        <!-- 文章搜索 -->
        <div class="panel panel-default wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1s">
            <div class="panel-heading">
                <h1 class="panel-title">关键字搜索</h1>
            </div>
            <div class="panel-body">
                <!-- 搜索-->
                <form class="form-inline" action="{pboot:scaction}"  method="get">
                    <div class="form-group">
                        <input type="text" name="keyword" class="form-control" placeholder="请输入关键字">
                    </div>
                    <button type="submit" class="btn btn-info fr">搜索</button>
                </form>
            </div>
        </div>
        <!-- 友情链接 -->
        <div class="panel panel-default wow fadeInRight" data-wow-delay="500ms" data-wow-duration="1s">
            <div class="panel-heading">
                <h1 class="panel-title">友情链接</h1>
            </div>
            <div class="panel-body link-slide">
                {pboot:link gid=1 num=10}
                <span><a href="[link:link]" title="[link:name]" target="_blank">[link:name lencn=8]</a></span>
                {/pboot:link}
                <div class="clear"></div>
            </div>
        </div>
        <!-- 好友位 -->
        <div class="panel panel-default wow fadeInRight" data-wow-delay="600ms" data-wow-duration="1s">
            <div class="panel-heading">
                <h1 class="panel-title">好友位</h1>
            </div>
            <div class="panel-body friend-slide">
                <!-- 链接-->
                {pboot:link gid=2}
                    <span><a href="[link:link]" title="[link:name]" target="_blank">[link:name]</a></span> 
                {/pboot:link}
                <div class="clear"></div>
            </div>
        </div>
        <!-- 博客简介 -->
        <div class="panel panel-default wow fadeInRight" data-wow-delay="700ms" data-wow-duration="1s">
            <div class="panel-heading">
                <h1 class="panel-title">关于</h1>
            </div>
            <div class="panel-body slide1">
                <p><span>博客名称：</span>BBQ前端博客 | WEB前端博客</p>
                <p><span>作者简介：</span>舒彬琪 | WEB前端工程师</p>
                <p><span>建站时间：</span>2019年4月30日</p>
                <p><span>后台系统：</span><a href="https://www.pbootcms.com/docs.html" target="_blank">PbootCMS</a></p>
                <p><span>网站标签：</span>标签云</p>
                <p><span>文章统计：</span>{pboot:sort scode=2}[sort:rows]{/pboot:sort} 篇 <a href="http://blog.syabq.cn/list/2.html" class="acitve-ff4c4c">随笔</a> | {pboot:sort scode=5}[sort:rows]{/pboot:sort} 篇 <a href="http://blog.syabq.cn/list/5.html" class="acitve-ff4c4c">文章</a></p>
                <p><span>统计数据：</span><a href="https://tongji.baidu.com/web/27850992/overview/index?siteId=13381966" target="_blank">百度统计</a></p>
            </div>
        </div>
    </div>    
    </div>
    
</div>


<div class="footer text-secondary bg-light">
	<!-- <div class="container">
    	<div class="row pb-5">
            <div class="col-12 col-md-5">
            	<h5>{pboot:companyname}</h5>
                <ul class="lh-2">
                	<li>博客官网：{pboot:sitedomain}  </li>
                    <li>备案号：{pboot:siteicp} </li>
                    <li>地址：{pboot:companyaddress} </li>
                </ul>
            </div>
            <div class="col-12 col-md-5">
            	<div class="mt-4 d-block d-md-none"></div>
                
            	<h5>联系我</h5>
                <ul class="lh-2">
                    <li>电话：{pboot:companyphone} </li>
                    <li>邮箱：{pboot:companyemail} </li>
                    <li>Q&nbsp;&nbsp;Q：{pboot:companyqq} </li>
                </ul>
            </div>
            <div class="col-12 col-md-2 text-center d-none d-md-block">
            	<p class="code">{pboot:qrcode string={pboot:httpurl}<?php echo URL;?>} </p>
                <p class="small">扫一扫 手机访问</p>
            </div>
        </div>
	</div> -->
    <div class="copyright border-top lh-3 text-center  d-none d-md-block">
        <p>{pboot:sitecopyright}&nbsp;备案号：<a href="http://www.miitbeian.gov.cn" target="_blank">{pboot:siteicp}</a> </p>
        <p><span id="span_dt_dt"></span></p> 
    </div>
</div>

<!-- 占位 -->
<div style="height:49px;" class="d-block d-sm-none"></div>

<!-- 手机底部导航 -->
<div class="container-fluid bg-info fixed-bottom d-block d-sm-none">
    <div class="row">
        <div class="col-4 p-0 text-center border-right">
            <a href="tel:{pboot:companymobile}" class="text-light d-block pt-3 pb-3"><i class="fa fa-phone" aria-hidden="true"></i> 电话咨询</a>
        </div>
        <div class="col-4 p-0 text-center border-right">
            <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin={pboot:companyqq}&site=qq&menu=yes" class="text-light d-block pt-3 pb-3"><i class="fa fa-qq" aria-hidden="true"></i> 在线咨询</a>
        </div>
        <div class="col-4 p-0 text-center">
            <a href="{pboot:siteindex}/about/1.html" class="text-light d-block pt-3 pb-3"><i class="fa fa-location-arrow" aria-hidden="true"></i> 关于我们</a>
        </div>
    </div>
</div>

<!-- 在线客服 -->
<div class="online d-none d-md-block">
	<dl>
		<dt style="width:150px;">
        	<h3><i class="fa fa-commenting-o"></i>在线咨询<span class="remove"><i class="fa fa-remove"></i></span></h3>
            <p>
            	<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin={pboot:companyqq}&site=qq&menu=yes">
                	<img border="0" src="http://wpa.qq.com/pa?p=2:{pboot:companyqq}:52" alt="点击这里给我发消息" title="点击这里给我发消息"/>
               		 添加个人QQ
                </a>
            </p>
             <!-- <p>
                <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin={pboot:companyqq}&site=qq&menu=yes">
                	<img border="0" src="http://wpa.qq.com/pa?p=2:{pboot:companyqq}:52" alt="点击这里给我发消息" title="点击这里给我发消息"/>
               		 售后服务专员
                </a>
            </p> -->
        </dt>
		<dd><i class="fa fa-commenting-o"></i></dd>
		<dd>在线咨询</dd>
	</dl>
    
	<!-- <dl>
		<dt style="width:300px;">
        	<h3><i class="fa fa-volume-control-phone"></i>免费通话<span class="remove"><i class="fa fa-remove"></i></span></h3>
            <p>24小时免费咨询</p>
            <p>请输入您的联系电话，座机请加区号</p>
            <form  onsubmit="return subform(this);">
            	<p><input type="text" name="tel" id="tel" autocomplete="off"  placeholder="请输入您的电话号码" required maxlength="30"></p>
                <p><button type="submit">免费通话</button></p>
            </form>
        </dt>
		<dd><i class="fa fa-volume-control-phone" aria-hidden="true"></i></dd>
		<dd>免费通话</dd>
	</dl> -->
    
    <dl>
		<dt style="width:200px;">
        	<h3><i class="fa fa-weixin" aria-hidden="true"></i>微信扫一扫<span class="remove"><i class="fa fa-remove"></i></span></h3>
           	<p><img src="{pboot:companyweixin} " width="100%"></p>
        </dt>
		<dd><i class="fa fa-weixin" aria-hidden="true"></i></dd>
		<dd>微信联系</dd>
	</dl>
    
	<dl class="scroll-top">
		<dd><i class="fa fa-chevron-up"></i></dd>
		<dd>返回顶部</dd>
	</dl>
</div>

<script src="{pboot:sitetplpath}/js/popper.min.js"></script>
<script src="{pboot:sitetplpath}/bootstrap/js/bootstrap.min.js"></script>
<script src="{pboot:sitetplpath}/js/wow.min.js"></script>
<script src="{pboot:sitetplpath}/js/aoyun.js?v=v1.2.2"></script>
<script>
//ajax提交表单
function subform(obj){
  var url='{pboot:form fcode=2}';
  var tel=$(obj).find("#tel").val();
  
  var reg = /^(1|0)[\d\-]+$/;   
  if (!reg.test(tel)) {
	  alert('电话号码错误！');
	  return false;
  }
  
  $.ajax({
    type: 'POST',
    url: url,
    dataType: 'json',
    data: {
    	tel: tel
    },
    success: function (response, status) {
      if(response.code){
		 alert("您的来电已收到，我们会尽快联系您！");
		 $(obj)[0].reset(); 
      }else{
    	 alert(response.data);
      }
    },
    error:function(xhr,status,error){
      alert('返回数据异常！');
    }
  });
  return false;
}
</script>

{pboot:sitestatistical}

</body>
</html>
<?php return array (
  0 => 'C:/Shubinqi/wwwroot/blog.syabq.cn_765tm6/web/template/default/comm/head.html',
  1 => 'C:/Shubinqi/wwwroot/blog.syabq.cn_765tm6/web/template/default/comm/position.html',
  2 => 'C:/Shubinqi/wwwroot/blog.syabq.cn_765tm6/web/template/default/comm/sortnav.html',
  3 => 'C:/Shubinqi/wwwroot/blog.syabq.cn_765tm6/web/template/default/comm/page.html',
  4 => 'C:/Shubinqi/wwwroot/blog.syabq.cn_765tm6/web/template/default/comm/slidebar.html',
  5 => 'C:/Shubinqi/wwwroot/blog.syabq.cn_765tm6/web/template/default/comm/foot.html',
); ?>