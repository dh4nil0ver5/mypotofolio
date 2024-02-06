<div id="myModal" class="modal_new">  
    <div class="modal_content_new"> 
        <span class="close" onclick="tutup_modal()">&times;</span>
        <p><h6>Ubah formula </h6></p>
        <div class="row" style="margin-top: 10px;">
            <div class="col-md-6">
                <p>Kategori</p>
            </div>
            <div class="col-md-6">
              <select name="id_categoryformula" id="up_id_categoryformula" class="form-control">
                <?php foreach ($category as $key => $value) { ?>
                <option value="<?php echo $category[$key]['id_category']; ?>"><?php echo $category[$key]['name_ofcategory']; ?></option> 
                <?php }?>  
              </select>
                <!-- <input type="text" name="id_category" id="id_category" class="form-control form-input"/> -->
            </div>
        </div>
        <div class="row" style="margin-top: 10px;">
            <div class="col-md-6">
                <p>Item</p>
            </div>
            <div class="col-md-6">
                <input type="text" name="" id="up_id_item" class="form-control form-input"/>
              <!-- <select name="id_item" id="up_id_item" class="form-control">
                <?php foreach ($tditemwork as $key => $value) { ?>
                <option value="<?php echo $tditemwork[$key]['id_item']; ?>"><?php echo $tditemwork[$key]['name_ofitem']; ?></option> 
                <?php }?>  
              </select>  -->
            </div>
        </div> 
        <div class="row" style="margin-top: 10px;">
            <div class="col-md-6">
                <p>Margin</p>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <input type="text" name="margin" id="up_margin" class="form-control form-input col-md-9"/><span class="col-md-3">%</span>
                </div>
            </div>
        </div> 
        <div class="row" style="margin-top: 10px;">
            <div class="col-md-6">
                <button class="btn btn-flat btn-primary" id="ubahFormula_new">save</button>
            </div> 
        </div> 
    </div>
</div>