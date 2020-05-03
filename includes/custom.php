<style>
	/* HIDE RADIO */
	[type=radio] { 
		position: absolute;
		opacity: 0;
		width: 0;
		height: 0;
	}

	/* IMAGE STYLES */
	[type=radio] + img {
		cursor: pointer;
	}

	/* CHECKED STYLES */
	[type=radio]:checked + img {
		outline: 2px solid #f00;
	}
</style>

<form action="thirdpage.php" method="post">
	<div class="container">
		<div class="row">
			<div class="col">
				<label> 
					<input type="radio" name="layout" value="l1">
					<img class="layout-preview" src="/layouts/l1.jpg">
				</label>
				<br>
				<label>
					<input type="radio" name="layout" value="l2">
					<img class="layout-preview" src="/layouts/l2.jpg">
				</label>
				<br>
				<label> 
					<input type="radio" name="layout" value="l3">
					<img class="layout-preview" src="/layouts/l3.jpg">
				</label>
			</div>
			<div class="col">
				<label>
					<input type="radio" name="layout" value="l4">
					<img class="layout-preview" src="/layouts/l4.jpg">
				</label>
				<br>
				<label> 
					<input type="radio" name="layout" value="l5">
					<img class="layout-preview" src="/layouts/l5.jpg">
				</label>
				<br>
				<label> 
					<input type="radio" name="layout" value="l6">
					<img class="layout-preview" src="/layouts/l6.jpg">
				</label>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<input type="submit" name="Select and Continue">
			</div>
		</div>
	</div>
</form>