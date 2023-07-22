@extends('/component/app2')

@section('content')
<section>
	<div class="container py-2">
		<div class="h1 text-center text-dark" id="pageHeaderTitle">
            <img src="{{ asset('img/YukNgaji.png') }}" style="width: 120px" alt="">
        </div>
		<article class="postcard light green">
			<a class="postcard__img_link" href="#">
				<img class="postcard__img" src="{{ asset('img/equran.png') }}" alt="Image Title" />
			</a>
			<div class="postcard__text t-dark">
				<h1 class="postcard__title green"><a href="E-quran">E-Quran</a></h1>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Al-Qur`an digital yang dapat dibaca melalui gadget dengan mudah</div>
				<ul class="postcard__tagbox">
					<li class="tag__item play green">
						<a href="E-quran">Selengkapnya <i class="fa-solid fa-chevron-right"></i></a>
					</li>
				</ul>
			</div>
		</article>
		<article class="postcard light blue">
			<a class="postcard__img_link" href="ustadz-robot">
				<img class="postcard__img" src="{{ asset('img/pakrobot.png') }}" alt="Image Title" />
			</a>
			<div class="postcard__text t-dark">
				<h1 class="postcard__title blue"><a href="#">Ustadz Bot</a></h1>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Kalian bisa bertanya seputar dunia Islam, Al-Qur`an. tetapi dengan bahasa yang mudah dipahami</div>
				<ul class="postcard__tagbox">
					<li class="tag__item play blue">
						<a href="ustadz-robot">Selengkapnya <i class="fa-solid fa-chevron-right"></i></a>
					</li>
				</ul>
			</div>
		</article>
		<article class="postcard light yellow">
			<a class="postcard__img_link" href="#">
				<img class="postcard__img" src="{{ asset('img/jadwal.png') }}" alt="Image Title" />
			</a>
			<div class="postcard__text t-dark">
				<h1 class="postcard__title yellow"><a href="#">Jadwal Sholat</a></h1>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt">Kalian bisa melihat jadwal sholat dengan mudah dan sholat dengan tepat waktu</div>
				<ul class="postcard__tagbox">
					<li class="tag__item play yellow">
						<a href="#">Selengkapnya <i class="fa-solid fa-chevron-right"></i></a>
					</li>
				</ul>
			</div>
		</article>
	</div>
</section>
@endsection
