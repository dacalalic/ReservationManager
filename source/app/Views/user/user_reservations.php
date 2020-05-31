<div class="container" style="padding: 1cm">
    <h1 style="text-align: center;">MY RESERVATIONS</h1>
    <div class="row justify-content-center">
        <div class="col-12" style="padding: 1cm">
            <?php
            $num = count($reservations);
            for ($i = 0; $i < $num; $i++) {
                ?>
            <div class="card">
                    <div class="card-body">
                        <?php
                            $message = $services[$i].str_repeat("&nbsp", 8)." Point: ".$reservations[$i]["PointId"].str_repeat("&nbsp", 8)." Date and time: ";
                            $dateTime = new DateTime();
                            $dateTime->setTimestamp($reservations[$i]["Time"]);
                            $dateTime = $dateTime->format("m/d/Y H:i");
                            $message = $message.$dateTime;
                            echo $message;
                        ?>
                    </div>
                </div>
      <?php } ?>
        </div>
    </div>
</div>