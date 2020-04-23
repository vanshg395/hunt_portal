function checkAnswer() {
var ans = $('#answer').val();
var dataString = "Answer=" + ans;
$.ajax({
	type: "POST",
	url: "play/checkanswer.php",
	data: dataString,
	success: function(data){
     $('.status').val('Correct Answer');
	},
	error: function(data){
	 $('.status').val('Wrong Answer');
	}
})
return false;
}