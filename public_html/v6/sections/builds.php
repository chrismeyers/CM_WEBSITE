<div data-section-name="builds">
    <div class="section-header section-header-size">Builds</div>

    <div class="content-text">
    <?php
        include 'scripts/php/db_connect.php';
        $con = DatabaseConnection::connect();

        $result = mysqli_query($con, "SELECT * FROM `builds`");

        for($i = 1; $i <= mysqli_num_rows($result); $i++) {
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $date = $row["date"];
            $proc = $row["proc"];
            $cool = $row["cool"];
            $mobo = $row["mobo"];
            $ram = $row["ram"];
            $hdd = $row["hdd"];
            $ssd = $row["ssd"];
            $vid = $row["vid"];
            $abbrev = $row["abbrev"];

            $images = mysqli_query($con, "SELECT * FROM `builds_images` WHERE abbrev = '" . $abbrev . "'");
            $image = mysqli_fetch_array($images, MYSQLI_ASSOC);

            $url = $image["url"];
            $title = $image["title"];
            $orient = $image["orient"];

            echo "<div class='build'>";
                if($i == 1) {
                    echo "<h2 class='first-header'>" . $date . "</h2>";
                }
                else {
                    echo "<h2>" . $date . "</h2>";
                }
                echo "<div class='build-info'>
                        <div class='build-specs'>
                            <dl>
                                <dt class='dt-mod'><b>Processor:</b></dt>
                                    <dd>" . $proc . "</dd>";
                                if($cool != NULL) {
                                    echo "<dt class='dt-mod'><b>Cooling:</b></dt>
                                        <dd>" . $cool . "</dd>";
                                }
                                echo "<dt class='dt-mod'><b>Mobo:</b></dt>
                                    <dd>" . $mobo . "</dd>
                                <dt class='dt-mod'><b>Memory:</b></dt>
                                    <dd>" . $ram . "</dd>
                                <dt class='dt-mod'><b>HDD:</b></dt>
                                    <dd>" . $hdd . "</dd>";
                                if($ssd != NULL) {
                                    echo "<dt class='dt-mod'><b>SSD:</b></dt>
                                        <dd>" . $ssd . "</dd>";
                                }
                                echo "<dt class='dt-mod'><b>Video Card:</b></dt>
                                    <dd>" . $vid . "</dd>
                            </dl>
                        </div>
                        <div class='build-pic'>
                            <a href='" . $url . "' class='no-decoration no-outline' data-fancybox='gallery_build_" . $i . "' title='" . $title . "'>
                                <img src='" . $url . "'
                                     class='build-pic-img-" . $orient . "'
                                     alt='" . $title . "'
                                     title='Click to enlarge'>
                            </a>
                        </div>
                    </div>
                </div>";

                if($i != mysqli_num_rows($result)) {
                    echo "<br /> <hr>";
                }
            }
        ?>
        
    </div>
</div>
