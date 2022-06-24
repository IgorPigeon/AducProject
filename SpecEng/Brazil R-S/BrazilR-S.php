<? include '..\..\header.php'; ?>

<div class="container">
  	<div class="row align-items-start">
  		<div class="card-body" style="background: #2e3d4d">
  			<img src="BRS.jpg" class="card-img-top" style="margin-left: 10%; width: 80%"><br><br>
  			<figcaption style="text-align: right; color: #131820; margin-left: 13%; width: 75%;">Логотип графического движка</figcaption><br><br>
			<h5 class="card-title">Brazil R/S</h5>
			<br>
			<p class="card-text">
				<b>Brazil R/S</b> - система рендеринга (визуализации изображения), разработанная компанией SplutterFish Llc.<br><br>
				Работу над движком Стив начал в 2001 году, после того, как его посетила идея о создании хорошо слаженного, кроссплатформенного движка с удобным дизайном и архитектурой.
			<br><br>
				Создатели этого рендерера Steve Blackmon и Scott Kirvan длительное время работали в Blur Studio и разрабатывали плагины к 3ds Max (тогда ещё 3D Studio MAX). В частности, они являются авторами материала и карты Raytrace, материала Ink’n’Paint, системы расчёта глобального освещения Light Tracer, основанной на методе Монте-Карло, плагинов для экспорта/импорта изображений в формате HDRI (RGBE) и OpenEXR, и некоторых других плагинов, вошедших в 3ds Max.
			<br><br>
				В процессе работы над новой версией трассировщика лучей для 3ds Max, который должен был бы стать значительно более быстрым и обладать рядом новых функций, авторы столкнулись с большим количеством ограничений, накладываемых API 3ds Max, и приняли решение о написании полноценного рендера, тем не менее, работающего в качестве плагина к 3ds Max.
			<br><br>
				Первая бета версия рендера Brazil r/s появилась в конце 2000 года, под кодовым название Ghost Renderer (Призрак). Brazil r/s был быстро принят студией A-List, для использования в кинопроизводстве. Позже рендер получил всемирное распространение. Он используется рядом студий, среди которых Blur Studio, Animal Logic, Digital Dimension, The Orphanage и др.
			<br><br>
				Brazil r/s основной продукт SplutterFish, реализован как плагин к Autodesk, 3ds Max, Rhinoceros, Autodesk Maya, и как отдельный модуль standalone. На коммерческой основе в настоящее время доступна только версия для 3ds Max, в то время как Rhino 3D версия доступна в открытом бета тестирование через McNeel and Associates.
			<br><br>
				Brazil r/s — это рейтрейсный рендер, в котором присутствует несколько алгоритмов просчёта глобального освещения Global Illumination: QMC и Photon Mapping.
			<br><br>
				Brazil r/s хорошо зарекомендовал себя среди архитекторов, дизайнеров и художников компьютерной графики, благодаря простоте настроек, стабильности и качественному, результату визуализации. Brazil r/s 1.x, в отличие от некоторых других рендеров, наиболее тесно интегрирован с 3ds Max — то, что возможно просчитать, используя стандартный рендерер 3ds Max, с тем же успехом просчитывается Brazil r/s.
			<br><br>
				Из недостатков можно отметить низкую скорость рендера первой версии относительно других систем рендеринга V-Ray, finalRender, что являлось в том числе и следствием отмеченной выше тесной интеграции с 3ds Max.
			<br><br>
				В конце 2007 года вышла в свет вторая версия Brazil r/s, в которой разработчики смогли значительно увеличить скорость рендеринга и добавили несколько важных элементов. Демоверсия под названием Brazil 2 Rio доступна на сайте разработчиков.
			<br><br>
				Brazil r/s использовался в производстве кинокартин: Звёздные войны. Эпизод III. Месть ситхов и Город Грехов.
			</p>
		</div>
    	<div class="col">
          	<a href="..\Indigo Renderer\IndigoRenderer.php" class="btn btn-primary">
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
          	<a href="..\mental ray\MentalRay.php" class="btn btn-primary"  style="width: 100%">
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