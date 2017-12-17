 

<div class="form-body">
    <div class="alert alert-danger display-hide">
        <button class="close" data-close="alert"></button> Please fill the required field! </div>
  <!--   <div class="alert alert-success display-hide">
        <button class="close" data-close="alert"></button> Your form validation is successful! </div>
-->
 
    <div class="form-group <?php echo e($errors->first('program_name', ' has-error')); ?>">
            <label class="control-label col-md-3">Target Market <span class="required"> * </span></label>
            <div class="col-md-4"> 
                <?php echo Form::text('title',null, ['class' => 'form-control','data-required'=>1]); ?> 
                
                <span class="help-block"><?php echo e($errors->first('title', ':message')); ?></span>
            </div>
        </div> 

         
  
          <div class="form-group <?php echo e($errors->first('description', ' has-error')); ?>">
            <label class="control-label col-md-3">Description<span class="required"> </span></label>
            <div class="col-md-4"> 
                <?php echo Form::textarea('description',null, ['class' => 'form-control','data-required'=>1,'rows'=>3,'cols'=>5]); ?> 
                
                <span class="help-block"><?php echo e($errors->first('description', ':message')); ?></span>
            </div>
        </div> 


    
    
</div>
<div class="form-actions">
    <div class="row">
        <div class="col-md-offset-3 col-md-9">
          <?php echo Form::submit(' Save ', ['class'=>'btn  btn-primary text-white','id'=>'saveBtn']); ?>



           <a href="<?php echo e(route('targetMarket')); ?>">
<?php echo Form::button('Back', ['class'=>'btn btn-warning text-white']); ?> </a>
        </div>
    </div>
</div>
 