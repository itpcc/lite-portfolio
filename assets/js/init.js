;(function ($) {

		$.fn.parallax = function () {
			var window_width = $(window).width();
			// Parallax Scripts
			return this.each(function(i) {
				var $this = $(this);
				$this.addClass('parallax');

				function updateParallax(initial) {
					var container_height;
					if (window_width < 601) {
						container_height = ($this.height() > 0) ? $this.height() : $this.children("img").height();
					}
					else {
						container_height = ($this.height() > 0) ? $this.height() : 500;
					}
					var $img = $this.children("img").first();
					var img_height = $img.height();
					var parallax_dist = img_height - container_height;
					var bottom = $this.offset().top + container_height;
					var top = $this.offset().top;
					var scrollTop = $(window).scrollTop();
					var windowHeight = window.innerHeight;
					var windowBottom = scrollTop + windowHeight;
					var percentScrolled = (windowBottom - top) / (container_height + windowHeight);
					var parallax = Math.round((parallax_dist * percentScrolled));

					if (initial) {
						$img.css('display', 'block');
					}
					if ((bottom > scrollTop) && (top < (scrollTop + windowHeight))) {
						var translateXLen = $img.data('translatex');
						if(!isNaN(parseInt(translateXLen))){
							if(translateXLen.toString().indexOf("%") == -1)
								$img.css('transform', "translate3D(-"+translateXLen+"px," + parallax + "px, 0)");
							else
								$img.css('transform', "translate3D(-"+translateXLen+"," + parallax + "px, 0)");
						}else{
							$img.css('transform', "translate3D(-50%," + parallax + "px, 0)");
						}
					}

				}

				// Wait for image load
				$this.children("img").one("load", function() {
					updateParallax(true);
				}).each(function() {
					if(this.complete) $(this).load();
				});

				$(window).scroll(function() {
					window_width = $(window).width();
					updateParallax(false);
				});

				$(window).resize(function() {
					window_width = $(window).width();
					updateParallax(false);
				});

			});

		};
}( jQuery ));

(function($){
	$(function(){
		$('.button-collapse').sideNav();
		$('.parallax').parallax();

		
		function updateDynamic(force){
			var windowWidth = $(window).width(), windowHeight = $(window).height();
			if(window.recentWidth !== windowWidth || window.recentHeight !== windowHeight || force){
				if(windowWidth < 900){
					$("#main-section .parallax img[data-translatex]").data("translatex", "75%");
					$("#computer-archivement .parallax img[data-translatex]").data("translatex", "33%");
				}else if(windowWidth < 1500){
					$("#main-section .parallax img[data-translatex]").data("translatex", "68%");
					$("#computer-archivement .parallax img[data-translatex]").data("translatex", "45%");
				}else if(windowWidth < 1880){
					$("#main-section .parallax img[data-translatex]").data("translatex", "60%");
					$("#computer-archivement .parallax img[data-translatex]").data("translatex", "60%");
				}else{
					$("#main-section .parallax img[data-translatex]").data("translatex", "50%");
					$("#computer-archivement .parallax img[data-translatex]").data("translatex", "55%");
				}
				$(window).scroll();	

				/*$(".triangle-down-left").each(function(){
					var angle = Math.acos($(this).width() / $(this).height()) * 180 / Math.PI;
				});*/

				$("#computer-archivement").each(function(){
					var section = $(this).find('.section'), 
						sectionContent = $(this).find('.section-content-wrapper'), 
						slideshowSlector = $(this).find('.slideshow'), 
						headerSelector = $(this).find(".collapsible-header.active");
					var sectionHeight = section.innerHeight()-20,      
						sectionContentHeight = sectionContent.height(), 
						slideshowHeight = slideshowSlector.height();

					if(!window.currReward || sectionHeight > sectionContentHeight){
						sectionContent.css({
							'min-height': sectionHeight+20
						});
					}else{
						sectionContent.css('min-height', '');
					}

					if(window.currReward){
						var expectedMargin = headerSelector.offset().top - $(this).offset().top - 30;
						if(expectedMargin > 0 && expectedMargin < sectionHeight){
							slideshowSlector.css('margin-top', expectedMargin);
						}else{
							expectedMargin = sectionHeight - slideshowHeight;
							slideshowSlector.css('margin-top', (expectedMargin > 0)?expectedMargin:'');
						}

						if(sectionHeight < (expectedMargin + slideshowHeight)){
							sectionContent.css({
								'min-height': expectedMargin + slideshowHeight+30
							});
						}
					}else{
						slideshowSlector.css('margin-top', '');
						sectionContent.css({
							'min-height': ''
						});
					}
				});

				if(!window.currReward || parseInt($('#computer-archivement .section-content-wrapper').css('min-height')) > windowWidth){
					
				}

				window.recentWidth = windowWidth;
				window.recentHeight = windowHeight;
			}
		}

		updateDynamic(true);
		$(window).resize(function() {
			updateDynamic(true);
		});

		/*Computer Archivement*/
		$('#computer-archivement .slideshow').slick({
			dots: true,
			infinite: true,
			speed: 300,
			slidesToShow: 1,
			adaptiveHeight: false,
			autoplay: true,
			lazyLoad: 'ondemand',
			respondTo: 'slider',
		}).on('setPosition', function(event, slick){
			updateDynamic(true);
		});

		var swapImg = function(img, setBG){
			var imgSel = $(img);
			var preview = imgSel.data('preview'), full = imgSel.data('full'), src = imgSel.attr('src');
			if(src.length){
				if(preview && preview.length){
					imgSel.data('preview', '').attr('src', preview).addClass('preview').removeClass('full');
					if(setBG) 
						$("#materialbox-overlay").css('background-image', 'url("'+preview+'")');
				}else if(full && full.length){
					imgSel.data('preview', src).attr('src', full).addClass('full').removeClass('preview');
					if(setBG) 
						$("#materialbox-overlay").css('background-image', 'url("'+full+'")');
				}else if(setBG){
					$("#materialbox-overlay").css('background-image', 'url("'+src+'")');
				}
			}

		};
		var returnToNormal = function(force){
			if(window.showImage || force){
				$('#computer-archivement, '+
				  '#computer-archivement li[data-reward] .collapsible-body,'+
				  '#other-archivement,'+
				  '#other-archivement li[data-reward] .collapsible-body,'+
				  '#project-list .card-reveal,'+
				  '#project-list .card').css('overflow', '');
				$('.materialboxed.full').each(function(){ swapImg(this); });
				$("body").removeClass('show-materialboxed, complete-materialbox');
				$("#materialbox-overlay").css('background-image', '');
				window.showImage = false;
			}
		};

		/*Slideshow Control*/
		window.currRewardLoaded = {};
		$("#computer-archivement .collapsible-header").on('click.collapse', function(e){
			//Keep normal event do 
			//console.log(this);	//check is opening

			var slideshowSlector = $("#computer-archivement .slideshow"), headerSelector = $(this);
			
			if(!$(this).hasClass('active')){ //collapse accordion
				window.currReward = '';
				slideshowSlector.addClass('spaceOutDown').removeClass('swashIn slide-loading');
				setTimeout(function(){ 
					//if(!window.currReward) 
						updateDynamic(true);
					//else $("#computer-archivement .section-content-wrapper").css('min-height', '');
				}, 350);
			}else{ //expand accordion, show slide
				var choosenReward = $(this).parent().data("reward"), i, drawSlide = function(slideName, slideObj){
					if(slideshowSlector.find('.set-'+slideName).length <= 0){
						var imgGallery = $('#computer-archivement li[data-reward='+slideName+'] .img-gallery');
						if(imgGallery.length == 0){
							imgGallery = $('<div class="row img-gallery"></div>');
							imgGallery.mustFill = true;
						}

						$.each(slideObj, function(i, image){
							if(imgGallery.mustFill)
								imgGallery.append('<div class="col m3 s6"><img class="materialboxed" width="100%" src="'+image.preview+'" data-full="'+image.full+'" /></div>');
							slideshowSlector.slick('slickAdd','<div class="set-'+slideName+'" id="set-'+slideName+'-'+i+'"><a href="'+image.full+'"><img data-lazy="' + image.preview + '" /></a></div>');
						});

						//initialize materialize box
						$('#computer-archivement li[data-reward="'+slideName+'"] .collapsible-body').append(imgGallery);
						$('#computer-archivement li[data-reward="'+slideName+'"] .materialboxed').materialbox();
						//binding event
						$('#computer-archivement li[data-reward="'+slideName+'"] .materialboxed').each(function(){
							$(this).on('click', function(){
								if($(this).hasClass('active')){
									$('#computer-archivement, #computer-archivement li[data-reward="'+slideName+'"] .collapsible-body').css('overflow', 'visible');
									swapImg(this);
									window.showImage = true;
								}else{
									returnToNormal();
								}
							});
						});
					}

					if(typeof window.currRewardLoaded[slideName] === "undefined")
						window.currRewardLoaded[slideName] = slideObj;

					slideshowSlector.slick('slickFilter','.set-'+slideName);

					if(!slideshowSlector.hasClass('swashIn'))
						slideshowSlector.addClass('swashIn').removeClass('spaceOutDown');
					slideshowSlector.removeClass('slide-loading');
					//pin slideshow to header
					/*var expectedMargin = headerSelector.offset().top - $("#computer-archivement").offset().top - 30;
					var sectionHeight = $("#computer-archivement .section-content-wrapper").height(), slideshowHeight = slideshowSlector.height();
					if(expectedMargin < Math.min($(window).height(), sectionHeight)){
						if(expectedMargin < sectionHeight - slideshowHeight){
							slideshowSlector.css('margin-top', expectedMargin);
						}else{
							expectedMargin = sectionHeight - (slideshowHeight) - 40;
							slideshowSlector.css('margin-top', (expectedMargin > 15)? expectedMargin : '');	
						}
					}else{
						slideshowSlector.css('margin-top', '');	
					}*/
					updateDynamic(true);
					setTimeout(function(){ updateDynamic(true); }, 1000);
				};

				if(choosenReward && choosenReward !== window.currReward){ //Not showing slide, must switch
					slideshowSlector.slick('slickUnfilter');
					if(typeof window.currRewardLoaded[choosenReward] !== "undefined"){
						window.currReward = choosenReward;
						drawSlide(choosenReward, window.currRewardLoaded[choosenReward]);
					}else{
						window.currReward = choosenReward;

						slideshowSlector.addClass('slide-loading');
						
						$.getJSON('./img/slide.php', { set : choosenReward }, function(result){
							console.log(result);
							if(window.currReward == result.set){ //Make sure that these image is still needed to show
								drawSlide(result.set, result.img);
							}
						});
					}
				}
			}
		});		

		$(window).scroll(returnToNormal);

		// Return on ESC
		$(document).keyup(function(e) {
			if (e.keyCode === 27) {		// ESC key
				returnToNormal(true);
				$('.choosen[data-project] .card .card-reveal .card-title').trigger('click.card');
			}
		});

		/* Other Archivement */
		$('#other-archivement li[data-reward]').each(function(){
			var slideName = $(this).data('reward');
			
			$(this).find('.materialboxed').each(function(){
				$(this).on('click', function(){
					if($(this).hasClass('active')){
						$('#other-archivement, #other-archivement li[data-reward="'+slideName+'"] .collapsible-body').css('overflow', 'visible');
						swapImg(this);
						window.showImage = true;
					}else{
						returnToNormal();
					}
				});
			});			
		});

		/* Project List */
		$(document).on('click.card', '#project-list [data-project] .card', function (e){
			var parentCard = $(this).parent('[data-project]');
			if(!parentCard.hasClass('choosen') && 
				($(e.target).is($('.card .activator')) || $(e.target).is($('.card .activator i')))
			){
				parentCard.addClass('choosen m8').removeClass('m4');
				$("#page-dimmer").fadeIn();
				$(this).velocity('scroll', {offset: $(window).height()*-0.075});
			}else if($(e.target).is($('.card-reveal .card-title')) || $(e.target).is($('.card-reveal .card-title i'))){
				parentCard.removeClass('choosen m8').addClass('m4');
				$("#page-dimmer").fadeOut();
			}
		});
		$(document).on('click', "#page-dimmer:visible", function(e){
			//e.preventDefault();
			$('.choosen[data-project] .card .card-reveal .card-title').trigger('click.card');
		});

		$("#project-list [data-project] .card .materialboxed").each(function(){
			$(this).on('click', function(){
				if($(this).hasClass('active')){
					$('#project-list [data-project] .card, #project-list [data-project] .card-reveal').has(this).css('overflow', 'visible');
					$("body").addClass('show-materialboxed');
					swapImg(this, true);
					window.showImage = true;
					//$(this).velocity("scroll", {offset: -20, container: $("body")});
				}else{
					returnToNormal();
				}
			});
		});

		/*Add special event : remove*/
		(function($) {
			var ev = new $.Event('remove'),
			orig = $.fn.remove;
			$.fn.remove = function() {
			$(this).trigger(ev);
			return orig.apply(this, arguments);
			}
		})(jQuery);

		$(document).on('click, remove', '#materialbox-overlay', returnToNormal);

	}); // end of document ready
})(jQuery); // end of jQuery name space