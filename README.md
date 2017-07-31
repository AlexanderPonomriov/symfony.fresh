1) Clone repository with command:
    git clone https://github.com/AlexanderPonomariov/symfony.fresh.git
2) Run the following command in console:
    composer update
3) Set Data Base connection parameters
4) Run the following command in console for crating data base which was wrote while updating:
    php bin/console doctrine:database:create
5) Run the following command in console for creating data base tables, which was wrote in entities:
    php bin/console doctrine:schema:update --force
6) Create new migration:
    php bin/console doctrine:migrations:generate
7) Go to your_directory/app/DoctrineMigrations/VersionYYYYMMDDHHMMSS.php
8) Copy the following text inside function up():

            $this->addSql('INSERT INTO sites_types (id, site_type) VALUES (1,\'Корпоративный\'),(2,\'Каталог\'),(3,\'Магазин\')');
    
            $this->addSql('INSERT INTO work_types (id, work_type) VALUES (1,\'Дизайн\'),(2,\'Программирование\'),(3,\'Верстка\')');
    
            $this->addSql('INSERT INTO parameters (id, parameter_name,parameter_value,active,updated,site_type_id,work_type_id) VALUES 
                (1,\'Главная\',\'30\',\'1\',\'\',\'1\',\'1\'),
                (2,\'Главная\',\'30\',\'1\',\'\',\'2\',\'1\'), 
                (3,\'Главная\',\'30\',\'1\',\'\',\'3\',\'1\'),
                (4,\'Главная\',\'16\',\'1\',\'\',\'1\',\'3\'),
                (5,\'Главная\',\'16\',\'1\',\'\',\'2\',\'3\'), 
                (6,\'Главная\',\'16\',\'1\',\'\',\'3\',\'3\'),  
                          
                (7,\'Каталог товаров\',\'10\',\'1\',\'\',\'1\',\'1\'),
                (8,\'Каталог товаров\',\'10\',\'1\',\'\',\'2\',\'1\'), 
                (9,\'Каталог товаров\',\'10\',\'1\',\'\',\'3\',\'1\'),
                (10,\'Каталог товаров\',\'8\',\'1\',\'\',\'1\',\'3\'),
                (11,\'Каталог товаров\',\'8\',\'1\',\'\',\'2\',\'3\'), 
                (12,\'Каталог товаров\',\'8\',\'1\',\'\',\'3\',\'3\'),
                 
                (13,\'Карточка товара\',\'8\',\'1\',\'\',\'1\',\'1\'),
                (14,\'Карточка товара\',\'8\',\'1\',\'\',\'2\',\'1\'), 
                (15,\'Карточка товара\',\'8\',\'1\',\'\',\'3\',\'1\'),
                (16,\'Карточка товара\',\'8\',\'1\',\'\',\'1\',\'3\'),
                (17,\'Карточка товара\',\'8\',\'1\',\'\',\'2\',\'3\'), 
                (18,\'Карточка товара\',\'8\',\'1\',\'\',\'3\',\'3\'),
                
                (19,\'О компании\',\'6\',\'1\',\'\',\'1\',\'1\'),
                (20,\'О компании\',\'6\',\'1\',\'\',\'2\',\'1\'), 
                (21,\'О компании\',\'6\',\'1\',\'\',\'3\',\'1\'),
                (22,\'О компании\',\'3\',\'1\',\'\',\'1\',\'3\'),
                (23,\'О компании\',\'3\',\'1\',\'\',\'2\',\'3\'), 
                (24,\'О компании\',\'3\',\'1\',\'\',\'3\',\'3\'),
                
                (25,\'Новости/статьи\',\'6\',\'1\',\'\',\'1\',\'1\'),
                (26,\'Новости/статьи\',\'6\',\'1\',\'\',\'2\',\'1\'), 
                (27,\'Новости/статьи\',\'6\',\'1\',\'\',\'3\',\'1\'),
                (28,\'Новости/статьи\',\'3\',\'1\',\'\',\'1\',\'3\'),
                (29,\'Новости/статьи\',\'3\',\'1\',\'\',\'2\',\'3\'), 
                (30,\'Новости/статьи\',\'3\',\'1\',\'\',\'3\',\'3\'),
                
                (31,\'Новость/статья\',\'6\',\'1\',\'\',\'1\',\'1\'),
                (32,\'Новость/статья\',\'6\',\'1\',\'\',\'2\',\'1\'), 
                (33,\'Новость/статья\',\'6\',\'1\',\'\',\'3\',\'1\'),
                (34,\'Новость/статья\',\'3\',\'1\',\'\',\'1\',\'3\'),
                (35,\'Новость/статья\',\'3\',\'1\',\'\',\'2\',\'3\'), 
                (36,\'Новость/статья\',\'3\',\'1\',\'\',\'3\',\'3\'),
                
                (37,\'Контакты\',\'6\',\'1\',\'\',\'1\',\'1\'),
                (38,\'Контакты\',\'6\',\'1\',\'\',\'2\',\'1\'), 
                (39,\'Контакты\',\'6\',\'1\',\'\',\'3\',\'1\'),
                (40,\'Контакты\',\'4\',\'1\',\'\',\'1\',\'3\'),
                (41,\'Контакты\',\'4\',\'1\',\'\',\'2\',\'3\'), 
                (42,\'Контакты\',\'4\',\'1\',\'\',\'3\',\'3\'),
                
                (43,\'Результаты поиска\',\'6\',\'1\',\'\',\'1\',\'1\'), 
                (44,\'Результаты поиска\',\'6\',\'1\',\'\',\'2\',\'1\'),
                (45,\'Результаты поиска\',\'6\',\'1\',\'\',\'3\',\'1\'), 
                (46,\'Результаты поиска\',\'3\',\'1\',\'\',\'1\',\'3\'),
                (47,\'Результаты поиска\',\'3\',\'1\',\'\',\'2\',\'3\'), 
                (48,\'Результаты поиска\',\'3\',\'1\',\'\',\'3\',\'3\'),
                
                (49,\'Страница 404\',\'4\',\'1\',\'\',\'1\',\'1\'), 
                (50,\'Страница 404\',\'4\',\'1\',\'\',\'2\',\'1\'),
                (51,\'Страница 404\',\'4\',\'1\',\'\',\'3\',\'1\'),
                (52,\'Страница 404\',\'2\',\'1\',\'\',\'1\',\'3\'),
                (53,\'Страница 404\',\'2\',\'1\',\'\',\'2\',\'3\'),
                (54,\'Страница 404\',\'2\',\'1\',\'\',\'3\',\'3\'),
                
                (55,\'Форма обратной связ\',\'2\',\'1\',\'\',\'1\',\'1\'), 
                (56,\'Форма обратной связ\',\'2\',\'1\',\'\',\'2\',\'1\'),
                (57,\'Форма обратной связ\',\'2\',\'1\',\'\',\'3\',\'1\'),
                (58,\'Форма обратной связ\',\'2\',\'1\',\'\',\'1\',\'3\'),
                (59,\'Форма обратной связ\',\'2\',\'1\',\'\',\'2\',\'3\'),
                (60,\'Форма обратной связ\',\'2\',\'1\',\'\',\'3\',\'3\'),
                
                (61,\'Корзина\',\'6\',\'1\',\'\',\'3\',\'1\'),
                (62,\'Корзина\',\'6\',\'1\',\'\',\'3\',\'3\'),
                 
                (63,\'Оформление\',\'6\',\'1\',\'\',\'3\',\'1\'),
                (64,\'Оформление\',\'6\',\'1\',\'\',\'3\',\'3\'),
                
                (65,\'Личный кабинет\',\'8\',\'1\',\'\',\'3\',\'1\'), 
                (66,\'Личный кабинет\',\'6\',\'1\',\'\',\'3\',\'3\'),
                
                (67,\'Профиль\',\'6\',\'1\',\'\',\'3\',\'1\'), 
                (68,\'Профиль\',\'4\',\'1\',\'\',\'3\',\'3\'),
                
                (69,\'История заказов\',\'8\',\'1\',\'\',\'3\',\'1\'), 
                (70,\'История заказов\',\'6\',\'1\',\'\',\'3\',\'3\'),
                
                (71,\'Форма регистрации/авторизации\',\'6\',\'1\',\'\',\'3\',\'1\'), 
                (72,\'Форма регистрации/авторизации\',\'4\',\'1\',\'\',\'3\',\'3\'),
                
                (73,\'Установка и настройка ядра системы управления\',\'6\',\'1\',\'\',\'1\',\'2\'), 
                (74,\'Установка и настройка ядра системы управления\',\'6\',\'1\',\'\',\'2\',\'2\'),            
                (75,\'Установка и настройка ядра системы управления\',\'6\',\'1\',\'\',\'3\',\'2\'),
                
                (76,\'Интегрирование шаблонов с системой управления\',\'16\',\'1\',\'\',\'1\',\'2\'),
                (77,\'Интегрирование шаблонов с системой управления\',\'16\',\'1\',\'\',\'2\',\'2\'),
                (78,\'Интегрирование шаблонов с системой управления\',\'16\',\'1\',\'\',\'3\',\'2\'),
                
                (79,\'Каталог товаров\',\'16\',\'1\',\'\',\'1\',\'2\'), 
                (80,\'Каталог товаров\',\'16\',\'1\',\'\',\'2\',\'2\'),
                (81,\'Каталог товаров\',\'16\',\'1\',\'\',\'3\',\'2\'),
                
                (82,\'Фильтры товаров\',\'16\',\'1\',\'\',\'1\',\'2\'),
                (83,\'Фильтры товаров\',\'16\',\'1\',\'\',\'2\',\'2\'),
                (84,\'Фильтры товаров\',\'16\',\'1\',\'\',\'3\',\'2\'),
                 
                (85,\'Новости/статьи\',\'6\',\'1\',\'\',\'1\',\'2\'),
                (86,\'Новости/статьи\',\'6\',\'1\',\'\',\'2\',\'2\'),
                (87,\'Новости/статьи\',\'6\',\'1\',\'\',\'3\',\'2\'),
                
                (88,\'Формы обратной связи\',\'6\',\'1\',\'\',\'1\',\'2\'),
                (89,\'Формы обратной связи\',\'6\',\'1\',\'\',\'2\',\'2\'),
                (90,\'Формы обратной связи\',\'6\',\'1\',\'\',\'3\',\'2\'),
                
                (91,\'Поиск по сайту\',\'7\',\'1\',\'\',\'1\',\'2\'),
                (92,\'Поиск по сайту\',\'7\',\'1\',\'\',\'2\',\'2\'),
                (93,\'Поиск по сайту\',\'7\',\'1\',\'\',\'3\',\'2\'),
                
                (94,\'Фотогалереи\',\'4\',\'1\',\'\',\'1\',\'2\'),
                (95,\'Фотогалереи\',\'4\',\'1\',\'\',\'2\',\'2\'),
                (96,\'Фотогалереи\',\'4\',\'1\',\'\',\'3\',\'2\'),
                
                (97,\'Видеогалереи\',\'4\',\'1\',\'\',\'1\',\'2\'),
                (98,\'Видеогалереи\',\'4\',\'1\',\'\',\'2\',\'2\'),
                (99,\'Видеогалереи\',\'4\',\'1\',\'\',\'3\',\'2\'),
                
                (100,\'Отзывы\',\'6\',\'1\',\'\',\'1\',\'2\'),
                (101,\'Отзывы\',\'6\',\'1\',\'\',\'2\',\'2\'),
                (102,\'Отзывы\',\'6\',\'1\',\'\',\'3\',\'2\'),
                
                (103,\'Вопрос-ответ\',\'8\',\'1\',\'\',\'1\',\'2\'),
                (104,\'Вопрос-ответ\',\'8\',\'1\',\'\',\'2\',\'2\'),
                (105,\'Вопрос-ответ\',\'8\',\'1\',\'\',\'3\',\'2\'),
                
                (106,\'Импорт из CSV/xls\',\'10\',\'1\',\'\',\'1\',\'2\'),
                (107,\'Импорт из CSV/xls\',\'10\',\'1\',\'\',\'2\',\'2\'),
                (108,\'Импорт из CSV/xls\',\'10\',\'1\',\'\',\'3\',\'2\'),
                
                (109,\'Экспорт в CSV/xls\',\'10\',\'1\',\'\',\'1\',\'2\'),
                (110,\'Экспорт в CSV/xls\',\'10\',\'1\',\'\',\'2\',\'2\'),
                (111,\'Экспорт в CSV/xls\',\'10\',\'1\',\'\',\'3\',\'2\'),
                
                (112,\'Мультиязычность\',\'6\',\'1\',\'\',\'1\',\'2\'),
                (113,\'Мультиязычность\',\'6\',\'1\',\'\',\'2\',\'2\'),
                (114,\'Мультиязычность\',\'6\',\'1\',\'\',\'3\',\'2\'),
                 
                (115,\'Корзина\',\'12\',\'1\',\'\',\'3\',\'2\'), 
                
                (116,\'Оформление заказа\',\'18\',\'1\',\'\',\'3\',\'2\'), 
                
                (117,\'Личный кабинет\',\'16\',\'1\',\'\',\'3\',\'2\'), 
                
                (118,\'Профиль\',\'4\',\'1\',\'\',\'3\',\'2\'), 
                
                (119,\'История заказов\',\'8\',\'1\',\'\',\'3\',\'2\'),            
                 
                (120,\'Система скидок\',\'10\',\'1\',\'\',\'3\',\'2\'), 
                 
                (121,\'Регистрация\',\'8\',\'1\',\'\',\'3\',\'2\'),
                  
                (122,\'Авторизация\',\'4\',\'1\',\'\',\'3\',\'2\'), 
                 
                (123,\'Оонлайн оплата\',\'5\',\'1\',\'\',\'3\',\'2\'),
                  
                (124,\'Модуль доставки новой почтой\',\'6\',\'1\',\'\',\'3\',\'2\'), 
                 
                (125,\'Синхронизация с 1с\',\'20\',\'1\',\'\',\'3\',\'2\'), 
                 
                (126,\'Оформление заказа по телефону\',\'6\',\'1\',\'\',\'3\',\'2\')             
                
            ');
8.1) For patenting calculator add:
        /*
          * service_name - Наименование услуги
          * price - Цена услуги
          * registartion_urgency - Срочность регистрации (1-Обычная,2-Ускоренная,3-Срочная)
          * registartion_type - Тип ТМ (0-false-Словесная(по умолч.),1-true-Комбинированная)
          * is_partner - Показатель партнера (0-false-Cтандарт(по умолч.),1-true-Партнер)
          * class - Показатель класса (0-false-Первый класс(по умолч.),1-true-Последующие классы)
         */
        $this->addSql('INSERT INTO patenting_prices ( id , service_name , price , registartion_urgency , registartion_type , is_partner , class ) VALUES 
                   ( \'1\' , \'В цвете(Оплата збору за подання заявки на реєстрацію знака)\' , \'500\' , \'0\' , \'\' , \'\' , \'\' ),
                   ( \'2\' , \'В цвете(Оплата збору за публікацію про видачу свідоцтва)\' , \'100\' , \'0\' , \'\' , \'\' , \'\' ),
                   ( \'3\' , \'За каждый клас если больше одного заявителя\' , \'300\' , \'0\' , \'\' , \'\' , \'\' ),                   
        
                   ( \'\' , \'Оплата збору за проведення попереднього пошуку позначення на тотожність і схожість словесної частини знака\' , \'864\' , \'1\' , \'\' , \'\' , \'\' ),
                   ( \'\' , \'Оплата збору за проведення попереднього пошуку позначення на тотожність і схожість словесної частини знака\' , \'174\' , \'1\' , \'\' , \'\' , \'1\' ),
                   ( \'\' , \'Проведення попереднього пошуку позначення на тотожність і схожість\' , \'400\' , \'1\' , \'\' , \'\' , \'\' ),
                   ( \'\' , \'Оформлення і подача заявки на реєстрацію знака для товарів і послуг\' , \'1600\' , \'1\' , \'\' , \'\' , \'\' ),
                   ( \'\' , \'Оформлення і подача заявки на реєстрацію знака для товарів і послуг\' , \'100\' , \'1\' , \'\' , \'\' , \'1\' ),
                   ( \'\' , \'Оплата збору за подання заявки на реєстрацію знака\' , \'1000\' , \'1\' , \'\' , \'\' , \'\' ),
                   ( \'\' , \'Оплата збору за подання заявки на реєстрацію знака\' , \'1000\' , \'1\' , \'\' , \'\' , \'1\' ),        
                   ( \'\' , \'Мито за видачу свідоцтва\' , \'85\' , \'1\' , \'\' , \'\' , \'\' ),
                   ( \'\' , \'Оплата збору за публікацію про видачу свідоцтва\' , \'150\' , \'1\' , \'\' , \'\' , \'\' ),
                   ( \'\' , \'Оплата збору за публікацію про видачу свідоцтва\' , \'150\' , \'1\' , \'\' , \'\' , \'1\' ),
                   ( \'\' , \'Отримання свідоцтва\' , \'400\' , \'1\' , \'\' , \'\' , \'\' ),  
                                    
                   ( \'\' , \'Оплата збору за проведення попереднього пошуку позначення на тотожність і схожість словесної частини знака\' , \'864\' , \'2\' , \'\' , \'\' , \'\' ),
                   ( \'\' , \'Оплата збору за проведення попереднього пошуку позначення на тотожність і схожість словесної частини знака\' , \'174\' , \'2\' , \'\' , \'\' , \'1\' ),
                   ( \'\' , \'Проведення попереднього пошуку позначення на тотожність і схожість\' , \'400\' , \'2\' , \'\' , \'\' , \'\' ),
                   ( \'\' , \'Оформлення і подача заявки на реєстрацію знака для товарів і послуг\' , \'1600\' , \'2\' , \'\' , \'\' , \'\' ),
                   ( \'\' , \'Оформлення і подача заявки на реєстрацію знака для товарів і послуг\' , \'100\' , \'2\' , \'\' , \'\' , \'1\' ),
                   ( \'\' , \'Оплата збору за подання заявки на реєстрацію знака\' , \'1000\' , \'2\' , \'\' , \'\' , \'\' ),
                   ( \'\' , \'Оплата збору за подання заявки на реєстрацію знака\' , \'1000\' , \'2\' , \'\' , \'\' , \'1\' ),
                   ( \'\' , \'Оформлення документів на проведення прискореної процедури реєстрації\' , \'1000\' , \'2\' , \'\' , \'\' , \'\' ),
                   ( \'\' , \'Оплата збору за проведення прискореної процедури реєстрації\' , \'1746\' , \'2\' , \'\' , \'\' , \'\' ),
                   ( \'\' , \'Оплата збору за проведення прискореної процедури реєстрації\' , \'132\' , \'2\' , \'\' , \'\' , \'1\' ),
                   ( \'\' , \'Мито за видачу свідоцтва\' , \'85\' , \'2\' , \'\' , \'\' , \'\' ),
                   ( \'\' , \'Оплата збору за публікацію про видачу свідоцтва\' , \'150\' , \'2\' , \'\' , \'\' , \'\' ),
                   ( \'\' , \'Оплата збору за публікацію про видачу свідоцтва\' , \'150\' , \'2\' , \'\' , \'\' , \'1\' ),
                   ( \'\' , \'Отримання свідоцтва\' , \'400\' , \'2\' , \'\' , \'\' , \'\' ),          
                   
                   ( \'\' , \'Оплата збору за проведення попереднього пошуку позначення на тотожність і схожість словесної частини знака\' , \'864\' , \'3\' , \'\' , \'\' , \'\' ),
                   ( \'\' , \'Оплата збору за проведення попереднього пошуку позначення на тотожність і схожість словесної частини знака\' , \'174\' , \'3\' , \'\' , \'\' , \'1\' ),
                   ( \'\' , \'Проведення попереднього пошуку позначення на тотожність і схожість\' , \'400\' , \'3\' , \'\' , \'\' , \'\' ),
                   ( \'\' , \'Оформлення і подача заявки на реєстрацію знака для товарів і послуг\' , \'1600\' , \'3\' , \'\' , \'\' , \'\' ),
                   ( \'\' , \'Оформлення і подача заявки на реєстрацію знака для товарів і послуг\' , \'100\' , \'3\' , \'\' , \'\' , \'1\' ),
                   ( \'\' , \'Оплата збору за подання заявки на реєстрацію знака\' , \'1000\' , \'3\' , \'\' , \'\' , \'\' ),
                   ( \'\' , \'Оплата збору за подання заявки на реєстрацію знака\' , \'1000\' , \'3\' , \'\' , \'\' , \'1\' ),
                   ( \'\' , \'Оформлення документів на проведення термінової процедури реєстрації\' , \'1000\' , \'3\' , \'\' , \'\' , \'\' ),
                   ( \'\' , \'Оплата збору за проведення термінової процедури реєстрації\' , \'3964.5\' , \'3\' , \'\' , \'\' , \'\' ),
                   ( \'\' , \'Оплата збору за проведення термінової процедури реєстрації\' , \'392.1\' , \'3\' , \'\' , \'\' , \'1\' ),
                   ( \'\' , \'Мито за видачу свідоцтва\' , \'85\' , \'3\' , \'\' , \'\' , \'\' ),
                   ( \'\' , \'Оплата збору за публікацію про видачу свідоцтва\' , \'150\' , \'3\' , \'\' , \'\' , \'\' ),
                   ( \'\' , \'Оплата збору за публікацію про видачу свідоцтва\' , \'150\' , \'3\' , \'\' , \'\' , \'1\' ),
                   ( \'\' , \'Отримання свідоцтва\' , \'400\' , \'3\' , \'\' , \'\' , \'\' ),         
                   
                   
                   ( \'\' , \'Оплата збору за проведення попереднього пошуку позначення на тотожність і схожість  знака\' , \'1728\' , \'1\' , \'1\' , \'\' , \'\' ),
                   ( \'\' , \'Оплата збору за проведення попереднього пошуку позначення на тотожність і схожість  знака\' , \'348\' , \'1\' , \'1\' , \'\' , \'1\' ),
                   ( \'\' , \'Проведення попереднього пошуку позначення на тотожність і схожість\' , \'400\' , \'1\' , \'1\' , \'\' , \'\' ),
                   ( \'\' , \'Оформлення і подача заявки на реєстрацію знака для товарів і послуг\' , \'1600\' , \'1\' , \'1\' , \'\' , \'\' ),
                   ( \'\' , \'Оформлення і подача заявки на реєстрацію знака для товарів і послуг\' , \'100\' , \'1\' , \'1\' , \'\' , \'1\' ),
                   ( \'\' , \'Оплата збору за подання заявки на реєстрацію знака\' , \'1000\' , \'1\' , \'1\' , \'\' , \'\' ),
                   ( \'\' , \'Оплата збору за подання заявки на реєстрацію знака\' , \'1000\' , \'1\' , \'1\' , \'\' , \'1\' ),        
                   ( \'\' , \'Мито за видачу свідоцтва\' , \'85\' , \'1\' , \'1\' , \'\' , \'\' ),
                   ( \'\' , \'Оплата збору за публікацію про видачу свідоцтва\' , \'150\' , \'1\' , \'1\' , \'\' , \'\' ),
                   ( \'\' , \'Оплата збору за публікацію про видачу свідоцтва\' , \'150\' , \'1\' , \'1\' , \'\' , \'1\' ),
                   ( \'\' , \'Отримання свідоцтва\' , \'400\' , \'1\' , \'1\' , \'\' , \'\' ),
                   
                   ( \'\' , \'Оплата збору за проведення попереднього пошуку позначення на тотожність і схожість  знака\' , \'1728\' , \'2\' , \'1\' , \'\' , \'\' ),
                   ( \'\' , \'Оплата збору за проведення попереднього пошуку позначення на тотожність і схожість  знака\' , \'348\' , \'2\' , \'1\' , \'\' , \'1\' ),
                   ( \'\' , \'Проведення попереднього пошуку позначення на тотожність і схожість\' , \'400\' , \'2\' , \'1\' , \'\' , \'\' ),
                   ( \'\' , \'Оформлення і подача заявки на реєстрацію знака для товарів і послуг\' , \'1600\' , \'2\' , \'1\' , \'\' , \'\' ),
                   ( \'\' , \'Оформлення і подача заявки на реєстрацію знака для товарів і послуг\' , \'100\' , \'2\' , \'1\' , \'\' , \'1\' ),
                   ( \'\' , \'Оплата збору за подання заявки на реєстрацію знака\' , \'1000\' , \'2\' , \'1\' , \'\' , \'\' ),
                   ( \'\' , \'Оплата збору за подання заявки на реєстрацію знака\' , \'1000\' , \'2\' , \'1\' , \'\' , \'1\' ),
                   ( \'\' , \'Оформлення документів на проведення прискореної процедури реєстрації\' , \'1000\' , \'2\' , \'1\' , \'\' , \'\' ),
                   ( \'\' , \'Оплата збору за проведення прискореної процедури реєстрації\' , \'2970\' , \'2\' , \'1\' , \'\' , \'\' ),
                   ( \'\' , \'Оплата збору за проведення прискореної процедури реєстрації\' , \'132\' , \'2\' , \'1\' , \'\' , \'1\' ),
                   ( \'\' , \'Мито за видачу свідоцтва\' , \'85\' , \'2\' , \'1\' , \'\' , \'\' ),
                   ( \'\' , \'Оплата збору за публікацію про видачу свідоцтва\' , \'150\' , \'2\' , \'1\' , \'\' , \'\' ),
                   ( \'\' , \'Оплата збору за публікацію про видачу свідоцтва\' , \'150\' , \'2\' , \'1\' , \'\' , \'1\' ),
                   ( \'\' , \'Отримання свідоцтва\' , \'400\' , \'2\' , \'1\' , \'\' , \'\' ),          
                   
                   ( \'\' , \'Оплата збору за проведення попереднього пошуку позначення на тотожність і схожість  знака\' , \'1728\' , \'3\' , \'1\' , \'\' , \'\' ),
                   ( \'\' , \'Оплата збору за проведення попереднього пошуку позначення на тотожність і схожість  знака\' , \'348\' , \'3\' , \'1\' , \'\' , \'1\' ),
                   ( \'\' , \'Проведення попереднього пошуку позначення на тотожність і схожість\' , \'400\' , \'3\' , \'1\' , \'\' , \'\' ),
                   ( \'\' , \'Оформлення і подача заявки на реєстрацію знака для товарів і послуг\' , \'1600\' , \'3\' , \'1\' , \'\' , \'\' ),
                   ( \'\' , \'Оформлення і подача заявки на реєстрацію знака для товарів і послуг\' , \'100\' , \'3\' , \'1\' , \'\' , \'1\' ),
                   ( \'\' , \'Оплата збору за подання заявки на реєстрацію знака\' , \'1000\' , \'3\' , \'1\' , \'\' , \'\' ),
                   ( \'\' , \'Оплата збору за подання заявки на реєстрацію знака\' , \'1000\' , \'3\' , \'1\' , \'\' , \'1\' ),
                   ( \'\' , \'Оформлення документів на проведення термінової процедури реєстрації\' , \'1000\' , \'3\' , \'1\' , \'\' , \'\' ),
                   ( \'\' , \'Оплата збору за проведення термінової процедури реєстрації\' , \'6963.3\' , \'3\' , \'1\' , \'\' , \'\' ),
                   ( \'\' , \'Оплата збору за проведення термінової процедури реєстрації\' , \'540\' , \'3\' , \'1\' , \'\' , \'1\' ),
                   ( \'\' , \'Мито за видачу свідоцтва\' , \'85\' , \'3\' , \'1\' , \'\' , \'\' ),
                   ( \'\' , \'Оплата збору за публікацію про видачу свідоцтва\' , \'150\' , \'3\' , \'1\' , \'\' , \'\' ),
                   ( \'\' , \'Оплата збору за публікацію про видачу свідоцтва\' , \'150\' , \'3\' , \'1\' , \'\' , \'1\' ),
                   ( \'\' , \'Отримання свідоцтва\' , \'400\' , \'3\' , \'1\' , \'\' , \'\' ),
                   
                   
                             
                   
                   
                   
                   ( \'\' , \'Оплата збору за проведення попереднього пошуку позначення на тотожність і схожість словесної частини знака\' , \'864\' , \'1\' , \'\' , \'1\' , \'\' ),
                   ( \'\' , \'Оплата збору за проведення попереднього пошуку позначення на тотожність і схожість словесної частини знака\' , \'174\' , \'1\' , \'\' , \'1\' , \'1\' ),
                   ( \'\' , \'Проведення попереднього пошуку позначення на тотожність і схожість\' , \'300\' , \'1\' , \'\' , \'1\' , \'\' ),
                   ( \'\' , \'Оформлення і подача заявки на реєстрацію знака для товарів і послуг\' , \'1200\' , \'1\' , \'\' , \'1\' , \'\' ),
                   ( \'\' , \'Оформлення і подача заявки на реєстрацію знака для товарів і послуг\' , \'100\' , \'1\' , \'\' , \'1\' , \'1\' ),
                   ( \'\' , \'Оплата збору за подання заявки на реєстрацію знака\' , \'1000\' , \'1\' , \'\' , \'1\' , \'\' ),
                   ( \'\' , \'Оплата збору за подання заявки на реєстрацію знака\' , \'1000\' , \'1\' , \'\' , \'1\' , \'1\' ),        
                   ( \'\' , \'Мито за видачу свідоцтва\' , \'85\' , \'1\' , \'\' , \'1\' , \'\' ),
                   ( \'\' , \'Оплата збору за публікацію про видачу свідоцтва\' , \'150\' , \'1\' , \'\' , \'1\' , \'\' ),
                   ( \'\' , \'Оплата збору за публікацію про видачу свідоцтва\' , \'150\' , \'1\' , \'\' , \'1\' , \'1\' ),
                   ( \'\' , \'Отримання свідоцтва\' , \'300\' , \'1\' , \'\' , \'1\' , \'\' ),
                   
                   ( \'\' , \'Оплата збору за проведення попереднього пошуку позначення на тотожність і схожість словесної частини знака\' , \'864\' , \'2\' , \'\' , \'1\' , \'\' ),
                   ( \'\' , \'Оплата збору за проведення попереднього пошуку позначення на тотожність і схожість словесної частини знака\' , \'174\' , \'2\' , \'\' , \'1\' , \'1\' ),
                   ( \'\' , \'Проведення попереднього пошуку позначення на тотожність і схожість\' , \'300\' , \'2\' , \'\' , \'1\' , \'\' ),
                   ( \'\' , \'Оформлення і подача заявки на реєстрацію знака для товарів і послуг\' , \'1200\' , \'2\' , \'\' , \'1\' , \'\' ),
                   ( \'\' , \'Оформлення і подача заявки на реєстрацію знака для товарів і послуг\' , \'100\' , \'2\' , \'\' , \'1\' , \'1\' ),
                   ( \'\' , \'Оплата збору за подання заявки на реєстрацію знака\' , \'1000\' , \'2\' , \'\' , \'1\' , \'\' ),
                   ( \'\' , \'Оплата збору за подання заявки на реєстрацію знака\' , \'1000\' , \'2\' , \'\' , \'1\' , \'1\' ),
                   ( \'\' , \'Оформлення документів на проведення прискореної процедури реєстрації\' , \'1000\' , \'2\' , \'\' , \'1\' , \'\' ),
                   ( \'\' , \'Оплата збору за проведення прискореної процедури реєстрації\' , \'1746\' , \'2\' , \'\' , \'1\' , \'\' ),
                   ( \'\' , \'Оплата збору за проведення прискореної процедури реєстрації\' , \'132\' , \'2\' , \'\' , \'1\' , \'1\' ),
                   ( \'\' , \'Мито за видачу свідоцтва\' , \'85\' , \'2\' , \'\' , \'1\' , \'\' ),
                   ( \'\' , \'Оплата збору за публікацію про видачу свідоцтва\' , \'150\' , \'2\' , \'\' , \'1\' , \'\' ),
                   ( \'\' , \'Оплата збору за публікацію про видачу свідоцтва\' , \'150\' , \'2\' , \'\' , \'1\' , \'1\' ),
                   ( \'\' , \'Отримання свідоцтва\' , \'300\' , \'2\' , \'\' , \'1\' , \'\' ),          
                   
                   ( \'\' , \'Оплата збору за проведення попереднього пошуку позначення на тотожність і схожість словесної частини знака\' , \'864\' , \'3\' , \'\' , \'1\' , \'\' ),
                   ( \'\' , \'Оплата збору за проведення попереднього пошуку позначення на тотожність і схожість словесної частини знака\' , \'174\' , \'3\' , \'\' , \'1\' , \'1\' ),
                   ( \'\' , \'Проведення попереднього пошуку позначення на тотожність і схожість\' , \'400\' , \'3\' , \'\' , \'1\' , \'\' ),
                   ( \'\' , \'Оформлення і подача заявки на реєстрацію знака для товарів і послуг\' , \'1600\' , \'3\' , \'\' , \'1\' , \'\' ),
                   ( \'\' , \'Оформлення і подача заявки на реєстрацію знака для товарів і послуг\' , \'100\' , \'3\' , \'\' , \'1\' , \'1\' ),
                   ( \'\' , \'Оплата збору за подання заявки на реєстрацію знака\' , \'1000\' , \'3\' , \'\' , \'1\' , \'\' ),
                   ( \'\' , \'Оплата збору за подання заявки на реєстрацію знака\' , \'1000\' , \'3\' , \'\' , \'1\' , \'1\' ),
                   ( \'\' , \'Оформлення документів на проведення термінової процедури реєстрації\' , \'1000\' , \'3\' , \'\' , \'1\' , \'\' ),
                   ( \'\' , \'Оплата збору за проведення термінової процедури реєстрації\' , \'3964.5\' , \'3\' , \'\' , \'1\' , \'\' ),
                   ( \'\' , \'Оплата збору за проведення термінової процедури реєстрації\' , \'392.1\' , \'3\' , \'\' , \'1\' , \'1\' ),
                   ( \'\' , \'Мито за видачу свідоцтва\' , \'85\' , \'3\' , \'\' , \'1\' , \'\' ),
                   ( \'\' , \'Оплата збору за публікацію про видачу свідоцтва\' , \'150\' , \'3\' , \'\' , \'1\' , \'\' ),
                   ( \'\' , \'Оплата збору за публікацію про видачу свідоцтва\' , \'150\' , \'3\' , \'\' , \'1\' , \'1\' ),
                   ( \'\' , \'Отримання свідоцтва\' , \'400\' , \'3\' , \'\' , \'1\' , \'\' ),         
                   
                   
                   ( \'\' , \'Оплата збору за проведення попереднього пошуку позначення на тотожність і схожість  знака\' , \'1728\' , \'1\' , \'1\' , \'1\' , \'\' ),
                   ( \'\' , \'Оплата збору за проведення попереднього пошуку позначення на тотожність і схожість  знака\' , \'348\' , \'1\' , \'1\' , \'1\' , \'1\' ),
                   ( \'\' , \'Проведення попереднього пошуку позначення на тотожність і схожість\' , \'400\' , \'1\' , \'1\' , \'1\' , \'\' ),
                   ( \'\' , \'Оформлення і подача заявки на реєстрацію знака для товарів і послуг\' , \'1600\' , \'1\' , \'1\' , \'1\' , \'\' ),
                   ( \'\' , \'Оформлення і подача заявки на реєстрацію знака для товарів і послуг\' , \'100\' , \'1\' , \'1\' , \'1\' , \'1\' ),
                   ( \'\' , \'Оплата збору за подання заявки на реєстрацію знака\' , \'1000\' , \'1\' , \'1\' , \'1\' , \'\' ),
                   ( \'\' , \'Оплата збору за подання заявки на реєстрацію знака\' , \'1000\' , \'1\' , \'1\' , \'1\' , \'1\' ),        
                   ( \'\' , \'Мито за видачу свідоцтва\' , \'85\' , \'1\' , \'1\' , \'1\' , \'\' ),
                   ( \'\' , \'Оплата збору за публікацію про видачу свідоцтва\' , \'150\' , \'1\' , \'1\' , \'1\' , \'\' ),
                   ( \'\' , \'Оплата збору за публікацію про видачу свідоцтва\' , \'150\' , \'1\' , \'1\' , \'1\' , \'1\' ),
                   ( \'\' , \'Отримання свідоцтва\' , \'400\' , \'1\' , \'1\' , \'1\' , \'\' ),
                   
                   ( \'\' , \'Оплата збору за проведення попереднього пошуку позначення на тотожність і схожість  знака\' , \'1728\' , \'2\' , \'1\' , \'1\' , \'\' ),
                   ( \'\' , \'Оплата збору за проведення попереднього пошуку позначення на тотожність і схожість  знака\' , \'348\' , \'2\' , \'1\' , \'1\' , \'1\' ),
                   ( \'\' , \'Проведення попереднього пошуку позначення на тотожність і схожість\' , \'400\' , \'2\' , \'1\' , \'1\' , \'\' ),
                   ( \'\' , \'Оформлення і подача заявки на реєстрацію знака для товарів і послуг\' , \'1600\' , \'2\' , \'1\' , \'1\' , \'\' ),
                   ( \'\' , \'Оформлення і подача заявки на реєстрацію знака для товарів і послуг\' , \'100\' , \'2\' , \'1\' , \'1\' , \'1\' ),
                   ( \'\' , \'Оплата збору за подання заявки на реєстрацію знака\' , \'1000\' , \'2\' , \'1\' , \'1\' , \'\' ),
                   ( \'\' , \'Оплата збору за подання заявки на реєстрацію знака\' , \'1000\' , \'2\' , \'1\' , \'1\' , \'1\' ),
                   ( \'\' , \'Оформлення документів на проведення прискореної процедури реєстрації\' , \'1000\' , \'2\' , \'1\' , \'1\' , \'\' ),
                   ( \'\' , \'Оплата збору за проведення прискореної процедури реєстрації\' , \'2970\' , \'2\' , \'1\' , \'1\' , \'\' ),
                   ( \'\' , \'Оплата збору за проведення прискореної процедури реєстрації\' , \'132\' , \'2\' , \'1\' , \'1\' , \'1\' ),
                   ( \'\' , \'Мито за видачу свідоцтва\' , \'85\' , \'2\' , \'1\' , \'1\' , \'\' ),
                   ( \'\' , \'Оплата збору за публікацію про видачу свідоцтва\' , \'150\' , \'2\' , \'1\' , \'1\' , \'\' ),
                   ( \'\' , \'Оплата збору за публікацію про видачу свідоцтва\' , \'150\' , \'2\' , \'1\' , \'1\' , \'1\' ),
                   ( \'\' , \'Отримання свідоцтва\' , \'400\' , \'2\' , \'1\' , \'1\' , \'\' ),          
                   
                   ( \'\' , \'Оплата збору за проведення попереднього пошуку позначення на тотожність і схожість  знака\' , \'1728\' , \'3\' , \'1\' , \'1\' , \'\' ),
                   ( \'\' , \'Оплата збору за проведення попереднього пошуку позначення на тотожність і схожість  знака\' , \'348\' , \'3\' , \'1\' , \'1\' , \'1\' ),
                   ( \'\' , \'Проведення попереднього пошуку позначення на тотожність і схожість\' , \'400\' , \'3\' , \'1\' , \'1\' , \'\' ),
                   ( \'\' , \'Оформлення і подача заявки на реєстрацію знака для товарів і послуг\' , \'1600\' , \'3\' , \'1\' , \'1\' , \'\' ),
                   ( \'\' , \'Оформлення і подача заявки на реєстрацію знака для товарів і послуг\' , \'100\' , \'3\' , \'1\' , \'1\' , \'1\' ),
                   ( \'\' , \'Оплата збору за подання заявки на реєстрацію знака\' , \'1000\' , \'3\' , \'1\' , \'1\' , \'\' ),
                   ( \'\' , \'Оплата збору за подання заявки на реєстрацію знака\' , \'1000\' , \'3\' , \'1\' , \'1\' , \'1\' ),
                   ( \'\' , \'Оформлення документів на проведення термінової процедури реєстрації\' , \'1000\' , \'3\' , \'1\' , \'1\' , \'\' ),
                   ( \'\' , \'Оплата збору за проведення термінової процедури реєстрації\' , \'6963.3\' , \'3\' , \'1\' , \'1\' , \'\' ),
                   ( \'\' , \'Оплата збору за проведення термінової процедури реєстрації\' , \'540\' , \'3\' , \'1\' , \'1\' , \'1\' ),
                   ( \'\' , \'Мито за видачу свідоцтва\' , \'85\' , \'3\' , \'1\' , \'1\' , \'\' ),
                   ( \'\' , \'Оплата збору за публікацію про видачу свідоцтва\' , \'150\' , \'3\' , \'1\' , \'1\' , \'\' ),
                   ( \'\' , \'Оплата збору за публікацію про видачу свідоцтва\' , \'150\' , \'3\' , \'1\' , \'1\' , \'1\' ),
                   ( \'\' , \'Отримання свідоцтва\' , \'400\' , \'3\' , \'1\' , \'1\' , \'\' )
                   
            ');                  
           
9) Fill the base by default data with command:
    php bin/console doctrine:migrations:migrate