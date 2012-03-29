$(document).ready(function() {
	$(".btn-navbar").click(
		function(event) {
			event.preventDefault();
			$("#foot").removeClass("footer").addClass("sink-footer");
		}
	);
});
