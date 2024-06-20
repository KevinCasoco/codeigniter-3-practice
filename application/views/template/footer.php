		<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

		<script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap4.js"></script>
		
		<script>
			let table = new DataTable('#empTable');
		</script>

		<script>
				$(document).ready(function () {
						$('.confirm-delete').click(function (e) {
							e.preventDefault();

							confirmDialog = confirm("Are you sure, you want to delete this data?");
							if (confirmDialog)
							{
									var id = $(this).val();
									// alert (id);
									$.ajax({
										type: "DELETE",
										url: "employee/confirmDelete/"+id,
										success: function (response){
											alert("Employee data deleted!");
											window.location.reload();
										}
									});
							}
						});
				});

		</script>
  </body>
</html>
