<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">


	.class{
		margin-top: 25px;
	}
	
	a{
		text-decoration: none;
		color:black;
	}
</style>
</head>
<body>
	<form onsubmit=" return false;">
		<div class="class">
			<label>Name:</label>
			<input type="text" id="name" name="">	
		</div>

		<div class="class">
			<label>Phone:</label>
			<input type="text" id="phone" name="">	
		</div>
		
		<div class="class">
			<label>Sex:</label>
			<select id="sex">
				<option value="Boy">Boy</option>
				<option value="Gril">Girl</option>
			</select>
		</div>
		
		<div class="class">
			<input type="submit" name="" id="submit">
		</div>
	</form>
	<div class="class">
	<button><a href="<?php echo base_url('example/showData'); ?>">顯示資料</a></button>
	</div>

	<script type="text/javascript" src="<?php echo base_url('assets/jquery-2.1.4.min.js');?>"></script>
	<script type="text/javascript">
		

		$("#submit").click(function() {
			var name = $('#name').val();
			var phone = $('#phone').val();
			var sex = $('#sex').val();
			
			$.ajax({
				url:"<?php echo base_url('example/create'); ?>",
				type:"post",
				dataType:"text",
				data:{
					name : name,
					phone : phone,
					sex : sex
				},
				success:function(data){
					
				}
			});

		});

	</script>
</body>
</html>