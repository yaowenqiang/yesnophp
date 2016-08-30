<?php
use common\YUrl;
require_once(APP_VIEW_PATH . DIRECTORY_SEPARATOR . 'common/header.php');
?>

<style type="text/css">
	html{_overflow-y:scroll}
</style>

<div class="pad_10">
<form action="<?php echo YUrl::createBackendUrl('', 'Role', 'edit'); ?>" method="post" name="myform" id="myform" autocomplete="off">
<table cellpadding="2" cellspacing="1" class="table_form" width="100%">
	<tr>
		<th width="80">角色名称：</th>
		<td><input type="text" name="rolename" id="rolename" size="20" class="input-text" value="<?php echo htmlspecialchars($role['rolename']); ?>"></td>
	</tr>
	<tr>
		<th width="80">排序：</th>
		<td><input type="text" name="listorder" id="listorder" size="5" class="input-text" value="<?php echo $role['listorder']; ?>">(小在前)</td>
	</tr>
	<tr>
		<th width="80">角色说明：</th>
		<td><textarea rows="3" cols="50" name="description" style="height:70px;width:300px;"><?php echo htmlspecialchars($role['description']); ?></textarea></td>
	</tr>
    <tr>
	    <td width="100%" align="center" colspan="2">
	       <input name="roleid" type="hidden" value="<?php echo $role['roleid']; ?>" />
	       <input id="form_submit"  type="button" name="dosubmit" class="btn_submit"  value=" 提交 " />
	    </td>
	</tr>
</table>

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

</body>
</html>