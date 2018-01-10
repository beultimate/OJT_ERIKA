$(document).ready(function(){

	$("#demo").load("php/display.php");

		$("#addBtn").click(function(){
			var name = $("#name").val();
			var age = $("#age").val();
			var track = $("#track").val();
			var addBtn = $("#addBtn").val();	
				$.post("php/add.php", {
					name: name, 
					age: age, 
					track: track, 
					addBtn: addBtn}, 
					function(data, status) {
						alert(data);
						if  (data == "success") 
						success();
					});
		});		
		
		$("#editBtn").click(function(){
			var id = $("#id").val();
			var name = $("#name").val();
			var age = $("#age").val();
			var track = $("#track").val();
			var editBtn = $("#editBtn").val();	
				$.post("php/edit.php", {
					id: id, 
					name: name, 
					age: age, 
					track: track, 
					editBtn: editBtn}, 
					function(data, status) {
						alert(data);
						if  (data == "success") 
						success();
					});
		});

		$("#delBtn").click(function(){
			var id = $("#id").val();
			var delBtn = $("#delBtn").val();	
				$.post("php/delete.php", {
					id: id,
					delBtn: delBtn}, 
					function(data, status) {
						alert(data);
						if  (data == "success") 
						success();
					});
		});
	});


function success() {
	$("#name").val("");
	$("#age").val("");
	$("#track").val("");
	$("#demo").load("php/display.php");
	}