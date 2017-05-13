<?php
$services = array(
    new Service('Aquecedores',           'aquecedores.png'),
    new Service('Medidor de Gás',        'medidor_gas.jpg'),
    new Service('Pressurizador de Água', 'pressurizador_agua.jpg'),
    new Service('Mini-bombas',           'pressurizador.jpg'),
    new Service('Central de gás',        'central_gas.jpg'),
    new Service('Chuveiro',              'chuveiro.jpg'),
    new Service('Fogão',                 'fogao.jpg'),
    new Service('Tubulação de gás',      'tubulacao.jpg'),
    new Service('Torneira',              'torneiras.jpg')
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