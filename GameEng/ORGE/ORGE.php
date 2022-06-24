<? include '..\..\header.php'; ?>

<div class="container">
  	<div class="row align-items-start">
  		<div class="card-body" style="background: #2e3d4d">
  			<img src="Orge.png" class="card-img-top" style="margin-left: 10%; width: 80%"><br><br>
  			<figcaption style="text-align: right; color: #131820; margin-left: 13%; width: 75%;">Логотип графического движка</figcaption><br><br>
			<h5 class="card-title">OGRE</h5>
			<br>
			<p class="card-text">
				<b>OGRE</b> (Object-Oriented Graphics Rendering Engine) - объектно-ориентированный графический движок с открытым исходным кодом, написанный на C++. Автором OGRE является Стив Стриитинг.<br><br>
				Работу над движком Стив начал в 2001 году, после того, как его посетила идея о создании хорошо слаженного, кроссплатформенного движка с удобным дизайном и архитектурой.
			</p><br>
			<img src="Orge1.png" class="card-img-top" style="margin-left: 10%; width: 80%;"><br><br>
  			<figcaption style="text-align: right; color: #131820; margin-left: 13%; width: 75%;">
  				Скриншот из бенчмарка «Fresnel Reflections and Refractions» из пакета «OGRE Demos pack». В данном тесте демонстрируется работа движка с водой, отражениями и преломлениями в водной среде.
  			</figcaption><br><br>
  			<h5 class="card-title">Политика OGRE</h5>
			<br>
			<p class="card-text">
				OGRE сам по себе не является игровым движком и по заявлению автора никогда таковым не будет. OGRE был, есть и будет графическим движком для рендеринга трехмерной графики. Большую популярность движок получил за счет своей гибкости, что позволяет «скрещивать» его со многими другими библиотеками (физика — ODE, Newton, PhysX, Bullet; звук, сеть, графический интерфейс и т. д.).
			<br><br>
				Причина, по которой OGRE не может стать полноценным игровым движком, описывается автором приблизительно так: Не все, кому может быть необходим 3D-движок, будут использовать его для создания игр, поэтому, вы можете использовать OGRE для создания игр, симуляторов, бизнес-приложений и т. д. В OGRE нет встроенной поддержки сети, звука и многих других функций. Но, с помощью усилий многих профессионалов, появились библиотеки, портированные под OGRE. Например, для реализации физики в приложениях, использующих данный движок, портированы такие библиотеки, как PhysX SDK (движок) (NxOgre), Newton Game Dynamics (OgreNewt), Bullet Physics Library (OgreBullet), Open Dynamics Engine (OgreODE).
			<br><br>
				Для реализации графического интерфейса пользователя (англ. GUI - Graphic User Interface) могут применяться как стандартные (недостаточно хорошо реализованные, и, по словам разработчиков, в будущем, возможно, будут исключены) функции графического интерфейса OGRE, так и импортироваться сторонние библиотеки (OpenGUI, MyGUI (очень популярен среди участников русского сообщества OGRE), CEGUI).
			<br><br>
				OGRE является свободным программным обеспечением, распространяемым под лицензиями LGPL/MIT и имеет очень активное сообщество.
			</p><br>
			<img src="Orge2.png" class="card-img-top" style="margin-left: 10%; width: 80%;"><br><br>
  			<figcaption style="text-align: right; color: #131820; margin-left: 13%; width: 75%;">
  				Скриншот из бенчмарка «Compositor Effects» из пакета «OGRE Demos pack». В левой верхней части скриншота расположено меню опций, в котором пользователи могут применять различные маски постэффектов к целому изображению. Постэффекты могут применяться как по одному, так и несколько вместе.
  			</figcaption><br><br>
  			<h5 class="card-title">Возможности</h5>
			<br>
			<p class="card-text">
				- Поддержка платформ Windows, Linux и Mac OS X;
			<br>
				- Скриптовая система управления материалами (мультитекстурирование, мультипроходное смешивание);
			<br>
				- Загрузка текстур в формате PNG, JPEG, TGA, BMP или DDS, также поддержка сжатых текстур (DXT/S3TC);
			<br>
				- Экспортеры для основных коммерческих и свободных пакетов 3D моделирования;
			<br>
				- Система управления ресурсами;
			<br>
				- Поддержка Direct3D, OpenGL;
			<br>
				- Поддержка шейдеров, написанных на ассемблере или языках высокого уровня: Cg, DirectX 9, HLSL или GLSL;
			<br>
				- Сложная скелетная анимация (анимация тела), анимация гибких форм, морфинг (анимация лица), анимация пути (камера, перемещение).
			<br><br>
				<h5 class="card-title">История версий</h5>
				<br>
				<details closed="">
    				<summary>Около 1999г</summary>
    				Синбад осознает, что его проект 'DIMClass', предназначенный для упрощения объектно-ориентированного взаимодействия с Direct3D, стал настолько абстрагированным, что может больше не базироваться на Direct3D. Начинается планирование более амбициозной платформо- и API-независимой библиотеки.
    			</details>
				<details closed="">
    				<summary>25 февраля 2000г</summary>
    				На Sourceforge зарегистрирован проект OGRE.
    			</details>
				<details closed="">
    				<summary>Февраль 2005г</summary>
    				Выпущена версия Ogre v1.0.0 "Azathoth" Final - переработана система ресурсов, аппаратные пиксельные буферы, HDR, CEGui, XSI exporter.
    			</details>
				<details closed="">
    				<summary>Март 2005г</summary>
    				Синбад осознает, что его проект 'DIMClass', предназначенный для упрощения объектно-ориентированного взаимодействия с Direct3D, стал настолько абстрагированным, что может больше не базироваться на Direct3D. Начинается планирование более амбициозной платформо- и API-независимой библиотеки.
    			</details>
				<details closed="">
    				<summary>4 ноября 2005г</summary>
    				Ankh становится первой коммерческой игрой, выпущенной с использованием Ogre.
    			</details>
				<details closed="">
    				<summary>7 мая 2006г</summary>
    				Официальный релиз Ogre 1.2 "Dagon".
    			</details>
				<details closed="">
    				<summary>25 марта 2007</summary>
    				Официальный релиз Ogre 1.4 "Eihort".
				</details>
				<details closed="">
    				<summary>28 августа 2008г</summary>
    				Официальный релиз Ogre 1.6 "Shoggoth" (текущая стабильная версия 1.6.5).
    			</details>
				<details closed="">
    				<summary>28 февраля 2010г</summary>
    				Официальный релиз Ogre 1.7 "Cthugha" (текущая стабильная версия 1.7.4).
    			</details>
				<details closed="">
    				<summary>28 мая 2012г</summary>
    				Официальный релиз Ogre 1.8 "Byatis".
    			</details>
				<details closed="">
    				<summary>24 ноября 2013г</summary>
    				Официальный релиз Ogre 1.10.
    			</details>
				<details closed="">
    				<summary>20 декабря 2018г</summary>
    				Официальный релиз Ogre 1.115.
    			</details>
				<br>
			</p><br>
			<img src="Orge3.png" class="card-img-top" style="margin-left: 10%; width: 80%;"><br><br>
  			<figcaption style="text-align: right; color: #131820; margin-left: 13%; width: 75%;">
  				Скриншот из бенчмарка «Ocean Shader Effects» (рус. Шейдерные эффекты для визуализации поверхности океана) из пакета «OGRE Demos pack». В этом тесте с помощью нескольких меню, расположенных по краям экрана, пользователь может вручную настраивать работу разных шейдеров, системы освещения и некоторые другие параметры.
  			</figcaption><br><br>
  			<h5 class="card-title">OGRE порты</h5>
			<br>
			<p class="card-text">
				Существуют порты Ogre3D под другие языки программирования
			</p>
  			<table style="width: 100%;">
			  	<tbody>
			  		<tr>
			    		<th style="border: 2px solid #1a202b; padding: 1%;">Python-Ogre для Python</th>
			    	</tr>
			  		<tr>
			    		<th style="border: 2px solid #1a202b; padding: 1%;">Ogre.pm для Perl</th>
			    	</tr>
			    	<tr>
			    		<th style="border: 2px solid #1a202b; padding: 1%;">Ogre.rb для Ruby</th>
			    	</tr>
			    	<tr>
			    		<th style="border: 2px solid #1a202b; padding: 1%;">POgre4j для Java</th>
			    	</tr>
			    	<tr>
			    		<th style="border: 2px solid #1a202b; padding: 1%;">OgreDotNet и MOGRE для .NET</th>
			    	</tr>
			    	<tr>
			    		<th style="border: 2px solid #1a202b; padding: 1%;">Ogre.pb для PureBasic</th>
			    	</tr>
			    	<tr>
			    		<th style="border: 2px solid #1a202b; padding: 1%;">Gmogre3d для Game Maker</th>
			    	</tr>
			    	<tr>
			    		<th style="border: 2px solid #1a202b; padding: 1%;">Axiom3d для C#</th>
			    	</tr>
				</tbody>
			</table>
			<br><br>
  			<h5 class="card-text">Проекты использующие движок</h5>
  			<table style="width: 100%;">
			  	<tbody>
			  		<tr>
			    		<th><h5>С открытым исходным кодом</h5></th>
			    		<th><h5>Проприетарные</h5></th>
			    	</tr>
			    	<tr></tr>
			  		<tr>
			    		<th><p></p></th>
			    		<th><p></p></th>
			    	</tr>
			  		<tr>
			    		<th>- Rigs of Rods</th>
			    		<th>- Impressive Title</th>
			    	</tr>
			  		<tr>
			    		<th>- Orxonox</th>
			    		<th>- Ankh</th>
			    	</tr>
			  		<tr>
			    		<th>- OpenFrag</th>
			    		<th>- Ankh: Heart of Osiris</th>
			    	</tr>
			  		<tr>
			    		<th>- MV3D</th>
			    		<th>- Ankh: Battle of the Gods</th>
			    	</tr>
			  		<tr>
			    		<th>- Sirikata</th>
			    		<th>- Jack Keane</th>
			    	</tr>
			  		<tr>
			    		<th>- Shadowrun: Awakened (TheRun)</th>
			    		<th>- Pacific Storm</th>
			    	</tr>
			  		<tr>
			    		<th>- Facade</th>
			    		<th>- MotorM4X</th>
			    	</tr>
			  		<tr>
			    		<th>- StuntRally</th>
			    		<th>- Earth Eternal</th>
			    	</tr>
			  		<tr>
			    		<th>- SuperRacing</th>
			    		<th>- Next Life</th>
			    	</tr>
			  		<tr>
			    		<th>- Summoning Wars</th>
			    		<th>- Torchlight</th>
			    	</tr>
			    	<tr>
			    		<th>- Iris2</th>
			    		<th>- Torchlight II</th>
			    	</tr>
			  		<tr>
			    		<th>- OpenDungeons</th>
			    		<th>- Snakeworlds</th>
			    	</tr>
			  		<tr>
			    		<th>- Trinity Reign</th>
			    		<th>- Garshasp: The Monster Slayer</th>
			    	</tr>
			  		<tr>
			    		<th>- The Burrow</th>
			    		<th>- Zero gear</th>
			    	</tr>
			  		<tr>
			    		<th>- Walaber's Trampoline</th>
			    		<th>- Zombie Driver</th>
			    	</tr>
			  		<tr>
			    		<th></th>
			    		<th>- Savage: The Battle for Newerth</th>
			    	</tr>
			    	<tr>
			    		<th></th>
			    		<th>- Savage 2: A Tortured Soul</th>
			    	</tr>
			    	<tr>
			    		<th></th>
			    		<th>- Warside</th>
			    	</tr>
			    	<tr>
			    		<th></th>
			    		<th>- Rebel Galaxy</th>
			    	</tr>
				</tbody>
			</table>
			<br><br>
		</div>
    	<div class="col">
          	<a href="..\id Tech\idTech.php" class="btn btn-primary">
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
          	<a href="..\Irrlicht\Irrlicht.php" class="btn btn-primary"  style="width: 100%">
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