@extends('layouts.layout')

@section('title')

    Editar partes - Oh!Clock

@endsection

@section('scripts')
	
	<script type="text/javascript" src="{{ asset('js/actualizarPartes.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/FileSaver.js') }}"></script>

@endsection


@section('content')
	
	<p><p>
	<div>

	@if(Auth::id() == 1)
	<div class="row">
	    <div class="col s12">
	      <ul class="tabs">
	        <li class="tab col s6"><a href="#agregarparte">Agregar parte</a></li>
	        <li class="tab col s6"><a href="#eliminarparte">Eliminar parte</a></li>
	      </ul>
	    </div>
	    <div id="agregarparte" class="col s12">
	    	<p><p>
	    		<div class="row">
	    		    <form class="col s12" method="POST" action="/parte" enctype="multipart/form-data">
	    		    	{{ csrf_field() }}
	    			    <div class="row">

	    			    	<div class="input-field col s6 offset-s3">
	    				    	<select id="selectparte" name="parte">
	    						    <option value="" disabled selected>Parte</option>
	    						</select>
	    			    		<label>Seleccionar Parte</label>
	    			  		</div>

	    			  	</div>
	    			  	<div class="row">
	    			        <div class="input-field col s6 offset-s3">
	    			          	<input id="nombre" name="nombre" type="text" class="validate">
	    			          	<label for="nombre">Nombre</label>
	    			        </div>
	    			    </div>
	    			    <div class="row">
	    			        <div class="file-field input-field col s6 offset-s3">		          
	    				      	<div class="btn">
	    				        	<span>Imagen</span>
	    				        	<input type="file" name="fileimagen">
	    				      	</div>
	    				      	<div class="file-path-wrapper">
	    				        	<input class="file-path validate" type="text" name="imagen">
	    				      	</div>

	    				    </div>	        
	    			    </div>
	    	
	    			    <div class="row center">		    	
	    			    	<button class="btn waves-effect waves-light" type="submit" name="action">Agregar
	    	    				<i class="material-icons right">send</i>
	    	  				</button>
	    			    </div>     
	    		    </form>
	    	  	</div>

	    </div>

	    <div id="eliminarparte" class="col s12">
	    		<p><p>
	    	  	<div class="row">
	    	  		<form class="col s12" method="POST" action="/deleteparte" enctype="multipart/form-data">
	    		    	{{ csrf_field() }}
	    			    
	    			    <div class="row">
	    			    	<div class="input-field col s6 offset-s3">
	    				    	<select id="selectparteelim" name="nombreparte">
	    						    <option value="" disabled selected>Parte</option>
	    						</select>
	    			    		<label>Seleccionar Parte</label>
	    			  		</div>

	    			  		<div class="input-field col s6 offset-s3">
	    				    	<select id="parteelim" name="parte">
	    						    <option value="" disabled selected>Selecciona una parte</option>
	    						</select>
	    			    		<label>Parte a eliminar</label>
	    			  		</div>

	    			    </div> 
	    			    <div class="row center">		    	
	    			    	<button class="btn waves-effect waves-light" type="submit" name="action">Eliminar
	    	    				<i class="material-icons right">send</i>
	    	  				</button>
	    			    </div>     
	    		    </form>  		
	    	  	</div>

	    </div>

	    <div class="row center">
	    	<ul>
	    		@foreach($errors->all() as $error)
	    		<li> {{ $error }}</li>
	    		@endforeach


	    		@if(Session::has('message'))
	    		    <div class="alert alert-info">
	    		        {{ Session::get('message') }}
	    		    </div>
	    		@endif
	    	</ul>
	    </div>
	  </div>
	@else
		

		<div class="row center">
			Para ver esta página, necesitás estar logueado como administrador.
             <a id="btnVolver" href="/" class="btn-large waves-effect darken-4">Volver</a>
             </div>


	@endif

	</div>
  	
@endsection