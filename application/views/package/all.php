    <section>
    	<div class="container">
        	<main class="main" style="margin-top:60px;">
            	<div class="table_wrapp">
                	<div class="content-header">
                	<div class="col-md-12">
                    	<h1 class="bg">પેકેજ નુ લિસ્ટ 
                    		
                         </h1>
                    </div>                    
                	</div>
                </div>	
            	
                <div class="col-md-12">
        			<table id="example" class="table table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th width="15%" height="42">નંબર  </th>
                            <th width="20%" height="42">પેકેજ નુ નામ </th>
                             <th width="15%">રકમ </th>
                             <th width="15%">તારીખ</th>
                             <th width="20%">ગતિવિધિઓ</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php  $i=1; foreach($viewdata as $item) { ?>
                        <tr>
                            <td><?php echo $i+$num;  ?> </td>
                            <td><?php echo $item->pname;  ?> </td>
                            <td><?php echo $item->amount;  ?></td>
                            <td><?php echo $item->entrydate;  ?></td>
                            <th>
                             <a href="<?php echo base_url(); ?>package/edit/<?php echo $item->pid; ?>" class="btn btn-info btn-sm" role="button">Edit</a>
                             <a href="<?php echo base_url(); ?>package/delete/<?php echo $item->pid; ?>" class="btn btn-info btn-sm" role="button" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
                            </th>
                        </tr>
                        <?php $i++; } ?>
                    </tbody>
                       
            </table>
      			</div>
			</main><!--/.main-->  
        </div><!--/.container--> 
    </section>

