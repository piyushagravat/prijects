    <section>
    	<div class="container">
        	<main class="main" style="margin-top:60px;">
            	<div class="table_wrapp">
                	<div class="content-header">
                	<div class="col-md-12">
                    	<h1 class="bg">ખર્ચ ની યાદી
                    		
                         </h1>
                    </div>                    
                	</div>
                </div>	
            	
                <div class="col-md-12">
        			<table id="example" class="table table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th width="7%" height="42">નંબર  </th>
                             <th >ખર્ચ નુ નામ  </th>
                             <th > રકમ</th>
                             <th >  તારીખ</th>
                             <th  class="radius_right">અન્ય ગતિવિધિઓ</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php  $i=1; foreach($viewdata as $item) { ?>
                        <tr>
                            <td><?php echo $i+$num;  ?> </td>
                            <td><?php echo $item->ename;  ?> </td>
                            <td><?php echo $item->expance_amount;  ?></td>
                            <td><?php echo $item->expance_date;  ?></td>
                            <th>
                             <a href="<?php echo base_url(); ?>expance/edit/<?php echo $item->eid; ?>" class="btn btn-info btn-sm" role="button">Edit</a>
                             <a href="<?php echo base_url(); ?>expance/delete/<?php echo $item->eid; ?>" class="btn btn-info btn-sm" role="button" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
                            </th>
                        </tr>
                        <?php $i++; } ?>
                    </tbody>
                       
            </table>
      			</div>
			</main><!--/.main-->  
        </div><!--/.container--> 
    </section>

