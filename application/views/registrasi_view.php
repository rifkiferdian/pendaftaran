<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Pendaftaran Pondok Programmer</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body{
    margin-top:40px;
}

.stepwizard-step p {
    margin-top: 10px;
}

.stepwizard-row {
    display: table-row;
}

.stepwizard {
    display: table;
    width: 100%;
    position: relative;
}

.stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}

.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;

}

.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}

.btn-circle {
  width: 30px;
  height: 30px;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 1.428571429;
  border-radius: 15px;
}
/*


*/
</style>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <div class="stepwizard">
      <div class="stepwizard-row setup-panel">
          <div class="stepwizard-step">
              <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
              <p>Data Pribadi</p>
          </div>
          <div class="stepwizard-step">
              <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
              <p>Akun Pribadi</p>
          </div>
          <div class="stepwizard-step">
              <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
              <p>Pendidikan</p>
          </div>
          <div class="stepwizard-step">
              <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
              <p>Data Wali</p>
          </div>
          <div class="stepwizard-step">
              <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
              <p>Lain-lain (1)</p>
          </div>
          <div class="stepwizard-step">
              <a href="#step-6" type="button" class="btn btn-default btn-circle" disabled="disabled">6</a>
              <p>Lain-lain (2)</p>
          </div>
      </div>
  </div>
  <form role="form">
    <div class="row setup-content" id="step-1">
      <div class="col-xs-12">
        <div class="col-md-12">
          <h3> Data Diri</h3>
          <br>
          <br>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="nama">Nama Lengkap</label>
            <div class="col-md-5">
              <input id="nama" name="nama" type="text" placeholder="" class="form-control input-md">
            </div>
          </div>
          <br>
          <br>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="tempat_tanggal_lahir">Tempat dan Tanggal Lahir</label>
            <div class="col-md-5">
              <input id="tempat_lahir" name="tempat_lahir" type="text" placeholder="" class="form-control input-md">
              <input id="tanggal_lahir" name="tanggal_lahir" type="date" placeholder="" class="form-control input-md">
            </div>
          </div>
          <br>
          <br>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="alamat">Alamat</label>
            <div class="col-md-5">
              <input id="alamat" name="alamat" type="text" placeholder="" class="form-control input-md">
            </div>
          </div>
          <br>
          <br>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="kota">Kota</label>
            <div class="col-md-5">
              <input id="cmpny" name="kota" type="text" placeholder="" class="form-control input-md">
            </div>
          </div>
          <br>
          <br>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="propinsi">Propinsi</label>
            <div class="col-md-5">
              <input id="propinsi" name="propinsi" type="text" placeholder="" class="form-control input-md">
            </div>
          </div>
          <br>
          <br>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="kodepos">Kode Pos</label>
            <div class="col-md-5">
            <input id="kodepos" name="kodepos" type="number" placeholder="" class="form-control input-md">
            </div>
          </div>
          <br>
          <br>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="cita_cita">Cita-Cita</label>
            <div class="col-md-5">
              <input id="cita_cita" name="cita_cita" type="text" placeholder="" class="form-control input-md">
            </div>
          </div>
          <br>
          <br>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="hobi">Hobi</label>
            <div class="col-md-5">
              <input id="hobi" name="hobi" type="text" placeholder="" class="form-control input-md">
            </div>
          </div>
          <br>
          <br>
          <!-- Next Button-->
          <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Lanjut</button>
        </div>
      </div>
    </div>
    <div class="row setup-content" id="step-2">
      <div class="col-xs-12">
        <div class="col-md-12">
          <h3> Akun Pribadi</h3>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="nomor_hp">Nomor HP</label>
            <div class="col-md-5">
              <input id="nomor_hp" name="nomor_hp" type="number" placeholder="" class="form-control input-md">
            </div>
          </div>
          <br>
          <br>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="nomor_wa">Nomor WA</label>
            <div class="col-md-5">
              <input id="nomor_wa" name="nomor_wa" type="number" placeholder="" class="form-control input-md">
            </div>
          </div>
          <br>
          <br>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="email">Email</label>
            <div class="col-md-5">
              <input id="email" name="email" type="email" placeholder="" class="form-control input-md">
            </div>
          </div>
          <br>
          <br>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="fb">Akun Facebook</label>
            <div class="col-md-5">
              <input id="fb" name="fb" type="text" placeholder="Contoh > facebook.com/id-anda" class="form-control input-md">
            </div>
          </div>
          <br>
          <br>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="twitter">Akun Twitter</label>
            <div class="col-md-5">
              <input id="twitter" name="twitter" type="text" placeholder="Contoh > twitter.com/id-anda" class="form-control input-md">
            </div>
          </div>
          <br>
          <br>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="ig">Akun Instagram</label>
            <div class="col-md-5">
              <input id="ig" name="ig" type="text" placeholder="Contoh > instagram.com/id-anda" class="form-control input-md">
            </div>
          </div>
          <br>
          <br>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="site">Website/Blog Pribadi</label>
            <div class="col-md-5">
              <input id="site" name="site" type="text" placeholder="" class="form-control input-md">
            </div>
          </div>
          <br>
          <br>
          <!-- File Button -->
          <!--div class="form-group">
            <label class="col-md-4 control-label" for="sep_json">Nomor HP</label>
            <div class="col-md-4">
        		  <input type="file" id="sep_json" name="sep_json" class="input-file" accept=".txt,.json">
              <div id="sep_jsondisplay"></div>
            </div>
          </div>
          <br>
          <br-->
          <!-- Text input-->
          <!--div class="form-group">
            <label class="col-md-4 control-label" for="doc_url">Documentation File Location</label>
            <div class="col-md-5">
              <input id="doc_url" name="doc_url" type="text" placeholder="docs/filename.html" class="form-control input-md">
            </div>
        </div-->
        <!-- Next Button-->
        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Lanjut</button>
      </div>
      </div>
    </div>
    <div class="row setup-content" id="step-3">
      <div class="col-xs-12">
        <div class="col-md-12">
          <h3> Riwayat Pendidikan</h3>
          <div class="form-group">
            <label class="col-md-4 control-label" for="lulusan">Status Pendidikan</label>
            <div class="col-md-5">
              <select id="lulusan" name="lulusan" class="form-control">
                <option value="smk">Lulusan SMK</option>
                <option value="sma">Lulusan SMA</option>
                <option value="ma">Lulusan MA</option>
                <option value="kuliah">Sedang Kuliah</option>
                <option value="kerja">Sedang Bekerja</option>
              </select>
            </div>
          </div>
          <br>
          <br>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="asal_sekolah">Asal Sekolah</label>
            <div class="col-md-5">
              <input id="asal_sekolah" name="asal_sekolah" type="text" placeholder="" class="form-control input-md">
            </div>
          </div>
          <br>
          <br>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="jurusan_sekolah">Jurusan Sekolah</label>
            <div class="col-md-5">
              <input id="jurusan_sekolah" name="jurusan_sekolah" type="text" placeholder="" class="form-control input-md">
            </div>
          </div>
          <br>
          <br>
          <div class="form-group">
            <label class="col-md-4 control-label" for="tahun_lulus">Tahun Lulus</label>
            <div class="col-md-5">
              <input id="tahun_lulus" name="tahun_lulus" type="number" placeholder="" class="form-control input-md">
            </div>
          </div>
          <br>
          <br>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="organisasi">Organisasi dan Jabatannya</label>
            <div class="col-md-5">
              <textarea id="organisasi" name="organisasi" type="text" placeholder="" class="form-control input-md"></textarea>
            </div>
          </div>
          <br>
          <br>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="prestasi">Prestasi</label>
            <div class="col-md-5">
              <textarea id="prestasi" name="prestasi" type="text" placeholder="" class="form-control input-md"></textarea>
            </div>
          </div>
          <br>
          <br>
          <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Lanjut</button>
        </div>
      </div>
    </div>
    <div class="row setup-content" id="step-4">
      <div class="col-xs-12">
        <div class="col-md-12" >
          <h3> Data Wali</h3>
          <div class="form-group">
            <label class="col-md-4 control-label" for="jml_ortu">Keadaan Rumah Tangga</label>
            <div class="col-md-5">
              <select id="jml_ortu" name="jml_ortu" class="form-control">
                <option value="komplit">Komplit</option>
                <option value="yatim">Yatim</option>
                <option value="piatu">Piatu</option>
                <option value="yatimpiatu">Yatim Piatu</option>
                <option value="cerai">Cerai</option>
              </select>
            </div>
          </div>
          <br>
          <br>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="pekerjaan_ayah">Pekerjaan Ayah</label>
            <div class="col-md-5">
              <input id="pekerjaan_ayah" name="pekerjaan_ayah" type="text" placeholder="" class="form-control input-md">
            </div>
          </div>
          <br>
          <br>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="pekerjaan_ibu">Pekerjaan Ibu</label>
            <div class="col-md-5">
              <input id="pekerjaan_ibu" name="pekerjaan_ibu" type="text" placeholder="" class="form-control input-md">
            </div>
          </div>
          <br>
          <br>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="penghasilan_ortu">Penghasilan Total Orang Tua</label>
            <div class="col-md-5">
              <input id="penghasilan_ortu" name="penghasilan_ortu" type="text" placeholder="" class="form-control input-md">
            </div>
          </div>
          <br>
          <br>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="jml_saudara">Jumlah Saudara</label>
            <div class="col-md-5">
              <input id="jml_saudara" name="jml_saudara" type="text" placeholder="" class="form-control input-md">
            </div>
          </div>
          <br>
          <br>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="tanggungan_keluarga">Jumlah Tanggungan</label>
            <div class="col-md-5">
              <input id="tanggungan_keluarga" name="tanggungan_keluarga" type="text" placeholder="" class="form-control input-md">
            </div>
          </div>
          <br>
          <br>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="izin_ortu">Sudah izin ortu?</label>
            <div class="col-md-5">
              <select id="izin_ortu" name="izin_ortu" class="form-control">
                <option value="komplit">Sudah</option>
                <option value="yatim">Belum</option>
              </select>
            </div>
          </div>
          <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Lanjut</button>
        </div>
      </div>
    </div>
    <div class="row setup-content" id="step-5">
      <div class="col-xs-12">
        <div class="col-md-12">
          <h3> Lain-lain (1)</h3>
          <div class="form-group">
            <label class="col-md-4 control-label" for="punya_laptop">Punya Laptop/Netbook?</label>
            <div class="col-md-5">
              <select id="punya_laptop" name="punya_laptop" class="form-control">
                <option value="sudah">Sudah Punya</option>
                <option value="belum">Belum Punya</option>
              </select>
            </div>
          </div>
          <br>
          <br>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="skill">Skill/Kelebihan yang kamu miliki</label>
            <div class="col-md-5">
              <input id="skill" name="skill" type="text" placeholder="" class="form-control input-md">
            </div>
          </div>
          <br>
          <br>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="test_iq">Test IQ</label>
            <div class="col-md-5">
              <input id="test_iq" name="test_iq" type="number" placeholder="" class="form-control input-md">
            </div>
          </div>
          <br>
          <br>
          <!-- Textarea -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="kepribadian">Jelaskan secara singkat kepribadian anda</label>
            <div class="col-md-5">
              <textarea id="kepribadian" name="kepribadian" class="form-control input-md"></textarea>
            </div>
          </div>
          <br>
          <br>
          <!-- Textarea -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="alasan_ikut">Alasan Mendaftar</label>
            <div class="col-md-5">
              <textarea id="alasan_ikut" name="alasan_ikut" class="form-control input-md"></textarea>
            </div>
          </div>
          <br>
          <br>
          <div class="form-group">
            <label class="col-md-4 control-label" for="minat">Minat</label>
            <div class="col-md-5">
              <select id="minat" name="minat" class="form-control">
                <option value="komplit">Mobile Development</option>
                <option value="yatim">Web Development</option>
                <option value="yatim">Graphic Design</option>
              </select>
            </div>
          </div>
          <br>
          <br>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="hafalan_quran">Hafalan Qur'an berapa juz?</label>
            <div class="col-md-5">
              <input id="hafalan_quran" name="hafalan_quran" type="text" placeholder="" class="form-control input-md">
            </div>
          </div>
          <br>
          <br>
          <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Lanjut</button>
        </div>
      </div>
    </div>
    <div class="row setup-content" id="step-6">
      <div class="col-xs-12">
        <div class="col-md-12">
          <h3> Lain-lain (2)</h3>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="tokoh_idola">Tokoh Idola</label>
            <div class="col-md-5">
              <input id="tokoh_idola" name="tokoh_idola" type="text" placeholder="" class="form-control input-md">
            </div>
          </div>
          <br>
          <br>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="buku_favorit">Buku Favorit</label>
            <div class="col-md-5">
              <input id="buku_favorit" name="buku_favorit" type="text" placeholder="" class="form-control input-md">
            </div>
          </div>
          <br>
          <br>
          <div class="form-group">
            <label class="col-md-4 control-label" for="rokok">Merokok atau tidak?</label>
            <div class="col-md-5">
              <select id="rokok" name="rokok" class="form-control">
                <option value="iya">Merokok</option>
                <option value="tidak">Tidak merokok</option>
              </select>
            </div>
          </div>
          <br>
          <br>
          <div class="form-group">
            <label class="col-md-4 control-label" for="rokok">Punya pacar atau tidak?</label>
            <div class="col-md-5">
              <select id="rokok" name="rokok" class="form-control">
                <option value="iya">Punya</option>
                <option value="tidak">Tidak</option>
              </select>
            </div>
          </div>
          <br>
          <br>
          <!-- File Button -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="photo">Upload photo terbaru</label>
            <div class="col-md-4">
              <input type="file" id="photo" name="photo" class="input-file" accept=".jpg,.png">
            </div>
          </div>
          <br><br>
          <div class="form-group">
            <label class="col-md-4 control-label" for="catatan">Cacatan</label>
            <div class="col-md-5">
              <textarea id="catatan" name="catatan" class="form-control input-md"></textarea>
            </div>
          </div>
          <br>
          <br>
          <br>
          <br>
          <div class="form-group">
            <div class="col-md-5">
              <input type="checkbox" name="pernyataan" value="pernyataan">
              <strong>Bismillah.
              Dengan ini saya menyatakan bahwa data yang saya isikan ini adalah benar apa adanya dan tidak direkayasa.</strong>
            </div>
          </div>
          <br>
          <br>
          <button class="btn btn-success btn-lg pull-right" type="submit">Submit</button>
        </div>
      </div>
    </div>
  </form>
</div>
<script type="text/javascript">
$(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-primary').trigger('click');


    //custom code by @naresh for file input sep

        var fileInput = document.getElementById('sep_json');
		var fileDisplayArea = document.getElementById('sep_jsondisplay');
var fileInput1 = document.getElementById('action_json');
    	var fileDisplayArea1 = document.getElementById('action_jsondisplay');


		    	fileInput.addEventListener('change', function(e) {
			var file = fileInput.files[0];
			var textType = /text.*/;

			if (file.type.match(textType)) {
				var reader = new FileReader();

				reader.onload = function(e) {
          var res= reader.result;
          function isJSON (something) {
    if (typeof something != 'string')
        something = JSON.stringify(something);

    try {
        JSON.parse(something);
        return true;
    } catch (e) {
        return false;
    }
}
          if(isJSON(res)){
					fileDisplayArea.innerText = JSON.stringify(res);
          }else{
            fileDisplayArea.innerText = "File content is not JSON"
          }
				}

				reader.readAsText(file);
			} else {
				fileDisplayArea.innerText = "File not supported!"
			}
		});
    fileInput1.addEventListener('change', function(e) {
    		var file = fileInput1.files[0];
			var textType = /text.*/;

			if (file.type.match(textType)) {
				var reader = new FileReader();

				reader.onload = function(e) {
          var res= reader.result;
          function isJSON (something) {
    if (typeof something != 'string')
        something = JSON.stringify(something);

    try {
        JSON.parse(something);
        return true;
    } catch (e) {
        return false;
    }
}
          if(isJSON(res)){
					fileDisplayArea1.innerText = JSON.stringify(res);
          }else{
            fileDisplayArea1.innerText = "File content is not JSON"
          }
				}

				reader.readAsText(file);
			} else {
				fileDisplayArea1.innerText = "File not supported!"
			}
		});

    //@naresh action dynamic childs
    var next = 0;
    $("#add-more").click(function(e){
        e.preventDefault();
        var addto = "#field" + next;
        var addRemove = "#field" + (next);
        next = next + 1;
        var newIn = ' <div id="field'+ next +'" name="field'+ next +'"><!-- Text input--><div class="form-group"> <label class="col-md-4 control-label" for="action_id">Action Id</label> <div class="col-md-5"> <input id="action_id" name="action_id" type="text" placeholder="" class="form-control input-md"> </div></div><br><br><!-- Text input--><div class="form-group"> <label class="col-md-4 control-label" for="action_name">Action Name</label> <div class="col-md-5"> <input id="action_name" name="action_name" type="text" placeholder="" class="form-control input-md"> </div></div><br><br><!-- File Button --> <div class="form-group"> <label class="col-md-4 control-label" for="action_json">Action JSON File</label> <div class="col-md-4"> <input id="action_json" name="action_json" class="input-file" type="file"> </div></div></div>';
        var newInput = $(newIn);
        var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" >Remove</button></div></div><div id="field">';
        var removeButton = $(removeBtn);
        $(addto).after(newInput);
        $(addRemove).after(removeButton);
        $("#field" + next).attr('data-source',$(addto).attr('data-source'));
        $("#count").val(next);

            $('.remove-me').click(function(e){
                e.preventDefault();
                var fieldNum = this.id.charAt(this.id.length-1);
                var fieldID = "#field" + fieldNum;
                $(this).remove();
                $(fieldID).remove();
            });
    });




});
</script>
</body>
</html>
