	<!-- BEGIN SAMPLE FORM PORTLET-->
  <section>
    	<div class="container">
        	<main class="main" style="margin-top:60px;">
            	<div class="table_wrapp">
                	<div class="content-header">
                	<div class="col-md-12">
                    	<h1 class="bg">ભાડુ ઉમેરવાનું ફોર્મ </h1>
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
								<form action="<?php echo base_url()."bill/addrecord"; ?>"  method="post" enctype="multipart/form-data" onSubmit="return check()">
								<div class="form-body">
									<div class="form-group">
										<label>ગ્રાહક નુ નામ</label>

											<select class="form-control select2me" name="cid" required>
												<option value="">Select..</option>
												 <?php
					                              foreach($customerlist->result() as $listElement){
					                                      ?>
					                                      <option value="<?php echo $listElement->cid?>"><?php echo $listElement->cname?></option>
					                              <?php
					                              }
					                              ?>
											</select>


									</div>
									<div class="form-group">
										<label>પેકેજ નુ નામ</label>
										<input type="text" name="pid" class="form-control" placeholder="પેકેજ નુ નામ">
										<?php if(form_error('pid') != ''){ ?><div class="alert-danger"><?php echo form_error('pid'); ?></div><?php } ?>
									</div>
									<div class="form-group">
										<label>રકમ</label>
										<input type="text" name="amount" class="form-control" placeholder="રકમ">
										<?php if(form_error('amount') != ''){ ?><div class="alert-danger"><?php echo form_error('amount'); ?></div><?php } ?>
									</div>
									<div class="form-group">
										<label>જમા કર્યા વિગત</label>
											<select class="form-control select2me" name="status">
												<option value="">Select..</option>
												<option value="ચૂકવેલ">ચૂકવેલ</option>
												<option value="બાકી">બાકી</option>
											</select>
									</div>
									<div class="form-group">
										<label>જમા કર્યા તારીખ</label>
											<input type="date" class="form-control"  name="entrydate" placeholder="MM/DD/YYY">
											<?php if(form_error('entrydate') != ''){ ?><div class="alert-danger"><?php echo form_error('entrydate'); ?></div><?php } ?>
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
