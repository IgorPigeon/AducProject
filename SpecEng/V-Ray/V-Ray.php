<? include '..\..\header.php'; ?>

<div class="container">
  	<div class="row align-items-start">
  		<div class="card-body" style="background: #2e3d4d">
  			<img src="V-Ray.png" class="card-img-top" style="margin-left: 10%; width: 80%"><br><br>
  			<figcaption style="text-align: right; color: #131820; margin-left: 13%; width: 75%;">Логотип графического движка</figcaption><br><br>
			<h5 class="card-title">V-Ray</h5>
			<br>
			<p class="card-text">
				<b>V-Ray</b> - система рендеринга (визуализации изображения), разработанная компанией Chaos Group (Болгария). Первая бета-версия рендерера V-Ray появилась в далёком 2000 году.
			<br><br>
				V-Ray работает как плагин для Autodesk 3ds Max , Cinema 4D, SketchUp, Rhino, TrueSpace7.5, Autodesk Maya, как отдельный модуль Standalone, Blender (через Standalone — модуль).
			<br><br>
				V-Ray — это рейтрейсный рендерер, в котором присутствует несколько алгоритмов просчёта глобального освещения (Global Illumination):
			<br><br>
				- Light Cache
			<br>
				- Photon Map
			<br>
				- Irradiance Map
			<br>
				- Brute Force (QMC)
			<br><br>
				Имеется возможность выбора различных алгоритмов для просчёта отражения и переотражения глобального освещения.
			<br><br>
				V-Ray хорошо себя зарекомендовал во многих сферах визуализации благодаря своей гибкости и широкому набору инструментов для включения в рабочий процесс различных студий, будь то анимационные или архитектурные компании.
			<br><br>
			<h5 class="card-title">Достоинства</h5>
			<br>
			<p class="card-text">
				- Поддерживает распределённый рендеринг на нескольких компьютерах (Distributive rendering);
			<br>
				- Имеет множество гибких настроек качества изображения для получения хорошего результата за приемлемое время;
			<br>
				- Имеет в своём функционале большой и постоянно расширяющийся набор материалов, способных имитировать те или иные свойства объектов, таких как SSS (подповерхностное рассеивание);
			<br>
				- Добавляет в 3ds Max процедурные текстуры и утилиты, облегчающие работу со сценой (например, v-ray multisub texture и v-ray edges texture);
			<br>
				- Поддерживает вывод собственных Render Elements (пассов) для последующей сборки в программах композитинга.
			<br><br>
			<h5 class="card-title">Недостатки</h5>
			<br>
			<p class="card-text">
				- Сложность работы с глобальным освещением при наличии анимированных объектов; по сути, анимированные объекты нельзя освещать быстрыми методами интерполяции (Light Cache, Irradiance Map), и остаётся очень медленный Bruteforce; та же логика работает при визуализации материалов, требующих интерполяции, таких как SSS;
			<br>
				- Крайне медленная визуализация прозрачных объектов. При наложении таких объектов друг на друга время визуализации возрастает многократно;
			<br>
				- Имеет в своём функционале большой и постоянно расширяющийся набор материалов, способных имитировать те или иные свойства объектов, таких как SSS (подповерхностное рассеивание);
			<br>
				- Недоработанный модуль V-Ray RT (Real-Time), не поддерживающий значительное количество основных функций V-Ray, что делает работу с модулем неполноценной;
			<br>
				- Путин президент.
			<br><br>
			</p>
			Начиная с версии V-Ray 2.0, V-Ray RT входит в штатную поставку плагина к 3ds Max. При использовании рендерера в реальном времени, V-Ray RT частично берёт настройки из обычного V-Ray (настройки освещения, цветового затухания, окружающей среды), а для вычислений использует собственный алгоритм. V-Ray RT способен делать вычисления с помощью процессора или же видеокарты, при этом в последнем случае достигается значительное увеличение скорости просчёта, однако не поддерживается ещё более значительное количество функций V-Ray.
			<br><br>
		</div>
    	<div class="col">
          	<a href="..\Maxwell Render\MaxwellRender.php" class="btn btn-primary">
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
          	<a href="..\POV-Ray\POV-Ray.php" class="btn btn-primary"  style="width: 100%">
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