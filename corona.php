<html>

<head>
	<title>Send HTTP Get Request using PHP</title>
	<script src="https://code.jquery.com/jquery-latest.js"></script>
	<script>
		$.get('http://localhost/covid-19/get_newcase.php')
			.done((data) => {
				$('#newcase').html(data);
			})
			.fail((error) => console.error(error))
			.always(() => console.log('Done'));

		$.get('http://localhost/covid-19/get_total.php')
			.done((data) => {
				$('#total').html(data);
			})
			.fail((error) => console.error(error))
			.always(() => console.log('Done'));

		$.get('http://localhost/covid-19/get_activecase.php')
			.done((data) => {
				$('#activecase').html(data);
			})
			.fail((error) => console.error(error))
			.always(() => console.log('Done'));

		$.get('http://localhost/covid-19/get_localdeaths.php')
			.done((data) => {
				$('#deaths').html(data);
			})
			.fail((error) => console.error(error))
			.always(() => console.log('Done'));

		$.get('http://localhost/covid-19/get_localrecovered.php')
			.done((data) => {
				$('#recover').html(data);
			})
			.fail((error) => console.error(error))
			.always(() => console.log('Done'));

		$.get('http://localhost/covid-19/get_total_invidual.php')
			.done((data) => {
				$('#indiv').html(data);
			})
			.fail((error) => console.error(error))
			.always(() => console.log('Done'));

		$.get('http://localhost/covid-19/get_global_confirm.php')
			.done((data) => {
				$('#globaltotal').html(data);
			})
			.fail((error) => console.error(error))
			.always(() => console.log('Done'));

		$.get('http://localhost/covid-19/get_global_newcase.php')
			.done((data) => {
				$('#globalnewcase').html(data);
			})
			.fail((error) => console.error(error))
			.always(() => console.log('Done'));

		$.get('http://localhost/covid-19/get_global_death.php')
			.done((data) => {
				$('#globaldeath').html(data);
			})
			.fail((error) => console.error(error))
			.always(() => console.log('Done'));

		$.get('http://localhost/covid-19/get_global_recover.php')
			.done((data) => {
				$('#globalrecover').html(data);
				console.log(data)

			})
			.fail((error) => console.error(error))
			.always(() => console.log('Done'));
	</script>
</head>

<body>
	<center>
		<h3>COVID-19 Updates Srilanka</h3>
		<form>
			Total Number Of Patients :<label id="total"></label></br>
			Number Of New Cases : <label id="newcase"></label></br>
			Number Of Active Case: <label id="activecase"></label></br>
			Total Number Of deaths :<label id="deaths"></label></br>
			Total Number Of recovered :<label id="recover"></label></br>
			Total number of individuals in hospitals :<label id="indiv"></label></br>


		</form>
		<h3>COVID-19 Updates global</h3>
		<form>
			Total Confirmed Cases :<label id="globaltotal"></label></br>
			Number Of New Cases : <label id="globalnewcase"></label></br>
			Number Of Death: <label id="globaldeath"></label></br>
			Total Number Of Recovered :<label id="globalrecover"></label></br>



		</form>
		<br>

	</center>
</body>

</html>