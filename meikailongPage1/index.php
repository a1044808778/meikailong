<?php
require_once "jssdk.php";
$appid = "wxeb71aeb91a4bd76f";
$appsec = "8c4890374a6b185d6184da3693f37f03";
$jssdk = new JSSDK($appid, $appsec);
$signPackage = $jssdk->GetSignPackage();
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Cache-Control" content="no-transform">
<meta http-equiv="Cache-Control" content="no-siteapp">
<meta name="applicable-device" content="mobile">
<meta name="applicable-device" content="mobile">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="format-detection" content="telephone=no">
<meta name="x5-fullscreen" content="true">
<meta name="x5-orientation" content="portrait">
<meta name="x5-page-mode" content="app">
<meta name="full-screen" content="yes">
<meta name="screen-orientation" content="portrait">
<meta name="browsermode" content="application">
<title>红星美凯龙 | 独家冠名天猫超级晚，嗨翻顶秀燃爆618</title>
<link href="./css/info.css" type="text/css" rel="stylesheet">
<link href="./css/am.css" type="text/css" rel="stylesheet">



<style>
</style>
</head>

<body>
    <div class='wap-wrap'>
        <img src="./images/p15.jpg" class='bodybg'>
        <img src="./images/title.png" class='pi title'>
       
        <img class='pi p04' src="./images/p14.png">
        <video class='pi p04' poster="./images/videoCover.jpg" controls>
            <source src="./images/video.mp4" type="video/mp4"> 
        </video>

        <img class='pi p05' src="./images/p09.png">
        <img class='pi p06' src="./images/p08.png">
        <a href="https://w.url.cn/s/AeuwIVK">
            <img class='pi p07' src="./images/p10.png">
            <img class='pi p08' src="./images/p07.png">
            <img class='pi p09' src="./images/p01.png">
            <img class='pi p16' src="./images/p04.png">
        </a>
        <a href="https://w.url.cn/s/AnRXAKd">
            <img class='pi p10' src="./images/p10.png">
            <img class='pi p11' src="./images/p05.png">
            <img class='pi p12' src="./images/p01.png">
            <img class='pi p17' src="./images/p03.png">
        </a>
        <a href="https://w.url.cn/s/AnRXAKd">
            <img class='pi p13' src="./images/p10.png">
            <img class='pi p14' src="./images/p06.png">
            <img class='pi p15' src="./images/p01.png">
            <img class='pi p18' src="./images/p02.png">
        </a>
    </div>





    <script type="text/javascript" src="./js/jquery.min.js"></script>
    <script type="text/javascript" src="./js/jsencrypt.h5.min.js"></script>
    <script type="text/javascript" src="./js/fastclick.js"></script>
    <script src="./js/md5.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://res.wx.qq.com/open/js/jweixin-1.3.2.js"></script> 
    




    <!--开发环境-->
    <!-- <script type="application/javascript" src="https://aureuma.mklmall.com/js/aureuma.data.min.js"></script>  -->
     <!--生产-->
     <script type="application/javascript" src="https://aureuma.mmall.com/js/aureuma.data.min.js"></script> 

    <script type="text/javascript" >
    
        // let appid = "wxc385b3ab85b13741"; //为测试号id
        // let redirect_uri1 = 'http://rs-wx.sny7.com/wxopenid/oauth4/authUserInfo.ashx';
        // let  call_app_id='testopenid';
        // let  call_app_secret='testopenid';
        // let  geturl='http://rs-wx.sny7.com/wxopenid/';
        // let pagep_id='3ecc4a7bc70d58dbd036b5b847fcf0b0';
       
        let appid = "wxefbec73b5639a8f1"; 
        let redirect_uri1 = 'http://wenjiaweb.chinaredstar.com/oauth4/authUserInfo.ashx';
        let  call_app_id='wxauth';
        let  call_app_secret='4548A61EA34343DFB3AF8D7D8338CDD3';
        let  geturl='http://wenjiaweb.chinaredstar.com/';
        let pagep_id='3135301b281d301a7c4d5fda192723e8';



        var jump_url = window.location.href;
        let page_p_id='10093';
        let page_z_id='10094';
        let page_f_id='10101';


        if (isInWeixin()) {
            console.log(1);
          if (!getUrlParam('wxAuthKey2')) {
            https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxc385b3ab85b13741&redirect_uri=http://rs-wx.sny7.com/wxopenid/oauth4/authUserInfo.ashx?jump_url=http://www.baidu.com&response_type=code&scope=snsapi_userinfo&connect_redirect=1#wechat_redirect
             window.location.href =
                 `https://open.weixin.qq.com/connect/oauth2/authorize?appid=${appid}&redirect_uri=${redirect_uri1}?jump_url=${jump_url}&response_type=code&scope=snsapi_userinfo&connect_redirect=1#wechat_redirect`;
            }
            else  {
        
              var wxAuthKey2=  getUrlParam('wxAuthKey2');
              console.log(wxAuthKey2);
              setGuid(wxAuthKey2);
             console.log(333)
              $.ajax({
                dataType:'json',
                url:"http://asdfin.com/getUserInfo",
                type:"get",
                data:{
                    key: wxAuthKey2,
                    call_app_id:call_app_id,
                    call_app_secret:call_app_secret,
                    url:geturl+'getauth/get_auth.ashx',
                },
                success:function (res) {
                    console.log(4);
                    let res1= JSON.parse(res);
                    console.log(res1);
                    if(res1.code == 200){

                        setOpenid(res1.dataMap.openid);
                        setUnionid(res1.dataMap.unionid);



                        setUserInfo(res1.dataMap);
                        tracker_p({id: page_p_id}); 
                        clearAuthTimes();
                    } else {
                        if (addAuthTimes() < 2) { // 不做分享，防止打开别人分享的连接中带有失效的auth_key，需要重新授权一次
                            window.location.href =
                            `https://open.weixin.qq.com/connect/oauth2/authorize?appid=${appid}&redirect_uri=${redirect_uri1}?jump_url=${jump_url}&response_type=code&scope=snsapi_userinfo&connect_redirect=1#wechat_redirect`;
                        }
                    }
                },
                fail: function() {
                    console.log(4);
                    if (addAuthTimes() < 2) { // 不做分享，防止打开别人分享的连接中带有失效的auth_key，需要重新授权一次
                        window.location.href =
                        `https://open.weixin.qq.com/connect/oauth2/authorize?appid=${appid}&redirect_uri=${redirect_uri1}?jump_url=${jump_url}&response_type=code&scope=snsapi_userinfo&connect_redirect=1#wechat_redirect`;
                    }
                }
            });
        
        
             /* var openid, unionid;
              var wxAuthKey = getQueryString('wxAuthKey2');
              setGuid(wxAuthKey);
              $.ajax({
                  dataType:'json',
                  url:"http://tf.redstarbuy.com/index/index/authuserinfo.html",
                  type:"post",
                  data:{
                      wx_auth_key: wxAuthKey
                  },
                  success:function (res) {
                      console.log(4);
                      console.log(res);
                      if(res.status == 1){
                          setOpenid(res.data.openid);
                          setUnionid(res.data.unionid);
                          setUserInfo(res.data);
                          tracker_p({id: '9291'});
                          clearAuthTimes();
                      } else {
                          if (addAuthTimes() < 2) { // 不做分享，防止打开别人分享的连接中带有失效的auth_key，需要重新授权一次
                              location.href = 'https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxefbec73b5639a8f1&redirect_uri=http%3A%2F%2Fwenjiaweb.chinaredstar.com%2Foauth4%2FauthUserInfo.ashx%3Fjump_url%3Dhttp%253A%252F%252Ftf.redstarbuy.com%252F%253Fsource%253Dquanminyingxiao&response_type=code&scope=snsapi_userinfo&connect_redirect=1#wechat_redirect';
                          }
                      }
                  },
                  fail: function() {
                      console.log(4);
                      if (addAuthTimes() < 2) { // 不做分享，防止打开别人分享的连接中带有失效的auth_key，需要重新授权一次
                          location.href = 'https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxefbec73b5639a8f1&redirect_uri=http%3A%2F%2Fwenjiaweb.chinaredstar.com%2Foauth4%2FauthUserInfo.ashx%3Fjump_url%3Dhttp%253A%252F%252Ftf.redstarbuy.com%252F%253Fsource%253Dquanminyingxiao&response_type=code&scope=snsapi_userinfo&connect_redirect=1#wechat_redirect';
                      }
                  }
              })*/
          }
        }
        
        
        /**
        * 根据参数名 获取 URL 路径中的参数
        * @param {String} name 要读取的参数名称
        */
        function getUrlParam (name) {
        var reg = new RegExp('(^|&)' + name + '=([^&]*)(&|$)')
        let url = window.location.href.split('#')[0]
        let search = url.split('?')[1]
        if (search) {
        var r = search.substr(0).match(reg)
        if (r !== null) return unescape(r[2])
        return null
        } else {
        return null
        }
        }
        // 判断安卓
        function isAndroid() {
            var u = navigator.userAgent;
            if (u.indexOf("Android") > -1 || u.indexOf("Linux") > -1) {
                return true;
            }
            return false;
        }
        // console.log('手机是android'+isAndroid());
        // 判断设备为 ios
        function isIos() {
            var u = navigator.userAgent;
            if (u.indexOf("iPhone") > -1 || u.indexOf("iOS") > -1) {
                return true;
            }
            return false;
        }
        function setCode(code) {
            sessionStorage.setItem('code', code);
        }
        function getCode() {
            if(!sessionStorage.getItem('code')&&isInWeixin()&&isAndroid()){
                history.go(-1);
            }
            return sessionStorage.getItem('code') || undefined;
        }
        function addAuthTimes() {
            var authTimes = sessionStorage.getItem('authTimes') || 0;
            sessionStorage.setItem('authTimes', authTimes + 1);
            return authTimes + 1;
        }
        function clearAuthTimes() {
            sessionStorage.removeItem('authTimes');
        }
        function setOpenid(openid) {
            sessionStorage.setItem('openid', openid);
        }
        function getOpenid() {
            if(!sessionStorage.getItem('openid')&&isInWeixin()&&isAndroid()){
                history.go(-1);
            }
            return sessionStorage.getItem('openid') || undefined;
        }
        function setUnionid(unionid) {
            sessionStorage.setItem('unionid', unionid);
        }
        
        function getUnionid() {
            if(!sessionStorage.getItem('unionid')&&isInWeixin()&&isAndroid()){
                history.go(-1);
            }
            return sessionStorage.getItem('unionid') || undefined;
        }
        function setGuid(guid) {
            sessionStorage.setItem('guid', guid);
        }
        function getGuid() {
            if(!sessionStorage.getItem('guid')&&isInWeixin()&&isAndroid()){
                history.go(-1);
            }
            return sessionStorage.getItem('guid') || undefined;
        }
        function setUserInfo(userInfo) {
            sessionStorage.setItem('userInfo', JSON.stringify(userInfo));
        }
        function getUserInfo(attr) {
            if(!sessionStorage.getItem('userInfo')&&isInWeixin()&&isAndroid()){
                history.go(-1);
            }
            var info = sessionStorage.getItem('userInfo') || undefined;
            if (info) {
                var parsed = JSON.parse(info);
                return attr ? parsed[attr] : parsed;
            }
            return info;
        }
        
        function isInWeixin() {
            var userAgent = navigator.userAgent;
            return /micromessenger/i.test(userAgent)
        }
        ///&unionid=xxx(如果还有其他字段可以继续向后拼接。例如：&unionid=xxx&scene=渠道&source_from=环境(1、2、3)&mall_code=商场ID &ticketid=微信券ID&prd=产品名称（prd为必写字段）&act_id=活动id（act_id为必写字段，外部供应商无此字段）
        // &sub_channel=页面id(如果有必须写入双十一大促和品类节一定要写入，若没有可不写入）&marketingall。marketingall 标识是全民营销一定要加且加在末尾
        function getPV1() {
            var source_from = isInWeixin() ? '1' : '3'
            var result = 'source_from='+source_from;
            var result = result + '&prd=big_jz';
            var result = result + '&scene=' + getQueryString('_qd_scene', '');
            var result = result + '&city_code=' + decodeURIComponent(getQueryStringCN('_qd_city', ''));
            var result = result + '&mall_code=' + getQueryString('_qd_oms_code', '');
            if (getUnionid()) {
                var result = result + '&unionid=' + getUnionid();
            }
            var result = result + '&marketingall';
            return result;
        }
        function getPV2() {
            if (!getUserInfo()) {
              return '';
            }
            return 'nickname=' + getUserInfo('nickname') +
                '&sex=' + getUserInfo('sex') + '&headimgurl=' + getUserInfo('headimgurl');
        }
        function tracker_f(params) {
            if (!isTrackerReady()) {
              return;
            }
            data.clickEvent({
                id: params.id,
                service: isInWeixin() ? 'wx' : 'h5',
                p_url: location.href,
                p_v1: getPV1(),
                p_v2: getPV2(),
                u_phone: params.u_phone,
                u_guid: getGuid(),
                u_mid: getOpenid()
            })
        }
        function tracker_p(params) {
            if (!isTrackerReady()) {
                return;
            }
            data.pageAndUserView({
                id: params.id,
                service: isInWeixin() ? 'wx' : 'h5',
                p_url: location.href,
                p_v1: getPV1(),
                p_v2: getPV2(),
                r_url: '',//上一个页面url,若没有可不传
                            u_id: '', //红星的用户id
                            u_mid: getOpenid(),//微信的openid
                            u_guid: getGuid(),//访问sessionid
                            u_phone: '',// 用户登录红星账号后的手机号，未登录不用传
                            p_v1:getPV1() ,  //&unionid=xxx(如果还有其他字段可以继续向后拼接。例如：&unionid=xxx&scene=渠道&source_from=环境(1、2、3)&mall_code=商场ID &ticketid=微信券ID&prd=产品名称（prd为必写字段）&act_id=活动id（act_id为必写字段，外部供应商无此字段）&sub_channel=页面id(如果有必须写入双十一大促和品类节一定要写入，若没有可不写入）&marketingall。marketingall 标识是全民营销一定要加且加在末尾
        
                            p_v2: getPV2(),//微信获取的昵称，性别，头像图标地址的拼接
                            l_country: getUserInfo('country'),  //微信获取的国家
                            l_province: getUserInfo('province'),//微信获取的省份
                            l_city: getUserInfo('city'),		 //微信获取的城市
                p_id: pagep_id,
                u_guid: getGuid(),
                u_mid: getOpenid()
            })
        }
        function tracker_z(params) {
            if (!isTrackerReady()) {
                return;
            }
            data.pageViewTime({
                id: params.id,
                service: isInWeixin() ? 'wx' : 'h5',
                p_url: location.href,
                p_v1: getPV1(),
                p_v2: getPV2(),
                r_url: '',//上一个页面url,若没有可不传
                            u_id: '', //红星的用户id
                            u_mid: getOpenid(),//微信的openid
                            u_guid: getGuid(),//访问sessionid
                            u_phone: '',// 用户登录红星账号后的手机号，未登录不用传
                            p_v1:getPV1() ,  //&unionid=xxx(如果还有其他字段可以继续向后拼接。例如：&unionid=xxx&scene=渠道&source_from=环境(1、2、3)&mall_code=商场ID &ticketid=微信券ID&prd=产品名称（prd为必写字段）&act_id=活动id（act_id为必写字段，外部供应商无此字段）&sub_channel=页面id(如果有必须写入双十一大促和品类节一定要写入，若没有可不写入）&marketingall。marketingall 标识是全民营销一定要加且加在末尾
        
                            p_v2: getPV2(),//微信获取的昵称，性别，头像图标地址的拼接
                            l_country: getUserInfo('country'),  //微信获取的国家
                            l_province: getUserInfo('province'),//微信获取的省份
                            l_city: getUserInfo('city'),		 //微信获取的城市
                p_stay_time: params.p_stay_time,
                p_id: pagep_id,
                u_guid: getGuid(),
                u_mid: getOpenid()
            })
        }
        var showTime;
        $(window).load(function(){
            // console.log('onload'+getOpenid());
            showTime = new Date();
            // setTimeout(function () {
            //     tracker_p({id: page_p_id})
            // },1000);
        
        });
        
        $(window).unload(function(){
            console.log('unload');
            tracker_z({id: page_z_id, p_stay_time: new Date() - showTime})
        });
        
        
        
        function isTrackerReady() {
            return !(isInWeixin() && !getUserInfo());
        }
        function getQueryString(name, defaultVal) {
            var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
            var r = window.location.search.substr(1).match(reg);
            if (r != null) return unescape(r[2]);
            return defaultVal === undefined ? null : defaultVal;
        }
        function getQueryStringCN(name, defaultVal) {
            var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
            var r = window.location.search.substr(1).match(reg);
            if (r != null) return decodeURIComponent(r[2]);
            return defaultVal === undefined ? null : defaultVal;
        }
        
        var qd_oms_code = getQueryString("_qd_oms_code", '');
        var qd_city = getQueryStringCN("_qd_city", '');
        // console.log('qd_city', qd_city)
        var qd_scene = getQueryString("_qd_scene", '');
        //20200303 Bytedance Tracking
        
        if(qd_scene == '98b45876' ||  qd_scene == '66e57f1e'){
            console.log('qd_scene = '+ qd_scene);
        
            if(window.XMLHttpRequest){
                console.log(window.XMLHttpRequest.prototype);
            }
            //window.XMLHttpRequest.prototype.onloada = function(a){
            //    console.log('onload');           
            //} 
        
            (function(r,d,s,l){var meteor=r.meteor=r.meteor||[];meteor.methods=["track","off","on"];meteor.factory=function(method){return function(){
            var args=Array.prototype.slice.call(arguments);args.unshift(method);meteor.push(args);return meteor}};for(var i=0;i<meteor.methods.length;i++){
            var key=meteor.methods[i];meteor[key]=meteor.factory(key)}meteor.load=function(){var js,fjs=d.getElementsByTagName(s)[0];js=d.createElement(s);
            js.src="https://analytics.snssdk.com/meteor.js/v1/"+l+"/sdk";fjs.parentNode.insertBefore(js,fjs)};meteor.load();if(meteor.invoked){return}
            meteor.invoked=true;meteor.track("pageview")})(window,document,"script","1661292747896846");
            //
        }
        var cansubmit = 1;
        
        function encrypt_unionid_openid() {
            //加密解密
            var publicKey='MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCJSbZIwCVydBi/Sashwh/PYZXGKrF+83JupJjCt5q8wUEAlZQJldL5SkUTIiNpZ7to5nlaos0SLDLy/lG+YEzueb8TwMgYrhXvr28zLb61qauDsoQgRvli0FxaIbgDjrWOb06ywM/M9JksfKJcVt+lkPpkIGeX1KP4+V0x7/zZxQIDAQAB';
            //加密
            var encrypt = new JSEncrypt();
            encrypt.setPublicKey(publicKey);
            console.log(getOpenid());
            console.log(getUnionid());
            var encrypted = encrypt.encrypt(getOpenid()+"|"+getUnionid());
            return encrypted;
        }
        function decrypt_unionid_openid(s) {
            //解密
            var publicKey='MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCJSbZIwCVydBi/Sashwh/PYZXGKrF+83JupJjCt5q8wUEAlZQJldL5SkUTIiNpZ7to5nlaos0SLDLy/lG+YEzueb8TwMgYrhXvr28zLb61qauDsoQgRvli0FxaIbgDjrWOb06ywM/M9JksfKJcVt+lkPpkIGeX1KP4+V0x7/zZxQIDAQAB';
            var privateKey='MIICdgIBADANBgkqhkiG9w0BAQEFAASCAmAwggJcAgEAAoGBAIlJtkjAJXJ0GL9JqyHCH89hlcYqsX7zcm6kmMK3mrzBQQCVlAmV0vlKRRMiI2lnu2jmeVqizRIsMvL+Ub5gTO55vxPAyBiuFe+vbzMtvrWpq4OyhCBG+WLQXFohuAOOtY5vTrLAz8z0mSx8olxW36WQ+mQgZ5fUo/j5XTHv/NnFAgMBAAECgYACFiCzElh/WMxXe+Mh7DVXjYAdNuDjsQd4LwAzVV8Ap185hwxs6N3/8+UA2W/4Vh8/BOGrQvYi5JERqFPNtOD2aSNp5at6byw2v6pYRuo7o73SwkwCQpQzLDuqnnuV3mNPY8XSy8j2ZZoZ3fzKFeplZmea4/ulXgiT9zvKggstMQJBAMvIeAd2Yrqt+8WBZErWcHVEGc/4ZlJSb0eG3hCx5ie2YWelw/KyOQyzQ+9XyHxjkUYlSao+BnXIAkh1gNSZofcCQQCsd17JalvS2puG8vaosBh9BiDbqm010a6KKQ6IvxWyxiw8z1dCWrQldPPWofLFzHKsPqqA0dTLVtLBate0JLMjAkA5U1eQodj8Mt1UniWcd96C3nl0a6g9GDt9n47wm1rnaQLVqWgJ6eDqlbNSrRsVAt1nIi4q2e/vSih6QbPQGrfZAkBr/g8nVecLgAF1Hfwfoqyi1MyMYAokchi1wIGuVOC0YezfYwGDtiIpdjMdSakn/B4uBstjAIEbllE/9bP9xCE7AkEAjBqDp5Dc+wPPoK5HZvfN0I/tReOUk9viSG1nzGNPCxyZSNVE1n6D14M1R1nlczqO+JjgTEC7ianB5ArmiUx4cQ==';
            var decrypt = new JSEncrypt();
            decrypt.setPublicKey(publicKey);
            decrypt.setPrivateKey(privateKey);
            var encrypted = decrypt.encrypt(s);
            var decrypted=decrypt.decrypt(encrypted);
        }
        //    encrypt_unionid_openid();
        //    decrypt_unionid_openid();
        
        function urlDelP(url,name){
            var urlArr = url.split('?');
            if(urlArr.length>1 && urlArr[1].indexOf(name)>-1){
                var query = urlArr[1];
                var obj = {}
                var arr = query.split("&");
                for (var i = 0; i < arr.length; i++) {
                    arr[i] = arr[i].split("=");
                    obj[arr[i][0]] = arr[i][1];
                };
                delete obj[name];
                var urlte = urlArr[0] +'?'+ JSON.stringify(obj).replace(/[\"\{\}]/g,"").replace(/\:/g,"=").replace(/\,/g,"&");
                return urlte;
            }else{
                return url;
            };
        }
        console.log('33333343434');
        let shareres;
        /*$.ajax({
            dataType:'json',
            url:"http://page.ctrlc.cc/macalline-story/api.php",
            type:"get",
            crossDomain: true,
            async:false,
            success:function (res) {
                
                wx.config({
                    debug: true, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
                    appId: res.appId, // 必填，公众号的唯一标识
                    timestamp: res.timestamp, // 必填，生成签名的时间戳
                    nonceStr: res.nonceStr, // 必填，生成签名的随机串
                    signature: res.signature,// 必填，签名
                    jsApiList: [
                        'checkJsApi ',
                        'onMenuShareTimeline',
                        'onMenuShareAppMessage',
                    ] // 必填，需要使用的JS接口列表
                });
                wx.error(function (res) {
                   console.log(res)
                });
               
            },
            fail: function(res) {
                console.log(res);
                console.log(4);
               
            }
        
            
        });*/
        
        wx.config({
            debug: false,
            appId: '<?php echo $signPackage["appId"];?>',
            timestamp: <?php echo $signPackage["timestamp"];?>,
            nonceStr: '<?php echo $signPackage["nonceStr"];?>',
            signature: '<?php echo $signPackage["signature"];?>',
            jsApiList: ['onMenuShareTimeline', 'onMenuShareAppMessage']
        });
        
        
        
        //去后台服务器加密
        
        
        wx.ready(function () {   //需在用户可能点击分享按钮前就先调用
            var url= location.href.split('#')[0];//获取当前url,不能带路由
            url = urlDelP(url,'wxAuthKey2');
            // url = urlDelP(url,'parentCode');
               if(getUrlParam('parentCode')){
                     url=url;
                //    url = url+'&parentCode='+(encrypt_unionid_openid());
               }else{
                   url = (url.indexOf("?") != -1)?url+'parentCode='+(encrypt_unionid_openid()):url+'?parentCode='+(encrypt_unionid_openid());
               }
            




            var shareInfo_appMessage = {
                title: '红星美凯龙 | 独家冠名天猫超级晚，嗨翻顶秀燃爆618', // 分享标题
                desc: '6月16日19:30-22:30 江苏卫视&优酷视频现场直播', // 分享描述
        //            link: url, // 分享链接，该链接域名或路径必须与当前页面对应的公众号JS安全域名一致
                imgUrl: 'http://asdfin.com/meikailong/meikailongPage1/images/WechatIMG265.jpeg', // 分享图标
        
                link: url,//传播的链接地址里面包含参数：parentCode;
                // 加密后的（openid|unionid） 注意：openid和unionid需要前端拼接，拼接方式是两者中间加|,如前面括号所示。//拼接后需要js加密（），如果拿不到unionid，只传openid。
                success: function (res) {
                    data.clickEvent({
                            id: page_f_id,
                            service: "wx",//微信环境内定义为wx,小程序环境内定义为miniProgram,其他环境定义为 h5
                            p_url: url,
                            r_url: '',//上一个页面url,若没有可不传
                            u_id: '', //红星的用户id
                            u_mid: getOpenid(),//微信的openid
                            u_guid: getGuid(),//访问sessionid
                            u_phone: '',// 用户登录红星账号后的手机号，未登录不用传
                            p_v1:getPV1() ,  //&unionid=xxx(如果还有其他字段可以继续向后拼接。例如：&unionid=xxx&scene=渠道&source_from=环境(1、2、3)&mall_code=商场ID &ticketid=微信券ID&prd=产品名称（prd为必写字段）&act_id=活动id（act_id为必写字段，外部供应商无此字段）&sub_channel=页面id(如果有必须写入双十一大促和品类节一定要写入，若没有可不写入）&marketingall。marketingall 标识是全民营销一定要加且加在末尾
        
                            p_v2: getPV2(),//微信获取的昵称，性别，头像图标地址的拼接
                            l_country: getUserInfo('country'),  //微信获取的国家
                            l_province: getUserInfo('province'),//微信获取的省份
                            l_city: getUserInfo('city'),		 //微信获取的城市
                            p_item: 'appMessage',//appMessage:分享到朋友,timeLine:分享到朋友圈
                            p_action: '发送',
                            p_action_id: 1,//0代表取消，1代表发送
                            p_id: pagep_id, //任务码
                            p_title: '红星美凯龙拎包入住' //任务名称
                        });
                },
                error:function () {
                    alert('分享错误');
                }
            };
            var shareInfo_timeLine = {
                title: '红星美凯龙 | 独家冠名天猫超级晚，嗨翻顶秀燃爆618', // 分享标题
                desc: '6月16日19:30-22:30 江苏卫视&优酷视频现场直播', // 分享描述
        //            link: url, // 分享链接，该链接域名或路径必须与当前页面对应的公众号JS安全域名一致
                imgUrl: 'http://asdfin.com/meikailong/meikailongPage1/images/WechatIMG265.jpeg', // 分享图标
        
                link: url,//传播的链接地址里面包含参数：parentCode;
                // 加密后的（openid|unionid） 注意：openid和unionid需要前端拼接，拼接方式是两者中间加|,如前面括号所示。//拼接后需要js加密（），如果拿不到unionid，只传openid。
                success: function (res) {
                    data.clickEvent({
                            id: page_f_id,
                            service: "wx",//微信环境内定义为wx,小程序环境内定义为miniProgram,其他环境定义为 h5
                            p_url:url,
                            r_url: '',//上一个页面url,若没有可不传
                            u_id: '', //红星的用户id
                            u_mid: getOpenid(),//微信的openid
                            u_guid: getGuid(),//访问sessionid
                            u_phone: '',// 用户登录红星账号后的手机号，未登录不用传
                            p_v1:getPV1() ,  //&unionid=xxx(如果还有其他字段可以继续向后拼接。例如：&unionid=xxx&scene=渠道&source_from=环境(1、2、3)&mall_code=商场ID &ticketid=微信券ID&prd=产品名称（prd为必写字段）&act_id=活动id（act_id为必写字段，外部供应商无此字段）&sub_channel=页面id(如果有必须写入双十一大促和品类节一定要写入，若没有可不写入）&marketingall。marketingall 标识是全民营销一定要加且加在末尾
        
                            p_v2: getPV2(),//微信获取的昵称，性别，头像图标地址的拼接
                            l_country: getUserInfo('country'),  //微信获取的国家
                            l_province: getUserInfo('province'),//微信获取的省份
                            l_city: getUserInfo('city'),		 //微信获取的城市
                            p_item: 'appMessage',//appMessage:分享到朋友,timeLine:分享到朋友圈
                            p_action: '发送',
                            p_action_id: 1,//0代表取消，1代表发送
                            p_id: pagep_id, //任务码
                            p_title: '红星美凯龙拎包入住' //任务名称
                        });
        
                },
                error:function () {
                    alert('分享错误');
                }
            };
            wx.onMenuShareAppMessage(shareInfo_appMessage);
            wx.onMenuShareTimeline(shareInfo_timeLine);
        });
        
    
    
    </script>

</body>
</html>
