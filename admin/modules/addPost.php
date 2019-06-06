	<div class="row">
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="page-header">
				<h2 class="pageheader-title">Add new Post table <a href="index.php?module=posts" class="badge badge-success">list</a></h2>
				<p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
				<div class="page-breadcrumb">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Admin</a></li>
							<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
							<li class="breadcrumb-item active" aria-current="page">Post Table</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="card">
				<h5 class="card-header">Add new Post</h5>
				<div class="card-body">
					<form action="" name="" method="post" id="basicform" data-parsley-validate="">
						<div class="form-group">
							<label for="name">Caption</label>
							<input id="name" type="text" name="name" required="" placeholder="Enter the category name"  class="form-control">
						</div>
						<div class="form-group">
							<label for="image">image</label>
							<input id="image" type="file" name="image" class="form-control">
						</div>
						<div class="form-group">
							<label for="ordering">Ordering</label>
							<input id="ordering" type="number" name="ordering"  placeholder="Enter the ordering"  class="form-control">
						</div>
						<div class="form-group">
							<label for="created">Created</label>
							<input id="created" type="date" name="created" placeholder="Enter the created"  class="form-control">
						</div>
						<div class="form-group">
							<label for="content">Content</label>
							<textarea name="content" id="content" placeholder="Enter the discription" class="form-control" rows="10" cols="50"></textarea>
						</div>

						<div class="row">
							<div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
								<label class="be-checkbox custom-control custom-checkbox">
									<input type="checkbox" name="status" value="1" class="custom-control-input"><span class="custom-control-label">status</span>
								</label>
							</div>
							<div class="col-sm-6 pl-0">
								<p class="text-right">
									<button type="submit" name="addNew" class="btn btn-outline-primary">Add new</button>
								</p>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>