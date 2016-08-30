<?php
use common\YUrl;
require_once (APP_VIEW_PATH . DIRECTORY_SEPARATOR . 'common/dialog_header.php');
?>

<div class="site-form">
	<form action="<?php echo YUrl::createShopUrl('', 'Coupon', 'edit'); ?>" method="post" name="myform" id="myform">
		
		<div class="row">
			<div class="col-1" align="right">
				<div class="label">优惠券名称：</div>
			</div>
			<div class="cc">
				<div class="input">
					<input type="text" style="width:200px;" class="form-input" name="coupon_name" value="<?php echo htmlspecialchars($detail['coupon_name']); ?>">
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-1" align="right">
				<div class="label">领取开始时间：</div>
			</div>
			<div class="cc">
				<div class="input">
					<input type="text" onclick="laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'})" style="width:200px;" class="form-input laydate-icon" name="get_start_time" value="<?php echo htmlspecialchars($detail['get_start_time']); ?>">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-1" align="right">
				<div class="label">领取截止时间：</div>
			</div>
			<div class="cc">
				<div class="input">
					<input type="text" onclick="laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'})" style="width:200px;" class="form-input laydate-icon" name="get_end_time" value="<?php echo htmlspecialchars($detail['get_end_time']); ?>">
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-1" align="right">
				<div class="label">使用过期时间：</div>
			</div>
			<div class="cc">
				<div class="input">
					<input type="text" onclick="laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'})" style="width:200px;" class="form-input laydate-icon" name="expiry_date" value="<?php echo htmlspecialchars($detail['expiry_date']); ?>">
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-1" align="right">
				<div class="label">优惠券金额：</div>
			</div>
			<div class="cc">
				<div class="input">
					<input type="text" style="width:80px;" class="form-input" name="money" value="<?php echo htmlspecialchars($detail['money']); ?>">
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-1" align="right">
				<div class="label">订单金额：</div>
			</div>
			<div class="cc">
				<div class="input">
					<input type="text" style="width:80px;" class="form-input" name="order_money" value="<?php echo htmlspecialchars($detail['order_money']); ?>">
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-1" align="right">
				<div class="label">限领数量：</div>
			</div>
			<div class="cc">
				<div class="input">
					<input type="text" style="width:80px;" class="form-input" name="limit_quantity" value="<?php echo htmlspecialchars($detail['limit_quantity']); ?>">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-1" align="right">
				<div class="label">&nbsp;</div>
			</div>
			<div class="col-8">
				<div class="ctrl">
					<input name="coupon_id" type="hidden" value="<?php echo $detail['coupon_id']; ?>" />
					<input id="form_submit" type="button" value="保存" class="form-submit">
				</div>
			</div>
		</div>

	</form>
</div>

<script type="text/javascript">
<!--

$(document).ready(function(){
	$('#form_submit').click(function(){
	    $.ajax({
	    	type: 'post',
            url: $('form').eq(0).attr('action'),
            dataType: 'json',
            data: $('form').eq(0).serialize(),
            success: function(data) {
                if (data.errcode == 0) {
                	top.dialog.getCurrent().close({"refresh" : 1});
                } else {
                	dialogTips(data.errmsg, 3);
                }
            }
	    });
	});
});

//-->
</script>

<?php
require_once (APP_VIEW_PATH . DIRECTORY_SEPARATOR . 'common/dialog_footer.php');
?>