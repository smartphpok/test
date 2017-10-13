//为window绑定滚动事件为function(){}
window.onscroll=function(){
  var li=document.getElementById("article_bg3");
  li.style.visibility=document.body.scrollTop>=800?"visible":"hidden";
}
$("#article_bg3>a").click(
  function(){
    $("body").animate({scrollTop:0}, 500);
  }
);

$(".go").on("click","a",function(){
  $(".gundong>ul").toggleClass('tog');
});



/*用户点击分页条中的页号时，实现数据的异步加载*/
/*用户点击“添加到购物车”则实现商品的购物车添加*/
//“添加到购物车”按钮是后来动态添加的，必需使用事件代理
$('#plist').on('click','.addcart',function(e){
  e.preventDefault();
  var pid = $(this).attr('href');
  var cloneImg=$(this).parent().find('img').eq(0).clone();
  cloneImg.css({'zIndex':'99','opacity':'.5','borderRadius':'50%','width':'80px','height':'80px','position':'absolute','top':$(this).find('img').eq(0).offset().top,'left':$(this).find('img').eq(0).offset().left}).appendTo($('body')).animate({
    'top':$('.shopping').offset().top,
    'left':$('.shopping').offset().left,
  },2000,function(){
    cloneImg.animate({
      'width':0,
      'height':0
    },function(){
      // $('.shopping>a>span').html(++count);
      $(this).detach();
      $(function(){
        $.ajax({
          url: '/Angelababy/Buycar/add',
          type:'POST',
          data: {pid:pid},
          success: function(data){
            //遍历购物车详情列表，拼接HTML片段
            $.ajax({
              url: '/Angelababy/Buycar/select',
              type:'POST',
              success: function(data){
                var count = Number($('.shopping>a>span.count').html());
                $('.shopping>a>span.count').html(++count);
                data = JSON.parse(data);
                var html = '';
                $.each(data, function(i, d){
                  html += `
                  <li>
                    <img src="/Angelababy/Public/${d.pic}">
                    <span>${d.pname.slice(0,2)}</span>
                    <span>${d.count}</span>
                    <b>￥${d.price*d.count}</b>
                    <a href='${d.did}'>&times;</a>
                  </li>
                  `;
                });
                $('.nopro').css('display','none');
                $('.hpro').css('display','block').html(html);
              }
            })
          }
        });
      });
    })
  });
  //发起异步请求
  /*$.ajax({
    type: 'POST',
    url: 'php/buycar_add.php',
    data: {uname:sessionStorage['loginName']||localStorage['loginName'],pid:pid},
    success: function(obj){
      //console.log(obj.pid);
      //alert('添加成功！该商品已购买的数量：'+obj.count);
    }
  });*/

});


///**功能点7：点击“查看购物车”跳转到购物车详情页，传递当前登录的用户名**/
//$('div#header').on('click','#settle_up',function(){
  ////JS跳转到购物车详情页
  //location.href='shoppingcart.html';
//});




$(".zhe>div:last-child>span").click(
  function(){
    $(".zhe").css("display","none");
  }
);