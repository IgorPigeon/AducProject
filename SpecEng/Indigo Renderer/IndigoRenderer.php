<? include '..\..\header.php'; ?>

<div class="container">
  	<div class="row align-items-start">
  		<div class="card-body" style="background: #2e3d4d">
  			<img src="Indigo.png" class="card-img-top" style="margin-left: 10%; width: 80%"><br><br>
  			<figcaption style="text-align: right; color: #131820; margin-left: 13%; width: 75%;">Логотип графического движка</figcaption><br><br>
			<h5 class="card-title">Indigo Renderer</h5>
			<br>
			<p class="card-text">
				<b>Indigo Renderer</b> - физически корректная система рендеринга (имеется в виду, что все расчёты света/энергии/каустики и т. д. происходят взаимозависимо, что и отличает его от других рендереров, где всё обрабатывается раздельно и определяется самим пользователем).
			<br><br>
  			<h5 class="card-title">Описание</h5>
  			<br><br>
				Все взаимодействия света смоделированы физически (как спектральные данные), и у Indigo есть возможности, значительно упрощающие расчёты и отображение мира: виртуальная модель камеры (с различными режимами tonemapping), физическое небо и т. д. В качестве источников света используются mesh-объекты и HDRI-карты (в т.ч. с Exit Portals).
			<br><br>
				В процессе работы над новой версией трассировщика лучей для 3ds Max, который должен был бы стать значительно более быстрым и обладать рядом новых функций, авторы столкнулись с большим количеством ограничений, накладываемых API 3ds Max, и приняли решение о написании полноценного рендера, тем не менее, работающего в качестве плагина к 3ds Max.
			<br><br>
			<h5 class="card-title">Технология</h5>
			<br><br>
				Технология, на основе которой сделан Indigo, может сравниться с Maxwell Render (NextLimit’s), Fryrender, YafRay, LuxRender. Поддерживается GPU OpenCL (raytraycing) рендеринг, имеется мульти-GPU режим (bucket-рендеринг), первичная фильтрация, суперсэмплирование со вторичной многорежимной фильтрацией. Имеется сетевой мультикомпьютерный (network rendering) режим, работающий в формате master/slaves с неограниченным количеством рендер-нод в локальной или Интернет-сети. Имеется возможность рендеринга отдельных слоев изображения для последующего композитинга, представлены отдельные слои (группы) освещения, каждый из которых может настраиваться по цвету и светимости в процессе или по итогам рендеринга.
			<br><br>
			<h5 class="card-title">Версии</h5>
			<br><br>
				Последняя стабильная версия — 4.2.24 (11 июня 2019). Текущие бета-версии (начиная с 4.4.5) также поддерживают GPU-шумоподавление и более быстрый CPU-bucket рендеринг.
			<br><br>
				ИIndigo до версии 2.0 свободно распространялся для коммерческого и некоммерческого использования, впоследствии став платным. Имеются студенческая и образовательная формы лицензий (стоят дешевле, нежели базовая лицензия).
			<br><br>
				Существуют связующие модули к таким 3D-пакетам, как Maya, Houdini, Sketchup, Revit. iClone, Blender, 3ds Max, Cinema 4D. Названные плагины имеют возможность проводить рендеринг как в своих родительских программах (финальный рендеринг и IPR-предпросмотр), так и экспортировать сцену для рендеринга в standalone приложении Indigo Render. Indigo использует собственный формат материалов для текстурирования, однако доступно штатное конвертирование материалов родительских 3D-программ в формат Indigo Renderer.
			</p>
		</div>
    	<div class="col">
          	<a href="..\YafaRay\YafaRay.php" class="btn btn-primary">
				<div class="card">
				 	<div class="card-body" style="color: #d0e6f6;" style="width: 100%">
					    <h5 class="card-title">Предыдущая статья</h5>
					</div>
				</div>
			</a>
    	</div>
    	<div class="col">
          	<a href="..\..\index.php" class="btn btn-primary" style="width: 100%">
				<div class="card">
				 	<div class="card-body" style="color: #d0e6f6;">
					    <h5 class="card-title">Главное меню</h5>
					</div>
				</div>
			</a>
    	</div>
    	<div class="col">
          	<a href="..\GameEng.php" class="btn btn-primary" style="width: 100%">
				<div class="card">
				 	<div class="card-body" style="color: #d0e6f6;">
					    <h5 class="card-title">К разделу</h5>
					</div>
				</div>
			</a>
    	</div>
    	<div class="col">
          	<a href="..\Brazil R-S\BrazilR-S.php" class="btn btn-primary"  style="width: 100%">
				<div class="card">
				 	<div class="card-body" style="color: #d0e6f6;">
					    <h5 class="card-title">Следующая статья</h5>
					</div>
				</div>
			</a>
    	</div>
    	<p></p>
		<img src="EE.jpg" class="card-img-top" height="114px">
	</div>
</div>

<? include '..\..\footer.php'; ?>