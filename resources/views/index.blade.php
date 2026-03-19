@extends('layouts.all')

@php
    $title = '';
    $description = '';
@endphp

@section('title', $title)
@section('description', $description)

@section('main')

    <section id="contacts-header" class="contacts-header">
        <div class="container">
            <x-div-icon icon="map_pin">г. Курск, пр-т Вячеслава Клыкова, д. 16</x-div-icon>
            <x-a-icon href="#" icon="phone" class="h_phone">+7 (4712)310-810</x-a-icon>
            <a href="#" class="button button-white">Позвонить</a>
        </div>
    </section>

    <section id="main-menu" class="main-menu">
        <div class="container">
            <a href="#" class="main-menu__logo-link">
                <img src="{{ asset('img/logo.svg') }}" alt="Логотип" class="main-menu__logo">
            </a>
            <nav class="main-menu__nav" aria-label="Главное меню">
                <a href="#">О центре</a>
                <a href="#">Почему мы?</a>
                <a href="#">Этапы лечения</a>
                <a href="#">Вопросы и ответы</a>
                <a href="#">Контакты</a>
            </nav>
        </div>
    </section>

    <section id="main-banner" class="main-banner">
        <div class="container">
            <div class="main-banner__text">
                <h1>Лечение наркомании и алкоголизма в Курске и Курской области</h1>
                <p>Приватный персонализированный клинико-реабилитационный центр</p>
                <a href="#" class="button">Консультация специалиста</a>
            </div>
            <div class="main-banner__stats">
                <div class="stat-block stat-block__1">
                    <p class="stat-block__title">БОЛЕЕ</p>
                    <span class="stat-block__number">7</span>
                    <p class="stat-block__subtitle">лет центру</p>
                </div>
                <div class="stat-block stat-block__2">
                    <p class="stat-block__title">БОЛЕЕ</p>
                    <span class="stat-block__number">100</span>
                    <p class="stat-block__subtitle">пациентов</p>
                </div>
                <div class="stat-block  stat-block__3">
                    <p class="stat-block__title ">Пациенты</p>
                    <span class="stat-block__number">4+</span>
                    <p class="stat-block__subtitle">регионов</p>
                </div>
                <div class="stat-block stat-block__4">
                    <p class="stat-block__title">Анонимность</p>
                    <span class="stat-block__number">100%</span>
                    <p class="stat-block__subtitle">гарантия</p>
                </div>
            </div>

        </div>
    </section>

    <section id="about-clinic" class="about-clinic">
        <h2 class="about-clinic__title about-clinic__title--center">О клинике</h2>
        <div class="about-clinic__layout">
            <div class="about-clinic__left">
                <img src="{{ asset('img/about_1.webp') }}" alt="О клинике"
                    class="about-clinic__image about-clinic__image--left">
            </div>
            <div class="about-clinic__content">
                <p>Опыт работы в области реабилитации зависимых более 10 лет</p>
                <p>Клиника входит в состав «Национального Антинаркотического Союза»</p>
                <p>Программа полного цикла: реабилитация, ресоциализация, адаптация к жизни без зависимости</p>
                <p>Помощь не только зависимым, но и их семьям. Работа с созависимостью</p>
                <p>Комфортные условия: проживание, питание, круглосуточная поддержка специалистов</p>
                <p>Наша миссия - возвращение к нормальной жизни и пропаганда здорового образа жизни</p>
            </div>
            <div class="about-clinic__right">
                <img src="{{ asset('img/about_2.webp') }}" alt="О клинике" class="about-clinic__image">
            </div>
        </div>
    </section>

    <section id="services-center" class="services-center">
        <div class="container">
            <h2>Услуги клиники</h2>
            <div class="services-center__grid">
                <article class="service-card">
                    <p class="service-card__name">Лечение наркомании</p>
                    <div class="service-card__icon-wrap">
                        <div class="service-card__icon-bg">
                            <img src="{{ asset('img/icon/lehenie_narkomanii.svg') }}" alt="Лечение наркомании"
                                class="service-card__icon">
                        </div>
                    </div>
                </article>
                <article class="service-card">
                    <p class="service-card__name">Программа реабилитации</p>
                    <div class="service-card__icon-wrap">
                        <div class="service-card__icon-bg">
                            <img src="{{ asset('img/icon/reabilitation_programm.svg') }}" alt="Программа реабилитации"
                                class="service-card__icon">
                        </div>
                    </div>
                </article>
                <article class="service-card">
                    <p class="service-card__name">Вывод из запоя</p>
                    <div class="service-card__icon-wrap">
                        <div class="service-card__icon-bg">
                            <img src="{{ asset('img/icon/vivod_iz_zapoya.svg') }}" alt="Вывод из запоя"
                                class="service-card__icon">
                        </div>
                    </div>
                </article>
                <article class="service-card">
                    <p class="service-card__name">Лечение от игромании</p>
                    <div class="service-card__icon-wrap">
                        <div class="service-card__icon-bg">
                            <img src="{{ asset('img/icon/igromania.svg') }}" alt="Лечение от игромании"
                                class="service-card__icon">
                        </div>
                    </div>
                </article>
                <article class="service-card">
                    <p class="service-card__name">Лечение алкоголизма</p>
                    <div class="service-card__icon-wrap">
                        <div class="service-card__icon-bg">
                            <img src="{{ asset('img/icon/lehenie_alko.svg') }}" alt="Лечение алкоголизма"
                                class="service-card__icon">
                        </div>
                    </div>
                </article>
                <article class="service-card">
                    <p class="service-card__name">Ресоциализация наркозависимых</p>
                    <div class="service-card__icon-wrap">
                        <div class="service-card__icon-bg">
                            <img src="{{ asset('img/icon/resocialization.svg') }}" alt="Ресоциализация наркозависимых"
                                class="service-card__icon">
                        </div>
                    </div>
                </article>
                <article class="service-card">
                    <p class="service-card__name">Реабилитационный центр</p>
                    <div class="service-card__icon-wrap">
                        <div class="service-card__icon-bg">
                            <img src="{{ asset('img/icon/reabilitation.svg') }}" alt="Реабилитационный центр"
                                class="service-card__icon">
                        </div>
                    </div>
                </article>
                <article class="service-card">
                    <p class="service-card__name">Кодирование от алкоголизма</p>
                    <div class="service-card__icon-wrap">
                        <div class="service-card__icon-bg">
                            <img src="{{ asset('img/icon/kodirovanie_ot_alko.svg') }}" alt="Кодирование от алкоголизма"
                                class="service-card__icon">
                        </div>
                    </div>
                </article>
                <article class="service-card">
                    <p class="service-card__name">Профессиональная мотивация на лечение</p>
                    <div class="service-card__icon-wrap">
                        <div class="service-card__icon-bg">
                            <img src="{{ asset('img/icon/motivatsia.svg') }}" alt="Профессиональная мотивация на лечение"
                                class="service-card__icon">
                        </div>
                    </div>
                </article>
                <article class="service-card">
                    <p class="service-card__name">Детокс (снятие ломки)</p>
                    <div class="service-card__icon-wrap">
                        <div class="service-card__icon-bg">
                            <img src="{{ asset('img/icon/detoks.svg') }}" alt="Детокс" class="service-card__icon">
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section id="why-us" class="why-us">
        <div class="container">
            <h2>Почему выбирают нас?</h2>
            <div class="why-us__grid">
                <article class="why-us-card why-us-card--dark">
                    <h3>Федеральный статус <br>и надёжность</h3>
                    <hr class="why-us-card__hr">
                    <p>Мы — официальный член Национального Антинаркотического Союза. Наша деятельность ведётся под
                        патронажем заместителя председателя Госдумы РФ, что гарантирует соблюдение всех стандартов,
                        юридическую чистоту и высочайший уровень ответственности.</p>
                </article>
                <article class="why-us-card why-us-card--light">
                    <h3>Программа полного цикла <br>«Зависимость + Семья»</h3>
                    <hr class="why-us-card__hr">
                    <p>Наша ключевая особенность — работа с созависимыми родственниками. Мы лечим не только пациента, но и
                        восстанавливаем здоровую семейную систему, что критически повышает шансы на долгосрочную ремиссию и
                        возвращение к полноценной жизни.</p>
                </article>
                <article class="why-us-card why-us-card--light">
                    <h3>Опыт, сконцентрированный <br>на результате</h3>
                    <hr class="why-us-card__hr">
                    <p>8 лет практики позволяют нам точно прогнозировать сложности на каждом этапе: от интервенции и
                        мотивации до глубокой реабилитации и социальной адаптации. Мы прошли путь от оказания помощи к
                        формированию устойчивой жизни без зависимости.</p>
                </article>
                <article class="why-us-card why-us-card--dark">
                    <h3>Экстренная помощь и полная <br>конфиденциальность</h3>
                    <hr class="why-us-card__hr">
                    <p>Круглосуточная служба выезда на место в течение часа. Анонимность — абсолютный принцип нашей работы.
                        Все данные защищены, а лечение проводится с полным соблюдением врачебной тайны.</p>
                </article>
                <article class="why-us-card why-us-card--dark">
                    <h3>Комфортная среда <br>для восстановления</h3>
                    <hr class="why-us-card__hr">
                    <p>Мы создали условия, где нет места стрессу быта. Уютное проживание, полноценное питание и расписание,
                        сбалансированное между терапией, занятиями и отдыхом, позволяют полностью сосредоточиться на
                        внутренней работе.</p>
                </article>
                <article class="why-us-card why-us-card--light">
                    <h3>Социальная миссия <br>и доверие</h3>
                    <hr class="why-us-card__hr">
                    <p>Мы не просто клиника. Мы — активные участники общественной жизни, проводящие акции и пропагандирующие
                        здоровый образ жизни. Это формирует доверие не на словах, а на реальных действиях и открытой
                        позиции.</p>
                </article>
            </div>
        </div>
    </section>

    <section id="specialist-consultation" class="specialist-consultation">
        <div class="container">
            <div class="specialist-consultation__content">
                <p class="specialist-consultation__time">24 / 7</p>
                <p class="specialist-consultation__text">Консультация специалиста по всем вопросам</p>
                <a href="#" class="button button-white">Позвонить</a>
            </div>
        </div>
        <div class="specialist-consultation__image-block">
            <img src="{{ asset('img/24_7.webp') }}" alt="Консультация специалиста"
                class="specialist-consultation__image">
        </div>
    </section>

    <section id="treatment-stages" class="treatment-stages">
        <div class="container">
            <h2>Этапы лечения и реабилитации</h2>
            <p class="treatment-stages__subtitle">Комплексная программа ежедневно включает в себя медицинские процедуры,
                диагностику, психотерапию, тренинги.</p>
            <div class="treatment-stages__grid">

                <article class="stage-card stage-card--odd">
                    <div class="stage-card__number">
                        <p>1</p>
                    </div>
                    <h3>Первичная консультация</h3>
                    <p>Мы предлагаем бесплатную дистанционную консультацию (аудио или видео) для оценки ситуации и ответов
                        на вопросы. После этого можно детально спланировать госпитализацию, в том числе с помощью выездной
                        службы интервенции.</p>
                </article>

                <article class="stage-card stage-card--even">
                    <div class="stage-card__number">
                        <p>2</p>
                    </div>
                    <h3>Прием и госпитализация</h3>
                    <p>Диагностическая встреча: знакомимся, изучаем историю, отвечаем на вопросы. Вместе прорабатываем
                        индивидуальные задачи, принципы программы и правила командной работы.</p>
                </article>

                <article class="stage-card stage-card--even">
                    <div class="stage-card__number">
                        <p>3</p>
                    </div>
                    <h3>Детоксикация и адаптация</h3>
                    <p>Этап активной помощи: детоксикация и стабилизация физического и эмоционального состояния. Параллельно
                        формируем мотивацию и запускаем психотерапию. Все шаги — часть вашего персонального плана.</p>
                </article>

                <article class="stage-card stage-card--odd">
                    <div class="stage-card__number">
                        <p>4</p>
                    </div>
                    <h3>Консилиум специалистов</h3>
                    <p>Проводится консилиум с участием главного врача и ведущих экспертов. На нём оценивается динамика, при
                        необходимости корректируется лечебный план, уточняются прогнозы и намечаются следующие шаги
                        реабилитации.</p>
                </article>

                <article class="stage-card stage-card--odd">
                    <div class="stage-card__number">
                        <p>5</p>
                    </div>
                    <h3>Психотерапия обучающая</h3>
                    <p>Полное информирование: о болезни (симптомы, течение, прогноз) и о лечении (план, методы, ожидаемый
                        эффект) для пациента и его близких.</p>
                </article>

                <article class="stage-card stage-card--even">
                    <div class="stage-card__number">
                        <p>6</p>
                    </div>
                    <h3>Психотерапия навыков</h3>
                    <p>Цель этапа — практическое применение полученных знаний. Мы помогаем заменить деструктивные
                        поведенческие паттерны на здоровые, сформировав новые навыки, и обучаем осознанно выстраивать
                        границы безопасного поведения.</p>
                </article>

                <article class="stage-card stage-card--even">
                    <div class="stage-card__number">
                        <p>7</p>
                    </div>
                    <h3>Предвыписной этап</h3>
                    <p>На этом этапе достигается стабильный прогресс в выздоровлении и уверенное владение психологическими
                        инструментами. Мы готовим пациента к амбулаторному сопровождению и формируем устойчивую мотивацию
                        для самостоятельной работы.</p>
                </article>

                <article class="stage-card stage-card--odd">
                    <div class="stage-card__number">
                        <p>8</p>
                    </div>
                    <h3>Амбулаторная программа</h3>
                    <p>После выписки мы продолжаем поддерживать связь со специалистами центра. Это ключевой этап для
                        интеграции новых навыков в повседневную жизнь, работы с триггерами и коррекции реакций. Встречи
                        проходят в удобном формате — очно или онлайн.</p>
                </article>

                <article class="stage-card stage-card--odd">
                    <div class="stage-card__number">
                        <p>9</p>
                    </div>
                    <h3>Поддержка и профилактика</h3>
                    <p>Поддержание долгосрочной ремиссии. Включает регулярные поддерживающие консультации и участие в
                        эксклюзивных группах нашей клиники. Рекомендуемый график — 1-2 встречи в месяц с возможностью
                        дополнительных сессий по необходимости.</p>
                </article>

            </div>
        </div>
    </section>

    <section id="faq-section" class="faq-section">
        <div class="container">
            <h2>Вопросы и ответы на часто задаваемые вопросы</h2>

            <details>
                <summary>Пациент никуда не хочет ехать. Что делать?</summary>
                <div class="response">
                    Существует три рабочих решения: 1) Лечение с мотивацией «на месте» — пациент приезжает в клинику,
                    а специалисты помогают осознать проблему уже в стационаре. 2) Профессиональная мотивация на дому —
                    выезд бригады для беседы (интервенции). 3) Стратегия работы через близких — обучение семьи новым
                    форматам отношений, чтобы подвести пациента к самостоятельному решению.
                </div>
            </details>

            <details>
                <summary>Откуда взялось заболевание?</summary>
                <div class="response">
                    Зависимость — это хроническое заболевание мозга, возникающее из-за сочетания биологических
                    (генетика), психологических (травмы, особенности личности) и социальных (окружение, стресс)
                    факторов. Она формируется постепенно, изменяя работу нейромедиаторных систем и структуры принятия
                    решений.
                </div>
            </details>

            <details>
                <summary>В чем разница между психологом и психиатром?</summary>
                <div class="response">
                    Психиатр — это врач с медицинским образованием, который имеет право ставить диагнозы и назначать
                    медикаментозное лечение (таблетки). Психолог имеет гуманитарное образование, не лечит лекарствами,
                    а проводит диагностику и психотерапию (беседы, тренинги), помогая найти причины и способы решения
                    проблем.
                </div>
            </details>

            <details>
                <summary>Почему в других клиниках не вылечили, а у Вас вылечат?</summary>
                <div class="response">
                    Наш подход отличается комплексностью и этапностью: мы сочетаем медицинскую детоксикацию с глубокой
                    психотерапией, обучающей и тренинговой работой. Лечение не заканчивается выпиской — мы ведем
                    пациента до этапа устойчивой ремиссии через амбулаторную программу и поддержку.
                </div>
            </details>

            <details>
                <summary>Не будет ли пациент во время лечения «овощем»?</summary>
                <div class="response">
                    Нет. Мы против чрезмерной седации. Наша задача — вернуть человека к ясному сознанию и активной
                    жизни. Препараты используются только для снятия острых состояний (ломки, тревоги), после чего
                    пациент полноценно участвует в психотерапии, группах и обучающих занятиях.
                </div>
            </details>

            <details>
                <summary>Анонимно ли лечение?</summary>
                <div class="response">
                    Да, мы гарантируем полную анонимность. Информация о факте обращения и пребывании в центре является
                    врачебной тайной и не разглашается третьим лицам (родственникам, работодателям, государственным
                    органам) без вашего письменного согласия.
                </div>
            </details>

            <details>
                <summary>Разрешены ли средства связи на руках?</summary>
                <div class="response">
                    На начальных этапах (детоксикация, адаптация) доступ к телефону ограничен, чтобы пациент полностью
                    погрузился в процесс и исключил контакты с триггерной средой. На поздних этапах связи
                    предоставляется больше свободы по согласованию с лечащим врачом.
                </div>
            </details>

            <details>
                <summary>Есть ли гарантии результата?</summary>
                <div class="response">
                    В медицине никто не может дать 100% гарантию, так как результат зависит и от самого пациента. Мы
                    гарантируем: высокий профессионализм команды, современные методы и индивидуальный план. При
                    соблюдении всех рекомендаций вероятность стойкой ремиссии максимально высока.
                </div>
            </details>

            <details>
                <summary>Есть ли медицинская лицензия?</summary>
                <div class="response">
                    Да, наша клиника работает строго на законных основаниях. У нас имеется действующая государственная
                    медицинская лицензия, которая дает право на оказание услуг по психиатрии и наркологии. Мы открыто
                    предоставляем ее по первому запросу.
                </div>
            </details>

            <details>
                <summary>Можно ли посещать пациента во время лечения?</summary>
                <div class="response">
                    Посещения регулируются правилами центра и этапом терапии. В период адаптации они обычно
                    нежелательны, чтобы не мешать процессу. На более поздних этапах предусмотрены встречи с
                    родственниками в рамках семейной психотерапии по согласованию с врачом.
                </div>
            </details>

            <details>
                <summary>Бывают ли доплаты? Что такое политика фиксированных цен?</summary>
                <div class="response">
                    Мы придерживаемся политики фиксированных цен: при заключении договора оговаривается точная
                    стоимость курса. Никаких скрытых доплат за «дополнительные процедуры» в процессе лечения не
                    существует. Все включено в изначальную смету.
                </div>
            </details>

            <details>
                <summary>Стоимость лечения</summary>
                <div class="response">
                    Стоимость рассчитывается индивидуально и зависит от длительности пребывания, сложности случая и
                    необходимых процедур. Точную сумму можно узнать после бесплатной первичной консультации, где
                    специалист оценит ситуацию и подберет оптимальную программу под ваш бюджет.
                </div>
            </details>

            <details>
                <summary>Какого результата ожидать от лечения зависимого пациента?</summary>
                <div class="response">
                    Главный результат — достижение устойчивой, длительной ремиссии. Это не просто «чистота» от
                    вещества, а полное изменение качества жизни: восстановление здоровья, возвращение к работе/учебе,
                    нормализация отношений в семье, обретение новых интересов и навыков жизни без зависимости.
                </div>
            </details>
        </div>
    </section>

    <section id="methodology" class="methodology">
        <div class="container">
            <div class="text_styles methodology__content">
                <h3>У нас есть три рабочих решения, когда пациент отказывается от помощи:</h3>

                <ol>
                    <li>
                        <strong>Лечение с мотивацией «на месте»</strong><br />
                        Пациент приезжает в клинику, даже без твёрдой решимости. Наши
                        специалисты начинают работу в условиях стационара, помогая осознать
                        проблему и принять решение о лечении уже в процессе.
                    </li>
                    <li>
                        <strong>Профессиональная мотивация на дому</strong><br />
                        К вам выезжает наша выездная мотивационная бригада. Они проводят беседу
                        (интервенцию), помогают пациенту согласиться на курс и организуют его
                        комфортную доставку в центр для начала лечения.
                    </li>
                    <li>
                        <strong>Стратегия работы через близких</strong><br />
                        Если прямое общение с пациентом пока невозможно, мы работаем с его
                        родными. На сериях конфиденциальных встреч мы обучаем и поддерживаем
                        семью, чтобы помочь им выстроить новый формат отношений, который в итоге
                        подведёт пациента к самостоятельному желанию лечиться.
                    </li>
                </ol>
            </div>
        </div>
    </section>

@endsection
