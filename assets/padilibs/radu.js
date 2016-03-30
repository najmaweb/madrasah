/*
 * WRITTEN by PUJI W PRAYITNO
 * 2014,2015
 * mailto:puji@padi.net.id
 * */
(function($){
	$.fn.stairUp = function(options){
			var settings = $.extend({
			level:1
		},options);
		out=$(this);
		for(i=0;i<settings.level;i++){
			out=out.parent();
		}
		return out;
	}

}(jQuery))
