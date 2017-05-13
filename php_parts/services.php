<?php
$services = array(
    new Service('Aquecedores',           'aquecedores-min.png'),
    new Service('Medidor de Gás',        'medidor_gas-min.jpg'),
    new Service('Pressurizador de Água', 'pressurizador_agua-min.jpg'),
    new Service('Mini-bombas',           'pressurizador-min.jpg'),
    new Service('Central de gás',        'central_gas-min.jpg'),
    new Service('Chuveiro',              'chuveiro-min.jpg'),
    new Service('Fogão',                 'fogao-min.jpg'),
    new Service('Tubulação de gás',      'tubulacao-min.jpg'),
    new Service('Torneira',              'torneiras-min.jpg')
);
?>


<?php
foreach($services as &$service) {
?>

<div class="col-md-4 col-sm-6 portfolio-item">
    <div class="portfolio-caption">
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