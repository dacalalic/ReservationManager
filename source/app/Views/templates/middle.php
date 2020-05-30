<div class="container">
    <img id="img" src="<?= base_url() ?>/images/image3.jpg" width="100%" height="350px" />
    <button onclick="startTimer()"> Pomeri </button>
    <div class = "row">
        <div class="col-sm-6" style="border-right: 2px solid black; border-top: 4px solid black">
            <div class="row">
                <h3>Napravljene rezervacije </h3>
            </div>
            <div class="row">
                <p> Pojasnjenje kako se pravi rezervacija 
                    aaaaa aaaaaaaaaaaaaa aaaaaaaaaaaaaaa aaaaaaaaaaaaaa
                    aaaaaaaaaa aaaaaaa </p>
            </div>
            <div class="row">
                <img id="img" src="<?= base_url() ?>/images/stolovi.PNG" width="700px" height="200px" style="padding-left: 1.5cm; padding-bottom: 1cm" />
            </div>
        </div>
        <div class="col-sm-6" style="border-left: 2px solid black; border-top: 4px solid black">
            <div class="row">
                <h3> Pregled rezervacije </h3>
            </div>
            <div class="row">
                <p> Pojasnjenje kako se pravi rezervacija 
                    aaaaa aaaaaaaaaaaaaa aaaaaaaaaaaaaaa aaaaaaaaaaaaaa
                    aaaaaaaaaa aaaaaaa </p>
            </div>
            <div class="row">
                <img id="img" src="<?= base_url() ?>/images/stolovi.PNG" width="700px" height="200px" style="padding-left: 1.5cm; padding-bottom: 1cm" />
            </div>
        </div>
    </div>
</div>
<script type = "text/javascript">
    function displayNextImage() {
        x = (x === images.length - 1) ? 0 : x + 1;
        document.getElementById("img").src = images[x];
    }

    function startTimer() {
        setInterval(displayNextImage, 4000);
    }

    var images = [], x = -1;
    images[0] = "<?= base_url() ?>/images/image1.jpg";
    images[1] = "<?= base_url() ?>/images/image2.jpg";
    images[2] = "<?= base_url() ?>/images/image3.jpg";
</script>