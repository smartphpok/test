$('.shopping').hover(
  function(){
    $('.shopping>div').stop().slideDown(500);
  },function(){
    $('.shopping>div').stop().slideUp(500);
  }
);
var w =$("#ul>li.mov").css('width');//获得第一个li的宽度
var s=$('#span')//获得span
s.css('width',w);//把第一个里的宽度赋值给span
$("#ul").on("mouseover","li.mov",function(){
  s.css({'width':$(this).css('width'),'visibility':'visible'});
  for(var i=0,l=0;i<$(this).index()-1;i++){
    l+=Number($($('#ul>li.mov')[i]).css('width').slice(0,$($('#ul>li.mov')[i]).css('width').length-2));
  }
  s.css('left',l+'px');
});
$("ul").on("mouseout","li.mov",function(){
  s.css('visibility','hidden');
});



$('#btn_r').click(function(){
  $.ajax({
    url:'/Angelababy/Login/signOut',
    type:'POST',
    success:function(data){
      if(data=='ok') window.location.href = '/Angelababy/Index/index';
      else alert('退出失败');
    }
  })
});


$('.hpro').on('click','a',function(e){
  e.preventDefault();
  $('.count').html(--count);
  $(this).parent().detach();
  var x=$(this)[0].href.slice($(this)[0].href.lastIndexOf('/')+1);
  console.log(11);
  if($('.hpro').html()==''){
    $('.nopro').css('display','block');
    $('.hpro').css('display','none');
  }
  $.ajax({
    type:'POST',
    url: 'php/delete.php',
    data: {'did': x},
    success: function(){
      $.ajax({
        url: 'php/buycar_chaxun.php',
        data: {uname: sessionStorage['loginName']||localStorage['loginName']},
        success: function(detailList){
          //遍历购物车详情列表，拼接HTML片段
          var html = '';
          $.each(detailList, function(i, d){
            html += `
            <tr>
              <td><img src="${d.pic}"></td>
              <td>${d.pname}</td>
              <td>￥${d.price}</td>
              <td>
                ${d.count}
              </td>
              <td><span>￥${d.price*d.count}</span></td>
              <td><a href="${d.did}" class='del'>删除</a></td>
            </tr>
            `;
          });
          if(html!=''){
            $('#cart tbody').html(html);
          }else{
            $('#cart tbody').html(`<h1>您的购物车没有任何商品!</h1>`);
          }
        }
      });
    }
  });
});

window.onload = function(){
  var span = $('.hpro span.count');
  for(var i=0,count=0;i<span.length;i++){
    count+=Number($(span[i]).html());
  }
  $('.shopping>a>span.count').html(count);
}