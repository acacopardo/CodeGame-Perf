<?php

namespace Generator;

class FileManager
{
    /**
     * @param string $path
     * @param array $outputs
     */
    public function save(string $path, array $outputs): void
    {
        if (file_exists($path)) {
            unlink($path);
        }

        file_put_contents($path, '<?php return ' . var_export($outputs, true) . ';');
    }
}