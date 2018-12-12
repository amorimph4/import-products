<div class="modal fade" id="ProductEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
  	<div class="modal-content">
  		<div class="modal-header">
    		<h5 class="modal-title" id="exampleModalLabel">Editar Produto</h5>
  		</div>
      <div class="modal-body">
      	<form action="update-product/@{{Product.id}}" class="form-horizontal" target="testFile" id="editClient" method="post">
        	@include('admin.pages.products.form')
		    </form>

    	</div>
  	</div>
	</div>
</div>