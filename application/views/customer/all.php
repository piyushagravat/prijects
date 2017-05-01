    <section>
    	<div class="container">
        	<main class="main" style="margin-top:60px;">
            	<div class="table_wrapp">
                	<div class="content-header">
                	<div class="col-md-12">
                    	<h1 class="bg">બધા ગ્રાહકો નુ લિસ્ટ 
                    		
                         </h1>
                    </div>                    
                	</div>
                </div>	
            	
                <div class="col-md-12">
        			<table id="example" class="table table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th width="7%" height="42">નંબર  </th>
                            <th width="7%" height="42">ગ્રાહક નંબર  </th>
                             <th width="8%">પેકેજ </th>
                             <th width="28%">ગ્રાહક નું નામ</th>
                             <th width="16%">  સરનામું</th>
                             <th width="16%">  ગામ</th>
                             <th width="11%"> જોડાયાતારીખો</th>
                             <th width="18%" class="radius_right">મોબાઇલ – 1</th>
                             <th width="12%" class="radius_right">મોબાઇલ – 2</th>
                             <th width="20%">ગતિવિધિઓ</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php  $i=1; foreach($viewdata as $item) { ?>
                        <tr>
                            <td><?php echo $i+$num;  ?> </td>
                            <td><?php echo $item->cno;  ?> </td>
                            <td><?php echo $item->pid;  ?></td>
                            <td><?php echo $item->cname;  ?></td>
                            <td><?php echo $item->address;  ?></td>
                            <td><?php echo $item->city;  ?></td>
                            <td><?php echo $item->entrydate;  ?></td>
                            <td><?php echo $item->mobile1;  ?></td>
                            <td><?php echo $item->mobiel2;  ?></td>
                            <th>
                              <a href="<?php echo base_url(); ?>customer/edit/<?php echo $item->cid; ?>" class="btn btn-info btn-sm" role="button">Edit</a>
                             <a href="<?php echo base_url(); ?>customer/delete/<?php echo $item->cid; ?>" class="btn btn-info btn-sm" role="button" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
                            </th>
                        </tr>
                        <?php $i++; } ?>
                    </tbody>
                       
            </table>
      			</div>
			</main><!--/.main-->  
        </div><!--/.container--> 
    </section>

