<? include '..\..\header.php'; ?>

<div class="container">
  	<div class="row align-items-start">
  		<div class="card-body" style="background: #2e3d4d">
  			<img src="YafaRay.jpg" class="card-img-top" style="margin-left: 10%; width: 80%"><br><br>
  			<figcaption style="text-align: right; color: #131820; margin-left: 13%; width: 75%;">Логотип графического движка</figcaption><br><br>
			<h5 class="card-title">YafaRay</h5>
			<br>
			<p class="card-text">
				<b>YafaRay</b> - это бесплатная свободная программа трассировки лучей c открытым исходным , использующая для описания сцены язык XML. В феврале 2004 года[2] модуль управления YafaRay’ем был интегрирован в программу 3D моделирования Blender.
			<br><br>
				Программа распространяется под лицензией GNU Lesser General Public License (LGPL).
			<br><br>
			<h5 class="card-title">Технология</h5>
			<br>
				<b>Модульная структура.</b> Yafaray имеет модульную структуру, основанную на ядре и других связанных с ним элементах рендеринга: загрузчике сцены, источниках освещения и шейдерах. Вместе с API это позволяет разрабатывать плагины рендеринга для использования Yafaray из любой программы или 3D приложения. В список поддерживаемых программ входят: Blender, Wings 3D и Aztec.
			<br><br>
				<b>Кроссплатформенность.</b> Yafaray полностью написан на языке C++, что сделало программу хорошо переносимой. Прекомпилированные исполняемые файлы существуют для всех наиболее распространённых платформ: GNU/Linux, Win32, Mac OS X и Irix. Yafaray может быть использован в качестве автономного движка рендеринга, использующего собственный формат описания сцены. В этом случае он может использоваться непосредственно из командной строки, скрипта и т. д. Также существуют заготовки для параллельного или распределённого рендеринга.
			<br><br>
			<h5 class="card-title">Возможности</h5>
			<br>
				<b>Глобальное освещение.</b> YafaRay использует основанное на приближениях метода Монте-Карло глобальное освещение для создания реалистично-освещённых визуализаций 3D сцен.
			<br><br>
				<b>Освещение от неба.</b> Эта система основана, главным образом, на освещении от неба. Во внимание также принимается расчёт мягких теней. Кроме того, освещение может быть получено из изображения с высоким динамическим диапазоном.
			<br><br>
				<b>Каустики.</b> YafaRay использует распределение фотонов, которое учитывает каустику (искажение света при отражении или прохождении, например, через линзу). Для симуляции полупрозрачных материалов в разработке находится шейдер, имитирующий подповерхностное рассеяние света.
			<br><br>
				<b>Глубина резкости.</b> Эффекты фокусной глубины резкости могут быть воспроизведены с помощью этой возможности. Если камера зафиксирована на определённой точке сцены, дальние объекты будут вне фокуса.
			<br><br>
				<b>Искажённые отражения.</b> Если поверхность не является идеальным отражателем, отражённый свет искажается. Чем дальше находится отражаемый объект, тем сильнее будет искажение. YafaRay может имитировать данное явление.
			<br><br>
		</div>
    	<div class="col">
          	<a href="..\OptiX\OptiX.php" class="btn btn-primary">
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
          	<a href="..\Indigo Renderer\IndigoRenderer.php" class="btn btn-primary"  style="width: 100%">
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