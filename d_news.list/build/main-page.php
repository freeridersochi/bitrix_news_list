<?

//get card data from db and transform in format like this

$cards = [
    0 => [
        'card_link' => 'for-individuals.html',
        'card_img' => 'images/article-item-bg-6.jpg',
        'card_src_data' => 'xxxHTMLLINKxxx0.39186223192351520.41491856731872767xxx',    
        'card_title' => 'Для физических лиц',
        'card_desc' => 'Лучшие решения для вашего дома: быстрый интернет, доступное кабельное&nbsp;TV,
        удобный домашний телефон' 
    ],
    1 => [
        'card_link' => '#',
        'card_img' => 'images/article-item-bg-3.jpg',
        'card_src_data' => 'xxxHTMLLINKxxx0.153709056148504830.8920151245249737xxx',    
        'card_title' => 'Средний и малый бизнес',
        'card_desc' => 'Быстро и&nbsp;качественно помогаем предпринимателям в&nbsp;решении
        бизнес-задач' 
    ],
    2 => [
        'card_link' => 'for-state.html',
        'card_img' => 'images/article-item-bg-4.jpg',
        'card_src_data' => 'xxxHTMLLINKxxx0.83331501539025420.9635873669140569xxx',    
        'card_title' => 'Государственные заказчики',
        'card_desc' => 'Решения для государственных структур, повышение безопасности и&nbsp;комфорта
        городской среды' 
    ],
    3 => [
        'card_link' => 'for-federals.html',
        'card_img' => 'images/article-item-bg-5.jpg"',
        'card_src_data' => 'xxxHTMLLINKxxx0.274858315149753230.570917169144997xxx',    
        'card_title' => 'Федеральные клиенты',
        'card_desc' => 'Повышаем эффективность бизнес-процессов за&nbsp;счет внедрения
        современных средств передачи и&nbsp;защиты данных' 
    ],
    4 => [
        'card_link' => 'for-telecommunications.html',
        'card_img' => 'images/article-item-bg-2.jpg',
        'card_src_data' => 'xxxHTMLLINKxxx0.4314468597192560.505419651272456xxx',    
        'card_title' => 'Операторы связи',
        'card_desc' => 'Предлагаем партнерство и&nbsp;взаимовыгодное сотрудничество' 
    ],
    5 => [
        'card_link' => 'innovative-projects.html',
        'card_img' => 'images/article-item-bg-1.jpg',
        'card_src_data' => 'xxxHTMLLINKxxx0.2544727135416540.7321213588928357xxx',    
        'card_title' => 'Инновационные проекты',
        'card_desc' => 'Предоставляем услуги широкополосного доступа в&nbsp;интернет и&nbsp;комплексные
        решения на&nbsp;базе технологий промышленного интернета вещей (IoT)' 
    ]
];

?>

<!DOCTYPE html>
<html lang="ru">
<head><title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="shortcut icon" href="images/favicon.604825ed.ico" type="image/x-icon">
    <link href="css/common.css" rel="stylesheet">
</head>
<body>
<!-- create card dinamic  -->
    <div id="barba-wrapper">
        <div class="article-list">
        <?
            for( $i = 0; $i < count($cards); $i++ ){
                print_r ('
                <!-- card '. (intval($i) + 1 ) . '-->
                <a class="article-item article-list__item" 
                href="'.$cards[$i]['card_link'].'" 
                data-anim="anim-3">
                <div class="article-item__background">
                    <img src="'.$cards[$i]['card_img'].'"
                        data-src="'.$cards[$i]['card_src_data'].'"
                        alt=""/>
                </div>
                <div class="article-item__wrapper">
                    <div class="article-item__title">'.$cards[$i]['card_title'].'</div>
                    <div class="article-item__content">'.$cards[$i]['card_desc'].'</div>
                </div>
                </a>');
            }
        ?>
        </div>
    </div>
</body>
</html>
