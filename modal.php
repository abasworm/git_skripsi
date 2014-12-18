<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Jumlah Beli</h4>
      </div>
      <div class="modal-body">
          <form role="form" id="frm_mod" name="frm_mod">
               <div class="row">
                <label for="id_barang_mod" class="col-sm-4 control-label">ID Barang</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="id_barang_mod" readonly value="">
                </div>
              </div>
              <div class="row">
                <label for="jml_barang_mod" class="col-sm-4 control-label">Jumlah</label>
                <div class="col-sm-8">
                    <div class="input-group number-spinner" >
                        <span class="input-group-btn data-dwn">
                            <button class="btn btn-default btn-info" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                        </span>
                        <input type="text" class="form-control text-center" value="1" min="1" max="100" id="jml_barang_mod" data-toggle="tooltip" data-placement="bottom" title="Silakan isi jumlah beli">
                        <span class="input-group-btn data-up">
                            <button class="btn btn-default btn-info" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                        </span>
                    </div>
                  
                </div>
              </div>
              
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary" style="" onclick="alert($('#jml_barang_mod').val())">Simpan</button>
      </div>
    </div>
  </div>
</div>