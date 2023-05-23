
jQuery(function($){

	var program_swiper = new Swiper('.program-swiper .swiper-container', {
		slidesPerView:1,
		spaceBetween:50,
//		loop:true,
//		loopAdditionalSlides :1,
		speed :900,
//		autoplay:{
//			delay:4000,
//			disableOnInteraction:false,
//		},
//		allowTouchMove: false,
		pagination:{
			el:'.program-swiper .swiper-pagination',
			clickable:true,
		},
		navigation: {
			nextEl: '.program-swiper .swiper-button-next',
			prevEl: '.program-swiper .swiper-button-prev',
		},
		breakpoints:{
			100:{
				slidesPerView:1,
				spaceBetween:10,
			},
			480:{
				slidesPerView:1,
				spaceBetween:20,
			},
			720:{
				slidesPerView:1,
				spaceBetween:30,
			},
			960:{
				slidesPerView:1,
				spaceBetween:40,
			}
		},
	});

	var story_swiper = new Swiper('.story-swiper .swiper-container', {
		slidesPerView:5,
		spaceBetween:25,
//		loop:true,
//		loopAdditionalSlides :1,
		speed :900,
//		autoplay:{
//			delay:4000,
//			disableOnInteraction:false,
//		},
//		pagination:{
//			el:'.story-swiper .swiper-pagination',
//			clickable:true,
//		},
		navigation: {
			nextEl: '.story-swiper .swiper-button-next',
			prevEl: '.story-swiper .swiper-button-prev',
		},
		breakpoints:{
			240:{
				slidesPerView:2,
				spaceBetween:15,
			},
			480:{
				slidesPerView:2,
				spaceBetween:15,
			},
			720:{
				slidesPerView:3,
				spaceBetween:20,
			},
			960:{
				slidesPerView:4,
				spaceBetween:20,
			}
		},
	});

});

$(function() {

	var s1 = $('.visual-slider').sliderRotate({
	  displayItems:5,
	  autoSlide:true
	});

});

//-------------------------------------------
//based on : https://www.jqueryscript.net/demo/Basic-3D-Image-Rotator-with-jQuery-CSS3-rotateSlider/
// plugin template by https://jqueryboilerplate.com/
;
(function($, window, document, undefined) {

  "use strict";

  var pluginName = "sliderRotate",
    dataKey = "plugin_" + pluginName;

  var SliderRotate = function(element, options) {

    this.plugin_element = $(element);
    this.itemClass;
    this.arrowClass;
    this.$item;
    this.$arrow;
    this.$sliderContainer;
    this.numItens;
    this.indexActive;
    this.displayItens;
    this.autoSlide;
    this.slider_timer;
    this.time;

    this.PREV_CLASS = "slider-rotate__item--prev";
    this.PREV2_CLASS = "slider-rotate__item--prev-2";
    this.NEXT_CLASS = "slider-rotate__item--next";
    this.NEXT2_CLASS = "slider-rotate__item--next-2";
    this.ACTIVE_CLASS = "slider-rotate__item--active";

    this.CLASS_DISPLAY_3 = "slider-rotate--3";
    this.CLASS_DISPLAY_5 = "slider-rotate--5";

    this.DISPLAY_3 = 3;
    this.DISPLAY_5 = 5;

    this.SLIDER_CONTAINER = "slider-rotate__container";

    this.options = {
      time: 4,
      autoSlide: false,
      displayItems: 3,
      activate: function() {}
    };

    this.init(options);

  };

  SliderRotate.prototype = {
    init: function(options) {

      _init(options, this);

    },
    destroy: function() {
      this.plugin_element.unbind().removeData();
      $('*', this.plugin_element).unbind().removeData();
      this.$sliderContainer.unbind('mouseenter.slider');
      this.$sliderContainer.unbind('mouseleave.slider');
      _pauseSlide(this); //remove timer
    }
  };

  function _init(__options__, __this__) {

    //---------------------------------
    //---------------------------------
    var opts = __this__.options;
    $.extend(opts, __options__);
    opts.activate.call(__this__);
    //---------------------------------
    //---------------------------------
    __this__.displayItens = (opts.displayItems == 3 || opts.displayItems == 5) ? opts.displayItems : __this__.DISPLAY_3;
    __this__.itemClass = opts.itemClass || 'slider-rotate__item';
    __this__.arrowClass = opts.arrowClass || 'js-slider-rotate-arrow';
    __this__.$item = __this__.plugin_element.find('.' + __this__.itemClass);
    __this__.$arrow = __this__.plugin_element.find('.' + __this__.arrowClass);
    __this__.numItens = __this__.$item.length;
    __this__.indexActive = 0;
    __this__.$sliderContainer = $("." + __this__.SLIDER_CONTAINER);
    __this__.autoSlide = opts.autoSlide;
    __this__.time = opts.time;

    //add class to change layout by 3 or 5 itens
    __this__.plugin_element.addClass((__this__.displayItens == __this__.DISPLAY_3) ? __this__.CLASS_DISPLAY_3 : __this__.CLASS_DISPLAY_5);

    //start items positions
    _moveSlide(__this__.indexActive, __this__);

    //show container to prevent layout issues
    setTimeout(function() {
      __this__.$sliderContainer.css("visibility", "visible");
    }, 400);

    //item mouse event
    __this__.$item.on('click.rotate', function() {

	  /*
	  //prevent click on active item
      if ($(this).hasClass(__this__.ACTIVE_CLASS)) return false;
      //move slide to the desired index
      _moveSlide($(this).index(), __this__);
      return false;
	  */

      if ($(this).hasClass(__this__.ACTIVE_CLASS)) {

      } else{
		  _moveSlide($(this).index(), __this__);
		  return false;
      }

    });

    //arrow mouse event
    __this__.$arrow.on('click.rotate', function() {

      //action (prev or next)
      var _action = $(this).data('action');

      if (_action == 'next') {

        //move slide
        _moveNext(__this__);

      } else if (_action == 'prev') {

        //move slide
        _movePrev(__this__);

      }

    });

    if (__this__.autoSlide) {
      _autoSlide(__this__);
    }
  }

  //auto slide
  function _autoSlide(__this__) {
    _pauseSlide(__this__); //	remove timer

    var _miliseconds = Number(__this__.time) * 1000; //	converts to miliseconds
    __this__.slider_timer = setTimeout(function() {
      _moveNext(__this__);
    }, _miliseconds);

    //stop items from auto slide
    __this__.$sliderContainer.unbind('mouseenter.slider').on('mouseenter.slider', function() {
      _pauseSlide(__this__); //remove timer
    });

    //back to auto slide
    __this__.$sliderContainer.unbind('mouseleave.slider').on('mouseleave.slider', function() {
      _autoSlide(__this__);
    });

  }

  //--------------
  //pause slide
  function _pauseSlide(__this__) {
    clearTimeout(__this__.slider_timer);
  }

  //move slide to the next item
  function _moveNext(__this__) {

    var _index = (__this__.indexActive == __this__.numItens - 1) ? 0 : (__this__.indexActive + 1);

    _moveSlide(_index, __this__);

  }

  //move slide to the previous item
  function _movePrev(__this__) {

    var _index = (__this__.indexActive == 0) ? (__this__.numItens - 1) : (__this__.indexActive - 1);

    _moveSlide(_index, __this__);

  }

  function _moveSlide(__index__, __this__) {

    __this__.indexActive = __index__;

    // removing all classes
    __this__.plugin_element.find('.' + __this__.ACTIVE_CLASS).removeClass(__this__.ACTIVE_CLASS);
    __this__.plugin_element.find('.' + __this__.NEXT_CLASS).removeClass(__this__.NEXT_CLASS);
    __this__.plugin_element.find('.' + __this__.PREV_CLASS).removeClass(__this__.PREV_CLASS);
    __this__.plugin_element.find('.' + __this__.PREV2_CLASS).removeClass(__this__.PREV2_CLASS);
    __this__.plugin_element.find('.' + __this__.NEXT2_CLASS).removeClass(__this__.NEXT2_CLASS);

    //if active index is the last item
    if (__index__ == __this__.numItens - 1) {

      __this__.$item.eq(0).addClass(__this__.NEXT_CLASS);

      if (__this__.displayItens == __this__.DISPLAY_5) {
        __this__.$item.eq(1).addClass(__this__.NEXT2_CLASS);
      }

    }

    //if active index is the first item
    if (__index__ == 0) {

      __this__.$item.eq(__this__.numItens - 1).addClass(__this__.PREV_CLASS);

      if (__this__.displayItens == __this__.DISPLAY_5) {
        __this__.$item.eq(__this__.numItens - 2).addClass(__this__.PREV2_CLASS);
      }

    }

    // loop through all items
    __this__.$item.each(function(index) {

      if (index == __index__) {

        __this__.$item.eq(index).addClass(__this__.ACTIVE_CLASS);

      }

      if (index == __index__ + 1) {

        __this__.$item.eq(index).addClass(__this__.NEXT_CLASS);

      }

      if (index == __index__ - 1) {

        __this__.$item.eq(index).addClass(__this__.PREV_CLASS);

      }

      //just addClass if display 5 items
      if (__this__.displayItens == __this__.DISPLAY_5) {

        if (index == __index__ + 2) {

          __this__.$item.eq(index).addClass(__this__.NEXT2_CLASS);

        }

        if (__index__ == (__this__.numItens - 2)) {
          __this__.$item.eq(0).addClass(__this__.NEXT2_CLASS);
        }

        if ((__index__ - 2) == -1) {
          __this__.$item.eq(__this__.numItens - 1).addClass(__this__.PREV2_CLASS);
        }

        if (index == __index__ - 2) {
          __this__.$item.eq(index).addClass(__this__.PREV2_CLASS);
        }

      }

      if (__this__.autoSlide) {
        _autoSlide(__this__);
      }

    });

  }

  //----------------------------------------------------
  //----------------------------------------------------
  //----------------------------------------------------
  //----------------------------------------------------
  $.fn[pluginName] = function(options) {

    var plugin = this.data(dataKey);

    if (plugin instanceof SliderRotate) {
      if (typeof options !== 'undefined') {
        plugin.init(options);
      }
    } else {
      plugin = new SliderRotate(this, options);
      this.data(dataKey, plugin);
    }

    return plugin;
  };

}(jQuery, window, document));

/* ======= 상담예약팝업 ======= */
$(document).ready(function(){
	function dimShow(){ /* 딤드 show */
		$('body').addClass('dimed');
	}
	function dimHide(){ /* 딤드 hide */
		$('body').removeClass('dimed');
	}


	function modalPop(){//팝업
		//팝업 노출
		$('.popup_open').on('click', function(){
			$('.cs_pop').fadeIn(200);
			dimShow();
		});

		// 취소버튼 팝업 닫기
		$('.cancel').on('click', function(){
			$('.cs_pop').fadeOut(200);
			dimHide();
		});

		// 딤드 클릭시 닫기
		$(document).mouseup(function (e){
			var popArea = $('.cs_pop');
			if($('.ui-datepicker').has(e.target).length === 0 && popArea.has(e.target).length === 0 && $('body').hasClass('dimed')){
				popArea.fadeOut(200);
				setTimeout(dimHide, 150);
			}
		});
	}

	modalPop();

	// 달력(리모콘 달력 실행)
	$('.datepick').datepicker({
		dateFormat: "yy-mm-dd",
		minDate:0,
		dayNamesMin: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
		beforeShow: function(input) {
			setTimeout(function(){
				$('#ui-datepicker-div').css({'top':'50%', 'left':'50%'}); // top / left 값으로 강제 위치 수정
			})
		}
	});

	// 달력(상품 상세 달력 실행)
	$('.datepickProd').datepicker({
		dateFormat: "yy-mm-dd",
		minDate:0,
		dayNamesMin: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
		beforeShow: function(input) {
			setTimeout(function(){
				$('#ui-datepicker-div').css({'bottom':'119%', 'left':'37%', 'position':'relative'}); // top / left 값으로 강제 위치 수정
			})
		}
	});

	//지사 선택 tab
	$('.pop_tap_wrap > a').on('click', function(){
		if(!$(this).hasClass('off')){
			$(this).addClass('on').siblings().removeClass('on');
		}
	});

	//보기 닫기 버튼
	$('.popup_wrap .btn_policy').on('click', function(){
		if($(this).hasClass('on')){
			$(this).text('[보기]');
			$('.popup_wrap .policy_cotn').stop().slideUp(600);
			$(this).removeClass('on');
		}else{
			$(this).text('[닫기]');
			$('.popup_wrap .policy_cotn').stop().slideDown(600);
			$(this).addClass('on');
		}
	});

	//개인정보 tab
	$('.popup_wrap .policy_tab > a').on('click', function(){
		var tabCnt = $(this).index();
		$(this).addClass('on').siblings().removeClass('on');
		$('.popup_wrap .txt_list > div').hide().eq(tabCnt).stop().show();
	});
});
