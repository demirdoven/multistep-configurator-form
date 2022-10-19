<style>
.select_type,
.select_detay,
.select_bilgiler {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
}
.select_type > label,
.select_detay > label,
.select_bilgiler > label {
    width: 48%;
    background: #EDEDED;
    border-radius: 16px;
    display: flex;
	justify-content: space-between;
	align-items: center;
    height: 100%;
    margin: 0;
    padding: 24px;
    position: relative;
    margin-bottom: 20px;
	cursor: pointer;
}
span.kullanim_yeri_adi {
    display: inline-block;
    margin-left: 10px;
    font-size: 20px;
    vertical-align: middle;
}
.type_icon {
	margin-right: 10px;
}
.type_icon i {
    font-size: 65px;
}
.owl-nav {
    text-align: center;
	margin-top: 30px;
}
.owl-nav button {
    margin: 0 10px;
    border: 1px solid #c1bfbf;
    border-radius: 19px;
    padding: 4px 35px;
    box-sizing: unset;
}
.owl-nav button:focus {
	outline: 0;
}
.conf_wrapper h1 {
    text-align: center;
    margin-top: 10px;
}

.select_bilgiler > label > div:first-child {
    display: flex;
    flex-direction: column;
}
.select_bilgiler > label > div:first-child div {
    margin-left: 10px;
    margin-top: 12px;
}
.select_bilgiler input[type="number"] {
    width: 60px;
    text-align: center;
    height: 40px;
    background: #fff;
    margin: 0;
    border: 1px solid #333;
}
.select_bilgiler > label > div select {
    height: 40px;
    background: #fff;
    margin: 0;
    border: 1px solid #333;
    border-radius: 16px;
    padding: 0 16px;
}
.select_bilgiler > label > div select:focus {
    outline: 0;
}
input[type="number"]::-webkit-outer-spin-button,
input[type="number"]::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
input[type="number"][type=number] {
  -moz-appearance: textfield;
}
span.arti {
    height: 40px;
    line-height: 40px;
    padding: 0 13px;
    background: #fff;
    margin: 0 0 0 -5px;
    border: 1px solid #333;
    display: inline-block;
    vertical-align: top;
	font-size: 22px;
    width: 40px;
    text-align: center;
	border-radius: 0 16px 16px 0;
	user-select: none;
	cursor: pointer;
}
span.eksi {
    height: 40px;
    line-height: 40px;
    padding: 0 13px;
    background: #fff;
    margin: 0 -5px 0 0;
    border: 1px solid #333;
    display: inline-block;
    vertical-align: top;
    font-size: 22px;
    width: 40px;
    text-align: center;
	border-radius: 16px 0  0 16px;
	user-select: none;
	cursor: pointer;
}
.kapanacak {
	display: none!important;
}
.pasif_buton {
	position: relative;
}
.pasif_buton:after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    background: red;
    width: 100%;
    height: 100%;
    z-index: 999999;
    user-select: none;
}
.sonuc_head {
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.temel_gelismis_sec {
    display: flex;
    justify-content: flex-end;
    align-items: center;
}
a.temel_sec {
    background: #d3d3d3;
    color: #000;
    line-height: 1;
    padding: 6px 14px 5px;
    border-radius: 14px 0 0 14px;
    margin: 0 2px 0 0;
    display: inline-table;
    transition: all .4s ease;
	opacity: .5;
}
a.gelismis_sec {
    background: #d3d3d3;
    color: #000;
    line-height: 1;
    padding: 6px 14px 5px;
    border-radius: 0 14px 14px 0;
    margin: 0 0 0 2px;
    display: inline-table;
    transition: all .4s ease;
	opacity: .5;
}
a.temel_sec:hover,
a.gelismis_sec:hover {
	background: #000;
    color: #fff;
	opacity: .85;
}
a.aktif {
	background: #414141;
    color: #fff;
	opacity: 1;
}
a.pdf_indir,
a.email_olarak_al {
    background: #414141;
    color: #fff;
    line-height: 1;
    padding: 6px 14px 5px;
    border-radius: 14px;
    margin: 0 5px;
	display: inline-table;
	transition: all .4s ease;
}
a.pdf_indir:hover,
a.email_olarak_al:hover {
	background: #c7c7c7;
    color: #000;
}

.radio_wrap {
  display: block;
  position: relative;
  padding-left: 27px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.radio_wrap input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}
.radio_wrap .checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #bfbfbf;
  border-radius: 50%;
}
.radio_wrap:hover input ~ .checkmark {
  background-color: #ccc;
}
.radio_wrap input:checked ~ .checkmark {
  background-color: #2196F3;
}
.radio_wrap .checkmark:after {
  content: "";
  position: absolute;
  display: none;
}
.radio_wrap input:checked ~ .checkmark:after {
  display: block;
}
.radio_wrap .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}
.checkbox_wrap {
  display: block;
  position: relative;
  padding-left: 27px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.checkbox_wrap input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}
.checkbox_wrap .checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #bfbfbf;
  border-radius: 4px;
}
.checkbox_wrap:hover input ~ .checkmark {
  background-color: #bfbfbf;
}
.checkbox_wrap input:checked ~ .checkmark {
  background-color: #2196F3;
}
.checkbox_wrap  .checkmark:after {
  content: "";
  position: absolute;
  display: none;
}
.checkbox_wrap input:checked ~ .checkmark:after {
  display: block;
}
.checkbox_wrap .checkmark:after {
  left: 10px;
  top: 7px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
.select_type > label > div:first-child,
.select_detay > label > div:first-child {
    display: flex;
}
button.owl-next.disabled,
button.owl-prev.disabled {
    display: none;
}

.urun_list > div {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: flex-start;
}
.tek_urun {
    width: 100%;
    background: #EDEDED;
    border-radius: 16px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 100%;
    margin: 0;
    padding: 24px;
    position: relative;
    margin-bottom: 20px;
}
.tek_urun > div:last-child {
    position: relative;
    margin-left: 15px;
    border-left: 4px dotted #c7c7c7;
    padding-left: 20px;
}
.tek_urun > div:first-child img {
    width: 100px;
    height: 100px;
    border-radius: 10px;
    border: 4px solid gainsboro;
}
a.urun_title {
    font-size: 24px;
    line-height: 1;
    display: block;
    margin-top: 8px;
    font-weight: bold;
    margin-left: 2em;
}
.tek_urun > div:first-child {
    display: flex;
    justify-content: center;
    align-items: center;
}
.sonuc_body {
    margin: 2em 0;
}
img.urun_list_loader {
    width: 200px!important;
    margin: 3em auto 1em;
}
.tek_urun_artirici {
    display: flex;
}
.tek_urun_artirici input[type="number"] {
    width: 60px;
    text-align: center;
    height: 40px;
    background: #fff;
    margin: 0;
    border: 1px solid #333;
}

#advanced {
	display: none;
}
.tek_urun {
	display: none;
}
.acac {
	display: flex;
}
.tek_urun_artirici input[type="text"] {
    text-align: center;
	background: transparent;
    border: 0;
}
@media screen and (max-width: 768px){
	.select_type > label,
	.select_detay > label,
	.select_bilgiler > label,
	.tek_urun {
		width: 100%;
		margin-bottom: 10px;
	}
	.sonuc_head {
		display: flex;
		justify-content: center;
		align-items: center;
	}
}
</style>
<div class="conf_wrapper">

	<div class="conf_slider owl-carousel">
		
		<div class="step1">
			<h1>Kullanım yerini seçin</h1>
			<div class="select_type">
				
				<label>
					<div>
						<label class="radio_wrap">
							<input type="radio" name="kullanim_yeri" value="ap"/>
							<span class="checkmark"></span>
						</label>
						<span class="kullanim_yeri_adi">Apartman</span>
					</div>
					<div class="type_icon">
						<i class="fa fa-building"></i>
					</div>
				</label>
				<label>
					<div>
						<label class="radio_wrap">
							<input type="radio" name="kullanim_yeri" value="ev"/>
							<span class="checkmark"></span>
						</label>
						
						<span class="kullanim_yeri_adi">Müstakil Ev</span>
					</div>
					<div class="type_icon">
						<i class="fa fa-home" aria-hidden="true"></i>
					</div>
				</label>
				<label>
					<div>
						<label class="radio_wrap">
							<input type="radio" name="kullanim_yeri" value="of"/>
							<span class="checkmark"></span>
						</label>
						
						<span class="kullanim_yeri_adi">Ofis</span>
					</div>
					<div class="type_icon">
						<i class="fa fa-briefcase" aria-hidden="true"></i>
					</div>
				</label>
				<label>
					<div>
						<label class="radio_wrap">
							<input type="radio" name="kullanim_yeri" value="du"/>
							<span class="checkmark"></span>
						</label>
						
						<span class="kullanim_yeri_adi">İş - Mağaza, Dükkan, Kafe, Depo, v.b.</span>
					</div>
					<div class="type_icon">
						<i class="fa fa-shopping-cart" aria-hidden="true"></i>
					</div>
				</label>
				<label>
					<div>
						<label class="radio_wrap">
							<input type="radio" name="kullanim_yeri" value="yat"/>
							<span class="checkmark"></span>
						</label>
						
						<span class="kullanim_yeri_adi">Yat, Tekne, Karavan</span>
					</div>
					<div class="type_icon">
						<i class="fa fa-anchor"></i>
					</div>
				</label>
			</div>
			
		</div>
		<div class="step2">
			<h1>Özellikleri seçin</h1>
			<div class="select_detay">
				
				<label class="ap ev of du yat">
					<div>
						<label class="checkbox_wrap">
						  <input type="checkbox" id="izinsiz_g" name="ozellik[]" value="izinsiz_giris_korumasi"/>
						  <span class="checkmark"></span>
						</label>
						
						<span class="kullanim_yeri_adi">İzinsiz Giriş Koruması</span>
					</div>
					<div class="type_icon">
						<i class="fa fa-lock" aria-hidden="true"></i>
					</div>
				</label>
				
				<label style="display: none;">
					<div>
						<label class="checkbox_wrap">
						  <input type="checkbox" id="fotograf_d" name="ozellik[]" value="fotograf_dogrulamali_h"/>
						  <span class="checkmark"></span>
						</label>
						
						<span class="kullanim_yeri_adi">Fotoğraf Doğrulamalı Hareket Dedektörü</span>
					</div>
					<div class="type_icon">
						<i class="fa fa-camera"></i>
					</div>
				</label>
				
				
				<label class="ev of du yat">
					<div>
						<label class="checkbox_wrap">
						  <input type="checkbox" name="ozellik[]" value="dis_mekan_guvenligi"/>
						  <span class="checkmark"></span>
						</label>
						
						<span class="kullanim_yeri_adi">Dış Mekan Güvenliği</span>
					</div>
					<div class="type_icon">
						<i class="fa fa-shield" aria-hidden="true"></i>
					</div>
				</label>
				
				<label class="ap ev of du yat">
					<div>
						<label class="checkbox_wrap">
						  <input type="checkbox" name="ozellik[]" value="yangin_algilama"/>
						  <span class="checkmark"></span>
						</label>
						
						<span class="kullanim_yeri_adi">Yangın Algılama</span>
					</div>
					<div class="type_icon">
						<i class="fa fa-fire" aria-hidden="true"></i>
					</div>
				</label>
				
				<label class="ap ev of du yat">
					<div>
						<label class="checkbox_wrap">
						  <input type="checkbox" name="ozellik[]" value="sizinti_korumasi"/>
						  <span class="checkmark"></span>
						</label>
						
						<span class="kullanim_yeri_adi">Su Baskını Koruması</span>
					</div>
					<div class="type_icon">
						<i class="fa fa-tint" aria-hidden="true"></i>
					</div>
				</label>
				
				<label class="ap ev of du yat">
					<div>
						<label class="checkbox_wrap">
						  <input type="checkbox" name="ozellik[]" value="otomasyon"/>
						  <span class="checkmark"></span>
						</label>
						
						<span class="kullanim_yeri_adi">Otomasyon</span>
					</div>
					<div class="type_icon">
						<i class="fa fa-shield" aria-hidden="true"></i>
					</div>
				</label>
			</div>
			
		</div>
		<div class="step3">
			<h1>Bilgileri girin</h1>
			<div class="select_bilgiler">
				
				<label class="ap ev of du izinsiz_giris_korumasi yangin_algilama sizinti_korumasi dis_mekan_guvenligi otomasyon">
					<div>
						<span class="kullanim_yeri_adi">Sahip Olunan Kat sayısı</span>
						<div>
							<span class="eksi">-</span>
							<input type="number" name="kat_sayisi" value="1" min="1"/>
							<span class="arti">+</span>
						</div>
					</div>
					<div class="type_icon">
						<i class="fa fa-arrow-up" aria-hidden="true"></i>
					</div>
				</label>
				
				<label class="ap ev izinsiz_giris_korumasi">
					<div>
						<span class="kullanim_yeri_adi">Apartmanda Bulunduğu Kat</span>
						<div>
							<select name="apartman_kati">
								<option value="cati_kati">Çatı Katı</option>
								<option value="giris_kat">1-2 Giriş Kat</option>
								<option value="ara_kat">Ara Kat</option>
							</select>
						</div>
					</div>
					<div class="type_icon">
						<i class="fa fa-level-up" aria-hidden="true"></i>
					</div>
				</label>
				
				<label class="of du izinsiz_giris_korumasi">
					<div>
						<span class="kullanim_yeri_adi">Mağazanın Bulunduğu Kat</span>
						<div>
							<select name="ofis_kati">
								<option value="cati_kati">Çatı Katı</option>
								<option value="giris_kat">1-2 Giriş Kat</option>
								<option value="ara_kat">Ara Kat</option>
							</select>
						</div>
					</div>
					<div class="type_icon">
						<i class="fa fa-arrow-up" aria-hidden="true"></i>
					</div>
				</label>
				
				<label class="ap ev duk of yangin_algilama">
					<div>
						<span class="kullanim_yeri_adi">Oda sayısı</span>
						<div>
							<span class="eksi">-</span>
							<input type="number" name="oda_sayisi" value="1" min="1"/>
							<span class="arti">+</span>
						</div>
					</div>
					<div class="type_icon">
						<i class="fa fa-bed" aria-hidden="true"></i>
					</div>
				</label>
				
				<label class="ap ev of du izinsiz_giris_korumasi yangin_algilama">
					<div>
						<span class="kullanim_yeri_adi">Mutfak dahil oda sayısı</span>
						<div>
							<span class="eksi">-</span>
							<input type="number" name="mutfak_dahil_oda_sayisi" value="1" min="1"/>
							<span class="arti">+</span>
						</div>
					</div>
					<div class="type_icon">
						<i class="fa fa-cutlery" aria-hidden="true"></i>
					</div>
				</label>
				
				<label class="ap ev of du yat sizinti_korumasi">
					<div>
						<span class="kullanim_yeri_adi">Banyo sayısı</span>
						<div>
							<span class="eksi">-</span>
							<input type="number" name="banyo_sayisi" value="1" min="1"/>
							<span class="arti">+</span>
						</div>
					</div>
					<div class="type_icon">
						<i class="fa fa-bath" aria-hidden="true"></i>
					</div>
				</label>
				
				<label class="ap ev of du yat izinsiz_giris_korumasi">
					<div>
						<span class="kullanim_yeri_adi">Giriş sayısı</span>
						<div>
							<span class="eksi">-</span>
							<input type="number" name="giris_sayisi" value="1" min="1"/>
							<span class="arti">+</span>
						</div>
					</div>
					<div class="type_icon">
						<i class="fa fa-sign-in" aria-hidden="true"></i>
					</div>
				</label>
				
				<label class="ev of du yat dis_mekan_guvenligi ">
					<div>
						<span class="kullanim_yeri_adi">Alan boyutu (m2)</span>
						<div>
							<span class="eksi">-</span>
							<input type="number" name="alan_boyutu" value="1" min="1"/>
							<span class="arti">+</span>
						</div>
					</div>
					<div class="type_icon">
						<i class="fa fa-sort-numeric-asc" aria-hidden="true"></i>
					</div>
				</label>
				
			</div>
			
		</div>
		
		<div class="step4">
			<h1>Size uygun ürünlerimiz</h1>
			<div class="sonuc">
				
				<div class="sonuc_head">
					<div class="temel_gelismis_sec">
						<a href="#" class="temel_sec aktif">Temel</a>
						<a href="#" class="gelismis_sec">Gelişmiş</a>
					</div>
					<div>
						<a href="<?php echo OFFERS_PLG_URL; ?>downloadpdf.php?pids=" class="pdf_indir">PDF Olarak İndir</a>
						<a href="" class="email_olarak_al">E-mail Olarak Al</a>
					</div>
				</div>
				<div class="sonuc_body">
					<img class="urun_list_loader" src="<?php echo OFFERS_PLG_URL; ?>/img/loader.gif"/>
					<div class="urun_list">
						
						<div id="simple">
						<div class="tek_urun" data-urun-title="HUB">
							<div>
								<img src="http://unicornbilisim.com/gensis/wp-content/uploads/2020/11/hub.png" class="urun_thumb"/>
								<a href="" target="_blank" class="urun_title">HUB</a>
							</div>
							<div class="tek_urun_artirici">
								
								<input type="text" name="banyo_sayisi" value="1" min="1">
								
							</div>
						</div>
						<div class="tek_urun" data-urun-title="MotionProtect">
							<div>
								<img src="http://unicornbilisim.com/gensis/wp-content/uploads/2020/11/motionprotect.png" class="urun_thumb"/>
								<a href="" class="urun_title">MotionProtect</a>	
							</div>
							<div class="tek_urun_artirici">
								<span class="eksi">-</span>
								<input type="number" name="banyo_sayisi" value="1" min="1">
								<span class="arti">+</span>
							</div>
						</div>
						<div class="tek_urun" data-urun-title="MotionProtect Plus">
							<div>
								<img src="http://unicornbilisim.com/gensis/wp-content/uploads/2020/11/motionprotect.png" class="urun_thumb"/>
								<a href="" class="urun_title">MotionProtect Plus</a>	
							</div>
							<div class="tek_urun_artirici">
								<span class="eksi">-</span>
								<input type="number" name="banyo_sayisi" value="1" min="1">
								<span class="arti">+</span>
							</div>
						</div>
						<div class="tek_urun" data-urun-title="MotionCam">
							<div>
								<img src="http://unicornbilisim.com/gensis/wp-content/uploads/2020/11/motioncam.png" class="urun_thumb"/>
								<a href="" class="urun_title">MotionCam</a>	
							</div>
							<div class="tek_urun_artirici">
								<span class="eksi">-</span>
								<input type="number" name="banyo_sayisi" value="1" min="1">
								<span class="arti">+</span>
							</div>
						</div>
						<div class="tek_urun" data-urun-title="DoorProtect">
							<div>
								<img src="http://unicornbilisim.com/gensis/wp-content/uploads/2020/11/doorprotect.png" class="urun_thumb"/>
								<a href="" class="urun_title">DoorProtect</a>
							</div>
							<div class="tek_urun_artirici">
								<span class="eksi">-</span>
								<input type="number" name="banyo_sayisi" value="1" min="1">
								<span class="arti">+</span>
							</div>
						</div>
						<div class="tek_urun" data-urun-title="DoorProtect Plus">
							<div>
								<img src="http://unicornbilisim.com/gensis/wp-content/uploads/2020/11/doorprotect.png" class="urun_thumb"/>
								<a href="" class="urun_title">DoorProtect Plus</a>
							</div>
							<div class="tek_urun_artirici">
								<span class="eksi">-</span>
								<input type="number" name="banyo_sayisi" value="1" min="1">
								<span class="arti">+</span>
							</div>
						</div>
						<div class="tek_urun" data-urun-title="FireProtect">
							<div>
								<img src="http://unicornbilisim.com/gensis/wp-content/uploads/2020/11/fireprotect.png" class="urun_thumb"/>
								<a href="" class="urun_title">FireProtect</a>
							</div>
							<div class="tek_urun_artirici">
								<span class="eksi">-</span>
								<input type="number" name="banyo_sayisi" value="1" min="1">
								<span class="arti">+</span>
							</div>
						</div>
						<div class="tek_urun" data-urun-title="FireProtect Plus">
							<div>
								<img src="http://unicornbilisim.com/gensis/wp-content/uploads/2020/11/fireprotect.png" class="urun_thumb"/>
								<a href="" class="urun_title">FireProtect Plus</a>
							</div>
							<div class="tek_urun_artirici">
								<span class="eksi">-</span>
								<input type="number" name="banyo_sayisi" value="1" min="1">
								<span class="arti">+</span>
							</div>
						</div>
						<div class="tek_urun" data-urun-title="MotionProtect Outdoor">
							<div>
								<img src="http://unicornbilisim.com/gensis/wp-content/uploads/2020/11/motionprotect-outdoor.png" class="urun_thumb"/>
								<a href="" class="urun_title">MotionProtect Outdoor</a>
							</div>
							<div class="tek_urun_artirici">
								<span class="eksi">-</span>
								<input type="number" name="banyo_sayisi" value="1" min="1">
								<span class="arti">+</span>
							</div>
						</div>
						<div class="tek_urun" data-urun-title="Hood for MotionProtect Outdoor">
							<div>
								<img src="http://unicornbilisim.com/gensis/wp-content/uploads/2020/11/motionprotect-outdoor.png" class="urun_thumb"/>
								<a href="" class="urun_title">Hood for MotionProtect Outdoor</a>
							</div>
							<div class="tek_urun_artirici">
								<span class="eksi">-</span>
								<input type="number" name="banyo_sayisi" value="1" min="1">
								<span class="arti">+</span>
							</div>
						</div>
						<div class="tek_urun" data-urun-title="LeaksProtect">
							<div>
								<img src="http://unicornbilisim.com/gensis/wp-content/uploads/2020/11/leaksprotect.png" class="urun_thumb"/>
								<a href="" class="urun_title">LeaksProtect</a>
							</div>
							<div class="tek_urun_artirici">
								<span class="eksi">-</span>
								<input type="number" name="banyo_sayisi" value="1" min="1">
								<span class="arti">+</span>
							</div>
						</div>
						<div class="tek_urun" data-urun-title="HomeSiren">
							<div>
								<img src="http://unicornbilisim.com/gensis/wp-content/uploads/2020/11/homesiren.png" class="urun_thumb"/>
								<a href="" class="urun_title">HomeSiren</a>
							</div>
							<div class="tek_urun_artirici">
								<span class="eksi">-</span>
								<input type="number" name="banyo_sayisi" value="1" min="1">
								<span class="arti">+</span>
							</div>
						</div>
						<div class="tek_urun" data-urun-title="StreetSiren">
							<div>
								<img src="http://unicornbilisim.com/gensis/wp-content/uploads/2020/11/streetsiren.png" class="urun_thumb"/>
								<a href="" class="urun_title">StreetSiren</a>
							</div>
							<div class="tek_urun_artirici">
								<span class="eksi">-</span>
								<input type="number" name="banyo_sayisi" value="1" min="1">
								<span class="arti">+</span>
							</div>
						</div>
						<div class="tek_urun" data-urun-title="SpaceControl">
							<div>
								<img src="http://unicornbilisim.com/gensis/wp-content/uploads/2020/11/spacecontrol.png" class="urun_thumb"/>
								<a href="" class="urun_title">SpaceControl</a>
							</div>
							<div class="tek_urun_artirici">
								<span class="eksi">-</span>
								<input type="number" name="banyo_sayisi" value="1" min="1">
								<span class="arti">+</span>
							</div>
						</div>
						<div class="tek_urun" data-urun-title="Key Ped">
							<div>
								<img src="http://unicornbilisim.com/gensis/wp-content/uploads/2020/11/keypad.png" class="urun_thumb"/>
								<a href="" class="urun_title">Key Ped</a>
							</div>
							<div class="tek_urun_artirici">
								<span class="eksi">-</span>
								<input type="number" name="banyo_sayisi" value="1" min="1">
								<span class="arti">+</span>
							</div>
						</div>
						<div class="tek_urun" data-urun-title="Rex">
							<div>
								<img src="http://unicornbilisim.com/gensis/wp-content/uploads/2020/11/rex.png" class="urun_thumb"/>
								<a href="" class="urun_title">Rex</a>
							</div>
							<div class="tek_urun_artirici">
								<span class="eksi">-</span>
								<input type="number" name="banyo_sayisi" value="1" min="1">
								<span class="arti">+</span>
							</div>
						</div>
						
						<div class="tek_urun" data-urun-title="Socket">
							<div>
								<img src="http://unicornbilisim.com/gensis/wp-content/uploads/2020/11/kablosuz-akilli-priz.png" class="urun_thumb"/>
								<a href="" class="urun_title">Socket</a>
							</div>
							<div class="tek_urun_artirici">
								<span class="eksi">-</span>
								<input type="number" name="banyo_sayisi" value="1" min="1">
								<span class="arti">+</span>
							</div>
						</div>
						<div class="tek_urun" data-urun-title="WallSwitch">
							<div>
								<img src="http://unicornbilisim.com/gensis/wp-content/uploads/2020/11/wallswitch.png" class="urun_thumb"/>
								<a href="" class="urun_title">WallSwitch</a>
							</div>
							<div class="tek_urun_artirici">
								<span class="eksi">-</span>
								<input type="number" name="banyo_sayisi" value="1" min="1">
								<span class="arti">+</span>
							</div>
						</div>
						<div class="tek_urun" data-urun-title="12V PSU">
							<div>
								<img src="http://unicornbilisim.com/gensis/wp-content/uploads/2020/11/12v-guc-karti.png" class="urun_thumb"/>
								<a href="" class="urun_title">12V PSU</a>
							</div>
							<div class="tek_urun_artirici">
								<span class="eksi">-</span>
								<input type="number" name="banyo_sayisi" value="1" min="1">
								<span class="arti">+</span>
							</div>
						</div>
						<div class="tek_urun" data-urun-title="12V PSU Plus">
							<div>
								<img src="http://unicornbilisim.com/gensis/wp-content/uploads/2020/11/12v-guc-karti.png" class="urun_thumb"/>
								<a href="" class="urun_title">12V PSU Plus</a>
							</div>
							<div class="tek_urun_artirici">
								<span class="eksi">-</span>
								<input type="number" name="banyo_sayisi" value="1" min="1">
								<span class="arti">+</span>
							</div>
						</div>
						
					</div>
					
						<div id="advanced">
						<div class="tek_urun" data-urun-title="HUB">
							<div>
								<img src="http://unicornbilisim.com/gensis/wp-content/uploads/2020/11/hub.png" class="urun_thumb"/>
								<a href="" target="_blank" class="urun_title">HUB</a>
							</div>
							<div class="tek_urun_artirici">
								
								<input type="text" name="banyo_sayisi" value="1" min="1">
								
							</div>
						</div>
						<div class="tek_urun" data-urun-title="MotionProtect">
							<div>
								<img src="http://unicornbilisim.com/gensis/wp-content/uploads/2020/11/motionprotect.png" class="urun_thumb"/>
								<a href="" class="urun_title">MotionProtect</a>	
							</div>
							<div class="tek_urun_artirici">
								<span class="eksi">-</span>
								<input type="number" name="banyo_sayisi" value="1" min="1">
								<span class="arti">+</span>
							</div>
						</div>
						<div class="tek_urun" data-urun-title="MotionProtect Plus">
							<div>
								<img src="http://unicornbilisim.com/gensis/wp-content/uploads/2020/11/motionprotect.png" class="urun_thumb"/>
								<a href="" class="urun_title">MotionProtect Plus</a>	
							</div>
							<div class="tek_urun_artirici">
								<span class="eksi">-</span>
								<input type="number" name="banyo_sayisi" value="1" min="1">
								<span class="arti">+</span>
							</div>
						</div>
						<div class="tek_urun" data-urun-title="MotionCam">
							<div>
								<img src="http://unicornbilisim.com/gensis/wp-content/uploads/2020/11/motioncam.png" class="urun_thumb"/>
								<a href="" class="urun_title">MotionCam</a>	
							</div>
							<div class="tek_urun_artirici">
								<span class="eksi">-</span>
								<input type="number" name="banyo_sayisi" value="1" min="1">
								<span class="arti">+</span>
							</div>
						</div>
						<div class="tek_urun" data-urun-title="DoorProtect">
							<div>
								<img src="http://unicornbilisim.com/gensis/wp-content/uploads/2020/11/doorprotect.png" class="urun_thumb"/>
								<a href="" class="urun_title">DoorProtect</a>
							</div>
							<div class="tek_urun_artirici">
								<span class="eksi">-</span>
								<input type="number" name="banyo_sayisi" value="1" min="1">
								<span class="arti">+</span>
							</div>
						</div>
						<div class="tek_urun" data-urun-title="DoorProtect Plus">
							<div>
								<img src="http://unicornbilisim.com/gensis/wp-content/uploads/2020/11/doorprotect.png" class="urun_thumb"/>
								<a href="" class="urun_title">DoorProtect Plus</a>
							</div>
							<div class="tek_urun_artirici">
								<span class="eksi">-</span>
								<input type="number" name="banyo_sayisi" value="1" min="1">
								<span class="arti">+</span>
							</div>
						</div>
						<div class="tek_urun" data-urun-title="FireProtect">
							<div>
								<img src="http://unicornbilisim.com/gensis/wp-content/uploads/2020/11/fireprotect.png" class="urun_thumb"/>
								<a href="" class="urun_title">FireProtect</a>
							</div>
							<div class="tek_urun_artirici">
								<span class="eksi">-</span>
								<input type="number" name="banyo_sayisi" value="1" min="1">
								<span class="arti">+</span>
							</div>
						</div>
						<div class="tek_urun" data-urun-title="FireProtect Plus">
							<div>
								<img src="http://unicornbilisim.com/gensis/wp-content/uploads/2020/11/fireprotect.png" class="urun_thumb"/>
								<a href="" class="urun_title">FireProtect Plus</a>
							</div>
							<div class="tek_urun_artirici">
								<span class="eksi">-</span>
								<input type="number" name="banyo_sayisi" value="1" min="1">
								<span class="arti">+</span>
							</div>
						</div>
						<div class="tek_urun" data-urun-title="MotionProtect Outdoor">
							<div>
								<img src="http://unicornbilisim.com/gensis/wp-content/uploads/2020/11/motionprotect-outdoor.png" class="urun_thumb"/>
								<a href="" class="urun_title">MotionProtect Outdoor</a>
							</div>
							<div class="tek_urun_artirici">
								<span class="eksi">-</span>
								<input type="number" name="banyo_sayisi" value="1" min="1">
								<span class="arti">+</span>
							</div>
						</div>
						<div class="tek_urun" data-urun-title="Hood for MotionProtect Outdoor">
							<div>
								<img src="http://unicornbilisim.com/gensis/wp-content/uploads/2020/11/motionprotect-outdoor.png" class="urun_thumb"/>
								<a href="" class="urun_title">Hood for MotionProtect Outdoor</a>
							</div>
							<div class="tek_urun_artirici">
								<span class="eksi">-</span>
								<input type="number" name="banyo_sayisi" value="1" min="1">
								<span class="arti">+</span>
							</div>
						</div>
						<div class="tek_urun" data-urun-title="LeaksProtect">
							<div>
								<img src="http://unicornbilisim.com/gensis/wp-content/uploads/2020/11/leaksprotect.png" class="urun_thumb"/>
								<a href="" class="urun_title">LeaksProtect</a>
							</div>
							<div class="tek_urun_artirici">
								<span class="eksi">-</span>
								<input type="number" name="banyo_sayisi" value="1" min="1">
								<span class="arti">+</span>
							</div>
						</div>
						<div class="tek_urun" data-urun-title="HomeSiren">
							<div>
								<img src="http://unicornbilisim.com/gensis/wp-content/uploads/2020/11/homesiren.png" class="urun_thumb"/>
								<a href="" class="urun_title">HomeSiren</a>
							</div>
							<div class="tek_urun_artirici">
								<span class="eksi">-</span>
								<input type="number" name="banyo_sayisi" value="1" min="1">
								<span class="arti">+</span>
							</div>
						</div>
						<div class="tek_urun" data-urun-title="StreetSiren">
							<div>
								<img src="http://unicornbilisim.com/gensis/wp-content/uploads/2020/11/streetsiren.png" class="urun_thumb"/>
								<a href="" class="urun_title">StreetSiren</a>
							</div>
							<div class="tek_urun_artirici">
								<span class="eksi">-</span>
								<input type="number" name="banyo_sayisi" value="1" min="1">
								<span class="arti">+</span>
							</div>
						</div>
						<div class="tek_urun" data-urun-title="SpaceControl">
							<div>
								<img src="http://unicornbilisim.com/gensis/wp-content/uploads/2020/11/spacecontrol.png" class="urun_thumb"/>
								<a href="" class="urun_title">SpaceControl</a>
							</div>
							<div class="tek_urun_artirici">
								<span class="eksi">-</span>
								<input type="number" name="banyo_sayisi" value="1" min="1">
								<span class="arti">+</span>
							</div>
						</div>
						<div class="tek_urun" data-urun-title="Key Ped">
							<div>
								<img src="http://unicornbilisim.com/gensis/wp-content/uploads/2020/11/keypad.png" class="urun_thumb"/>
								<a href="" class="urun_title">Key Ped</a>
							</div>
							<div class="tek_urun_artirici">
								<span class="eksi">-</span>
								<input type="number" name="banyo_sayisi" value="1" min="1">
								<span class="arti">+</span>
							</div>
						</div>
						<div class="tek_urun" data-urun-title="Rex">
							<div>
								<img src="http://unicornbilisim.com/gensis/wp-content/uploads/2020/11/rex.png" class="urun_thumb"/>
								<a href="" class="urun_title">Rex</a>
							</div>
							<div class="tek_urun_artirici">
								<span class="eksi">-</span>
								<input type="number" name="banyo_sayisi" value="1" min="1">
								<span class="arti">+</span>
							</div>
						</div>
						<div class="tek_urun" data-urun-title="Socket">
							<div>
								<img src="http://unicornbilisim.com/gensis/wp-content/uploads/2020/11/kablosuz-akilli-priz.png" class="urun_thumb"/>
								<a href="" class="urun_title">Socket</a>
							</div>
							<div class="tek_urun_artirici">
								<span class="eksi">-</span>
								<input type="number" name="banyo_sayisi" value="1" min="1">
								<span class="arti">+</span>
							</div>
						</div>
						<div class="tek_urun" data-urun-title="WallSwitch">
							<div>
								<img src="http://unicornbilisim.com/gensis/wp-content/uploads/2020/11/wallswitch.png" class="urun_thumb"/>
								<a href="" class="urun_title">WallSwitch</a>
							</div>
							<div class="tek_urun_artirici">
								<span class="eksi">-</span>
								<input type="number" name="banyo_sayisi" value="1" min="1">
								<span class="arti">+</span>
							</div>
						</div>
						<div class="tek_urun" data-urun-title="12V PSU">
							<div>
								<img src="http://unicornbilisim.com/gensis/wp-content/uploads/2020/11/12v-guc-karti.png" class="urun_thumb"/>
								<a href="" class="urun_title">12V PSU</a>
							</div>
							<div class="tek_urun_artirici">
								<span class="eksi">-</span>
								<input type="number" name="banyo_sayisi" value="1" min="1">
								<span class="arti">+</span>
							</div>
						</div>
						<div class="tek_urun" data-urun-title="12V PSU Plus">
							<div>
								<img src="http://unicornbilisim.com/gensis/wp-content/uploads/2020/11/12v-guc-karti.png" class="urun_thumb"/>
								<a href="" class="urun_title">12V PSU Plus</a>
							</div>
							<div class="tek_urun_artirici">
								<span class="eksi">-</span>
								<input type="number" name="banyo_sayisi" value="1" min="1">
								<span class="arti">+</span>
							</div>
						</div>
						<div class="tek_urun" data-urun-title="Relay">
							<div>
								<img src="http://unicornbilisim.com/gensis/wp-content/uploads/2020/11/rex.png" class="urun_thumb"/>
								<a href="" class="urun_title">Relay</a>
							</div>
							<div class="tek_urun_artirici">
								<span class="eksi">-</span>
								<input type="number" name="banyo_sayisi" value="1" min="1">
								<span class="arti">+</span>
							</div>
						</div>
					  </div>
					
					</div>
					
				</div>
				<div class="sonuc_footer">
				
				</div>
				
				<input type="hidden" name="hersey_secildi" value=""/>
			</div>
		</div>
	</div>

</div>
