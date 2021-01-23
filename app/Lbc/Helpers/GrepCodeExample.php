<?php

namespace App\Lbc\Helpers;

class GrepCodeExample
{
    static function get($exampleId)
    {
        $file = resource_path() . '/views/' . str_replace('lbc/components/','pages/components/',  \Request::path()) .'.blade.php';
        $fh = fopen($file, 'r');
        $continue = false;
        $i = 0;

        echo '<div class="code-example pb-1" data-taget="code-exmaple">
                <p class="text-right mb-0">
                    <a class="btn btn-outline-primary btn-sm" data-toggle="collapse" href="#example-' . $exampleId . '">
                        Show code
                    </a>
                </p>
            ';

        echo '<div class="collapse" id="example-' . $exampleId . '"><div class="code-example-container">';
        echo '<nav>
  <div class="nav nav-tabs" id="nav-tab-code-example-'. $exampleId .'">
    <a class="nav-item nav-link active" data-toggle="tab" href="#nav-code-'. $exampleId .'" role="tab" aria-selected="true">Blade code</a>
    <a class="nav-item nav-link data" data-toggle="tab" href="#nav-data-'. $exampleId .'" role="tab" aria-selected="false">Data</a>
  </div>
</nav><div class="tab-content pt-3 shadow" id="nav-tabContent">';
        while ($line = fgets($fh)) {
            if (strpos($line, 'example-start-' . $exampleId)) {
                $continue = true;
            }
            if (strpos($line, 'example-end-' . $exampleId) && $continue == true) {
                $continue = false;
            }

            if ($continue && !strpos($line, 'example-start-' . $exampleId)) {
                $i++;
                if (strpos($line, '@php') && $i == 1) {
                    echo '<div class="tab-pane fade data" id="nav-data-' . $exampleId . '" role="tabpanel"><pre class="prism-code mb-0 pb-3 pr-3 ">';
                } elseif ($i == 1) {
                    echo '<div class="tab-pane fade show active" id="nav-code-' . $exampleId . '" role="tabpanel"><pre class="prism-code mb-0 pb-3 pr-3 ">';
                }
                echo htmlspecialchars($line);

                if (strpos($line, '@endphp')) {
                    echo '</pre></div>';
                    echo '<div class="tab-pane fade code show active" id="nav-code-' . $exampleId . '" role="tabpanel"><pre class="prism-code mb-0 pb-3 pr-3 ">';
                }
            }
        }
        echo '</pre></div></div></div></div></div>';
        fclose($fh);
    }
}
