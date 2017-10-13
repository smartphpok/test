<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<style type="text/css">
			#main{
				width: 800px;
				margin: 0 auto;
				
			}
			#kong{
				width: 600px;
				height: 300px;
				text-align: center;
				line-height: 300px;
				font-size: 20px;
				color: #FF4980;
			}
			#foot{
				width: 800px;
				margin: 80px auto;
				
			}
			#top{
				height: 50px;
				line-height: 80px;
				
			}
			table{
				width: 700px;
				height: 300px;
				text-align: center;
			}
			#pay{
				
				float: right;
				margin-right: 50px;
			}
			a{
				cursor:pointer;
			}
			#page{
				margin-left: 560px;
			}
			#car{
				margin-right: 10px;
			}
			
		</style>
		<link rel="stylesheet" type="text/css" href="/lianshuomai/Public/Home/css/page.css"/>
	</head>
	<body>
		<div id="main">
			<div id="top">
				<img src="/lianshuomai/Public/Home/images/cart.jpg" id="car"/>
				| <span><?php echo ($_SESSION['username']); ?>的购物车</span> | 
			</div>
			<hr />
			<?php if($arr): ?><div id="foot">
				<table border="0" cellspacing="" cellpadding="10">
					<tr>
						<th>商品名称</th>
						<th>商品单价</th>						
						<th>商品数量</th>
						<th>总价</th>
						<th>操作</th>
					</tr>
					<?php if(is_array($arr)): foreach($arr as $k=>$v): ?><tr>
							<td><?php echo ($v["spname"]); ?></td>
							<td id="price">￥<?php echo ($v["price"]); ?></td>								
							<td id="count"><?php echo ($v["count"]); ?></td>
							<td id="numm">￥<?php echo ($v['price']*$v['count']); ?></td>
							<td><a data-id='<?php echo ($v["bid"]); ?>'>删除</a></td>
						</tr><?php endforeach; endif; ?>
				</table>
				<br /><br />
				<div class="pager">
					<?php echo ($pageStr); ?>
				</div>
					
				<div id="pay">
					<a href="#"><img src="/lianshuomai/Public/Home/images/pay.jpg"/></a>
				</div>
			</div>
		</div>
		<?php else: ?>
		<div id="kong">
			您的购物车空啦!!!快去抢购吧~~~
		</div><?php endif; ?>
		<script src='/lianshuomai/Public/jquery/jquery.min.js'></script>
		<script>
			$('#foot').on('click','a',function(){
				var $this = $(this);
				$.ajax({
					url:'/lianshuomai/index.php/Home/Cart/delete',
					type:'post',
					data:'bid='+$(this).attr('data-id'),
					success:function(data){
						if(data=='ok')$this.parents('tr').remove();
						else alert('删除失败');
					}
				})
				
			});
//			var ho = $('#price').html();
//			var price = ho.substr(1);
//			var count = $('#count').html();
//			var num = Number(price)*Number(count);
//			$('#numm').html('￥'+num);
		</script>
		
	</body>
</html>