<div class="container">
  <div class="row">
    <div class="col-lg-12 text-center">
      <h2 class="section-heading text-uppercase">Sewa mobil</h2>
      <h3 class="section-subheading text-muted">Sewa mobil yang Anda inginkan dengan mengikuti beberapa langkah mudah berikut ini</h3>
    </div>
  </div>
  <div class="row">
    <!-- <div class="col-md-1"></div> -->
    <div class="col-md-12">
      <!-- Grid -->
      <form method="POST" action="/somewere" id="stepper-form">

        <!-- ProgressBar -->
        <ul id="stepper-progressbar">
          <li class="active">Tentukan Tanggal</li>
          <li>Pilih Mobil</li>
          <li>Data Diri</li>
          <li>Pembayaran</li>
          <li>Konfirmasi</li>
        </ul>

        <!-- Fieldsets -->
        <fieldset>
          <h2 class="stepper-title">Langkah 1</h2>
          <h3 class="stepper-subtitle">Tentukan tanggal mulai pinjam mobil dan tanggal kembalinya</h3>
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-6">
                <i class="fa fa-calendar-check-o icon"></i>
                <label for="tgl_mulai">Tanggal Mulai</label>
                <input type="text" id="in_tgl_mulai" name="tgl_mulai" placeholder="Tanggal Mulai" required="required"> 
              </div>
              <div class="col-md-6">
                <i class="fa fa-calendar-times icon"></i>
                <label for="tgl_mulai">Tanggal Kembali</label>
                <input type="text" name="tgl_kembali" disabled="true" id="in_tgl_kembali" placeholder="Tanggal Kembali" required="required">  
              </div>
            </div>
          </div>
          <input type="button" id="next1" name="stepper-btn-next" class="stepper-next action-button" value="Next">
        </fieldset>

        <fieldset>
          <h2 class="stepper-title">Pilih Mobil</h2>
          <h3 class="stepper-subtitle">Pilh mobil yang ingin anda sewa dari daftar berikut</h3>
          <div class="col-md-12">
            <div class="row">
              <div></div>
            </div>
          </div>
          <input type="text" name="stepper-input-twitter" placeholder="Twitter">
          <input type="text" name="stepper-input-facebook" placeholder="Facebook">
          <input type="text" name="stepper-input-gplus" placeholder="Google Plus">
          <input type="button" name="stepper-btn-prev" class="stepper-previous action-button" value="Previous">
          <input type="button" name="stepper-btn-next" class="stepper-next action-button" value="Next">
        </fieldset>

        <fieldset>
          <h2 class="stepper-title">Data Diri</h2>
          <h3 class="stepper-subtitle">Lengkapi informasi tentang Anda</h3>
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12 input-title">
                <i class="fa fa-user icon"></i>
                <label>Info Anda</label>
                <hr>
              </div>
              <div class="col-md-8">
                <input type="name" name="nama" required="required" placeholder="Nama Asli Anda">
              </div>
              <div class="col-md-4">
                <select>
                  <option>Pria</option>
                  <option>Wanita</option>
                  <option>Tidak Tau</option>
                </select>
              </div>
              <div class="col-md-6">
                <input type="phone" name="no_telp" required="required" placeholder="No Telepon Aktif Anda">
              </div>
              <div class="col-md-6">
                <input type="email" name="email" required="required" placeholder="Email Aktif Anda">                         
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 input-title">
                <hr>
                <i class="fa fa-map icon"></i>
                <label>Alamat Anda</label>
                <hr>
              </div>
              <div class="col-md-12">              
                <textarea name="alamat" required="required" placeholder="Alamat Lengkap Anda"></textarea>
              </div>
            </div>
          </div>
          <input type="button" name="stepper-btn-prev" class="stepper-previous action-button" value="Previous">
          <input type="button" name="stepper-btn-next" class="stepper-next action-button" value="Next">
        </fieldset>

        <fieldset>
          <h2 class="stepper-title">Social Profiles</h2>
          <h3 class="stepper-subtitle">Your presence on the social network</h3>
          <input type="text" name="stepper-input-twitter" placeholder="Twitter">
          <input type="text" name="stepper-input-facebook" placeholder="Facebook">
          <input type="text" name="stepper-input-gplus" placeholder="Google Plus">
          <input type="button" name="stepper-btn-prev" class="stepper-previous action-button" value="Previous">
          <input type="button" name="stepper-btn-next" class="stepper-next action-button" value="Next">
        </fieldset>

        <fieldset>
          <h2 class="stepper-title">Personal Details</h2>
          <h3 class="stepper-subtitle">We will never sell it</h3>
          <input type="text" name="stepper-input-fname" placeholder="First Name">
          <input type="text" name="stepper-input-lname" placeholder="Last Name">
          <input type="phone" name="stepper-input-phone" placeholder="Phone">
          <textarea name="stepper-input-address" placeholder="Address"></textarea>
          <input type="button" name="stepper-btn-prev" class="stepper-previous action-button" value="Previous">
          <input type="submit" name="stepper-btn-submit" class="stepper-submit action-button" value="Submit">
        </fieldset>

      </form>
    </div>
    <!-- <div class="col-md-1"></div> -->
  </div>
</div>






<script src="{{asset('green-stepper/dist/script.js')}}"></script>