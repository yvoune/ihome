~function() {
	/**
	 * 自定义jquery验证插件
	 */
	$.fn.extend({
		isEmptyString: function() {
			var reg = /^\S+$/;
			return reg.test(this.val());
		},
		isEmail: function() {
			var reg = /^[a-z\d]+(\.[a-z\d]+)*@([\da-z](-[\da-z])?)+(\.{1,2}[a-z]+)+$/;
			return reg.test(this.val());
		},
		isTel: function() {
			var reg = /^1[34578]\d{9}$/;

			return reg.test(this.val());
		},
	    warning : function( title,content ){
	    	title = title || "提示";
	    	content = content || "提交失败";
	    	$(this).html(title.concat(" : ",content)).clearQueue().delay(100).fadeIn("fast").delay(2000).fadeOut("slow");
		}
	});
}();