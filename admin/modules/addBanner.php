
<div class="row">
	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
		<div class="page-header">
			<h2 class="pageheader-title">Add new Banner table</h2>
			<p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
			<div class="page-breadcrumb">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Admin</a></li>
						<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
						<li class="breadcrumb-item active" aria-current="page">Banner Table</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
		<div class="card">
			<h5 class="card-header">Add new Banner</h5>
			<div class="card-body">
				<form action="" name="banner" method="POST" id="basicform" data-parsley-validate="">
					<div class="form-group">
						<label for="bannerName">Banner name</label>
						<input id="bannerName" type="text" name="bannerName" required="" placeholder="Enter the category name"  class="form-control">
					</div>
					<div class="form-group">
						<label for="image">Banner image</label>
						<input id="image" type="file" name="image" class="form-control">
					</div>
					<div class="form-group">
						<label for="price">ordering</label>
						<input id="price" type="number" name="price" required=""  placeholder="Enter the price of banner"  class="form-control">
					</div>
					<div class="form-group">
						<label for="sale_price">Status</label>
						<input id="sale_price" type="number" name="sale_price" required=""  placeholder="Enter the sale proce of banner"  class="form-control">
					</div>
					<div class="form-group">
						<label for="created">created</label>
						<input id="created" type="date" name="created" value="" placeholder="Enter the created"  class="form-control">
					</div>
					<div class="form-group">
						<label for="content">Content</label>
						<textarea name="content" id="content" placeholder="Enter the discription" class="form-control" rows="10" cols="50"></textarea>
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


