<?php
$services = array(
    new Service('', 'manutencao_1-min.jpg'),
    new Service('', 'manutencao_2-min.jpg'),
);
?>


<?php
foreach($services as &$service) {
?>

<div class="col-md-6 col-sm-6 portfolio-item">
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