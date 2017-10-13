//功能点1：连锁卖input框搜索建议
sou.onkeyup=function(){
  var v=sou.value;
  if(v==''){
    $('#menu_list').css('display','none');
    return;
  }
  $.ajax({
    type:'GET',
    url:'php/the_first.php',
    data:{"sou":v},
    success:function(obj){
      if(v){ $('#menu_list').css('display','block');}
      var html='';
      for(var i=0;i<obj.length;i++){
        html+=`<li>${obj[i].pname}<span>约${obj.length}条</span></li>`;
        $('#parent').html(html);
      }
    }
  })
}