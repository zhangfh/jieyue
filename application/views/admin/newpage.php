<?php
$base_url = $this->config->item('base_url');
$assets = $this->config->item('assets');
?>
<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
      <div class="span12">
          <div class="widget widget-nopad">
            <div class="widget-header"> <i class="icon-user"></i>
              <h3>New Page</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
            		<?php echo form_error('pageTitle', '<div class="alert">', '</div>'); ?>									
            		<?php echo form_error('pageURL', '<div class="alert">', '</div>'); ?>									
			<?php 
			$attr = array('id' => 'contentForm');
			echo form_open($base_url.'welcome/new/add', $attr); ?>
						<?php 	$data = array(
						  'name'        => 'content',
						  'id'          => 'content',
						  'class'       => 'js-st-instance'
						);
			
						echo form_textarea($data, set_value('content', $this->input->post('content'), FALSE)); ?>
					
                    
                    
                    
                    
                    <div class="form-actions">
             
                    	<a class="radius button" data-toggle="modal" href="#" data-reveal-id="attributes" >Next</a>
			<a class="radius button" href="<?php echo $base_url; ?>welcome/addpage">Cancel</a>

		    </div> <!-- /form-actions -->
             
                
                <!-- /widget-content --> 
            </div>
          </div>
          <!-- /widget -->
     
		<div id="attributes" class="reveal-modal" data-reveal  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<a class="close-reveal-modal" aria-label="Close">&#215;</a>
			<div class="modal-body">
            <div class="alert alert-info">Required</div>	
            <div class="control-group">		
            		<?php echo form_error('pageTitle', '<div class="alert">', '</div>'); ?>									
					<label class="control-label" for="pageTitle">Title</label>
					<div class="controls">
                    <?php 	$data = array(
						  'name'        => 'pageTitle',
						  'id'          => 'pageTitle',
						  'class'       => 'span5',
						  'value'		=> set_value('pageTitle', '', FALSE)
						);
			
						echo form_input($data); ?>
					</div> <!-- /controls -->				
				</div> <!-- /control-group -->
                
                <div class="control-group">		
            		<?php echo form_error('navTitle', '<div class="alert">', '</div>'); ?>									
					<label class="control-label" for="navTitle">New Nav</label>
					<div class="controls">
                    <?php 	$data = array(
						  'name'        => 'navTitle',
						  'id'          => 'navTitle',
						  'class'       => 'span5',
						  'value'		=> set_value('navTitle', '', FALSE)
						);
			
						echo form_input($data); ?>
					</div> <!-- /controls -->				
				</div> <!-- /control-group -->
                
                <div class="control-group">		
					<label class="control-label" for="pageKeywords">KeyWord</label>
					<div class="controls">
						 <?php 	$data = array(
						  'name'        => 'pageKeywords',
						  'id'          => 'pageKeywords',
						  'class'       => 'span5',
						  'value'		=> set_value('pageKeywords', '', FALSE)
						);
			
						echo form_input($data); ?>

					</div> <!-- /controls -->				
				</div> <!-- /control-group -->

				<div class="control-group">		
					<label class="control-label" for="pageDescription">Description</label>
					<div class="controls">
						 <?php 	$data = array(
						  'name'        => 'pageDescription',
						  'id'          => 'pageDescription',
						  'class'       => 'span5',
						  'value'		=> set_value('pageDescription', '', FALSE)
						);
			
						echo form_input($data); ?>

					</div> <!-- /controls -->				
				</div> <!-- /control-group -->
               
				<div class="control-group">		
            		<?php echo form_error('pageURL', '<div class="alert">', '</div>'); ?>									
					<label class="control-label" for="pageURL">New Url</label>
					<div class="controls">
						 <?php 	$data = array(
						  'name'        => 'pageURL',
						  'id'          => 'pageURL',
						  'class'       => 'span5',
						  'value'		=> set_value('pageURL', '', FALSE)
						);
			
						echo form_input($data); ?>

					</div> <!-- /controls -->				
				</div> <!-- /control-group -->
                
               <div class="control-group">		
                <?php echo form_error('pagePublished', '<div class="alert">', '</div>'); ?>									
					<label class="control-label" for="pagePublished">Publish</label>
					<div class="controls">
						
                        <?php 	
						$att = 'id="pagePublished" class="span5"';
						$data = array(
						  '1'        => $this->lang->line('option_yes'),
						  '0'         => $this->lang->line('option_no'),
						);
			
						echo form_dropdown('pagePublished', $data, '1', $att); ?>

					</div> <!-- /controls -->				
				</div> <!-- /control-group -->              
                 <div class="control-group">		
                <?php echo form_error('pageTemplate', '<div class="alert">', '</div>'); ?>									
					<label class="control-label" for="pageTemplate">Template</label>
					<div class="controls">
						
                        <?php

						$att = 'id="pageTemplate" class="span5"';
						$data = array();

						echo form_dropdown('pageTemplate', $data, 'home', $att); ?>

					</div> <!-- /controls -->				
				</div> <!-- /control-group -->  
            </div>
            <div class="modal-footer">
            <button class="btn btn-primary" onClick="formSubmit()">Save</button>
            </div></div>
           <?php  echo form_close(); ?>
     </div>
      <!-- /span12 -->

      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>

<script src="<?=BASE_URL;?>/assets/js/trevor/underscore.js"></script>
<script src="<?=BASE_URL;?>/assets/js/trevor/eventable.js"></script>
<script src="<?=BASE_URL;?>/assets/js/trevor/sortable.min.js"></script>
<script src="<?=BASE_URL;?>/assets/js/trevor/sir-trevor.js"></script>
<script src="<?=BASE_URL;?>/assets/js/trevor/sir-trevor-bootstrap.js"></script>

<script type="text/javascript">
	new SirTrevor.Editor({ el: $('.js-st-instance'),
  	blockTypes: ["Columns", "Heading", "Text", "ImageExtended", "Quote", "Accordion", "Button", "Video", "List", "Iframe"]
	});
	SirTrevor.onBeforeSubmit();
</script>
<script type="text/javascript">
function formSubmit(){
	SirTrevor.onBeforeSubmit();
	document.getElementById("contentForm").submit();
}
</script>
