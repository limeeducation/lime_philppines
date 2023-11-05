<!-- 상담신청팝업 -->
<section class="popup cs_pop">
	<div class="pop_inner">
		<h3 class="pop_tit">상담신청</h3>
		<p class="des">*일요일과 공유일은 전화 예약이 필요합니다.</p>
		<div class="cs_box">
			<div class="group">
				<div class="inpt_wrap">
					<p class="form_tit">이름</p>
					<input type="text" class="inpt inpt_name" placeholder="이름">
				</div>
				<div class="inpt_wrap">
					<p class="form_tit">연락처</p>
					<input type="text" class="inpt inpt_tel" placeholder="전화번호 or 카카오톡 ID">
				</div>
			</div>
			<div class="group">
				<div class="cs_tab_wrap">
					<p class="form_tit">지사선택</p>
					<ul class="tab_li">
						<li><a href="#" class="on">전국</a></li>
						<li><a href="#">서울</a></li>
						<li><a href="#">대전</a></li>
						<li><a href="#">송도</a></li>
						<li><a href="#">대구</a></li>
						<li><a href="#">부산</a></li>
						<li><a href="#">제주</a></li>
					</ul>
				</div>
			</div>
			<div class="group">
				<div class="cs_tab_wrap">
					<p class="form_tit">상담방법</p>
					<ul class="tab_li cs_tab">
						<li><a href="#" class="on">방문상담</a></li>
						<li><a href="#">전화상담</a></li>
					</ul>
				</div>
			</div>
			<div class="group">
				<div class="select_wrap">
					<div class="date_wrap">
						<p class="form_tit">상담 희망일자</p>
						<div class="datepicker"></div>
					</div>
					<div class="time_wrap">
						<p class="form_tit">예약시간</p>
						<!-- <select class="ni_select" id="clock">
							<option value="10" data-display="오전 10 : 00">오전 10 : 00</option>
							<option value="11">오전 11 : 00</option>
							<option value="12">오후 12 : 00</option>
							<option value="13">오후 13 : 00</option>
							<option value="14">오후 14 : 00</option>
							<option value="15">오후 15 : 00</option>
							<option value="16">오후 16 : 00</option>
							<option value="17">오후 17 : 00</option>
							<option value="18">오후 18 : 00</option>
						</select> -->
						<div class="select_menu select_clock">
							<a href="#n" class="select_btn">오전 10 : 00</a>
							<ul class="select_list">
								<li data-value="10" class="on"><a href="#n">오전 10 : 00</a></li>
								<li data-value="11"><a href="#n">오전 11 : 00</a></li>
								<li data-value="12"><a href="#n">오후 12 : 00</a></li>
								<li data-value="13"><a href="#n">오후 13 : 00</a></li>
								<li data-value="14"><a href="#n">오후 14 : 00</a></li>
								<li data-value="15"><a href="#n">오후 15 : 00</a></li>
								<li data-value="16"><a href="#n">오후 16 : 00</a></li>
								<li data-value="17"><a href="#n">오후 17 : 00</a></li>
								<li data-value="18"><a href="#n">오후 18 : 00</a></li>
							</ul>
						</div>
						<ul class="clock">
							<li data-value="10" class="on"><img src="assets/images/common/clock_01.png" alt=""></li>
							<li data-value="11"><img src="assets/images/common/clock_02.png" alt=""></li>
							<li data-value="12"><img src="assets/images/common/clock_03.png" alt=""></li>
							<li data-value="13"><img src="assets/images/common/clock_04.png" alt=""></li>
							<li data-value="14"><img src="assets/images/common/clock_05.png" alt=""></li>
							<li data-value="15"><img src="assets/images/common/clock_06.png" alt=""></li>
							<li data-value="16"><img src="assets/images/common/clock_07.png" alt=""></li>
							<li data-value="17"><img src="assets/images/common/clock_08.png" alt=""></li>
							<li data-value="18"><img src="assets/images/common/clock_09.png" alt=""></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="group">
				<div class="cs_tab_wrap">
					<p class="form_tit">상담국가</p>
					<ul class="tab_li">
						<li><a href="#" class="on">미국</a></li>
						<li><a href="#">영국</a></li>
						<li><a href="#">캐나다</a></li>
						<li><a href="#">호주</a></li>
						<li><a href="#">필리핀</a></li>
					</ul>
				</div>
			</div>
			<div class="group">
				<div class="con_wrap">
					<div class="rdo_wrap">
						<p class="form_tit">유학 과정</p>
						<div class="rdo_li">
							<label for="rdo_011">
								<input type="radio" id="rdo_011" name="rdo1">
								<i></i>
								<p>어학연수</p>
							</label>
							<label for="rdo_021">
								<input type="radio" id="rdo_021" name="rdo1">
								<i></i>
								<p>전문과정</p>
							</label>
							<label for="rdo_031">
								<input type="radio" id="rdo_031" name="rdo1">
								<i></i>
								<p>중고생 교환학생</p>
							</label>
							<label for="rdo_041">
								<input type="radio" id="rdo_041" name="rdo1">
								<i></i>
								<p>조기유학</p>
							</label>
							<label for="rdo_051">
								<input type="radio" id="rdo_051" name="rdo1">
								<i></i>
								<p>영어캠프</p>
							</label>
							<label for="rdo_061">
								<input type="radio" id="rdo_061" name="rdo1">
								<i></i>
								<p>컬리지</p>
							</label>
							<label for="rdo_071">
								<input type="radio" id="rdo_071" name="rdo1">
								<i></i>
								<p>박사</p>
							</label>
							<label for="rdo_081">
								<input type="radio" id="rdo_081" name="rdo1">
								<i></i>
								<p>학사</p>
							</label>
							<label for="rdo_091">
								<input type="radio" id="rdo_091" name="rdo1">
								<i></i>
								<p>석사</p>
							</label>
						</div>
					</div>
					<div class="start_date">
						<p class="form_tit">희망시작시기</p>
						<div class="start_wrap">
							<div class="select_menu start_y">
								<a href="#n" class="select_btn">2023</a>
								<ul class="select_list">
									<li class="on"><a href="#n">2023</a></li>
									<li><a href="#n">2022</a></li>
									<li><a href="#n">2021</a></li>
									<li><a href="#n">2020</a></li>
									<li><a href="#n">2019</a></li>
									<li><a href="#n">2018</a></li>
									<li><a href="#n">2017</a></li>
									<li><a href="#n">2016</a></li>
									<li><a href="#n">2015</a></li>
								</ul>
							</div>
							<div class="select_menu start_m">
								<a href="#n" class="select_btn">12</a>
								<ul class="select_list">
									<li class="on"><a href="#n">12</a></li>
									<li><a href="#n">11</a></li>
									<li><a href="#n">10</a></li>
									<li><a href="#n">09</a></li>
									<li><a href="#n">08</a></li>
									<li><a href="#n">07</a></li>
									<li><a href="#n">06</a></li>
									<li><a href="#n">05</a></li>
									<li><a href="#n">04</a></li>
									<li><a href="#n">03</a></li>
									<li><a href="#n">02</a></li>
									<li><a href="#n">01</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="group">
				<p class="form_tit">문의내용</p>
				<div class="textarea_wrap"><textarea cols="30" rows="10" placeholder="문의 내용을 적어주세요&#13;&#10;*자세히 입력할수록 정확한 상담이 가능합니다"></textarea></div>
			</div>
		</div>
		<div class="chk_wrap">
			<label for="chk">
				<input type="checkbox" id="chk">
				<p>개인정보 수집 및 이용 동의[보기]</p>
			</label>
		</div>
		<div class="cs_btn">
			<a href="#" class="btn">신청하기</a>
		</div>
	</div>
</section>
<script>
$(document).ready(function(){//예약시간 선택 탭
	$('.cs_box .list li').on('click', function(e){
		e.preventDefault();
		var name_data = $(this).attr('data-value');
		$(this).parent().parent().next('.clock').find('li').removeClass('on');
		$(this).parent().parent().next('.clock').find("[data-value='" + name_data + "']").addClass('on')
	})

	$('.select_clock li').on('click', function(e){
		e.preventDefault();
		var name_data = $(this).attr('data-value');
		$(this).parent().parent().next('.clock').find('li').removeClass('on');
		$(this).parent().parent().next('.clock').find("[data-value='" + name_data + "']").addClass('on')
	})

	$('.select_btn').on('click', function(){//form selectbox
		$('.select_list').stop().slideUp();
		$(this).next('.select_list').stop().slideToggle();
	})
	$('.select_list li a').on('click', function(){
		var select_text = $(this).text(),
			select_li = $(this).parent('li'),
			select_btn = $(this).parents('.select_list').siblings('.select_btn');
		select_btn.text(select_text);
		$(this).parent('li').siblings().removeClass('on');
		select_li.addClass('on');
		$(this).parents('.select_list').stop().slideUp();
	})
	$('body').on('click', function(e){
		if($('.select_menu').has(e.target).length == 0){
			$('.select_list').stop().slideUp();
		}
	});
})
</script>
<!--// 상담신청팝업 -->
