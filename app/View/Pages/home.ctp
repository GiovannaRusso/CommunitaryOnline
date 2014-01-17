<h2> <?php echo __('Bienvenido'); ?> </h2>

<ul>
	<li><?php echo $this->Html->Link( __('Beneficiarios'), array('controller' => 'beneficiaries'), array( 'title' => __('Beneficiarios') ) ) ; ?></li>
	<li><?php echo $this->Html->Link( __('Tipos de Beneficiario'), array('controller' => 'beneficiary_types'), array( 'title' => __('Tipos de Beneficiario') ) ) ; ?></li>
	<li><?php echo $this->Html->Link( __('Carreras Universitarias'), array('controller' => 'careers'), array( 'title' => __('Carreras Universitarias') ) ) ; ?></li>
	<li><?php echo $this->Html->Link( __('Ciudades'), array('controller' => 'cities'), array( 'title' => __('Ciudades') ) ) ; ?></li>
	<li><?php echo $this->Html->Link( __('Pa&iacute;ses'), array('controller' => 'countries'), array( 'title' => __('Pa&iacute;ses') ) ) ; ?></li>
	<li><?php echo $this->Html->Link( __('Documentos'), array('controller' => 'documents'), array( 'title' => __('Documentos') ) ) ; ?></li>
	<li><?php echo $this->Html->Link( __('Tipos de Documento'), array('controller' => 'document_types'), array( 'title' => __('Tipos de Documento') ) ) ; ?></li>
	<li><?php echo $this->Html->Link( __('Experiencias'), array('controller' => 'experiences'), array( 'title' => __('Experiencias') ) ) ; ?></li>
	<li><?php echo $this->Html->Link( __('Necesidades'), array('controller' => 'needs'), array( 'title' => __('Necesidades') ) ) ; ?></li>
	<li><?php echo $this->Html->Link( __('Parr&oacute;quias'), array('controller' => 'parishes'), array( 'title' => __('Parr&oacute;quias') ) ) ; ?></li>
	<li><?php echo $this->Html->Link( __('Problemas'), array('controller' => 'problems'), array( 'title' => __('Problemas') ) ) ; ?></li>
	<li><?php echo $this->Html->Link( __('Proyectos'), array('controller' => 'projects'), array( 'title' => __('Projects') ) ) ; ?></li>
	<li><?php echo $this->Html->Link( __('Estatos'), array('controller' => 'states'), array( 'title' => __('Estados') ) ) ; ?></li>
	<li><?php echo $this->Html->Link( __('Estatos'), array('controller' => 'states'), array( 'title' => __('Estados') ) ) ; ?></li>
	<li><?php echo $this->Html->Link( __('Universidades'), array('controller' => 'universities'), array( 'title' => __('Universidades') ) ) ; ?></li>
	<li><?php echo $this->Html->Link( __('Tipos de Usuario de Universidad'), array('controller' => 'university_user_types'), array( 'title' => __('Tipos de Usuario de Universidad') ) ) ; ?></li>
	<li><?php echo $this->Html->Link( __('Usuarios'), array('controller' => 'users'), array( 'title' => __('Usuarios') ) ) ; ?></li>
</ul>