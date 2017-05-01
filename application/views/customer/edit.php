<!-- BEGIN SAMPLE FORM PORTLET-->
  <section>
    	<div class="container">
        	<main class="main" style="margin-top:60px;">
            	<div class="table_wrapp">
                	<div class="content-header">
                	<div class="col-md-12">
                    	<h1 class="bg">નવા ગ્રાહક ઉમેરો</h1>
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
							<form action="<?php echo base_url()."customer/updaterecord"; ?>"  method="post" enctype="multipart/form-data" onSubmit="return check()" >
							  <input type="hidden" name="cid" value="<?php echo $editdata->cid; ?>" /> 
								<div class="form-body">
									<div class="form-group">
										<label>ગ્રાહક નંબર</label>
										<input type="text" name="cno" class="form-control" placeholder="ગ્રાહક નંબર"  value="<?php echo $editdata->cno; ?>">
										<?php if(form_error('cno') != ''){ ?><div class="alert-danger"><?php echo form_error('cno'); ?></div><?php } ?>
									</div>
									<div class="form-group">
										<label>નામ</label>
										<input type="text" name="cname" class="form-control" placeholder="ગ્રાહક નું નામ"  value="<?php echo $editdata->cname; ?>">
										<?php if(form_error('cname') != ''){ ?><div class="alert-danger"><?php echo form_error('cname'); ?></div><?php } ?>
									</div>
									<div class="form-group">
										<label>સરનામું</label>
										<input type="text" name="address" class="form-control" placeholder="સરનામું"  value="<?php echo $editdata->address; ?>">
										<?php if(form_error('address') != ''){ ?><div class="alert-danger"><?php echo form_error('address'); ?></div><?php } ?>
									</div>
									<div class="form-group">
										<label>ગામ</label>
										<input type="text" name="city" class="form-control" placeholder="ગામ"  value="<?php echo $editdata->city; ?>">
										<?php if(form_error('city') != ''){ ?><div class="alert-danger"><?php echo form_error('city'); ?></div><?php } ?>
									</div>
							
									<div class="form-group">
										<label>મોબાઇલ ૧</label>
										<input type="text" name="mobile1" class="form-control" placeholder="મોબાઇલ ૧"  value="<?php echo $editdata->mobile1; ?>">
										<?php if(form_error('mobile1') != ''){ ?><div class="alert-danger"><?php echo form_error('mobile1'); ?></div><?php } ?>
									</div>
									<div class="form-group">
										<label>મોબાઇલ ૨</label>
										<input type="text" name="mobile2" class="form-control" placeholder="મોબાઇલ ૨"  value="<?php echo $editdata->mobiel2; ?>">
										<?php if(form_error('mobile2') != ''){ ?><div class="alert-danger"><?php echo form_error('mobile2'); ?></div><?php } ?>
									</div>
									<div class="form-group">
										<label>પેકેજ નુ નામ</label>

										<select class="form-control select2me" name="pname" required>
												<option value="">Select..</option>
												 <?php
					                              foreach($packagelist->result() as $listElement){
					                                      ?>
					                                      <option value="<?php echo $listElement->pid?>"  <?php if($listElement->pid == $editdata->pid ) { ?> selected="selected" <?php } ?>><?php echo $listElement->pname?></option>
					                              <?php
					                              }
					                              ?>
											</select>
									</div>
									<div class="form-group">
										<label>જોડાયા તારીખ</label>
											<input type="date" class="form-control"  name="entrydate" placeholder="MM/DD/YYY"  value="<?php echo $editdata->entrydate; ?>">
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