
<!-- <link rel="stylesheet" href="{{ asset('css/fights.css') }}"> -->
@extends('master-layout')

@section('css')

<link rel="stylesheet" href="{{ asset('css/fights.css') }}">

@endsection

@section('content')
<!-- Content -->
<!-- Fights -->
<main style="background-color: #f1f1f1">
<section>
<div class="content-fights" id="content-fights">
	<div class="container">
		<!-- <div class="row"> -->
			<div>
				<nav aria-label="breadcrumb" class="breadcrumb-nav-fights">
					<ol class="breadcrumb breadcrumb-content breadcrumb-fights">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item" aria-current="page">Fights</li>
					</ol>
				</nav>
			</div>
		<!-- </div> -->
		<!-- <div class="row"> -->
			<div>
				<div class="banner-fights">
					<img src="{{ asset('image/hot-fights.png') }}" alt="" width="82" height="82">	
				</div>	
			</div>
		<!-- </div> -->
		<!-- <div class="row"> -->
			<div class="countdown-block-fights">
				<p>Register: <span class="user-register-fights">6</span> users</p>
				<div  id="countdown-timer-fights">
					<ul class="countdown-text-fights">
						<li><span id="days"></span>Days</li>&nbsp;:
						<li><span id="hours"></span>Hours</li>&nbsp;:
						<li><span id="minutes"></span>Minutes</li>&nbsp;:
						<li><span id="seconds"></span>Seconds</li>
					</ul>
				</div>
				<p id="countdown-end-fights">Deadline cmnr !!</p>
			</div>
		<!-- </div> -->
		<div class="row">
			<div class="col-12 col-md-6 col-lg-4 serach-fights">
				<input class="form-control input-search" type="text" placeholder="Search">
				<i class="fas fa-search fa-search-fights"></i>
			</div>
		</div>
		<div class="codecamp-list-block-fights">
			<div class="codecamp-block-fights">
				<div class="codecamp-fights">
					<div class="row codecamp-fights-flex">
						<div class="col-12 col-lg-1 cup-fights">
							<img src="{{ asset('image/cup-fights.png') }}" alt="" width="60">
						</div>
						<div class="col-12 col-lg-6 codecamp-info-fights">
							<div class="codecamp-info-fights--text">
								<h3><a href="">Talent Wins Code War 2019</a></h3>
								<p>Cuộc thi chạy đua deadline mở rộng TW'sD</p>
							</div>
							<div class="codecamp-info-fights--icon">
								<ul class="list-cup-fights">
									<li class="list-cup-fights--li">
										<img class="list-cup-fights--img" src="{{ asset('image/top0.png') }}" alt="" height="27">
										<a href=""><span class="list-cup-fights--name">Alpha</span></a>
									</li>
									<li class="list-cup-fights--li">
										<img class="list-cup-fights--img" src="{{ asset('image/top1.png') }}" alt="" height="27">
										<a href=""><span class="list-cup-fights--name">Beta</span></a>
									</li>
									<li class="list-cup-fights--li">
										<img class="list-cup-fights--img" src="{{ asset('image/top2.png') }}" alt="" height="27">
										<a href=""><span class="list-cup-fights--name">Gamma</span></a>
									</li>
								</ul>
							</div>
							<div class="codecamp-info-fights--tag">
								<a href=""><span>HTML</span></a>
								<a href=""><span>CSS</span></a>
								<a href=""><span>Javascript</span></a>
								<a href=""><span>NodeJS</span></a>
							</div>
						</div>
						<div class="col-12 col-lg-1 codecamp-user-fights">
							<i class="fas fa-user fa-user-fights"></i>
							<p>6 users</p>
						</div>
						<div class="col-12 col-lg-4 codecamp-countdown-fights">
							<div class="codecamp-countdown-block-fights">
								<div  id="countdown-timer-fights">
									<ul class="countdown-text-fights-1">
										<li><span id="days1"></span>Days</li>:&nbsp;
										<li><span id="hours1"></span>Hours</li>:&nbsp;
										<li><span id="minutes1"></span>Minutes</li>:&nbsp;
										<li><span id="seconds1"></span>Seconds</li>
									</ul>
								</div>
								<p id="codecamp-countdown-fights--text"><a href="">To end contest</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="codecamp-block-fights">
				<div class="codecamp-fights">
					<div class="row codecamp-fights-flex">
						<div class="col-lg-1 cup-fights">
							<img src="{{ asset('image/cup-fights.png') }}" alt="" width="60">
						</div>
						<div class="col-lg-6 codecamp-info-fights">
							<div class="codecamp-info-fights--text">
								<h3><a href="">Talent Wins Code War 2019</a></h3>
								<p>Cuộc thi chạy đua deadline mở rộng TW'sD</p>
							</div>
							<div class="codecamp-info-fights--icon">
								<ul class="list-cup-fights">
									<li class="list-cup-fights--li">
										<img class="list-cup-fights--img" src="{{ asset('image/top0.png') }}" alt="" height="27">
										<a href=""><span class="list-cup-fights--name">Alpha</span></a>
									</li>
									<li class="list-cup-fights--li">
										<img class="list-cup-fights--img" src="{{ asset('image/top1.png') }}" alt="" height="27">
										<a href=""><span class="list-cup-fights--name">Beta</span></a>
									</li>
									<li class="list-cup-fights--li">
										<img class="list-cup-fights--img" src="{{ asset('image/top2.png') }}" alt="" height="27">
										<a href=""><span class="list-cup-fights--name">Gamma</span></a>
									</li>
								</ul>
							</div>
							<div class="codecamp-info-fights--tag">
								<a href=""><span>HTML</span></a>
								<a href=""><span>CSS</span></a>
								<a href=""><span>Javascript</span></a>
								<a href=""><span>NodeJS</span></a>
							</div>
						</div>
						<div class="col-lg-1 codecamp-user-fights">
							<i class="fas fa-user fa-user-fights"></i>
							<p>6 users</p>
						</div>
						<div class="col-lg-4 codecamp-countdown-fights">
							<div class="codecamp-countdown-block-fights">
								<div  id="countdown-timer-fights">
									<ul class="countdown-text-fights-2">
										<li><span id="days2"></span>Days</li>:&nbsp;
										<li><span id="hours2"></span>Hours</li>:&nbsp;
										<li><span id="minutes2"></span>Minutes</li>:&nbsp;
										<li><span id="seconds2"></span>Seconds</li>
									</ul>
								</div>
								<p id="codecamp-countdown-fights--text2"><a href="">To end register</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="codecamp-block-fights">
				<div class="codecamp-fights">
					<div class="row codecamp-fights-flex">
						<div class="col-lg-1 cup-fights">
							<img src="{{ asset('image/cup-fights.png') }}" alt="" width="60">
						</div>
						<div class="col-lg-6 codecamp-info-fights">
							<div class="codecamp-info-fights--text">
								<h3><a href="">Talent Wins Code War 2019</a></h3>
								<p>Cuộc thi chạy đua deadline mở rộng TW'sD</p>
							</div>
							<div class="codecamp-info-fights--icon">
								<ul class="list-cup-fights">
									<li class="list-cup-fights--li">
										<img class="list-cup-fights--img" src="{{ asset('image/top0.png') }}" alt="" height="27">
										<a href=""><span class="list-cup-fights--name">Alpha</span></a>
									</li>
									<li class="list-cup-fights--li">
										<img class="list-cup-fights--img" src="{{ asset('image/top1.png') }}" alt="" height="27">
										<a href=""><span class="list-cup-fights--name">Beta</span></a>
									</li>
									<li class="list-cup-fights--li">
										<img class="list-cup-fights--img" src="{{ asset('image/top2.png') }}" alt="" height="27">
										<a href=""><span class="list-cup-fights--name">Gamma</span></a>
									</li>
								</ul>
							</div>
							<div class="codecamp-info-fights--tag">
								<a href=""><span>HTML</span></a>
								<a href=""><span>CSS</span></a>
								<a href=""><span>Javascript</span></a>
								<a href=""><span>NodeJS</span></a>
							</div>
						</div>
						<div class="col-lg-1 codecamp-user-fights">
							<i class="fas fa-user fa-user-fights"></i>
							<p>6 users</p>
						</div>
						<div class="col-lg-4 codecamp-countdown-fights">
							<div class="codecamp-countdown-block-fights">
								<p class="codecamp-date-fights">2019-08-17</p>
								<p id="codecamp-countdown-fights--text3"><a href="">Finished</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="codecamp-block-fights">
				<div class="codecamp-fights">
					<div class="row codecamp-fights-flex">
						<div class="col-lg-1 cup-fights">
							<img src="{{ asset('image/cup-fights.png') }}" alt="" width="60">
						</div>
						<div class="col-lg-6 codecamp-info-fights">
							<div class="codecamp-info-fights--text">
								<h3><a href="">Talent Wins Code War 2019</a></h3>
								<p>Cuộc thi chạy đua deadline mở rộng TW'sD</p>
							</div>
							<div class="codecamp-info-fights--icon">
								<ul class="list-cup-fights">
									<li class="list-cup-fights--li">
										<img class="list-cup-fights--img" src="{{ asset('image/top0.png') }}" alt="" height="27">
										<a href=""><span class="list-cup-fights--name">Alpha</span></a>
									</li>
									<li class="list-cup-fights--li">
										<img class="list-cup-fights--img" src="{{ asset('image/top1.png') }}" alt="" height="27">
										<a href=""><span class="list-cup-fights--name">Beta</span></a>
									</li>
									<li class="list-cup-fights--li">
										<img class="list-cup-fights--img" src="{{ asset('image/top2.png') }}" alt="" height="27">
										<a href=""><span class="list-cup-fights--name">Gamma</span></a>
									</li>
								</ul>
							</div>
							<div class="codecamp-info-fights--tag">
								<a href=""><span>HTML</span></a>
								<a href=""><span>CSS</span></a>
								<a href=""><span>Javascript</span></a>
								<a href=""><span>NodeJS</span></a>
							</div>
						</div>
						<div class="col-lg-1 codecamp-user-fights">
							<i class="fas fa-user fa-user-fights"></i>
							<p>6 users</p>
						</div>
						<div class="col-lg-4 codecamp-countdown-fights">
							<div class="codecamp-countdown-block-fights">
								<p class="codecamp-date-fights">2019-08-17</p>
								<p id="codecamp-countdown-fights--text3"><a href="">Finished</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="codecamp-block-fights">
				<div class="codecamp-fights">
					<div class="row codecamp-fights-flex">
						<div class="col-lg-1 cup-fights">
							<img src="{{ asset('image/cup-fights.png') }}" alt="" width="60">
						</div>
						<div class="col-lg-6 codecamp-info-fights">
							<div class="codecamp-info-fights--text">
								<h3><a href="">Talent Wins Code War 2019</a></h3>
								<p>Cuộc thi chạy đua deadline mở rộng TW'sD</p>
							</div>
							<div class="codecamp-info-fights--icon">
								<ul class="list-cup-fights">
									<li class="list-cup-fights--li">
										<img class="list-cup-fights--img" src="{{ asset('image/top0.png') }}" alt="" height="27">
										<a href=""><span class="list-cup-fights--name">Alpha</span></a>
									</li>
									<li class="list-cup-fights--li">
										<img class="list-cup-fights--img" src="{{ asset('image/top1.png') }}" alt="" height="27">
										<a href=""><span class="list-cup-fights--name">Beta</span></a>
									</li>
									<li class="list-cup-fights--li">
										<img class="list-cup-fights--img" src="{{ asset('image/top2.png') }}" alt="" height="27">
										<a href=""><span class="list-cup-fights--name">Gamma</span></a>
									</li>
								</ul>
							</div>
							<div class="codecamp-info-fights--tag">
								<a href=""><span>HTML</span></a>
								<a href=""><span>CSS</span></a>
								<a href=""><span>Javascript</span></a>
								<a href=""><span>NodeJS</span></a>
							</div>
						</div>
						<div class="col-lg-1 codecamp-user-fights">
							<i class="fas fa-user fa-user-fights"></i>
							<p>6 users</p>
						</div>
						<div class="col-lg-4 codecamp-countdown-fights">
							<div class="codecamp-countdown-block-fights">
								<p class="codecamp-date-fights">2019-08-17</p>
								<p id="codecamp-countdown-fights--text3"><a href="">Finished</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="codecamp-block-fights">
				<div class="codecamp-fights">
					<div class="row codecamp-fights-flex">
						<div class="col-lg-1 cup-fights">
							<img src="{{ asset('image/cup-fights.png') }}" alt="" width="60">
						</div>
						<div class="col-lg-6 codecamp-info-fights">
							<div class="codecamp-info-fights--text">
								<h3><a href="">Talent Wins Code War 2019</a></h3>
								<p>Cuộc thi chạy đua deadline mở rộng TW'sD</p>
							</div>
							<div class="codecamp-info-fights--icon">
								<ul class="list-cup-fights">
									<li class="list-cup-fights--li">
										<img class="list-cup-fights--img" src="{{ asset('image/top0.png') }}" alt="" height="27">
										<a href=""><span class="list-cup-fights--name">Alpha</span></a>
									</li>
									<li class="list-cup-fights--li">
										<img class="list-cup-fights--img" src="{{ asset('image/top1.png') }}" alt="" height="27">
										<a href=""><span class="list-cup-fights--name">Beta</span></a>
									</li>
									<li class="list-cup-fights--li">
										<img class="list-cup-fights--img" src="{{ asset('image/top2.png') }}" alt="" height="27">
										<a href=""><span class="list-cup-fights--name">Gamma</span></a>
									</li>
								</ul>
							</div>
							<div class="codecamp-info-fights--tag">
								<a href=""><span>HTML</span></a>
								<a href=""><span>CSS</span></a>
								<a href=""><span>Javascript</span></a>
								<a href=""><span>NodeJS</span></a>
							</div>
						</div>
						<div class="col-lg-1 codecamp-user-fights">
							<i class="fas fa-user fa-user-fights"></i>
							<p>6 users</p>
						</div>
						<div class="col-lg-4 codecamp-countdown-fights">
							<div class="codecamp-countdown-block-fights">
								<p class="codecamp-date-fights">2019-08-17</p>
								<p id="codecamp-countdown-fights--text3"><a href="">Finished</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="codecamp-block-fights">
				<div class="codecamp-fights">
					<div class="row codecamp-fights-flex">
						<div class="col-lg-1 cup-fights">
							<img src="{{ asset('image/cup-fights.png') }}" alt="" width="60">
						</div>
						<div class="col-lg-6 codecamp-info-fights">
							<div class="codecamp-info-fights--text">
								<h3><a href="">Talent Wins Code War 2019</a></h3>
								<p>Cuộc thi chạy đua deadline mở rộng TW'sD</p>
							</div>
							<div class="codecamp-info-fights--icon">
								<ul class="list-cup-fights">
									<li class="list-cup-fights--li">
										<img class="list-cup-fights--img" src="{{ asset('image/top0.png') }}" alt="" height="27">
										<a href=""><span class="list-cup-fights--name">Alpha</span></a>
									</li>
									<li class="list-cup-fights--li">
										<img class="list-cup-fights--img" src="{{ asset('image/top1.png') }}" alt="" height="27">
										<a href=""><span class="list-cup-fights--name">Beta</span></a>
									</li>
									<li class="list-cup-fights--li">
										<img class="list-cup-fights--img" src="{{ asset('image/top2.png') }}" alt="" height="27">
										<a href=""><span class="list-cup-fights--name">Gamma</span></a>
									</li>
								</ul>
							</div>
							<div class="codecamp-info-fights--tag">
								<a href=""><span>HTML</span></a>
								<a href=""><span>CSS</span></a>
								<a href=""><span>Javascript</span></a>
								<a href=""><span>NodeJS</span></a>
							</div>
						</div>
						<div class="col-lg-1 codecamp-user-fights">
							<i class="fas fa-user fa-user-fights"></i>
							<p>6 users</p>
						</div>
						<div class="col-lg-4 codecamp-countdown-fights">
							<div class="codecamp-countdown-block-fights">
								<p class="codecamp-date-fights">2019-08-17</p>
								<p id="codecamp-countdown-fights--text3"><a href="">Finished</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="codecamp-block-fights">
				<div class="codecamp-fights">
					<div class="row codecamp-fights-flex">
						<div class="col-lg-1 cup-fights">
							<img src="{{ asset('image/cup-fights.png') }}" alt="" width="60">
						</div>
						<div class="col-lg-6 codecamp-info-fights">
							<div class="codecamp-info-fights--text">
								<h3><a href="">Talent Wins Code War 2019</a></h3>
								<p>Cuộc thi chạy đua deadline mở rộng TW'sD</p>
							</div>
							<div class="codecamp-info-fights--icon">
								<ul class="list-cup-fights">
									<li class="list-cup-fights--li">
										<img class="list-cup-fights--img" src="{{ asset('image/top0.png') }}" alt="" height="27">
										<a href=""><span class="list-cup-fights--name">Alpha</span></a>
									</li>
									<li class="list-cup-fights--li">
										<img class="list-cup-fights--img" src="{{ asset('image/top1.png') }}" alt="" height="27">
										<a href=""><span class="list-cup-fights--name">Beta</span></a>
									</li>
									<li class="list-cup-fights--li">
										<img class="list-cup-fights--img" src="{{ asset('image/top2.png') }}" alt="" height="27">
										<a href=""><span class="list-cup-fights--name">Gamma</span></a>
									</li>
								</ul>
							</div>
							<div class="codecamp-info-fights--tag">
								<a href=""><span>HTML</span></a>
								<a href=""><span>CSS</span></a>
								<a href=""><span>Javascript</span></a>
								<a href=""><span>NodeJS</span></a>
							</div>
						</div>
						<div class="col-lg-1 codecamp-user-fights">
							<i class="fas fa-user fa-user-fights"></i>
							<p>6 users</p>
						</div>
						<div class="col-lg-4 codecamp-countdown-fights">
							<div class="codecamp-countdown-block-fights">
								<p class="codecamp-date-fights">2019-08-17</p>
								<p id="codecamp-countdown-fights--text3"><a href="">Finished</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="codecamp-block-fights">
				<div class="codecamp-fights">
					<div class="row codecamp-fights-flex">
						<div class="col-lg-1 cup-fights">
							<img src="{{ asset('image/cup-fights.png') }}" alt="" width="60">
						</div>
						<div class="col-lg-6 codecamp-info-fights">
							<div class="codecamp-info-fights--text">
								<h3><a href="">Talent Wins Code War 2019</a></h3>
								<p>Cuộc thi chạy đua deadline mở rộng TW'sD</p>
							</div>
							<div class="codecamp-info-fights--icon">
								<ul class="list-cup-fights">
									<li class="list-cup-fights--li">
										<img class="list-cup-fights--img" src="{{ asset('image/top0.png') }}" alt="" height="27">
										<a href=""><span class="list-cup-fights--name">Alpha</span></a>
									</li>
									<li class="list-cup-fights--li">
										<img class="list-cup-fights--img" src="{{ asset('image/top1.png') }}" alt="" height="27">
										<a href=""><span class="list-cup-fights--name">Beta</span></a>
									</li>
									<li class="list-cup-fights--li">
										<img class="list-cup-fights--img" src="{{ asset('image/top2.png') }}" alt="" height="27">
										<a href=""><span class="list-cup-fights--name">Gamma</span></a>
									</li>
								</ul>
							</div>
							<div class="codecamp-info-fights--tag">
								<a href=""><span>HTML</span></a>
								<a href=""><span>CSS</span></a>
								<a href=""><span>Javascript</span></a>
								<a href=""><span>NodeJS</span></a>
							</div>
						</div>
						<div class="col-lg-1 codecamp-user-fights">
							<i class="fas fa-user fa-user-fights"></i>
							<p>6 users</p>
						</div>
						<div class="col-lg-4 codecamp-countdown-fights">
							<div class="codecamp-countdown-block-fights">
								<p class="codecamp-date-fights">2019-08-17</p>
								<p id="codecamp-countdown-fights--text3"><a href="">Finished</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="codecamp-block-fights">
				<div class="codecamp-fights">
					<div class="row codecamp-fights-flex">
						<div class="col-lg-1 cup-fights">
							<img src="{{ asset('image/cup-fights.png') }}" alt="" width="60">
						</div>
						<div class="col-lg-6 codecamp-info-fights">
							<div class="codecamp-info-fights--text">
								<h3><a href="">Talent Wins Code War 2019</a></h3>
								<p>Cuộc thi chạy đua deadline mở rộng TW'sD</p>
							</div>
							<div class="codecamp-info-fights--icon">
								<ul class="list-cup-fights">
									<li class="list-cup-fights--li">
										<img class="list-cup-fights--img" src="{{ asset('image/top0.png') }}" alt="" height="27">
										<a href=""><span class="list-cup-fights--name">Alpha</span></a>
									</li>
									<li class="list-cup-fights--li">
										<img class="list-cup-fights--img" src="{{ asset('image/top1.png') }}" alt="" height="27">
										<a href=""><span class="list-cup-fights--name">Beta</span></a>
									</li>
									<li class="list-cup-fights--li">
										<img class="list-cup-fights--img" src="{{ asset('image/top2.png') }}" alt="" height="27">
										<a href=""><span class="list-cup-fights--name">Gamma</span></a>
									</li>
								</ul>
							</div>
							<div class="codecamp-info-fights--tag">
								<a href=""><span>HTML</span></a>
								<a href=""><span>CSS</span></a>
								<a href=""><span>Javascript</span></a>
								<a href=""><span>NodeJS</span></a>
							</div>
						</div>
						<div class="col-lg-1 codecamp-user-fights">
							<i class="fas fa-user fa-user-fights"></i>
							<p>6 users</p>
						</div>
						<div class="col-lg-3 codecamp-countdown-fights">
							<div class="codecamp-countdown-block-fights">
								<p class="codecamp-date-fights">2019-08-17</p>
								<p id="codecamp-countdown-fights--text3"><a href="">Finished</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Page -->
		<nav aria-label="Page navigation example">
			<ul class="pagination justify-content-center">
				<li class="page-item mx-1 page-item-fights">
					<a class="page-link" href="#" aria-label="Previous">
						<span aria-hidden="true">&laquo;</span>
						<span class="sr-only">Previous</span>
					</a>
				</li>
				<li class="page-item active mx-1 page-item-fights"><a class="page-link" href="#">1</a></li>
				<li class="page-item mx-1 page-item-fights"><a class="page-link" href="#">2</a></li>
				<li class="page-item mx-1 page-item-fights"><a class="page-link" href="#">3</a></li>
				<li class="page-item mx-1 page-item-fights">
					<a class="page-link" href="#" aria-label="Next">
						<span aria-hidden="true">&raquo;</span>
						<span class="sr-only">Next</span>
					</a>
				</li>
			</ul>
		</nav>
	</div>
</div>

</section>
</main>
<script src="{{ asset('js/fights.js') }}"></script>
@endsection