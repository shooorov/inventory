<?php
$dir = new RecursiveDirectoryIterator(__DIR__ . '/resources/views');
$ite = new RecursiveIteratorIterator($dir);
$files = new RegexIterator($ite, '/.*\.php$/', RegexIterator::GET_MATCH);
$count = 0;
foreach($files as $file) {
    $path = $file[0];
    $content = file_get_contents($path);
    $new_content = str_replace("asset('public/", "asset('", $content);
    $new_content = str_replace('asset("public/', 'asset("', $new_content);
    $new_content = str_replace("url('public/", "url('", $new_content);
    $new_content = str_replace('url("public/', 'url("', $new_content);
    if($content !== $new_content) {
        file_put_contents($path, $new_content);
        $count++;
    }
}
echo "Updated $count files.\n";
