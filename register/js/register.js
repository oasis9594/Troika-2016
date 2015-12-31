$(document).ready(function () {
	$("section").not(":nth-of-type(1)").hide();
	$("select").change(function () {
		console.log("changed");
		var mems = $("select").val();
		mems = parseInt(mems);
		for (var i = 0; i < mems; i++) {
			$($("section")[i]).show();
		}
		for (var i = mems; i < 5; i++) {
			$($("section")[i]).hide();
		}
	});
});