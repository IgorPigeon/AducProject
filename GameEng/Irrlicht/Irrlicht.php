<? include '..\..\header.php'; ?>

<div class="container">
  	<div class="row align-items-start">
  		<div class="card-body" style="background: #2e3d4d">
  			<img src="Irrlicht.png" class="card-img-top" style="margin-left: 10%; width: 80%"><br><br>
  			<figcaption style="text-align: right; color: #131820; margin-left: 13%; width: 75%;">Логотип графического движка</figcaption><br><br>
			<h5 class="card-title">Irrlicht</h5>
			<br>
			<p class="card-text">
				<b>Irrlicht</b> (Irrlicht Engine) — трёхмерный графический движок, который является бесплатным свободным программным продуктом и распространяется на условиях лицензии zlib.
				<br><br>
				«Irrlicht» использует возможности OpenGL, DirectX и нескольких собственных рендереров. Пользователю предоставляются различные функциональные возможности по загрузке и управлению трёхмерными (3D) объектами (сцены, модели и т. п.), немногими спецэффектами и графическим интерфейсом пользователя. Рекомендуется для ознакомления с процессом разработки игр (Gamedev — «игростроительная индустрия»; «разработка игр») и создания несложных игр и демосцен (Irrlicht поддерживает форматы популярных игр и движков, в частности модели quake 2, quake 3, карты уровней и др.). Не требует подключения сторонних модулей для реализации высокоуровневых функций (есть простейшая физика, GUI (графический интерфейс пользователя) и т. д.). Существует три официальных дополнения для Irrlicht: IrrKlang (аудиобиблиотека), IrrXML (загрузка и обработка XML-файлов), IrrEdit (редактор сцен). Для использования расширенных функций физики существует физический движок ChronoEngine (по причине того, что в Irrlicht встроена примитивная физическая система).
				<br><br>
				Движок Irrlicht подходит для начинающих разработчиков игр благодаря следующим особенностям:
				<br><br>
				- Простота в изучении и использовании (прозрачная архитектура движка)<br>
				- Небольшой, но, тем не менее, вполне достаточный набор возможностей<br>
				- Совместимость с такими инструментами, как 3D-редакторы, звуковые, графические и редакторы спецэффектов<br>
				- Нет необходимости в компиляции и сборке движка из исходников<br>
				- Бесплатность и открытость движка<br>
				- Практическая применяемость движка (в отличие от инструментов вроде «Конструктор 3D игр», значительно ограничивающих свободу действий разработчика)<br><br>
				Одна из важных особенностей Irrlicht является его кроссплатформенность — способность работать на различных платформах. Платформонезависимая прослойка обеспечивает лёгкую портируемость (то есть перенос движка) на различные не поддерживаемые официально платформы, в частности существуют порты под Android, iOS и др.
			</p><br>
			<img src="Irrlicht1.png" class="card-img-top" style="margin-left: 10%; width: 80%;"><br><br>
  			<figcaption style="text-align: right; color: #131820; margin-left: 13%; width: 75%;">
  				Скриншот из демонстрационного бенчмарка графического движка Irrlicht Engine, на котором представлена реализация технологии «Parallax mapping» для текстурирования стен, пола и потолка комнаты. В динамике тени между кирпичами изменяются динамически в зависимости от положения источника света. Освещение попиксельное.
  			</figcaption><br><br>
  			<h5 class="card-title">Базовая структура</h5>
			<br>
			<p class="card-text">
				Движок содержит следующие пространства имен (они же модули):
				<br><br>
				<b>-core</b> — предоставляет классы общего назначения так как vectors, planes, arrays, lists и т. п.<br>
				<b>-gui</b> — содержит полезные классы для упрощения создания графического интерфейса пользователя GUI.<br>
				<b>-io</b> — содержит интерфейсы для ввода-вывода, они позволяют выполнять: чтение и запись файлов, доступ к zip архивам, xml файлам.<br>
				<b>-scene</b> — в этом модуле сосредоточено управление сценой: загрузка мешей (Mesh), специальные узлы сцены (так как octrees и billboards).<br>
				<b>-video</b> — в этом модуле содержатся классы для доступа к видеодрайверу. Весь 2d и 3d рендринг происходит здесь.<br>
			</p><br>
			<img src="Irrlicht2.png" class="card-img-top" style="margin-left: 10%; width: 80%;"><br><br>
			<figcaption style="text-align: right; color: #131820; margin-left: 13%; width: 75%;">
  				Скриншот из демонстрационного бенчмарка графического движка Irrlicht Engine, на котором представлена реализация технологии «Parallax mapping» для текстурирования стен, пола и потолка комнаты. В динамике тени между кирпичами изменяются динамически в зависимости от положения источника света. Освещение попиксельное.
  			</figcaption><br><br>
			<table style="width: 100%;">
			  	<tbody>
			  		<tr>
			    		<th><h5>Доступные языки для использования irrlicht<br></h5></th>
			    	</tr>
			  		<tr>
			    		<th style="border: 2px solid #1a202b; padding: 1%;"><b>-C++</b> — встроенная поддержка</th>
			    	</tr>
			  		<tr>
			    		<th style="border: 2px solid #1a202b; padding: 1%;"><b>-.NET-языки (C#, Visual Basic .NET)</b> — с помощью .NET враппера Irrlicht Lime</th>
			    	</tr>
			    	<tr>
			    		<th style="border: 2px solid #1a202b; padding: 1%;"><b>-Java</b> — с помощью библиотеки jirr или Bindenlicht</th>
			    	</tr>
			    	<tr>
			    		<th style="border: 2px solid #1a202b; padding: 1%;"><b>-Python</b> — pyIrrlicht, также осуществляет поддержку для других языков: fasm, TinyCC, FreeBASIC</th>
			    	</tr>
			    	<tr>
			    		<th style="border: 2px solid #1a202b; padding: 1%;"><b>-Ruby</b> — с помощью библиотеки IrrRuby</th>
			    	</tr>
			    	<tr>
			    		<th style="border: 2px solid #1a202b; padding: 1%;"><b>-PureBasic</b> — с помощью IrrlichtWrapper</th>
			    	</tr>
			    	<tr>
			    		<th style="border: 2px solid #1a202b; padding: 1%;"><b>-Delphi</b> — версия, портированная одним из энтузиастов</th>
			    	</tr>
			    	<tr>
			    		<th style="border: 2px solid #1a202b; padding: 1%;"><b>-GML</b>  — версия движка, для игрового конструктора GameMaker под названием GMI</th>
			    	</tr>
				</tbody>
			</table>
		</div>
		<P></P>
    	<div class="col">
          	<a href="..\ORGE\ORGE.php" class="btn btn-primary">
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
          	<a href="..\GLScene\GLScene.php" class="btn btn-primary"  style="width: 100%">
				<div class="card">
				 	<div class="card-body" style="color: #d0e6f6;">
					    <h5 class="card-title">Следующая статья</h5>
					</div>
				</div>
			</a>
    	</div>
    	<P></P>
		<img src="EE.jpg" class="card-img-top" height="114px">
	</div>
</div>
<? include '..\..\footer.php'; ?>