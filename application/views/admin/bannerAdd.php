<?php
	include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/admin/head.php');
?>
<link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js" ></script>
<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" ></script>
<script>
	$(function(){
		$("#btn_banr_save").bind('click',function(){
			if( '' == $("select[name=banr_tab]").val() ) alert('배너 탭을 선택해주세요.');
			else{
				$( "#banr_save" ).submit();
			}
		})
	});

	$(document).ready(function(){
		if('<?= $do_func;?>' == 'edit'){
			$('#banrTab').val("<?= empty($detail['banr_tab']) ? '' : $detail['banr_tab'];?>").prop("selected",true);
			$('#banrTab2').val("<?= empty($detail['banr_tab_2']) ? '' : $detail['banr_tab_2'];?>").prop("selected",true);
			$("#banrImg").val("<?= empty($detail['banr_img']) ? '' : $detail['banr_img'];?>");
			$("#banrLinkUrl").val("<?= empty($detail['banr_link_url']) ? '' : $detail['banr_link_url'];?>");
			if("<?= empty($detail['banr_use_yn']) ? 'Y' : $detail['banr_use_yn'];?>" == 'N'){
				$("input[name='banr_use_yn']").prop("checked", false);
			}
		}
	});

	function changeTab2List(){
	    var tab1Val = $("select[name=banr_tab]").val();
	    if(tab1Val == '5' || tab1Val == '6' || tab1Val == '7' || tab1Val == '8'){
	        $("#tab2SelDiv").show();
	    }else{
	        $("#tab2SelDiv").hide();
	    }
	}
</script>
<body>
    <div class="container-fluid position-relative d-flex p-0">
        <?php
        	include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/admin/sidebar.php');
        ?>
        <!-- Content Start -->
        <div class="content">
			<?php
				include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/admin/header-gnb.php');
			?>
			<div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded h-100 p-4">
					<h6 class="mb-4">이미지 <?= $do_func == 'edit' ? '수정' : '등록';?></h6>
					<form action="/adminProd/bannerSave" id="banr_save" method="post">
						<input type="hidden" class="form-control" name="banr_type" value='<?= $type;?>'>
						<input type="hidden" class="form-control" name="edit_type" value='<?= $do_func;?>'>
						<?php if($do_func == "edit") :?>
							<input type="hidden" class="form-control" name="banr_idx" value="<?= $detail['banr_idx'];?>">
						<?php endif;?>
						<?php if($type == "normal") :?>
							<div class="form-floating mb-3">
								<select class="form-select" id="banrTab" name="banr_tab" onchange="changeTab2List()">
									<option value="">탭 선택</option>
									<option value="1">메인 - 어학연수</option>
									<option value="2">메인 - 초중고 유학</option>
									<option value="3">메인 - 대학유학</option>
									<option value="4">메인 - 컬리지 유학 후 이민/자녀무상</option>
									<option value="5">해외대학 유학</option>
									<option value="6">조기유학</option>
									<option value="7">어학연수</option>
									<option value="8">가족연수/캠프/스쿨링</option>
								</select>
								<label for="banrTab" class="form-label">배너 탭</label>
							</div>
							<div class="form-floating mb-3" style="display:hidden;" id="tab2SelDiv">
							    <!-- 1:미국/2:영국/3:캐나다/4:필리핀 -->
                            	<select class="form-select" id="banrTab2" name="banr_tab_2">
                            		<option value="">탭 선택</option>
                            		<option value="1">미국</option>
                            		<option value="2">영국</option>
                            		<option value="3">캐나다</option>
                            		<option value="4">필리핀</option>
                            	</select>
                            	<label for="banrTab" class="form-label">배너 탭</label>
                            </div>
						<?php else : ?>
							<div class="form-floating mb-3" style="display:hidden;">
								<select class="form-select" id="banrTab" name="banr_tab">
									<option value="1" selected>메인</option>
								</select>
								<label for="banrTab" class="form-label">배너 탭</label>
							</div>
						<?php endif; ?>
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="banrImg" name="banr_img">
							<label for="banrImg" class="form-label">배너 이미지 url</label>
						</div>
						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="banrLinkUrl" name="banr_link_url">
                            <label for="banrLinkUrl" class="form-label">배너 링크 url</label>
						</div>
						<div class="form-check form-switch">
							<input class="form-check-input" type="checkbox" role="switch" id="banrUseYn" name="banr_use_yn" checked="checked">
							<label class="form-check-label" for="banrUseYn">배너 노출 여부</label>
						</div>
						<button type="button" class="btn btn-success" id="btn_banr_save">배너 저장</button>
						<button type="button" class="btn btn-primary" onclick="history.back()" id="banr_cancel">취소</button>
					</form>
				</div>
            </div>
            <?php
            	include($_SERVER['DOCUMENT_ROOT'].'/application/views/layout/admin/footer.php');
            ?>
        </div>
        <!-- Content End -->


	</div>
</body>

</html>
