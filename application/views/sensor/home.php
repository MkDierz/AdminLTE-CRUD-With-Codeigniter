<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
  <div class="box-body">
    <table id="list-data" class="table table-bordered table-striped">
      <thead>
        <tr>
          <!-- <th>#</th> -->
          <th>Waktu</th>
          <th>Seri sensor</th>
          <th>Data sensor</th>
        </tr>
      </thead>
      <tbody id="data-sensor">
      
      </tbody>
    </table>
  </div>
</div>