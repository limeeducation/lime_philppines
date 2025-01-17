<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
	<?php
		$CI =& get_instance();
		$name = $CI->session->userdata('name');
		$position = $CI->session->userdata('position');
	?>
	<nav class="navbar bg-secondary navbar-dark">
		<a href="/admin/main" class="navbar-brand mx-4 mb-3">
			<h3 class="text-success"><i class="fa fa-user-edit me-2"></i>관리자페이지</h3>
		</a>
		<div class="d-flex align-items-center ms-4 mb-4">
			<div class="ms-3">
				<h6 class="mb-0"><?= $name; ?></h6>
				<span><?= $position; ?></span>
			</div>
		</div>
		<div class="navbar-nav w-100">
			<a href="/admin/main" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>대시보드</a>
			<div class="nav-item dropdown">
				<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-images me-2"></i>이미지 관리</a>
				<div class="dropdown-menu bg-transparent border-0">
					<a href="/adminProd/bannerList?type=normal" class="dropdown-item">상품 이미지 관리</a>
					<a href="/adminProd/bannerList?type=event" class="dropdown-item">메인 상단 이미지 관리</a>
				</div>
			</div>
			<div class="nav-item dropdown">
				<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-images me-2"></i>상품관리</a>
				<div class="dropdown-menu bg-transparent border-0">
					<a href="/adminProd/prodList" class="dropdown-item">상품 관리</a>
				</div>
			</div>
			<div class="nav-item dropdown">
				<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-school me-2"></i>학원관리</a>
				<div class="dropdown-menu bg-transparent border-0">
					<a href="button.html" class="dropdown-item">필리핀 학원 관리</a>
					<a href="typography.html" class="dropdown-item">캐나다 학원 관리</a>
					<a href="element.html" class="dropdown-item">미국 학원 관리</a>
					<a href="element.html" class="dropdown-item">호주 학원 관리</a>
					<a href="element.html" class="dropdown-item">다국적 학원 관리</a>
				</div>
			</div>
			<div class="nav-item dropdown">
				<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-users me-2"></i>학생관리</a>
				<div class="dropdown-menu bg-transparent border-0">
					<a href="/adminStudent/studentList" class="dropdown-item">상담학생 관리</a>
					<a href="typography.html" class="dropdown-item">수속학생 관리</a>
				</div>
			</div>
			<div class="nav-item dropdown">
				<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-edit me-2"></i>컨텐츠관리</a>
				<div class="dropdown-menu bg-transparent border-0">
					<a href="/adminProd/columnList" class="dropdown-item">칼럼 관리</a>
				</div>
			</div>
		</div>
	</nav>
</div>
<!-- Sidebar End -->
