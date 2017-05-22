@extends('layouts.layout')

@section('title')

    Diseñá tu propio reloj

@endsection

@section('scripts')
	
	<script type="text/javascript" src="{{ asset('js/actualizarPartes.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/FileSaver.js') }}"></script>

@endsection


@section('content')
	<h1>Agregar Parte</h1>
	<div class="row">
	    <form class="col s12" method="POST" action="/parte" enctype="multipart/form-data">
	    	{{ csrf_field() }}
		    <div class="row">
		        <div class="input-field col s6">
		          	<input placeholder="Placeholder" id="nombre" name="nombre" type="text" class="validate">
		          	<label for="nombre">Nombre</label>
		        </div>
		    </div>
		    <div class="row">
		        <div class="file-field input-field col s6">		          
			      	<div class="btn">
			        	<span>Imagen</span>
			        	<input type="file" name="fileimagen">
			      	</div>
			      	<div class="file-path-wrapper">
			        	<input class="file-path validate" type="text" name="imagen">
			      	</div>
			    </div>	        
		    </div>
		    <div class="row">
		       	<div class="input-field col s4">
			    	<select name="parte">
					    <option value="" disabled selected>Choose your option</option>
					    <option value="Aguja">Aguja</option>
					    <option value="Fondo">Fondo</option>
					    <option value="Malla">Malla</option>
					    <option value="Marco">Marco</option>
					</select>
		    		<label>Seleccionar Parte</label>
		  		</div>
		    </div> 
		    <div class="row">		    	
		    	<button class="btn waves-effect waves-light" type="submit" name="action">Submit
    				<i class="material-icons right">send</i>
  				</button>
		    </div>     
	    </form>
	    <div class="row">
	    	<ul>
	    		@foreach($errors->all() as $error)
	    		<li> {{ $error }}</li>
	    		@endforeach
	    	</ul>
	    </div>
  	</div>
  	<h1>Eliminar Parte</h1>
  	<div class="row">
  		<form class="col s12" method="POST" action="/deleteparte" enctype="multipart/form-data">
	    	{{ csrf_field() }}
		    
		    <div class="row">
		       	<div class="input-field col s4" id='panelEliminar'>
			    	
		  		</div>
		    </div> 
		    <div class="row">		    	
		    	<button class="btn waves-effect waves-light" type="submit" name="action">Submit
    				<i class="material-icons right">send</i>
  				</button>
		    </div>     
	    </form>  		
  	</div>
@endsection