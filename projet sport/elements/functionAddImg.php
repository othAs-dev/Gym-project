<?php 
function addImage (string $img_fluide, string $img_url, $numbersImg = 7) :void
    {for ($i = 1 ; $i < $numbersImg; $i++){
    echo <<<HTML
    
    <div class="col-2 p-0 coach">
        <img class="$img_fluide" src="$img_url.jpg" alt="">
    </div>
    
HTML;
    }
    }
?>

<?php 
    function addLinks(string $class_items, string $class_links, string $links_urls, string $title) : string{
        return <<<HTML
            <li class="$class_items">
                <a class="$class_links" href="$links_urls.php">$title</a>
            </li>
        HTML;
    }
