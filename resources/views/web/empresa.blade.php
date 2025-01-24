@extends('web.layout')

@section('content')

<!--==================================================-->
<!-- Start Echofy Hero Area -->
<!--==================================================-->


    <div class="breadcumb-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 text-center">
                    <div class="breadcumb-content">
                        <div class="breadcumb-title">
                            <h4>Nosotros</h4>
                        </div>
                        <ul>

                            <li>Expertos en suelos, comprometidos con el medio ambiente</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!--==================================================-->
<!-- Strat Echofy Skill Area -->
<!--==================================================-->
<div class="skill-area">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="section-title left">
					<h4>Una idea</h4>
					<h1>Nuestra historia</h1>
					<p class="section-desc">
						Simbio nació con la visión de transformar la agricultura
                        convencional en una práctica más sostenible y respetuosa
                        con el medio ambiente. Inspirados en la naturaleza y
                        respaldados por la ciencia, trabajamos para regenerar los
                        suelos, reducir el impacto de los químicos y ofrecer
                        soluciones que beneficien tanto a los agricultores como al
                        planeta. Nuestro compromiso es construir un futuro donde la
                        agricultura sea sinónimo de equilibrio entre productividad y
                        sostenibilidad.
					</p>
				</div>


    		</div>
     		<div class="col-lg-6">
     			<div class="skills-thumb">
     				<img src="{{ asset('web/assets//images/home1/skill-thumb.png')}}" alt="">
     				<div class="skills-shape-2">
     					<img src="{{ asset('web/assets//images/home1/skill-shape-2.png')}}" alt="">
     				</div>
     			</div>
     		</div>
		</div>
	</div>
</div>

<div class="row">
			<div class="col-lg-4">
				<div class="single-service-box">
					<div class="service-content">
						<div class="service-content-icon">
							<img src="{{ asset('web/assets//images/Logo-Regeneran.png')}}" alt="">
						</div>
						<h4>Regeneran</h4>
						<p>Los suelos degradados, manteniendo la estructura física, química y biológica del suelo.</p>
					</div>
					<div class="service-thumb">
						<img src="{{ asset('web/assets//images/Regeneran.png')}}" alt="">
					</div>
					<div class="service-box-shape">
						<img src="{{ asset('web/assets//images/home1/service-box-shape.png')}}" alt="">
					</div>
				</div>
			</div>


		</div>
<!--==================================================-->
<!-- End Echofy Skill Area -->
<!--==================================================-->


@endsection
