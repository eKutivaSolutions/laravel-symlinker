<?php
/**
 * Criado por Maizer Aly de O. Gomes para iget.
 * Email: maizer.gomes@gmail.com / maizer.gomes@ekutivasolutions / maizer.gomes@outlook.com
 * Usuário: Maizer
 * Data: 28/09/2016
 * Hora: 00:23
 */

namespace eKutivaSolutions\SymLinker\Services\Filesystem;


use Illuminate\Filesystem\Filesystem;

class MyFileSystem extends Filesystem
{
    /**
     * Create a hard link to the target file or directory.
     *
     * @param  string $target
     * @param  string $link
     *
     * @return void
     */
    public function link($target, $link)
    {
        if (!windows_os()) {
            return symlink($target, $link);
        }
        $mode = $this->isDirectory($target) ? 'J' : 'H';
        exec("mklink /{$mode} \"{$link}\" \"{$target}\"");
    }

}