		{!! csrf_field() !!}
<div class="row">
	<div class="col-md-12">
	    <div class="white-box">
	    	<div class="form-group">
			    <label for="title" class="control-label col-sm-2">Lm</label>
			    <div class="col-sm-8">
			        <input type="text" name="lm" required='true' id="title" class="form-control" value="@{{Product.lm}}" >
			    </div>
			</div>
			<div class="form-group">
			    <label for="title" class="control-label col-sm-2">Name</label>
			    <div class="col-sm-8">
			        <input type="text" name="name" required='true' id="title" class="form-control" value="@{{Product.name}}" >
			    </div>
			</div>

			<div class="form-group">
			    <label for="url" class="control-label col-sm-2">Free_shipping</label>
			    <div class="col-sm-8">
			        <input type="text" name="free_shipping" id="url" required='true'  class="form-control" value="@{{Product.free_shipping}}" >
			    </div>
			</div>

			<div class="form-group">
			    <label for="body" class="control-label col-sm-2">Description</label>
			    <div class="col-sm-8">
			        <input type="text" name="description" id="url" required='true'  class="form-control" value="@{{Product.description}}" >
			    </div>
			</div>

			<div class="form-group">
			    <label for="body" class="control-label col-sm-2">Price</label>
			    <div class="col-sm-8">
			        <input type="text" name="price" id="url" maxlength="14" minlength="8"  class="form-control" value="@{{Product.price}}" >
			    </div>
			</div>

			<br/>
			<div class="form-group">
			    <div class="col-sm-offset-1">
			        <input type="submit" value="salvar" class="btn btn-primary">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">voltar</button>
			    </div>
			</div>
		</div>
	</div>
</div>