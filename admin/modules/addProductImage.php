
<div class="row">
	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
		<div class="page-header">
			<h2 class="pageheader-title">Add new Product Image table</h2>
			<p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
			<div class="page-breadcrumb">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Admin</a></li>
						<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
						<li class="breadcrumb-item active" aria-current="page">Product Image Table</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
		<div class="card">
			<h5 class="card-header">Add new Product Images</h5>
			<div class="card-body">
				<form action="" name="product" method="POST" id="basicform" data-parsley-validate="">
					<div class="form-group">
						<label for="productName">Image</label>
						<input id="productName" type="file" name="productName" required="" placeholder="Enter the category name"  class="form-control">
					</div class="form-group">
					<div class="form-group">
						<label for="category_id">Product's Image</label>
						<select name="category_id" id="category_id" class="form-control">
							<option value="">--Choose category type--</option>
						</select>
					</div>
					<div class="form-group">
						<label for="productName">Ordering</label>
						<input id="productName" type="Number" name="productName" required="" placeholder="Enter the category name"  class="form-control">
					</div>
					<div class="row">
						<div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
							<label class="be-checkbox custom-control custom-checkbox">
								<input type="checkbox" name="status" value="0" class="custom-control-input"><span class="custom-control-label">status</span>
							</label>
						</div>
						<div class="col-sm-6 pl-0">
							<p class="text-right">
								<button type="submit" name="addNew" class="btn btn-space btn-dark">Add new</button>
							</p>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>