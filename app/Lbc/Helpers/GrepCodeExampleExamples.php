<?php

namespace App\Lbc\Helpers;

class GrepCodeExampleExamples
{
    static function get($exampleId)
    {
        $file = resource_path() . '/views/' . str_replace('examples/','pages/examples/',  \Request::path()) .'.blade.php';
        $fh = fopen($file, 'r');
        $continue = false;
        $i = 0;

        echo '<div class="bg-lighter py-5 border-top">';
        echo '<div class="container">';
        echo '<h3><i class="oi oi-code"></i> Template-Code in blade</h3>';
        echo '<pre class="prism-code mt-5 pb-3" style="margin-left:-10px">';
        while ($line = fgets($fh)) {
            if (strpos($line, 'example-start-' . $exampleId)) {
                $continue = true;
            }
            if (strpos($line, 'example-end-' . $exampleId) && $continue == true) {
                $continue = false;
            }

            if ($continue && !strpos($line, 'example-start-' . $exampleId)) {
                $i++;
                echo htmlspecialchars($line);
            }
        }
        echo '</pre>';
        echo '</div>';
        echo '</div>';
        fclose($fh);
    }
}
