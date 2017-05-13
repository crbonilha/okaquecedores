<?php
$services = array(
    new Service('Kit Chaminé',                               'chamine-min.jpg'),
    new Service('Kit Flexível',                              'flexivel-min.jpg'),
    new Service('Registro de parede e Mangueira para fogão', 'registro_parede-min.jpg'),
    new Service('Regulador de gás',                          'regulador_gas2-min.jpg')
);
?>


<?php
foreach($services as &$service) {
?>

<div class="col-md-4 col-sm-6 portfolio-item">
    <div class="portfolio-caption" style="background-color: #eee;">
        <h4><?php echo $service -> name; ?></h4>
    </div>
    <a class="portfolio-link" data-toggle="modal">
        <div class="portfolio-hover">
            <div class="portfolio-hover-content">
            </div>
        </div>
        <img src="img/services/<?php echo $service -> img; ?>" class="img-responsive" alt="">
    </a>
</div>

<?php
}
?>