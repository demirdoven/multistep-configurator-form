(function($) {
	var ajaxUrl = frontend_ajax_object.ajaxurl;
	
	var $owl = $(".conf_slider").owlCarousel({
		loop: false,
		margin: 20,
		items:1,
		nav: true,
		mouseDrag: false,
		touchDrag: false,
		pullDrag: false,
		freeDrag: false,
		dots: false,
		autoHeight: true
	});
	
	$( ".conf_slider .owl-prev").html('Geri');
	$( ".conf_slider .owl-next").html('İleri');
 
 
		
	$(document).on('click', '.eksi', function () {
		var $input = $(this).parent().find('input');
		var count = parseInt($input.val()) - 1;
		count = count < 1 ? 1 : count;
		$input.val(count);
		$input.change();
		return false;
	});
	$(document).on('click', '.arti', function () {
		var $input = $(this).parent().find('input');
		$input.val(parseInt($input.val()) + 1);
		$input.change();
		return false;
	});
	
	$('button.owl-next').attr('disabled', 'disabled');
	
	$('input[type="radio"][name="kullanim_yeri"]').on('change', function(){
		var val = $(this).val();
		$('.step2 .select_detay > label').hide();
		$('.step2 .select_detay > label.'+val).show();
		
		$('button.owl-next').removeAttr('disabled');
	});
	
	$('input[name="ozellik[]"]').on('change', function(){
		$('button.owl-next').removeAttr('disabled');
	});
	
	
	$('button.owl-next').on('click', function(event){
		
		$('button.owl-next').attr('disabled', 'disabled');
		
		if( $('.owl-item.active .step3').length > 0 ){ // 3. adimsa
			$('button.owl-next').removeAttr('disabled');
		}
		
		if( $('.owl-item.active .step4').length > 0 ){ // son adim
			
			var selected_features = $('input[name="ozellik[]"]:checked').map(function(){
				return $(this).val();
			}).toArray();
			
			var selected_kullanim_alani = $('input[name="kullanim_yeri"]:checked').val();
			
			//$('.urun_list').html('');
			$('img.urun_list_loader').show();
			var data = {
				action : 'urun_cek',
				selected_features : selected_features,
				selected_kullanim_alani : selected_kullanim_alani,
			}
			$.post( ajaxUrl, data, function(response){
				
				if( response ){
					var res = JSON.parse(response);
					$('img.urun_list_loader').hide();
					
					
					//$('.urun_list').html(res.yaz);
					var href = $('.pdf_indir').attr('href');
					$('.pdf_indir').attr('href', href+res.secilenler);
					
					$owl.trigger('refresh.owl.carousel');
					//$('.tek_urun[data-urun-title="MotionCam"]').css('background', 'red');
					
						var basit = new Array();
						var gelismis = new Array();
					
						
						//if( selected_kullanim_alani=='ap' ){
							
							if(jQuery.inArray('dis_mekan_guvenligi', selected_features) != -1) {
								
								if( selected_kullanim_alani=='ev' || selected_kullanim_alani=='du' ){
								
									var alan_boyutu = $('input[name="alan_boyutu"]').val();
									var tam_alan_boyutu = parseInt(alan_boyutu);
									
									if( tam_alan_boyutu <= 150 ){
										
										basit.push(['MotionProtect Outdoor', 1]);
										gelismis.push(['MotionProtect Outdoor', 1]);
										basit.push(['Hood for MotionProtect Outdoor', 1]);
										gelismis.push(['Hood for MotionProtect Outdoor', 1]);
										
									}else if( tam_alan_boyutu > 150 ){
										var kalan = tam_alan_boyutu%150;
										basit.push(['MotionProtect Outdoor', kalan]);
										gelismis.push(['MotionProtect Outdoor', kalan]);
										basit.push(['Hood for MotionProtect Outdoor', kalan]);
										gelismis.push(['Hood for MotionProtect Outdoor', kalan]);
										
									}
										
								
								}
							}
							if(jQuery.inArray('izinsiz_giris_korumasi', selected_features) != -1) {
								if(jQuery.inArray('fotograf_dogrulamali_h', selected_features) != -1) {
									
									var apartman_kati = $('select[name="apartman_kati"]').val();
									if( apartman_kati=='cati_kati' || apartman_kati=='giris_kat' ){
										
										var mutfak_dahil_oda_sayisi = $('input[name="mutfak_dahil_oda_sayisi"]').val();
										
										basit.push(['MotionCam', mutfak_dahil_oda_sayisi]);
										gelismis.push(['MotionCam', mutfak_dahil_oda_sayisi]);
										
										
									}else if( apartman_kati=='ara_kat' ){
										
										basit.push(['MotionCam', 1]);
										gelismis.push(['MotionCam', 1]);
										
									}
									
								}else{
									var apartman_kati = $('select[name="apartman_kati"]').val();
									if( apartman_kati=='cati_kati' || apartman_kati=='giris_kat' ){
										
										var mutfak_dahil_oda_sayisi = $('input[name="mutfak_dahil_oda_sayisi"]').val();
										
										basit.push(['MotionProtect', mutfak_dahil_oda_sayisi]);
										gelismis.push(['MotionProtect', 0]);
										basit.push(['MotionProtect Plus', 0]);
										gelismis.push(['MotionProtect Plus', mutfak_dahil_oda_sayisi]);
										
									}else if( apartman_kati=='ara_kat' ){
										
										basit.push(['MotionProtect', 1]);
										gelismis.push(['MotionProtect', 0]);
										basit.push(['MotionProtect Plus', 0]);
										gelismis.push(['MotionProtect Plus', 1]);
									
									}
								}
								
								var apartman_kati = $('select[name="apartman_kati"]').val();
								if( apartman_kati=='cati_kati' || apartman_kati=='giris_kat' ){
									
									var giris_sayisi = $('input[name="giris_sayisi"]').val();
									
									basit.push(['DoorProtect', giris_sayisi]);
									gelismis.push(['DoorProtect', 0]);
									basit.push(['DoorProtect Plus', 0]);
									gelismis.push(['DoorProtect Plus', giris_sayisi]);
									
									
								}else if( apartman_kati=='ara_kat' ){
									
									basit.push(['DoorProtect', 1]);
									gelismis.push(['DoorProtect', 0]);
									basit.push(['DoorProtect Plus', 0]);
									gelismis.push(['DoorProtect Plus', 1]);
								
								}
								
								
							}
							
							if(jQuery.inArray('yangin_algilama', selected_features) != -1) {							
								
								var mutfak_dahil_oda_sayisi = $('input[name="mutfak_dahil_oda_sayisi"]').val();
								
								basit.push(['FireProtect', mutfak_dahil_oda_sayisi]);
								gelismis.push(['FireProtect', 0]);
								basit.push(['FireProtect Plus', 0]);
								gelismis.push(['FireProtect Plus', mutfak_dahil_oda_sayisi]);
							}
							
							if(jQuery.inArray('fotograf_dogrulamali_h', selected_features) != -1) {							
								basit.push(['HUB', 'HUB2']);
								gelismis.push(['HUB', 'HUB2 Plus']);
								
							}else{
								basit.push(['HUB', 'HUB']);
								gelismis.push(['HUB', 'HUB Plus']);
								
							}
							
							if(jQuery.inArray('sizinti_korumasi', selected_features) != -1) {
								var banyo_sayisi = $('input[name="banyo_sayisi"]').val();
								basit.push(['LeaksProtect', parseInt(banyo_sayisi)+1]);
								gelismis.push(['LeaksProtect', parseInt(banyo_sayisi)+1]);
								
							}else{
								basit.push(['LeaksProtect', 0]);
								gelismis.push(['LeaksProtect', 0]);
							}
							
							basit.push(['HomeSiren', 1]);
							gelismis.push(['HomeSiren', 1]);
							
							basit.push(['StreetSiren', 1]);
							gelismis.push(['StreetSiren', 1]);
							
							basit.push(['SpaceControl', 1]);
							gelismis.push(['SpaceControl', 1]);
							
							if( selected_kullanim_alani=='ap' ){
								gelismis.push(['Relay', 1]);
							}
							
							if( selected_kullanim_alani=='of' || selected_kullanim_alani=='duk' ){
								basit.push(['Key Ped', 1]);
								gelismis.push(['Key Ped', 1]);
							}else{
								basit.push(['Key Ped', 0]);
								gelismis.push(['Key Ped', 0]);
							}
							
							if( selected_kullanim_alani=='of' || selected_kullanim_alani=='ev' || selected_kullanim_alani=='duk' ){
								var kat_sayisi = $('input[name="kat_sayisi"]').val();
								if( parseInt(kat_sayisi) <= 2 ){
									basit.push(['Rex', 1]);
									gelismis.push(['Rex', 1]);
								}else{
									basit.push(['Rex', parseInt(kat_sayisi)-2]);
									gelismis.push(['Rex', parseInt(kat_sayisi)-2]);
								}
								
							}
							
							if( selected_kullanim_alani=='yat' ){
								
								basit.push(['12V PSU', 1]);
								gelismis.push(['12V PSU', 0]);
								basit.push(['12V PSU Plus', 0]);
								gelismis.push(['12V PSU Plus', 1]);
								
							}
							
						//}
								
					
						
							
						var tum = new Array();
						tum.push(basit);
						tum.push(gelismis);
						console.log(tum);
						
						for( var i=0; i<basit.length; i++ ){
							var key = basit[i][0];
							var value = basit[i][1];
							
							$('#simple .tek_urun[data-urun-title="'+key+'"]').addClass('acac');
							$('#simple .tek_urun[data-urun-title="'+key+'"]').find('.tek_urun_artirici input').val(value);
						
							if( value==0 ){
								$('#simple .tek_urun[data-urun-title="'+key+'"]').remove();
							}
							
						}
						
						for( var k=0; k<gelismis.length; k++ ){
							var key = gelismis[k][0];
							var value = gelismis[k][1];
							
							$('#advanced .tek_urun[data-urun-title="'+key+'"]').addClass('acac');
							$('#advanced .tek_urun[data-urun-title="'+key+'"]').find('.tek_urun_artirici input').val(value);
						
							if( value==0 ){
								$('#advanced .tek_urun[data-urun-title="'+key+'"]').remove();
							}
						}
						$owl.trigger('refresh.owl.carousel');
				}
				
			});
			
		}
		
		
		$('.select_bilgiler > label').addClass('kapanacak');
		
		
		event.preventDefault();
		var selected_features = $('input[name="ozellik[]"]:checked').map(function(){
			return $(this).val();
		}).toArray();
		//console.log(selected_features);
		if(selected_features.length>0){
			var acilacaklar = [];
			
			if(jQuery.inArray('izinsiz_giris_korumasi', selected_features) != -1) {
				var kullanim_yeri = $('input[type="radio"][name="kullanim_yeri"]:checked').val();
				if( kullanim_yeri=='ap' ){
					acilacaklar.push('apartman_kati');
					acilacaklar.push('mutfak_dahil_oda_sayisi');
				}
				if( kullanim_yeri=='ev' ){
					acilacaklar.push('mutfak_dahil_oda_sayisi');
					acilacaklar.push('giris_sayisi');
					acilacaklar.push('kat_sayisi');
				}
				if( kullanim_yeri=='of' ){
					acilacaklar.push('mutfak_dahil_oda_sayisi');
					acilacaklar.push('giris_sayisi');
					acilacaklar.push('kat_sayisi');
					acilacaklar.push('ofis_kati');
				}
				if( kullanim_yeri=='du' ){
					acilacaklar.push('mutfak_dahil_oda_sayisi');
					acilacaklar.push('giris_sayisi');
					acilacaklar.push('kat_sayisi');
					acilacaklar.push('alan_boyutu');
				}
				if( kullanim_yeri=='yat' ){
					acilacaklar.push('giris_sayisi');
				}
				
			}
		
			if(jQuery.inArray('yangin_algilama', selected_features) != -1) {
				var kullanim_yeri = $('input[type="radio"][name="kullanim_yeri"]:checked').val();
				if( kullanim_yeri=='ap' ){
					acilacaklar.push('mutfak_dahil_oda_sayisi');
				}
				if( kullanim_yeri=='ev' ){
					acilacaklar.push('mutfak_dahil_oda_sayisi');
				}
				if( kullanim_yeri=='of' ){
					acilacaklar.push('mutfak_dahil_oda_sayisi');
				}
				if( kullanim_yeri=='du' ){
					acilacaklar.push('mutfak_dahil_oda_sayisi');
				}
				if( kullanim_yeri=='yat' ){
					//acilacaklar.push('mutfak_dahil_oda_sayisi');
				}
				
				
			}
		
			if(jQuery.inArray('sizinti_korumasi', selected_features) != -1) {
				var kullanim_yeri = $('input[type="radio"][name="kullanim_yeri"]:checked').val();
				if( kullanim_yeri=='ap' ){
					acilacaklar.push('banyo_sayisi');
				}
				if( kullanim_yeri=='ev' ){
					acilacaklar.push('banyo_sayisi');
				}
				if( kullanim_yeri=='of' ){
					acilacaklar.push('banyo_sayisi');
				}
				if( kullanim_yeri=='du' ){
					acilacaklar.push('banyo_sayisi');
				}
				if( kullanim_yeri=='yat' ){
					acilacaklar.push('banyo_sayisi');
				}
			}
		
			if(jQuery.inArray('dis_mekan_guvenligi', selected_features) != -1) {
				var kullanim_yeri = $('input[type="radio"][name="kullanim_yeri"]:checked').val();
				
				if( kullanim_yeri=='ev' ){
					acilacaklar.push('mutfak_dahil_oda_sayisi');
					acilacaklar.push('giris_sayisi');
					acilacaklar.push('kat_sayisi');
					acilacaklar.push('alan_boyutu');
				}
				if( kullanim_yeri=='of' ){
					//acilacaklar.push('mutfak_dahil_oda_sayisi');
					//acilacaklar.push('giris_sayisi');
					//acilacaklar.push('kat_sayisi');
					//acilacaklar.push('ofis_kati');
					acilacaklar.push('alan_boyutu');
				}
				if( kullanim_yeri=='du' ){
					acilacaklar.push('mutfak_dahil_oda_sayisi');
					acilacaklar.push('giris_sayisi');
					acilacaklar.push('kat_sayisi');
					acilacaklar.push('alan_boyutu');
				}
				if( kullanim_yeri=='yat' ){
					acilacaklar.push('giris_sayisi');
					acilacaklar.push('alan_boyutu');
				}
			}
		
			//console.log(acilacaklar);
			
			for( var i=0; i<acilacaklar.length; i++ ){
				$('input[name="'+acilacaklar[i]+'"], select[name="'+acilacaklar[i]+'"]').parent().parent().parent().removeClass('kapanacak');
			}
			
			$('input[name="hersey_secildi"]').attr('value', 1);
			$owl.trigger('refresh.owl.carousel');
			if( $('.select_bilgiler > label:not(.kapanacak)').length == 0 ){
				$owl.trigger('to.owl.carousel', 4);
			}
		}
		
		$('html, body').animate({
			scrollTop: $("#content").offset().top
		}, 200);
		
	});
	
	
	$('button.owl-prev').on('click', function(event){
		
		if( $('.owl-item.active .step2').length > 0 ){ //2.adima donuldu
			$('input[name="ozellik[]"]').prop('checked', false);
			$('button.owl-next').attr('disabled', 'disabled');
		}
		if( $('.owl-item.active .step1').length > 0 ){ //1.adima donuldu
			$('input[name="kullanim_yeri"]').prop('checked', false);
			$('input[name="ozellik[]"]').prop('checked', false);
			$('button.owl-next').attr('disabled', 'disabled');
			
		}
		if( $('.owl-item.active .step3').length > 0 ){ // 3. adimsa
			$('button.owl-next').removeAttr('disabled');
			
			if( $('.select_bilgiler > label.kapanacak').length == 8 ){
				$owl.trigger('to.owl.carousel', 1);
			}
		
		}
		
		
			
		$('html, body').animate({
			scrollTop: $("#content").offset().top
		}, 200);
		
	});
	
	$(document).on('change', 'input#izinsiz_g', function(){
		if($(this).is(":checked")){
			$('input#fotograf_d').parent().parent().parent().slideDown();
		}else{
			$('input#fotograf_d').parent().parent().parent().slideUp();
			$("input#fotograf_d").prop('checked', false);
		}
		$owl.trigger('refresh.owl.carousel');
		
	});
	
	$(document).on('click', '.temel_gelismis_sec > a', function(e){
		e.preventDefault();
		var ind = $(this).index();
		$('.temel_gelismis_sec > a').removeClass('aktif');
		$(this).addClass('aktif');
		
		$('.urun_list > div').hide();
		$('.urun_list > div').eq(ind).fadeIn();
		$owl.trigger('refresh.owl.carousel');
		return false;
	});
})( jQuery );