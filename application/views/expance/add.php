<!-- BEGIN SAMPLE FORM PORTLET-->
  <section>
    	<div class="container">
        	<main class="main" style="margin-top:60px;">
            	<div class="table_wrapp">
                	<div class="content-header">
                	<div class="col-md-12">
                    	<h1 class="bg">અન્ય ખર્ચ ઉમેરો</h1>
                    </div>                    
                	</div>
                </div>	
            	
                <div class="col-md-12">
        			<div class="row">
				<div class="col-md-6 ">		
					<div class="portlet box blue">
						<div class="portlet-title">
							
							<div class="tools">
								<a href="" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="" class="reload">
								</a>
								<a href="" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<form action="<?php echo base_url()."expance/addrecord"; ?>"  method="post" enctype="multipart/form-data" onSubmit="return check()">
								<div class="form-body">
									<div class="form-group">
										<label>ખર્ચ નુ નામ</label>
										<input type="text" name="ename" class="form-control" placeholder="ખર્ચ નુ નામ">
										<?php if(form_error('ename') != ''){ ?><div class="alert-danger"><?php echo form_error('ename'); ?></div><?php } ?>
									</div>
									<div class="form-group">
										<label>રકમ</label>
										<input type="text" name="amount" class="form-control" placeholder="રકમ">
										<?php if(form_error('amount') != ''){ ?><div class="alert-danger"><?php echo form_error('amount'); ?></div><?php } ?>
									</div>
									<div class="form-group">
										<label>ખર્ચ કર્યા તારીખ</label>
											<input type="date" class="form-control"  name="exp_date" placeholder="MM/DD/YYY">
											<?php if(form_error('exp_date') != ''){ ?><div class="alert-danger"><?php echo form_error('exp_date'); ?></div><?php } ?>
									</div>
									
								</div>
								<div class="form-actions">
									<button type="submit" class="btn blue">Submit</button>
									<button type="button" class="btn default">Cancel</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
      			</div>
			</main><!--/.main-->  
        </div><!--/.container--> 
    </section>
