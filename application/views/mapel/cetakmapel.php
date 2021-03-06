<div class="container">
    <h1>Tambah Mata Pelajaran</h1>
    <a class="modal-trigger waves-effect waves-light btn" href="<?php echo base_url();?>mapel/tambah">Tambah Mata pelajaran</a>
    <table>
        <thead>
          <tr>
              <th data-field="id">Kode Mata Pelajaran</th>
              <th data-field="id">Mata Pelajaran</th>
              <th data-field="id">Edit Mata Pelajaran</th>
          </tr>
        </thead>

        <tbody>
        <?php foreach ($mapel as $object)
        { ?>
          <tr>
            <td><?php echo $object['kode_mapel']; ?></td>
            <td><?php echo $object['nama']; ?></td>
            <td><a class="waves-effect waves-light btn" href="<?php echo base_url();?>mapel/edit/<?php echo $object['kode_mapel'];?>">Edit</a></td>
          </tr>
        <?php } ?>
        </tbody>
    </table>
</div> 

<div id="inputmapel" class="modal">
    <div class="modal-content">
      <div class="row">
         <div class="col s12" style="padding: 1em 1em 0 1em">
            <form class="col s12" action="<?php echo base_url();?>mapel/verifikasi_tambah" method="post">
                <div class="input-field col s12">
                    <input name="kode_mapel" type="text" class="validate" placeholder="Kode Mata Pelajaran">
                    <label>Kode Mata Pelajaran</label>
                </div>
                <div class="input-field col s12">
                    <input name="nama" type="text" class="validate" placeholder="Mata Pelajaran">
                    <label>Mata Pelajaran</label>
                </div>
                <div class="col s12" style="margin-top: 1.25em">
                    <button type="submit" class="waves-effect waves-light btn">TAMBAH</button>
                </div>
            </form>
         </div>
      </div>
 
    </div>
</div>

<?php 
/*<div id="editmatpel" class="modal">
    <div class="modal-content">
    <?php  
        foreach ($edit_mapel->result() as $row)  
        {  
        ?>
            <div class="row">
                <div class="col s12" style="padding: 1em 1em 0 1em">
                    <form class="col s12" action="<?php echo base_url();?>mapel/verifikasi_edit" method="post">
                            <div class="input-field col s12">
                                <input name="kode_mapel" type="text" class="validate" value="<?php echo $row->kode_mapel;?>" >
                                <label>Kode Mata Pelajaran</label>
                            </div>
                            <div class="input-field col s12">
                                <input name="nama" type="text" class="validate" value="<?php echo $row->nama;?>">
                                <label>Mata Pelajaran</label>
                            </div>
                            <div class="col s12" style="margin-top: 1.25em">
                                <button type="submit" class="waves-effect waves-light btn">UBAH</button>
                            </div>
                    </form>
                </div>
            </div>
        <?php }?>
        >
    </div>
</div>*/?>

<script>
    	$(document).ready(function(){
	    $('.modal-trigger').leanModal();
        complete: function() { alert('Closed'); } 
	  });
</script>