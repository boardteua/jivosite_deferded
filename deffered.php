
add_action('wp_footer', 'jivo_deffered_code');
function jivo_deffered_code(){
		echo '<script type="text/javascript">
		jQuery(document).ready(function ($) {
			function loadScript(filename,callback){
			  var fileref=document.createElement("script");
			  fileref.setAttribute("type","text/javascript");
			  fileref.onload = callback;
			  fileref.setAttribute("src", filename);
			  if (typeof fileref!="undefined"){
				document.getElementsByTagName("head")[0].appendChild(fileref)
			  }
			}
			function calculatePercent(percent, num){
				return (percent / 100) * num;
			}
			
			let loaded = false;
			$(window).on("scroll", function() {
			var scrollHeight = $(document).height();
			var scrollPosition = $(window).height() + $(window).scrollTop();
			
			if ( calculatePercent(50,scrollHeight) < scrollPosition && !loaded ) {
				loadScript("//code.jivosite.com/widget/**********", function(){
						console.log("jivo loaded");
						loaded = true;
						});
				}
			});
			
		});
		</script>';
}
