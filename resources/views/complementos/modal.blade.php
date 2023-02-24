
<!-- Extra large modal --><!-- Extra large modal 
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-xl">Extra large modal</button>
-->
<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-xl" >
    <div class="modal-content" >
      ...
    </div>
  </div>
</div>


<script type="text/javascript">


function Modal($vista,$titulo)
{ 	  		   

	 $data='{{ csrf_token()}}&url='+$vista;
     $.get('/modalview', $data, function(subpage){ 	
        									  $('.modal-content').empty().append(subpage);
												
												$('.bd-example-modal-xl').modal('show');
                  							}).fail(function(subpage) {
      																 console.log('Error en carga de Datos');
															
  															   });
}

</script>

