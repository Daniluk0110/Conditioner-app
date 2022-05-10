@extends('website.layouts.main')

@section('content')
    <section class="blog_single">
        <div class="blog_single__wrapper">
            <div class="container">
                <div class="blog_single__content">
                    <h1>Монтаж</h1>
                    <p class="paragraph dark">Вы купили новенький кондиционер и предвкушаете
                        каким чудесным будет микроклимат вашего дома. <br>
                        Вы привезли его домой, установили, но почему-то
                        кондиционер не работает. В чем причина? <br>
                        Казалось бы, что кондиционер, как разновидность климатической техники, довольно
                        прост и обычен, но все есть еще много моментов, которые нельзя упускать. <br>
                        Прежде всего, правильная установка.
                    </p>
                    <div class="blog_hero">
                        <div class="icon">
                            <i class="fad fa-screwdriver"></i>
                        </div>
                        <div class="icon">
                            <i class="fad fa-hammer"></i>
                        </div>
                        <div class="icon">
                            <i class="fad fa-wrench"></i>
                        </div>
                    </div>
                    <h3 class="pt-3">Зачем нужна квалифицированная установка?</h3>
                    <p class="paragraph dark">Для того, чтобы кондиционер выполнял
                        все заявленные производителем функции,
                        нужна установка квалифицированным наладчиком. При покупке кондиционера у нас, мы советуем
                        сразу же заказывать услугу монтаж кондиционера в Барановичах и Регионах.</p>
                    <h3>Услуги монтажа магазина</h3>
                    <p class="paragraph dark">Мы предоставляем услуги монтажа кондиционеров любого типа, в том
                        числе:</p>
                    <ul class="paragraph dark">
                        <li><b>- монтаж настенных сплит систем</b></li>
                        <li><b>- монтаж канальных кондиционеров</b></li>
                        <li><b>- монтаж кассетных кондиционеров</b></li>
                    </ul>
                    <p class="paragraph dark">При заказе услуги монтаж кондиционера, мы бесплатно доставляем покупку в
                        любую точку Барановичей или ближайших населённых пунктов за счет компании.</p>
                    <p class="paragraph dark">Минимальная стоимость установки кондиционера – <b>310 рублей.</b></p>
                    <h3>Прайс лист на стандартный монтаж кондиционера, приобретенногоу нас:</h3>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col"><p class="paragraph dark">#</p></th>
                            <th scope="col"><p class="paragraph dark">стандартный монтаж</p></th>
                            <th scope="col"><p class="paragraph dark">в один этап</p></th>
                            <th scope="col"><p class="paragraph dark">в два этапа</p></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row"><p class="paragraph dark">1</p></th>
                            <td><p class="paragraph dark">Настенный кондиционер до 3,0 кВт</p></td>
                            <td><p class="paragraph dark">310 руб.</p></td>
                            <td><p class="paragraph dark">360 руб.</p></td>
                        </tr>
                        <tr>
                            <th scope="row"><p class="paragraph dark">2</p></th>
                            <td><p class="paragraph dark">Настенный кондиционер до 6,0 кВт</p></td>
                            <td><p class="paragraph dark">390 руб.</p></td>
                            <td><p class="paragraph dark">460 руб.</p></td>
                        </tr>
                        <tr>
                            <th scope="row"><p class="paragraph dark">3</p></th>
                            <td><p class="paragraph dark">Настенный кондиционер до 8,5 кВт</p></td>
                            <td><p class="paragraph dark">650 руб.</p></td>
                            <td><p class="paragraph dark">780 руб.</p></td>
                        </tr>
                        </tbody>
                    </table>
                    <p class="paragraph dark">В цену уже включены расходные материалы*</p>
                    <figure>
                        <a class="d-block mb-4" data-fancybox="images"
                           href="{{ asset('website/images/IMG_1681-min.JPG') }}" data-width="1279" data-height="853">
                            <img class="img-fluid" src="{{ asset('website/images/shema.png') }}">
                        </a>
                    </figure>
                    <h4>При монтаже кондиционера, приобретенного не
                        у нас, цена увеличивается на 50 руб.</h4>
                    <br>
                    <h3>Стандартный монтаж включает в себя:</h3>
                    <br>
                    <ol class="paragraph dark">
                        <li><p class="paragraph dark"> Кронштейны для внешнего блока, для крепления на стену.</p></li>
                        <li><p class="paragraph dark">Межблочная трасса до 5м (медные фреоновые трубы).</p></li>
                        <li><p class="paragraph dark">Теплоизолятор для фреоновых труб.</p></li>
                        <li><p class="paragraph dark">Кабель межблочный.</p></li>
                        <li><p class="paragraph dark">Кабель до розетки или автомата, 2м.</p></li>
                        <li><p class="paragraph dark">Декоротивный короб 1м.</p></li>
                        <li><p class="paragraph dark">Дренажный шланг.</p></li>
                    </ol>
                    <h3>Цены на дополнительные работы при монтаже кондиционера</h3>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col"><p class="paragraph dark">№</p></th>
                            <th scope="col"><p class="paragraph dark">Наименование работ</p></th>
                            <th scope="col"><p class="paragraph dark">Цена, бел. руб</p></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row"><p class="paragraph dark">1</p></th>
                            <td>
                                <p class="paragraph dark">
                                    Дополнительный метр трассы (свыше 5 м) для кондиционера
                                    мощностью 07-09 (20-26 м2)
                                </p></td>
                            <td><p class="paragraph dark">25</p></td>
                        </tr>
                        <tr>
                            <th scope="row"><p class="paragraph dark">2</p></th>
                            <td><p class="paragraph dark">Дополнительный метр трассы (свыше 5 м)  для кондиционера мощностью 12-15-16 (35-45 м2)</p></td>
                            <td><p class="paragraph dark">35</p></td>
                        </tr>
                        <tr>
                            <th scope="row"><p class="paragraph dark">3</p></th>
                            <td><p class="paragraph dark">Дополнительный метр трассы (свыше 5 м)  для кондиционера мощностью 18-21-22 (50 - 65м2)</p></td>
                            <td><p class="paragraph dark">45</p></td>
                        </tr>
                        <tr>
                            <th scope="row"><p class="paragraph dark">4</p></th>
                            <td><p class="paragraph dark">Дополнительный метр трассы (свыше 5 м)  для кондиционера мощностью 24 (70 м2)</p></td>
                            <td><p class="paragraph dark">55</p></td>
                        </tr>
                        <tr>
                            <th scope="row"><p class="paragraph dark">5</p></th>
                            <td><p class="paragraph dark">Дополнительное сверление (например, при наличии балкона-лоджии) </p></td>
                            <td><p class="paragraph dark">35</p></td>
                        </tr>
                        <tr>
                            <th scope="row"><p class="paragraph dark">6</p></th>
                            <td><p class="paragraph dark">Дополнительный метр декоративного короба (свыше 1м)</p></td>
                            <td><p class="paragraph dark">10</p></td>
                        </tr>
                        <tr>
                            <th scope="row"><p class="paragraph dark">7</p></th>
                            <td><p class="paragraph dark">Штробление 1м (пеноблок, шлакоблок,кирпич) </p></td>
                            <td><p class="paragraph dark">15</p></td>
                        </tr>
                        <tr>
                            <th scope="row"><p class="paragraph dark">8</p></th>
                            <td><p class="paragraph dark">Штробление 1м (бетон)</p></td>
                            <td><p class="paragraph dark">35</p></td>
                        </tr>
                        <tr>
                            <th scope="row"><p class="paragraph dark">9</p></th>
                            <td><p class="paragraph dark">Штробление 1м (железобетон)</p></td>
                            <td><p class="paragraph dark">55</p></td>
                        </tr>
                        <tr>
                            <th scope="row"><p class="paragraph dark">10</p></th>
                            <td><p class="paragraph dark">Дренажная помпа с установкой</p></td>
                            <td><p class="paragraph dark">160</p></td>
                        </tr>
                        <tr>
                            <th scope="row"><p class="paragraph dark">11</p></th>
                            <td><p class="paragraph dark">Антивандальная решетка с установкой для кондиционера мощностью 07-12 (20-35 м2)</p></td>
                            <td><p class="paragraph dark">140</p></td>
                        </tr>
                        </tbody>
                    </table>
                    <p class="paragraph dark"></p>
                    <p class="paragraph dark"></p>
                </div>
            </div>
        </div>
    </section>
@endsection
